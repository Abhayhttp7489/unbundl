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
        @media (max-width: 768px) {
            .header > div > div {
                flex-direction: column;
                gap: 15px;
            }
            .header > div > div > div:nth-child(2) {
                max-width: 100%;
                width: 100%;
            }
            .banner-section > div > div {
                flex-direction: column;
                height: auto;
                padding: 20px;
            }
            .banner-section h2 {
                font-size: 28px !important;
            }
            .most-searched-section > div,
            .latest-cars-section > div {
                grid-template-columns: 1fr;
            }
            .footer > div > div {
                grid-template-columns: 1fr;
            }
            .footer .container > div:first-child > div {
                grid-template-columns: repeat(2, 1fr) !important;
            }
            .footer .container > div:nth-child(2) > div {
                grid-template-columns: 1fr !important;
            }
            .footer .container > div:last-child {
                flex-direction: column;
                gap: 15px;
                text-align: center;
            }
        }
    </style>
@endsection
