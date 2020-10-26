<?
// cookie for popupMessage popup
setcookie ("popupMessage", 1,time()+3600);/* период действия - 1 час */
?>
<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="google-site-verification" content="UnHLeAJIEJcNM1aMMSNPeb3z1DipzhxJmmmnAf0WLjI" />
        <title>Лазарет | Лечение алкоголизма | Помощь</title>
        <!-- Google Font -->
        <link href='https://fonts.googleapis.com/css?family=Raleway:500,600,700,800,900,400,300' rel='stylesheet' type='text/css'>
        <link type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,700,300,400italic,700italic&subset=latin,cyrillic-ext" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Exo+2:400,100,200,100italic,300,200italic,300italic,400italic&subset=latin,cyrillic,latin-ext' rel='stylesheet' type='text/css'>
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Owl Carousel Assets -->
        <link href="css/owl.carousel.css" rel="stylesheet">
        <link href="css/owl.theme.css" rel="stylesheet">
        <!-- Pixeden Icon Font -->
        <link rel="stylesheet" href="css/Pe-icon-7-stroke.css">
        <!-- Font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <!-- PrettyPhoto -->
        <link href="css/prettyPhoto.css" rel="stylesheet">
        
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
        <!-- Style -->
        <link href="css/style.css?v1534" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <!-- Responsive CSS -->
        <link href="css/responsive.css" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        
        <?php
        include_once $_SERVER['DOCUMENT_ROOT'].'/clickfrogru_udp_tcp.php';
        ?>
        <script type="text/javascript">
        var __cs = __cs || [];
        __cs.push(["setCsAccount", "fOQ5741bDC2dCqNpGXyVonoi5LLWaZYp"]);
        </script>
        <script type="text/javascript" async src="https://app.comagic.ru/static/cs.min.js"></script>
        <style>
            .blink {
                animation: blinkerv 1s linear infinite;
                -webkit-animation: blinkerv 1s linear infinite;

/*                animation-name: blinker;
                animation-iteration-count: infinite;
                animation-timing-function: cubic-bezier(.7,0,0,.5);
                animation-duration: 2s;
                -webkit-animation-name: blinker;
                -webkit-animation-iteration-count: infinite;
                -webkit-animation-timing-function: cubic-bezier(.7,0,0,.5);
                -webkit-animation-duration: 2s;*/
            }

            @keyframes blinker {
                from { opacity: 1.0; }
                to { opacity: 0.0; }
            }

            @-webkit-keyframes blinker {
                from { opacity: 1.0; }
                to { opacity: 0.0; }
            }
            @keyframes blinkerv {
              50% {
                opacity: 0;
              }
            }
            @-webkit-keyframes blinkerv {
              50% {
                opacity: 0;
              }
            }

        </style>
    </head>
    <body>
        <!-- PRELOADER 
        <div class="spn_hol">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
         END PRELOADER -->
        <!-- =========================
        START ABOUT US SECTION
        ============================== -->
        <section class="header parallax home-parallax page mbl--header" id="HOME">
            <div class="section_overlay">
                <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">
                                <img src="images/logom.png" alt="Лазарет">
                            </a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <!-- NAV -->
                                <li><a href="#HOME">Анонимная помощь</a> </li>
                                <li><a href="#ABOUT">Все о нашем лечении</a> </li>
                                <!--li><a href="#FEATURES">УСЛУГИ НАРКОЛОГИИ</a></li-->
                                <li><a href="#SCREENZZ">НАШИ ПРЕИМУЩЕСТВА</a> </li>
                                <!--<li><a href="#DOWNLOAD">DOWNLOAD </a> </li>-->
                                <li><a href="#CONTACT">ОБРАТНАЯ СВЯЗЬ</a> </li>
								<li><a href="#CONTACT">8 (812) 604-70-03</a></li>
                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                    <!-- /.container- -->
                </nav>
                <div class="container home-container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="logo mbl--header--logo">
                                <!-- LOGO -->
                                <img src="/images/logo.jpg" alt="Лазарет">
                                <br>
                                отделение неотложной помощи <br>лицензия № ЛО-78-01-008620
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                            <div class="logo_p mbl--header--phone">
                                <a href="tel:+78126047003" onclick="yaCounter46840173.reachGoal('helpLPTopPhoneClick'); return true;"><span>8 (812)</span> 604-70-03</a>
                                <br>
                               <!--p class="op_o"><a target="_blank" href="http://www.lazaretspb.ru/oplata-online/">Оплатить онлайн</a></p>
                                <a target="_blank" href="http://www.lazaretspb.ru/oplata-online/"><img src="http://www.lazaretspb.ru/images/oplata2.png" alt="Оплата банковскими картами"></a-->
                            </div>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="text-header--mobile">ПОМОЖЕМ НА ДОМУ КРУГЛОСУТОЧНО</div>
                            <div class="home_text mbl--header--text">
                                <!-- TITLE AND DESC -->
                                <h1>Поможем<br> на дому<br> круглосуточно</h1>
                                <!-- <p>Процедуры от <span style="color: #fff;font-size: 32px;font-weight: 600;background-color: red;padding: 5px 15px;margin: 0 0 0 15px;">1 600 р.</span></p> -->
                                
                                <!-- <p><span style="color: #fff;font-size: 32px;font-weight:500;background-color: #4fa71a;padding: 5px 15px;">от 2 500 р.</span></p> -->
                                <p><span style="color: #fff;font-size: 32px;font-weight:500;background-color: #ff3000;padding: 5px 15px 10px;">сегодня от 2 430 р.</span></p>
                                <div class="download-btn">
                                    <!-- BUTTON
                                    <a class="btn home-btn wow fadeInLeft" href="#DOWNLOAD">Download</a> -->
                                    <!--<a class="tuor btn wow fadeInRight" href="#ABOUT">Лечение в стационаре<i class="fa fa-angle-down"></i></a>-->
                                    <a class="btn home-btn wow fadeInLeft" href="#CONTACT">Вызвать врача <!--i class="fa fa-angle-down"></i--></a>
                                </div>
                            </div>
							
                        </div>
						<div class="lic"><img src="images/li1.jpg" alt=""></div>
                        <div class="col-md-3 col-md-offset-1 col-sm-4" style="display:none;">
                            <div class="home-iphone">
                                <img src="images/iPhone_Home.png" alt="">
                            </div>
                        </div>
                    </div>					
                </div>
            </div>
        </section>
        <!-- END HEADER SECTION -->
        <!-- =========================
        START ABOUT US SECTION
        ============================== -->
        <section class="about page" id="ABOUT">
			<div class="white">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <!-- ABOUT US SECTION TITLE-->
                        <div class="section_title">
                            <h2>Помогите вашему близкому человеку</h2>
                            <p style="margin:30px 0; font-size: 20px;font-weight: 400;">облегчить тяжесть состояния, избавиться от риска
                                <ul class="col-md-6">									                               
                                    <li style="font-size: 23px;font-weight: 600;"><i class="fa fa-check-square-o"></i> инсульта и инфаркта</li>
                                    <li style="font-size: 23px;font-weight: 600;"><i class="fa fa-check-square-o"></i> панкреатита и кровотечения ЖКТ</li>
									<li style="font-size: 23px;font-weight: 600;"><i class="fa fa-check-square-o"></i> потливости, тошноты, тремора, головной боли</li>  
                                </ul>
                                <ul class="col-md-6">                                    
                                    <li style="font-size: 23px;font-weight: 600;"><i class="fa fa-check-square-o"></i> слабости и бессонницы</li>
                                     <li style="font-size: 23px;font-weight: 600;"><i class="fa fa-check-square-o"></i> возникновения цирроза печени</li>
									 <li style="font-size: 23px;font-weight: 600;"><i class="fa fa-check-square-o"></i> тревоги и других проявлений похмелья</li>  
                                </ul>
                                <p style="text-align:center;"><a class="btn lom-btn wow fadeInLeft btn-orange" onClick="ComagicWidget.openSitePhonePanel();">Вызвать врача <!--i class="fa fa-angle-down"></i--></a></p>
                                
                            </div>
                        </div>
                    </div>
                </div></div>
               
                
                <!--div class="video_area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 wow fadeInLeftBig">
                                <!-- VIDEO LEFT TITLE -->
                                <!--div class="video_title">
                                    <h2>Методы выведения из запоя на дому</h2>
                                    
                                    <ul>
                                        <li style="margin: 35px 0 15px; font-size: 18px;">Простые капельницы с витаминами, калием, магнием и т.д.</li>
                                        <li style="margin: 15px 0; font-size: 18px;">Поддерживающая и восстанавливающая терапия для печени</li>
                                        <li style="margin: 15px 0; font-size: 18px;">Поддерживающая терапия для миокарда, сосудов и головного мозга</li>
                                    </ul>
                                    <p><span style="color: #fff;font-size: 32px;font-weight:500;background-color: #ff3000;padding: 5px 15px;">от 2 500 р.</span></p>
                                    <p style="color: #000; font-weight:600;">Облегчение наступает уже через 1 -2 часа c начала интенсивной терапии</p>
                                    
                                    
                                </div>
                                <div class="video-button">
                                    
                                    <a class="btn btn-primary btn-video" href="#FEATURES" role="button">Все услуги наркологии  <i class="fa fa-angle-down"></i></a>
                                </div>
                            </div>
                            
                            
                            
                            
                            <div class="col-md-6 wow fadeInRightBig">
                                
                                <!-- VIDEO -->
                                <!--div class="video">
                                    <img src="images/no.png" width="100%">
                                    <!--<iframe src="https://player.vimeo.com/video/88209254?title=0&amp;byline=0&amp;portrait=0&amp;color=cc0000" width="560" height="315"></iframe>-->
                                <!--/div>
                            </div>
                        </div>
                    </div>
                    <div >
                    </div-->
                    
                    
                    <!-- End About Us -->
                    
                </div>
            </section>
            
            <!--p style="text-align:center;"><a style="padding:10px 30px !important; font-size:18pt !important;" class="btn lom-btn wow fadeInLeft" onClick="ComagicWidget.openSitePhonePanel();">Вызвать врача <i class="fa fa-angle-down"></i></a></p-->
            
            <!-- =========================
            START TESTIMONIAL SECTION
            ============================= -->

            <section id="TESTIMONIAL" class="testimonial parallax">
                <div class="section_overlay">
				    <div class="section_title_p">
						<h2>сегодня для вас дежурят</h2>
					</div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 wow bounceInDown">
                                <div id="carousel-example-caption-testimonial" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-example-caption-testimonial" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel-example-caption-testimonial" data-slide-to="1"></li>
                                        <li data-target="#carousel-example-caption-testimonial" data-slide-to="2"></li>
                                        <li data-target="#carousel-example-caption-testimonial" data-slide-to="3"></li>
                                        <li data-target="#carousel-example-caption-testimonial" data-slide-to="4"></li>
                                        <li data-target="#carousel-example-caption-testimonial" data-slide-to="5"></li>
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        
                                        <div class="item active">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-12 text-center">
                                                        <!-- IMAGE -->
                                                        <img src="images/client_1.png" alt="">
                                                        <div class="testimonial_caption">
                                                            <!-- DESCRIPTION -->
                                                            <h2>Евгений Робертович Рысин</h2>
                                                            <h4><span>Врач психиатр, психотерапевт</span></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!--
                                        <div class="item">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-12 text-center">
                                                        
                                                        <img src="images/client_2.png" alt="">
                                                        <div class="testimonial_caption">
                                                            
                                                            <h2>Станислав Вадимович Любимов</h2>
                                                            <h4><span>Ведущий специалист, врач анестезиолог-реаниматолог</span></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>-->
                                        <div class="item">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-12 text-center">
                                                        <!-- IMAGE -->
                                                        <img src="images/client_3.png" alt="">
                                                        <div class="testimonial_caption">
                                                            <!-- DESCRIPTION -->
                                                            <h2>Антон Сергеевич Костин</h2>
                                                            <h4><span>Врач психотерапевт, психиатр</span></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!--
                                        <div class="item">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-12 text-center">
                                                        
                                                        <img src="images/client_4.png" alt="">
                                                        <div class="testimonial_caption">
                                                            
                                                            <h2>Эльвира Валерьевна Гладышева</h2>
                                                            <h4><span>Кандидат медицинских наук, терапевт, кардиолог</span></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        -->
                                        <div class="item">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-12 text-center">
                                                       
                                                        <img src="images/sitnikov.png" alt="">
                                                        <div class="testimonial_caption">
                                                          
                                                            <h2>Ситников Виталий Анатольевич</h2>
                                                            <h4><span>Врач психиатр, врач выездной службы</span></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="item">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-12 text-center">
                                                        <!-- IMAGE -->
                                                        <img src="images/leviz.png" alt="">
                                                        <div class="testimonial_caption">
                                                            <!-- DESCRIPTION -->
                                                            <h2>Левиз Алексей Сергеевич</h2>
                                                            <h4><span>Врач психиатр, врач выездной службы</span></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-12 text-center">
                                                        <!-- IMAGE -->
                                                        <img src="images/pavelev.png" alt="">
                                                        <div class="testimonial_caption">
                                                            <!-- DESCRIPTION -->
                                                            <h2>Павельев Дмитрий Валерьевич</h2>
                                                            <h4><span>Врач-анестезиолог-реаниматолог</span></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-12 text-center">
                                                        <!-- IMAGE -->
                                                        <img src="images/ponomorenko.png" alt="">
                                                        <div class="testimonial_caption">
                                                            <!-- DESCRIPTION -->
                                                            <h2>Пономаренко Андрей Васильевич</h2>
                                                            <h4><span>Врач психиатр, врач выездной службы</span></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--iv class="item">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-12 text-center">
                                                        <!-- IMAGE -->
                                                        <!--img src="images/client_5.png" alt="">
                                                        <div class="testimonial_caption">
                                                            <!-- DESCRIPTION -->
                                                            <!--h2>Виктор Сергеевич Храмович</h2>
                                                            <h4><span>Врач-терапевт, гастроэнтеролог</span></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-12 text-center">
                                                        <!-- IMAGE -->
                                                        <!--img src="images/client_6.png" alt="">
                                                        <div class="testimonial_caption">
                                                            <!-- DESCRIPTION -->
                                                            <!--h2>Дарья Александровна Толкач</h2>
                                                            <h4><span>Врач невролог</span></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-12 text-center">
                                                        <!-- IMAGE -->
                                                        <!--img src="images/client_7.png" alt="">
                                                        <div class="testimonial_caption">
                                                            <!-- DESCRIPTION -->
                                                            <!--h2>Олег Валерьевич Турушев</h2>
                                                            <h4><span>Врач психиатр-нарколог, семейный врач</span></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-12 text-center">
                                                        <!-- IMAGE -->
                                                        <!--img src="images/client_8.png" alt="">
                                                        <div class="testimonial_caption">
                                                            <!-- DESCRIPTION -->
                                                            <!--h2>Иван Сергеевич Пьянков</h2>
                                                            <h4><span>Врач психиатр-нарколог, психотерапевт</span></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
           <p style="text-align:center;"><a class="btn lom-btn wow fadeInLeft btn-orange" onClick="ComagicWidget.openSitePhonePanel();">Вызвать врача <!--i class="fa fa-angle-down"></i--></a></p>
            <!-- END TESTIMONIAL SECTION -->
            <!-- =========================
            START FEATURES
            ============================== -->
			 <div class="inner_about_area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 wow fadeInLeftBig">
                                <div class="about_phone wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                                    <!-- PHONE -->
                                    <!--img src="images/about_iphone.png" alt=""-->
									 
                                <!-- VIDEO LEFT TITLE -->
                                <div class="video_title" style="display: none">
									<div class="bg_video_title">
										<h2 style="text-align: left; padding: 30px;">Методы выведения из запоя на дому</h2>
										
										<ul style="margin: 45px;">
											<li style="text-align: left; margin: 35px 0 15px; font-size: 18px;">Простые капельницы с витаминами, калием, магнием и т.д.</li>
											<li style="text-align: left; margin: 15px 0; font-size: 18px;">Поддерживающая и восстанавливающая терапия для печени</li>
											<li style="text-align: left; margin: 15px 0; font-size: 18px;">Поддерживающая терапия для миокарда, сосудов и головного мозга</li>
										</ul>
										<p><span style="color: #fff;font-size: 32px;font-weight:500;background-color: #ff3000;padding: 5px 15px;">от 2 500 р.</span></p>
										<p style="padding: 40px 20px 40px 20px; color: #000; font-weight:600;">Облегчение наступает уже через 1 -2 часа c начала интенсивной терапии</p>
									</div>
                                    
                                    
                                </div>
                                <div class="video-button" style="display: none">
                                    
                                    <a class="btn btn-primary btn-video" href="#FEATURES" role="button">Все услуги наркологии  <!--i class="fa fa-angle-down"></i--></a>
                                </div>
                          
                                </div>
                            </div>
                            <div class="col-md-6  wow fadeInRight" style="width: 100%" data-wow-duration="1s" data-wow-delay=".5s">
                                <!-- TITLE -->
                                <div class="inner_about_title">
                                    <h2 style="text-align: center; padding: 0 30px 20px 30px; line-height: 1.2;" class="no-border-after">ВЫ ПОЛУЧИТЕ ОБЛЕГЧЕНИЕ СОСТОЯНИЯ<br>НА ДОМУ<br></h2>
                                    
                                    <!-- SINGLE DESC -->
                                    <div class="single_about_area fadeInUp wow" data-wow-duration=".5s" data-wow-delay="1s" style="margin:35px 0 0;">
                                        <!-- ICON -->
                                        <!--div><i class="fa fa-user-md"></i></div-->
                                        <!-- HEADING DESCRIPTION -->
										<img src="images/information_items_218.jpg">
                                        <h3>бесплатная консультация врача</h3>
                                        <p><span>Поможем</span> каждому пациенту в день обращения</p>
                                    </div>
                                    <!-- END SINGLE DESC -->
                                    <!-- SINGLE DESC -->
                                    <div class="single_about_area fadeInUp wow" data-wow-duration=".5s" data-wow-delay="1.5s">
                                        <!-- ICON -->
                                        <!--div><i class="fa fa-file-text-o"></i></div-->
                                        <!-- HEADING DESCRIPTION -->
                                        <img src="images/information_items_219.jpg">
										<h3>Комфортабельный стационар</h3>
                                        <p><span>Полная анонимность</span> и индивидуальный подход</p>
                                    </div>
                                    <!-- END SINGLE DESC -->
                                    <!-- SINGLE DESC -->
                                    <div class="single_about_area fadeInUp wow" data-wow-duration=".5s" data-wow-delay="2s">
                                        <!-- ICON -->
                                        <!--div><i class="fa fa-rub"></i></div-->
                                        <!-- HEADING DESCRIPTION -->
										<img src="images/information_items_212.jpg">
                                        <h3>сбережём Ваши средства</h3>
                                        <p><span>Техническое оснащение и лекарственное обеспечение</span> соответствуют выполнению поставленных задач</p>
                                    </div>
                                    <!-- END SINGLE DESC -->
                                    
                                </div>
                                <div class="inner_about_desc">
                                    <p style="text-align:center;"><a class="btn lom-btn wow fadeInLeft btn-orange" onClick="ComagicWidget.openSitePhonePanel();">Вызвать врача <!--i class="fa fa-angle-down"></i--></a></p>
                                </div>
								<div class="col-md-6 otzyvy wow fadeInRight" style="width: 100%" data-wow-duration="1s" data-wow-delay=".5s">
                                <!-- TITLE -->
                                <div class="inner_about_title">
                                    <h2 style="text-align: center; padding: 0 30px 30px 30px; line-height: 1.5;" class="no-border-after">ОТЗЫВЫ НАШИХ ПАЦИЕНТОВ<br></h2>
                                    
                                    <!-- SINGLE DESC -->
                                    <div class="single_about_area fadeInUp wow" data-wow-duration=".5s" data-wow-delay="1s" style="margin:35px 0 0;">
                                        <!-- ICON -->
                                        <!--div><i class="fa fa-user-md"></i></div-->
                                        <!-- HEADING DESCRIPTION -->
										<img src="images/otzyv-001.jpg" class="otzyv">
                                        <p>23 октября 2018 г.</p>
                                    </div>
                                    <!-- END SINGLE DESC -->
                                    <!-- SINGLE DESC -->
                                    <div class="single_about_area fadeInUp wow" data-wow-duration=".5s" data-wow-delay="1.5s">
                                        <!-- ICON -->
                                        <!--div><i class="fa fa-file-text-o"></i></div-->
                                        <!-- HEADING DESCRIPTION -->
                                        <img src="images/otzyv-002.jpg" class="otzyv">
										<p>20 февраля 2019 г.</p>
                                    </div>
                                    <!-- END SINGLE DESC -->
                                    <!-- SINGLE DESC -->
                                    <div class="single_about_area fadeInUp wow" data-wow-duration=".5s" data-wow-delay="2s">
                                        <!-- ICON -->
                                        <!--div><i class="fa fa-rub"></i></div-->
                                        <!-- HEADING DESCRIPTION -->
										<img src="images/otzyv-003.jpg" class="otzyv">
                                        <p>01 ноября 2018 г.</p>
                                    </div>
                                    <!-- END SINGLE DESC -->
                                    
                                </div>
                                <div class="inner_about_desc">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <p style="text-align:center;"><a class="btn lom-btn wow fadeInLeft btn-orange" onClick="ComagicWidget.openSitePhonePanel();">Вызвать врача <!--i class="fa fa-angle-down"></i--></a></p>
            <section id="FEATURES" class="features page" style="display: none">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <!-- FEATURES SECTION TITLE -->
                            <div class="section_title wow fadeIn" data-wow-duration="1s">
                                <h2>Все услуги наркологии</h2>
                                <!--p style="color: #000; font-weight:600;">Подробно обо всех представленых ниже услугах отделения "Лазарет" вы можете узнать по телефону <br>
                            <strong style="color: #ff3000; font-weight:600; font-size:22px;" class="logo_p"><a href="tel:+78126047003">8 (812) 604-70-03</a></strong><br>
                        Круглосуточно дежурящие врачи высшей категории готовы проконсультировать пациентов и их родственников по всем возникающим вопросам. </p-->
                            </div>
                            <!-- END FEATURES SECTION TITLE -->
                        </div>
                    </div>
                </div>
                <div class="feature_inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 right_no_padding wow fadeInLeft" data-wow-duration="1s">
                                <!-- FEATURE -->
                                <div class="left_single_feature">
                                    <!-- ICON -->
                                    <div><!--<span class="pe-7s-like"></span>--><img src="images/in_1.png" border="0"></div>
                                    <!-- FEATURE HEADING AND DESCRIPTION -->
                                    <h3>Гарантированное выведение из запоя</h3>
                                    <p>Эффективность выведения из запоя основана на правильном подборе медикаментов и точном выполнении лечебных методик</p>
                                </div>
                                <!-- END SINGLE FEATURE -->
                                <!-- FEATURE -->
                                <div class="left_single_feature">
                                    <!-- ICON -->
                                    <div><!--<span class="pe-7s-science"></span>--><img src="images/in_3.png" border="0"></div>
                                    <!-- FEATURE HEADING AND DESCRIPTION -->
                                    <h3>Лечение в стационаре</h3>
                                    <p>Чем стационар лучше? Эффективностью терапии и удобством лечения алкоголизма для пациента и его родственников, уверенностью в надёжном результате</p>
                                </div>
                                <!-- END SINGLE FEATURE -->
                                <!-- FEATURE -->
                                <div class="left_single_feature">
                                    <!-- ICON -->
                                    <div><!--<span class="pe-7s-look"></span>--><img src="images/in_4.png" border="0"></div>
                                    <!-- FEATURE HEADING AND DESCRIPTION -->
                                    <h3>Вивитрол и Селинкро</h3>
                                    <p>Механизм воздействия препаратов на организм человека проявляется  в том, что  они блокируют возможность получать удовольствие от употребления спиртного</p>
                                </div>
                                <!-- END SINGLE FEATURE -->
                            </div>
                            <div class="col-md-4">
                                <!--div class="feature_iphone"-->
                                    <!-- FEATURE PHONE IMAGE --><!--
                                    <img class="wow bounceIn" data-wow-duration="1s" src="images/iPhone02.png" alt="">
                                    <br>
                                    <p class="text-center" style="font-size:20px; color:#ff3000; padding:60px 0; text-transform:uppercase; font-size: 24px; font-weight: 600;">лицензия № ЛО-78-01-008620</p>
                                </div>-->
                            </div>
                            <div class="col-md-4 left_no_padding wow fadeInRight" data-wow-duration="1s">
                                <!-- FEATURE -->
                                <div class="right_single_feature">
                                    <!-- ICON -->
                                    <div><!--<span class="pe-7s-monitor"></span>--><img src="images/in_2.png" border="0"></div>
                                    <!-- FEATURE HEADING AND DESCRIPTION -->
                                    <h3>Лечение алкоголизма</h3>
                                    <p>Качественная первичная консультация в нашей петербургской клинике перед лечением алкоголизма служит отправной точкой для достижения успеха в дальнейших этапах лечения</p>
                                </div>
                                <!-- END SINGLE FEATURE -->
                                <!-- FEATURE -->
                                <div class="right_single_feature">
                                    <!-- ICON -->
                                    <div><!--<span class="pe-7s-phone"></span>--><img src="images/in_5.png" border="0"></div>
                                    <!-- FEATURE HEADING AND DESCRIPTION -->
                                    <h3>Плазмаферез, озонотерапия, капельницы</h3>
                                    <p>Только врач сможет подобрать оптимальный состав капельницы, основываясь на результатах обследования пациента, с учётом особенностей его состояния</p>
                                </div>
                                <!-- END SINGLE FEATURE -->
                                <!-- FEATURE -->
                                <div class="right_single_feature">
                                    <!-- ICON -->
                                    <div><!--<span class="pe-7s-gleam"></span>--><img src="images/in_6.png" border="0"></div>
                                    <!-- FEATURE HEADING AND DESCRIPTION -->
                                    <h3>Лечение других зависимостей</h3>
                                    <p>Мы успешно помогаем больным, страдающим зависимостью от химических веществ, азартных игр, компьютерной зависимости, экстремальных видов развлечений</p>
                                </div>
                                <!-- END SINGLE FEATURE -->
                            </div>
                        </div>
                    </div>
                </div>
                
                <p style="text-align:center;"><a class="btn lom-btn wow fadeInLeft" onClick="ComagicWidget.openSitePhonePanel();">Вызвать врача <!--i class="fa fa-angle-down"></i--></a></p>
                
            </section>
            <!-- END FEATURES SECTION -->
            <!-- =========================
            Start APPS SCREEN SECTION
            ============================== -->
            <section class="apps_screen page" id="SCREENS" style="display:none;">
                
                <div class="screen_slider">
                    <div id="demo" class="wow bounceInRight" data-wow-duration="1s">
                        <div id="owl-demo" class="owl-carousel">
                            <!-- APPS SCREEN IMAGES -->
                            <div class="item">
                                <a href="images/screens/iPhone04.png" rel="prettyPhoto[pp_gal]"><img src="images/iPhone04.png" width="60" height="60" alt="APPS SCREEN" /></a>
                            </div>
                            <div class="item">
                                <a href="images/screens/iPhone05.png" rel="prettyPhoto[pp_gal]"><img src="images/iPhone05.png" width="60" height="60" alt="APPS SCREEN" /></a>
                            </div>
                            <div class="item">
                                <a href="images/screens/iPhone06.png" rel="prettyPhoto[pp_gal]"><img src="images/iPhone06.png" width="60" height="60" alt="APPS SCREEN" /></a>
                            </div>
                            <div class="item">
                                <a href="images/screens/iPhone07.png" rel="prettyPhoto[pp_gal]"><img src="images/iPhone07.png" width="60" height="60" alt="APPS SCREEN" /></a>
                            </div>
                            <div class="item">
                                <a href="images/screens/iPhone08.png" rel="prettyPhoto[pp_gal]"><img src="images/iPhone08.png" width="60" height="60" alt="APPS SCREEN" /></a>
                            </div>
                            <div class="item">
                                <a href="images/screens/iPhone09.png" rel="prettyPhoto[pp_gal]"><img src="images/iPhone09.png" width="60" height="60" alt="APPS SCREEN" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ENS APPS SCREEN -->
			            <section id="TESTIMONIAL" class="testimonial parallax" style="background: none !important">
                <div class="section_overlay">
				    <div class="section_title_p">
						<h2>Cпециалисты в СМИ</h2>
					</div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 wow bounceInDown">
                                <div id="carousel-example-caption-testimonial" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-example-caption-testimonial" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel-example-caption-testimonial" data-slide-to="1"></li>
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        
                                        <div class="item active">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-12 text-center">
                                                        <!-- IMAGE -->
                                                        <p><iframe width="560" height="315" src="//www.youtube.com/embed/Ltei9W-hsGo?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="allowfullscreen"></iframe></p>
                                                        <div class="testimonial_caption">
                                                            <!-- DESCRIPTION -->
                                                            <h2></h2>
                                                            <h4><span>«Лазарет» участвует в обсуждении законодательной инициативы об усилении уголовной ответственности за ДТП, совершённые в состоянии опьянения. Врач клиники Евгений Рысин в эфире телеканала «78» участвует в дискуссии по этой актуальной теме.</span></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-12 text-center">
                                                        <p><iframe width="560" height="315" src="//www.youtube.com/embed/QJ37UfTIsHc" allowfullscreen="allowfullscreen" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="allowfullscreen"></iframe></p>
                                                        <div class="testimonial_caption">
                                                            
                                                            <h2></h2>
                                                            <h4><span>Без Бокала нет Шагала. Алкоголь в музее. Взгляд врача клиники в эфире ТВ канала 78</span></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- =========================
            Start FUN FACTS
            ============================== -->
            <section class="fun_facts parallax" id="SCREENZZ">
                <div class="section_overlay">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 wow fadeInBig" data-wow-duration="1s">
                            <!-- APPS SCREEN TITLE -->
                            <div class="section_title" style="padding-bottom:60px;">
                                <h2 style="color:#ffffff;">НАШИ ПРЕИМУЩЕСТВА</h2>
                            </div>
                            <!-- END APPS SCREEN TITLE -->
                        </div>
                    </div>
                    <div class="container wow bounceInLeft" data-wow-duration="1s">
                        <div class="row text-center">
                            <div class="col-md-3">
                                <div class="single_fun_facts">
                                    <i class="single_fun_01"></i>
                                    <h2><span  class="counter_num">28</span> <span></span></h2>
                                    <p>эффективных методик лечения</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single_fun_facts">
                                     <i class="single_fun_02"></i>
                                    <h2><span>более</span> <span  class="counter_num">25</span></h2>
                                    <p>лет успешного опыта</p>
                                    
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single_fun_facts">
                                     <i class="single_fun_03"></i>
                                    <h2><span  class="counter_num">19</span> <span></span></h2>
                                    <p>лучших специалистов Санкт-Петербурга</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single_fun_facts">
                                     <i class="single_fun_04"></i>
                                    <h2><span>более</span> <span class="counter_num">700</span></h2>
                                    <p>спасенных семей</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END FUN FACTS -->
            <!-- =========================
            START DOWNLOAD NOW
            ============================== -->
            <section class="download page" id="DOWNLOAD" style="display:none;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <!-- DOWNLOAD NOW SECTION TITLE -->
                            <div class="section_title">
                                <h2>download now</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                            </div>
                            <!--END DOWNLOAD NOW SECTION TITLE -->
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="download_screen text-center wow fadeInUp" data-wow-duration="1s">
                                <img src="images/download_screen.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="available_store">
                    <div class="container  wow bounceInRight" data-wow-duration="1s">
                        <div class="col-md-6">
                            <div class="available_title">
                                <h2>Available on</h2>
                                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                            </div>
                        </div>
                        <!-- DOWNLOADABLE STORE -->
                        <div class="col-md-6">
                            <div class="row">
                                <a href="">
                                    <div class="col-md-4 no_padding">
                                        <div class="single_store">
                                            <i class="fa fa-apple"></i>
                                            <div class="store_inner">
                                                <h2>iOS</h2>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="col-md-4 no_padding">
                                    <a href="">
                                        <div class="single_store">
                                            <i class="fa fa-android"></i>
                                            <div class="store_inner">
                                                <h2>ANDROID</h2>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4 no_padding">
                                    <a href="">
                                        <div class="single_store last">
                                            <i class="fa fa-windows"></i>
                                            <div class="store_inner">
                                                <h2>WINDOWS</h2>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- END DOWNLOADABLE STORE -->
                    </div>
                </div>
            </section>
            <!-- END DOWNLOAD -->
            
            
            
        
            
            
            <!-- =========================
            START CONTCT FORM AREA
            ============================== -->
            <section class="contact page" id="CONTACT" >
                <div class="section_overlay">
                    <div class="container">
                        <div class="col-md-10 col-md-offset-1 wow bounceIn">
                            <!-- Start Contact Section Title-->
                            <div class="section_title">
                                <h2>Помогите близкому человеку, <br>обратитесь к нам</h2>
                                <!--<p>Закажите обратный звонок для вызова врача-нарколога или получения консультации. Наши врачи 24 часа в сутки готовы ответить на все вопросы и предложить свою помощь.</p>-->
                                <!--p style="color: #000; font-weight:600;"><i class="fa fa-phone-square" ></i>Закажите обратный звонок для вызова врача-нарколога или получения консультации. <br>Наши специалисты 24 часа в сутки готовы прийти на помощь!</p-->
                            </div>
                        </div>
                    </div>
                    <!--   <div class="contact_form wow bounceIn">
                        <div class="container">
                            <!-- START ERROR AND SUCCESS MESSAGE
                            <div class="form_error text-center">
                                <div class="name_error hide error">Please Enter your name</div>
                                <div class="email_error hide error">Please Enter your Email</div>
                                <div class="email_val_error hide error">Please Enter a Valid Email Address</div>
                                <div class="message_error hide error">Please Enter Your Message</div>
                            </div>
                            <div class="Sucess"></div>
                            <!-- END ERROR AND SUCCESS MESSAGE
                            <!-- CONTACT FORM starts here, Go to contact.php and add your email ID, thats it.
                            <form role="form" action="contact.php">
                                <div class="row" >
                                    <div class="col-md-12" style="text-align:center;">
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" id="name" placeholder="Как к вам обращаться">
                                            <input type="email" class="form-control" id="email" placeholder="Ваш Email">
                                            <input type="text" class="form-control" id="subject" placeholder="Номер телефона">
                                        </div>
                                        <div class="col-md-6">
                                            <textarea class="form-control" id="message" rows="25" cols="10" placeholder="Ваше сообщение или вопрос"></textarea>
                                            <button type="button" class="btn btn-default submit-btn form_submit">Отправить</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- END FORM
                        </div>
                    </div> -->
                    
                    <div class="col-md-12 rrr">
                     <p class="logo_p"><a href="tel:+78126047003" onclick="yaCounter46840173.reachGoal('helpLPBottomPhoneClick'); return true;"><i class="fa fa-phone-square" ></i>&nbsp;&nbsp;<span>8 (812)</span> 604-70-03</a> </p><br>
                    </div>
                    
                    <!--p style="text-align:center;"><a style="padding:10px 30px !important; font-size:18pt !important;" class="btn lom-btn wow fadeInLeft" onClick="ComagicWidget.openSitePhonePanel();">Вызвать врача <i class="fa fa-angle-down"></i></a></p-->
                    
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 wow bounceInLeft">
                                <!--div class="social_icons">
                                    <ul>
                                        <li><a title="VKontakte" href="https://vk.com/club88394239" target="_blank"><i class="fa fa-vk"></i></a>
                                    </li>
                                    <li><a title="Facebook" href="https://www.facebook.com/lazaretspb" target="_blank"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li><a title="Twitter" href="https://twitter.com/lazaretspb" target="_blank"><i class="fa fa-twitter"></i></a>
                            </li>
                            <!-- <li><a title="Ok" rel="nofollow" href="http://ok.ru/group/57356756844607" target="_blank"><i class="fa fa-odnoklassniki"></i></a>
                        </li>-->
                        
                        <!-- <li><a href=""><i class="fa fa-youtube-play"></i></a>
                    </li>--><!--
                </ul>
            </div>-->
        </div>
    </div>
