<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $locale = locale_accept_from_http($_SERVER['HTTP_ACCEPT_LANGUAGE']);
    ?>

    <title>GJS - An Amazing Robot for Battle</title>
    <meta name="keywords" content="GJS, robot, battle robot, armor robot, fighting robot">

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="img/favicon.ico" rel="short icon"/>

    <link rel="stylesheet" href="http://7xqzjr.com1.z0.glb.clouddn.com/bootstrap.css">
    <link rel="stylesheet" href="http://7xs5ai.com1.z0.glb.clouddn.com/style.css" type="text/css" />
    <link rel="stylesheet" href="http://7xs5ai.com1.z0.glb.clouddn.com/dark.css" type="text/css" />
    <link rel="stylesheet" href="http://7xs5ai.com1.z0.glb.clouddn.com/animate.css" type="text/css" />
    <link rel="stylesheet" href="http://7xs5ai.com1.z0.glb.clouddn.com/magnific-popup.css" type="text/css" />
    <link rel="stylesheet" href="asset/css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="asset/css/fonts.css" type="text/css" />

    <link rel="stylesheet" href="http://7xs5ai.com1.z0.glb.clouddn.com/responsive.css" type="text/css" />
    <link rel="stylesheet" href="http://7xs5ai.com1.z0.glb.clouddn.com/colors.css" type="text/css" />
    <link rel="stylesheet" href="http://7xs5ai.com1.z0.glb.clouddn.com/main.css" type="text/css" />

    <script type="text/javascript" src="http://7xs5ai.com1.z0.glb.clouddn.com/jquery.js"></script>
    <script src="https://cdn1.lncld.net/static/js/av-mini-0.6.4.js"></script>
    <script type="text/javascript" src="http://7xs5ai.com1.z0.glb.clouddn.com/plugins.js"></script>
    <script type="text/javascript" src="asset/js/main.js"></script>
	<?php
		if ($locale == "zh") {
	?>
	
	<?php 
		} else {
	?>
		
	<?php 
		}
	?>

</head>

<body class="stretched">

