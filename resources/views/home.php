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
    <link href="https://bumeengroup.com/" rel="canonical">
    <link href="https://bumeengroup.com/" rel="alternate" hreflang="en-GB">
    <link href="https://bumeengroup.com/ru" rel="alternate" hreflang="ru-RU">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="rights" content="Copyright © <?=date('Y')?> Bumeen Group. <?=trans('words.footer.rights')?>">
    <meta name="description" content="<?=trans('words.description')?>">
    <link rel="shortcut icon" href="images/faviconlogo.png">
    <title>𝗕𝗨𝗠𝗘𝗘𝗡 𝗚𝗥𝗢𝗨𝗣 |<?=trans('words.title')?></title>
    <link rel="stylesheet" href="assets/css/vendor.bundle-v1.css">
    <link href="assets/css/style-v1.1.css" rel="stylesheet">
    <link href="assets/css/theme-v1.css" rel="stylesheet">
    <link href="assets/css/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet">
    <link href="assets/vendor/select2/select2.min.css" rel="stylesheet">
    <link href="assets/vendor/daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="assets/vendor/noui/nouislider.min.css" rel="stylesheet">
    <link href="assets/css/material-design-iconic-font.css" rel="stylesheet">
    <link href="assets/css/util.css" rel="stylesheet">
    <link href="assets/css/main-v1.css" rel="stylesheet">
    <link href="assets/css/demo-v1.css" rel="stylesheet" type="text/css">
    <link href="assets/css/elastic_grid.min.css" rel="stylesheet" type="text/css" >
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
                            <li><a class="nav-item" href="#ask"><?=trans('words.menu.ask')?></a></li>
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
                                <li><a href="#ask" class="button wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".6s"><?=trans('words.contact-us-btn')?></a></li>
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
    <div id="ask" class="about-section section pb-50 white-bg">
        <div class="container tab-fix">
            <div class="section-head" style="padding-top: 15px">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="alert alert-success text-center" id="submit-success" style="display: none; margin-top: 70px">
                            <strong>Thank you!</strong> We have received your message. Our manager will contact you soon. Have a great day!
                        </div>
                        <div class="alert alert-danger text-center" id="submit-error" style="display: none;  margin-top: 70px">
                            <strong>We are sorry!</strong> Something went wrong, try to submit form later.
                        </div>
                        <div class="container-contact100">
                            <div class="wrap-contact100">
                                <form class="contact100-form validate-form" action="/contact" method="post">
                                    <span class="contact100-form-title"><?=trans('words.ask.title')?></span>

                                    <div class="wrap-input100 validate-input bg1" data-validate="<?=trans('words.ask.validate_enter_your_name')?>">
                                        <span class="label-input100"><?=trans('words.ask.full_name')?> *</span>
                                        <input class="input100" type="text" name="name" placeholder="<?=trans('words.ask.enter_your_name')?>">
                                    </div>

                                    <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "<?=trans('words.ask.validate_enter_your_email')?>">
                                        <span class="label-input100"><?=trans('words.ask.email')?> *</span>
                                        <input class="input100" type="text" name="email" placeholder="<?=trans('words.ask.enter_your_email')?>">
                                    </div>

                                    <div class="wrap-input100 bg1 rs1-wrap-input100">
                                        <span class="label-input100"><?=trans('words.ask.phone')?></span>
                                        <input class="input100" type="text" name="phone" placeholder="<?=trans('words.ask.enter_your_phone')?>">
                                    </div>

                                    <div class="wrap-input100 input100-select bg1">
                                        <span class="label-input100"><?=trans('words.ask.needed_services')?> *</span>
                                        <div>
                                            <select class="js-select2" name="service">
                                                <option><?=trans('words.ask.please_choose')?></option>
                                                <option><?=trans('words.ask.web_development')?></option>
                                                <option><?=trans('words.ask.mobile_development')?></option>
                                                <option><?=trans('words.ask.design')?></option>
                                                <option><?=trans('words.ask.other')?></option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>

                                    <div class="w-full dis-none js-show-service">
                                        <div class="wrap-contact100-form-range">
                                            <span class="label-input100"><?=trans('words.ask.budget')?> *</span>

                                            <div class="contact100-form-range-value">
                                                $<span id="value-lower">610</span> - $<span id="value-upper">980</span>
                                                <input type="text" name="from-value">
                                                <input type="text" name="to-value">
                                            </div>

                                            <div class="contact100-form-range-bar">
                                                <div id="filter-bar"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "<?=trans('words.ask.validate_message')?>">
                                        <span class="label-input100"><?=trans('words.ask.message')?></span>
                                        <textarea class="input100" name="message"></textarea>
                                    </div>

                                    <div class="container-contact100-form-btn">
                                        <button class="contact100-form-btn" id="submit-form">
						<span>
							<?=trans('words.ask.send')?>
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
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
                <div class="col-xs-12 col-sm-5 col-sm-offset-1 col-md-3 col-md-offset-0"><div class="site-number"><div class="stat-icon"><svg aria-hidden="true" data-prefix="fas" data-icon="users" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="svg-inline--fa fa-users fa-w-20 fa-3x" style="color: white;"><path data-v-27685602="" fill="currentColor" d="M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm448 0c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm32 32h-64c-17.6 0-33.5 7.1-45.1 18.6 40.3 22.1 68.9 62 75.1 109.4h66c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64zm-256 0c61.9 0 112-50.1 112-112S381.9 32 320 32 208 82.1 208 144s50.1 112 112 112zm76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C179.6 288 128 339.6 128 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2zm-223.7-13.4C161.5 263.1 145.6 256 128 256H64c-35.3 0-64 28.7-64 64v32c0 17.7 14.3 32 32 32h65.9c6.3-47.4 34.9-87.3 75.2-109.4z"></path></svg></div><h5 class="counter-count">11<span></span></h5><p><?=trans('words.numbers.team')?></p></div></div>
                <div class="col-xs-12 col-sm-5 col-sm-offset-1 col-md-3 col-md-offset-0"><div class="site-number"><div class="stat-icon"><svg aria-hidden="true" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-check fa-w-16 fa-3x" style="color: white;"><path data-v-27685602="" fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"></path></svg></div><h5 class="counter-count">25<span></span>+</h5><p><?=trans('words.numbers.projects')?></p></div></div>
                <div class="col-xs-12 col-sm-5 col-sm-offset-1 col-md-3 col-md-offset-0"><div class="site-number"><div class="stat-icon"><svg data-v-27685602="" aria-hidden="true" data-prefix="fas" data-icon="clock" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-clock fa-w-16 fa-3x" style="color: white;"><path data-v-27685602="" fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm57.1 350.1L224.9 294c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h48c6.6 0 12 5.4 12 12v137.7l63.5 46.2c5.4 3.9 6.5 11.4 2.6 16.8l-28.2 38.8c-3.9 5.3-11.4 6.5-16.8 2.6z" class=""></path></svg></div><h5 class="counter-count">2016<span></span></h5><p><?=trans('words.numbers.founded')?></p></div></div>
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
                        <h2 class="heading pb-10 white-text"><?=trans('words.team.title')?></h2>
                        <p class="white-text" style="font-size: 15px;"><?=trans('words.team.text')?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="team-member">
                        <div class="team-photo">
                            <img style="height: 260px;" src="images/sg.jpg" alt="team" />
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
                                            <img src="images/sg.jpg" alt="team" />
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
                            <img src="images/viktor.png" style="height: 260px;" alt="team" />
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
                            <img style="height: 260px;" src="images/yc.jpg" alt="team" />
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
                                            <img src="images/yc.jpg" alt="team" />
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
                            <img style="height: 260px;" src="images/vk.jpg" alt="team" />
                            <a href="#team-profile-4" class="expand-trigger content-popup"><span class="ti ti-plus"></span></a>
                        </div>
                        <div class="team-info">
                            <h4 class="name"><?=trans('words.team.vova.name')?></h4>
                            <p class="sub-title">Team Lead</p>
                        </div>
                        <div id="team-profile-4" class="team-profile mfp-hide">
                            <button title="Close (Esc)" type="button" class="mfp-close">×</button>
                            <div class="container-fluid">
                                <div class="row no-mg">
                                    <div class="col-md-6">
                                        <div class="team-profile-photo">
                                            <img src="images/vk.jpg" alt="team" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="team-profile-info">
                                            <h3 class="name"><?=trans('words.team.vova.name')?></h3>
                                            <p class="sub-title">Team Lead</p>
                                            <hr>
                                            <p><?=trans('words.team.vova.p1')?></p>
                                            <p><?=trans('words.team.vova.p2')?></p>
                                            <p><?=trans('words.team.vova.p3')?></p>
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
            <div id="elastic_grid_demo"></div>
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
                        <p><?=trans('words.testimonial.p1')?> <?=trans('words.testimonial.p2')?></p>
                        <div class="row">
                            <div class="col-md-2 col-md-offset-5">
                                <img src="images/top.png" alt="Top rated agency" class="img-responsive" style="margin-top: 20px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="testimonial-carousel has-carousel" data-items="2" data-loop="true" data-dots="true" data-auto="true" data-navs="false">
                        <div class="item text-center">
                            <div class="quotes">
                                <img src="images/quote-icon.png" class="quote-icon" alt="quote-icon" />
                                <blockquote>Great to work with that team. It is my second job with them, I will probably hire them on another job. We had great issues but with communication we managed to overwhelm those problems and make a great job. More important, for the job we had a fixed number of hours and they did not hesitate to work more hours than previewed to deliver. Great team.</a></blockquote>
                                <h6>Pere Raphael</h6>
                                <div class="client-image">
                                    <img src="images/client-1.jpg" alt="client" />
                                </div>
                            </div>
                        </div>
                        <div class="item text-center">
                            <div class="quotes">
                                <img src="images/quote-icon.png" class="quote-icon" alt="quote-icon" />
                                <blockquote>Great team to work with on our first project. Keep up the good work and we'll do many more together.</a></blockquote>
                                <h6>Pere Raphael</h6>
                                <div class="client-image">
                                    <img src="images/client-1.jpg" alt="client" />
                                </div>
                            </div>
                        </div>
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
                                        <h6><em class="fa fa-phone"></em><a href="tel:+380952869902">+380952869902</a></h6>
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
    <footer>
        <div class="footer" style="margin-top: 0;">
            <div class="footer-section section" style="background: none;">
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
                            <ul class="footer-links inline-list" style="margin-top: 15px">
                                <li style="color: #fff">Copyright © 2016 - <?=date('Y')?> <strong><strong>Bumeen Group</strong></strong>. <?=trans('words.footer.rights')?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery.bundle.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/vendor/animsition/js/animsition.min.js"></script>
    <script src="assets/vendor/bootstrap/js/popper.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendor/select2/select2.min.js"></script>
    <script>
        $(".js-select2").each(function(){
            $(this).select2({
                minimumResultsForSearch: 20,
                dropdownParent: $(this).next('.dropDownSelect2')
            });


            $(".js-select2").each(function(){
                $(this).on('select2:close', function (e){
                    if($(this).val() == "Please choose" || $(this).val() == "Other"
                    || $(this).val() == "Пожалуйста выберите" || $(this).val() == "Другое") {
                        $('.js-show-service').slideUp();
                    }
                    else {
                        $('.js-show-service').slideUp();
                        $('.js-show-service').slideDown();
                    }
                });
            });
        })
    </script>
    <script src="assets/vendor/daterangepicker/moment.min.js"></script>
    <script src="assets/vendor/daterangepicker/daterangepicker.js"></script>
    <script src="assets/vendor/countdowntime/countdowntime.js"></script>
    <script src="assets/vendor/noui/nouislider.min.js"></script>
    <script>
        var filterBar = document.getElementById('filter-bar');

        noUiSlider.create(filterBar, {
            start: [ 1000, 8000 ],
            connect: true,
            range: {
                'min': 500,
                'max': 20000
            }
        });

        var skipValues = [
            document.getElementById('value-lower'),
            document.getElementById('value-upper')
        ];

        filterBar.noUiSlider.on('update', function( values, handle ) {
            skipValues[handle].innerHTML = Math.round(values[handle]);
            $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
            $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
        });
    </script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/modernizr.custom.js"></script>
    <script src="assets/js/classie.js"></script>
    <script type="text/javascript" src="assets/js/jquery.elastislide.js"></script>
    <script type="text/javascript" src="assets/js/jquery.hoverdir.js"></script>
    <script type="text/javascript" src="assets/js/elastic_grid.js"></script>
    <script type="text/javascript">
        $(function(){
            $("#elastic_grid_demo").elastic_grid({
                'showAllText' : 'All',
                'filterEffect': 'popup', // moveup, scaleup, fallperspective, fly, flip, helix , popup
                'hoverDirection': true,
                'hoverDelay': 0,
                'hoverInverse': false,
                'expandingSpeed': 500,
                'expandingHeight': 500,
                'items' :
                    [
                        {
                            'title'         : 'CSGO News website',
                            'description'   : 'We have created a CSGO News website with the following options: <br> - News and tournament sections <br> - Live, Upcoming and Latest matches <br> - Photo and Video Gallery <br> - Forum & Private Chat <br>- CRM for admin when all sections can be managed',
                            'thumbnail'     : ['images/fuse.png'],
                            'large'         : ['images/fuse.png'],
                            'img_title'     : ['jquery elastic grid 1 ', 'jquery elastic grid 2', 'jquery elastic grid 3', 'jquery elastic grid 4', 'jquery elastic grid 5'],
                            'button_list'   :
                                [
                                    { 'title':'Live', 'url' : 'http://www.ninjafuse.org/', 'new_window' : true }
                                ],
                            'tags'          : ['Web development']
                        },
                        {
                            'title'         : 'Esports competition website',
                            'description'   : 'We have created a Esport competitive website with the following options: <br> - News and tournament sections <br> - Users can create a custom tournaments <br> - Users can invite teams and participate in tournaments <br> - Profile & Private Chat <br> - CRM for admin when all sections can be managed',
                            'thumbnail'     : ['images/esport.png'],
                            'large'         : ['images/esport.png'],
                            'img_title'     : ['jquery elastic grid 1 ', 'jquery elastic grid 2', 'jquery elastic grid 3', 'jquery elastic grid 4', 'jquery elastic grid 5'],
                            'button_list'   :
                                [
                                    { 'title':'Live', 'url' : 'http://playghter.com/register', 'new_window' : true }
                                ],
                            'tags'          : ['WordPress']
                        },
                        {
                            'title'         : 'Heavy equipment marketplace',
                            'description'   : "Unimachine is the heavy equipment marketplace, developed using WordPress technology and modern plugins. This project includes: <br> - Strong admin panel management features <br> - Form builder tool, to provide wise equipment inspection <br> - Payment and map API's integration <br> - Friendly PDF download feature",
                            'thumbnail'     : ['images/unimachine.png'],
                            'large'         : ['images/unimachine.png'],
                            'img_title'     : ['jquery elastic grid 1 ', 'jquery elastic grid 2', 'jquery elastic grid 3', 'jquery elastic grid 4', 'jquery elastic grid 5'],
                            'button_list'   :
                                [
                                    { 'title':'Live', 'url' : 'http://www.unimachine.com/', 'new_window' : true }
                                ],
                            'tags'          : ['WordPress']
                        },
                        {
                            'title'         : 'Canardcoincoin - Cryptocurrency news website',
                            'description'   : 'Canardcoincoin is a cryptocurrency news website with the following options: <br> - News and articles sections <br> - Cryptocurrency live price track <br> - Plugins and CRM to manage content',
                            'thumbnail'     : ['images/canard.png'],
                            'large'         : ['images/canard.png'],
                            'img_title'     : ['jquery elastic grid 1 ', 'jquery elastic grid 2', 'jquery elastic grid 3', 'jquery elastic grid 4', 'jquery elastic grid 5'],
                            'button_list'   :
                                [
                                    { 'title':'Live', 'url' : 'https://www.canardcoincoin.com/', 'new_window' : true }
                                ],
                            'tags'          : ['Web development']
                        },
                        {
                            'title'         : 'SportFit android & ios app',
                            'description'   : 'SportFit is a Android & ios application for sport written on ReactNative with the following options: <br> - Tracking your sport activity <br> - Sport news feed <br> - Blog & community',
                            'thumbnail'     : ['images/sportfit.png'],
                            'large'         : ['images/sportfit.png'],
                            'img_title'     : ['jquery elastic grid 1 ', 'jquery elastic grid 2', 'jquery elastic grid 3', 'jquery elastic grid 4', 'jquery elastic grid 5'],
                            'button_list'   :
                                [
                                    { 'title':'Live', 'url' : '#', 'new_window' : false }
                                ],
                            'tags'          : ['Mobile app']
                        },
                        {
                            'title'         : 'Funduk - online store',
                            'description'   : 'Funduk is an online store with the following options: <br> - Payment system <br> - Categories & products <br> - CRM and admin panel',
                            'thumbnail'     : ['images/funduk.png'],
                            'large'         : ['images/funduk.png'],
                            'img_title'     : ['jquery elastic grid 1 ', 'jquery elastic grid 2', 'jquery elastic grid 3', 'jquery elastic grid 4', 'jquery elastic grid 5'],
                            'button_list'   :
                                [
                                    { 'title':'Live', 'url' : '#', 'new_window' : false }
                                ],
                            'tags'          : ['Web development']
                        },
                        {
                            'title'         : 'Bison - online store',
                            'description'   : 'Bison is a betting company with the following options: <br> - Payment system <br> - Tracking and live updating coefficients <br> - Live streaming',
                            'thumbnail'     : ['images/bison.png'],
                            'large'         : ['images/bison.png'],
                            'img_title'     : ['jquery elastic grid 1 ', 'jquery elastic grid 2', 'jquery elastic grid 3', 'jquery elastic grid 4', 'jquery elastic grid 5'],
                            'button_list'   :
                                [
                                    { 'title':'Live', 'url' : 'https://bisonbc.by/', 'new_window' : true }
                                ],
                            'tags'          : ['Web development']
                        },
                        {
                            'title'         : 'Baron travel',
                            'description'   : 'Baron travel is a travel website to book a travel tour to different countries. Baron Travel provides round-the-clock support from the beginning of the journey to the arrival home. <br> - Booking system <br> - Manage tours <br> - CEO optimization',
                            'thumbnail'     : ['images/baron.png'],
                            'large'         : ['images/baron.png'],
                            'img_title'     : ['jquery elastic grid 1 ', 'jquery elastic grid 2', 'jquery elastic grid 3', 'jquery elastic grid 4', 'jquery elastic grid 5'],
                            'button_list'   :
                                [
                                    { 'title':'Live', 'url' : 'https://baron.travel/', 'new_window' : true }
                                ],
                            'tags'          : ['Web development']
                        },

                    ]
            });
        });
    </script>
    <script type="text/javascript">
        window.__lc = window.__lc || {};
        window.__lc.license = 10587747;
        (function() {
            var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
            lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
        })();
    </script>
</body>
</html>