</div>
</div>
</section>
<!-- END CONTACT -->



<!-- =========================
Start MAP SECTION
============================== 
<section class="download page" >
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1998.9416525017537!2d30.273618559505014!3d59.93311035108746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x469630d8d0694b13%3A0x4594560048e135c!2z0J7RgtC00LXQu9C10L3QuNC1INCd0LXQvtGC0LvQvtC20L3QvtC5INCd0LDRgNC60L7Qu9C-0LPQuNGH0LXRgdC60L7QuSDQn9C-0LzQvtGJ0LggItCb0JDQl9CQ0KDQldCiIg!5e0!3m2!1sru!2sru!4v1489950817502" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
<!--END DOWNLOAD NOW SECTION TITLE -->
</div>
</section>

<!-- ENS MAP SCREEN -->

<!-- =========================
Start Subscription Form
============================== -->
<section class="subscribe parallax subscribe-parallax" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20" style="display:none;">>
<div class="section_overlay wow lightSpeedIn">
<div class="container">
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <!-- Start Subscribe Section Title -->
        <div class="section_title">
            <h2>Обратный звонок</h2>
            <p>Задайте нам вопрос или оставьте сообщение для получения консультации. Наши врачи 24 часа в сутки готовы ответить на все вопросы и предложить свою помощь.</p>
        </div>
        <!-- End Subscribe Section Title -->
    </div>
