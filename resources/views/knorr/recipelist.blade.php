@extends('knorr.layout')
@section('content')
    <div class="wrapper recipeList">
        <div class="content__bg">
            <div class="container">
                <h1 class="recipeList__title"><img src="/knorr/images/recipelist/recipelist_title.png" alt=""></h1>
                @foreach($type as $v)
                    <section class="recipeList__list {{$v}}List">
                        <div class="recipeList__listTitle"><img src="/knorr/images/recipelist/{{$v}}_title.png" alt=""></div>
                        <ul>
                            @foreach($data as $value)
                                @if($value->type == $v)
                                    <li class="recipeList__item">
                                        <a href="/knorr/recipe/{{ $value->sno }}">
                                            <img src="{{ $value->picture1 }}" alt="">
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </section>
                @endforeach
            </div>
        </div>
    </div>
@endsection