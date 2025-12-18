<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['mostSearchedCars']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['mostSearchedCars']); ?>
<?php foreach (array_filter((['mostSearchedCars']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<section class="most-searched-section" style="padding: 60px 0;">
    <div class="container">
        <div class="most-searched-container" style="background: white; border-radius: 12px; padding: 40px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
            <h2 class="most-searched-heading" style="font-size: 36px; margin-bottom: 30px; color: #333; font-weight: 700;">The most searched cars</h2>
            
            <!-- Tabs -->
            <div class="car-tabs" style="display: flex; gap: 30px; margin-bottom: 30px; border-bottom: 2px solid #e0e0e0;">
                <button onclick="showCarType('SUV')" id="tab-SUV" class="car-type-tab" style="background: none; border: none; padding: 10px 0; font-size: 16px; font-weight: 600; color: #333; cursor: pointer; border-bottom: 3px solid #ff6b35; position: relative; bottom: -2px;">SUV</button>
                <button onclick="showCarType('Hatchback')" id="tab-Hatchback" class="car-type-tab" style="background: none; border: none; padding: 10px 0; font-size: 16px; font-weight: 600; color: #666; cursor: pointer; border-bottom: 3px solid transparent; position: relative; bottom: -2px;">Hatchback</button>
                <button onclick="showCarType('Sedan')" id="tab-Sedan" class="car-type-tab" style="background: none; border: none; padding: 10px 0; font-size: 16px; font-weight: 600; color: #666; cursor: pointer; border-bottom: 3px solid transparent; position: relative; bottom: -2px;">Sedan</button>
            </div>
            
            <!-- Car Cards Container -->
            <div style="position: relative;">
                <div id="car-container-SUV" class="car-type-container" style="display: flex; flex-direction: row; gap: 20px; overflow-x: auto; overflow-y: hidden; padding: 20px 0; scroll-behavior: smooth; -webkit-overflow-scrolling: touch; scrollbar-width: none; -ms-overflow-style: none;">
                    <?php
                        $suvCars = $mostSearchedCars->get('SUV', collect())->take(4);
                    ?>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $suvCars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div class="car-card" style="min-width: 320px; max-width: 320px; background: white; border-radius: 8px; overflow: hidden; border: 1px solid #E0E0E0; flex-shrink: 0;">
                            <div class="car-image-container" style="position: relative; height: 240px; overflow: hidden;">
                                <img src="<?php echo e(asset('storage/' . $car->image)); ?>" alt="<?php echo e($car->name); ?>" style="width: 100%; height: 100%; object-fit: cover; object-position: center; display: block;">
                            </div>
                            <div class="car-card-content" style="padding: 20px;">
                                <h3 class="car-name" style="font-size: 18px; margin-bottom: 10px; color: #333; font-weight: 600;"><?php echo e($car->name); ?></h3>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($car->min_price && $car->max_price): ?>
                                    <p class="car-price" style="font-size: 16px; font-weight: 600; color: #333; margin-bottom: 15px;">₹<?php echo e(number_format($car->min_price, 2)); ?> - <?php echo e(number_format($car->max_price, 2)); ?> Lakh*</p>
                                <?php elseif($car->price): ?>
                                    <p class="car-price" style="font-size: 16px; font-weight: 600; color: #333; margin-bottom: 15px;">₹<?php echo e(number_format($car->price / 100000, 2)); ?> Lakh*</p>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                <button class="car-button" style="width: 100%; padding: 10px; border: 2px solid #ff6b35; color: #ff6b35; background: white; border-radius: 5px; font-weight: 600; cursor: pointer; transition: all 0.3s;" onmouseover="this.style.background='#ff6b35'; this.style.color='white'" onmouseout="this.style.background='white'; this.style.color='#ff6b35'">View December Offers</button>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <div style="min-width: 100%; text-align: center; padding: 40px; color: #666;">
                            <p>No SUV cars available. Please add cars from admin panel.</p>
                        </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>
                
                <div id="car-container-Hatchback" class="car-type-container" style="display: none; flex-direction: row; gap: 20px; overflow-x: auto; overflow-y: hidden; padding: 20px 0; scroll-behavior: smooth; -webkit-overflow-scrolling: touch; scrollbar-width: none; -ms-overflow-style: none;">
                    <?php
                        $hatchbackCars = $mostSearchedCars->get('Hatchback', collect())->take(4);
                    ?>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $hatchbackCars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div class="car-card" style="min-width: 320px; max-width: 320px; background: white; border-radius: 8px; overflow: hidden; border: 1px solid #E0E0E0; flex-shrink: 0;">
                            <div class="car-image-container" style="position: relative; height: 240px; overflow: hidden;">
                                <img src="<?php echo e(asset('storage/' . $car->image)); ?>" alt="<?php echo e($car->name); ?>" style="width: 100%; height: 100%; object-fit: cover; object-position: center; display: block;">
                            </div>
                            <div class="car-card-content" style="padding: 20px;">
                                <h3 class="car-name" style="font-size: 18px; margin-bottom: 10px; color: #333; font-weight: 600;"><?php echo e($car->name); ?></h3>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($car->min_price && $car->max_price): ?>
                                    <p class="car-price" style="font-size: 16px; font-weight: 600; color: #333; margin-bottom: 15px;">₹<?php echo e(number_format($car->min_price, 2)); ?> - <?php echo e(number_format($car->max_price, 2)); ?> Lakh*</p>
                                <?php elseif($car->price): ?>
                                    <p class="car-price" style="font-size: 16px; font-weight: 600; color: #333; margin-bottom: 15px;">₹<?php echo e(number_format($car->price / 100000, 2)); ?> Lakh*</p>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                <button class="car-button" style="width: 100%; padding: 10px; border: 2px solid #ff6b35; color: #ff6b35; background: white; border-radius: 5px; font-weight: 600; cursor: pointer; transition: all 0.3s;" onmouseover="this.style.background='#ff6b35'; this.style.color='white'" onmouseout="this.style.background='white'; this.style.color='#ff6b35'">View December Offers</button>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <div style="min-width: 100%; text-align: center; padding: 40px; color: #666;">
                            <p>No Hatchback cars available. Please add cars from admin panel.</p>
                        </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>
                
                <div id="car-container-Sedan" class="car-type-container" style="display: none; flex-direction: row; gap: 20px; overflow-x: auto; overflow-y: hidden; padding: 20px 0; scroll-behavior: smooth; -webkit-overflow-scrolling: touch; scrollbar-width: none; -ms-overflow-style: none;">
                    <?php
                        $sedanCars = $mostSearchedCars->get('Sedan', collect())->take(4);
                    ?>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $sedanCars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div class="car-card" style="min-width: 320px; max-width: 320px; background: white; border-radius: 8px; overflow: hidden; border: 1px solid #E0E0E0; flex-shrink: 0;">
                            <div class="car-image-container" style="position: relative; height: 240px; overflow: hidden;">
                                <img src="<?php echo e(asset('storage/' . $car->image)); ?>" alt="<?php echo e($car->name); ?>" style="width: 100%; height: 100%; object-fit: cover; object-position: center; display: block;">
                            </div>
                            <div class="car-card-content" style="padding: 20px;">
                                <h3 class="car-name" style="font-size: 18px; margin-bottom: 10px; color: #333; font-weight: 600;"><?php echo e($car->name); ?></h3>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($car->min_price && $car->max_price): ?>
                                    <p class="car-price" style="font-size: 16px; font-weight: 600; color: #333; margin-bottom: 15px;">₹<?php echo e(number_format($car->min_price, 2)); ?> - <?php echo e(number_format($car->max_price, 2)); ?> Lakh*</p>
                                <?php elseif($car->price): ?>
                                    <p class="car-price" style="font-size: 16px; font-weight: 600; color: #333; margin-bottom: 15px;">₹<?php echo e(number_format($car->price / 100000, 2)); ?> Lakh*</p>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                <button class="car-button" style="width: 100%; padding: 10px; border: 2px solid #ff6b35; color: #ff6b35; background: white; border-radius: 5px; font-weight: 600; cursor: pointer; transition: all 0.3s;" onmouseover="this.style.background='#ff6b35'; this.style.color='white'" onmouseout="this.style.background='white'; this.style.color='#ff6b35'">View December Offers</button>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <div style="min-width: 100%; text-align: center; padding: 40px; color: #666;">
                            <p>No Sedan cars available. Please add cars from admin panel.</p>
                        </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>
                
                <!-- Scroll Arrow -->
                <button onclick="scrollCars('right')" class="scroll-arrow-right" style="position: absolute; right: -20px; top: 50%; transform: translateY(-50%); background: white; border: none; width: 40px; height: 40px; border-radius: 50%; box-shadow: 0 2px 8px rgba(0,0,0,0.2); cursor: pointer; display: flex; align-items: center; justify-content: center; z-index: 10;">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.5 15L12.5 10L7.5 5" stroke="#333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
            
            <!-- View All Link -->
            <div class="view-all-link" style="margin-top: 30px;">
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

<style>
    /* Tablet Styles (max-width: 1024px) */
    @media (max-width: 1024px) {
        .most-searched-section {
            padding: 40px 0 !important;
        }
        .most-searched-container {
            padding: 30px !important;
        }
        .most-searched-heading {
            font-size: 30px !important;
            margin-bottom: 25px !important;
        }
        .car-tabs {
            gap: 20px !important;
            margin-bottom: 25px !important;
        }
        .car-type-tab {
            font-size: 15px !important;
        }
        .car-card {
            min-width: 280px !important;
            max-width: 280px !important;
        }
        .car-image-container {
            height: 200px !important;
        }
        .car-card-content {
            padding: 15px !important;
        }
        .car-name {
            font-size: 16px !important;
        }
        .car-price {
            font-size: 14px !important;
        }
        .car-button {
            padding: 8px !important;
            font-size: 14px !important;
        }
        .scroll-arrow-right {
            right: -15px !important;
            width: 35px !important;
            height: 35px !important;
        }
    }

    /* Mobile Styles (max-width: 768px) */
    @media (max-width: 768px) {
        .most-searched-section {
            padding: 30px 0 !important;
        }
        .most-searched-container {
            padding: 20px !important;
            border-radius: 8px !important;
        }
        .most-searched-heading {
            font-size: 24px !important;
            margin-bottom: 20px !important;
        }
        .car-tabs {
            gap: 15px !important;
            margin-bottom: 20px !important;
            overflow-x: auto !important;
            -webkit-overflow-scrolling: touch !important;
        }
        .car-type-tab {
            font-size: 14px !important;
            padding: 8px 0 !important;
            white-space: nowrap;
        }
        .car-card {
            min-width: 260px !important;
            max-width: 260px !important;
        }
        .car-image-container {
            height: 180px !important;
        }
        .car-card-content {
            padding: 15px !important;
        }
        .car-name {
            font-size: 15px !important;
            margin-bottom: 8px !important;
        }
        .car-price {
            font-size: 13px !important;
            margin-bottom: 12px !important;
        }
        .car-button {
            padding: 8px !important;
            font-size: 13px !important;
        }
        .scroll-arrow-right {
            display: none !important;
        }
        .view-all-link {
            margin-top: 20px !important;
        }
        .view-all-link a {
            font-size: 14px !important;
        }
    }

    /* Small Mobile Styles (max-width: 480px) */
    @media (max-width: 480px) {
        .most-searched-section {
            padding: 20px 0 !important;
        }
        .most-searched-container {
            padding: 15px !important;
            border-radius: 6px !important;
        }
        .most-searched-heading {
            font-size: 20px !important;
            margin-bottom: 15px !important;
        }
        .car-tabs {
            gap: 10px !important;
            margin-bottom: 15px !important;
        }
        .car-type-tab {
            font-size: 12px !important;
            padding: 6px 0 !important;
        }
        .car-card {
            min-width: 240px !important;
            max-width: 240px !important;
        }
        .car-image-container {
            height: 160px !important;
        }
        .car-card-content {
            padding: 12px !important;
        }
        .car-name {
            font-size: 14px !important;
            margin-bottom: 6px !important;
        }
        .car-price {
            font-size: 12px !important;
            margin-bottom: 10px !important;
        }
        .car-button {
            padding: 8px !important;
            font-size: 12px !important;
        }
        .view-all-link {
            margin-top: 15px !important;
        }
        .view-all-link a {
            font-size: 12px !important;
        }
    }
</style>

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

<?php /**PATH D:\unbundl\resources\views/components/most-searched.blade.php ENDPATH**/ ?>