<div class="section">
    <div class="container">
        @if (count($tabs) > 0)
            <div class="mt-40">
                <ul class="list-partners wow animate__animated animate__fadeIn" data-wow-delay=".0s">
                    @foreach($tabs as $tab)
                        @continue(! $tab['image'])
                        <li>
                            @if ($tab['url'])
                                <a title="{{ $tab['title'] }}" href="{{ $tab['url'] }}" @if ($tab['is_open_new_tab'] == 'yes') target="_blank" @endif>
                                    <img src="{{ RvMedia::getImageUrl($tab['image']) }}" alt="{{ $tab['title'] }}">
                                </a>
                            @else
                                <img src="{{ RvMedia::getImageUrl($tab['image']) }}" alt="{{ $tab['title'] }}">
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</div>
