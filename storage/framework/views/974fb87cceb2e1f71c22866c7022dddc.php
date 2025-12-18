<header class="header" style="background: #fff; box-shadow: 0 2px 4px rgba(0,0,0,0.1); position: sticky; top: 0; z-index: 1000;">
    <div class="container">
        <div class="header-content" style="display: flex; justify-content: space-between; align-items: center; gap: 40px;">
            <!-- Logo -->
            <div class="header-logo" style="flex-shrink: 0;">
                <img src="<?php echo e(asset('assest/logo/cardekho-logo-hd.png')); ?>" alt="CarsDekho Logo" class="logo-img" style="height: 120px; width: auto; object-fit: contain;">
            </div>
            
            <!-- Search Bar (Center) -->
            <div class="header-search" style="flex: 1; max-width: 450px; margin: 0 auto;">
                <div style="display: flex; align-items: center; border: 1px solid #e0e0e0; border-radius: 25px; background: #fff; overflow: hidden; box-shadow: 0 1px 3px rgba(0,0,0,0.05);">
                    <!-- Filter Dropdown -->
                    <div id="filterDropdown" style="display: flex; align-items: center; padding: 10px 14px; border-right: 1px solid #e0e0e0; cursor: pointer; background: #fff; transition: background 0.2s;" onmouseover="this.style.background='#f5f5f5'" onmouseout="this.style.background='#fff'" onclick="toggleDropdown()">
                        <span style="font-weight: 600; color: #333; margin-right: 6px; font-size: 13px;">All</span>
                        <svg width="8" height="5" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L5 5L9 1" stroke="#666" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    
                    <!-- Search Input -->
                    <div style="flex: 1; display: flex; align-items: center; padding: 10px 14px;">
                        <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin-right: 10px; flex-shrink: 0;">
                            <path d="M9 17C13.4183 17 17 13.4183 17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 13.4183 4.58172 17 9 17Z" stroke="#000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M19 19L14.65 14.65" stroke="#000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <input type="text" placeholder="Search or Ask a Question" style="flex: 1; border: none; outline: none; font-size: 13px; color: #333; background: transparent; width: 100%;" onfocus="this.placeholder=''" onblur="this.placeholder='Search or Ask a Question'" class="search-input">
                    </div>
                </div>
            </div>
            
            <!-- Right Side Menu Items -->
            <div class="header-menu" style="flex-shrink: 0; display: flex; align-items: center; gap: 30px;">
                <!-- Language Selector -->
                <div class="header-language" style="display: flex; align-items: center; cursor: pointer;" onclick="toggleLanguageDropdown()">
                    <span style="text-decoration: underline; color: #333; font-size: 14px; margin-right: 5px;">English</span>
                    <svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L4 4L7 1" stroke="#000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                
                <!-- Wishlist Icon -->
                <div class="header-wishlist" style="cursor: pointer;" onclick="window.location.href='#'">
                    <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19.5 3.5C19.1022 3.10218 18.6361 2.78121 18.125 2.55279C17.6139 2.32436 17.0678 2.19238 16.5 2.19238C15.9322 2.19238 15.3861 2.32436 14.875 2.55279C14.3639 2.78121 13.8978 3.10218 13.5 3.5L11 6L8.5 3.5C7.70435 2.70435 6.63322 2.19238 5.5 2.19238C4.36678 2.19238 3.29565 2.70435 2.5 3.5C1.70435 4.29565 1.19238 5.36678 1.19238 6.5C1.19238 7.63322 1.70435 8.70435 2.5 9.5L5 12L11 18L17 12L19.5 9.5C20.2956 8.70435 20.8076 7.63322 20.8076 6.5C20.8076 5.36678 20.2956 4.29565 19.5 3.5Z" stroke="#333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                
                <!-- Login / Register -->
                <div class="header-login" style="display: flex; align-items: center; cursor: pointer; gap: 8px;" onclick="window.location.href='#'">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 10C12.7614 10 15 7.76142 15 5C15 2.23858 12.7614 0 10 0C7.23858 0 5 2.23858 5 5C5 7.76142 7.23858 10 10 10Z" stroke="#333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M10 12C5.58172 12 2 14.2386 2 17V20H18V17C18 14.2386 14.4183 12 10 12Z" stroke="#333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span class="login-text" style="color: #333; font-size: 14px;">Login / Register</span>
                </div>
                
                <!-- Admin Button -->
                <a href="/admin" class="header-admin" style="background: #e63946; color: white; padding: 8px 20px; border-radius: 5px; text-decoration: none; font-weight: 500; display: inline-block;">Admin</a>
            </div>
        </div>
    </div>
</header>

<style>
    /* Tablet Styles (max-width: 1024px) */
    @media (max-width: 1024px) {
        .header-content {
            gap: 20px !important;
        }
        .logo-img {
            height: 90px !important;
        }
        .header-search {
            max-width: 350px !important;
        }
        .header-menu {
            gap: 20px !important;
        }
    }

    /* Mobile Styles (max-width: 768px) */
    @media (max-width: 768px) {
        .header-content {
            flex-direction: column !important;
            gap: 15px !important;
            padding: 11px 0 !important;
        }
        .header-logo {
            width: 100%;
            text-align: center;
        }
        .logo-img {
            height: 70px !important;
        }
        .header-search {
            max-width: 100% !important;
            width: 100% !important;
        }
        .header-menu {
            width: 100%;
            justify-content: space-between !important;
            gap: 15px !important;
            flex-wrap: wrap;
        }
        .header-language span,
        .login-text {
            font-size: 12px !important;
        }
        .header-admin {
            padding: 6px 15px !important;
            font-size: 13px !important;
        }
    }

    /* Small Mobile Styles (max-width: 480px) */
    @media (max-width: 480px) {
        .header-content {
            gap: 12px !important;
            padding: 8px 0 !important;
        }
        .logo-img {
            height: 50px !important;
        }
        .header-search > div {
            border-radius: 20px !important;
        }
        #filterDropdown {
            padding: 8px 10px !important;
        }
        #filterDropdown span {
            font-size: 11px !important;
        }
        .search-input {
            font-size: 12px !important;
        }
        .header-menu {
            gap: 10px !important;
        }
        .header-language,
        .header-wishlist,
        .header-login {
            flex-shrink: 0;
        }
        .header-wishlist svg {
            width: 18px !important;
            height: 16px !important;
        }
        .header-login svg {
            width: 18px !important;
            height: 18px !important;
        }
        .login-text {
            display: none !important;
        }
        .header-admin {
            padding: 6px 12px !important;
            font-size: 12px !important;
        }
    }
</style>

<script>
    function toggleDropdown() {
        // Add dropdown functionality if needed
        console.log('Dropdown clicked');
    }
    
    function toggleLanguageDropdown() {
        // Add language dropdown functionality if needed
        console.log('Language dropdown clicked');
    }
</script>

<?php /**PATH D:\unbundl\resources\views/components/header.blade.php ENDPATH**/ ?>