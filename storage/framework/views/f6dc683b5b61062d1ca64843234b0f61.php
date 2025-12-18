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
                    <div style="position: relative; margin-bottom: 20px; overflow: hidden;">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($banner->image): ?>
                            <div style="position: relative; width: 100%;">
                                <img src="<?php echo e(asset('storage/' . $banner->image)); ?>" alt="<?php echo e($banner->title ?? 'Banner'); ?>" style="width: 105%; height: auto; display: block; margin-left: -2.5%;">
                                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; align-items: center; padding: 40px;">
                                    <div style="color: white; max-width: 600px;">
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($banner->heading): ?>
                                            <h2 style="font-size: 48px; margin-bottom: 15px; font-weight: 700; text-shadow: 2px 2px 4px rgba(0,0,0,0.3);"><?php echo e($banner->heading); ?></h2>
                                        <?php elseif($banner->title): ?>
                                            <h2 style="font-size: 48px; margin-bottom: 15px; font-weight: 700; text-shadow: 2px 2px 4px rgba(0,0,0,0.3);"><?php echo e($banner->title); ?></h2>
                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($banner->subheading): ?>
                                            <p style="font-size: 20px; margin-bottom: 25px; opacity: 0.95; text-shadow: 1px 1px 2px rgba(0,0,0,0.3);"><?php echo e($banner->subheading); ?></p>
                                        <?php elseif($banner->description): ?>
                                            <p style="font-size: 20px; margin-bottom: 25px; opacity: 0.95; text-shadow: 1px 1px 2px rgba(0,0,0,0.3);"><?php echo e($banner->description); ?></p>
                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($banner->button_text && $banner->button_link): ?>
                                            <a href="<?php echo e($banner->button_link); ?>" style="background: white; color: #e63946; padding: 12px 30px; border-radius: 5px; text-decoration: none; font-weight: 600; display: inline-block; box-shadow: 0 2px 8px rgba(0,0,0,0.2);"><?php echo e($banner->button_text); ?></a>
                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php else: ?>
                            <div style="height: 500px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); display: flex; align-items: center; justify-content: center; color: white;">
                                <div style="text-align: center;">
                                    <h2 style="font-size: 42px; margin-bottom: 15px;">Find Your Dream Car</h2>
                                    <p style="font-size: 18px;">Browse through our extensive collection of cars</p>
                                </div>
                            </div>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            <?php else: ?>
                <div style="height: 500px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); display: flex; align-items: center; justify-content: center; color: white;">
                    <div style="text-align: center;">
                        <h2 style="font-size: 42px; margin-bottom: 15px;">Find Your Dream Car</h2>
                        <p style="font-size: 18px;">Browse through our extensive collection of cars</p>
                    </div>
                </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>
    </div>
</section>

<?php /**PATH D:\unbundl\resources\views/components/banner.blade.php ENDPATH**/ ?>