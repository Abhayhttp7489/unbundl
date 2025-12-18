<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['banners']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['banners']); ?>
<?php foreach (array_filter((['banners']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<section class="banner-section" style="margin: 20px 0;">
    <div class="container">
        <div style="position: relative; overflow: hidden;">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($banners && $banners->count() > 0): ?>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="banner-item" style="position: relative; margin-bottom: 20px; overflow: hidden;">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($banner->image): ?>
                            <div style="position: relative; width: 100%;">
                                <img src="<?php echo e(asset('storage/' . $banner->image)); ?>" alt="<?php echo e($banner->title ?? 'Banner'); ?>" class="banner-image" style="width: 105%; height: auto; display: block; margin-left: -2.5%;">
                                <div class="banner-content" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; align-items: center; padding: 40px;">
                                    <div class="banner-text" style="color: white; max-width: 600px;">
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($banner->heading): ?>
                                            <h2 class="banner-heading" style="font-size: 48px; margin-bottom: 15px; font-weight: 700; text-shadow: 2px 2px 4px rgba(0,0,0,0.3);"><?php echo e($banner->heading); ?></h2>
                                        <?php elseif($banner->title): ?>
                                            <h2 class="banner-heading" style="font-size: 48px; margin-bottom: 15px; font-weight: 700; text-shadow: 2px 2px 4px rgba(0,0,0,0.3);"><?php echo e($banner->title); ?></h2>
                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($banner->subheading): ?>
                                            <p class="banner-subheading" style="font-size: 20px; margin-bottom: 25px; opacity: 0.95; text-shadow: 1px 1px 2px rgba(0,0,0,0.3);"><?php echo e($banner->subheading); ?></p>
                                        <?php elseif($banner->description): ?>
                                            <p class="banner-subheading" style="font-size: 20px; margin-bottom: 25px; opacity: 0.95; text-shadow: 1px 1px 2px rgba(0,0,0,0.3);"><?php echo e($banner->description); ?></p>
                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($banner->button_text && $banner->button_link): ?>
                                            <a href="<?php echo e($banner->button_link); ?>" class="banner-button" style="background: white; color: #e63946; padding: 12px 30px; border-radius: 5px; text-decoration: none; font-weight: 600; display: inline-block; box-shadow: 0 2px 8px rgba(0,0,0,0.2);"><?php echo e($banner->button_text); ?></a>
                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="banner-placeholder" style="height: 500px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); display: flex; align-items: center; justify-content: center; color: white;">
                                <div style="text-align: center;">
                                    <h2 style="font-size: 42px; margin-bottom: 15px;">Find Your Dream Car</h2>
                                    <p style="font-size: 18px;">Browse through our extensive collection of cars</p>
                                </div>
                            </div>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            <?php else: ?>
                <div class="banner-placeholder" style="height: 500px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); display: flex; align-items: center; justify-content: center; color: white;">
                    <div style="text-align: center;">
                        <h2 style="font-size: 42px; margin-bottom: 15px;">Find Your Dream Car</h2>
                        <p style="font-size: 18px;">Browse through our extensive collection of cars</p>
                    </div>
                </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>
    </div>
</section>

<style>
    /* Tablet Styles (max-width: 1024px) */
    @media (max-width: 1024px) {
        .banner-content {
            padding: 30px !important;
        }
        .banner-heading {
            font-size: 36px !important;
        }
        .banner-subheading {
            font-size: 18px !important;
        }
        .banner-button {
            padding: 10px 25px !important;
            font-size: 14px !important;
        }
        .banner-placeholder {
            height: 400px !important;
        }
        .banner-placeholder h2 {
            font-size: 32px !important;
        }
        .banner-placeholder p {
            font-size: 16px !important;
        }
    }

    /* Mobile Styles (max-width: 768px) */
    @media (max-width: 768px) {
        .banner-section {
            margin: 15px 0 !important;
        }
        .banner-image {
            width: 100% !important;
            margin-left: 0 !important;
        }
        .banner-content {
            padding: 20px !important;
            align-items: flex-start !important;
            padding-top: 30px !important;
        }
        .banner-text {
            max-width: 100% !important;
        }
        .banner-heading {
            font-size: 28px !important;
            margin-bottom: 10px !important;
        }
        .banner-subheading {
            font-size: 16px !important;
            margin-bottom: 20px !important;
        }
        .banner-button {
            padding: 10px 20px !important;
            font-size: 14px !important;
        }
        .banner-placeholder {
            height: 300px !important;
            padding: 20px !important;
        }
        .banner-placeholder h2 {
            font-size: 24px !important;
            margin-bottom: 10px !important;
        }
        .banner-placeholder p {
            font-size: 14px !important;
        }
    }

    /* Small Mobile Styles (max-width: 480px) */
    @media (max-width: 480px) {
        .banner-section {
            margin: 10px 0 !important;
        }
        .banner-content {
            padding: 15px !important;
            padding-top: 20px !important;
        }
        .banner-heading {
            font-size: 22px !important;
            margin-bottom: 8px !important;
        }
        .banner-subheading {
            font-size: 14px !important;
            margin-bottom: 15px !important;
        }
        .banner-button {
            padding: 8px 16px !important;
            font-size: 12px !important;
        }
        .banner-placeholder {
            height: 250px !important;
            padding: 15px !important;
        }
        .banner-placeholder h2 {
            font-size: 20px !important;
            margin-bottom: 8px !important;
        }
        .banner-placeholder p {
            font-size: 12px !important;
        }
    }
</style>

<?php /**PATH D:\unbundl\resources\views/components/banner.blade.php ENDPATH**/ ?>