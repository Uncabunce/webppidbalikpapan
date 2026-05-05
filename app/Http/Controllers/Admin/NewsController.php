<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    // Daftar berita
    public function index(Request $request)
    {
        $query = News::latest('created_at');

        // Search - ilike untuk PostgreSQL (case insensitive)
        if ($request->filled('search')) {
            $query->where('title', 'ilike', '%' . $request->search . '%');
        }

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        $news = $query->paginate(15)->withQueryString();

        return view('admin.news.index', compact('news'));
    }

    // Form tambah
    public function create()
    {
        return view('admin.news.form');
    }

    // Simpan berita baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'            => 'required|string|max:255',
            'slug'             => 'required|string|max:255|unique:news,slug',
            'content'          => 'required|string',
            'excerpt'          => 'nullable|string|max:500',
            'category'         => 'nullable|string|max:100',
            'tags'             => 'nullable|string|max:255',
            'status'           => 'required|in:draft,published',
            'published_at'     => 'nullable|date',
            'meta_title'       => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
            'thumbnail'        => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        // Auto excerpt kalau kosong
        if (empty($validated['excerpt'])) {
            $validated['excerpt'] = Str::limit(strip_tags($validated['content']), 200);
        }

        // Set published_at otomatis kalau status published
        if ($validated['status'] === 'published' && empty($validated['published_at'])) {
            $validated['published_at'] = now();
        }

        // Upload thumbnail
        if ($request->hasFile('thumbnail')) {
            $validated['thumbnail'] = $request->file('thumbnail')
                ->store('news/thumbnails', 'public');
        }

        News::create($validated);

        return redirect()->route('admin.news.index')
            ->with('success', 'Berita berhasil ditambahkan!');
    }

    // Redirect show ke edit
    public function show(News $news)
    {
        return redirect()->route('admin.news.edit', $news->id);
    }

    // Form edit
    public function edit(News $news)
    {
        return view('admin.news.form', compact('news'));
    }

    // Update berita
    public function update(Request $request, News $news)
    {
        $validated = $request->validate([
            'title'            => 'required|string|max:255',
            'slug'             => 'required|string|max:255|unique:news,slug,' . $news->id,
            'content'          => 'required|string',
            'excerpt'          => 'nullable|string|max:500',
            'category'         => 'nullable|string|max:100',
            'tags'             => 'nullable|string|max:255',
            'status'           => 'required|in:draft,published',
            'published_at'     => 'nullable|date',
            'meta_title'       => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
            'thumbnail'        => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        // Auto excerpt
        if (empty($validated['excerpt'])) {
            $validated['excerpt'] = Str::limit(strip_tags($validated['content']), 200);
        }

        // Set published_at kalau baru dipublish
        if ($validated['status'] === 'published' && empty($validated['published_at'])) {
            $validated['published_at'] = $news->published_at ?? now();
        }

        // Hapus thumbnail kalau diminta
        if ($request->boolean('remove_thumbnail') && $news->thumbnail) {
            Storage::disk('public')->delete($news->thumbnail);
            $validated['thumbnail'] = null;
        }

        // Upload thumbnail baru
        if ($request->hasFile('thumbnail')) {
            // Hapus yang lama
            if ($news->thumbnail) {
                Storage::disk('public')->delete($news->thumbnail);
            }
            $validated['thumbnail'] = $request->file('thumbnail')
                ->store('news/thumbnails', 'public');
        }

        $news->update($validated);

        return redirect()->route('admin.news.index')
            ->with('success', 'Berita berhasil diperbarui!');
    }

    // Hapus berita
    public function destroy(News $news)
    {
        // Hapus thumbnail dari storage
        if ($news->thumbnail) {
            Storage::disk('public')->delete($news->thumbnail);
        }

        $news->delete();

        return back()->with('success', 'Berita berhasil dihapus.');
    }
}