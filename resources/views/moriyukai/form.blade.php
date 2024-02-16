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
                    <div class="form">
                        <div class="form-content">
                            <form method="" action="">
                                <div class="form-section"><span class="form-label">
                                        <label for="username">真實姓名：</label></span><span class="form-input">
                                        <input id="username" type="text" name="name" /></span></div>
                                <div class="form-section"><span class="form-label">
                                        <label for="userphone">連絡電話：</label></span><span class="form-input">
                                        <input id="userphone" type="tel" name="phone" /></span>
                                    <span id="phone"></span>
                                </div>
                                <div class="form-section"><span class="form-label">
                                        <label for="usermail">E-mail ：</label></span><span class="form-input">
                                        <input id="usermail" type="email" name="email" /></span>
                                    <span id="email"></span>
                                </div>
                            </form>
                        </div>
                        <div class="form-notice">
                            <p class="point">*聯絡資料將做為得獎時連絡使用，請填寫真實資料以免影響您的得獎權利。</p>
                        </div>
                        <div class="btn-section"><a class="btn btn-next" href="javascript:data();"><span class="btn-text">送出</span></a></div>
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
    <!-- share Js-->
    <script src="/moriyukai/scripts/lib/jquery.min.js"></script>
    <script>
        $(document).on('click', '.btn-next', function(){
            checkList = {
                phone: /^09[0-9]{8}$/,
                email: /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/
            }
            form_data = $('form').serializeArray();
            isEmpty = false;
            form_data.map((row) => {
                if(row.value == ''){
                    isEmpty = true;
                    return false;
                }
                if(checkList[row.name] != undefined){
                    if(!checkList[row.name].test(row.value)){
                        $(`#${row.name}`).attr('style', 'color:red').text('請填寫正確資料!');
                        isEmpty = true;
                        return false;
                    }
                }
            });
            if(!isEmpty){
                param = {};
                form_data.forEach((v, k) => {
                    param[v.name] = v.value;
                })
                console.log(param);
                axios.post('/moriyukai/save_data', param)
                .then((res) => {
                    console.log(res);
                    if(res.status == 200){
                        window.location.href="/moriyukai/share"
                    }
                })
            }
        })
    </script>
@endsection