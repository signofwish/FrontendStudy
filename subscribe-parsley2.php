<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>정기구독</title>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js-lib/Parsley/dist/parsley.remote.js"></script>
    <script src="js-lib/Parsley/dist/parsley.min.js"></script>
<!--    <script src="js-lib/jquery-validation/dist/additional-methods.min.js"></script>-->
<!--    <script src="js-lib/jquery-validation/dist/localization/messages_ko.min.js"></script>-->
<!--    <script src="js/subscribe.js"></script>-->
    <script src="js/subscribe-parsley2.js"></script>
    <style>
        label.error {
            color: crimson;
        }
        .typing-field.error {
            background-color: indianred;
            color: white;
        }

        input[type=text].parsley-error {
            border: 1px solid red;
        }

        .parsley-error {
            color: red;
        }

        .parsley-error-list {
            color: red; 
        }
    </style>
</head>
<body>
<form name="frm" class="js-subscribe-form" data-parsley-validate>

    <input type="submit"/>

    <h3>*신규/연장 구분</h3>
    <div class="radio">
        <input required id="gubun_신규" name="gubun" value="신규" type="radio" data-parsley-required-message="필수!">
        <label for="gubun_신규">신규</label>
    
        <input required id="gubun_연장" name="gubun" value="연장" type="radio" data-parsley-required-message="필수!" >
        <label for="gubun_연장">연장</label>
    </div>


    <h3>암호</h3>
    <input type="password" name="pw" id="pw" data-parsley-required />
    <input type="password" name="pw2" id="pw2" />
    

    <h3 class='js-error-class-target'>*신청인</h3>
    <div class="js-error-msg"></div>
    <div class="subscription-name long-input">
        <input required class="typing-field" id="OrdNm" type="text" name="OrdNm" 
               data-parsley-class-handler=".js-error-class-target"
               data-parsley-errors-container=".js-error-msg">
    </div>



    <h3>*소속(직장/학교 등) </h3>

    <div class="long-input"><input class="typing-field" id="sosok" type="text" name="sosok"></div>


    <h3>*연락처</h3>

    <div class="long-input"><input class="typing-field" id="RcpPhone" type="tel" name="RcpPhone"></div>


    <h3>*E-mail</h3>

    <div class="long-input"><input class="typing-field" id="UserEmail" type="email" name="UserEmail" data-parsley-remote="subscribe-ajax-validation.php" data-parsley-remote-message="이메일 값이 중복되어 있습니다." data-parsley-type-message="이메일 주소를 제대로 입력해주세요"></div>


    <h3>*국내/해외</h3>

    <div class="radio subscription-country">
        <label>
            <input name="domestic" value="국내" type="radio">
            국내
        </label>
        <label>
            <input name="domestic" value="해외" type="radio">
            해외
        </label>
        <label class="error" for="domestic"></label>

        <h4>해외인 경우 필수 선택</h4>
        <div class="overseas is-hidden js-overseas">
            <label>
                <input name="country" value="일본,대만,홍콩,중국,마카오" type="radio">
                일본, 대만, 홍콩, 중국, 마카오
            </label>

            <label>
                <input name="country" value="동남아시아" type="radio">
                동남아시아
            </label>

            <label>
                <input name="country" value="북미,유럽,호주,중동" type="radio">
                북미, 유럽, 호주, 중동
            </label>

            <label>
                <input name="country" value="중남미,아프리카" type="radio">
                중남미, 아프리카
            </label>

            <label class="error" for="country"></label>
        </div>
    </div>

    <h3>*우편번호</h3>

    <div class="short-input address">
        <div id="address-error"></div>
        <input class="typing-field" type="tel" name="zipcode"/>
    </div>

    <h3>*주소 :</h3>

    <div class="long-input address address-input"><input class="typing-field" name="address1" id="address1" size="50" type="text"></div>
    <div class="long-input address address-input"><input class="typing-field" name="address2" id="address2" size="50" type="text"></div>


    <h3>*구독기간 <sub>(현재 최신 호는 148호, 발행기간 : 2015-05-11
            ~05-24)</sub></h3>

    <div class="short-input">
        <input type="text" name="start_hosoo" data-parsley-type="integer">
        호부터<label class="error" for="start_hosoo"></label>
    </div>

    <div class="radio subscription-period">
        <label>
            <input name="gigan" value="1년" type="radio">
            1년
        </label>
        <label>
            <input name="gigan" value="2년" type="radio">
            2년
        </label>
        <label>
            <input name="gigan" value="3년" type="radio">
            3년
        </label>

        <p>(정기구독 연장 신청 시 만료호 다음호부터 자동 연장됩니다.)</p>
    </div>

    <h3>
        후원
        <sub>&lt;노동자 연대&gt;는 기업 광고와 정부 지원을 전혀 받지 않습니다.</sub>
    </h3>

    <div class="short-input">
        <input class="typing-field" id="support" name="support" value="0" type="number" pattern="[0-9]*">원을
        추가로 후원하겠습니다.
    </div>

    <h3>총 결제 금액</h3>

    <div class="short-input">
        <input name="pay_money" class="readonly_bg" id="pay_money" value="50000" type="hidden">
                <span class="readonly_bg">
                    <span class="subscription-sum">50,000</span>
                원
                </span>
    </div>

    <h3>*결제방법</h3>

    <div class="radio pay-method">
        <p class="platform-dependent" id="pay-method-notice" style="display: none;">
            <sub>
                모바일이나 윈도우즈가 아니면
                무통장입금 신청만 가능합니다.
            </sub>
        </p>
        <label class="error" for="pay_method"></label>
        <label class="platform-dependent" id="pay-method-credit">
            <input name="pay_method" type="radio" value="onlycard" data-action="/agspay/AGS_pay.php">
            신용카드
        </label>
        <label class="platform-dependent" id="pay-method-hp">
            <input name="pay_method" type="radio" value="onlyhp" data-action="/agspay/AGS_pay.php">
            핸드폰 결제
        </label>
        <label class="platform-dependent" id="pay-method-ars">
            <input name="pay_method" type="radio" value="onlyars" data-action="/agspay/AGS_pay.php">
            ARS 결제
        </label>
        <label class="platform-dependent" id="pay-method-credit-mobile" style="display: none;">
            <input name="pay_method" type="radio" value="card" data-action="/agspay-mobile/AGS_pay.php">
            신용카드(모바일)
        </label>
        <label class="platform-dependent" id="pay-method-hp-mobile" style="display: none;">
            <input name="pay_method" type="radio" value="hp" data-action="/agspay-mobile/AGS_pay.php">
            핸드폰 소액 결제(모바일)
        </label>
        <label id="pay-method-mtj">
            <input name="pay_method" type="radio" value="mtj" data-action="/9_subscribe_action.php">무통장입금
        </label>

        <div class="mtj is-hidden">
            <h3>*무통장입금시 입금인</h3>

            <p>신청자와 입금자가 다를 경우 입금인 이름을 기록해 주세요</p>

            <div class="long-input subscription-payer">
                <input class="typing-field" name="bank_name" id="bank_name" type="text">
            </div>
            <h3>*무통장 입금하실 은행을 선택해 주세요</h3>

            <div id="mtj-bank-kind-error"></div>
            <label><input id="bank_kind_kb" type="radio" name="bank_kind" value="kb">국민은행</label>
            <label><input id="bank_kind_nh" type="radio" name="bank_kind" value="nh">농협</label>
            <!--label><input id="bank_kind_hana"    type="radio" name="bank_kind" value="hana" data-errorPlacement='#mtj-bank-kind-error'>하나은행</label>
            <label><input id="bank_kind_woori"   type="radio" name="bank_kind" value="woori">우리은행</label>
            <label><input id="bank_kind_shinhan" type="radio" name="bank_kind" value="shinhan">신한은행</label-->
            <h3>무통장 입금 계좌 안내 <sub>(예금주 : (주)레프트미디어)</sub></h3>
            <ul>
                <li>국민은행 020601-04-080896</li>
                <li>농협 301-0010-1643-71</li>
            </ul>
        </div>
    </div>

    <h3>남기실 말씀</h3>

    <div class="long-input">
        <textarea class="typing-field" id="Remark" name="Remark"></textarea>
    </div>

    <h3>취미(필수 아님. 그러나 선택하면 2개 이상 선택)</h3>


    <div>
        <label for="hobby_1">취미1</label>
        <input data-parsley-check="[2,3]" type="checkbox" name="hobby" id="hobby_1"/>
        
        <br>

        <label for="hobby_2">취미2</label>
        <input data-parsley-check="[2,3]" type="checkbox" name="hobby" id="hobby_2"/>
        
        <br>

        <label for="hobby_3">취미3</label>
        <input data-parsley-check="[2,3]" type="checkbox" name="hobby" id="hobby_3"/>
        
        <br>

        <label for="hobby_4">취미4</label>
        <input data-parsley-check="[2,3]" type="checkbox" name="hobby" id="hobby_4"/>
        
        <br>

        <label for="hobby_5">취미5</label>
        <input data-parsley-check="[2,3]" type="checkbox" name="hobby" id="hobby_5"/>
    </div>
    <label class="error" for="hobby"></label>

    <div class="submit"><input class="button white" value="신청합니다" type="submit">
    </div>


</form>
</body>
</html>