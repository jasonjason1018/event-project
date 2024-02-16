@extends('knorr.layout')
@section('content')
    <div class="wrapper event">
        <div class="content__bg">
            <section class="container">
                <div class="event__board">
                    <h1 class="event__title"><img src="/knorr/images/event/event_title.png" alt=""></h1>
                    <div class="event__block">
                        <div class="event__blockTitle">活動日期：</div>
                        <div class="event__blockText">2019/5/27(一)起至2019/7/31(三)止</div>
                    </div>
                    <div class="event__block">
                        <div class="event__blockTitle">活動說明：</div>
                        <div class="event__blockText">
                            <div class="event__blockSubtitle">專屬你的彈指天菜：</div>
                            <ul class="event__list event__textIndent">
                                <li>1. 凡於活動期間於本網站參加「專屬你的彈指天菜」活動，並留下完整抽獎名單資料，即可獲得「九陽 全自動洗碗機」乙台的抽獎機會！</li>
                                <li>2. 由於得獎者聯繫需要，抽獎名單資料須完整填寫，以避免影響個人權益。</li>
                                <li>3. 活動截止時間，以本網站伺服器時間為準。</li>
                            </ul>
                        </div>
                    </div>
                    <div class="event__block">
                        <div class="event__blockTitle">獎品介紹：</div>
                        <div class="event__blockText">
                            <div class="event__blockSubtitle">九陽 全自動洗碗機 乙台：</div><img class="event__blockImg" src="/knorr/images/event/event_img.jpg" alt="">
                            <p>價值：18,000元，共送出1名</p>
                        </div>
                    </div>
                    <div class="event__block">
                        <div class="event__blockTitle">抽獎與公佈日期：</div>
                        <div class="event__blockText">以電腦隨機方式抽出得獎者，並於2019/8/9公布於本活動網站的活動辦法中。</div>
                    </div>
                    <div class="event__block">
                        <div class="event__blockTitle">中獎通知：</div>
                        <div class="event__blockText">得獎名單將公布於活動網站，並由活動小組致電聯繫與詢問詳細的獎品寄送地址、時間等。活動小組將於平日上班時段聯繫得獎者(10:00-17:00)，若於2019/8/30日前皆聯繫不上，視同放棄資格。如因得獎者更改領獎資料未通知主辦單位，致未收到獎品，視同得獎者放棄得獎權利，主辦單位有權取消獲獎資格且不另抽候補名單。</div>
                    </div>
                    <div class="event__block slide__toggle">
                        <div class="event__blockTitle slide__show">活動注意事項</div>
                        <div class="event__blockText">
                            <ul class="event__list event__textIndent">
                                <li>1. 全部獎項抽出後於本網站公告得獎人名單，中獎人同意主辦單位及活動小組進行蒐集、電腦相關處理及利用，並授權公開公佈相關中獎人資料。</li>
                                <li>2. 本活動獎品寄送地區僅限臺灣地區(包含本島及金門、澎湖、馬祖等臺灣外島)，恕無法寄送至前述地區以外之海外地區。</li>
                                <li>3. 參加者於參加本活動之同時，即視為同意接受本活動之活動辦法、注意事項及特別聲明(包含但不限於上傳照片及著作權說明)、聯合利華隱私保護原則等規範。如有違反前述任一內容之情事，主辦單位將取消其得獎資格。</li>
                                <li>4. 如有任何因個人電腦、網路、電話、技術性或不可歸責於主辦單位之事由，而使參加者所寄出或登錄之資料有遲延、遺失、錯誤、無法辨識或毀損之情況致無法參加本活動，主辦單位不負任何法律責任，參加者亦不得因此異議。</li>
                                <li>5. 一旦發現有蓄意攻擊本活動相關網站或本活動之程式、或有使用該等程式之參加者、或以任何方式擾亂本活動公平原則之行為(包括但不限於以任何方式導致系統異常或竄改網站程式機制而影響活動結果)，主辦單位有權取消該參加者之參加紀錄與抽獎資格。因此得獎者，其得獎無效，並應將其所得獎項返還予主辦單位。</li>
                                <li>6. 參加者使用之照片不得涉及色情、暴力、違反善良風俗或侵害他人之著作權、名譽權、肖像權、隱私權等權益，如發現相關照片有違反法令或侵害他人權益之虞，主辦單位得採取一切其認為適當之措施，包括不另通知參加者即取消其資格、將相關照片移除及追回所核發之獎項等，參加者須自行負擔相關法律責任，並賠償主辦單位所受之一切損失。</li>
                                <li>7. 參加者保證所有填寫、提出之個人資料均為真實且正確，如有不實或不正確之情事，將被取消得獎資格，且如有致生損害於主辦單位或其他任何第三人，應負一切民刑事責任。主辦單位對於任何不實或不正確之資料不負任何法律責任。</li>
                                <li>8. 抽獎及得獎資格均須經主辦單位查驗合格方為有效，一切查驗標準以主辦單位為準，並為唯一憑據，拒絕配合之參加者即喪失該資格。</li>
                                <li>9. 中獎者應同意，除以主辦單位自行進口販售的商品為獎品者外，主辦單位對於中獎者因使用本活動獎品而導致之任何事故不須負任何賠償責任。所有獎品日後之使用與維修，主辦單位概不負責。</li>
                                <li>10. 贈品運送過程中，因非可歸責於主辦單位之事由造成損壞、延遲、錯遞或遺失，主辦單位概不負責。</li>
                                <li>11. 所有獎品均不得兌換現金及不得轉讓。</li>
                                <li>12. 主辦單位擁有保留、修改、暫停及解釋活動內容之權利，修改訊息將於活動網站上公佈，不另行通知。</li>
                            </ul>
                        </div>
                    </div>
                    <div class="event__block slide__toggle">
                        <div class="event__blockTitle slide__show">蒐集個人資料聲明</div>
                        <div class="event__blockText">
                            <div class="event__blockSubtitle">我們向您蒐集的個人資料</div>
                            <ul class="event__list event__textIndent">
                                <li>1.聯合利華股份有限公司(下稱聯合利華)在您自願情況下蒐集您的個人資料。</li>
                                <li>2.「個人資料」是指任何關於您的資料或訊息，使（a）從該資料;或（b）從我們具有或可能具有的資料和其他訊息，可確定您的身分。我們可以向您蒐集如下所列出的個人資料類別，包括 *電郵、*姓名、*聯絡電話和以任何形式所提供給我們或通過其他與您互通的訊息。</li>
                                <li>3.您可自願選擇是否向聯合利華提供您的個人資料，若拒絕提供上文第2段具有星號標記的個人資料，恕我們未必可以向您提供我們的產品或服務，因我們不能確認您的身分，若有不便之處敬請見諒。</li>
                            </ul>
                            <div class="event__blockSubtitle">我們如何利用您的個人資料</div>
                            <ul class="event__list event__textIndent">
                                <li>4. 蒐集及利用個人資料目的包括： a. 通知您相關活動訊息； b. 內部市場及客戶之統計調查； c. 遵守任何法律，法規或法院命令規定需要揭露的責任；及d.任何直接如上述目的有關的其他目的。</li>
                                <li>5. 利用個人資料方式包括以自動化機器或其他非自動化之方式。</li>
                            </ul>
                            <div class="event__blockSubtitle">我們如何利用您的個人資料</div>
                            <ul class="event__list event__textIndent">
                                <li>6. 我們會向下列第三方揭露您的個人資料，用於以下目的：<ul class="event__list event__textIndent">
                                        <li>(A) 任何第三方服務供應商、管理、經營或執行您的帳號或全球會籍的商業合作夥伴或顧問及/或我們的一般業務管理；及</li>
                                        <li>(B) 按照上文第4（c）段任何法律、法規、政府、稅務、執法或其他主管機關所需要揭露的。</li>
                                    </ul>
                                </li>
                                <li>7. 我們可能會轉移並儲存您的個人資料至臺灣以外的地方。我們會採取一切合理需要的措施確保您的個人資料安全和根據蒐集個人資料聲明及個人資料保護法處理。</li>
                            </ul>
                            <div class="event__blockSubtitle">直接促銷</div>
                            <ul class="event__list event__textIndent">
                                <li>8. 聯合利華希望可使用您的個人資料作直接促銷目的，但我們在未得到您的書面同意之前不能如此使用您的個人資料。如果您以勾選在我們活動頁面上的相關空格或使用其他書面方式表示您同意，我們可不時根據您在相關空格、或其他書面方式所同意的個人資料（例如，您的姓名、聯絡方式等），依下列目的使用您的個人資料：<ul class="event__list event__textIndent">
                                        <li>(A) 促銷我們的產品和服務</li>
                                        <li>(B) 推廣我們的贈獎活動、會員計畫、品牌聯合或優惠計畫及相關服務和活動。</li>
                                    </ul>
                                </li>
                                <li>9. 聯合利華亦希望可提供您的個人資料給第三者作直接促銷目的，但我們在未得到您的同意之前不能如此使用您的個人資料。如果您以勾選在我們活動頁面上的相關空格或使用其他書面方式表示您同意，我們可不時根據您在相關空格、或其他書面方式所同意的個人資料（例如，您的姓名、聯絡方式等），與下列各方分享您的個人資料：<ul class="event__list event__textIndent">
                                        <li>(A) 本集團內的任何單位：（i）促銷我們認為您可能感興趣的產品和服務；和/或（ii）推廣自己的贈獎活動、會員計畫、品牌聯合或優惠計畫及相關服務；和/或</li>
                                        <li>(B) 我們的品牌合作夥伴，讓他們促銷其服務和產品。</li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="event__blockSubtitle">安全保存</div>
                            <ul class="event__list event__textIndent">
                                <li>10. 我們將採取所有合理措施以確保您的個人資料安全。為了防止未經授權使用或揭露，我們已實施技術和組織安全措施，以防護和保護您的個人資料，並確保根據蒐集個人資料聲明和適用的法律使用個人資料。</li>
                                <li>11. 個人資料在網際網路被儲存、使用或傳輸不是完全安全的。我們將採取一切合理措施保護您的個人資料，但我們沒有任何控制權，也不能保證您透過網際網路傳送的個人訊息的安全性。因此，任何此類儲存、使用或傳輸需您自擔風險。</li>
                                <li>12. 我們的行動應用程式及網站可能、不時和第三方的網站連接。如果您連接到這些網站，請注意，這些網站可擁有自己的隱私政策，而我們亦不會為上述政策承擔任何責任或義務。請向這些網站提交任何個人資料前，查看政策。</li>
                                <li>13. 我們將按照相關法律、監管規定和我們內部資料保留政策規定，在必要的時間内保留您的個人資料。</li>
                            </ul>
                            <div class="event__blockSubtitle">Cookies</div>
                            <ul class="event__list event__textIndent">
                                <li>14. 有關我們如何使用cookies，請參考我們的Cookie Policy (www.unilevercookiepolicy.com/tc/policy.aspx )。</li>
                            </ul>
                            <div class="event__blockSubtitle">您的資料隱私權</div>
                            <ul class="event__list event__textIndent">
                                <li>15. 聯合利華將致力保護您提供之個人資料。依據個人資料保護法第三條規定，您了解，就您所提供之個人資料可以用後述任何方式聯絡我們（消費者服務專線0800-311699，郵寄地址：11071台北市忠孝東路四段550號3樓，電子信箱：cec.taiwan@unilever.com)，行使下列權利：<ul class="event__list event__textIndent">
                                        <li>(1) 得向聯合利華查詢或請求閱覽、請求製給複製本，惟聯合利華依法得酌收必要成本費用；</li>
                                        <li>(2) 得向聯合利華請求補充或更正，惟依法您應為適當之釋明；</li>
                                        <li>(3) 得向聯合利華請求停止蒐集、處理或利用以及請求刪除，惟依法聯合利華因執行職務所必須者，得不依您的請求為之。</li>
                                    </ul>
                                </li>
                                <li class="event__link">16. 如需要更多關於我們如何處理您的個人資料，請參考我們的聯合利華隱私保護政策（http://www.unileverprivacypolicy.com/traditional_chinese/policy.aspx）。</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection