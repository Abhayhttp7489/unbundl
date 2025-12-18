@props(['banners'])

<section class="banner-section" style="margin: 20px 0;">
    <div class="container">
        <div style="position: relative; overflow: hidden;">
            @if($banners && $banners->count() > 0)
                @foreach($banners as $banner)
                    <div class="banner-item" style="position: relative; margin-bottom: 20px; overflow: hidden;">
                        @if($banner->image)
                            <div style="position: relative; width: 100%;">
                                <img src="{{ asset('storage/' . $banner->image) }}" alt="{{ $banner->title ?? 'Banner' }}" class="banner-image" style="width: 105%; height: auto; display: block; margin-left: -2.5%;">
                                <div class="banner-content" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; align-items: center; padding: 40px;">
                                    <div class="banner-text" style="color: white; max-width: 600px;">
                                        @if($banner->heading)
                                            <h2 class="banner-heading" style="font-size: 48px; margin-bottom: 15px; font-weight: 700; text-shadow: 2px 2px 4px rgba(0,0,0,0.3);">{{ $banner->heading }}</h2>
                                        @elseif($banner->title)
                                            <h2 class="banner-heading" style="font-size: 48px; margin-bottom: 15px; font-weight: 700; text-shadow: 2px 2px 4px rgba(0,0,0,0.3);">{{ $banner->title }}</h2>
                                        @endif
                                        @if($banner->subheading)
                                            <p class="banner-subheading" style="font-size: 20px; margin-bottom: 25px; opacity: 0.95; text-shadow: 1px 1px 2px rgba(0,0,0,0.3);">{{ $banner->subheading }}</p>
                                        @elseif($banner->description)
                                            <p class="banner-subheading" style="font-size: 20px; margin-bottom: 25px; opacity: 0.95; text-shadow: 1px 1px 2px rgba(0,0,0,0.3);">{{ $banner->description }}</p>
                                        @endif
                                        @if($banner->button_text && $banner->button_link)
                                            <a href="{{ $banner->button_link }}" class="banner-button" style="background: white; color: #e63946; padding: 12px 30px; border-radius: 5px; text-decoration: none; font-weight: 600; display: inline-block; box-shadow: 0 2px 8px rgba(0,0,0,0.2);">{{ $banner->button_text }}</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="banner-placeholder" style="height: 500px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); display: flex; align-items: center; justify-content: center; color: white;">
                                <div style="text-align: center;">
                                    <h2 style="font-size: 42px; margin-bottom: 15px;">Find Your Dream Car</h2>
                                    <p style="font-size: 18px;">Browse through our extensive collection of cars</p>
                                </div>
                            </div>
                        @endif
                    </div>
                @endforeach
            @else
                <div class="banner-placeholder" style="height: 500px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); display: flex; align-items: center; justify-content: center; color: white;">
                    <div style="text-align: center;">
                        <h2 style="font-size: 42px; margin-bottom: 15px;">Find Your Dream Car</h2>
                        <p style="font-size: 18px;">Browse through our extensive collection of cars</p>
                    </div>
                </div>
            @endif
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

