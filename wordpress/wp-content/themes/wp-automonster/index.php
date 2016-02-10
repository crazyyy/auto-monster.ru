<?php get_header(); ?>



      <div class="container-fluid p0">
        <div class="mb30">

          <section id="teaser">

            <div class="container p0">

              <div class="row mp0">

                <div class="hidden-xs col-sm-6 col-md-8 col-lg-8">

                  <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">

                    <!-- Wrapper for slides start -->
                    <div class="carousel-inner">

                      <!-- Slide - 1 -->
                      <div class="item">

                        <h1 class="white uppercase mt0" style="min-height: 140px">
                        Моментальный автовыкуп. Чистая сделка
                                                    <span class="small">95% рыночной цены</span>
                                                </h1>

                        <div class="car-img" style="min-height: 323px">
                          <img src="<?php echo get_template_directory_uri(); ?>/images/slides/car1.png" alt="Выкуп авто по максимальной цене" class="img-responsive">
                        </div>

                      </div>
                      <!-- /Slide - 1 -->
                      <!-- Slide - 2 -->
                      <div class="item active">

                        <h1 class="white uppercase mt0" style="min-height: 140px">
                                                    Оценка автомобиля. Оформление документов
                                                    <span class="small">Всего за 45 минут, засекайте</span>
                                                </h1>

                        <div class="car-img" style="min-height: 323px">
                          <img src="<?php echo get_template_directory_uri(); ?>/images/slides/car2.png" alt="Оценка стоимости авто онлайн" class="img-responsive">
                        </div>

                      </div>
                      <!-- /Slide - 2 -->

                    </div>
                    <!-- Wrapper for slides end -->
                    <!-- Slider Controls start -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                    </a>
                    <!-- Slider Controls end -->

                  </div>

                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">

                  <div class="block-form-estimation">

                    <div class="block-form-estimation p20">

                      <form action="/#ajax" method="post" id="form-estimations" accept-charset="utf-8" class="form-horizontal cost-estimations" data-event-success="submitSuccessFormEstimationExpress" role="form" enctype="application/x-www-form-urlencoded">
                        <!-- Vehicle brand -->

                        <div class="form-group" data-group="brand_id">


                          <div class="col-sm-12">

                            <!-- Input Group -->
                            <div class="input-single">


                              <div id="select-brand_id-control">
                                <select id="select-brand_id" name="brand_id" class="form-control">
                                  <option value="">&mdash;&nbsp;Марка автомобиля</option>
                                  <option value="1">Acura</option>
                                  <option value="2">Alfa Romeo</option>
                                  <option value="4">Aston Martin</option>
                                  <option value="3">Audi</option>
                                  <option value="5">Bentley</option>
                                  <option value="6">BMW</option>
                                  <option value="7">Bugatti</option>
                                  <option value="8">Buick</option>
                                  <option value="9">Cadillac</option>
                                  <option value="10">Chery</option>
                                  <option value="11">Chevrolet</option>
                                  <option value="12">Chrysler</option>
                                  <option value="13">Citroen</option>
                                  <option value="14">Dacia</option>
                                  <option value="15">Daewoo</option>
                                  <option value="16">Dodge</option>
                                  <option value="17">Ferrari</option>
                                  <option value="18">Fiat</option>
                                  <option value="19">Ford</option>
                                  <option value="21">Holden</option>
                                  <option value="22">Honda</option>
                                  <option value="23">Hyundai</option>
                                  <option value="24">Infinity</option>
                                  <option value="25">Jaguar</option>
                                  <option value="26">Jeep</option>
                                  <option value="27">Kia</option>
                                  <option value="29">Lamborghini</option>
                                  <option value="30">Lancia</option>
                                  <option value="31">Land Rover</option>
                                  <option value="32">Lexus</option>
                                  <option value="33">Lotus</option>
                                  <option value="34">Maserati</option>
                                  <option value="35">Maybach</option>
                                  <option value="36">Mazda</option>
                                  <option value="37">Mercedes</option>
                                  <option value="38">Mercury</option>
                                  <option value="39">Mini</option>
                                  <option value="40">Mitsubishi</option>
                                  <option value="41">Nissan</option>
                                  <option value="42">Opel</option>
                                  <option value="43">Pagani</option>
                                  <option value="44">Peugeot</option>
                                  <option value="45">Pontiac</option>
                                  <option value="46">Porsche</option>
                                  <option value="47">Renault</option>
                                  <option value="48">Rolls-Royce</option>
                                  <option value="49">Rover</option>
                                  <option value="50">Saab</option>
                                  <option value="51">Scion</option>
                                  <option value="52">Seat</option>
                                  <option value="53">Skoda</option>
                                  <option value="54">SsangYong</option>
                                  <option value="55">Subaru</option>
                                  <option value="56">Suzuki</option>
                                  <option value="57">Toyota</option>
                                  <option value="58">Vauxhall</option>
                                  <option value="59">Volkswagen</option>
                                  <option value="60">Volvo</option>
                                  <option value="28">ВАЗ</option>
                                  <option value="20">ГАЗ</option>
                                </select>
                              </div>


                            </div>
                            <!-- /Input Group -->
                            <!-- Status -->
                            <span class="help-block field-status js-field-status" aria-hidden="true">
                                                        </span>
                            <!-- /Status -->


                          </div>

                        </div>
                        <!-- /Vehicle brand -->
                        <!-- Vehicle model -->

                        <div class="form-group" data-group="model_id">


                          <div class="col-sm-12">

                            <!-- Input Group -->
                            <div class="input-single">


                              <div id="select-model_id-control">
                                <select id="select-model_id" name="model_id" class="form-control" disabled="disabled">
                                  <option value="">&mdash;&nbsp;Модель</option>
                                </select>
                              </div>


                            </div>
                            <!-- /Input Group -->
                            <!-- Status -->
                            <span class="help-block field-status js-field-status" aria-hidden="true">
                                                        </span>
                            <!-- /Status -->


                          </div>

                        </div>
                        <!-- /Vehicle model -->
                        <!-- Additional fields -->
                        <div class="hidden_block" style="display: none;">

                          <!-- Vehicle year manufactured -->

                          <div class="form-group" data-group="manufactured">


                            <div class="col-sm-12">

                              <!-- Input Group -->
                              <div class="input-single">


                                <div id="select-manufactured-control">
                                  <select id="select-manufactured" name="manufactured" class="form-control">
                                    <option value="">&mdash;&nbsp;Выберите год</option>
                                    <option value="2016">2016</option>
                                    <option value="2015">2015</option>
                                    <option value="2014">2014</option>
                                    <option value="2013">2013</option>
                                    <option value="2012">2012</option>
                                    <option value="2011">2011</option>
                                    <option value="2010">2010</option>
                                    <option value="2009">2009</option>
                                    <option value="2008">2008</option>
                                    <option value="2007">2007</option>
                                    <option value="2006">2006</option>
                                    <option value="2005">2005</option>
                                    <option value="2004">2004</option>
                                    <option value="2003">2003</option>
                                    <option value="2002">2002</option>
                                    <option value="2001">2001</option>
                                    <option value="2000">2000</option>
                                    <option value="1999">1999</option>
                                    <option value="1998">1998</option>
                                    <option value="1997">1997</option>
                                  </select>
                                </div>


                              </div>
                              <!-- /Input Group -->
                              <!-- Status -->
                              <span class="help-block field-status js-field-status" aria-hidden="true">
                                                            </span>
                              <!-- /Status -->


                            </div>

                          </div>
                          <!-- /Vehicle year manufactured -->
                          <!-- Vehicle transmission type -->
                          <!-- /Vehicle transmission type -->
                          <!-- Vehicle mileage -->

                          <div class="form-group" data-group="mileage">


                            <div class="col-sm-12">


                              <!-- Input Group -->
                              <div class="input-group">


                                <!-- Controls -->
                                <input type="text" id="inputMileage" name="mileage" class="form-control" placeholder="Пробег" list="datalist-mileage" autocomplete="off" />
                                <!-- /Controls -->
                                <!-- Addon After -->
                                <div class="input-group-addon">км</div>
                                <!-- /Addon After -->

                              </div>
                              <!-- /Input Group -->
                              <!-- Status -->
                              <span class="help-block field-status js-field-status" aria-hidden="true">
                                                            </span>
                              <!-- /Status -->



                            </div>

                          </div>

                          <!-- /Vehicle mileage -->
                          <!-- Vehicle in credit -->


                          <div class="form-group" data-group="credit">


                            <div class="col-sm-12">

                              <!-- Input Group -->
                              <div class="input-single">


                                <div id="select-credit-control">
                                  <select id="select-credit" name="credit" class="form-control">
                                    <option value="">&mdash;&nbsp;Автомобиль в кредите?</option>
                                    <option value="1">Да</option>
                                    <option value="0">Нет</option>
                                  </select>
                                </div>


                              </div>
                              <!-- /Input Group -->
                              <!-- Status -->
                              <span class="help-block field-status js-field-status" aria-hidden="true">
                                                            </span>
                              <!-- /Status -->


                            </div>

                          </div>
                          <!-- /Vehicle in credit -->
                          <!-- Summ expectations -->

                          <div class="form-group" data-group="appetite">


                            <div class="col-sm-12">


                              <!-- Input Group -->
                              <div class="input-group">


                                <!-- Controls -->
                                <input type="text" id="inputAppetite" name="appetite" class="form-control" placeholder="Желаемая сумма" list="datalist-appetite" autocomplete="off" />
                                <!-- /Controls -->
                                <!-- Addon After -->
                                <div class="input-group-addon">руб</div>
                                <!-- /Addon After -->

                              </div>
                              <!-- /Input Group -->
                              <!-- Status -->
                              <span class="help-block field-status js-field-status" aria-hidden="true">
                                                            </span>
                              <!-- /Status -->



                            </div>

                          </div>

                          <!-- /Summ expectations -->

                        </div>
                        <!-- /Additional fields -->
                        <!-- Separator -->

                        <div class="form-group">


                          <div class="col-sm-12">



                            <!-- Controls -->
                            <div class="form-control-static">
                              <hr class="mt0 mb10" />
                            </div>
                            <!-- /Controls -->

                          </div>

                        </div>
                        <!-- /Separator -->
                        <!-- Owner's name -->

                        <div class="form-group" data-group="name">


                          <div class="col-sm-12">


                            <!-- Input Group -->
                            <div class="input-group">


                              <!-- Controls -->
                              <input type="text" id="inputName" name="name" class="form-control" placeholder="Ваше имя" list="datalist-name" autocomplete="on" />
                              <!-- /Controls -->
                              <!-- Addon After -->
                              <div class="input-group-addon">
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

                        <!-- /Owner's name -->
                        <!-- Owner's phone number -->


                        <div class="form-group" data-group="tel">


                          <div class="col-sm-12">


                            <!-- Input Group -->
                            <div class="input-group">


                              <!-- Controls -->
                              <input type="tel" id="inputTel" name="tel" class="form-control" placeholder="Ваш номер телефона" autocomplete="on" />
                              <!-- /Controls -->

                              <div class="input-group-addon">
                                <i class="fa fa-phone"></i>
                              </div>

                            </div>
                            <!-- /Input Group -->
                            <!-- Status -->
                            <span class="help-block field-status js-field-status" aria-hidden="true">
                                                        </span>
                            <!-- /Status -->



                          </div>

                        </div>
                        <!-- /Owner's phone number -->
                        <!-- Additional fields -->
                        <div class="hidden_block" style="display: none;">

                          <!-- Call time -->

                          <div class="form-group" data-group="when">


                            <div class="col-sm-12">


                              <!-- Input Group -->
                              <div class="input-group">


                                <!-- Controls -->
                                <input type="text" id="inputWhen" name="when" class="form-control" placeholder="Когда перезвонить?" list="datalist-when" autocomplete="on" />
                                <!-- /Controls -->
                                <!-- Addon After -->
                                <div class="input-group-addon">
                                  <i class="fa fa-clock-o"></i>
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
                          <!-- /Call time -->

                        </div>
                        <!-- /Additional fields -->
                        <!-- Hidden fields -->
                        <input type="hidden" name="type" value="express" />
                        <input type="hidden" name="test" value="express" />
                        <input type="hidden" name="controller" value="estimations" />
                        <input type="hidden" name="token" value="4CvSPBzZxNjX8fKrYtZCOhTt/k4loxEi+OFnJGRTfgQ=" />
                        <input type="hidden" name="ip" value="37.212.240.156" />
                        <input type="hidden" name="url" value="/" />
                        <input type="hidden" name="referrer" value="/" />
                        <input type="hidden" name="created_date" value="2016-02-07 11:50:21" />
                        <!-- /Hidden fields -->
                        <!-- Separator -->

                        <div class="form-group">


                          <div class="col-sm-12">



                            <!-- Controls -->
                            <div class="form-control-static">
                              <hr class="mt0 mb10" />
                            </div>
                            <!-- /Controls -->

                          </div>

                        </div>
                        <!-- /Separator -->
                        <!-- Form submit button -->
                        <button name="submit" class="form-control btn btn-block btn-lg btn-primary submit title-font" data-toggle="submit" data-target="#form-estimations" data-success=".estimations-sent" data-loading-text="Обрабатываю данные..."><span>Рассчитать стоимость</span></button>
                        <!-- /Form submit button -->

                      </form>
                    </div>

                  </div>
                </div>
              </div>

            </div>

          </section>
          <div class="arrow-down"></div>

        </div>
      </div>
      <div class="container-fluid">

        <div class="container p0 mb30">
          <div class="mb0">
            <div class="row p0">

              <div class="block-services" data-equal2="div.text">

                <div class="col-md-12">
                  <div class="mb40">
                    <h2>Выкупаем <span class="uppercase">дорого</span> - Деньги сразу</h2>
                    <span class="underline">&nbsp;</span>
                  </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                  <div class="text-center p20 block-service zoomIn wow" data-wow-offset="20" data-wow-duration="0.3s">
                    <div class="icon fs-3-3em">
                      <i class="fa fa-clock-o"></i>
                    </div>
                    <h3 class="mt0 pt0 standart-font fs-1-6">
                                            <a href="srochnyj-vykup-avtomobilej">Срочный выкуп автомобилей</a>
                                        </h3>
                    <div class="small italic text-muted mt10 mb10">
                      &mdash;&nbsp;Решение в один момент
                    </div>
                    <div class="text">
                      <p>Секунда&nbsp;&mdash; на&nbsp;решение, 5&nbsp;минут&nbsp;&mdash; на&nbsp;оценку, 10&nbsp;минут&nbsp;&mdash; на&nbsp;выкуп авто, 15&nbsp;минут&nbsp;&mdash; на&nbsp;выплату денег.</p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                  <div class="text-center p20 block-service zoomIn wow" data-wow-offset="20" data-wow-duration="0.3s">
                    <div class="icon fs-3-3em">
                      <i class="fa fa-automobile"></i>
                    </div>
                    <h3 class="mt0 pt0 standart-font fs-1-6">
                                            <a href="vykup-kreditnykh-avtomobilej">Выкуп кредитных автомобилей</a>
                                        </h3>
                    <div class="small italic text-muted mt10 mb10">
                      &mdash;&nbsp;Без обмана и волокиты
                    </div>
                    <div class="text">
                      <p>Покупка авто в&nbsp;кредите. Это реально, даже если твой долг &laquo;догнал&raquo; стоимость автомобиля.</p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                  <div class="text-center p20 block-service zoomIn wow" data-wow-offset="20" data-wow-duration="0.3s">
                    <div class="icon fs-3-3em">
                      <i class="fa fa-tachometer"></i>
                    </div>
                    <h3 class="mt0 pt0 standart-font fs-1-6">
                                            <a href="priem-avtomobilej-na-komissiyu">Прием автомобилей на&nbsp;комиссию</a>
                                        </h3>
                    <div class="small italic text-muted mt10 mb10">
                      &mdash;&nbsp;Реально и быстро
                    </div>
                    <div class="text">
                      <p>Быстрая продажа подержанного авто по&nbsp;реальной цене. Быстрая реализация&nbsp;&mdash; быстрые деньги.</p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                  <div class="text-center p20 block-service zoomIn wow" data-wow-offset="20" data-wow-duration="0.3s">
                    <div class="icon fs-3-3em">
                      <i class="fa fa-refresh"></i>
                    </div>
                    <h3 class="mt0 pt0 standart-font fs-1-6">
                                            <a href="obmen-avtomobilej-s-doplatoj">Обмен машины на&nbsp;машину</a>
                                        </h3>
                    <div class="small italic text-muted mt10 mb10">
                      &mdash;&nbsp;Все по-честному
                    </div>
                    <div class="text">
                      <p>Реальный автообмен с&nbsp;доплатой и&nbsp;без. Меняй старенькую &laquo;Волгу&raquo; на&nbsp;шикарную Alfa Romeo.</p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                  <div class="text-center p20 block-service zoomIn wow" data-wow-offset="20" data-wow-duration="0.3s">
                    <div class="icon fs-3-3em">
                      <i class="fa fa-ambulance"></i>
                    </div>
                    <h3 class="mt0 pt0 standart-font fs-1-6">
                                            <a href="vykup-bitykh-avtomobilej">Выкуп битых автомобилей</a>
                                        </h3>
                    <div class="small italic text-muted mt10 mb10">
                      &mdash;&nbsp;Живые деньги за автохлам
                    </div>
                    <div class="text">
                      <p>Выкуп битого и&nbsp;неисправного авто сразу после аварии. За&nbsp;железо и&nbsp;стекло&nbsp;&mdash; даем реальное бабло.</p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                  <div class="text-center p20 block-service zoomIn wow" data-wow-offset="20" data-wow-duration="0.3s">
                    <div class="icon fs-3-3em">
                      <i class="fa fa-motorcycle"></i>
                    </div>
                    <h3 class="mt0 pt0 standart-font fs-1-6">
                                            <a href="srochnyj-vykup-mototekhniki">Срочный выкуп мототехники</a>
                                        </h3>
                    <div class="small italic text-muted mt10 mb10">
                      &mdash;&nbsp;Оценим по достоинству
                    </div>
                    <div class="text">
                      <p>Негде &laquo;перезимовать&raquo;, мечтаешь о&nbsp;байке покруче, хочешь тачку вместо скутера... Выкуп всех видов мототехники.</p>
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </div>
        </div>

      </div>

      <div id="estimate-right-now" class="container-fluid mp0" data-type="background" data-speed="30">
        <div class="container">
          <div class="row p0">

            <div class="block-estimation">

              <!-- Text -->
              <div class="row slideInDown wow">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <h2 class="mt0 uppercase">
                                        <span>
                                            Оцени свою тачку немедленно и&nbsp;бесплатно. АВТОСКУПЩИК – это до 95% от рыночной стоимости авто.
                                        </span>
                                    </h2>
                </div>
              </div>

              <!-- Button -->
              <div class="row mt20 slideInUp wow">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div>
                    <div class="white text-center">
                      <a href="onlajn-otsenka-avto" class="btn btn-5 btn-lg title-font">Погнали!</a>
                    </div>
                  </div>
                </div>
              </div>

            </div>

          </div>
        </div>
      </div>
      <div class="container mt50 mb30">
        <div class="row p0">

          <div class="block-brands">

            <!-- Title -->
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <div class="mb40">
                <h2>Любая марка авто на выбор</h2>
                <span class="underline">&nbsp;</span>
              </div>
            </div>
            <!-- /Title -->

            <div class="col-xs-3 col-sm-1 col-md-1 col-lg-1">

              <a href="services/vikup-auto-acura" title="Выкуп автомобилей Acura (Акура)" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/autobrands/logo-acura.jpg" alt="Логотип Acura (Акура)" class="img-responsive"></a>
            </div>
            <div class="col-xs-3 col-sm-1 col-md-1 col-lg-1">

              <a href="services/vikup-auto-alfa-romeo" title="Выкуп автомобилей Alfa Romeo (Альфа Ромео)" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/autobrands/logo-alfa-romeo.jpg" alt="Логотип Alfa Romeo (Альфа Ромео)" class="img-responsive"></a>
            </div>
            <div class="col-xs-3 col-sm-1 col-md-1 col-lg-1">

              <a href="services/vikup-auto-aston-martin" title="Выкуп автомобилей Aston Martin (Астон Мартин)" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/autobrands/logo-aston-martin.jpg" alt="Логотип Aston Martin (Астон Мартин)" class="img-responsive"></a>
            </div>
            <div class="col-xs-3 col-sm-1 col-md-1 col-lg-1">

              <a href="services/vikup-auto-audi" title="Выкуп автомобилей Audi (Ауди)" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/autobrands/logo-audi.jpg" alt="Логотип Audi (Ауди)" class="img-responsive"></a>
            </div>
            <div class="col-xs-3 col-sm-1 col-md-1 col-lg-1">

              <a href="services/vikup-auto-bentley" title="Выкуп автомобилей Bentley (Бентли)" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/autobrands/logo-bentley.jpg" alt="Логотип Bentley (Бентли)" class="img-responsive"></a>
            </div>
            <div class="col-xs-3 col-sm-1 col-md-1 col-lg-1">

              <a href="services/vikup-auto-bmw" title="Выкуп автомобилей BMW (БМВ)" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/autobrands/logo-bmw.jpg" alt="Логотип BMW (БМВ)" class="img-responsive"></a>
            </div>
            <div class="col-xs-3 col-sm-1 col-md-1 col-lg-1">

              <a href="services/vikup-auto-bugatti" title="Выкуп автомобилей Bugatti (Бугатти)" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/autobrands/logo-bugatti.jpg" alt="Логотип Bugatti (Бугатти)" class="img-responsive"></a>
            </div>
            <div class="col-xs-3 col-sm-1 col-md-1 col-lg-1">

              <a href="services/vikup-auto-buick" title="Выкуп автомобилей Buick (Бьюик)" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/autobrands/logo-buick.jpg" alt="Логотип Buick (Бьюик)" class="img-responsive"></a>
            </div>
            <div class="col-xs-3 col-sm-1 col-md-1 col-lg-1">

              <a href="services/vikup-auto-cadillac" title="Выкуп автомобилей Cadillac (Кадиллак)" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/autobrands/logo-cadillac.jpg" alt="Логотип Cadillac (Кадиллак)" class="img-responsive"></a>
            </div>
            <div class="col-xs-3 col-sm-1 col-md-1 col-lg-1">

              <a href="services/vikup-auto-chery" title="Выкуп автомобилей Chery (Чери)" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/autobrands/logo-chery.jpg" alt="Логотип Chery (Чери)" class="img-responsive"></a>
            </div>
            <div class="col-xs-3 col-sm-1 col-md-1 col-lg-1">

              <a href="services/vikup-auto-chevrolet" title="Выкуп автомобилей Chevrolet (Шевроле)" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/autobrands/logo-chevrolet.jpg" alt="Логотип Chevrolet (Шевроле)" class="img-responsive"></a>
            </div>
            <div class="col-xs-3 col-sm-1 col-md-1 col-lg-1">

              <a href="services/vikup-auto-chrysler" title="Выкуп автомобилей Chrysler (Крайслер)" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/autobrands/logo-chrysler.jpg" alt="Логотип Chrysler (Крайслер)" class="img-responsive"></a>
            </div>
            <div class="col-xs-3 col-sm-1 col-md-1 col-lg-1">

              <a href="services/vikup-auto-citroen" title="Выкуп автомобилей Citroen (Ситроен)" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/autobrands/logo-citroen.jpg" alt="Логотип Citroen (Ситроен)" class="img-responsive"></a>
            </div>
            <div class="col-xs-3 col-sm-1 col-md-1 col-lg-1">

              <a href="services/vikup-auto-dacia" title="Выкуп автомобилей Dacia (Дачи)" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/autobrands/logo-dacia.jpg" alt="Логотип Dacia (Дачи)" class="img-responsive"></a>
            </div>
            <div class="col-xs-3 col-sm-1 col-md-1 col-lg-1">

              <a href="services/vikup-auto-daewoo" title="Выкуп автомобилей Daewoo (Дэу)" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/autobrands/logo-daewoo.jpg" alt="Логотип Daewoo (Дэу)" class="img-responsive"></a>
            </div>
            <div class="col-xs-3 col-sm-1 col-md-1 col-lg-1">

              <a href="services/vikup-auto-dodge" title="Выкуп автомобилей Dodge (Додж)" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/autobrands/logo-dodge.jpg" alt="Логотип Dodge (Додж)" class="img-responsive"></a>
            </div>
            <div class="col-xs-3 col-sm-1 col-md-1 col-lg-1">

              <a href="services/vikup-auto-ferrari" title="Выкуп автомобилей Ferrari (Феррари)" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/autobrands/logo-ferrari.jpg" alt="Логотип Ferrari (Феррари)" class="img-responsive"></a>
            </div>
            <div class="col-xs-3 col-sm-1 col-md-1 col-lg-1">

              <a href="services/vikup-auto-fiat" title="Выкуп автомобилей Fiat (Фиат)" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/autobrands/logo-fiat.jpg" alt="Логотип Fiat (Фиат)" class="img-responsive"></a>
            </div>
            <div class="col-xs-3 col-sm-1 col-md-1 col-lg-1">

              <a href="services/vikup-auto-ford" title="Выкуп автомобилей Ford (Форд)" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/autobrands/logo-ford.jpg" alt="Логотип Ford (Форд)" class="img-responsive"></a>
            </div>
            <div class="col-xs-3 col-sm-1 col-md-1 col-lg-1">

              <a href="services/vikup-auto-holden" title="Выкуп автомобилей Holden (Холден)" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/autobrands/logo-holden.jpg" alt="Логотип Holden (Холден)" class="img-responsive"></a>
            </div>
            <div class="col-xs-3 col-sm-1 col-md-1 col-lg-1">

              <a href="services/vikup-auto-honda" title="Выкуп автомобилей Honda (Хонда)" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/autobrands/logo-honda.jpg" alt="Логотип Honda (Хонда)" class="img-responsive"></a>
            </div>
            <div class="col-xs-3 col-sm-1 col-md-1 col-lg-1">

              <a href="services/vikup-auto-hyundai" title="Выкуп автомобилей Hyundai (Хендай)" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/autobrands/logo-hyundai.jpg" alt="Логотип Hyundai (Хендай)" class="img-responsive"></a>
            </div>
            <div class="col-xs-3 col-sm-1 col-md-1 col-lg-1">

              <a href="services/vikup-auto-infiniti" title="Выкуп автомобилей Infinity (Инфинити)" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/autobrands/logo-infiniti.jpg" alt="Логотип Infinity (Инфинити)" class="img-responsive"></a>
            </div>
            <div class="col-xs-3 col-sm-1 col-md-1 col-lg-1">

              <a href="services/vikup-auto-jaguar" title="Выкуп автомобилей Jaguar (Ягуар)" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/autobrands/logo-jaguar.jpg" alt="Логотип Jaguar (Ягуар)" class="img-responsive"></a>
            </div>
            <div class="col-xs-3 col-sm-1 col-md-1 col-lg-1">

              <a href="services/vikup-auto-jeep" title="Выкуп автомобилей Jeep (Джип)" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/autobrands/logo-jeep.jpg" alt="Логотип Jeep (Джип)" class="img-responsive"></a>
            </div>
            <div class="col-xs-3 col-sm-1 col-md-1 col-lg-1">

              <a href="services/vikup-auto-kia" title="Выкуп автомобилей Kia (Киа)" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/autobrands/logo-kia.jpg" alt="Логотип Kia (Киа)" class="img-responsive"></a>
            </div>
            <div class="col-xs-3 col-sm-1 col-md-1 col-lg-1">

              <a href="services/vikup-auto-lamborghini" title="Выкуп автомобилей Lamborghini (Ламборгини)" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/autobrands/logo-lamborghini.jpg" alt="Логотип Lamborghini (Ламборгини)" class="img-responsive"></a>
            </div>
            <div class="col-xs-3 col-sm-1 col-md-1 col-lg-1">

              <a href="services/vikup-auto-lancia" title="Выкуп автомобилей Lancia (Лянча)" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/autobrands/logo-lancia.jpg" alt="Логотип Lancia (Лянча)" class="img-responsive"></a>
            </div>
            <div class="col-xs-3 col-sm-1 col-md-1 col-lg-1">

              <a href="services/vikup-auto-land-rover" title="Выкуп автомобилей Land Rover (Ленд Ровер)" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/autobrands/logo-land-rover.jpg" alt="Логотип Land Rover (Ленд Ровер)" class="img-responsive"></a>
            </div>
            <div class="col-xs-3 col-sm-1 col-md-1 col-lg-1">

              <a href="services/vikup-auto-lexus" title="Выкуп автомобилей Lexus (Лексус)" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/autobrands/logo-lexus.jpg" alt="Логотип Lexus (Лексус)" class="img-responsive"></a>
            </div>
            <div class="col-xs-3 col-sm-1 col-md-1 col-lg-1">

              <a href="services/vikup-auto-lotus" title="Выкуп автомобилей Lotus (Лотус)" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/autobrands/logo-lotus.jpg" alt="Логотип Lotus (Лотус)" class="img-responsive"></a>
            </div>
            <div class="col-xs-3 col-sm-1 col-md-1 col-lg-1">

              <a href="services/vikup-auto-maserati" title="Выкуп автомобилей Maserati (Мазерати)" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/autobrands/logo-maserati.jpg" alt="Логотип Maserati (Мазерати)" class="img-responsive"></a>
            </div>
            <div class="col-xs-3 col-sm-1 col-md-1 col-lg-1">

              <a href="services/vikup-auto-maybach" title="Выкуп автомобилей Maybach (Майбах)" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/autobrands/logo-maybach.jpg" alt="Логотип Maybach (Майбах)" class="img-responsive"></a>
            </div>
            <div class="col-xs-3 col-sm-1 col-md-1 col-lg-1">

              <a href="services/vikup-auto-mazda" title="Выкуп автомобилей Mazda (Мазда)" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/autobrands/logo-mazda.jpg" alt="Логотип Mazda (Мазда)" class="img-responsive"></a>
            </div>
            <div class="col-xs-3 col-sm-1 col-md-1 col-lg-1">

              <a href="services/vikup-auto-mercedes" title="Выкуп автомобилей Mercedes (Мерседес)" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/autobrands/logo-mercedes.jpg" alt="Логотип Mercedes (Мерседес)" class="img-responsive"></a>
            </div>
            <div class="col-xs-3 col-sm-1 col-md-1 col-lg-1">

              <a href="services/vikup-auto-mercury" title="Выкуп автомобилей Mercury (Меркури)" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/autobrands/logo-mercury.jpg" alt="Логотип Mercury (Меркури)" class="img-responsive"></a>
            </div>
            <div class="col-xs-3 col-sm-1 col-md-1 col-lg-1">

              <a href="services/vikup-auto-mini" title="Выкуп автомобилей Mini (Мини)" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/autobrands/logo-mini.jpg" alt="Логотип Mini (Мини)" class="img-responsive"></a>
            </div>
            <div class="col-xs-3 col-sm-1 col-md-1 col-lg-1">

              <a href="services/vikup-auto-mitsubishi" title="Выкуп автомобилей Mitsubishi (Мицубиси)" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/autobrands/logo-mitsubishi.jpg" alt="Логотип Mitsubishi (Мицубиси)" class="img-responsive"></a>
            </div>
            <div class="col-xs-3 col-sm-1 col-md-1 col-lg-1">

              <a href="services/vikup-auto-nissan" title="Выкуп автомобилей Nissan (Ниссан)" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/autobrands/logo-nissan.jpg" alt="Логотип Nissan (Ниссан)" class="img-responsive"></a>
            </div>
            <div class="col-xs-3 col-sm-1 col-md-1 col-lg-1">

              <a href="services/vikup-auto-opel" title="Выкуп автомобилей Opel (Опель)" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/autobrands/logo-opel.jpg" alt="Логотип Opel (Опель)" class="img-responsive"></a>
            </div>
            <div class="col-xs-3 col-sm-1 col-md-1 col-lg-1">

              <a href="services/vikup-auto-pagani" title="Выкуп автомобилей Pagani (Пагани)" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/autobrands/logo-pagani.jpg" alt="Логотип Pagani (Пагани)" class="img-responsive"></a>
            </div>
            <div class="col-xs-3 col-sm-1 col-md-1 col-lg-1">

              <a href="services/vikup-auto-peugeot" title="Выкуп автомобилей Peugeot (Пежо)" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/autobrands/logo-peugeot.jpg" alt="Логотип Peugeot (Пежо)" class="img-responsive"></a>
            </div>
            <div class="col-xs-3 col-sm-1 col-md-1 col-lg-1">

              <a href="services/vikup-auto-pontiac" title="Выкуп автомобилей Pontiac (Понтиак)" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/autobrands/logo-pontiac.jpg" alt="Логотип Pontiac (Понтиак)" class="img-responsive"></a>
            </div>
            <div class="col-xs-3 col-sm-1 col-md-1 col-lg-1">

              <a href="services/vikup-auto-porsche" title="Выкуп автомобилей Porsche (Порше)" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/autobrands/logo-porsche.jpg" alt="Логотип Porsche (Порше)" class="img-responsive"></a>
            </div>
            <div class="col-xs-3 col-sm-1 col-md-1 col-lg-1">

              <a href="services/vikup-auto-renault" title="Выкуп автомобилей Renault (Рено)" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/autobrands/logo-renault.jpg" alt="Логотип Renault (Рено)" class="img-responsive"></a>
            </div>
            <div class="col-xs-3 col-sm-1 col-md-1 col-lg-1">

              <a href="services/vikup-auto-rolls-royce" title="Выкуп автомобилей Rolls-Royce (Роллс-Ройс)" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/autobrands/logo-rolls-royce.jpg" alt="Логотип Rolls-Royce (Роллс-Ройс)" class="img-responsive"></a>
            </div>
            <div class="col-xs-3 col-sm-1 col-md-1 col-lg-1">

              <a href="services/vikup-auto-rover" title="Выкуп автомобилей Rover (Ровер)" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/autobrands/logo-rover.jpg" alt="Логотип Rover (Ровер)" class="img-responsive"></a>
            </div>
            <div class="col-xs-3 col-sm-1 col-md-1 col-lg-1">

              <a href="services/vikup-auto-saab" title="Выкуп автомобилей Saab (Сааб)" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/autobrands/logo-saab.jpg" alt="Логотип Saab (Сааб)" class="img-responsive"></a>
            </div>
            <div class="col-xs-3 col-sm-1 col-md-1 col-lg-1">

              <a href="services/vikup-auto-scion" title="Выкуп автомобилей Scion (Сцион)" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/autobrands/logo-scion.jpg" alt="Логотип Scion (Сцион)" class="img-responsive"></a>
            </div>
            <div class="col-xs-3 col-sm-1 col-md-1 col-lg-1">

              <a href="services/vikup-auto-seat" title="Выкуп автомобилей Seat (Сеат)" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/autobrands/logo-seat.jpg" alt="Логотип Seat (Сеат)" class="img-responsive"></a>
            </div>
            <div class="col-xs-3 col-sm-1 col-md-1 col-lg-1">

              <a href="services/vikup-auto-skoda" title="Выкуп автомобилей Skoda (Шкода)" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/autobrands/logo-skoda.jpg" alt="Логотип Skoda (Шкода)" class="img-responsive"></a>
            </div>
            <div class="col-xs-3 col-sm-1 col-md-1 col-lg-1">

              <a href="services/vikup-auto-ssang-yong" title="Выкуп автомобилей SsangYong (Ссангйонг)" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/autobrands/logo-ssang-yong.jpg" alt="Логотип SsangYong (Ссангйонг)" class="img-responsive"></a>
            </div>
            <div class="col-xs-3 col-sm-1 col-md-1 col-lg-1">

              <a href="services/vikup-auto-subaru" title="Выкуп автомобилей Subaru (Субару)" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/autobrands/logo-subaru.jpg" alt="Логотип Subaru (Субару)" class="img-responsive"></a>
            </div>
            <div class="col-xs-3 col-sm-1 col-md-1 col-lg-1">

              <a href="services/vikup-auto-suzuki" title="Выкуп автомобилей Suzuki (Сузуки)" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/autobrands/logo-suzuki.jpg" alt="Логотип Suzuki (Сузуки)" class="img-responsive"></a>
            </div>
            <div class="col-xs-3 col-sm-1 col-md-1 col-lg-1">

              <a href="services/vikup-auto-toyota" title="Выкуп автомобилей Toyota (Тойота)" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/autobrands/logo-toyota.jpg" alt="Логотип Toyota (Тойота)" class="img-responsive"></a>
            </div>
            <div class="col-xs-3 col-sm-1 col-md-1 col-lg-1">

              <a href="services/vikup-auto-vauxhall" title="Выкуп автомобилей Vauxhall (Воксхолл)" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/autobrands/logo-vauxhall.jpg" alt="Логотип Vauxhall (Воксхолл)" class="img-responsive"></a>
            </div>
            <div class="col-xs-3 col-sm-1 col-md-1 col-lg-1">

              <a href="services/vikup-auto-volkswagen" title="Выкуп автомобилей Volkswagen (Фольксваген)" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/autobrands/logo-volkswagen.jpg" alt="Логотип Volkswagen (Фольксваген)" class="img-responsive"></a>
            </div>
            <div class="col-xs-3 col-sm-1 col-md-1 col-lg-1">

              <a href="services/vikup-auto-volvo" title="Выкуп автомобилей Volvo (Вольво)" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/autobrands/logo-volvo.jpg" alt="Логотип Volvo (Вольво)" class="img-responsive"></a>
            </div>
            <div class="col-xs-3 col-sm-1 col-md-1 col-lg-1">

              <a href="services/vikup-auto-vaz" title="Выкуп автомобилей ВАЗ (ВАЗ)" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/autobrands/logo-vaz.jpg" alt="Логотип ВАЗ (ВАЗ)" class="img-responsive"></a>
            </div>
            <div class="col-xs-3 col-sm-1 col-md-1 col-lg-1">

              <a href="services/vikup-auto-gaz" title="Выкуп автомобилей ГАЗ (ГАЗ)" class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/images/autobrands/logo-gaz.jpg" alt="Логотип ГАЗ (ГАЗ)" class="img-responsive"></a>
            </div>
            <div class="mb20 text-muted small italic text-center">АВТОСКУПЩИК выкупит автомобиль любой модели и марки. Нажми любой понравившийся значок и все узнай.</div>
          </div>

        </div>
      </div>
      <div class="container-fluid mp0">
        <div class="container mb50">
          <div class="row p0">
            <div class="block-differences">

              <!-- Text -->
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 bounceInLeft wow bg-color-dark" data-wow-offset="20" data-wow-duration="0.5s">
                <div class="p30">
                  <h3 class="mt0 mb20 uppercase white bold">
                                        Как «решают проблему» они:
                                    </h3>
                  <div class="white">
                    <div class="mb10">
                      <i class="fa fa-ban pr5"></i> Они занижают стоимость.
                    </div>
                    <div class="mb10">
                      <i class="fa fa-ban pr5"></i> Они «тянут» время.
                    </div>
                    <div class="mb10">
                      <i class="fa fa-ban pr5"></i> Они врут про цены.
                    </div>
                    <div class="mb10">
                      <i class="fa fa-ban pr5"></i> Они «лажают» при оформлении.
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 bounceInRight wow bg-color-red" data-wow-offset="20" data-wow-duration="0.5s">
                <div class="p30">
                  <h3 class="mt0 mb20 uppercase white bold">
                                        Как реально работаем мы:
                                    </h3>
                  <div class="white">
                    <div class="mb10">
                      <i class="fa fa-check-circle pr5"></i> Мы платим много.
                    </div>
                    <div class="mb10">
                      <i class="fa fa-check-circle pr5"></i> Мы делаем быстро.
                    </div>
                    <div class="mb10">
                      <i class="fa fa-check-circle pr5"></i> Мы оценим прямо по телефону.
                    </div>
                    <div class="mb10">
                      <i class="fa fa-check-circle pr5"></i> Мы знаем все о законах.
                    </div>
                  </div>
                </div>
              </div>

            </div>

          </div>
        </div>
      </div>
      <div class="container-fluid mp0">
        <div class="container mb50">
          <div class="row p0">
            <div class="block-no-risk">

              <!-- Title -->
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="mb40">
                  <h2>Деньги без риска</h2>
                  <span class="underline">&nbsp;</span>
                </div>
              </div>
              <!-- /Title -->
              <!-- Block -->
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 bg-color-light">
                <div class="p30 text-center fs-1-2">
                  <div>Тебе уже оценили авто? Выкупавто.ru заплатит реально больше!</div>
                  <div>Ты&nbsp;можешь <a href="onlajn-otsenka-avto" title="Оценка автомобиля онлайн">оценить свой автомобиль онлайн</a>, по&nbsp;телефону, скайпу, электронке, аське, письмом и&nbsp;даже телеграммой...</div>
                </div>
              </div>
              <!-- /Block -->

            </div>

          </div>
        </div>
      </div>
      <div class="container-fluid mp0">
        <div class="container mb50">
          <div class="row">
            <div class="block-seotext">

              <!-- Title -->
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="mb40">
                  <h2>Выкуп кредитных, битых, бу автомобилей с пробегом в Санкт-Петербурге</h2>
                  <span class="underline">&nbsp;</span>
                </div>
              </div>
              <!-- /Title -->
              <!-- Description -->
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="small">
                  <p>Твое авто взято в&nbsp;кредит или под залогом. Ты&nbsp;хочешь избавиться от&nbsp;хлама и&nbsp;купить новую тачку. Тебе срочно нужны деньги, а&nbsp;времени не&nbsp;осталось. Выход&nbsp;&mdash; <a href="skupka-avto">скупка машин в&nbsp;СПб</a>!</p>
                  <p>АВТОСКУПЩИК произведет <a href="vykup-kreditnykh-avtomobilej">выкуп кредитного авто</a> или <a href="obmen-avtomobilej-s-doplatoj">обмен машины на&nbsp;машину</a>. Тут помогут сэкономить деньги, не&nbsp;тратя понапрасну время:</p>
                  <ul>
                    <li>Позвони, и&nbsp;тебе рассчитают стоимость автомобиля с&nbsp;учётом года выпуска,пробега, состояние транспортного средства. Затем отправляйся оформлять <a href="srochnyj-vykup-avtomobilej">срочный автовыкуп автомобиля</a>.</li>
                    <li>Приезжай, и&nbsp;захвати необходимые документы, <a href="vikup-by">выкуп бу&nbsp;авто</a>.</li>
                    <li><a href="onlajn-otsenka-avto">Оцени бесплатно свою машину</a>. Тебе представят отчет эксперта и&nbsp;сделают выгодное предложение.</li>
                    <li>Оформи документы на&nbsp;<a href="prodat-mashinu">выкуп автомобиля</a> и&nbsp;получи деньги.</li>
                    <li>Здесь разберутся со&nbsp;всеми юридическими нюансами, причем бесплатно. Пока ты&nbsp;оформляешь сделку, уже найдут покупателя.</li>
                  </ul>
                  <p>Мы&nbsp;выкупим автомобиль любой модели и&nbsp;марки: <a href="services/vikup-auto-acura">Acura</a>, <a href="services/vikup-auto-bmw">BMW</a>, <a href="services/vikup-auto-hyundai">Hyundai</a>, <a href="services/vikup-auto-kia">Kia</a>,
                    <a href="services/vikup-auto-nissan">Nissan</a>, <a href="services/vikup-auto-opel">Opel</a>, <a href="services/vikup-auto-audi">Audi</a>, <a href="services/vikup-auto-vaz">ВАЗ</a>, <a href="services/vikup-auto-ford">Ford</a>, <a href="services/vikup-auto-gaz">Газ</a>,
                    <a href="services/vikup-auto-porsche">Porsche</a>, <a href="services/vikup-auto-renault">Renault</a>, <a href="services/vikup-auto-toyota">Toyota</a>, <a href="services/vikup-auto-mercedes">Mercedes</a>, <a href="services/vikup-auto-volkswagen">Volkswagen</a>                    и&nbsp;другие. Просто возьми трубку и&nbsp;позвони в&nbsp;АвтоСкупщик!</p>
                </div>
              </div>
              <!-- /Description -->

            </div>
          </div>
        </div>
      </div>


<?php get_footer(); ?>
