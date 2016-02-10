<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>

  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge" />

  <!-- Meta viewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="format-detection" content="telephone=yes">

  <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

  <link href='https://fonts.googleapis.com/css?family=Cuprum:400,700,400italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
  <<link href='https://fonts.googleapis.com/css?family=Exo+2:400,700,700italic,400italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>

  <!-- icons -->
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

  <!--[if lt IE 9]>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/selectivizr.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/respond.js"></script>
  <![endif]-->
  <!-- css + javascript -->
    <?php wp_head(); ?>
</head>
<!-- <body <?php body_class(); ?>> -->
<body class="page-home">



  <div id="main-container">
    <div id="modal-56b75f70b9a3c" tabindex="-1" class="modal fade callback" data-backdrop="true" data-keyboard="true" data-show="true" role="dialog" aria-hidden="true">

      <!-- Modal Dialog -->
      <div class="modal-dialog modal-sm modal-dialog-center">

        <!-- Modal Content -->
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">

            <!-- Close Button -->
            <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
              <span aria-hidden="true">×</span>
            </button>
            <!-- /Close Button -->
            <!-- Heading -->
            <div class="modal-title fs-1-5 title-font text-center"><span class="text-primary">Обратный</span> звонок</div>
            <!-- /Heading -->

          </div>
          <!-- /Modal Header -->
          <!-- Modal Body -->
          <div class="modal-body scroll-nice">

            <!-- Form - CallBack - MODPATH/callback/views/forms/callback/submit-callback.php
                        ================================================== -->
            <form action="/#ajax" method="post" id="form-callback" accept-charset="utf-8" class="form-horizontal form-callback" data-event-success="submitSuccessFormCallback" role="form" enctype="application/x-www-form-urlencoded">


              <div class="form-group" data-group="name">


                <div class="col-sm-12">


                  <!-- Input Group -->
                  <div class="input-group">


                    <!-- Controls -->
                    <input type="text" id="inputName" name="name" class="form-control" placeholder="Ваше имя" list="datalist-name" autofocus="" autocomplete="on">
                    <!-- /Controls -->
                    <!-- Addon After -->
                    <div class="input-group-addon">
                      <!-- Element - Icon - Font Awesome - MODPATH/custom/views/elements/icon-fa.php
                                            ================================================== -->
                      <i class="fa fa-user"></i>
                    </div>
                    <!-- /Addon After -->

                  </div>
                  <!-- /Input Group -->
                  <!-- Status -->
                  <span class="help-block field-status js-field-status" aria-hidden="true">
                                    </span>
                  <!-- /Status -->



                </div>

              </div>





              <div class="form-group" data-group="tel">
                <div class="col-sm-12">
                  <!-- Input Group -->
                  <div class="input-group">
                    <!-- Controls -->
                    <input type="tel" id="inputTel" name="tel" class="form-control" placeholder="Ваш номер телефона" autofocus="" autocomplete="on">
                    <!-- /Controls -->
                    <div class="input-group-addon">
                      <!-- Element - Icon - Font Awesome - MODPATH/custom/views/elements/icon-fa.php
                                           ================================================== -->
                      <i class="fa fa-phone"></i>
                    </div>
                  </div>
                  <!-- /Input Group -->
                  <!-- Status -->
                  <span class="help-block field-status js-field-status" aria-hidden="true"></span>
                  <!-- /Status -->
                </div>
              </div>
              <div class="form-group" data-group="message">
                <div class="col-sm-12">
                  <!-- Input Group -->
                  <div class="input-group">
                    <!-- Controls -->
                    <input type="text" id="inputMessage" name="message" class="form-control" placeholder="Когда перезвонить?" list="datalist-message" autofocus="" autocomplete="on">
                    <!-- /Controls -->
                    <!-- Addon After -->
                    <div class="input-group-addon">
                      <!-- Element - Icon - Font Awesome - MODPATH/custom/views/elements/icon-fa.php
                                            ================================================== -->
                      <i class="fa fa-clock-o"></i>
                    </div>
                    <!-- /Addon After -->
                  </div>
                  <!-- /Input Group -->
                  <!-- Status -->
                  <span class="help-block field-status js-field-status" aria-hidden="true"></span>
                  <!-- /Status -->
                </div>
              </div>

              <!-- Hidden fields -->
              <input type="hidden" name="controller" value="callback">
              <input type="hidden" name="token" value="ylBk4mWszLYnPhzlHF53xsgeVU5j+guJMAL6ZsHBMDM=">
              <input type="hidden" name="url" value="/ajax/callModal">
              <!-- /Hidden fields -->
            </form>
            <script type="text/javascript">
              $(document).ready(function() {
                $('input[name="tel"]').inputmask('+7(999) 999-99-99');
              });
            </script>
          </div>
          <!-- /Modal Body -->
          <!-- Modal Footer -->
          <div class="modal-footer">
            <div class="text-center">
              <button name="submit" class="btn-fx btn-5 btn-5a text btn-block" data-toggle="submit" data-target="#form-callback" data-success=".callback-sent"><span>Все верно</span></button>
            </div>
            <button type="button" class="hidden btn btn-primary">Отправить сообщение</button>
            <button type="button" class="hidden btn btn-default" data-dismiss="modal">Закрыть</button>
          </div>
          <!-- /Modal Footer -->
        </div>
        <!-- /Modal Content -->
      </div>
      <!-- /Modal Dialog -->
    </div>

    <!-- Menu Top -->
    <!-- Header -->
    <div class="container-fluid">
      <div class="container p0 mt30 mb30">
        <div class="row p0">
          <div class="block-header">

            <!-- Logo -->
            <div class="col-xs-12 col-sm-4 col-md-5 col-lg-5">
              <div class="row">
                <div class="col-xs-3 col-sm-3 col-md-4 col-lg-4">
                  <div class="text-center">

                    <img src="<?php echo get_template_directory_uri(); ?>/images/logos/auto-monster/logo-96x81.optimized.png" alt="Логотип Автомонстра" class="img-responsive rotateIn wow" data-wow-iteration="1">
                  </div>
                </div>
                <div class="col-xs-9 col-sm-9 col-md-8 col-lg-8">
                  <div class="text-left">
                    <!-- Brand -->
                    <span class="uppercase fs-2-0em title-font"><span class="text-primary fadeIn wow" data-wow-duration="0.3s">Авто</span><span class="fadeIn wow">Скупщик</span></span>
                    <!-- /Brand -->
                    <!-- Slogan -->
                    <div class="small text-muted" data-wow-delay="0.4s" data-wow-duration="0.5s" data-wow-iteration="1">Первый сервис по выкупу автомобилей по рыночной стоимости</div>
                    <!-- /Slogan -->
                  </div>
                </div>
              </div>
            </div>

            <!-- Schedule -->
            <div class="hidden-xs col-sm-4 col-md-3 col-lg-3 col-sm-offset-0 col-md-offset-0 col-lg-offset-0 p0">
              <div class="text-right">
                <div class="title-font fs-2-0em text-muted uppercase" style="color:#cecece">Наш&nbsp;адрес:</div>
                <a href="contacts" class="dashed">
                  <i class="fa fa-map-marker"></i>
                  <span>СПб, Энергетиков&nbsp;53</span>
                </a>
              </div>
            </div>

            <!-- Telephone -->
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

              <div itemscope itemtype="http://schema.org/Organization">

                <div class="hidden">
                  <span itemprop="name">АВТОСКУПЩИК</span>
                  <span itemprop="email">info@autoskupshik.ru</span>
                </div>

                <div class="hidden" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                  <span itemprop="streetAddress">Энергетиков 53</span>
                  <span itemprop="postalCode">117574</span>
                  <span itemprop="addressLocality">Санкт-Петербург</span>,
                </div>

                <div class="nowrap title-font text-right" itemprop="telephone">
                  <span class="fs-1-2em text-primary">+7 (812)</span> <span class="fs-2-0em text-default">812-12-12</span>
                </div>
              </div>

              <div class="link-callback text-right fs-1-0em">
                <a href="#" rel="nofollow" class="js-link dashed" data-toggle="modal" data-target=".callback">
                  <i class="fa fa-phone"></i>
                  <span>Перезвоните мне</span>
                </a>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <!-- Menu - Main -->
    <div class="menu-main sticky">
      <div class="container-fluid">
        <div class="container p0 mb0">
          <div class="row mp0 mb0">
            <nav class="block-menu-main">
              <?php wpeHeadNav(); ?>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <!-- Content -->
    <div class="content">
