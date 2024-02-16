@extends('knorr.layout')
@section('content')
    <div class="wrapper recipe recipe1">
        <div class="content__bg">
            <div class="container">
                <div class="backPage"><a href="/knorr/recipelist"><img src="/knorr/images/recipe/back.png" alt=""></a></div>
                <div class="recipe__board">
                    <div class="recipe__img">
                        <img class="hidden__phone" src="{{ $data->picture1 }}" alt="">
                        <img class="visible__phone" src="/knorr/images/recipe/recipe1-1m.jpg" alt=""></div>
                    <div class="recipe__top">
                        <div class="borderFrame recipe__ingredients">
                            <div class="borderFrame--outside">
                                <div class="borderFrame--inside">
                                    <div class="borderFrameTitle"><img src="/knorr/images/recipe/ingredients_title.jpg" alt=""></div>
                                    <ul class="ingredients__list">
                                        @foreach(explode("\n", $data->food) as $k => $v)
                                            <li>{{ $v }}</li>
                                        @endforeach
                                        <!-- <li>．白米 1杯</li>
                                        <li>．去骨雞腿 100公克</li>
                                        <li>．鮮香菇 1朵</li>
                                        <li>．南瓜 150公克</li>
                                        <li>．紅蘿蔔 100公克</li>
                                        <li>．毛豆仁 100公克</li>
                                        <li>．洋蔥 50公克</li>
                                        <li>．起司絲 50公克</li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="borderFrame recipe__seasoning">
                            <div class="borderFrame--outside">
                                <div class="borderFrame--inside">
                                    <div class="borderFrameTitle"><img src="/knorr/images/recipe/seasoning_title.jpg" alt=""></div>
                                    <ul class="seasoning__list">
                                        @foreach(explode("\n", $data->seasoning) as $k => $v)
                                            <li>{{ $v }}</li>
                                        @endforeach
                                        <!-- <li>鮮味炒手(奶素) 2平匙</li>
                                        <li>水2杯</li>
                                        <li>橄欖油1大匙</li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="borderFrame recipe__practice">
                            <div class="borderFrame--outside">
                                <div class="borderFrame--inside">
                                    <div class="borderFrameTitle"><img src="/knorr/images/recipe/practice_title.jpg" alt=""></div>
                                    <ul class="practice__list">
                                        @foreach(explode("\n", $data->practice) as $k => $v)
                                            <li>{{ $v }}</li>
                                        @endforeach
                                        <!-- <li>南瓜、洋蔥、紅蘿蔔、雞腿切丁；毛豆仁燙熟後洗去外膜，備用。</li>
                                        <li>白米洗淨瀝乾後放入電鍋內鍋中。</li>
                                        <li>加入所有調味料拌勻，再將所有材料排列入鍋。</li>
                                        <li>按下煮飯開關，煮好後加入起司絲拌勻即可。</li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="borderFrame delicious">
                    <div class="borderFrame--outside">
                        <div class="borderFrame--inside">
                            <div class="borderFrameTitle"><img src="/knorr/images/recipe/recipe1_delicious_title.png" alt=""></div>
                            <ul class="delicious__list">
                                @foreach(explode("\n", $data->secret) as $k => $v)
                                    <li>{{ $v }}</li>
                                @endforeach
                                <!-- <li>用電鍋煮什錦飯時，因為所有材料一起蒸煮，加太多的調味料的話反而會讓風味變得混雜。只要利用鮮味炒手調味，簡單方便又能讓什錦飯提味增鮮。</li>
                                <li>如果家裡沒有cheese絲也可以用cheese片取代，一樣可以有濃濃的cheese味唷~</li> -->
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
            <section class="moreFood">
                <div class="container">
                    <div class="moreFood__title"> <img src="/knorr/images/morefood_title.png" alt=""></div>
                    <ul class="moreFood__slider">
                        <li class="moreFood__slide"><a href=""><img src="/knorr/images/recipeList/meat-1.png" alt=""></a></li>
                        <li class="moreFood__slide"><a href=""><img src="/knorr/images/recipeList/meat-2.png" alt=""></a></li>
                        <li class="moreFood__slide"><a href=""><img src="/knorr/images/recipeList/meat-3.png" alt=""></a></li>
                        <li class="moreFood__slide"><a href=""><img src="/knorr/images/recipeList/meat-4.png" alt=""></a></li>
                        <li class="moreFood__slide"><a href=""><img src="/knorr/images/recipeList/meat-5.png" alt=""></a></li>
                        <li class="moreFood__slide"><a href=""><img src="/knorr/images/recipeList/meat-6.png" alt=""></a></li>
                        <li class="moreFood__slide"><a href=""><img src="/knorr/images/recipeList/seafood-1.png" alt=""></a></li>
                        <li class="moreFood__slide"><a href=""><img src="/knorr/images/recipeList/seafood-2.png" alt=""></a></li>
                        <li class="moreFood__slide"><a href=""><img src="/knorr/images/recipeList/seafood-3.png" alt=""></a></li>
                        <li class="moreFood__slide"><a href=""><img src="/knorr/images/recipeList/seafood-4.png" alt=""></a></li>
                        <li class="moreFood__slide"><a href=""><img src="/knorr/images/recipeList/vegetables-1.png" alt=""></a></li>
                        <li class="moreFood__slide"><a href=""><img src="/knorr/images/recipeList/vegetables-2.png" alt=""></a></li>
                        <li class="moreFood__slide"><a href=""><img src="/knorr/images/recipeList/vegetables-3.png" alt=""></a></li>
                        <li class="moreFood__slide"><a href=""><img src="/knorr/images/recipeList/vegetables-4.png" alt=""></a></li>
                        <li class="moreFood__slide"><a href=""><img src="/knorr/images/recipeList/vegetables-5.png" alt=""></a></li>
                        <li class="moreFood__slide"><a href=""><img src="/knorr/images/recipeList/vegetables-6.png" alt=""></a></li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
@endsection