<?php
/**
 * Created by PhpStorm.
 * User: ygkim_Dev
 * Date: 2015-05-09
 * Time: 오후 12:31
 */
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ko">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
    <style>
        /* ====== media ====== */
        .media {
            margin: 10px;
        }

        /* clearfix */
        .media {
            overflow: hidden;
        }

        /* 이미지 밑으로 글자가 떨어지지 않게 하기 위한 것 */
        .bd {
            overflow: hidden;
        }

        .media .img {
            float: left;
            margin-right: 10px;
        }

        .media .img img {
            display: block;
        }

        .media .imgExt {
            float: right;
            margin-left: 10px;
        }

        /* ===== 특정 모양 구현 ===== */
        .intro {
            width: 500px;
            font-size: 13px;
            line-height: 1.8;
            border-bottom: 1px dashed lightseagreen;
            margin-bottom: 1em;
            padding-bottom: 1em;
        }
    </style>
</head>
<body>
<?php for($i = 0 ; $i < 5 ; $i++):
    $img_class = 'img';
    if($i%2 == 1){
        $img_class = 'imgExt';
    }
    ?>
    <div class="media intro">

        <a href="http://twitter.com/stubbornella" class="<?= $img_class ?>">
            <img width="100" height="100" src="cat.jpg" alt="me" />
        </a>

        <div class="bd">

            자치권 확대로 스코틀랜드 껴안기…FT "민족주의 완화가 캐머런 최대 과제"

            <?php if($i%3 == 1){ ?>
                (런던·서울=연합뉴스) 황정우 특파원 백나리 기자 = 영국 총선에서 보수당 압승을 이끈 데이비드 캐머런 총리가 '하나의 영국'이라는 원칙으로 국정을 운영하겠다면서 스코틀랜드에 대한 자치권 확대를 약속했다.

                캐머런 총리는 8일(현지시간) 런던 총리 관저 앞에서 한 기자회견에서 "하나의 국가, 하나의 영국 정당으로서 국정을 운영하겠다"면서 "영국을 더욱 강력하게 만들 것"이라고 말했다고 BBC방송과 일간 텔레그래프 등이 보도
            <?php } ?>
        </div>

    </div>
<?php endfor; ?>
</body>
</html>