</div>
</div>
<div class="container">
<div class="row  wow lightSpeedIn">
    <div class="col-md-6 col-md-offset-3">
        <!-- SUBSCRIPTION SUCCESSFUL OR ERROR MESSAGES -->
        <div class="subscription-success"></div>
        <div class="subscription-error"></div>
        <!-- Check this topic on how to add email subscription list, http://kb.mailchimp.com/lists/signup-forms/host-your-own-signup-forms -->
        <form id="mc-form" action="https://designscrazed.us8.list-manage.com/subscribe/post" method="POST" class="subscribe_form">
            <input type="hidden" name="u" value="6908378c60c82103f3d7e8f1c">
            <input type="hidden" name="id" value="8c5074025d">
            <div class="form-group">
                <!-- EMAIL INPUT BOX -->
                <input type="email" autocapitalize="off" autocorrect="off" name="MERGE0" class="required email form-control" id="mce-EMAIL" placeholder="Enter Email Address" value="" >
            </div>
            <!-- SUBSCRIBE BUTTON -->
            <button type="submit" class="btn btn-default subs-btn">Submit</button>
        </form>
    </div>
</div>
</div>
</div>
</section>
<!-- END SUBSCRIPBE FORM -->
<!-- =========================
FOOTER
============================== -->
<section class="copyright">
<h2></h2>
<div class="container">
<div class="row">
<div class="col-md-6">
    <div class="copy_right_text">
        <!-- COPYRIGHT TEXT -->
        <p>&copy; 2004-2019. ООО "Лазарет"</p>
        
    </div>	
    
