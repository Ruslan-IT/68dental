@foreach ($specialists as $person)
    <div role="group" class="swiper-slide mod--specialists-third w-dyn-item">
        <div class="collection__item-wrap mod--specialists-third">
            <div class="specialists__img-wrap is1"><img
                    src="{{ asset($person['photo']) }}"
                    loading="lazy" alt="{{ $person['name'] }}" sizes="100vw"
                    @if (!empty($person['photo_srcset']))
                        srcset="@foreach ($person['photo_srcset'] as $variant){{ asset($variant[0]) }} {{ $variant[1] }}@if (!$loop->last), @endif @endforeach"
                    @endif
                    class="specialists__img is3" @if (!empty($person['photo_position'])) style="object-position: {{ $person['photo_position'] }}" @endif>
                @if (!empty($person['experience']))
                    <div class="specialists__tag absolute">{{ $person['experience'] }}</div>
                @else
                    <div class="specialists__tag absolute w-dyn-bind-empty"></div>
                @endif
                <a href="/team" class="button is-icon mod--specialists-third w-inline-block">
                    <div class="button__icon width-16 w-embed">
                        <svg width="100%" height="100%" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 15L15 1M15 1V15M15 1H1" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                        </svg>
                    </div>
                </a></div>
            <div class="specialists__name"><h3 class="heading-6 text-weight-normal font-style-worksans">{{ $person['name'] }}</h3>
                <p class="text-size-regular text-color-neutral_gray">{{ $person['role'] }}</p></div>
        </div>
    </div>
@endforeach
