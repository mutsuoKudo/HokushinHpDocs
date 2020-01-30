<!DOCTYPE HTML>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>自社HP説明書</title>
    <meta name="viewport" content="width=device-width">
    <meta name="keywords" content="キーワード">
    <meta name="description" content="紹介文">
    <link rel="stylesheet" href="../css/sp.css">
    <link rel="stylesheet" href="../css/pc.css">
    <!--[if lt IE 9]>
        <script src="js/html5.js"></script>
        <script src="js/css3-mediaqueries.js"></script>
        <![endif]-->

    <link rel="stylesheet" href="css/syntax.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!--<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">-->
    <link rel="stylesheet" href="css/modern-business.css">
    <link rel="stylesheet" href="css/lavish-bootstrap.css">
    <link rel="stylesheet" href="css/lightbox.min.css">
    <link rel="stylesheet" href="css/customstyles.css">
    <link rel="stylesheet" href="css/theme-blue.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script src="js/jquery.navgoco.min.js"></script>


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/anchor-js/2.0.0/anchor.min.js"></script>
    <script src="js/toc.js"></script>
    <script src="js/customscripts.js"></script>
    <script src="js/lightbox.min.js"></script>

    <link rel="alternate" type="application/rss+xml" title="ec-cube.github.io" href="http://idratherbewriting.comfeed.xml">

    <script>
        $(document).ready(function() {
            // Initialize navgoco with default options
            $("#mysidebar").navgoco({
                caretHtml: '',
                accordion: true,
                openClass: 'active', // open
                save: false, // leave false or nav highlighting doesn't work right
                cookie: {
                    name: 'navgoco',
                    expires: false,
                    path: '/'
                },
                slide: {
                    duration: 400,
                    easing: 'swing'
                }
            });

            $("#collapseAll").click(function(e) {
                e.preventDefault();
                $("#mysidebar").navgoco('toggle', false);
            });

            $("#expandAll").click(function(e) {
                e.preventDefault();
                $("#mysidebar").navgoco('toggle', true);
            });

        });
    </script>
    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>

    <style>
        .pt50 {
            padding-top: 50px !important;
        }

        .pt10 {
            padding-top: 10px !important;
        }

        .pt100 {
            padding-top: 100px !important;
        }

        h1 {
            color: #990000;
        }
    </style>

</head>