</div>
<div class="col-md-6">
<p>Копирование любых материалов без письменного разрешения<br>ООО "Лазарет" запрещено</p>
    <div class="scroll_top">
        <a href="#HOME"><i class="fa fa-angle-up"></i></a>
    </div>
</div>
</div>
</div>
</section>

<section class="footer--static">    
    <a href="tel:+78126047003" onclick="yaCounter46840230.reachGoal('clickBtnGetDoctor'); return true;" class="footer--static--btn">Вызвать врача</a>    
    <a href="#" onclick="yaCounter46840230.reachGoal('clickBtnGetDocConsult'); return true;" class="footer--static--btn js--get-consult">Получить консультацию</a>
</section>

<section class="widget-popup--wrapper">
    <div class="widget-popup">
        <button class="widget-popup--close"><span class="widget-popup--close--span"></span></button>
        <div class="widget-popup--body">
            <div class="widget-popup--body--title">Звоните</div>
            <div class="widget-popup--body--title--sub"><a href="tel:+78126047003"></a>8 (812) 604-70-03</div>
            <br>
            <div class="widget-popup--body--title">Или записывайтесь на</div>
            <div class="widget-popup--body--title--sub">Бесплатную консультацию</div>

            <div class="widget-popup--body--form">
                <div class="widget-popup--body--form--field">
                    <input type="tel" name="phone" class="phone-mask" placeholder="Номер телефона">
                </div>
                <div class="widget-popup--body--form--field">
                    <button class="widget-popup--body--form--field--btn js--send-consult">Отправить</button>
                </div>
            </div>
            <div class="widget-popup--body--inform">
                Нажимая на кнопку "Отправить", вы принимаете условия <a href="#">Публичной оферты</a>
            </div>
        </div>
    </div>
