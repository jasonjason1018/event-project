@extends('knorr.layout')
@section('content')
    <div class="wrapper questions">
        <div class="content__bg">
            <div class="container">
                <h1 class="questions__title"><img src="/knorr/images/question/question_title.png" alt=""></h1>
                <section class="questions__content">
                    <div class="questions__board">
                        <div class="questions__question">A. 如果人生是齣戲，你覺得自己像是哪類戲劇的主角?</div>
                        <div class="answer"></div>
                    </div>
                    <div class="questions__btn">
                        <div class="questions__btn--prev"><a href="javascript:void(0)"><img src="/knorr/images/question/question_btn_prev.png" alt=""></a></div>
                        <div class="questions__btn--next"><a href="javascript:void(0)"><img src="/knorr/images/question/question_btn_next.png" alt=""></a></div>
                        <div class="questions__btn--result"><a href="javascript:void(0)"><img src="/knorr/images/question/question_btn_result.png" alt=""></a></div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <script>
        window.question = '1';
        window.Q1 = '1';
        window.Q2 = '1';

        $(document).ready(function(){
            page1();
        });

        function page1(){
            html = '';
            for(i=1;i<=4;i++){
                check = '';
                if(i == Q1){
                    check = 'answer__select';
                }
                html += `<div class="answer${i} ${check}"><img class="hidden__phone" src="/knorr/images/question/q1-a${i}.png" alt=""><img class="visible__phone" src="/knorr/images/question/q1-a${i}m.png" alt=""></div>`;
            }
            $('.answer').html(html);
            $('.questions__btn--prev').hide();
            $('.questions__btn--result').hide();
            $('.questions__btn--next').show();
        }

        function page2(){
            window.Q2 = '1';
            html = '';
            for(i=1;i<=4;i++){
                check = '';
                if(i == Q2){
                    check = 'answer__select';
                }
                html += `<div class="answer${i} ${check}"><img class="hidden__phone" src="/knorr/images/question/q2-a${Q1}-${i}.png" alt=""><img class="visible__phone" src="/knorr/images/question/q2-a${Q1}-${i}m.png" alt=""></div>`;
            }
            $('.answer').html(html);
            $('.questions__btn--prev').show();
            $('.questions__btn--result').show();
            $('.questions__btn--next').hide();
        }

        $(document).on('click', ".answer1, .answer2, .answer3, .answer4", function(){
            $('.answer__select').removeClass('answer__select');
            $(this).addClass('answer__select');
            answer = $(this).attr('class').split(' ')[0].split('answer')[1];
            if(window.question === '1'){
                window.Q1 = answer;
            }else{
                window.Q2 = answer;
            }
        });

        $(".questions__btn--next, .questions__btn--prev").on('click', function(){
            buttonType = $(this).attr('class').split('questions__btn--')[1];
            if(buttonType === 'next'){
                window.question = '2';
                page2();
                return false;
            }
            window.question = '1';
            page1();
        });

        $(".questions__btn--result").on('click', function(){
            param = JSON.stringify({Q1: window.Q1, Q2: window.Q2});
            window.location.href=`/knorr/result/${param}`;

        });
    </script>
@endsection