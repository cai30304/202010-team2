@extends('layouts.template')

@section('content')
    <section>
        <div class="banner_img">
            <img src="https://www.ambassador.com.tw/images/img/theater/breeze_banner.png" alt="">
            <h1>角頭戲院</h1>
        </div>
    </section>
    <div id="title" class="title">影城資訊</div>
    <section>
        <div class="content">
            <div class="container">
                <div class="sticky-menu">
                    <div class="sticky-title">快速選單</div>
                    <hr>
                    <ul>
                        <li>
                            <a href="#introduce">
                                <img src="https://www.ambassador.com.tw/images/icon/info_01@2x.png" width="60" alt="">
                                <span>影城資訊</span>
                            </a>
                        </li>
                        <li>
                            <a href="#traffic_title">
                                <img src="https://www.ambassador.com.tw/images/icon/info_02@2x.png"  width="60" alt="">
                                <span>交通位置</span>
                            </a>
                        </li>
                        <li>
                            <a href="#facility_title">
                                <img src="https://www.ambassador.com.tw/images/icon/info_04@2x.png" width="60" alt="">
                                <span>影廳設施</span>
                            </a>
                        </li>
                        <li>
                            <a href="#notice_title">
                                <img src="https://www.ambassador.com.tw/images/icon/info_05@2x.png" width="60" alt="">
                                <span>影城須知</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="InfoSection">
                    <div class="intro">
                        <div id="introduce" class="cell">
                            <b>影城簡介</b>
                            <p>
                                「角頭戲院」地處豐原中心，旁有熱鬧的廟東夜市，是首座結合購物中心的精緻都會型影城。高達八米的寬敞挑高與明亮清爽的大型落地玻璃帷幕，烘托出非凡的氣勢。
                                <br>
                                影城含無障礙座位共有1491席，搭配進口法國知名品牌Quinette及西班牙名家設計Figueras的高級座椅。舒適的觀影空間，全數位化的鮮豔成像、配備D-BOX炫耀4D動感座椅以及全廳院杜比環繞7.1聲道。業界尖端的觀影設備及優質的貼心服務帶給您最奢華的電影感受。
                            </p>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="icon">
                                            <img src="https://www.ambassador.com.tw/images/icon/t_01@2x.png" width="30" alt="">
                                        </td>
                                        <td>台中市豐原區中正路127號</td>
                                    </tr>
                                    <tr>
                                        <td class="icon">
                                            <img src="https://www.ambassador.com.tw/images/icon/t_02@2x.png" width="30" alt="">
                                        </td>
                                        <td>連絡電話：04-2522-5596</td>
                                    </tr>
                                    <tr>
                                        <td class="icon">
                                            <img src="https://www.ambassador.com.tw/images/icon/t_03@2x.png" width="30" alt="">
                                        </td>
                                        <td>電子信箱：sunyeh.fy@gmail.com</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div id="intro_img" class="cell">
                            <img src="https://www.ambassador.com.tw/images/img/theater/taichung_ev_01.png" alt="">
                        </div>
                    </div>
                    <div class="traffic">
                        <div id="traffic_title" class="traffic_title">
                            <div class="d-flex justify-content-center">
                                <img src="https://www.ambassador.com.tw/images/icon/info_02@2x.png" width="80" alt="">
                            </div>
                            <h3>交通資訊</h3>
                        </div>
                        <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3637.716529067277!2d120.71811311526612!3d24.2516913843446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34691a0f76c278fd%3A0x2877808fa5ca752d!2z5LiK55uK6LOH6KiK!5e0!3m2!1szh-TW!2stw!4v1603282873663!5m2!1szh-TW!2stw" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <th id="table_title" colspan="2">
                                        <h3>交通工具</h3>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="text-left">
                                <tr>
                                    <th>地理位置</th>
                                    <td>台中市豐原區中正路127號</td>
                                </tr>
                                <tr>
                                    <th>公共汽車</th>
                                    <td>
                                        <p>媽祖廟站：<br>55、63、90、91、212、213、215</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>開車指引</th>
                                    <td>
                                        <p>國道1號：<br>自國道一號豐原交流道〔168km〕下，往豐原市區方向開，行駛中正路大約10分鐘，即可看到慈濟宮。</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div id="facility_title" class="facility_title">
                        <div class="d-flex justify-content-center">
                            <img src="https://www.ambassador.com.tw/images/icon/info_04@2x.png" width="80" alt="">
                        </div>
                        <h3>影廳設施</h3>
                    </div>
                    <div class="facility">
                        <div id="surround" class="cell">
                            <img src="https://www.ambassador.com.tw/images/img/theater/facility_04.jpg" alt="">
                            <h3>DOLBY SURROUND 7.1聲道</h3>
                        </div>
                        <div id="Barco" class="cell">
                            <img src="https://www.ambassador.com.tw/images/img/theater/facility_03.jpg" alt="">
                            <h3>Barco 數位放映系統</h3>
                        </div>
                        <div class="note">
                            <h4>無障礙設施</h4>
                            <ul>
                                <li>無障礙購票窗口位於1樓臨櫃窗口，便於行動不便顧客購票。</li>
                                <li>無障礙廁所位置於4、6樓影城區內。</li>
                                <li>無障礙電梯位置於商場大廳為同一樓面設置。</li>
                                <li>服務及申訴專線：04-2522-5596。</li>
                            </ul>
                        </div>
                    </div>
                    <div id="notice_title" class="notice_title">
                        <div class="d-flex justify-content-center">
                            <img src="https://www.ambassador.com.tw/images/icon/info_05@2x.png" width="80" alt="">
                        </div>
                        <h3>影城須知</h3>
                    </div>
                    <div class="notice">
                        <div class="note">
                            <h4 class="subtitle">禁止攜入影廳食物須知</h4>
                            <div class="note_content">
                                <ul>
                                    <li>為維護清潔舒適的觀影環境及觀賞品質，禁止攜帶味道嗆辣、濃郁、高溫熱湯（飲）或食用時會發出聲響之食物進入影廳。
                                        <h5>Food that are spicy, have a strong odor, or can disturb others while chewing are not allowed inside the theatres (including hot soups and beverages).</h5>
                                    </li>
                                    <li>本影城全面禁煙、酒類及嚼食檳榔；請勿攜帶玻璃瓶、鐵鋁罐或寵物入場。
                                        <h5>No smoking, alcoholic beverages or betel nut chewing allowed. No glass bottles, metal cans or pets allowed.</h5>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="note">
                            <h4 class="subtitle">購票與退票須知</h4>
                            <div class="note_content">
                                <ul>
                                    <li>購買優待票觀眾請出示相關有效證明文件。
                                        <h5>Please show proper ID when purchasing discount tickets.</h5>
                                    </li>
                                    <li>請遵守影片分級制度相關規定。
                                        <h5>Please obey the movie rating system.</h5>
                                    </li>
                                    <li>電影票於開演前30分鐘恕不退換。
                                        <h5>Refunds and exchange of tickets will not be accepted thirty minutes prior to showtime.</h5>
                                    </li>
                                    <li>各式票券經劃位兌換後恕不退換。
                                        <h5>Tickets with assigned seating may not be exchanged.</h5>
                                    </li>
                                    <li>請當面清點您的找零及票券，離開櫃檯後恕不負責。
                                        <h5>Please make sure all your purchases are accounted for. Ambassador Theatres will not be responsible for any missing item once you have left the counter.</h5>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="note">
                            <h4 class="subtitle">其他影城使用須知</h4>
                            <div class="note_content">
                                <ul>
                                    <li>影城內全面禁止攝影及錄音。
                                        <h5>Photography and recording devices are prohibited inside the theatre.</h5>
                                    </li>
                                    <li>飲酒過量顯有醉意者，請勿入內。
                                        <h5>Drunk and awash guests are not allowed in the theatre.</h5>
                                    </li>
                                    <li>觀賞電影時，請勿大聲喧嘩或擱足於前排座椅。
                                        <h5>During the movie, please refrain from speaking loudly or putting your leg on the front seat.</h5>
                                    </li>
                                    <li>入內者請勿隨地吐痰、檳榔汁（渣）、口香糖、便溺、瓜果皮核、棄置廢棄物或有其他污染行為。
                                        <h5>Spitting betel nut, gum, seeds, and discharging bodily waste inside the theatre are strictly prohibited. Disruptive behavior in any form will not be tolerated. </h5>
                                    </li>
                                    <li>垃圾請丟入垃圾桶。
                                        <h5>Please place your trash into the trash can.</h5>
                                    </li>
                                    <li>本場所若有任何待改進事項，歡迎立即向服務人員反應。
                                        <h5>If you have any comments, please feel free to contact any staff member.</h5>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </section>
@endsection

@section('css')
<link rel="stylesheet" href="css/infoStyle.css">
@endsection

@section('js')

@endsection
