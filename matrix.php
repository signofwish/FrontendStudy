<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>matrix example</title>
    <style>
        body {
            font-family: Arial, 'Malgun Gothic', sans-serif;
        }
        .l-wrapper {
            max-width: 960px;
            min-width: 600px;
            margin: 0 auto;
        }

        /* matrix module */
        .matrix > li {
            display: inline-block;
            vertical-align: top;
            list-style: none;
            margin-right: 1em;
            margin-bottom: 1em;
        }
        .matrix img {
            display: block;
            width: 100%;
        }

        /* covers style */
        .cover {
            width: 23%;
            border: 1px solid #ddd;
        }
        .covers__text {
            padding: 0.5em;
            line-height: 1.8;
            background-color: #dddddd;
        }
        .covers__price {
            text-align:right;
            color: #999;
        }
    </style>
</head>
<body>
<div class="l-wrapper">
    <ul class="matrix">
        <?php for($i = 0 ; $i < 20 ; $i++){ ?>
            <li class="cover">
                <img style="height: <?= rand(100, 300) ?>px" src="http://workerssolidarity.org/wp-content/uploads/2014/04/book-1382078715221-18451-210x300.jpg" alt=""/>
                <div class="covers__text">
                    <strong>사회민주주의 전통과 <?= $i ?>...</strong>
                    <br/>
                    최일붕 지음
                    <div class="covers__price">
                        <span style="font-family: gulim, serif;">\</span>3,000
                    </div>
                </div>
            </li>
        <?php } ?>
    </ul>
</div>
</body>
</html>