<!-- Floating Inquiry Button -->
<button onclick="openInquiryForm()" class="inquiry-floating-btn" style="position: fixed; bottom: 30px; right: 30px; background: #e63946; color: white; padding: 15px 25px; border: none; border-radius: 50px; font-size: 16px; font-weight: 600; cursor: pointer; box-shadow: 0 4px 12px rgba(0,0,0,0.3); z-index: 9998; transition: all 0.3s; display: flex; align-items: center; gap: 8px;" onmouseover="this.style.background='#d62839'; this.style.transform='scale(1.05)'" onmouseout="this.style.background='#e63946'; this.style.transform='scale(1)'">
    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM13 17H11V15H13V17ZM13 13H11V7H13V13Z" fill="white"/>
    </svg>
    <span class="inquiry-btn-text">Car Inquiry</span>
</button>

<!-- Car Inquiry Form Modal -->
<div id="inquiryModal" class="inquiry-modal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 10000; overflow-y: auto; padding: 20px;">
    <div class="inquiry-modal-content" style="max-width: 800px; margin: 50px auto; background: white; padding: 40px; border-radius: 10px; box-shadow: 0 4px 20px rgba(0,0,0,0.3); position: relative;">
        <button onclick="closeInquiryForm()" class="inquiry-modal-close" style="position: absolute; top: 15px; right: 15px; background: transparent; border: none; font-size: 28px; color: #666; cursor: pointer; width: 30px; height: 30px; display: flex; align-items: center; justify-content: center; border-radius: 50%; transition: background 0.3s;" onmouseover="this.style.background='#f0f0f0'" onmouseout="this.style.background='transparent'">&times;</button>
        
        <h2 class="inquiry-modal-title" style="text-align: center; font-size: 32px; margin-bottom: 30px; color: #333;">Car Inquiry Form</h2>
        
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($errors->any()): ?>
            <div style="background: #f8d7da; color: #721c24; padding: 15px; border-radius: 5px; margin-bottom: 20px; border: 1px solid #f5c6cb;">
                <ul style="margin: 0; padding-left: 20px;">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </ul>
            </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

        <form action="<?php echo e(route('car-inquiry.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            
            <div class="inquiry-form-group" style="margin-bottom: 20px;">
                <label class="inquiry-form-label" style="display: block; margin-bottom: 8px; font-weight: 600; color: #333;">Name <span style="color: red;">*</span></label>
                <input type="text" name="name" value="<?php echo e(old('name')); ?>" required class="inquiry-form-input" style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-size: 16px; box-sizing: border-box;">
            </div>

            <div class="inquiry-form-group" style="margin-bottom: 20px;">
                <label class="inquiry-form-label" style="display: block; margin-bottom: 8px; font-weight: 600; color: #333;">Phone Number <span style="color: red;">*</span></label>
                <input type="tel" name="phone_number" value="<?php echo e(old('phone_number')); ?>" required class="inquiry-form-input" style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-size: 16px; box-sizing: border-box;">
            </div>

            <div class="inquiry-form-group" style="margin-bottom: 20px;">
                <label class="inquiry-form-label" style="display: block; margin-bottom: 8px; font-weight: 600; color: #333;">Email Id <span style="color: red;">*</span></label>
                <input type="email" name="email" value="<?php echo e(old('email')); ?>" required class="inquiry-form-input" style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-size: 16px; box-sizing: border-box;">
            </div>

            <div class="inquiry-form-group" style="margin-bottom: 20px;">
                <label class="inquiry-form-label" style="display: block; margin-bottom: 8px; font-weight: 600; color: #333;">Address <span style="color: red;">*</span></label>
                <textarea name="address" rows="3" required class="inquiry-form-textarea" style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-size: 16px; resize: vertical; box-sizing: border-box;"><?php echo e(old('address')); ?></textarea>
            </div>

            <div class="inquiry-form-group" style="margin-bottom: 20px;">
                <label class="inquiry-form-label" style="display: block; margin-bottom: 12px; font-weight: 600; color: #333;">Car Types <span style="color: red;">*</span></label>
                <div class="inquiry-checkbox-group" style="display: flex; gap: 20px; flex-wrap: wrap;">
                    <label class="inquiry-checkbox-label" style="display: flex; align-items: center; gap: 8px; cursor: pointer;">
                        <input type="checkbox" name="car_types[]" value="Hatchback" <?php echo e(in_array('Hatchback', old('car_types', [])) ? 'checked' : ''); ?> style="width: 18px; height: 18px; cursor: pointer;">
                        <span class="inquiry-checkbox-text" style="font-size: 16px;">Hatchback</span>
                    </label>
                    <label class="inquiry-checkbox-label" style="display: flex; align-items: center; gap: 8px; cursor: pointer;">
                        <input type="checkbox" name="car_types[]" value="Sedan" <?php echo e(in_array('Sedan', old('car_types', [])) ? 'checked' : ''); ?> style="width: 18px; height: 18px; cursor: pointer;">
                        <span class="inquiry-checkbox-text" style="font-size: 16px;">Sedan</span>
                    </label>
                    <label class="inquiry-checkbox-label" style="display: flex; align-items: center; gap: 8px; cursor: pointer;">
                        <input type="checkbox" name="car_types[]" value="SUV" <?php echo e(in_array('SUV', old('car_types', [])) ? 'checked' : ''); ?> style="width: 18px; height: 18px; cursor: pointer;">
                        <span class="inquiry-checkbox-text" style="font-size: 16px;">SUV</span>
                    </label>
                </div>
            </div>

            <button type="submit" class="inquiry-submit-btn" style="width: 100%; background: #e63946; color: white; padding: 15px; border: none; border-radius: 5px; font-size: 18px; font-weight: 600; cursor: pointer; transition: background 0.3s;" onmouseover="this.style.background='#d62839'" onmouseout="this.style.background='#e63946'">
                Submit Inquiry
            </button>
        </form>
    </div>
