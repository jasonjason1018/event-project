@extends('knorr.layout')
@section('content')
    <link rel="stylesheet" href="/knorr/styles/libs/slick.css">
    <link rel="stylesheet" href="/knorr/styles/libs/slick-theme.css">
    <section id="content">
        <div class="wrapper sales">
            <div class="sales__bg">
                <section class="container">
                    <div class="sales__board">
                        <h1 class="sales__title"><img src="/knorr/images/sales/sales_title.png" alt=""></h1>
                        <h2 class="sales__subtitle"><img src="/knorr/images/sales/sales_subtitle.png" alt=""></h2>
                        <ul class="product__slider">
                            @foreach($data as $k => $v)
                                <li class="product__slide">
                                    <div class="product__img"><img src="{{ $v->picture }}" alt=""></div>
                                    <div class="product__content">
                                        <div class="product__title">{{ $v->product }} {{ $v->product2 }}</div>
                                        <div class="product__text">{{ $v->description }}</div>
                                        <div class="product__btn"><img src="/knorr/images/sales/sales_btn.png" alt=""></div>
                                        <ul class="product__link">
                                            <li><a target="_blank" href="{{ $v->momo }}"><img src="/knorr/images/sales/momo.png" alt=""></a></li>
                                            <li><a target="_blank" href="{{ $v->pchome }}"><img src="/knorr/images/sales/pc24.png" alt=""></a></li>
                                            <li><a target="_blank" href="{{ $v->yahoo }}"><img src="/knorr/images/sales/yahoo.png" alt=""></a></li>
                                        </ul>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <ul class="product__sliderNav">
                        @foreach($data as $k => $v)
                            <li><img src="{{ $v->icon }}" alt=""></li>
                        @endforeach
                    </ul>
                </section>
            </div>
        </div>
    </section>
@endsection