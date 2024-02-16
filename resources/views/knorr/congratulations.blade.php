@extends('knorr.layout')
@section('content')
    <div class="wrapper congratulations">
        <div class="content__bg">
            <section class="container">
                <h1 class="congratulations__title"><img src="/knorr/images/congratulations/congratulations_title.png" alt=""></h1>
                <div class="congratulations__content">
                    <div class="moreRecipe">
                        <h2 class="moreRecipe__title">看更多食譜</h2>
                        <div class="moreRecipe__img"><a href="/knorr/recipelist"><img src="/knorr/images/congratulations/morerecipe_img.png" alt=""></a></div>
                    </div>
                    <div class="shareFb">
                        <h2 class="shareFb__title">分享我的測驗結果</h2>
                        <div class="shareFb__img"><a href=""><img src="/knorr/images/congratulations/share-4-4.png" alt=""></a></div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    @include('knorr.include.footer')
    <script src="/knorr/scripts/lib/jquery.min.js"></script>
    <script src="/knorr/scripts/main.js"></script>
@endsection