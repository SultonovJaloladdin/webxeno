@extends('layouts.app')

@section('content')
      <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Webtexno sizni yoki biznesingizni rivojlanishiga yordam beradi.</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Bizni jamoa biznes rivoji uchun harakat qiladi.</h2>
          <div data-aos="fade-up" data-aos-delay="800">
            <a href="#about" class="btn-get-started scrollto">Boshlash</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Biz haqimizda</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
            <p class="text-about">
           Webtexno bu - O'zbekistondagi frilanserlik kompaniyasi, bu yerda har bir kompaniya
           yoki tashkilot o'z biznes yoki faoliyatidagi muammolarga yechim  topadi. Ushbu 
           saytda bizni jamoa mijozlarni buyurtmasiga asosan o'z sohalardagi vazifalarni 
           bajaradilar.Bizni jamoa saytdagi vazifalarni  kafolatli va ishonchli tarzda bajaradilar.
           Ya'ni:
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i>Web saytlarni ishlab chiqish.</li>
              <li><i class="ri-check-double-line"></i>IoT bazasida Smart Home,Samrt City loyihalarni ishlab chiqish.</li>
              <li><i class="ri-check-double-line"></i>Korxona va Tashkilotlar uchun Telegram bot ishlab chiqish.</li>
              <li><i class="ri-check-double-line"></i>Digital marketing xizmatlarini taqdim etish.</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <p class="text-about">
              Yuqorida aytib o'tilgan loyihalar sizni qiziqtirsa bizga murojaat qilishingiz mumkin.
              <center><h4>IT(Information Technology) biznes</h4></center>
              Hozirda har bir sohga IT(Information Technology)ni kirib kelishi shu sohani xavsiz va mukammallikka erishtiradi.
              Shuningdek sizni bisnesingizni ham.
            </p>
            <a href="#" class="btn-learn-more">Batafsil</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row">
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-xl-start" data-aos="fade-right" data-aos-delay="150">
            <img src="assets/img/counts-img.svg" alt="" class="img-fluid">
          </div>

          <div class="col-xl-7 d-flex align-items-stretch pt-4 pt-xl-0" data-aos="fade-left" data-aos-delay="300">
            <div class="content d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="icofont-simple-smile"></i>
                    <span data-toggle="counter-up">35</span>
                    <p class="text"><strong>Mizjozlar</strong>. Bizni doimiy mijozlar biz bilan ishlashdan xursand.</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="icofont-document-folder"></i>
                    <span data-toggle="counter-up">65</span>
                    <p class="text"><strong>Loyihalar</strong>. Barcha vazifalarni ishonchli va oz' vaqtida  topshirish.</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="icofont-clock-time"></i>
                    <span data-toggle="counter-up">2</span>
                    <p class="text"><strong>Ko'p yillik tajriba</strong>. Tajribamizga asosan sifatli</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="icofont-award"></i>
                    <span data-toggle="counter-up">0</span>
                    <p class="text"><strong>Mukofotlar</strong>. Xalqaro standart darajaga erishish.</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Xizmatlar</h2>
          <p>Bizni xizmatlarning tavsifi.</p>
        </div>
    </section>
    <!-- ======= More Services Section ======= -->
    <section id="more-services" class="more-services">
      <div class="container">

        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card" style='background-image: url("assets/img/full stack.png");' data-aos="fade-up" data-aos-delay="100">
              <div class="card-body">
                <h5 class="card-title"><a href="">Web development</a></h5>
                <p class="card-text">Bizni jamoa sizni veb saytingizni Frontend va Backend qismini tayyor holatda severga yuklab beradi.
                Qandaydir tushunmovchilik bo'lasa tezda bartaraf etadi.
                <!--Full - stack dasturlash o'z ichiga Frontend va Backend qismlarni qamrab oladi. 
            Frontend qismini HTML CSS JS dasturlash tilaridan foydalanib zamonaviy ko'rinishda verstka qilib beradi.
            Backend qismi esa foydalanuvchiga qulay tarzda Python, PHP, Scala kabi dasturlash tillarida yaratilinadi.!!!--->
                </p>
                <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Batafsil</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="card" style='background-image: url("assets/img/IoT_device.jpg");' data-aos="fade-up" data-aos-delay="200">
              <div class="card-body">
                <h5 class="card-title"><a href="">IoT</a></h5>
                <p class="card-text">IoT- internetdagi narsalar orqali uyingizni, ofisingizni boshqarish va kuzatish imkoniyati.</p>
                <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Barafsil</a></div>
              </div>
            </div>
           
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4">
            <div class="card" style='background-image: url("assets/img/telegram_bot.png");' data-aos="fade-up" data-aos-delay="100">
              <div class="card-body">
                <h5 class="card-title"><a href="">Telegram Bot</a></h5>
                <p class="card-text">Elektron tijorat korxonalari uchun Telegram chat-botlari.
                  Elektron tijorat kompaniyalari birinchi navbatda mijozlarga bitimlar topishda va xaridlarni amalga
                  oshirishda yordam berish uchun Telegram chatbotini yaratishi mumkin.</p>
                <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Batafsil</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4">
            <div class="card" style='background-image: url("assets/img/more-services-3.jpg");' data-aos="fade-up" data-aos-delay="200">
              <div class="card-body">
                <h5 class="card-title"><a href="">Digital Marketing</a></h5>
                <p class="card-text">Digital marketing xizmatlari orqali biznes yuritish.<br>
                  Start up loyihalarni qo'llab quvvatlash va sheriklik asosida yangi biznes boshlash.</p>
                <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Batafsil</a></div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End More Services Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Jamoa</h2>
          <p>Bizni jamoa o'z ishining mutahasislaridan tashkil topgan.</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-telegram"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-whatsapp"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-telegram"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-whatsapp"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-telegram"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-whatsapp"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="400">
              <div class="member-img">
                <img src="assets/img/team/shox.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-telegram"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-whatsapp"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Shoxrux Xudoynazarov</h4>
                <span>Kompaniya direktori</span>
                <span>Web dasturchi</span>
                <span>O'qituvchi</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title">
          <h2>Ta'lim</h2>
          <p>Webtexno coworking centerda tajribali va kuchli dasturchilarni tayyorlash.</p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="box" data-aos="zoom-in-right" data-aos-delay="200">
              <h3>Web development</h3>
              <h4><sup>$</sup>55<span> / oyiga</span></h4>
              <ul>
                <li>Python</li>
                <li>Dajango</li>
                <li>HTML CSS JS</li>
                <li class="na">React.js</li>
                <li class="na">jQuery</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Boshlash</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
            <div class="box recommended" data-aos="zoom-in" data-aos-delay="100">
              <h3>IoT</h3>
              <h4><sup>$</sup>55<span> / oyiga</span></h4>
              <ul>
                <li>Arduino vs ESP</li>
                <li>Elektronika</li>
                <li>C++</li>
                <li>HTML vs CSS</li>
                <li class="na">Python</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Boshlash</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in-left" data-aos-delay="200">
              <h3>Telegram bot</h3>
              <h4><sup>$</sup>55<span> / oyiga</span></h4>
              <ul>
                <li>Python</li>
                <li>PHP</li>
                <li>Scala</li>
                <li>Arduino vs ESP</li>
                <li class="na">C#</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Boshlash</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>TEZ-TEZ SO'RALADIGAN SAVOLLAR</h2>
        </div>

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-5">
            <i class="ri-question-line"></i>
            <h4>Sizlarni xizmarlardan qanday foydalanaman?</h4>
          </div>
          <div class="col-lg-7">
            <p>
              Bizlarni xizmatlardan foydalanish uchun saytdagi <strong>Boshlash</strong> tugmachasini bosing yoki webtexno_bot telegram botga yozing.
              Operatorlarimiz 3 soat ichida aloqaga chiqadi.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-5">
            <i class="ri-question-line"></i>
            <h4>Narxlarda chegirmalar bo'ladimi?</h4>
          </div>
          <div class="col-lg-7">
            <p>
              Chegirmalarni qo'lga kiritish uchun bizni saytni muntazam kuzatib boring.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
          <div class="col-lg-5">
            <i class="ri-question-line"></i>
            <h4>Smart home tizimidagi muammolar?</h4>
          </div>
          <div class="col-lg-7">
            <p>
              Bizni texnik yordam markazimizga murojaat qiling.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
          <div class="col-lg-5">
            <i class="ri-question-line"></i>
            <h4>Manzilingiz qayerda</h4>
          </div>
          <div class="col-lg-7">
            <p> 
              Manzil: Xorazm viloyati Shovot tumani xxxxxx ko`cha 14-uy.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="500">
          <div class="col-lg-5">
            <i class="ri-question-line"></i>
            <h4>Kompaniyada bo'sh ish o'rinlari mavjudmi?</h4>
          </div>
          <div class="col-lg-7">
            <p>
              Xodimlarni o'zimiz izlab topamiz, yoki saytda e'lon qilamiz.Buning uchun saytni muntazam kuzatib boring.
              Agarda mizojlar buyurtmasiga ulgura olmasak saytimizda e'lonlar sahifasidan topishingiz mumkin.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

      </div>
    </section><!-- End F.A.Q Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Kontakt</h2>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="contact-about">
              <h3>Webtexno</h3>
              <p>Biz bilan bog'lanishingiz uchun manzil, elektron pochta va telefon raqamlarimiz.<br>Bizga murojaat qilganingizdan mamnunmiz! </p>
              <div class="social-links">
                <a href="#" class="telegram"><i class="icofont-telegram"></i></a>
                <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
                <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
                <a href="#" class="youtube"><i class="icofont-youtube" style="size: 3rem"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
            <div class="info">
              <div>
                <i class="ri-map-pin-line"></i>
                <p>Uzbekistan<br>Xorazm vil Shovot tumani</p>
              </div>

              <div>
                <i class="ri-mail-send-line"></i>
                <p>webtexnogroup@gmail.com</p>
              </div>

              <div>
                <i class="ri-phone-line"></i>
                <p>+998 99 964 96 95</p>
              </div>

            </div>
          </div>

          <div class="col-lg-5 col-md-12" data-aos="fade-up" data-aos-delay="300">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Ismingiz" data-rule="minlen:4" data-msg="Iltimos, kamida 4 ta belgini kiriting" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Elektron pochtangiz" data-rule="email" data-msg="Iltimos, yaroqli elektron pochtani kiriting" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Mavzu" data-rule="minlen:4" data-msg="Iltimos, kamida 8 ta belgi kiriting" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" placeholder="Xabar" data-msg="Iltimos, biz uchun biror narsa yozing"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Yuklamoq</div>
                <div class="error-message"></div>
                <div class="sent-message">Sizning xabaringiz yuborildi. Rahmat!</div>
              </div>
              <div class="text-center"><button type="submit">Xabar yuborish</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
@endsection