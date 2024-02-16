@extends('moriyukai.layout')
@section('content')
    <div class="wrap">
        <div class="kv">
            <div class="container">
                <div class="slogan">
                    <h1 class="slogan-title"> <span>福島森友會大集合</span></h1>
                    <h2 class="slogan-text"><span>跟著各區域吉祥物玩福島，正確回答相關問題，即可獲得日本直送好禮，分享活動給朋友還能加碼抽分享獎唷!</span></h2>
                </div>
            </div>
        </div>
        <div class="main hasbtn">
            <div class="main-container">
                <div class="content">
                    @include('moriyukai.role_info')
                    @foreach($info_data as $k => $v)
                        <div class="info-section line-box">
                            <figure class="info-img"><img src="{{ $v->img }}" alt="" /></figure>
                            <div class="info-content">
                                {!! $v->content !!}
                            </div>
                        </div>
                    @endforeach
                    <div class="btn-section">
                        <a class="btn btn-darken" href="/moriyukai/index" title="開始挑戰"> <span>重新選擇</span></a>
                        <a class="btn" href="/moriyukai/qa/{{ $role_data->id }}" title="開始挑戰"> <span>開始挑戰</span></a>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <p>Copyright © 遊日本有限公司</p>
            </div>
        </footer>
    </div>
    <!-- share Js-->
    <script src="scripts/lib/jquery.min.js"></script>
@endsection