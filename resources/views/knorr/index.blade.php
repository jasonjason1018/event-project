@extends('knorr.layout')
@section('content')
    <div class="wrapper index">
        <section class="kv">
            <div class="kv__btn"><a href="/knorr/questions"> </a></div>
        </section>
        <div class="content__bg" id="video">
            <section class="video">
                <h1 class="video__title"><img src="/knorr/images/index/video_title.png" alt=""></h1>
                <div class="video__content">
                    <div class="video__player video__player--1" data-id="M7lc1UVf-VE">
                        <div class="video__playerImg"><img src="/knorr/images/index/video_img1.jpg" alt=""></div>
                        <div class="video__playerTitle"><img src="/knorr/images/index/video_title1.png"></div>
                    </div>
                    <div class="video__player video__player--2" data-id="db7UNW8Y9bw">
                        <div class="video__playerImg"><img src="/knorr/images/index/video_img2.jpg" alt=""></div>
                        <div class="video__playerTitle"><img src="/knorr/images/index/video_title2.png"></div>
                    </div>
                </div>
            </section>
        </div>
        <div class="lightBox">
            <div class="lightBox__close"><img src="/knorr/images/close.png" alt=""></div>
            <div class="lightBox__container">
                <div id="player"></div>
            </div>
        </div>
    </div>
@endsection