@props(['mostSearchedCars'])

<section class="most-searched-section" style="padding: 60px 0;">
    <div class="container">
        <div style="background: white; border-radius: 12px; padding: 40px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
            <h2 style="font-size: 36px; margin-bottom: 30px; color: #333; font-weight: 700;">The most searched cars</h2>
            
            <!-- Tabs -->
            <div style="display: flex; gap: 30px; margin-bottom: 30px; border-bottom: 2px solid #e0e0e0;">
                <button onclick="showCarType('SUV')" id="tab-SUV" class="car-type-tab" style="background: none; border: none; padding: 10px 0; font-size: 16px; font-weight: 600; color: #333; cursor: pointer; border-bottom: 3px solid #ff6b35; position: relative; bottom: -2px;">SUV</button>
                <button onclick="showCarType('Hatchback')" id="tab-Hatchback" class="car-type-tab" style="background: none; border: none; padding: 10px 0; font-size: 16px; font-weight: 600; color: #666; cursor: pointer; border-bottom: 3px solid transparent; position: relative; bottom: -2px;">Hatchback</button>
                <button onclick="showCarType('Sedan')" id="tab-Sedan" class="car-type-tab" style="background: none; border: none; padding: 10px 0; font-size: 16px; font-weight: 600; color: #666; cursor: pointer; border-bottom: 3px solid transparent; position: relative; bottom: -2px;">Sedan</button>
            </div>
            
            <!-- Car Cards Container -->
            <div style="position: relative;">
                <div id="car-container-SUV" class="car-type-container" style="display: flex; flex-direction: row; gap: 20px; overflow-x: auto; overflow-y: hidden; padding: 20px 0; scroll-behavior: smooth; -webkit-overflow-scrolling: touch; scrollbar-width: none; -ms-overflow-style: none;">
                    @php
                        $suvCars = $mostSearchedCars->get('SUV', collect())->take(4);
                    @endphp
                    @forelse($suvCars as $car)
                        <div style="min-width: 320px; max-width: 320px; background: white; border-radius: 8px; overflow: hidden; border: 1px solid #E0E0E0; flex-shrink: 0;">
                            <div style="position: relative; height: 240px; overflow: hidden;">
                                <img src="{{ asset('storage/' . $car->image) }}" alt="{{ $car->name }}" style="width: 100%; height: 100%; object-fit: cover; object-position: center; display: block;">
                            </div>
                            <div style="padding: 20px;">
                                <h3 style="font-size: 18px; margin-bottom: 10px; color: #333; font-weight: 600;">{{ $car->name }}</h3>
                                @if($car->min_price && $car->max_price)
                                    <p style="font-size: 16px; font-weight: 600; color: #333; margin-bottom: 15px;">₹{{ number_format($car->min_price, 2) }} - {{ number_format($car->max_price, 2) }} Lakh*</p>
                                @elseif($car->price)
                                    <p style="font-size: 16px; font-weight: 600; color: #333; margin-bottom: 15px;">₹{{ number_format($car->price / 100000, 2) }} Lakh*</p>
                                @endif
                                <button style="width: 100%; padding: 10px; border: 2px solid #ff6b35; color: #ff6b35; background: white; border-radius: 5px; font-weight: 600; cursor: pointer; transition: all 0.3s;" onmouseover="this.style.background='#ff6b35'; this.style.color='white'" onmouseout="this.style.background='white'; this.style.color='#ff6b35'">View December Offers</button>
                            </div>
                        </div>
                    @empty
                        <div style="min-width: 100%; text-align: center; padding: 40px; color: #666;">
                            <p>No SUV cars available. Please add cars from admin panel.</p>
                        </div>
                    @endforelse
                </div>
                
                <div id="car-container-Hatchback" class="car-type-container" style="display: none; flex-direction: row; gap: 20px; overflow-x: auto; overflow-y: hidden; padding: 20px 0; scroll-behavior: smooth; -webkit-overflow-scrolling: touch; scrollbar-width: none; -ms-overflow-style: none;">
                    @php
                        $hatchbackCars = $mostSearchedCars->get('Hatchback', collect())->take(4);
                    @endphp
                    @forelse($hatchbackCars as $car)
                        <div style="min-width: 320px; max-width: 320px; background: white; border-radius: 8px; overflow: hidden; border: 1px solid #E0E0E0; flex-shrink: 0;">
                            <div style="position: relative; height: 240px; overflow: hidden;">
                                <img src="{{ asset('storage/' . $car->image) }}" alt="{{ $car->name }}" style="width: 100%; height: 100%; object-fit: cover; object-position: center; display: block;">
                            </div>
                            <div style="padding: 20px;">
                                <h3 style="font-size: 18px; margin-bottom: 10px; color: #333; font-weight: 600;">{{ $car->name }}</h3>
                                @if($car->min_price && $car->max_price)
                                    <p style="font-size: 16px; font-weight: 600; color: #333; margin-bottom: 15px;">₹{{ number_format($car->min_price, 2) }} - {{ number_format($car->max_price, 2) }} Lakh*</p>
                                @elseif($car->price)
                                    <p style="font-size: 16px; font-weight: 600; color: #333; margin-bottom: 15px;">₹{{ number_format($car->price / 100000, 2) }} Lakh*</p>
                                @endif
                                <button style="width: 100%; padding: 10px; border: 2px solid #ff6b35; color: #ff6b35; background: white; border-radius: 5px; font-weight: 600; cursor: pointer; transition: all 0.3s;" onmouseover="this.style.background='#ff6b35'; this.style.color='white'" onmouseout="this.style.background='white'; this.style.color='#ff6b35'">View December Offers</button>
                            </div>
                        </div>
                    @empty
                        <div style="min-width: 100%; text-align: center; padding: 40px; color: #666;">
                            <p>No Hatchback cars available. Please add cars from admin panel.</p>
                        </div>
                    @endforelse
                </div>
                
                <div id="car-container-Sedan" class="car-type-container" style="display: none; flex-direction: row; gap: 20px; overflow-x: auto; overflow-y: hidden; padding: 20px 0; scroll-behavior: smooth; -webkit-overflow-scrolling: touch; scrollbar-width: none; -ms-overflow-style: none;">
                    @php
                        $sedanCars = $mostSearchedCars->get('Sedan', collect())->take(4);
                    @endphp
                    @forelse($sedanCars as $car)
                        <div style="min-width: 320px; max-width: 320px; background: white; border-radius: 8px; overflow: hidden; border: 1px solid #E0E0E0; flex-shrink: 0;">
                            <div style="position: relative; height: 240px; overflow: hidden;">
                                <img src="{{ asset('storage/' . $car->image) }}" alt="{{ $car->name }}" style="width: 100%; height: 100%; object-fit: cover; object-position: center; display: block;">
                            </div>
                            <div style="padding: 20px;">
                                <h3 style="font-size: 18px; margin-bottom: 10px; color: #333; font-weight: 600;">{{ $car->name }}</h3>
                                @if($car->min_price && $car->max_price)
                                    <p style="font-size: 16px; font-weight: 600; color: #333; margin-bottom: 15px;">₹{{ number_format($car->min_price, 2) }} - {{ number_format($car->max_price, 2) }} Lakh*</p>
                                @elseif($car->price)
                                    <p style="font-size: 16px; font-weight: 600; color: #333; margin-bottom: 15px;">₹{{ number_format($car->price / 100000, 2) }} Lakh*</p>
                                @endif
                                <button style="width: 100%; padding: 10px; border: 2px solid #ff6b35; color: #ff6b35; background: white; border-radius: 5px; font-weight: 600; cursor: pointer; transition: all 0.3s;" onmouseover="this.style.background='#ff6b35'; this.style.color='white'" onmouseout="this.style.background='white'; this.style.color='#ff6b35'">View December Offers</button>
                            </div>
                        </div>
                    @empty
                        <div style="min-width: 100%; text-align: center; padding: 40px; color: #666;">
                            <p>No Sedan cars available. Please add cars from admin panel.</p>
                        </div>
                    @endforelse
                </div>
                
                <!-- Scroll Arrow -->
                <button onclick="scrollCars('right')" style="position: absolute; right: -20px; top: 50%; transform: translateY(-50%); background: white; border: none; width: 40px; height: 40px; border-radius: 50%; box-shadow: 0 2px 8px rgba(0,0,0,0.2); cursor: pointer; display: flex; align-items: center; justify-content: center; z-index: 10;">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.5 15L12.5 10L7.5 5" stroke="#333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
            
            <!-- View All Link -->
            <div style="margin-top: 30px;">
                <a href="#" style="display: inline-flex; align-items: center; gap: 8px; color: #ff6b35; text-decoration: none; font-weight: 600; font-size: 16px;">
                    View All SUV Cars
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.5 15L12.5 10L7.5 5" stroke="#ff6b35" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<script>
    function showCarType(type) {
        // Hide all containers
        document.querySelectorAll('.car-type-container').forEach(container => {
            container.style.display = 'none';
        });
        
        // Show selected container
        const container = document.getElementById('car-container-' + type);
        container.style.display = 'flex';
        container.style.flexDirection = 'row';
        
        // Update tabs
        document.querySelectorAll('.car-type-tab').forEach(tab => {
            tab.style.color = '#666';
            tab.style.borderBottomColor = 'transparent';
        });
        
        document.getElementById('tab-' + type).style.color = '#333';
        document.getElementById('tab-' + type).style.borderBottomColor = '#ff6b35';
    }
    
    function scrollCars(direction) {
        const activeContainer = document.querySelector('.car-type-container[style*="flex"]');
        if (activeContainer) {
            const scrollAmount = 300;
            activeContainer.scrollBy({
                left: direction === 'right' ? scrollAmount : -scrollAmount,
                behavior: 'smooth'
            });
        }
    }
</script>

