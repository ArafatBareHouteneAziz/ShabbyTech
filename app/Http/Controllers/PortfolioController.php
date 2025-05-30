<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::orderBy('order')->get();
        $testimonials = Testimonial::where('is_active', true)->orderBy('order')->get();

        return view('portfolio', compact('portfolios', 'testimonials'));
    }

    //
}
