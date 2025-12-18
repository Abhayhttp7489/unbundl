@props(['banners'])

<section class="banner-section" style="margin: 20px 0;">
    <div class="container">
        <div style="position: relative; overflow: hidden;">
            @if($banners && $banners->count() > 0)
                @foreach($banners as $banner)
                    <div style="position: relative; margin-bottom: 20px; overflow: hidden;">
                        @if($banner->image)
                            <div style="position: relative; width: 100%;">
                                <img src="{{ asset('storage/' . $banner->image) }}" alt="{{ $banner->title ?? 'Banner' }}" style="width: 105%; height: auto; display: block; margin-left: -2.5%;">
                                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; align-items: center; padding: 40px;">
                                    <div style="color: white; max-width: 600px;">
                                        @if($banner->heading)
                                            <h2 style="font-size: 48px; margin-bottom: 15px; font-weight: 700; text-shadow: 2px 2px 4px rgba(0,0,0,0.3);">{{ $banner->heading }}</h2>
                                        @elseif($banner->title)
                                            <h2 style="font-size: 48px; margin-bottom: 15px; font-weight: 700; text-shadow: 2px 2px 4px rgba(0,0,0,0.3);">{{ $banner->title }}</h2>
                                        @endif
                                        @if($banner->subheading)
                                            <p style="font-size: 20px; margin-bottom: 25px; opacity: 0.95; text-shadow: 1px 1px 2px rgba(0,0,0,0.3);">{{ $banner->subheading }}</p>
                                        @elseif($banner->description)
                                            <p style="font-size: 20px; margin-bottom: 25px; opacity: 0.95; text-shadow: 1px 1px 2px rgba(0,0,0,0.3);">{{ $banner->description }}</p>
                                        @endif
                                        @if($banner->button_text && $banner->button_link)
                                            <a href="{{ $banner->button_link }}" style="background: white; color: #e63946; padding: 12px 30px; border-radius: 5px; text-decoration: none; font-weight: 600; display: inline-block; box-shadow: 0 2px 8px rgba(0,0,0,0.2);">{{ $banner->button_text }}</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @else
                            <div style="height: 500px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); display: flex; align-items: center; justify-content: center; color: white;">
                                <div style="text-align: center;">
                                    <h2 style="font-size: 42px; margin-bottom: 15px;">Find Your Dream Car</h2>
                                    <p style="font-size: 18px;">Browse through our extensive collection of cars</p>
                                </div>
                            </div>
                        @endif
                    </div>
                @endforeach
            @else
                <div style="height: 500px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); display: flex; align-items: center; justify-content: center; color: white;">
                    <div style="text-align: center;">
                        <h2 style="font-size: 42px; margin-bottom: 15px;">Find Your Dream Car</h2>
                        <p style="font-size: 18px;">Browse through our extensive collection of cars</p>
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>

