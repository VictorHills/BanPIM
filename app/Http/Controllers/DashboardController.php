<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\Product;

class DashboardController extends Controller
{
    public function index()
    {
        $user_id = auth()->user()->id;
        $numProducts = Product::where('created_by', $user_id)->count();
        $numMedia = Media::where('created_by', $user_id)->count();
        $productViews = Product::where('created_by', $user_id)->sum('views');
        $numDownloads = Product::where('created_by', $user_id)->sum('downloads');

        return view('dashboard', compact('numProducts', 'numMedia', 'productViews', 'numDownloads'));
    }
}
