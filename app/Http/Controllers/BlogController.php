<?php

namespace App\Http\Controllers;

use App\Models\Booklet;
use App\Models\BookletQuestion;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {
        $blogs = BookletQuestion::with('booklet')->latest()->first();
        $blogsAll = BookletQuestion::with('booklet')->latest()->get();
        return view('blogs', compact('blogs','blogsAll'));
    }
}
