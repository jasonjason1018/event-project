@extends('knorr.layout')
@section('content')
    <div class="wrapper recipe recipe2">
        <div class="content__bg">
            <div class="container">
                <div class="backPage"><a href="/knorr/recipelist"><img src="/knorr/images/recipe/back.png" alt=""></a></div>
                <div class="recipe__board">
                    <div class="recipe__img">
                        <img class="hidden__phone" src="{{$data->picture1}}" alt="">
                        <img class="visible__phone" src="/knorr/images/recipe/recipe2-4m.jpg" alt="">
                    </div>
                    <div class="recipe__top">
                        <div class="borderFrame recipe__ingredients">
                            <div class="borderFrame--outside">
                                <div class="borderFrame--inside">
                                    <div class="borderFrameTitle"><img src="/knorr/images/recipe/ingredients_title.jpg" alt=""></div>
                                    <ul class="ingredients__list">
                                        @foreach(explode("\n", $data->food) as $k => $v)
                                            <li>{{ $v }}</li>
                                        @endforeach
                                        <!-- <li>．青蔥1支(蔥綠切蔥花、蔥白切段)</li>
                                        <li>．韓國泡菜70g(切小片)</li>
                                        <li>．豬五花肉70g(切小片)</li>
                                        <li>．冷白飯1碗(翻鬆)</li>
                                        <li>．蛋1顆</li>
                                        <li>．水1小匙</li> -->
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
                                        <!-- <li>鰹魚鮮味炒手1小匙</li>
                                        <li>麻油1大匙</li>
                                        <li>辣椒粉1小匙</li>
                                        <li>白胡椒粉1/4小匙</li> -->
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
                                            <li><img class="hidden__phone" src="{{$v}}" alt=""><img class="visible__phone" src="/knorr/images/recipe/recipe2-4_step1m.jpg" alt=""></li>
                                        @endforeach
                                        <!-- <li> <img class="hidden__phone" src="/knorr/images/recipe/recipe2-4_step1.jpg" alt=""><img class="visible__phone" src="/knorr/images/recipe/recipe2-4_step1m.jpg" alt=""></li>
                                        <li> <img class="hidden__phone" src="/knorr/images/recipe/recipe2-4_step2.jpg" alt=""><img class="visible__phone" src="/knorr/images/recipe/recipe2-4_step2m.jpg" alt=""></li>
                                        <li> <img class="hidden__phone" src="/knorr/images/recipe/recipe2-4_step3.jpg" alt=""><img class="visible__phone" src="/knorr/images/recipe/recipe2-4_step3m.jpg" alt=""></li>
                                        <li> <img class="hidden__phone" src="/knorr/images/recipe/recipe2-4_step4.jpg" alt=""><img class="visible__phone" src="/knorr/images/recipe/recipe2-4_step4m.jpg" alt=""></li>
                                        <li> <img class="hidden__phone" src="/knorr/images/recipe/recipe2-4_step5.jpg" alt=""><img class="visible__phone" src="/knorr/images/recipe/recipe2-4_step5m.jpg" alt=""></li> -->
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
                                <!-- <li>荷包蛋加水悶熟，能做出完美的半熟蛋! </li> -->
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