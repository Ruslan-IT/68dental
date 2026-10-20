@foreach ($specialists as $person)
    <div role="group" class="swiper-slide mod--specialists-second w-dyn-item"><img src="{{ asset($person['photo']) }}" loading="lazy" alt="{{ $person['name'] }}" sizes="(max-width: 767px) 46vw, 160px" @if (!empty($person['photo_srcset'])) srcset="@foreach ($person['photo_srcset'] as $variant){{ asset($variant[0]) }} {{ $variant[1] }}@if (!$loop->last), @endif @endforeach" @endif class="specialists__img is2" @if (!empty($person['photo_position'])) style="object-position: {{ $person['photo_position'] }}" @endif>
        <div class="specialists__text-wrap"><h3 class="heading-5 mobile-size-16 font-style-worksans text-weight-normal">{{ $person['name'] }}</h3>
            <div class="margin-custom mod--specialists"><p class="text-size-regular text-color-neutral_gray">{{ $person['role'] }}</p></div>
            <p class="specialists__tag @if (empty($person['experience'])) w-dyn-bind-empty @endif">{{ $person['experience'] }}</p></div>
    </div>
@endforeach