</section>

        <?if($_COOKIE["popupMessage"] <= 0):?>
        <style>
            .widget-popup {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                background: #fff;
                border-radius: 10px;
                padding: 30px 35px 25px;
                width: 95%;
                max-width: 600px;
                height: auto;
                position: absolute;
                top: 50%;
                left: 50%;
            }
        </style>
        <!-- popUpMessage -->
        <div class="widget-popup--wrapper" id="popupMessage-popup">
            <div class="widget-popup">
                <button class="widget-popup--close" onclick="popupMessage.close()"><span class="widget-popup--close--span"></span></button>
                <div class="widget-popup--body">

                    <div class="widget-popup--body--title">Акция!</div>
                    <div class="widget-popup--body--form">
                        <p>
                            <b><span style="color: #00a99e; font-size: 22pt;">Не стрессуй!</span></b><span style="font-size: 22pt;"> </span>
                        </p>
                        <span style="font-size: 22pt;"> </span>
                        <p>
                            <span style="font-size: 22pt;"> </span><b><span style="color: #00a99e; font-size: 22pt;">Не паникуй!<br>
 </span></b>
                        </p>
                        <p>
                            <b><span style="color: #00a99e; font-size: 22pt;">«Лазарет» работает!</span></b>
                        </p>
                        <p>
                            <b><span style="color: #00a99e; font-size: 22pt;">Антикризисная скидка 15%</span></b>
                        </p>
                        <p>
                            <b><span style="color: #00a99e; font-size: 22pt;">Подробности у оператора</span></b>
                        </p>
                        <p>
                            <a href="tel:88126046780"><span style="font-size: 18pt;">8 (812) 604-70-03</span></a>
                        </p>
                        <p>
                            <br>
                        </p>
                        <p>
                            <br>            </div>

                </div>
            </div>
        </div>
        <?endif;?>

