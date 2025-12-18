<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginalfd1f218809a441e923395fcbf03e4272 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfd1f218809a441e923395fcbf03e4272 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.header','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfd1f218809a441e923395fcbf03e4272)): ?>
<?php $attributes = $__attributesOriginalfd1f218809a441e923395fcbf03e4272; ?>
<?php unset($__attributesOriginalfd1f218809a441e923395fcbf03e4272); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfd1f218809a441e923395fcbf03e4272)): ?>
<?php $component = $__componentOriginalfd1f218809a441e923395fcbf03e4272; ?>
<?php unset($__componentOriginalfd1f218809a441e923395fcbf03e4272); ?>
<?php endif; ?>
    
    <?php if (isset($component)) { $__componentOriginalff9615640ecc9fe720b9f7641382872b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalff9615640ecc9fe720b9f7641382872b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.banner','data' => ['banners' => $banners]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('banner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['banners' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($banners)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalff9615640ecc9fe720b9f7641382872b)): ?>
<?php $attributes = $__attributesOriginalff9615640ecc9fe720b9f7641382872b; ?>
<?php unset($__attributesOriginalff9615640ecc9fe720b9f7641382872b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalff9615640ecc9fe720b9f7641382872b)): ?>
<?php $component = $__componentOriginalff9615640ecc9fe720b9f7641382872b; ?>
<?php unset($__componentOriginalff9615640ecc9fe720b9f7641382872b); ?>
<?php endif; ?>
    
    <?php if (isset($component)) { $__componentOriginalbb0843bd48625210e6e530f88101357e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbb0843bd48625210e6e530f88101357e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.flash-message','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('flash-message'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbb0843bd48625210e6e530f88101357e)): ?>
<?php $attributes = $__attributesOriginalbb0843bd48625210e6e530f88101357e; ?>
<?php unset($__attributesOriginalbb0843bd48625210e6e530f88101357e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbb0843bd48625210e6e530f88101357e)): ?>
<?php $component = $__componentOriginalbb0843bd48625210e6e530f88101357e; ?>
<?php unset($__componentOriginalbb0843bd48625210e6e530f88101357e); ?>
<?php endif; ?>
    
    <?php if (isset($component)) { $__componentOriginaldbb4f557e30ba055fbd2f768f99d72ea = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldbb4f557e30ba055fbd2f768f99d72ea = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.car-inquiry-form','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('car-inquiry-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldbb4f557e30ba055fbd2f768f99d72ea)): ?>
<?php $attributes = $__attributesOriginaldbb4f557e30ba055fbd2f768f99d72ea; ?>
<?php unset($__attributesOriginaldbb4f557e30ba055fbd2f768f99d72ea); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldbb4f557e30ba055fbd2f768f99d72ea)): ?>
<?php $component = $__componentOriginaldbb4f557e30ba055fbd2f768f99d72ea; ?>
<?php unset($__componentOriginaldbb4f557e30ba055fbd2f768f99d72ea); ?>
<?php endif; ?>
    
    <?php if (isset($component)) { $__componentOriginalae16263e9aff4b449775ce7bf85393d4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalae16263e9aff4b449775ce7bf85393d4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.most-searched','data' => ['mostSearchedCars' => $mostSearchedCars]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('most-searched'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['mostSearchedCars' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($mostSearchedCars)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalae16263e9aff4b449775ce7bf85393d4)): ?>
<?php $attributes = $__attributesOriginalae16263e9aff4b449775ce7bf85393d4; ?>
<?php unset($__attributesOriginalae16263e9aff4b449775ce7bf85393d4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalae16263e9aff4b449775ce7bf85393d4)): ?>
<?php $component = $__componentOriginalae16263e9aff4b449775ce7bf85393d4; ?>
<?php unset($__componentOriginalae16263e9aff4b449775ce7bf85393d4); ?>
<?php endif; ?>
    
    <?php if (isset($component)) { $__componentOriginalb92ec12d3623fdbc2f4d8ca37cf8f323 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb92ec12d3623fdbc2f4d8ca37cf8f323 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.latest-cars','data' => ['latestCars' => $latestCars]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('latest-cars'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['latestCars' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($latestCars)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb92ec12d3623fdbc2f4d8ca37cf8f323)): ?>
<?php $attributes = $__attributesOriginalb92ec12d3623fdbc2f4d8ca37cf8f323; ?>
<?php unset($__attributesOriginalb92ec12d3623fdbc2f4d8ca37cf8f323); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb92ec12d3623fdbc2f4d8ca37cf8f323)): ?>
<?php $component = $__componentOriginalb92ec12d3623fdbc2f4d8ca37cf8f323; ?>
<?php unset($__componentOriginalb92ec12d3623fdbc2f4d8ca37cf8f323); ?>
<?php endif; ?>
    
    <?php if (isset($component)) { $__componentOriginal8a8716efb3c62a45938aca52e78e0322 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a8716efb3c62a45938aca52e78e0322 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.footer','data' => ['footer' => $footer]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['footer' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($footer)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $attributes = $__attributesOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $component = $__componentOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__componentOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>

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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\unbundl\resources\views/home.blade.php ENDPATH**/ ?>