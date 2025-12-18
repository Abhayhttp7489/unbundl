<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(session('success')): ?>
    <div id="flash-message" style="position: fixed; top: 80px; left: 50%; transform: translateX(-50%); background: #d4edda; color: #155724; padding: 20px 30px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.15); z-index: 9999; display: flex; align-items: center; gap: 20px; max-width: 600px; width: 90%; border: 1px solid #c3e6cb;">
        <div style="flex: 1;">
            <p style="margin: 0; font-size: 16px; font-weight: 500;"><?php echo e(session('success')); ?></p>
        </div>
        <button onclick="openInquiryForm()" style="background: #155724; color: white; padding: 10px 20px; border: none; border-radius: 5px; font-size: 14px; font-weight: 600; cursor: pointer; transition: background 0.3s; white-space: nowrap;" onmouseover="this.style.background='#0d3e1f'" onmouseout="this.style.background='#155724'">
            Fill Form Again
        </button>
        <button onclick="closeFlashMessage()" style="background: transparent; border: none; color: #155724; font-size: 20px; cursor: pointer; padding: 0; width: 24px; height: 24px; display: flex; align-items: center; justify-content: center; font-weight: bold;">&times;</button>
    </div>

    <script>
        function closeFlashMessage() {
            document.getElementById('flash-message').style.display = 'none';
        }

        // Auto-hide flash message after 10 seconds
        setTimeout(function() {
            const flashMsg = document.getElementById('flash-message');
            if (flashMsg) {
                flashMsg.style.display = 'none';
            }
        }, 10000);
    </script>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

<?php /**PATH D:\unbundl\resources\views/components/flash-message.blade.php ENDPATH**/ ?>