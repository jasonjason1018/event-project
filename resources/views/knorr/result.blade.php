@extends('knorr.layout')
@section('content')
    <div class="wrapper result">
        <div class="content__bg">
            <div class="container result__type1 result__type2 result__type3 result__type4">
                <div class="result__board">
                    <h1 class="result__title"><img src="/knorr/images/result/result_title.png" alt=""></h1>
                    <section class="result__content">
                        <div class="result__img">
                        <img class="hidden__phone" src="{{$data['resultImgWeb']}}" alt="">
                        <img class="visible__phone" src="{{$data['resultImgMobile']}}" alt="">
                        </div>
                        <div class="result__recipebtn"><a href="/knorr/recipe/{{$data['resultUri']}}"><img src="/knorr/images/result/result_recipebtn.jpg" alt=""></a></div>
                    </section>
                </div>
                <div class="result__btn"><a href="/knorr/form"><img src="/knorr/images/result/result_btn.png" alt=""></a></div>
                <section class="borderFrame recommend">
                    <div class="borderFrame--outside">
                        <div class="borderFrame--inside">
                            <div class="borderFrameTitle"></div>
                            <ul class="recommend__list">
                                @foreach($data['recommendList'] as $k => $v)
                                    <li class="recommend__item"><a href="/knorr/recipe/{{$v->sno}}"><img src="{{ $v->picture1 }}" alt=""></a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
            <section class="moreFood">
                <div class="container">
                    <div class="moreFood__title"> <img src="/knorr/images/morefood_title.png" alt=""></div>
                    <ul class="moreFood__slider">
                        @foreach($data['moreFood'] as $k => $v)
                            <li class="moreFood__slide"><a href="/knorr/recipe/{{$v->sno}}"><img src="{{ $v->picture1 }}" alt=""></a></li>
                        @endforeach
                    </ul>
                </div>
            </section>
        </div>
    </div>
@endsection