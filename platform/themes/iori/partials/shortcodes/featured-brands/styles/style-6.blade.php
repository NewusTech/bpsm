<section class="section mt-50">
    <div class="container">
        <div class="text-center">
            @if ($title = $shortcode->title)
                <h3 class="color-brand-1 mb-15 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                    {!! BaseHelper::clean($title) !!}
                </h3>
            @endif

            @if ($subtitle = $shortcode->subtitle)
                <p class="font-lg color-grey-500 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
                    {{ BaseHelper::clean($subtitle) }}
                </p>
            @endif
        </div>
        @if(count($tabs) > 0)
            <div class="mt-30 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                <div class="box-swiper pager-style-2">
                    <div class="swiper-container swiper-group-8">
                        <div class="swiper-wrapper">
                            @foreach ($tabs as $tab)
                                @continue(! $tab['image'])
                                <div class="swiper-slide">
                                    @if ($tab['url'])
                                        <a title="{{ $tab['title'] }}" href="{{ $tab['url'] }}" @if ($tab['is_open_new_tab'] == 'yes') target="_blank" @endif>
                                            <img src="{{ RvMedia::getImageUrl($tab['image']) }}" alt="{{ $tab['title'] }}">
                                        </a>
                                    @else
                                        <img src="{{ RvMedia::getImageUrl($tab['image']) }}" alt="{{ $tab['title'] }}">
                                    @endif
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination swiper-pagination-group-8"></div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</section>
