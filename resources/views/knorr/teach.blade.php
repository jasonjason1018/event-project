@extends('knorr.layout')
@section('content')
    <div class="wrapper teach">
        <div class="content__bg">
            <div class="container">
                <div class="teach__board">
                    <h1 class="teach__title"><img src="/knorr/images/teach/teach_title.png" alt=""></h1>
                    <section class="teach__content">
                        <div class="teach__video teach__video--1" data-id="M7lc1UVf-VE">
                            <div class="teach__videoImg"><img src="/knorr/images/teach/teach_video1.jpg" alt=""></div>
                            <div class="teach__videoTitle"><img src="/knorr/images/teach/teach_video1-title.jpg"></div>
                        </div>
                        <div class="teach__video teach__video--2" data-id="db7UNW8Y9bw">
                            <div class="teach__videoImg"><img src="/knorr/images/teach/teach_video2.jpg" alt=""></div>
                            <div class="teach__videoTitle"><img src="/knorr/images/teach/teach_video2-title.jpg"></div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <div class="lightBox">
            <div class="lightBox__close"><img src="/knorr/images/close.png" alt=""></div>
            <div class="lightBox__container">
                <div id="player"></div>
            </div>
        </div>
    </div>
@endsection