</div>

<script>
    function openInquiryForm() {
        document.getElementById('inquiryModal').style.display = 'block';
        document.body.style.overflow = 'hidden';
    }

    function closeInquiryForm() {
        document.getElementById('inquiryModal').style.display = 'none';
        document.body.style.overflow = 'auto';
    }

    // Close modal when clicking outside
    window.onclick = function(event) {
        const modal = document.getElementById('inquiryModal');
        if (event.target == modal) {
            closeInquiryForm();
        }
    }
</script>

<style>
    /* Tablet Styles (max-width: 1024px) */
    @media (max-width: 1024px) {
        .inquiry-floating-btn {
            bottom: 25px !important;
            right: 25px !important;
            padding: 12px 20px !important;
            font-size: 15px !important;
        }
        .inquiry-modal {
            padding: 15px !important;
        }
        .inquiry-modal-content {
            max-width: 700px !important;
            padding: 30px !important;
            margin: 30px auto !important;
        }
        .inquiry-modal-title {
            font-size: 28px !important;
            margin-bottom: 25px !important;
        }
        .inquiry-form-input,
        .inquiry-form-textarea {
            font-size: 15px !important;
            padding: 11px !important;
        }
        .inquiry-checkbox-text {
            font-size: 15px !important;
        }
        .inquiry-submit-btn {
            padding: 14px !important;
            font-size: 16px !important;
        }
    }

    /* Mobile Styles (max-width: 768px) */
    @media (max-width: 768px) {
        .inquiry-floating-btn {
            bottom: 20px !important;
            right: 20px !important;
            padding: 10px 16px !important;
            font-size: 14px !important;
        }
        .inquiry-btn-text {
            display: none !important;
        }
        .inquiry-floating-btn svg {
            width: 18px !important;
            height: 18px !important;
        }
        .inquiry-modal {
            padding: 10px !important;
        }
        .inquiry-modal-content {
            max-width: 100% !important;
            padding: 25px 20px !important;
            margin: 20px auto !important;
            border-radius: 8px !important;
        }
        .inquiry-modal-close {
            top: 10px !important;
            right: 10px !important;
            font-size: 24px !important;
            width: 28px !important;
            height: 28px !important;
        }
        .inquiry-modal-title {
            font-size: 24px !important;
            margin-bottom: 20px !important;
        }
        .inquiry-form-group {
            margin-bottom: 18px !important;
        }
        .inquiry-form-label {
            font-size: 14px !important;
            margin-bottom: 6px !important;
        }
        .inquiry-form-input,
        .inquiry-form-textarea {
            font-size: 14px !important;
            padding: 10px !important;
        }
        .inquiry-checkbox-group {
            gap: 15px !important;
        }
        .inquiry-checkbox-text {
            font-size: 14px !important;
        }
        .inquiry-submit-btn {
            padding: 12px !important;
            font-size: 15px !important;
        }
    }

    /* Small Mobile Styles (max-width: 480px) */
    @media (max-width: 480px) {
        .inquiry-floating-btn {
            bottom: 15px !important;
            right: 15px !important;
            padding: 10px 14px !important;
            border-radius: 40px !important;
        }
        .inquiry-modal {
            padding: 0 !important;
        }
        .inquiry-modal-content {
            padding: 20px 15px !important;
            margin: 0 !important;
            border-radius: 0 !important;
            min-height: 100vh !important;
        }
        .inquiry-modal-close {
            top: 8px !important;
            right: 8px !important;
            font-size: 22px !important;
            width: 26px !important;
            height: 26px !important;
        }
        .inquiry-modal-title {
            font-size: 20px !important;
            margin-bottom: 18px !important;
        }
        .inquiry-form-group {
            margin-bottom: 15px !important;
        }
        .inquiry-form-label {
            font-size: 13px !important;
            margin-bottom: 5px !important;
        }
        .inquiry-form-input,
        .inquiry-form-textarea {
            font-size: 13px !important;
            padding: 9px !important;
        }
        .inquiry-checkbox-group {
            flex-direction: column !important;
            gap: 12px !important;
        }
        .inquiry-checkbox-text {
            font-size: 13px !important;
        }
        .inquiry-submit-btn {
            padding: 11px !important;
            font-size: 14px !important;
        }
    }
</style>

<?php /**PATH D:\unbundl\resources\views/components/car-inquiry-form.blade.php ENDPATH**/ ?>