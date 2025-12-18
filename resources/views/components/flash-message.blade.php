@if(session('success'))
    <div id="flash-message" class="flash-message" style="position: fixed; top: 80px; left: 50%; transform: translateX(-50%); background: #d4edda; color: #155724; padding: 20px 30px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.15); z-index: 9999; display: flex; align-items: center; gap: 20px; max-width: 600px; width: 90%; border: 1px solid #c3e6cb;">
        <div class="flash-message-text" style="flex: 1;">
            <p class="flash-message-content" style="margin: 0; font-size: 16px; font-weight: 500;">{{ session('success') }}</p>
        </div>
        <button onclick="openInquiryForm()" class="flash-form-button" style="background: #155724; color: white; padding: 10px 20px; border: none; border-radius: 5px; font-size: 14px; font-weight: 600; cursor: pointer; transition: background 0.3s; white-space: nowrap;" onmouseover="this.style.background='#0d3e1f'" onmouseout="this.style.background='#155724'">
            Fill Form Again
        </button>
        <button onclick="closeFlashMessage()" class="flash-close-button" style="background: transparent; border: none; color: #155724; font-size: 20px; cursor: pointer; padding: 0; width: 24px; height: 24px; display: flex; align-items: center; justify-content: center; font-weight: bold;">&times;</button>
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

    <style>
        /* Tablet Styles (max-width: 1024px) */
        @media (max-width: 1024px) {
            .flash-message {
                top: 70px !important;
                padding: 18px 25px !important;
                max-width: 550px !important;
                gap: 15px !important;
            }
            .flash-message-content {
                font-size: 15px !important;
            }
            .flash-form-button {
                padding: 9px 18px !important;
                font-size: 13px !important;
            }
        }

        /* Mobile Styles (max-width: 768px) */
        @media (max-width: 768px) {
            .flash-message {
                top: 60px !important;
                left: 50% !important;
                transform: translateX(-50%) !important;
                padding: 15px 20px !important;
                max-width: 95% !important;
                width: 95% !important;
                gap: 12px !important;
                flex-wrap: wrap !important;
            }
            .flash-message-text {
                flex: 1 1 100% !important;
                min-width: 100% !important;
            }
            .flash-message-content {
                font-size: 14px !important;
            }
            .flash-form-button {
                padding: 8px 16px !important;
                font-size: 12px !important;
                flex: 1 !important;
            }
            .flash-close-button {
                width: 22px !important;
                height: 22px !important;
                font-size: 18px !important;
            }
        }

        /* Small Mobile Styles (max-width: 480px) */
        @media (max-width: 480px) {
            .flash-message {
                top: 50px !important;
                padding: 12px 15px !important;
                max-width: 98% !important;
                width: 98% !important;
                gap: 10px !important;
                border-radius: 6px !important;
            }
            .flash-message-content {
                font-size: 13px !important;
            }
            .flash-form-button {
                padding: 7px 14px !important;
                font-size: 11px !important;
            }
            .flash-close-button {
                width: 20px !important;
                height: 20px !important;
                font-size: 16px !important;
            }
        }
    </style>
@endif