<div id="wrapper" class="clearfix">

    <!-- ͷ���� -->
    <header id="header" class="transparent-header">

        <div id="header-wrap">

            <div class="container clearfix">


                <div id="mobile-preorder-btn">
                    <img class="mobile-preorder-btn" src="asset/img/btn.png" />
                </div>

                <!-- logo -->
                <div id="logo">
                    <a href="index.html" class="standard-logo">
                        <img src="img/icon.png">
                    </a>
                    <a href="index.html" class="retina-logo">
                        <img src="img/icon@2x.png">
                    </a>
                </div>


            </div>

        </div>

    </header>


    <!-- ������ -->
    <section id="slider" class="slider-parallax swiper_wrapper full-screen clearfix">
        <div class="swiper-container">
            <div class="swiper-wrapper">

                <div class="swiper-slide slide-1" style="background-image: url('http://7xs5ai.com1.z0.glb.clouddn.com/img_slider_bg_1.png');">
                    <div class="container clearfix">
                        <div class="slider-caption slider-caption-center">
                            <img class="title-img" data-caption-animate="fadeInUp" src="asset/img/img_title_dark@2x.png" />
                        </div>
                        <div class="slider-caption slider-caption-center">
                            <a href="#mc-embedded-subscribe-form">
                                <img class="preorder-btn" data-caption-animate="fadeInUp" src="asset/img/img_btn_preorder.png" />
                            </a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide slide-2" style="background-image: url('http://7xs5ai.com1.z0.glb.clouddn.com/img_slider_bg_2.png');">
                    <div class="container clearfix">
                        <div class="slider-caption slider-caption-center">
                            <img class="title-img" data-caption-animate="fadeInUp" src="asset/img/img_title_light@2x.png" />
                        </div>
                        <div class="slider-caption slider-caption-center">
                            <a href="#mc-embedded-subscribe-form">
                                <img class="preorder-btn" data-caption-animate="fadeInUp" src="asset/img/img_btn_preorder.png" />
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <div id="slider-arrow-left"><i class="icon-angle-left"></i></div>
            <div id="slider-arrow-right"><i class="icon-angle-right"></i></div>
        </div>

    </section>



    <section id="content">

        <div class="robot-section-1 clearfix">
            
            <div class="section-1-bg">
                <img src="http://7xs5ai.com1.z0.glb.clouddn.com/img_bg_section_1.png">
            </div>

            <div class="row topmargin-lg leftmargin-sm rightmargin-sm robot-section-title">
                <div class="center">
                    <p>It's So Amazing When A Robot Can Battle Like This</p>
                    <span class="divcenter">This robot is born for battle which is covered by the gallant metal armor.<br/>Try every kind of weapons, and win the battle.</span>
                </div>
            </div>

            <div class="video-area">
                <?php
                    if ($locale == "zh") {
                ?>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/yrP1RgmX_Uw" frameborder="0" allowfullscreen></iframe>
                <?php
                    } else {
                ?>
                        <embed src="http://player.youku.com/player.php/sid/XMTUxMDc1MjU2NA==/v.swf" allowFullScreen="true" quality="high" width="560" height="315" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed>
                <?php
                    }
                ?>

            </div>

        <div class="robot-section-2 clearfix">

            <div class="row topmargin-lg leftmargin-sm rightmargin-sm robot-section-title">
                <div class="center">
                    <p>Simple, Fast, Smooth</p>
                    <span class="divcenter">Use the Ganker APP to control the robot.<br/>
                    The robot contains 9 servo motors, so you can customize hundreds of actions and skills.</span>
                </div>
            </div>

            <div class="phone-container">
                <div class="center allmargin-lg img-phone-area" >
                    <img class="img-phone-1" src="http://7xqzjr.com1.z0.glb.clouddn.com/img_phone_1.png" >
                    <img class="img-phone-2" src="http://7xqzjr.com1.z0.glb.clouddn.com/img_phone_2.png" >
                </div>
            </div>

        </div>

        <div class="robot-section-3 clearfix">

            <div class="row topmargin-sm leftmargin-sm rightmargin-sm robot-section-title">
                <div class="center">
                    <p>More Information</p>
                    <span class="divcenter">If you're willing to have one, subscribe to our newsletter to get Important News, Amazing Offers & Inside Scoops:</span>
                </div>
            </div>

            <form id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" action="//icemoka.us13.list-manage.com/subscribe/post?u=be0bb0966db9a10b062d6a572&amp;id=0e37550ebf" role="form" method="post" class="nobottommargin">
                <div class="input-group input-group-lg divcenter" style="max-width:600px;">
                    <span class="input-group-addon"><i class="icon-email2"></i></span>
                    <input type="email" name="EMAIL" class="form-control required email" placeholder="Enter your Email" value="">
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_be0bb0966db9a10b062d6a572_0e37550ebf" tabindex="-1" value=""></div>
                    <span class="input-group-btn">
                        <button id="email-submit-btn" class="btn btn-success" type="submit">SUBMIT</button>
                    </span>
                </div>
            </form>

            <div class="divider divider-short divider-vshort divider-line divider-center">&nbsp;</div>

            <div class="col_full center topmargin nobottommargin">

                <a href="https://www.facebook.com/GJS-ROBOT-672568892885563/" class="social-icon si-facebook si-large si-rounded si-colored inline-block" title="Facebook">
                    <i class="icon-facebook"></i>
                    <i class="icon-facebook"></i>
                </a>

                <a href="https://www.youtube.com/channel/UCv5j-hiXiBW5ZOkyAVOMWZQ" class="social-icon si-youtube si-large si-rounded si-colored inline-block" title="Youtube">
                    <i class="icon-youtube"></i>
                    <i class="icon-youtube"></i>
                </a>

            </div>

        </div>

    </section>

    <footer id="footer" class="notopborder">

        <div id="copyrights">
            <div class="container center clearfix">
                Copyright &copy; 2016, GJS Co., Ltd. All Rights Reserved.
            </div>
        </div>

    </footer>

</div>

<script type="text/javascript" src="http://7xs5ai.com1.z0.glb.clouddn.com/functions.js"></script>
</body>
</html>