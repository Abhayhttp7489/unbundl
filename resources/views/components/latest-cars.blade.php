@props(['latestCars'])

<section class="latest-cars-section" style="padding: 60px 0;">
    <div class="container">
        <div class="latest-cars-container" style="background: white; border-radius: 12px; padding: 40px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
            <h2 class="latest-cars-heading" style="font-size: 36px; margin-bottom: 40px; color: #333; font-weight: 700;">Latest cars</h2>
            
            <!-- Latest Cars Container -->
            <div class="latest-cars-wrapper" style="position: relative;">
                <!-- Left Scroll Arrow -->
                <button onclick="scrollLatestCars('left')" class="scroll-arrow-left" style="position: absolute; left: -20px; top: 50%; transform: translateY(-50%); background: white; border: none; width: 40px; height: 40px; border-radius: 50%; box-shadow: 0 2px 8px rgba(0,0,0,0.2); cursor: pointer; display: flex; align-items: center; justify-content: center; z-index: 10;">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.5 15L7.5 10L12.5 5" stroke="#333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                
                <div id="latest-cars-container" style="display: flex; flex-direction: row; gap: 20px; overflow-x: auto; overflow-y: hidden; padding: 20px 0; scroll-behavior: smooth; -webkit-overflow-scrolling: touch; scrollbar-width: none; -ms-overflow-style: none;">
                    @php
                        $latestCarsLimited = $latestCars->take(4);
                    @endphp
                    @forelse($latestCarsLimited as $car)
                        <div class="latest-car-card" style="min-width: 320px; max-width: 320px; background: white; border-radius: 8px; overflow: hidden; border: 1px solid #E0E0E0; flex-shrink: 0;">
                            <div class="latest-car-image-container" style="position: relative; height: 240px; overflow: hidden;">
                                <img src="{{ asset('storage/' . $car->image) }}" alt="{{ $car->name }}" style="width: 100%; height: 100%; object-fit: cover; object-position: center; display: block;">
                                @if($car->launch_date)
                                    <div class="launch-date-pill" style="position: absolute; top: 15px; left: 10px; background: white; padding: 4px 10px; border-radius: 15px; font-size: 10px; font-weight: 600; color: #333; z-index: 2; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                                        LAUNCHED ON: {{ strtoupper($car->launch_date->format('M d, Y')) }}
                                    </div>
                                @endif
                            </div>
                            <div class="latest-car-card-content" style="padding: 20px;">
                                <h3 class="latest-car-name" style="font-size: 18px; margin-bottom: 10px; color: #333; font-weight: 600;">{{ $car->name }}</h3>
                                @if($car->min_price && $car->max_price)
                                    <p class="latest-car-price" style="font-size: 16px; font-weight: 600; color: #333; margin-bottom: 15px;">₹{{ number_format($car->min_price, 2) }} - {{ number_format($car->max_price, 2) }} Lakh*</p>
                                @elseif($car->price)
                                    <p class="latest-car-price" style="font-size: 16px; font-weight: 600; color: #333; margin-bottom: 15px;">₹{{ number_format($car->price / 100000, 2) }} Lakh*</p>
                                @endif
                                <button class="latest-car-button" style="width: 100%; padding: 10px; border: 2px solid #ff6b35; color: #ff6b35; background: white; border-radius: 5px; font-weight: 600; cursor: pointer; transition: all 0.3s;" onmouseover="this.style.background='#ff6b35'; this.style.color='white'" onmouseout="this.style.background='white'; this.style.color='#ff6b35'">View December Offers</button>
                            </div>
                        </div>
                    @empty
                        <div style="min-width: 100%; text-align: center; padding: 40px; color: #666;">
                            <p>No latest cars available. Please add cars from admin panel.</p>
                        </div>
                    @endforelse
                </div>
                
                <!-- Right Scroll Arrow -->
                <button onclick="scrollLatestCars('right')" class="scroll-arrow-right" style="position: absolute; right: -20px; top: 50%; transform: translateY(-50%); background: white; border: none; width: 40px; height: 40px; border-radius: 50%; box-shadow: 0 2px 8px rgba(0,0,0,0.2); cursor: pointer; display: flex; align-items: center; justify-content: center; z-index: 10;">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.5 15L12.5 10L7.5 5" stroke="#333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
            
            <!-- View All Link -->
            <div class="latest-view-all-link" style="margin-top: 30px;">
                <a href="#" style="display: inline-flex; align-items: center; gap: 8px; color: #ff6b35; text-decoration: none; font-weight: 600; font-size: 16px;">
                    View All Latest Cars
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.5 15L12.5 10L7.5 5" stroke="#ff6b35" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<style>
    /* Tablet Styles (max-width: 1024px) */
    @media (max-width: 1024px) {
        .latest-cars-section {
            padding: 40px 0 !important;
        }
        .latest-cars-container {
            padding: 30px !important;
        }
        .latest-cars-heading {
            font-size: 30px !important;
            margin-bottom: 30px !important;
        }
        .latest-car-card {
            min-width: 280px !important;
            max-width: 280px !important;
        }
        .latest-car-image-container {
            height: 200px !important;
        }
        .launch-date-pill {
            font-size: 9px !important;
            padding: 3px 8px !important;
            top: 12px !important;
            left: 8px !important;
        }
        .latest-car-card-content {
            padding: 15px !important;
        }
        .latest-car-name {
            font-size: 16px !important;
        }
        .latest-car-price {
            font-size: 14px !important;
        }
        .latest-car-button {
            padding: 8px !important;
            font-size: 14px !important;
        }
        .scroll-arrow-left,
        .scroll-arrow-right {
            width: 35px !important;
            height: 35px !important;
        }
        .scroll-arrow-left {
            left: -15px !important;
        }
        .scroll-arrow-right {
            right: -15px !important;
        }
    }

    /* Mobile Styles (max-width: 768px) */
    @media (max-width: 768px) {
        .latest-cars-section {
            padding: 30px 0 !important;
        }
        .latest-cars-container {
            padding: 20px !important;
            border-radius: 8px !important;
        }
        .latest-cars-heading {
            font-size: 24px !important;
            margin-bottom: 25px !important;
        }
        .latest-car-card {
            min-width: 260px !important;
            max-width: 260px !important;
        }
        .latest-car-image-container {
            height: 180px !important;
        }
        .launch-date-pill {
            font-size: 8px !important;
            padding: 3px 6px !important;
            top: 10px !important;
            left: 8px !important;
        }
        .latest-car-card-content {
            padding: 15px !important;
        }
        .latest-car-name {
            font-size: 15px !important;
            margin-bottom: 8px !important;
        }
        .latest-car-price {
            font-size: 13px !important;
            margin-bottom: 12px !important;
        }
        .latest-car-button {
            padding: 8px !important;
            font-size: 13px !important;
        }
        .scroll-arrow-left,
        .scroll-arrow-right {
            display: none !important;
        }
        .latest-view-all-link {
            margin-top: 20px !important;
        }
        .latest-view-all-link a {
            font-size: 14px !important;
        }
    }

    /* Small Mobile Styles (max-width: 480px) */
    @media (max-width: 480px) {
        .latest-cars-section {
            padding: 20px 0 !important;
        }
        .latest-cars-container {
            padding: 15px !important;
            border-radius: 6px !important;
        }
        .latest-cars-heading {
            font-size: 20px !important;
            margin-bottom: 20px !important;
        }
        .latest-car-card {
            min-width: 240px !important;
            max-width: 240px !important;
        }
        .latest-car-image-container {
            height: 160px !important;
        }
        .launch-date-pill {
            font-size: 7px !important;
            padding: 2px 5px !important;
            top: 8px !important;
            left: 6px !important;
        }
        .latest-car-card-content {
            padding: 12px !important;
        }
        .latest-car-name {
            font-size: 14px !important;
            margin-bottom: 6px !important;
        }
        .latest-car-price {
            font-size: 12px !important;
            margin-bottom: 10px !important;
        }
        .latest-car-button {
            padding: 8px !important;
            font-size: 12px !important;
        }
        .latest-view-all-link {
            margin-top: 15px !important;
        }
        .latest-view-all-link a {
            font-size: 12px !important;
        }
    }
</style>

<script>
    function scrollLatestCars(direction) {
        const container = document.getElementById('latest-cars-container');
        if (container) {
            const scrollAmount = 300;
            container.scrollBy({
                left: direction === 'right' ? scrollAmount : -scrollAmount,
                behavior: 'smooth'
            });
        }
    }
</script>

