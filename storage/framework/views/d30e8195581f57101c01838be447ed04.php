<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['footer']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['footer']); ?>
<?php foreach (array_filter((['footer']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<footer class="footer" style="background: white; color: #333; padding: 0; margin-top: 60px;">
    <div class="container" style="max-width: 1200px;">
        <!-- Top Information Bar -->
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($footer && $footer->top_info_items && count($footer->top_info_items) > 0): ?>
            <div style="border-bottom: 1px solid #e0e0e0; padding: 30px 0;">
                <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 30px;">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $footer->top_info_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div style="display: flex; align-items: center; gap: 12px;">
                            <div style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($item['icon'])): ?>
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($item['icon'] == 'medal'): ?>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 15C15.866 15 19 11.866 19 8C19 4.13401 15.866 1 12 1C8.13401 1 5 4.13401 5 8C5 11.866 8.13401 15 12 15Z" stroke="#333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M8.21 13.89L7 23L12 20L17 23L15.79 13.88" stroke="#333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    <?php elseif($item['icon'] == 'car'): ?>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5 12H19L18 8H6L5 12Z" stroke="#333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M5 12L4 18H6M19 12L20 18H18" stroke="#333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <circle cx="7" cy="18" r="1.5" fill="#333"/>
                                            <circle cx="17" cy="18" r="1.5" fill="#333"/>
                                        </svg>
                                    <?php elseif($item['icon'] == 'tag'): ?>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20.59 13.41L13.42 20.58C13.2343 20.766 13.0137 20.9135 12.7709 21.0141C12.5281 21.1148 12.2678 21.1666 12.005 21.1666C11.7422 21.1666 11.4819 21.1148 11.2391 21.0141C10.9963 20.9135 10.7757 20.766 10.59 20.58L2 12V2H12L20.59 10.59C20.9625 10.9647 21.1716 11.4716 21.1716 12C21.1716 12.5284 20.9625 13.0353 20.59 13.41Z" stroke="#333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    <?php elseif($item['icon'] == 'compare'): ?>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 6H20M8 12H20M8 18H20M4 6H4.01M4 12H4.01M4 18H4.01" stroke="#333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </div>
                            <span style="font-size: 14px; color: #333; font-weight: 500;"><?php echo e($item['text'] ?? ''); ?></span>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>
            </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        
        <!-- Main Footer Content -->
        <div style="padding: 60px 0 40px;">
            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 40px;">
                <!-- ABOUT CARDEKHO -->
                <div>
                    <h4 style="font-size: 14px; font-weight: 700; color: #333; margin-bottom: 20px; letter-spacing: 0.5px;">ABOUT CARDEKHO</h4>
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($footer && $footer->about_links && count($footer->about_links) > 0): ?>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $footer->about_links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($link['label']) && !empty($link['label'])): ?>
                                    <li style="margin-bottom: 12px;">
                                        <a href="<?php echo e($link['url'] ?? '#'); ?>" style="color: #666; text-decoration: none; font-size: 14px; transition: color 0.3s; display: block;" onmouseover="this.style.color='#333'" onmouseout="this.style.color='#666'"><?php echo e($link['label']); ?></a>
                                    </li>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        <?php else: ?>
                            <li style="margin-bottom: 12px;"><a href="#" style="color: #666; text-decoration: none; font-size: 14px; display: block;">About</a></li>
                            <li style="margin-bottom: 12px;"><a href="#" style="color: #666; text-decoration: none; font-size: 14px; display: block;">Careers With Us</a></li>
                            <li style="margin-bottom: 12px;"><a href="#" style="color: #666; text-decoration: none; font-size: 14px; display: block;">Terms & Conditions</a></li>
                            <li style="margin-bottom: 12px;"><a href="#" style="color: #666; text-decoration: none; font-size: 14px; display: block;">Privacy Policy</a></li>
                            <li style="margin-bottom: 12px;"><a href="#" style="color: #666; text-decoration: none; font-size: 14px; display: block;">Corporate Policies</a></li>
                            <li style="margin-bottom: 12px;"><a href="#" style="color: #666; text-decoration: none; font-size: 14px; display: block;">Investors</a></li>
                            <li style="margin-bottom: 12px;"><a href="#" style="color: #666; text-decoration: none; font-size: 14px; display: block;">FAQs</a></li>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </ul>
                </div>
                
                <!-- CONNECT WITH US -->
                <div>
                    <h4 style="font-size: 14px; font-weight: 700; color: #333; margin-bottom: 20px; letter-spacing: 0.5px;">CONNECT WITH US</h4>
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($footer && $footer->connect_links && count($footer->connect_links) > 0): ?>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $footer->connect_links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($link['label']) && !empty($link['label'])): ?>
                                    <li style="margin-bottom: 12px;">
                                        <a href="<?php echo e($link['url'] ?? '#'); ?>" style="color: #666; text-decoration: none; font-size: 14px; transition: color 0.3s; display: block;" onmouseover="this.style.color='#333'" onmouseout="this.style.color='#666'"><?php echo e($link['label']); ?></a>
                                    </li>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        <?php else: ?>
                            <li style="margin-bottom: 12px;"><a href="#" style="color: #666; text-decoration: none; font-size: 14px; display: block;">Feedback</a></li>
                            <li style="margin-bottom: 12px;"><a href="#" style="color: #666; text-decoration: none; font-size: 14px; display: block;">Contact Us</a></li>
                            <li style="margin-bottom: 12px;"><a href="#" style="color: #666; text-decoration: none; font-size: 14px; display: block;">Advertise with Us</a></li>
                            <li style="margin-bottom: 12px;"><a href="#" style="color: #666; text-decoration: none; font-size: 14px; display: block;">Become Partner Dealer</a></li>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </ul>
                </div>
                
                <!-- OTHERS -->
                <div>
                    <h4 style="font-size: 14px; font-weight: 700; color: #333; margin-bottom: 20px; letter-spacing: 0.5px;">OTHERS</h4>
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($footer && $footer->others_links && count($footer->others_links) > 0): ?>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $footer->others_links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($link['label']) && !empty($link['label'])): ?>
                                    <li style="margin-bottom: 12px;">
                                        <a href="<?php echo e($link['url'] ?? '#'); ?>" style="color: #666; text-decoration: none; font-size: 14px; transition: color 0.3s; display: block;" onmouseover="this.style.color='#333'" onmouseout="this.style.color='#666'"><?php echo e($link['label']); ?></a>
                                    </li>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        <?php else: ?>
                            <li style="margin-bottom: 12px;"><a href="#" style="color: #666; text-decoration: none; font-size: 14px; display: block;">TrucksDekho</a></li>
                            <li style="margin-bottom: 12px;"><a href="#" style="color: #666; text-decoration: none; font-size: 14px; display: block;">TyreDekho</a></li>
                            <li style="margin-bottom: 12px;"><a href="#" style="color: #666; text-decoration: none; font-size: 14px; display: block;">TractorsDekho</a></li>
                            <li style="margin-bottom: 12px;"><a href="#" style="color: #666; text-decoration: none; font-size: 14px; display: block;">Girnar Vision Fund</a></li>
                            <li style="margin-bottom: 12px;"><a href="#" style="color: #666; text-decoration: none; font-size: 14px; display: block;">Emergency Response</a></li>
                            <li style="margin-bottom: 12px;"><a href="#" style="color: #666; text-decoration: none; font-size: 14px; display: block;">Car Sales Trends</a></li>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
        
    </div>
    
    <!-- Bottom Copyright and Social Media Bar - Full Width -->
    <div style="border-top: 1px solid #e0e0e0; padding: 20px 0; width: 100%;">
        <div class="container" style="max-width: 1200px; display: flex; justify-content: space-between; align-items: center;">
            <div style="color: #666; font-size: 14px;">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($footer && $footer->copyright_text): ?>
                    <?php echo e($footer->copyright_text); ?>

                <?php else: ?>
                    © 2025 Girnar Software Pvt. Ltd.
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>
            <div style="display: flex; align-items: center; gap: 15px;">
                <span style="color: #666; font-size: 14px; margin-right: 5px;">Connect:</span>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($footer && $footer->social_links): ?>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $footer->social_links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e($social['url'] ?? '#'); ?>" target="_blank" style="color: #666; text-decoration: none; transition: color 0.3s;" onmouseover="this.style.color='#333'" onmouseout="this.style.color='#666'">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($social['platform'])): ?>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($social['platform'] == 'facebook'): ?>
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18 2H15C13.6739 2 12.4021 2.52678 11.4645 3.46447C10.5268 4.40215 10 5.67392 10 7V10H7V14H10V22H14V14H17V10H14V7C14 6.73478 14.1054 6.48043 14.2929 6.29289C14.4804 6.10536 14.7348 6 15 6H18V2Z"/>
                                    </svg>
                                <?php elseif($social['platform'] == 'twitter'): ?>
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22 5.924C21.264 6.252 20.473 6.465 19.643 6.557C20.49 6.045 21.141 5.258 21.447 4.315C20.654 4.776 19.776 5.111 18.842 5.295C18.088 4.497 17.016 4 15.846 4C13.58 4 11.743 5.837 11.743 8.103C11.743 8.425 11.779 8.738 11.849 9.037C8.44 8.87 5.416 7.113 3.392 4.395C3.039 4.961 2.836 5.617 2.836 6.32C2.836 7.651 3.562 8.825 4.653 9.495C3.99 9.473 3.356 9.303 2.804 9.01V9.07C2.804 11.033 4.178 12.705 6.092 13.098C5.75 13.185 5.391 13.23 5.023 13.23C4.752 13.23 4.49 13.207 4.234 13.163C4.767 14.812 6.278 16.082 8.075 16.115C6.67 17.243 4.898 17.884 2.981 17.884C2.645 17.884 2.313 17.867 1.985 17.833C3.79 19.04 5.818 19.692 7.98 19.692C15.836 19.692 20.17 13.308 20.17 7.752C20.17 7.561 20.166 7.371 20.157 7.182C20.879 6.652 21.448 5.992 21.947 5.232L22 5.924Z"/>
                                    </svg>
                                <?php elseif($social['platform'] == 'youtube'): ?>
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M23.498 6.186C23.251 5.32 22.556 4.625 21.69 4.378C19.82 4 12 4 12 4S4.18 4 2.31 4.378C1.444 4.625 0.749 5.32 0.502 6.186C0 8.07 0 12 0 12S0 15.93 0.502 17.814C0.749 18.68 1.444 19.375 2.31 19.622C4.18 20 12 20 12 20S19.82 20 21.69 19.622C22.556 19.375 23.251 18.68 23.498 17.814C24 15.93 24 12 24 12S24 8.07 23.498 6.186ZM9.545 15.568V8.432L15.818 12L9.545 15.568Z"/>
                                    </svg>
                                <?php elseif($social['platform'] == 'instagram'): ?>
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 2.163C15.204 2.163 15.584 2.175 16.85 2.233C18.105 2.292 18.907 2.481 19.537 2.74C20.27 3.04 20.856 3.411 21.46 4.015C22.064 4.619 22.435 5.205 22.735 5.938C22.995 6.568 23.184 7.37 23.243 8.625C23.302 9.891 23.313 10.271 23.313 13.475C23.313 16.679 23.302 17.059 23.243 18.325C23.184 19.58 22.995 20.382 22.735 21.012C22.435 21.745 22.064 22.331 21.46 22.935C20.856 23.539 20.27 23.91 19.537 24.21C18.907 24.47 18.105 24.659 16.85 24.718C15.584 24.777 15.204 24.788 12 24.788C8.796 24.788 8.416 24.777 7.15 24.718C5.895 24.659 5.093 24.47 4.463 24.21C3.73 23.91 3.144 23.539 2.54 22.935C1.936 22.331 1.565 21.745 1.265 21.012C1.005 20.382 0.816 19.58 0.757 18.325C0.698 17.059 0.687 16.679 0.687 13.475C0.687 10.271 0.698 9.891 0.757 8.625C0.816 7.37 1.005 6.568 1.265 5.938C1.565 5.205 1.936 4.619 2.54 4.015C3.144 3.411 3.73 3.04 4.463 2.74C5.093 2.481 5.895 2.292 7.15 2.233C8.416 2.175 8.796 2.163 12 2.163ZM12 0C8.741 0 8.333 0.014 7.053 0.072C5.775 0.132 4.905 0.333 4.14 0.63C3.305 0.955 2.603 1.375 1.938 2.04C1.273 2.705 0.853 3.407 0.528 4.242C0.231 5.007 0.03 5.877 -0.03 7.155C-0.089 8.433 -0.105 8.841 -0.105 12.1C-0.105 15.359 -0.089 15.767 -0.03 17.045C0.03 18.323 0.231 19.193 0.528 19.958C0.853 20.793 1.273 21.495 1.938 22.16C2.603 22.825 3.305 23.245 4.14 23.57C4.905 23.867 5.775 24.068 7.053 24.128C8.333 24.186 8.741 24.2 12 24.2C15.259 24.2 15.667 24.186 16.947 24.128C18.225 24.068 19.095 23.867 19.86 23.57C20.695 23.245 21.397 22.825 22.062 22.16C22.727 21.495 23.147 20.793 23.472 19.958C23.769 19.193 23.97 18.323 24.03 17.045C24.089 15.767 24.105 15.359 24.105 12.1C24.105 8.841 24.089 8.433 24.03 7.155C23.97 5.877 23.769 5.007 23.472 4.242C23.147 3.407 22.727 2.705 22.062 2.04C21.397 1.375 20.695 0.955 19.86 0.63C19.095 0.333 18.225 0.132 16.947 0.072C15.667 0.014 15.259 0 12 0ZM12 5.838C9.069 5.838 6.762 8.145 6.762 11.076C6.762 14.007 9.069 16.314 12 16.314C14.931 16.314 17.238 14.007 17.238 11.076C17.238 8.145 14.931 5.838 12 5.838ZM12 14.476C10.409 14.476 9.119 13.186 9.119 11.595C9.119 10.004 10.409 8.714 12 8.714C13.591 8.714 14.881 10.004 14.881 11.595C14.881 13.186 13.591 14.476 12 14.476ZM18.406 4.155C17.61 4.155 16.966 4.799 16.966 5.595C16.966 6.391 17.61 7.035 18.406 7.035C19.202 7.035 19.846 6.391 19.846 5.595C19.846 4.799 19.202 4.155 18.406 4.155Z"/>
                                    </svg>
                                <?php elseif($social['platform'] == 'linkedin'): ?>
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20.447 20.452H16.896V14.883C16.896 13.555 16.87 11.846 15.042 11.846C13.188 11.846 12.905 13.291 12.905 14.785V20.452H9.351V9H12.765V10.561H12.811C13.288 9.661 14.448 8.711 16.181 8.711C19.782 8.711 20.448 11.081 20.448 14.385V20.452H20.447ZM5.337 7.433C4.193 7.433 3.274 6.507 3.274 5.367C3.274 4.228 4.194 3.305 5.337 3.305C6.477 3.305 7.401 4.228 7.401 5.367C7.401 6.507 6.476 7.433 5.337 7.433ZM7.119 20.452H3.555V9H7.119V20.452ZM22.225 0H1.771C0.792 0 0 0.774 0 1.729V22.271C0 23.227 0.792 24 1.771 24H22.222C23.2 24 24 23.227 24 22.271V1.729C24 0.774 23.2 0 22.222 0H22.225Z"/>
                                    </svg>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>
        </div>
    </div>
</footer>

<?php /**PATH D:\unbundl\resources\views/components/footer.blade.php ENDPATH**/ ?>