<body>

    <!-- メイン -->

    <main id="main">


        <!-- ヘッダー -->

        <header id="header">
            <div id="header_inner">
                <div id="h_info">
                    <img src="../img/tel_img.png" alt="information">
                </div>
            </div>
        </header>

        <?php
        require('../tpl/header-menu.php');
        ?>

        <!-- メイン画像 ここから -->
        <div id="header-img">
            <img src="../img/head_img_slim.png" alt="head_img_slim" class="main_photo">
        </div>
        <!-- メイン画像 ここまで -->
        <!-- ヘッダー終わり -->

        <!-- コンテンツ -->
        <!-- メインコンテンツ -->

        <article id="container">
            <section id="contents">

                <!-- Page Content -->
                <div class="container">
                    <div class="col-lg-12">&nbsp;</div>
                    <!-- Content Row -->
                    <div class="row">
                        <!-- Sidebar Column -->
                        <!-- <div class="col-md-3">

                            <ul id="mysidebar" class="nav">
                                <li class="sidebarTitle">ホクシンシステムHP</li>

                                <li>
                                    <a href="#">本体の仕様</a>
                                    <ul>
                                        <li><a href="pdf/screen_manual_compressed.pdf" target="_blank">画面遷移図</a></li>
                                        <li><a href="constitution.php">サイト構成について</a></li>
                                        <li><a href="hp-table.html" target="_blank">テーブル定義について</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="#">ローカル環境の設定の仕方</a>
                                    <ul>
                                        <li><a href="pdf/setting_local_compressed.pdf" target="_blank">ローカル環境の設定の仕方</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="#">HP更新・修正の仕方</a>
                                    <ul>
                                        <li>
                                            <a href="pdf/change_wording_compressed.pdf" target="_blank">各ページ文言の修正の仕方</a>
                                        </li>
                                        <li>
                                            <a href="pdf/add_news_compressed.pdf" target="_blank">ニュースの追加の仕方</a>
                                        </li>
                                        <li>
                                            <a href="pdf/add_job_compressed.pdf" target="_blank">募集職種の追加の仕方</a>
                                        </li>
                                        <li>
                                            <a href="pdf/replacement_margin_compressed.pdf" target="_blank">マージン率の差し替えの仕方</a>
                                        </li>
                                        <li>
                                            <a href="pdf/change_loading_compressed.pdf" target="_blank">ローディングバナーの文言変更の仕方</a>
                                        </li>
                                        <li>
                                            <a href="pdf/add_menu_compressed.pdf" target="_blank">メニューの追加の仕方</a>
                                        </li>
                                    </ul>
                                </li>

                            </ul>
                        </div> -->

                        <script>
                            $("li.active").parents('li').toggleClass("active");
                        </script>

                        <!-- Content Column -->
                        <div class="col-md-8 col-md-offset-2">

                            <h1 id="ホクシンシステムHP ドキュメント・マニュアル">ホクシンシステムHP</br>ドキュメント・マニュアル</h1>
                            <p>ホクシンシステムHPの開発ドキュメント（マニュアル）サイトです。 ホクシンシステムHPの画面説明、サイト構成などの情報を提供しています。

                                <div class="row" style="padding-bottom:10%;">
                                    <div class="col-md-12" style="padding-top:10%;">
                                        <h2 id="本体の仕様" style="text-align:left !important;">本体の仕様</h2>
                                        <ul>
                                            <li><a href="pdf/screen_manual_compressed.pdf" target="_blank">画面遷移図</a></li>
                                            <li><a href="constitution.php">サイト構成について</a></li>
                                            <li><a href="hp-table.html" target="_blank">テーブル定義について</a></li>

                                        </ul>
                                    </div>

                                    <div class="col-md-12" style="padding-top:10%;">
                                        <h2 id="ローカル環境の設定の仕方" style="text-align:left !important;">ローカル環境の設定の仕方</h2>
                                        <ul>
                                            <li><a href="pdf/setting_local_compressed.pdf" target="_blank">ローカル環境の設定の仕方</a></li>
                                        </ul>
                                    </div>

                                    <div class="col-md-12" style="padding-top:10%;">
                                        <h2 id="テスト・本番サイトへの反映方法" style="text-align:left !important;">テスト・本番サイトへの反映方法</h2>
                                        <ul>
                                            <li><a href="pdf/reflection_on_testsite_compressed.pdf" target="_blank">テストサイトへの反映方法</a></li>
                                            <li><a href="pdf/reflection_on_productionsite_compressed.pdf" target="_blank">本番サイトへの反映方法</a></li>
                                        </ul>
                                    </div>

                                    <div class="col-md-12" style="padding-top:10%;">
                                        <h2 id="SSL化" style="text-align:left !important;">SSL化</h2>
                                        <ul>
                                            <li><a href="pdf/ssl_compressed.pdf" target="_blank">SSL化</a></li>
                                        </ul>
                                    </div>


                                    <div class="col-md-12" style="padding-top:10%;">
                                        <h2 id="HP更新・修正の仕方" style="text-align:left !important;">HP更新・修正の仕方</h2>
                                        <ul>
                                            <li>
                                                <a href="pdf/change_wording_compressed.pdf" target="_blank">各ページ文言の修正の仕方</a>
                                            </li>
                                            <li>
                                                <a href="pdf/add_news_compressed.pdf" target="_blank">ニュースの追加の仕方</a>
                                            </li>
                                            <li>
                                                <a href="pdf/add_job_compressed.pdf" target="_blank">募集職種の追加の仕方</a>
                                            </li>
                                            <li>
                                                <a href="pdf/replacement_margin_compressed.pdf" target="_blank">マージン率の差し替えの仕方</a>
                                            </li>
                                            <li>
                                                <a href="pdf/change_loading_compressed.pdf" target="_blank">ローディングバナーの文言変更の仕方</a>
                                            </li>
                                            <li>
                                                <a href="pdf/add_menu_compressed.pdf" target="_blank">メニューの追加の仕方</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>


                        </div>
                        <!-- /.container -->
                    </div>
                </div>
            </section>

            <!-- メインコンテンツ終わり -->

        </article>

        <!-- コンテンツ終わり -->

        <!-- フッター -->

        <?php
        require('../tpl/footer.php');
        ?>

        <!-- フッター終わり -->

    </main>

    <!-- メイン終わり -->

</body>

</html>