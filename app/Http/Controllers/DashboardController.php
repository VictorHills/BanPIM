<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\Product;

class DashboardController extends Controller
{
    public function index()
    {
        $numProducts = Product::count();
        $numMedia = Media::count();
        $productViews = Product::sum('views');
        $numDownloads = Product::sum('downloads');

        return view('dashboard', compact('numProducts', 'numMedia', 'productViews', 'numDownloads'));
    }
}
