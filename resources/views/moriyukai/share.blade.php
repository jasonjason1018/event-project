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
        <div class="main">
            <div class="main-container">
                <div class="content">
                    <div class="share-box">
                        <div class="share-content">
                            <p>
                                邀請好友來認識福島吉祥物們，還可加碼抽限定好禮參加越多次、 分享越多次<span class="point">中獎機率愈高哦！</span></p>
                        </div>
                        <div class="share-gift"><img src="images/share-gift.png" /></div>
                    </div>
                    <div class="share-btn"><a class="btn" href="/moriyukai/index"><span class="btn-text">挑戰其他吉祥物</span></a><a class="btn btn-secondary" href="#"><span class="btn-text">分享加碼抽</span></a></div>
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