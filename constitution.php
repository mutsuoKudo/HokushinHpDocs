<!DOCTYPE HTML>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ＰＣリスト</title>
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
        h1{
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
                            <div class="col-md-3">

                                <ul id="mysidebar" class="nav">
                                    <li class="sidebarTitle">ホクシンシステムHP</li>

                                    <li>
                                        <a href="#">本体の仕様</a>
                                        <ul>
                                            <li><a href="pdf/screen_manual.pdf" target="_blank">画面遷移図</a></li>
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
                                        <a href="#">テスト・本番サイトへの反映方法</a>
                                        <ul>
                                            <li><a href="pdf/reflection_on_testsite_compressed.pdf" target="_blank">テストサイトへの反映方法</a></li>
                                            <li><a href="pdf/reflection_on_productionsite_compressed.pdf" target="_blank">本番サイトへの反映方法</a></li>
                                        </ul>
                                    </li>
                                    
                                    <li>
                                        <a href="#">SSL化</a>
                                        <ul>
                                            <li><a href="pdf/ssl_compressed.pdf" target="_blank">SSL化</a></li>
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
                            </div>

                            <!-- this highlights the active parent class in the navgoco sidebar. this is critical so that the parent expands when you're viewing a page. This must appear below the sidebar code above. Otherwise, if placed inside customscripts.js, the script runs before the sidebar code runs and the class never gets inserted.-->
                            <script>
                                $("li.active").parents('li').toggleClass("active");
                            </script>

                            <!-- Content Column -->
                            <div class="col-md-9" style="padding-bottom:10%;">
                                <div class="post-header">
                                    <h1 class="post-title-main">ホクシンシステムHPの構成について</h1>
                                </div>



                                <div class="post-content">

                                    <div class="pt50">
                                        <h2 style="text-align:left !important;">構成</h2>
                                        <ul>
                                            <ul class="pt10">＜PHPファイル＞
                                                <li>header.php → top（IE・iphone以外)用ヘッダー</li>
                                                <li>header-2.php → ナビゲーションバーコンテンツ用ヘッダー(社員の声以外)</li>
                                                <li>header-3.php → 募集要項用ヘッダー</li>
                                                <li>header-4.php → TOP(IE)用ヘッダー</li>
                                                <li>header-5.php → TOP(iphone)用ヘッダー</li>
                                                <li>header-7.php → 社員の声用ヘッダー</li>
                                                <li>header-8.php → 社員の声(iphone)用ヘッダー</li>

                                                <li class="pt20">page.php → ナビゲーションバーコンテンツ（社員の声以外）用 ページ</li>
                                                <li>page2.php → TOP（IE）用ページ</li>
                                                <li>page3.php → 募集要項用ページ</li>
                                                <li>page4.php → TOP（iphone）用ページ</li>
                                                <li>page5.php → 社員の声用ページ</li>
                                                <li>page6.php → ポリシー系用ページ</li>
                                                <li>page7.php → スラッグにハイフン入っているナビゲーションバーコンテンツ用</li>
                                                <li>page8.php → 社員の声(iphone)用</li>

                                                <li class="pt20">footer.php → top（IE）とその他ページ用フッター</li>
                                                <li>footer-2.php → top（IE・iphone以外)用</li>
                                                <li>footer-3.php → top(iphone) 用フッター</li>

                                                <li class="pt20">home.php → top（IE・iphone以外)用ページ</li>

                                                <li class="pt20">function.php → HPの決まりごとや設定</li>

                                                <li class="pt20">archive.php → アーカイブページ（使用していません）</li>
                                                <li>index.php → 補助topページ（使用していません）</li>
                                                <li>sidebar.php → サイドバー作成用（使用していません）</li>
                                                <li>single.php → 個別記事ページ（使用していません）</li>

                                            </ul>

                                            <ul class="pt20">＜CSS＞
                                                <li>style.css → 全ページ共通CSS</li>
                                                <li>index.css → top(iphone以外)CSS</li>
                                                <li>hokushin_old.css → 前バージョンからの引き継ぎCSS</li>
                                                <li>loading.css → ローディングCSS</li>
                                                <li>recruit.css → top以外のページCSS</li>
                                                <li>safari.css → top(iphone)CSS</li>
                                            </ul>

                                            <ul class="pt20">＜JS＞
                                                <li>common.js → 全ページ共通JS</li>
                                                <li>index.js → top（IE・iphone以外)用JS</li>
                                                <li>index2.js → top(iphone)JS</li>
                                                <li>parallax_310.js → 視覚効果用JS</li>
                                                <li>jQuery@3.js → jQuery</li>
                                                <li>jQuery_311.js → jQuery</li>
                                                <li>jQuery_341.js → jQuery</li>
                                                <li>jquery.rwdImageMaps.js → クリッカブルマップ用JS</li>
                                            </ul>

                                            <ul class="pt20">＜imagesフォルダ＞
                                                <li>背景として挿入した画像のフォルダ</li>
                                            </ul>

                                            <ul class="pt20">＜bootstrapフォルダ＞
                                                <li>bootstrap-4.3.1-distが入っています</li>
                                            </ul>

                                        </ul>
                                    </div>

                                </div>
                                <!-- /.row -->
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