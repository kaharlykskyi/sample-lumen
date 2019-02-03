<!DOCTYPE html>
<html lang="<?=config('app.locale');?>" class="js">
<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-42874096-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-42874096-2');
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?=trans('words.description')?>">
    <link rel="shortcut icon" href="images/faviconlogo.png">
    <title><?=trans('words.title')?></title>
    <link rel="stylesheet" href="assets/css/vendor.bundle.css">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/theme.css" rel="stylesheet">
</head>
<body>
    <div id="home" class="header-section flex-box-middle section gradiant-background">
        <div id="particles-js" class="particles-container"></div>
        <div id="navigation" class="navigation is-transparent" data-spy="affix" data-offset-top="5">
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#site-collapse-nav" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="./">
                            <img class="logo logo-light" src="images/logo2-white.png" alt="logo" />
                            <img class="logo logo-color" src="images/logo2.png" alt="logo" />
                        </a>
                    </div>
                    <div class="collapse navbar-collapse font-secondary" style="margin-bottom: 7px" id="site-collapse-nav">
                        <ul class="nav nav-list navbar-nav navbar-right">
                            <li><a class="nav-item" href="#home"><?=trans('words.menu.home')?></a></li>
                            <li><a class="nav-item" href="#about"><?=trans('words.menu.about')?></a></li>
                            <li><a class="nav-item" href="#technologies"><?=trans('words.menu.technologies')?></a></li>
                            <li><a class="nav-item" href="#team"><?=trans('words.menu.team')?></a></li>
                            <li><a class="nav-item" href="#screenshots"><?=trans('words.menu.portfolio')?></a></li>
                            <li><a class="nav-item" href="#testimonial"><?=trans('words.menu.testimonial')?></a></li>
                            <li><a class="nav-item" href="#contacts"><?=trans('words.menu.contacts')?></a></li>
                            <li>
                                <div class="nav-wrapper">
                                    <div class="sl-nav">
                                        <ul>
                                            <li><span><?=trans('words.menu.language')?></span> <i class="fa fa-angle-down" aria-hidden="true"></i>
                                                <div class="triangle"></div>
                                                <ul>
                                                    <li><i class="sl-flag flag-usa"><div id="germany"></div></i> <span><a href="<?=$app->make('url')->to('/en');?>" class="language"><?=trans('words.menu.english')?></a></span></li>
                                                    <li><i class="sl-flag flag-ru"><div id="germany"></div></i> <span><a href="<?=$app->make('url')->to('/ru');?>" class="language"><?=trans('words.menu.russian')?></a></span></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="header-texts text-center">
                            <h1 class="cd-headline clip is-full-width"><span><strong>Bumeen Group</strong></span></h1>
                            <p class="lead wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".3s"><?=trans('words.header-about')?></p>
                            <ul class="buttons">
                                <li><a href="#contacts" class="button wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".6s"><?=trans('words.contact-us-btn')?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="feature-boxes">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="box wow fadeInUp" data-wow-duration=".5s">
                        <div class="box-icon">
                            <em class="ti ti-desktop"></em>
                        </div>
                        <p class="feature-title"><?=trans('words.features.web-development')?></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".3s">
                        <div class="box-icon">
                            <em class="ti ti-bar-chart"></em>
                        </div>
                        <p class="feature-title"><?=trans('words.features.business-automation')?></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".6s">
                        <div class="box-icon">
                            <em class="ti ti-bolt"></em>
                        </div>
                        <p class="feature-title"><?=trans('words.features.startups')?></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".9s">
                        <div class="box-icon">
                            <em class="ti ti-mobile"></em>
                        </div>
                        <p class="feature-title"><?=trans('words.features.mobile-applications')?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="about" class="about-section section pb-50 white-bg">
        <div class="container tab-fix">
            <div class="section-head text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="heading"><?=trans('words.about.title')?></h2>
                        <p><?=trans('words.about.p1')?></p>
                        <p><?=trans('words.about.p2')?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="technologies" class="about-section section pb-90 white-bg mobile-hidden">
        <div class="container tab-fix">
            <div class="section-head text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2" style="margin-bottom: 30px">
                        <h2 class="heading"><?=trans('words.technologies.title')?></h2>
                    </div>
                </div>
            </div>
            <div class="row tab-center mobile-center">
                <div class="row">
                    <div class="col-md-2">
                        <img src="images/php.png" class="img-responsive" alt="PHP" title="PHP">
                    </div>
                    <div class="col-md-2">
                        <img src="images/yii2.png" class="img-responsive" alt="Yii2" title="Yii2">
                    </div>
                    <div class="col-md-2">
                        <img src="images/laravel.png" class="img-responsive" alt="Laravel" title="Laravel">
                    </div>
                    <div class="col-md-2">
                        <img src="images/wordpress.png" class="img-responsive" alt="WordPress" title="WordPress">
                    </div>
                    <div class="col-md-2">
                        <img src="images/react.png" class="img-responsive" alt="React.js" style="margin-top: 15px" title="React.js">
                    </div>
                    <div class="col-md-2">
                        <img src="images/vue.png" class="img-responsive" alt="Vue.js" style="margin-top: 15px" title="Vue.js">
                    </div>
                </div>
                <div class="row" style="margin-top: 50px">
                    <div class="col-md-2">
                        <img src="images/node.png" class="img-responsive" alt="Node.js" style="margin-top: 25px" title="Node.js">
                    </div>
                    <div class="col-md-2">
                        <img src="images/react-n.png" class="img-responsive" alt="React Native" style="margin-top: 40px" title="React Native">
                    </div>
                    <div class="col-md-2">
                        <img src="images/ios.png" class="img-responsive" alt="Ios" title="Ios">
                    </div>
                    <div class="col-md-2">
                        <img src="images/and.png" class="img-responsive" alt="Android" title="Android">
                    </div>
                    <div class="col-md-2">
                        <img src="images/express.png" class="img-responsive" alt="Express.js" style="margin-top: 25px" title="Express.js">
                    </div>
                    <div class="col-md-2">
                        <img src="images/api.png" class="img-responsive" alt="Google API" style="margin-top: 20px" title="Google API">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="team-contact-section section gradiant-background pb-90" id="team">
        <div class="container">
            <div class="section-head text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="heading white-text"><?=trans('words.team.title')?></h2>
                        <p class="white-text" style="font-size: 15px;"><?=trans('words.team.text')?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="team-member">
                        <div class="team-photo">
                            <img style="height: 275px;" src="images/team-a.jpg" alt="team" />
                            <a href="#team-profile-1" class="expand-trigger content-popup"><span class="ti ti-plus"></span></a>
                        </div>
                        <div class="team-info">
                            <h4 class="name"><?=trans('words.team.sergey.name')?></h4>
                            <p class="sub-title">CEO, Co-Founder</p>
                        </div>
                        <div id="team-profile-1" class="team-profile mfp-hide">
                            <button title="Close (Esc)" type="button" class="mfp-close">×</button>
                            <div class="container-fluid">
                                <div class="row no-mg">
                                    <div class="col-md-6">
                                        <div class="team-profile-photo">
                                            <img src="images/team-a.jpg" alt="team" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="team-profile-info">
                                            <h3 class="name"><?=trans('words.team.sergey.name')?></h3>
                                            <p class="sub-title">Chief Executive Officer, Co-Founder</p>
                                            <hr>
                                            <p><?=trans('words.team.sergey.p1')?></p>
                                            <p><?=trans('words.team.sergey.p2')?></p>
                                            <p><?=trans('words.team.sergey.p3')?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="team-member">
                        <div class="team-photo">
                            <img src="images/viktor.png" style="height: 275px;" alt="team" />
                            <a href="#team-profile-2" class="expand-trigger content-popup"><span class="ti ti-plus"></span></a>
                        </div>
                        <div class="team-info">
                            <h4 class="name"><?=trans('words.team.viktor.name')?></h4>
                            <p class="sub-title">CTO, Co-Founder</p>
                        </div>
                        <div id="team-profile-2" class="team-profile mfp-hide">
                            <button title="Close (Esc)" type="button" class="mfp-close">×</button>
                            <div class="container-fluid">
                                <div class="row no-mg">
                                    <div class="col-md-6">
                                        <div class="team-profile-photo">
                                            <img src="images/viktor.png" alt="team" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="team-profile-info">
                                            <h3 class="name"><?=trans('words.team.viktor.name')?></h3>
                                            <p class="sub-title">Chief Technical Officer, Co-Founder</p>
                                            <hr>
                                            <p><?=trans('words.team.viktor.p1')?></p>
                                            <p><?=trans('words.team.viktor.p2')?></p>
                                            <p><?=trans('words.team.viktor.p3')?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="team-member">
                        <div class="team-photo">
                            <img style="height: 275px;" src="images/team-c.jpg" alt="team" />
                            <a href="#team-profile-3" class="expand-trigger content-popup"><span class="ti ti-plus"></span></a>
                        </div>
                        <div class="team-info">
                            <h4 class="name"><?=trans('words.team.yaroslav.name')?></h4>
                            <p class="sub-title">Project manager</p>
                        </div>
                        <div id="team-profile-3" class="team-profile mfp-hide">
                            <button title="Close (Esc)" type="button" class="mfp-close">×</button>
                            <div class="container-fluid">
                                <div class="row no-mg">
                                    <div class="col-md-6">
                                        <div class="team-profile-photo">
                                            <img src="images/team-c.jpg" alt="team" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="team-profile-info">
                                            <h3 class="name"><?=trans('words.team.yaroslav.name')?></h3>
                                            <p class="sub-title">Project manager</p>
                                            <hr>
                                            <p><?=trans('words.team.yaroslav.p1')?></p>
                                            <p><?=trans('words.team.yaroslav.p2')?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="team-member">
                        <div class="team-photo">
                            <img style="height: 275px;" src="images/team-d.jpg" alt="team" />
                            <a href="#team-profile-4" class="expand-trigger content-popup"><span class="ti ti-plus"></span></a>
                        </div>
                        <div class="team-info">
                            <h4 class="name"><?=trans('words.team.anna.name')?></h4>
                            <p class="sub-title">Business Development Manager</p>
                        </div>
                        <div id="team-profile-4" class="team-profile mfp-hide">
                            <button title="Close (Esc)" type="button" class="mfp-close">×</button>
                            <div class="container-fluid">
                                <div class="row no-mg">
                                    <div class="col-md-6">
                                        <div class="team-profile-photo">
                                            <img src="images/team-d.jpg" alt="team" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="team-profile-info">
                                            <h3 class="name"><?=trans('words.team.anna.name')?></h3>
                                            <p class="sub-title">Business Development Manager</p>
                                            <hr>
                                            <p><?=trans('words.team.anna.p1')?></p>
                                            <p><?=trans('words.team.anna.p2')?></p>
                                            <p><?=trans('words.team.anna.p3')?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="screenshots" class="screenshots-section section pb-120 white-bg">
        <div class="container">
            <div class="section-head text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="heading"><?=trans('words.portfolio.title')?></h2>
                        <p><?=trans('words.portfolio.p1')?></p>
                        <p><?=trans('words.portfolio.p2')?></p>
                    </div>
                </div>
            </div>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner" >
                    <div class="item active">
                        <img src="images/fuse.png" class="center" style="min-height: 242px">
                    </div>
                    <div class="item">
                        <img src="images/pf_1.png" class="center">
                    </div>
                    <div class="item">
                        <img src="images/pf_2.jpg" class="center">
                    </div>
                    <div class="item">
                        <img src="images/pf_3.jpg" class="center">
                    </div>
                    <div class="item">
                        <img src="images/pf_4.png" class="center">
                    </div>
                    <div class="item">
                        <img src="images/pf_5.png" class="center">
                    </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <div id="testimonial" class="testimonial-section section white-bg pb-120">
        <div class="imagebg">
            <img src="images/testimonial-bg.png" alt="testimonial-bg">
        </div>
        <div class="container">
            <div class="section-head text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="heading"><?=trans('words.testimonial.title')?></h2>
                        <p><?=trans('words.testimonial.p1')?></p>
                        <p><?=trans('words.testimonial.p2')?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="testimonial-carousel has-carousel" data-items="2" data-loop="true" data-dots="true" data-auto="true" data-navs="false">
                        <div class="item text-center">
                            <div class="quotes">
                                <img src="images/quote-icon.png" class="quote-icon" alt="quote-icon" />
                                <blockquote>Incredibly workers. I loved seeing that he had a notification of a message from him, I knew that they would surprise me with something, and even so, they managed to surprise me with their good work. Recommended. <br> Test server:
                                    <a href="http://wow.esports.staging.bumeengroup.com/" target="_blank">http://wow.esports.staging.bumeengroup.com/</a></blockquote>
                                <h6>"Salvador" from upwork.com</h6>
                                <div class="client-image">
                                    <img src="images/client-1.jpg" alt="client" />
                                </div>
                            </div>
                        </div>
                        <div class="item text-center">
                            <div class="quotes">
                                <img src="images/quote-icon.png" class="quote-icon" alt="quote-icon" />
                                <blockquote>Was very responsive. Was following deadlines. He did best quality work in time. Will definitely work with them again.
                                    I know why Ukrainian coders have a good reputation now :) <br> Live website:
                                    <a href="http://www.ninjafuse.org/" target="_blank">http://www.ninjafuse.org/</a></blockquote>
                                <h6>"Gokhan" from upwork.com</h6>
                                <div class="client-image">
                                    <img src="images/client-1.jpg" alt="client" />
                                </div>
                            </div>
                        </div>
                        <div class="item text-center">
                            <div class="quotes">
                                <img src="images/quote-icon.png" class="quote-icon" alt="quote-icon" />
                                <blockquote>Work with him again and probably next time too, Highly recommended! <br> Live website:
                                    <a href="http://www.ninjafuse.org/" target="_blank">http://www.ninjafuse.org/</a></blockquote>
                                <h6>"Gokhan" from upwork.com</h6>
                                <div class="client-image">
                                    <img src="images/client-1.jpg" alt="client" />
                                </div>
                            </div>
                        </div>
                        <div class="item text-center">
                            <div class="quotes">
                                <img src="images/quote-icon.png" class="quote-icon" alt="quote-icon" />
                                <blockquote>Expert with exceptional knowledge of programming. Can highly recommend.</blockquote>
                                <h6>"nehlaw" from freelancer.com</h6>
                                <div class="client-image">
                                    <img src="images/client-2.jpg" alt="client" />
                                </div>
                            </div>
                        </div>
                        <div class="item text-center">
                            <div class="quotes">
                                <img src="images/quote-icon.png" class="quote-icon" alt="quote-icon" />
                                <blockquote><strong>Bumeen Group</strong> does great work and I will continue working with them for future projects. They have fulfilled all of my needs thus far. Great communication and always on time.</blockquote>
                                <h6>"harpzgrewal" from freelancer.com</h6>
                                <div class="client-image">
                                    <img src="images/client-1.jpg" alt="client" />
                                </div>
                            </div>
                        </div>
                        <div class="item text-center">
                            <div class="quotes">
                                <img src="images/quote-icon.png" class="quote-icon" alt="quote-icon" />
                                <blockquote>Working on a big project with <strong>Bumeen Group</strong>. Very good communication throughout the project.</blockquote>
                                <h6>"harpzgrewal" from freelancer.com</h6>
                                <div class="client-image">
                                    <img src="images/client-1.jpg" alt="client" />
                                </div>
                            </div>
                        </div>
                        <div class="item text-center">
                            <div class="quotes">
                                <img src="images/quote-icon.png" class="quote-icon" alt="quote-icon" />
                                <blockquote>"Many projects done with <strong>Bumeen Group</strong> and I would say it is satisfaction to work with them."</blockquote>
                                <h6>"rawashde90" from freelancer.com</h6>
                                <div class="client-image">
                                    <img src="images/client-1.jpg" alt="client" />
                                </div>
                            </div>
                        </div>
                        <div class="item text-center">
                            <div class="quotes">
                                <img src="images/quote-icon.png" class="quote-icon" alt="quote-icon" />
                                <blockquote>"<strong>Bumeen Group</strong> has done some add-ons to my project meteopixx.ch. All the wishes where included in shortest time. Thanks a lot!"</blockquote>
                                <h6>"SwissWetter" from freelancer.com</h6>
                                <div class="client-image">
                                    <img src="images/client-1.jpg" alt="client" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="contacts" class="contact-section section gradiant-background pb-90">
        <div class="container">
            <div class="section-head heading-light text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="heading heading-light"><?=trans('words.contacts.title')?></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="contact-info white-bg text-center">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h6><em class="fa fa-chrome"></em> <a href="https://bumeengroup.com">https://bumeengroup.com</a></h6>
                                    </div>
                                    <div class="col-sm-12">
                                        <h6><em class="fa fa-skype"></em> <a href="skype:sergey960401?chat"><?=trans('words.contacts.chat')?></a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h6><em class="fa fa-map-marker"></em> <a href="https://www.google.com.ua/maps/place/%D1%83%D0%BB.+%D0%AD%D0%BB%D0%B5%D0%BA%D1%82%D1%80%D0%BE%D1%82%D0%B5%D1%85%D0%BD%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F,+%D0%9A%D0%B8%D0%B5%D0%B2,+02000/@50.5016427,30.6138542,17z/data=!3m1!4b1!4m5!3m4!1s0x40d4d05720d58d39:0xcf0d687442f39707!8m2!3d50.5016427!4d30.6160429" target="_blank"><?=trans('words.contacts.address')?></a></h6>
                                    </div>
                                    <div class="col-sm-12">
                                        <h6><em class="fa fa-envelope-open-o"></em> <a href="mailto:dev.bumeen.group@gmail.com"><?=trans('words.contacts.email')?></a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="margin-bottom: 20px"></div>
            </div>
        </div>
    </div>
    <div id="preloader"><div id="status">&nbsp;</div></div>
    <script src="assets/js/jquery.bundle.js"></script>
    <script src="assets/js/script.js"></script>
</body>
<footer>
    <div class="footer" style="margin-top: 0;">
        <div class="footer-section section">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12">
                        <ul class="footer-navigation inline-list">
                            <li><a class="nav-item" href="#home"><?=trans('words.menu.home')?></a></li>
                            <li><a class="nav-item" href="#about"><?=trans('words.menu.about')?></a></li>
                            <li><a class="nav-item" href="#technologies"><?=trans('words.menu.technologies')?></a></li>
                            <li><a class="nav-item" href="#team"><?=trans('words.menu.team')?></a></li>
                            <li><a class="nav-item" href="#screenshots"><?=trans('words.menu.portfolio')?></a></li>
                            <li><a class="nav-item" href="#testimonial"><?=trans('words.menu.testimonial')?></a></li>
                            <li><a class="nav-item" href="#contacts"><?=trans('words.menu.contacts')?></a></li>
                        </ul>
                        <div class="container" align="center">
                            <a href="/"><img src="images/logo3-white.png"></a>
                        </div>
                        <ul class="footer-links inline-list">
                            <li>Copyright © <?=date('Y')?> <strong><strong>Bumeen Group</strong></strong>. <?=trans('words.footer.rights')?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</html>
