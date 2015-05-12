<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ko">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>

    <link href="global.css" rel="stylesheet" type="text/css" />
    <!--[if lte IE 6]>
    <link href="ie.css" rel="stylesheet" type="text/css" />
    <![endif]-->
    <style type="text/css">
        body {
            font-family: "Century Gothic", "Gill Sans", Arial, sans-serif;
        }

        .col2 .main {
            /*width: 300px;*/
        }
        .sub-form {
            font-size: 0.8em;
        }
        .sub-form__label, .sub-form__empty, .sub-form__input-wrapper {
            /*float: left;*/
            /*margin-bottom: 1em;*/
            display: inline-block;
        }
        .sub-form__label, .sub-form__empty {
            clear: left;
            width: 42.59259259259259%;
            margin-right: 1.851851851851852%;
            text-align: right;
            font-weight: bold;
        }
        .sub-form__input-wrapper {
            box-sizing: border-box;
            width: 55.55555555555556%;
            padding-top: 2px;
            margin-bottom: -2px;
        }
        .sub-form__input-wrapper, .sub-form__label {
            vertical-align: top;
        }
        .sub-form__input-etc {
            background-color: #FBEF99;
            font-size: .9em;
        }
        .sub-form__input-etc--long {
            box-sizing: border-box;
            width: 100%;
        }
        .sub-form input[type=text]:focus,
        .sub-form input[type=email]:focus,
        .sub-form textarea:focus,
        .sub-form select:focus {
            background-color: #FDD041;
        }

        /* btn module */
        .btn {
            padding: 0.3em 0.8em;
            border: none;
            border-bottom: 2px solid #555;
            border-right: 2px solid #555;
            border-radius: 3px;
            vertical-align: middle;
        }
        .btn:hover {
            opacity: 0.8;
        }
        .btn--primary {
            background-color: #CBD893;
        }
        .btn--danger {
            background-color: darkred;
            color: white;
            border-bottom-color: indianred;
            border-right-color: indianred;
        }
        .btn--small {
            font-size: 0.8em;
        }


        /* helper */
        .brand-sans-serif {
            font-family: 'Helvetica', "Gill Sans", "Century Gothic", Arial, sans-serif;
        }
        .brand-monospace {
            font-family:"Courier New", "Lucida Console", Monaco, monospace;
        }
        .checkbox-wrapping-label {
            vertical-align: sub;
            display: inline-block;
        }

        /* vertical-align helper */
        .v-middle {
            vertical-align: middle;
        }
        .v-top {
            vertical-align: top;
        }
        .v-bottom {
            vertical-align: bottom;
        }
        .v-sub {
            vertical-align: sub;
        }
    </style>
</head>

<body class="col2 feature">
<div class="wrapper">
    <div class="banner">
        <div class="background"><p class="logo">CosmoFarmer 2.0</p>
            <div class="nav">
                <ul>
                    <li><a href="index.html" class="homeLink">Home</a></li>
                    <li><a href="/features/index.html" class="featureLink">Features</a></li>
                    <li><a href="/experts/index.html" class="expertLink">Experts</a></li>
                    <li><a href="/quiz/index.html" class="quizLink">Quiz</a></li>
                    <li><a href="/projects/index.html" class="projectLink">Projects</a></li>
                    <li><a href="/horoscopes/index.html" class="horoscopeLink">Horoscopes</a></li></ul>
                <br class="clear"  />
            </div>
            <!-- end nav -->
        </div>
        <!-- end background -->
    </div>
    <!-- end banner -->
    <div class="main">
        <h1 class="lead"><span class="section">Sign Up:</span> Reader Subscription Form </h1>
        <form class="sub-form" name="subForm" method="post" action="">
            <p>
                <label for="name" class="sub-form__label">What is your name?</label><!--
                --><span class="sub-form__input-wrapper">
                    <input type="text" name="name" class="sub-form__input-etc  brand-monospace  sub-form__input-etc--long" />
                </span>
            </p>
            <p>
                <label for="email" class="sub-form__label">What is your email address?</label><!--
                --><span class="sub-form__input-wrapper"><input type="text" name="email" class="sub-form__input-etc  brand-monospace  sub-form__input-etc--long" /></span>
            </p>
            <p>
                <span class="sub-form__label">Rate your apartment farming skills </span><!--
                --><span class="sub-form__input-wrapper">
                    <label class="checkbox-wrapping-label">
                        <input name="skill" type="radio" value="novice" />한글
                    </label>
                    <label class="checkbox-wrapping-label">
                        <input name="skill" type="radio" value="intermediate" />Intermediate
                    </label>

                    <label class="checkbox-wrapping-label">
                        <input name="skill" id="skill" type="radio" value="advanced" />camelCase
                    </label>

                </span>
            </p>
            <p>
                <label for="refer" class="sub-form__label">Where did you hear about us?</label><!--
                --><span class="sub-form__input-wrapper">
                    <select name="refer" class="sub-form__input-etc  brand-sans-serif">
                        <option value="null">Select One</option>
                        <option value="1">Friend</option>
                        <option value="2">Herban Jungle</option>
                        <option value="3">Compost Today</option>
                        <option value="4">Vanity Fair</option>
                    </select>
                </span>
            </p>
            <p>
                <label for="comments" class="sub-form__label">Any additional comments? </label><!--
                --><span class="sub-form__input-wrapper"><textarea name="comments" rows="4" class="sub-form__input-etc  brand-monospace  sub-form__input-etc--long"></textarea></span>
            </p>
            <p>
                <span class="sub-form__empty"></span><!--
                --><span class="sub-form__input-wrapper">
                    <input type="submit" name="Submit" class="btn  btn--primary  brand-sans-serif" value="Subscribe" />
                    <input type="reset" value="reset" class="btn  btn--danger  btn--small  brand-monospace"/>
                </span>
            </p>
        </form>
        <br class="clear" />
        <p class="privacy">CosmoFarmer.com believes that your privacy is important. Information collected at this site is limited to our  network of 9,872 partner affiliates. Your information will only be shared among them, and as part of our network's anti-spam policy you will be limited to one e-mail per partner affiliate per day, not to exceed a total of 9,872 e-mails a day. If you wish to opt out of this program please call us between the hours of 9:01-9:03am GMT.</p>
    </div>
    <!-- end main -->
    <div class="announce">
        <ul>
            <li><a href="#"><span class="title">Virgo: It's Your Month</span>Lorem ipsum dolor site amet.</a></li>
            <li><a href="#"><span class="title">Your Feedback </span>Lorem ipsum dolor site amet.</a></li>
            <li><a href="#"><span class="title">This Month's Survey </span>Lorem ipsum dolor site amet.</a></li>
            <li><a href="#"><span class="title">Indoor lawns: sod or seed? </span>Lorem ipsum dolor site amet.</a></li>
            <li><a href="#"><span class="title">Lorem Ipsum </span>Lorem ipsum dolor site amet.</a></li>
            <li><a href="#"><span class="title">Dolor site amet </span>Lorem ipsum dolor site amet.</a></li>
            <li><a href="#"><span class="title">Adipiscing elit </span>Lorem ipsum dolor site amet.</a></li>
            <li><a href="#"><span class="title">Euismod tincidunt </span>Lorem ipsum dolor site amet.</a></li>
        </ul>
    </div>
    <!-- end announce -->
    <address class="copyright">Copyright 2006, CosmoFarmer.com </address>
</div>
<!-- end wrapper -->
</body>
</html>