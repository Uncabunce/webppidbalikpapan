<?php
namespace App\Http\Controllers;

use App\Models\News;

class NewsPublicController extends Controller
{
    // Daftar berita publik
    public function index()
    {
        $news = News::published()
            ->latest('published_at')
            ->paginate(9);

        return view('news.index', compact('news'));
    }

    // Detail berita berdasarkan slug
    public function show(string $slug)
    {
        $news = News::published()
            ->where('slug', $slug)
            ->firstOrFail();

        // Berita terkait (kategori sama)
        $related = News::published()
            ->where('category', $news->category)
            ->where('id', '!=', $news->id)
            ->latest('published_at')
            ->limit(3)
            ->get();

        return view('news.show', compact('news', 'related'));
    }
}