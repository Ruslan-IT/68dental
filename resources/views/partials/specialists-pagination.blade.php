@foreach ($specialists as $person)
    <div class="swiper__pagination-bullet">
        <div data-anim="" class="swiper__pagination-bullet-active {{ $bulletClass ?? '' }} @if ($loop->first) active @endif"></div>
    </div>
@endforeach
