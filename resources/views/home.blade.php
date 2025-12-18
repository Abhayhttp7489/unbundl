@extends('layouts.app')

@section('content')
    <x-header />
    
    <x-banner :banners="$banners" />
    
    <x-flash-message />
    
    <x-car-inquiry-form />
    
    <x-most-searched :mostSearchedCars="$mostSearchedCars" />
    
    <x-latest-cars :latestCars="$latestCars" />
    
    <x-footer :footer="$footer" />

    <style>
        .search-input::placeholder {
            color: #666 !important;
        }
        /* Hide scrollbar for car containers */
        .car-type-container::-webkit-scrollbar,
        #latest-cars-container::-webkit-scrollbar {
            display: none;
        }
        .car-type-container,
        #latest-cars-container {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
@endsection
