@extends('knorr.layout')
@section('content')
<div class="wrapper form">
    <div class="content__bg">
        <section class="container">
            <div class="form__board">
                <h1 class="form__title"><img src="/knorr/images/form/form_title.png" alt=""></h1>
                <p class="form__remind">請完整填寫您的資料，以便中獎才能通知您哦！</p>
                <div class="form__arrow"><img src="/knorr/images/form/form_arrow.png" alt=""></div>
                <form class="form__content">
                    <div class="form__group">
                        <div class="form__item form__itemFont">姓名</div>
                        <div class="form__input ipt__textarea">
                            <input type="name" name="ipt-name" id="ipt-name">
                            <span class="form__tnc">*資料將做為得獎通知使用，請務必填寫正確</span>
                        </div>
                    </div>
                    <div class="form__group">
                        <div class="form__item form__itemFont">姓別</div>
                        <div class="form__input">
                            <input type="radio" id="ipt_sex_b" name="ipt_sex" value="男">
                            <label for="ipt_sex_b"> 
                                <span></span>男
                            </label>
                            <input type="radio" id="ipt_sex_g" name="ipt_sex" value="女">
                            <label for="ipt_sex_g"> 
                                <span></span>女
                            </label>
                        </div>
                    </div>
                    <div class="form__group">
                        <div class="form__item form__itemFont">電話</div>
                        <div class="form__input ipt__textarea">
                            <input type="tel" id="ipt-tel" name="ipt-tel">
                            <span class="form__tnc">*資料將做為得獎通知使用，請務必填寫正確</span>
                        </div>
                        <span id="telMsg"></span>
                    </div>
                    <div class="form__group">
                        <div class="form__item form__itemFont">年齡</div>
                        <div class="form__input">
                            <select name="age">
                                <option value="20-24 歲">20-24 歲</option>
                                <option value="25-29 歲">25-29 歲</option>
                                <option value="30-34 歲">30-34 歲</option>
                                <option value="35-39 歲">35-39 歲</option>
                            </select></div>
                    </div>
                    <div class="form__group">
                        <div class="form__item form__itemFont">居住地方共有幾人？</div>
                        <div class="form__input">
                            <input type="radio" id="ipt_people-1" name="ipt_people" value="自己住">
                            <label for="ipt_people-1"> 
                                <span></span>自己住
                            </label>
                            <input type="radio" id="ipt_people-2" name="ipt_people" value="2人">
                            <label for="ipt_people-2"> 
                                <span></span>2人
                            </label>
                            <input type="radio" id="ipt_people-3" name="ipt_people" value="3-4人">
                            <label for="ipt_people-3">
                                 <span></span>3-4人
                            </label>
                            <input type="radio" id="ipt_people-4" name="ipt_people" value="5人以上">
                            <label for="ipt_people-4"> 
                                <span></span>5人以上
                            </label>
                        </div>
                    </div>
                    <div class="form__group">
                        <div class="form__item form__itemFont">請問以下哪種敘述，較符合您的料理習慣？</div>
                        <div class="form__input">
                            <input type="radio" id="ipt_times-1" name="ipt_times" value="每天會煮飯">
                            <label for="ipt_times-1"> 
                                <span></span>每天會煮飯
                            </label>
                            <input type="radio" id="ipt_times-2" name="ipt_times" value="每週會煮2次以上">
                            <label for="ipt_times-2"> 
                                <span></span>每週會煮2次以上
                            </label>
                            <input type="radio" id="ipt_times-3" name="ipt_times" value="只有特殊節日會煮飯">
                            <label for="ipt_times-3"> 
                                <span></span>只有特殊節日會煮飯
                            </label>
                        </div>
                    </div>
                    <div class="form__group">
                        <div class="form__item form__itemFont">請您煮飯的時候，較偏好的食材類型(可複選)？</div>
                        <div class="form__input">
                            <input type="checkbox" id="ipt_type-1" name="ipt_type" value="肉類">
                            <label for="ipt_type-1"> 
                                <span></span>肉類
                            </label>
                            <input type="checkbox" id="ipt_type-2" name="ipt_type" value="菜類">
                            <label for="ipt_type-2"> 
                                <span></span>菜類
                            </label>
                            <input type="checkbox" id="ipt_type-3" name="ipt_type" value="海鮮">
                            <label for="ipt_type-3"> 
                                <span></span>海鮮
                            </label>
                        </div>
                    </div>
                    <hr class="form__divider">
                    <div class="form__group form__detail">
                        <input type="checkbox" id="ipt_detail" name="ipt_detail">
                        <label class="form__itemFont" for="ipt_detail"> 
                            <span></span>我已經詳細閱讀活動辦法及蒐集個人資料聲明
                        </label>
                    </div>
                    <div class="form__group">
                        <div class="form__item form__itemFont">是否同意接收聯合利華及其合作夥伴的市場推廣資訊？</div>
                        <div class="form__input">
                            <input type="radio" id="ipt_info-1" name="ipt_info" value="是">
                            <label for="ipt_info-1"> 
                                <span></span>是
                            </label>
                            <input type="radio" id="ipt_info-2" name="ipt_info" value="否">
                            <label for="ipt_info-2"> 
                                <span></span>否
                            </label>
                        </div>
                    </div>
                </form>
            </div>
            <div class="form__btn submit"><a href="javascript:void(0)"><img src="/knorr/images/form/form_btn.png" alt=""></a></div>
            <!-- congratulations.html -->
        </section>
    </div>
</div>
<script>
    window.isValid = true;
    $(document).on('input', '#ipt-tel', function(){
        valid = /^09[0-9]{8}$/;
        if(!valid.test($(this).val())){
            $('#telMsg').attr('style', 'color:red;font-size:12px').text('請填入正確的手機號碼!');
            window.isValid = false;
            return false;
        }
        window.isValid = true
        $('#telMsg').hide();
    });

    $(document).on('click', '.form__btn', function() {
        if(!window.isValid)return;
        ipt_type = [];
        formData = {};
        form = $('.form__content').serializeArray();
        form.forEach((v, k) => {
            if(v.name == 'ipt_type'){
                ipt_type.push(v);
                return false;
            }
            formData[v.name] = v.value;
        });
        formData['ipt_type'] = ipt_type;
        if(Object.keys(formData).length >= $('.form__input').length){
            axios.post('/knorr/saveFormData', formData)
            .then((res) => {
                if(res.status != 200){
                    return false;
                }
            })
            .finally(() => {
                window.location.href="/knorr/congratulations"
            })
            return false;
        }
        console.log('error');
    });
</script>
@endsection