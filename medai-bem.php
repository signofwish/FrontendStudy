<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        .media {
            overflow: hidden;
        }

        .media__img {
            float: left;
            margin-right: 1em;
        }

        .media__img--rev {
            float: right;
            margin-right: 0;
            margin-left: 1em;
        }

        .media__body {
            overflow: hidden;
        }

        h1, h2, h3 {
            margin-top: 0;
        }

        .h1, .alpha {
            font-size: 2em;
        }
        .h2, .beta {
            font-size: 1.5em;
        }
        .h3, .gamma {
            font-size: 1.3em;
        }

        .intro {
            width: 500px;
            font-size: 13px;
            line-height: 1.8;
            border-bottom: 1px dashed lightseagreen;
            margin-bottom: 1em;
            padding-bottom: 1em;
        }

        .button {
            padding: 0.5em;
        }

        .button--primary {
            background-color: blue;
            color: white;
        }

        .button--primary {
            background-color: blue;
            color: white;
        }

        .button--primary {
            background-color: blue;
            color: white;
        }

        .button--primary {
            background-color: blue;
            color: white;
        }
        .button--primary {
            background-color: blue;
            color: white;
        }
        .button--primary {
            background-color: blue;
            color: white;
        }
    </style>
</head>
<body>
<a class="button button--primary" href="">button</a>
<header class="header">
    <img class="logo" src="" alt=""/>
</header>
<div class="sidebar">

</div>
<div class="footer">
    <img class="footer-logo" src="" alt=""/>
</div>

<?php for($i = 0 ; $i < 5 ; $i++):
    $img_class_modifier = '';
    if($i%2 == 1){
        $img_class_modifier = 'media__img--rev';
    }
    ?>
    <div class="media intro">

        <a href="http://twitter.com/stubbornella" class="media__img  <?= $img_class_modifier ?>">
            <img width="100" height="100" src="cat.jpg" alt="me" />
        </a>

        <div class="media__body">
            <h3 class="h1">Welcome to Foo Corp</h3>
            <p class="lede">                (런던·서울=연합뉴스) 황정우 특파원 백나리 기자 = 영국 총선에서 보수당 압승을 이끈 데이비드 캐머런 총리가 '하나의 영국'이라는 원칙으로 국정을 운영하겠다면서 스코틀랜드에 대한 자치권 확대를 약속했다.

                캐머런 총리는 8일(현지시간) 런던 총리 관저 앞에서 한 기자회견에서 "하나의 국가, 하나의 영국 정당으로서 국정을 운영하겠다"면서 "영국을 더욱 강력하게 만들 것"이라고 말했다고 BBC방송과 일간 텔레그래프 등이 보도
            </p>
        </div>

    </div>
<?php endfor; ?>

</body>
</html>