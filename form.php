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
        #subForm {
            font-size: 0.8em;
        }
        #subForm .label {
            float: left;
            clear: left;
            width: 230px;
            margin-right: 10px;
            text-align: right;
            font-weight: bold;
        }

        input#subscribe {
            margin-left: 240px;
            background-color: #CBD893;
            font-family: "Century Gothic", "Gill Sans", Arial, sans-serif;
        }

        select#refer {
            font-family: "Century Gothic", "Gill Sans", Arial, sans-serif;
        }

        input#name, input#email, textarea#comments {
            width: 300px;
            background-color: #FBEF99;
            font-family:"Lucida Console", Monaco, monospace;
            font-size: .9em;
            margin-top: -2px;
        }

        input#name:focus,
        input#email:focus,
        textarea#comments:focus,
        select#refer:focus
        {
            background-color: #FDD041;
        }

    </style>
</head>

<body id="feature" class="col2">
<div id="wrapper">
    <div id="banner">
        <div id="background"><p class="logo">CosmoFarmer 2.0</p>
            <div id="nav">
                <ul>
                    <li><a href="index.html" id="homeLink">Home</a></li>
                    <li><a href="/features/index.html" id="featureLink">Features</a></li>
                    <li><a href="/experts/index.html" id="expertLink">Experts</a></li>
                    <li><a href="/quiz/index.html" id="quizLink">Quiz</a></li>
                    <li><a href="/projects/index.html" id="projectLink">Projects</a></li>
                    <li><a href="/horoscopes/index.html" id="horoscopeLink">Horoscopes</a></li></ul>
                <br class="clear"  />
            </div>
            <!-- end nav -->
        </div>
        <!-- end background -->
    </div>
    <!-- end banner -->
    <div id="main">
        <h1 id="lead"><span class="section">Sign Up:</span> Reader Subscription Form </h1>
        <form id="subForm" name="subForm" method="post" action="">
            <p><label for="name" class="label">What is your name?</label>
                <input type="text" name="name" id="name" /></p>
            <p><label for="email" class="label">What is your email address?</label>
                <input type="text" name="email" id="email" /></p>
            <p>
                <span class="label">Rate your apartment farming skills </span>
                <label>
                    <input name="skill" type="radio" value="novice" />Novice</label>
                <label>
                    <input name="skill" type="radio" value="intermediate" />Intermediate</label>
                <label>
                    <input name="skill" type="radio" value="advanced" />Advanced</label>
            </p>
            <p>
                <label for="refer" class="label">Where did you hear about us? </label>
                <select name="refer" id="refer">
                    <option value="null">Select One</option>
                    <option value="1">Friend</option>
                    <option value="2">Herban Jungle</option>
                    <option value="3">Compost Today</option>
                    <option value="4">Vanity Fair</option>
                </select>
            </p>
            <p>
                <label for="comments" class="label">Any additional comments? </label>
                <textarea name="comments" rows="4" id="comments"></textarea>
            </p>
            <p>
                <input type="submit" name="Submit" id="subscribe" value="Subscribe" />
            </p>
        </form>
        <br class="clear" />
        <p class="privacy">CosmoFarmer.com believes that your privacy is important. Information collected at this site is limited to our  network of 9,872 partner affiliates. Your information will only be shared among them, and as part of our network's anti-spam policy you will be limited to one e-mail per partner affiliate per day, not to exceed a total of 9,872 e-mails a day. If you wish to opt out of this program please call us between the hours of 9:01-9:03am GMT.</p>
    </div>
    <!-- end main -->
    <div id="announce">
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
    <address id="copyright">Copyright 2006, CosmoFarmer.com </address>
</div>
<!-- end wrapper -->
</body>
</html>