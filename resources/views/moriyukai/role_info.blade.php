<div class="area line-box">
    <figure class="areea-img"><img src="{{ $role_data->img }}" alt="" /></figure>
    <div class="area-content">
        <h2 class="area-name">{{ $role_data->name }}</h2>
        <div class="area-recommend">
            <div class="area-recommend-title">推薦指數</div>
            <ul class="area-star">
                @for($i=1;$i<=2;$i++)
                    @if($i == 1)
                        @for($a=1;$a<=$role_data->recommend;$a++)
                            <li class="active"></li>
                        @endfor
                    @else
                        @for($o=1;$o<=5-$role_data->recommend;$o++)
                            <li></li>
                        @endfor
                    @endif
                @endfor
            </ul>
        </div>
    </div>
</div>