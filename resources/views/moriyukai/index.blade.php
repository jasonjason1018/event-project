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
                <div class="slider area">
                    @foreach($data as $k => $v)
                        <div class="slider-items">
                            <div class="slider-items-container">
                                <figure class="area-img"><img src="{{ $v->img }}" alt="" /></figure>
                                <div class="area-content">
                                    <h2 class="area-name">{{ $v->name }}</h2>
                                    <div class="area-recommend">
                                        <div class="area-recommend-title">推薦指數</div>
                                        <ul class="area-star">
                                            @for($i=1;$i<=2;$i++)
                                                @if($i == 1)
                                                    @for($a=1;$a<=$v->recommend;$a++)
                                                        <li class="active"></li>
                                                    @endfor
                                                @else
                                                    @for($o=1;$o<=5-$v->recommend;$o++)
                                                        <li></li>
                                                    @endfor
                                                @endif
                                            @endfor
                                        </ul>
                                    </div>
                                </div>
                                <div class="slider-btn"><a class="btn" href="/moriyukai/info/{{ $v->id }}" title="跟著{{ $v->name }}玩福島"> <span>跟我玩福島</span></a></div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
        <div class="notice">
            <div class="container">
                <h2 class="notice-title"> <span>注意事項</span></h2>
                <div class="notice-content">
                    <p class="point">活動期間 2021/1/22-2021/2/19 ，正確回答相關問題，填寫資料後即可參加抽獎，資料須完整填寫並確認填寫信箱可正常收信，若未完整填寫導致無法聯繫，將視同放棄抽獎、獲獎資格。</p>
                    <div class="notice-list">
                        <ol>
                            <li>每名粉絲可多次參與活動，但每位得獎者限得獎一次，不得重覆得獎，禮物寄送僅限台灣本島。</li>
                            <li>得獎名單將於2021/2/22 同步公布於此活動網頁和日本好好玩 福島GO GO GO粉絲團。並同步以手機簡訊及MAIL給得獎者，得獎者須於2021/2/26 前回覆相關資料，若主辦方沒收到回覆就視為放棄得獎。</li>
                            <li>得獎者需配合主辦單位提供個人證件資料與相關領獎同意書，得獎者須依所得稅法扣繳。若得獎者不願意給付得獎商品之稅額，則視為自動棄權，不具得獎資格。</li>
                            <li>得獎者需於領獎通知上所載之領獎期限內依領獎通知之內容回覆相關領獎資料，逾期或因資料不全或錯誤導致贈品通知無法寄送者，則視為放棄領獎資格。</li>
                            <li>得獎者參加本活動而需支付之任何稅捐係屬得獎人依稅法之規定所需履行之義務，概與主辦單位無關，倘有稅務法令適用之爭議者，概由得獎人自行向開徵機關提出申訴。</li>
                            <li>主辦單位如有任何因電腦、網路、電話、技術或其他不可歸責於主辦單位之事由，導致參加者資料無效之情況，主辦單位不負任何法律責任，參加者亦不得異議。</li>
                            <li>主辦單位保留審核、決定及變更獎項內容之權利，如因不可抗拒之因素，主辦單位有權更換該獎項。</li>
                            <li>上述活動辦法依主辦單位公告為主；主辦單位具有審核參加者資格和變更修改或終止本活動之權利，並有權對本活動所有事宜做出解釋或裁決。</li>
                            <li>參加者若以惡意之電腦程式、或違反法律或其他明顯違反活動公平性之方式，意圖混淆或影響本活動結果者，一經主辦單位發現，主辦單位得取消其中獎資格，並得追回贈送獎項。參加者應自行承擔因違反相關規定所生之一切法律責任。</li>
                            <li>參加者所填之基本資料，主辦單位將依法予以保護並僅使用於日本好好玩福島GO GO GO「福島森友會大集合」之行銷活動中，不做其他用途。</li>
                            <li>中獎人同意中獎相關個人資訊由主辦單位於活動範圍進行蒐集、電腦處理及利用，中獎人並授權主辦單位公開公佈姓名，並不做其他用途。</li>
                        </ol>
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
    <script src="/moriyukai/scripts/lib/slick.js"></script>
    <script src="/moriyukai/scripts/index.js"></script>
@endsection