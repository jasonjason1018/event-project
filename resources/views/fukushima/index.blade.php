@extends('fukushima.layout')
@section('content')
  <header>
    <div class="brand-logo"><a href="/fukushima/index"><img src="/fukushima/images/logo.png" alt="日本東北之美，福島" width="100%" /></a></div>
  </header>
  <div class="wrap">
    <div class="kv">
      <div class="container">
        <div class="slogan">
          <h1 class="slogan-title"> <span>專屬於你的福島之旅</span></h1>
          <h2 class="slogan-text"><span>網美的必遊景點、壯闊的大山大景、當地的特有美食、福島的獨特魅力…什麼樣的旅遊品味適合你？快來測測，一探究竟～</span></h2>
        </div>
        <div class="mascot">
          <div class="mascot-container">
            <div class="mascot-head"><span></span></div>
          </div>
          <div class="mascot-hand mascot-hand-left"><span></span></div>
          <div class="mascot-hand mascot-hand-right"><span></span></div>
        </div>
      </div>
    </div>
    <div class="content">
      <div class="container">
        <div class="prizt-text"><span>完成測驗 有機會得福島限量好禮</span></div>
        <div class="box">
          <div class="box-container">
            <div class="box-top"><span> </span></div>
            <div class="box-main">
              <div class="test-intro box-section" id="test-intro">
                <div class="test-content">
                  <p>下一趟你想來點怎樣的福島旅行呢?</p>
                  <p>跟著你的直覺選出答案，</p>
                  <p>找出最適合你的福島旅遊行程。</p>
                </div>
                <div class="test-button"><a class="btn btn-start" href="/fukushima/qa"><span class="btn-icon btn-icon-hand"></span><span class="btn-text">按鈕開始</span></a></div>
              </div>
            </div>
            <div class="box-bottom"><span> </span></div>
          </div>
        </div>
        <div class="map"><span></span>
          <div class="pin pin-1"><span></span></div>
          <div class="pin pin-2"><span></span></div>
          <div class="pin pin-3"><span></span></div>
          <div class="pin pin-4"><span></span></div>
        </div>
      </div>
    </div>
    <div class="notice">
      <div class="container">
        <h2 class="notice-title"> <span>注意事項</span></h2>
        <div class="notice-content">
          <p>活動時間2020/?/?-2020/?/? 做完測驗分享測驗結果及填寫資料即可參加抽獎，資料需填寫完整並確認填寫信箱可正常收信，若未完整填寫、或因資料錯誤致信件無法寄送，將視同放棄抽獎、得獎資格。</p>
          <div class="notice-list">
            <ol>
              <li>每名粉絲可多次參與活動，但每位得獎者限得獎一次，不得重覆得獎。</li>
              <li>得獎名單將於2020年?月?日同步公佈於此活動網頁和日本好好玩 福島GO GO GO粉絲團。並同步以手機簡訊及MAIL給得獎者，得獎者需於？／？前回覆相關資料，若主辦方沒收到回覆就視為放棄得獎。</li>
              <li>得獎者需配合主辦單位提供個人證件資料與相關領獎同意書，得獎者須依所得稅法扣繳。若得獎者不願意給付得獎商品之稅額，則視為自動棄權，不具得獎資格。</li>
              <li>得獎者需於領獎通知上所載之領獎期限內依領獎通知之內容回覆相關領獎資料，逾期或因資料不全或錯誤導致贈品通知無法寄送者，則視為放棄領獎資格。</li>
              <li>得獎者參加本活動而需支付之任何稅捐係屬得獎人依稅法之規定所需履行之義務，概與主辦單位無關，倘有稅務法令適用之爭議者，概由得獎人自行向開徵機關提出申訴。</li>
              <li>主辦單位如有任何因電腦、網路、電話、技術或其他不可歸責於本公司之事由，導致參加者資料無效之情況，本公司不負任何法律責任，參加者亦不得異議。</li>
              <li>主辦單位保留審核、決定及變更獎項內容之權利，如因不可抗拒之因素，本公司有權更換該獎項。</li>
              <li>上述活動辦法依主辦單位公告為主；本公司具有審核參加者資格和變更修改或終止本活動之權利，並有權對本活動所有事宜做出解釋或裁決。</li>
              <li>參加者若以惡意之電腦程式、或違反法律或其他明顯違反活動公平性之方式，意圖混淆或影響本活動結果者，一經本公司發現，主辦單位得取消其中獎資格，並得追回贈送獎項。參加者應自行承擔因違反相關規定所生之一切法律責任。</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- share Js-->
  <script src="/fukushima/scripts/lib/jquery.min.js"></script>
  <script src="/fukushima/scripts/main.js"></script>
@endsection