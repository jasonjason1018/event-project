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

                    <form id="form">
                        @foreach($question as $k => $v)
                            <div class="q line-box" id="question-{{ $k }}">
                                <div class="q-num"> <span>{{ $k }}</span></div>
                                <h3 class="q-title">{{ $v['topic'] }}</h3>
                                <div class="q-content">
                                    <div class="q-check">
                                        <input type="radio" value="1" name="q{{ $k }}" id="q{{ $k }}-1" />
                                        <label for="q{{ $k }}-1"></label><span>{{ $v['Q1'] }}</span>
                                    </div>
                                    <div class="q-check">
                                        <input type="radio" value="2" name="q{{ $k }}" id="q{{ $k }}-2" />
                                        <label for="q{{ $k }}-2"></label><span>{{ $v['Q2'] }}</span>
                                    </div>
                                    <div class="q-check">
                                        <input type="radio" value="3" name="q{{ $k }}" id="q{{ $k }}-3" />
                                        <label for="q{{ $k }}-3"></label><span>{{ $v['Q3'] }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </form>

                    <div class="btn-section">
                        <a class="btn" id="sendans" href="javascript:void(0)"> <span>送出答案</span></a>
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
    <div class="qbox" id="correct">
        <div class="qbox-container">
            <div class="qbox-border">
                <h3 class="qbox-title">恭喜你，答對了！</h3>
                <div class="qbox-content">
                    <p> <span>趕快前往填寫資料，就能參加抽獎，</span><span>有機會獲得日本限定好禮！</span></p>
                </div>
            </div>
            <div class="qbox-btn">
                <a class="btn" href="/moriyukai/form"> <span>參加抽獎</span></a>
            </div>
        </div>
    </div>
    <div class="qbox" id="incorrect">
        <div class="qbox-container">
            <div class="qbox-border">
                <h3 class="qbox-title">歐歐！你答錯了！</h3>
                <div class="qbox-content">
                    <p> <span>答案就在介紹說明中，仔細看看～</span><span>你會找到解答的！</span></p>
                </div>
            </div>
            <div class="qbox-btn"><a class="btn btn-warning" href="/moriyukai/info/{{ $role_data->id }}"><span>再挑戰一次</span></a></div>
        </div>
    </div>
    <!-- share Js-->
    <script src="/moriyukai/scripts/lib/jquery.min.js"></script>
    <script src="/moriyukai/scripts/lib/jquery.fancybox.min.js"></script>
    <script src="/moriyukai/scripts/question.js"></script>
    <script>
        window.ans = "{{ $ans }}"

        $(document).on('click', '#sendans', function(){
            iscorrect = "#correct";
            arr = $('#form').serializeArray();
            if(arr.length < 3)return false;
            Object.keys(arr).forEach((key) => {
                if(arr[key].value != window.ans.split(',')[key]){
                    iscorrect = "#incorrect";
                }
            })
            $.fancybox.open({
                src: iscorrect,
                type: 'inline'
            });
        });
    </script>
@endsection