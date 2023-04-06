@section('slider')
    <div class="slider-main">
        <div class="slider-wrap" id="sw">
            @foreach($slides as $slide)
                <div class="slider" id="slide{{ $slide->id }}" onclick="setslide({{ $slide->id }})">
                    <div class="slider-first">
                        <div class="slider-box slider-content">
                            <a
                                href="{{ $slide->url }}"
                            >
                                <img
                                    class="slider-img"
                                    src="{{ asset($slide->image) }}"
                                    style="height: 400px; width: 627px"
                                    alt="{{ $slide->name }}"
                                /></a>

                            <div class="slider-add">
                                <div class="slider-padding">
                                    <h3>{{ $slide->title }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-second">
                        @php
                            $second_slides = $slide->second;
                            $second_slide = $second_slides[0];
                        @endphp
                        <div class="slider-box slider-content1">
                            <a
                                href="{{ $second_slide->url }}"
                            ><img
                                    class="slider-img"
                                    src="{{ asset($second_slide->image) }}"
                                    alt="{{ $slide->name }}"
                                /></a>
                            <div class="slider-add">
                                <div class="slider-padding">
                                    <h3>
                                        {{ $second_slide->title }}
                                    </h3>
                                    <a
                                        href="{{ $second_slide->url }}"
                                    >Подробнее</a
                                    >
                                </div>
                            </div>
                        </div>
                        @php
                            $second_slide = $second_slides[1]
                        @endphp
                        <div class="slider-box slider-content2">
                            <a
                                href="{{ $second_slide->url }}"
                            ><img
                                    src="{{ asset($second_slide->image) }}"
                                    style="height: 180px; width: 310px"
                                    alt="{{ $slide->name }}"
                                /></a>
                            <div class="slider-add">
                                <div class="slider-padding">
                                    <h3>
                                        {{ $second_slide->title }}
                                    </h3>
                                    <a
                                        href="{{ $second_slide->url }}"
                                    >Подробнее</a
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-second">
                        @php
                            $second_slide = $second_slides[2]
                        @endphp
                        <div class="slider-box slider-content1">
                            <a
                                href="{{ $second_slide->url }}"
                            ><img
                                    class="slider-img"
                                    src="{{ asset($second_slide->image) }}"
                                    alt="{{ $slide->name }}"
                                /></a>
                            <div class="slider-add">
                                <div class="slider-padding">
                                    <h3>
                                        {{ $second_slide->title }}
                                    </h3>
                                    <a
                                        href="{{ $second_slide->url }}"
                                    >Подробнее</a
                                    >
                                </div>
                            </div>
                        </div>
                        @php
                            $second_slide = $second_slides[3]
                        @endphp
                        <div class="slider-box slider-content2">
                            <a
                                href="{{ $second_slide->url }}"
                            ><img
                                    src="{{ asset($second_slide->image) }}"
                                    style="height: 180px; width: 310px"
                                    alt="{{ $slide->name }}"
                                /></a>
                            <div class="slider-add">
                                <div class="slider-padding">
                                    <h3>
                                        {{ $second_slide->title }}
                                    </h3>
                                    <a
                                        href="{{ $second_slide->url }}"
                                    >Подробнее</a
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
