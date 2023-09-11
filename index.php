<?php include_once "blog/wordpress/wp-load.php";?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THE DAY BREWING</title>
    <meta name="海辺の町のビール醸造所">
    <meta name="robots" content="noindex,nofollow">
    <meta name="description" content="これはHTMLCSSの課題作品です。">
    <link rel="stylesheet" href="./CSS/ress.css">
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="icon" href="images/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP&family=Philosopher&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Anton&family=Lato:wght@100&family=Noto+Serif+JP&family=Philosopher&family=Roboto:wght@300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200&display=swap" rel="stylesheet">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <script src="./JS/jquery.simplemodal.1.4.4.min.js"></script> -->
    <script src="./JS/js.cookie.js"></script>
    <script src="./JS/jsjsjs.js"></script>
</head>

<body>
    <header class="top-header">
        <h1 id="top-logo"><a href="./index.php">the day brewing</a></h1>
        <div id="slide">
            <ul>
                <li><img src="images/big-waves.jpg" alt="img1"></li>
                <li><img src="images/brewery.jpg" alt="img2"></li>
                <li><img src="images/tap.jpg" alt="img3"></li>
                <li><img src="images/the-sea.jpg" alt="img4"></li>
                <li><img src="images/the-beach.jpg" alt="img4"></li>
                <li><img src="images/the-flower (2).jpg"img4"></li>
            </ul>
        </div>
        <div id="button1">
            <ul>
                <li><a href="#" class="target">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">6</a></li>
            </ul>
        </div>
        <div class="panel-content">
            <div class="wrap">
                <h2 class="entry-title">new!!</h2>
                <ul class="recent-entry-list">
            <?php
$args     = array('post_type' => 'post', 'posts_per_page' => 3);
$my_query = new WP_Query($args);
while ($my_query->have_posts()): $my_query->the_post();?>
	                <li>
	            <a href="<?php the_permalink();?>"><?php the_post_thumbnail('thumbnail');?><span class="recent-entry-date"><?php the_time('Y.m.d');?></span><span class="recent-entry-title"><?php the_title();?></span></a>
	</li>
	<?php endwhile;
wp_reset_postdata();?>
</ul>
</div>
</div>
    </header>
    <div class="page-header">
        <h1><a href="./index.php">the day brewing</a></h1>
        <nav class="menu">
            <ul>
                <li><a href="./index.php"><b>home</b></a></li>
                <li><a href="./story.html"><b>story</b></a></li>
                <li><a href="./brewery.html"><b>brewery</b></a></li>
                <li><a href="./shop.html"><b>beers</b></a></li>
                <!-- <li><a href="./news.html"><b>news</b></a></li> -->
                <li><a href="../blog/wordpress"><b>news</b></a></li>
                <!-- <li><a href="./recruit.html"><b>recruit</b></a></li> -->
                <li><a href="./wordpress/contact"><b>recruit</b></a></li>
            </ul>
        </nav>
    </div>

    <main>
        <section class="home-page">
            <div class="story fadeUpTrigger">
                <a href="./story.html">
                    <h2>story</h2>
                </a>

            </div>
            <div class="brewery fadeUpTrigger">
                <a href="./brewery.html">
                    <h2>brewery</h2>
                </a>
            </div>
            <div class="news fadeUpTrigger">
                <a href="./blog/wordpress/">
                    <h2>news</h2>
                </a>
            </div>
            <div class="shop fadeUpTrigger">
                <a href="./shop.html">
                    <h2>beers</h2>
                </a>
            </div>
            <div class="recruit fadeUpTrigger">
                <a href="./wordpress/contact">
                    <h2>recruit</h2>
                </a>
            </div>
        </section>


    </main>

    <footer>
        <div class="page-footer">
            <div class="address">
                <h1><a href="#">the day brewing</a></h1>

                <p>osaka-no-anoekino-asokorahen-39-37</p>
                <p>06-pppp-0001</p>
                <p>oishibeerdesu@beermail.com</p>
                <br>
                <p>JR XYZ駅 3番出口 徒歩すぐ</p>
                <p>このマップはダミーです。</p>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-instagram fa-xl"></i>
            </div>
            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.1068149892894!2d135.49144439399242!3d34.70248571407181!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e68d95e3a70b%3A0x1baec822e859c84a!2z5aSn6Ziq6aeF!5e0!3m2!1sja!2sjp!4v1687868092584!5m2!1sja!2sjp"
                    width="341" height="269" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="gyouhan">
                <div class="gyouhan-logo">
                    <h3>お取り扱いをご検討の飲食店様</h3>
                </div>
                <a href="nenkaku.html"><img src="./images/tap.jpg" alt=""></a>
            </div>
        </div>
<button id="testbtn">クッキー削除（テスト用</button>
    </footer>

    <!-- /modal -->

    <div id="privacy-panel">
        <div id="logo">the day brewing</div>
        <p class="taisho">このサイトは20歳以上の方を対象にしたアルコール飲料を<br>販売するサイトです。</p>
        <small>This website contains content related to alcohol.
            People under 20 years old of age are prohibited to visit this website.</small>
        <p class="umare">あなたは20歳以上ですか？</p>
        <small style="color: rgb(147, 112, 23);">Are you 20 years of age or older?</small>
        <div class="nenkaku-form">
            <button id="agreebtn" class="nenkakuyes" type="button" >
                <p id="yes">はい/YES</p>
                <small>サイトを閲覧する。</small><br>
                <small>Visit this website</small>
            </button>
            <button class="nenkakuno" type="button" >
                <p id="no">いいえ/NO</p>
                <small>トップページへ</small><br>
                <small>Back to main page</small>
            </button>
        </div>
    </div>
    <script>


        'use strict';
        const agree = Cookies.get('cookie-agree');
        const panel = document.getElementById('privacy-panel');

        if (agree === 'yes') {
            document.body.removeChild(panel);
        } else {
            document.getElementById("agreebtn").onclick = function () {
                Cookies.set('cookie-agree', 'yes', { expires: 7 });
                document.body.removeChild(panel);
            };
        }

        // クッキー削除（テスト用）
        document.getElementById('testbtn').onclick = function () {
            Cookies.remove('cookie-agree');
        };
    </script>
</body>

</html>