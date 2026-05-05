<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;

class DashboardController extends Controller
{
    public function index()
    {
        $totalNews     = News::count();
        $publishedNews = News::where('status', 'published')->count();
        $draftNews     = News::where('status', 'draft')->count();

        // PostgreSQL compatible
        $thisMonthNews = News::whereRaw(
            'EXTRACT(MONTH FROM created_at) = ? AND EXTRACT(YEAR FROM created_at) = ?',
            [now()->month, now()->year]
        )->count();

        $recentNews = News::latest('created_at')->limit(10)->get();

        return view('admin.dashboard', compact(
            'totalNews',
            'publishedNews',
            'draftNews',
            'thisMonthNews',
            'recentNews'
        ));
    }
}