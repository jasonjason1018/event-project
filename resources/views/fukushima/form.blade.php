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
                        <div class="form">
                            <div class="form-content">
                                <div class="form-section">
                                    <span class="form-label">
                                        <label for="username">真實姓名：</label>
                                    </span>
                                    <span class="form-input">
                                        <input id="username" type="text" />
                                    </span>
                                </div>
                                <div class="form-section">
                                    <span class="form-label">
                                        <label for="userphone">連絡電話：</label>
                                    </span>
                                    <span class="form-input">
                                        <input id="userphone" type="tel" />
                                    </span>
                                    <span id="userphoneMsg"></span>
                                </div>
                                        
                                <div class="form-section">
                                    <span class="form-label">
                                        <label for="usermail">E-mail ：</label>
                                    </span>
                                    <span class="form-input">
                                        <input id="usermail" type="email" />
                                    </span>
                                    <span id="usermailMsg"></span>
                                </div>
                            </div>
                            <div class="form-button"><a class="btn btn-next" href="javascript:void(0)"><span class="btn-text">送出</span></a></div>
                            <div class="form-notice">
                                <p>*聯絡資料將做為得獎時連絡使用，請填寫真實資料以免影響您的得獎權利。</p>
                            </div>
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
        window.hasUnValid = false;
        $(document).on('input', '#userphone, #usermail', function(){
            checkList = {
                userphone: /^09[0-9]{8}$/,
                usermail: /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/
            }
            id = $(this).attr('id');
            value = $(this).val();
            msg = $(`#${id}Msg`);
            if(!checkList[id].test(value)){
                msg.attr('style', 'color:red').text('請填寫正確資料!');
                window.hasUnValid = true;
                return false;
            }
            window.hasUnValid = false;
            msg.hide();
        })

        $(document).on('click', '.btn-next', function(){
            form = {};
            isEmpty = false;
            $('input').each((key, val) => {
                if(val.value == ''){
                    isEmpty = true;
                    return false;
                }
                form[val.id] = val.value;
            });
            if(isEmpty || window.hasUnValid){
                return false;
            }
            axios.post('/fukushima/saveFormData', form)
            .then((res) => {
                console.log(res.status);
                if(res.status != 200){
                    return false;
                }
            })
            .finally(() => {
                window.location.href="/fukushima/index";
            })
        });
    </script>
@endsection