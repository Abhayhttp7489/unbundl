<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['latestCars']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['latestCars']); ?>
<?php foreach (array_filter((['latestCars']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<section class="latest-cars-section" style="padding: 60px 0;">
    <div class="container">
        <div style="background: white; border-radius: 12px; padding: 40px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
            <h2 style="font-size: 36px; margin-bottom: 40px; color: #333; font-weight: 700;">Latest cars</h2>
            
            <!-- Latest Cars Container -->
            <div style="position: relative;">
                <!-- Left Scroll Arrow -->
                <button onclick="scrollLatestCars('left')" style="position: absolute; left: -20px; top: 50%; transform: translateY(-50%); background: white; border: none; width: 40px; height: 40px; border-radius: 50%; box-shadow: 0 2px 8px rgba(0,0,0,0.2); cursor: pointer; display: flex; align-items: center; justify-content: center; z-index: 10;">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.5 15L7.5 10L12.5 5" stroke="#333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                
                <div id="latest-cars-container" style="display: flex; flex-direction: row; gap: 20px; overflow-x: auto; overflow-y: hidden; padding: 20px 0; scroll-behavior: smooth; -webkit-overflow-scrolling: touch; scrollbar-width: none; -ms-overflow-style: none;">
                    <?php
                        $latestCarsLimited = $latestCars->take(4);
                    ?>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $latestCarsLimited; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div style="min-width: 320px; max-width: 320px; background: white; border-radius: 8px; overflow: hidden; border: 1px solid #E0E0E0; flex-shrink: 0;">
                            <div style="position: relative; height: 240px; overflow: hidden;">
                                <img src="<?php echo e(asset('storage/' . $car->image)); ?>" alt="<?php echo e($car->name); ?>" style="width: 100%; height: 100%; object-fit: cover; object-position: center; display: block;">
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($car->launch_date): ?>
                                    <div style="position: absolute; top: 15px; left: 10px; background: white; padding: 4px 10px; border-radius: 15px; font-size: 10px; font-weight: 600; color: #333; z-index: 2; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                                        LAUNCHED ON: <?php echo e(strtoupper($car->launch_date->format('M d, Y'))); ?>

                                    </div>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </div>
                            <div style="padding: 20px;">
                                <h3 style="font-size: 18px; margin-bottom: 10px; color: #333; font-weight: 600;"><?php echo e($car->name); ?></h3>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($car->min_price && $car->max_price): ?>
                                    <p style="font-size: 16px; font-weight: 600; color: #333; margin-bottom: 15px;">₹<?php echo e(number_format($car->min_price, 2)); ?> - <?php echo e(number_format($car->max_price, 2)); ?> Lakh*</p>
                                <?php elseif($car->price): ?>
                                    <p style="font-size: 16px; font-weight: 600; color: #333; margin-bottom: 15px;">₹<?php echo e(number_format($car->price / 100000, 2)); ?> Lakh*</p>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                <button style="width: 100%; padding: 10px; border: 2px solid #ff6b35; color: #ff6b35; background: white; border-radius: 5px; font-weight: 600; cursor: pointer; transition: all 0.3s;" onmouseover="this.style.background='#ff6b35'; this.style.color='white'" onmouseout="this.style.background='white'; this.style.color='#ff6b35'">View December Offers</button>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <div style="min-width: 100%; text-align: center; padding: 40px; color: #666;">
                            <p>No latest cars available. Please add cars from admin panel.</p>
                        </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>
                
                <!-- Right Scroll Arrow -->
                <button onclick="scrollLatestCars('right')" style="position: absolute; right: -20px; top: 50%; transform: translateY(-50%); background: white; border: none; width: 40px; height: 40px; border-radius: 50%; box-shadow: 0 2px 8px rgba(0,0,0,0.2); cursor: pointer; display: flex; align-items: center; justify-content: center; z-index: 10;">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.5 15L12.5 10L7.5 5" stroke="#333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
            
            <!-- View All Link -->
            <div style="margin-top: 30px;">
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

<?php /**PATH D:\unbundl\resources\views/components/latest-cars.blade.php ENDPATH**/ ?>