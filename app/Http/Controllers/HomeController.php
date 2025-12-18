<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Car;
use App\Models\Footer;
use App\Models\Header;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $header = Header::getActive();
        $banners = Banner::getActive() ?? collect();
        
        // Get most searched cars grouped by type
        $mostSearchedCars = Car::where('is_most_searched', true)
            ->where('is_active', true)
            ->latest()
            ->get()
            ->groupBy('type');
        
        // Get latest cars
        $latestCars = Car::getLatest() ?? collect();
        $footer = Footer::getActive();

        return view('home', compact('header', 'banners', 'mostSearchedCars', 'latestCars', 'footer'));
    }
}

