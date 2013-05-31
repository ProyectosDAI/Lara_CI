<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ginseng Bien</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="templates/frontend/default/css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="templates/frontend/default/css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="templates/frontend/default/css/layout.css" type="text/css" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Adamina' rel='stylesheet' type='text/css'>   
    <script src="templates/frontend/default/js/jquery-1.6.3.min.js" type="text/javascript"></script>
    <script src="templates/frontend/default/js/cufon-yui.js" type="text/javascript"></script>
    <script src="templates/frontend/default/js/cufon-replace.js" type="text/javascript"></script>
    <script src="templates/frontend/default/js/Lobster_13_400.font.js" type="text/javascript"></script>
    <script src="templates/frontend/default/js/NewsGoth_BT_400.font.js" type="text/javascript"></script>
    <script src="templates/frontend/default/js/FF-cash.js" type="text/javascript"></script>
    <script src="templates/frontend/default/js/easyTooltip.js" type="text/javascript"></script>
    <script src="templates/frontend/default/js/script.js" type="text/javascript"></script>
    <script src="templates/frontend/default/js/bgSlider.js" type="text/javascript"></script>
    <script src="templates/frontend/default/js/jquery.easing.1.3.js" type="text/javascript"></script>
    <script src="templates/frontend/default/js/tms-0.3.js" type="text/javascript"></script>
    <script src="templates/frontend/default/js/tms_presets.js" type="text/javascript"></script>
    <!--[if lt IE 7]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
            <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
    </div>
    <![endif]-->
    <!--[if lt IE 9]>
        <script type="text/javascript" src="js/html5.js"></script>
        <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
    <![endif]-->
</head>
<body id="page1">
    <div id="bgSlider"></div>
    <div class="bg_spinner"></div>
    <div class="extra">
        <!--==============================header=================================-->
        <header>
            <div class="top-row">
                <div class="main">
                    <div class="wrapper">
                        <h1><a href="/">GoodCook</a></h1>
                        <ul class="pagination">
                            <li class="current"><a href="templates/frontend/default/images/bg-img1.jpg">1</a></li>
                            <li><a href="templates/frontend/default/images/bg-img2.jpg">2</a></li>
                            <li><a href="templates/frontend/default/images/bg-img3.jpg">3</a></li>
                        </ul>
                        <strong class="bg-text">Background:</strong>
                    </div>
                </div>
            </div>
            <div class="menu-row">
                <div class="menu-border">
                    <div class="main">
                        <nav>
                            <ul class="menu">
                                <li><a class="active" href="index.html">Main</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="ic">More Website Templates @ TemplateMonster.com - September 26, 2011!</div>
        </header>
        <!--==============================content================================-->
        <div class="inner">
            <div class="main">
                <section id="content">
                <?php $this->load->view($controller .'/'. $view_file); ?>
                </section>
                <div class="block"></div>
            </div>
        </div>
    </div>
    <!--==============================footer=================================-->
    <footer>
        <div class="padding">
            <div class="main">
                <div class="wrapper">
                    <div class="fleft footer-text">
                        <span>Cocina con Ana</span> &copy; 2013
                        
                        <!-- {%FOOTER_LINK} -->
                    </div>
                    <ul class="list-services">
                        <li>Link to Us:</li>
                        <li><a class="tooltips" title="facebook" href="#"></a></li>
                        <li class="item-1"><a class="tooltips" title="twitter" href="#"></a></li>
                        <li class="item-2"><a class="tooltips" title="linkedin" href="#"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script type="text/javascript"> Cufon.now(); </script>
    <script type="text/javascript">
        $(window).load(function() {
            $('.slider')._TMS({
                duration:1000,
                easing:'easeOutQuart',
                preset:'simpleFade',
                slideshow:10000,
                banners:'fade',
                pauseOnHover:true,
                waitBannerAnimation:false,
                pagination:'.pags'
            });
        });
    </script>
</body>
</html>
