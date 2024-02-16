@extends('fukushima.layout')
@section('content')
<div class="event-wrap">
	<div class="event-title">
		<div class="title-letsgo"><span>Let's Go! 福島</span></div>
	</div>
	<div class="event-content">
		<div class="box">
			<div class="box-container">
				<div class="box-top"><span> </span></div>
				<div class="box-main">
					@foreach($data as $k => $v)
						<div class="q" id="question-{{ $k }}">
							<div class="q-header">
								<div class="q-img"><img src="/fukushima/images/q.png" alt="" /></div>
								<h3 class="q-title">{{ $v->question }}</h3>
							</div>
							<div class="q-content">
								<div class="q-check">
									<input type="radio" value="1" id="q{{ $k }}-1" name="q" />
									<label for="q{{ $k }}-1"></label><span>是</span>
								</div>
								<div class="q-check">
									<input type="radio" value="0" id="q{{ $k }}-2" name="q" />
									<label for="q{{ $k }}-2"></label><span>不是</span>
								</div>
							</div>
							<div class="q-button">
								<a class="btn btn-next" value="{{ $k }}" href="javascript:void(0)"><span class="btn-text">下一步</span></a>
							</div>
						</div>
					@endforeach
				</div>
			</div>
			<div class="box-bottom"><span> </span></div>
		</div>
	</div>
</div>
<div class="map"><span></span>
	<div class="pin pin-1"><span></span></div>
	<div class="pin pin-2"><span></span></div>
	<div class="pin pin-3"><span></span></div>
	<div class="pin pin-4"><span></span></div>
</div>
</div>
<!-- share Js-->
<script src="/fukushima/scripts/lib/jquery.min.js"></script>
<script src="/fukushima/scripts/question.js"></script>
<script>
	window.nowQuestion = 0;
	window.answerList = [];
	window.redirectList = {
		6:'c',
		7:'e',
		8:'b',
		9:{
			0:'a',
			1:'d'
		},
	};
	window.total = "{{ $total-1 }} ";

	$('input[type="radio"]').on('click', function(){
		window.answerList[window.nowQuestion] = $(this).val();
	});

	$(document).on('click', '.btn-next', function() {
		value = $(this).attr('value');
		$(`#question-${ window.nowQuestion }`).hide();
		window.nowQuestion ++;
		if(answerList[parseInt(window.nowQuestion)-1] == undefined){
			window.nowQuestion --;
		}
		if(answerList[parseInt(window.nowQuestion)-1] == 1){
			if(window.redirectList[parseInt(window.nowQuestion)-1] != undefined){
				window.nowQuestion --;
				redirectPage();
			}
		}else if(answerList[parseInt(window.nowQuestion)-1] == 0 && parseInt(window.nowQuestion)-1 == window.total){
			window.nowQuestion --;
			redirectPage();
		}
		$(`#question-${ window.nowQuestion }`).show();
	});

	const redirectPage = () => {
		param = window.nowQuestion == window.total?window.redirectList[nowQuestion][answerList[parseInt(window.nowQuestion)]]:window.redirectList[nowQuestion];
		window.location.href=`/fukushima/result/${ param }`;
		return false;
	}
</script>
@endsection