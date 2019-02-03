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
    <div class="team-contact-section section gradiant-background pb-90">
        <div class="container">
            <div class="section-head text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="heading white-text" style="margin-bottom: 40px"><?=trans('words.numbers.title')?></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-5 col-sm-offset-1 col-md-3 col-md-offset-0"><div class="site-number"><div class="stat-icon"><svg aria-hidden="true" data-prefix="fas" data-icon="users" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="svg-inline--fa fa-users fa-w-20 fa-3x" style="color: white;"><path data-v-27685602="" fill="currentColor" d="M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm448 0c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm32 32h-64c-17.6 0-33.5 7.1-45.1 18.6 40.3 22.1 68.9 62 75.1 109.4h66c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64zm-256 0c61.9 0 112-50.1 112-112S381.9 32 320 32 208 82.1 208 144s50.1 112 112 112zm76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C179.6 288 128 339.6 128 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2zm-223.7-13.4C161.5 263.1 145.6 256 128 256H64c-35.3 0-64 28.7-64 64v32c0 17.7 14.3 32 32 32h65.9c6.3-47.4 34.9-87.3 75.2-109.4z"></path></svg></div><h5 class="counter-count">10<span></span></h5><p><?=trans('words.numbers.team')?></p></div></div>
                <div class="col-xs-12 col-sm-5 col-sm-offset-1 col-md-3 col-md-offset-0"><div class="site-number"><div class="stat-icon"><svg aria-hidden="true" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-check fa-w-16 fa-3x" style="color: white;"><path data-v-27685602="" fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"></path></svg></div><h5 class="counter-count">15<span></span>+</h5><p><?=trans('words.numbers.projects')?></p></div></div>
                <div class="col-xs-12 col-sm-5 col-sm-offset-1 col-md-3 col-md-offset-0"><div class="site-number"><div class="stat-icon"><svg data-v-27685602="" aria-hidden="true" data-prefix="fas" data-icon="clock" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-clock fa-w-16 fa-3x" style="color: white;"><path data-v-27685602="" fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm57.1 350.1L224.9 294c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h48c6.6 0 12 5.4 12 12v137.7l63.5 46.2c5.4 3.9 6.5 11.4 2.6 16.8l-28.2 38.8c-3.9 5.3-11.4 6.5-16.8 2.6z" class=""></path></svg></div><h5 class="counter-count">2016<span></span>+</h5><p><?=trans('words.numbers.founded')?></p></div></div>
                <div class="col-xs-12 col-sm-5 col-sm-offset-1 col-md-3 col-md-offset-0"><div class="site-number"><div class="stat-icon"><svg data-v-27685602="" aria-hidden="true" data-prefix="fas" data-icon="smile" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" class="svg-inline--fa fa-smile fa-w-16 fa-3x" style="color: white;"><path data-v-27685602="" fill="currentColor" d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm80 168c17.7 0 32 14.3 32 32s-14.3 32-32 32-32-14.3-32-32 14.3-32 32-32zm-160 0c17.7 0 32 14.3 32 32s-14.3 32-32 32-32-14.3-32-32 14.3-32 32-32zm194.8 170.2C334.3 380.4 292.5 400 248 400s-86.3-19.6-114.8-53.8c-5.7-6.8-4.7-16.9 2-22.5 6.8-5.7 16.9-4.7 22.5 2 22.4 26.9 55.2 42.2 90.2 42.2s67.8-15.4 90.2-42.2c5.7-6.8 15.7-7.7 22.5-2 6.9 5.7 7.8 15.8 2.2 22.5z" class=""></path></svg></div><h5 class="counter-count">97%<span></span></h5><p><?=trans('words.numbers.clients')?></p></div></div>
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
