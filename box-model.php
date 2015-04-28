<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <style>
        body {
            width: 980px;
            font-family: 'Apple SD Gothic Neo', '애플 SD 고딕 Neo', 'NanumBarunGothic', 'NanumBarunGothicOTF', '나눔바른고딕', '나눔바른고딕OTF', 'Malgun Gothic', '맑은 고딕', 'NanumGothic', 'NanumGothicOTF', '나눔고딕', '나눔고딕OTF', sans-serif;
        }
        .division3 {
            width: 33%;
            float: left;
            margin: 0 20px 0 20px;
        }
        .division3 > hgroup {
            font-size: 20px;
        }

        .division3 .content {
            background-color: #eeeeee;
            font-size: 14px;
            line-height: 1.6;
            padding: 20px 20px 20px 40px;
            margin-top: 20px;
            border: 1px solid #dddddd;
        }
        .division3:last-child {
             
        }

        a {
            text-decoration: none;
            color: #000000;
        }
    </style>
</head>
<body>
    <?php
    $i = 0;
    while($i++<3){ ?>
        <div class="division3  <?= ( $i == 3 ) ? 'division3--last' : '' ?>">
            <hgroup>
                <h3>휴온스 <span>소식</span></h3>
                <span></span>
            </hgroup>
            <ul class="content">
                <li>
                    <a href="javascript:return false;">
                        중국 피부미용 의료기기 인기로 수출물량 2.5배↑ </a>
                    <span>2015.04.08</span>
                </li>
                <li>
                    <a href="javascript:return false;">
                        세계판매1위 금연보조제 니코레트 판매 </a>
                    <span>2015.04.08</span>
                </li>
                <li>
                    <a href="javascript:return false;">
                        중국공장 가동으로 글로벌 헬스케어 그룹 박차 </a>
                    <span>2015.03.27</span>
                </li>
                <li>
                    <a href="javascript:return false;">
                        패혈증 신약개발 임상2상 승인 </a>
                    <span>2015.03.27</span>
                </li>
                <li>
                    <a href="javascript:return false;">
                        자동주입 가능한 엘라비에 밸런스 필러 독점 판매 </a>
                    <span>2015.03.27</span>
                </li>
                <li>
                    <a href="javascript:return false;">
                        휴메딕스, 중국시장 진출 통한 매출 극대화 기대 </a>
                    <span>2015.03.27</span>
                </li>
            </ul>
        </div>
    <?php } ?>


</body>
</html>