<!-- END FOOTER -->
<!-- =========================
SCRIPTS
============================== -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/jquery.fitvids.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/jquery.parallax-1.1.3.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.ajaxchimp.langs.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/jquery.mask.js"></script>
<script src="js/widget.popup.js"></script>

<script src="js/script.js?v22"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-135429806-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-135429806-2');
</script>

<script type="text/javascript">
    (function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
    try {
    w.yaCounter46840230 = new Ya.Metrika({id:46840230, params:window.yaParams,
    webvisor:true,
    clickmap:true,
    trackLinks:true,
    accurateTrackBounce:true, trackHash:true,params:window.yaParams||{ }});
    } catch(e) { }
    });
var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script>
<noscript><div><img src="//mc.yandex.ru/watch/46840230" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<a href="//scroogefrog.com/en/?referrer_id=23095"><img src="//stat.clickfrog.ru/img/clfg_ref/icon_0.png" style="display: none" alt="detect click fraud"></a><div id="clickfrog_counter_container" style="width:0px;height:0px;overflow:hidden;"></div><script type="text/javascript">(function(d, w) {var clickfrog = function() {if(!d.getElementById('clickfrog_js_container')) {var sc = document.createElement('script');sc.type = 'text/javascript';sc.async = true;sc.src = "//stat.clickfrog.ru/c.js?r="+Math.random();sc.id = 'clickfrog_js_container';var c = document.getElementById('clickfrog_counter_container');c.parentNode.insertBefore(sc, c);}};if(w.opera == "[object Opera]"){d.addEventListener("DOMContentLoaded",clickfrog,false);}else {clickfrog();}})(document, window);</script><noscript><div style="width:0px;height:0px;overflow:hidden;"><img src="//stat.clickfrog.ru/no_script.php?img" style="width:0px; height:0px;" alt=""/></div></noscript><script type="text/javascript">var clickfrogru_uidh='77437829408f93772d3b5f0bf2c22161';</script>
</body>
</html>