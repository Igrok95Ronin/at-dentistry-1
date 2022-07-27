<?php
$site_data      = json_decode(file_get_contents('http://local.jquery.link/api/' . $_SERVER['HTTP_HOST']), true);

$phone_name     = $site_data['phone_name'];
$phone_href     = $site_data['phone_href'];

$text           = str_replace('+', ' ', trim($_GET['t'] ?? 'Clinic Expert Cosmetic Dentistry'));
$city           = str_replace('+', ' ', trim($_GET['n'] ?? ''));

$title = $text . ' ' . $city;
?>

<!DOCTYPE html>
<html lang="at">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <?= $site_data['html'] ?>
    <title>
        <?= $title ?>
    </title>
</head>
<body>
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 container">
                    <div class="header__box">
                        <img class="header__log" src="assets/img/logo-min.png" alt="">
                        <div class="header__inner">
                            <div class="header__left">
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                            <div class="header__right">
                                <span>Call Us!</span>
                                <a class="header__link" href="<?= $phone_href ?>">111222333</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
   <main class="main">
        <section class="clinic">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <div class="clinic__box">
                            <div class="clinic__left">
                                <h1 class="clinic__title"><?= $title ?></h1>
                                <p class="clinic__descr">Turkey's most prosperous and reputable hospitals in cosmetic
                                    dentistry. Providing a wide range of dental procedures; such as, Teeth whitening,
                                    Veneers, smile makeovers, bridge contouring etc …….</p>
                                <a class="btnn" href="<?= $phone_href ?>"><span>Contact Us</span></a>
                            </div>
                            <div class="clinic__right">
                                <h2 class="clinic__form-title">Contact our specialist for immediate free diagnosis</h2>
                                <form id="jq_form1">
                                    <div class="my-3 form-control-one">
                                        <input class="form-control " placeholder="Vorname" name="jq_name" type="text">
                                        <div id="jq_name1"
                                            style="font-weight:700;font-size:15px;color:#fff;padding-top:2px;display:none">
                                            Dies ist ein Pflichtfeld.</div>
                                    </div>
                                    <div class="my-4 form-control-two">
                                        <input class="form-control" placeholder="Telefon" name="jq_phone" type="text">
                                        <div id="jq_phone1"
                                            style="font-weight:700;font-size:15px;color:#fff;padding-top:2px;display:none">
                                            Dies ist ein Pflichtfeld.</div>
                                    </div>
                                    <div class="my-4 form-control-three">
                                        <input class="form-control" placeholder="E-Mail" name="jq_email" type="text">
                                    </div>
                                    <div class="forms__botton-wrapper">
                                        <input class="btn  text-uppercase fw-bold px-3 py-2 forms__button" type="submit"
                                            id="jq_submit" value="Submit">
                                    </div>
                                    <div id="jq_success" style="display:none">Vielen Dank für deine Nachricht. Sie wurde
                                        gesendet.</div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <section class="whatWeDo">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <div class="whatWeDo__box">
                            <h2 class="whatWeDo__title">WHAT WE DO?</h2>
                            <div class="whatWeDo__items">
                                <div class="whatWeDo__item">
                                    <img class="whatWeDo__img" src="assets/img/img01-min.jpg" alt="">
                                    <p class="whatWeDo__name">HOLLYWOOD SMILE</p>
                                    <p class="whatWeDo__descr">Hollywood Smile or Smile Makeover is a cosmetic dentistry
                                        term which includes several cosmetic treatments aimed to achieve the right
                                        shape, color, and teeth size in order to get you the perfect smile.</p>
                                </div>
                                <div class="whatWeDo__item">
                                    <img class="whatWeDo__img" src="assets/img/img02-min.jpg" alt="">
                                    <p class="whatWeDo__name">DENTAL IMPLANTS</p>
                                    <p class="whatWeDo__descr">Dental implants are one of the highly demanded procedures
                                        in Turkey, Therefore, we provide the best doctors with the best technologies and
                                        equipment for you.</p>
                                </div>
                                <div class="whatWeDo__item">
                                    <img class="whatWeDo__img" src="assets/img/img03-min.jpg" alt="">
                                    <p class="whatWeDo__name">PORCELAIN AND LAMINA</p>
                                    <p class="whatWeDo__descr">Dental porcelain laminates, also known as porcelain
                                        laminate veneers, are one of the go-to options for smile reconstruction. They
                                        are attached to the front surface of the teeth to improve their appearance.</p>
                                </div>
                                <div class="whatWeDo__item">
                                    <img class="whatWeDo__img" src="assets/img/img04-min.jpg" alt="">
                                    <p class="whatWeDo__name">ZIRCONIUM CROWNS</p>
                                    <p class="whatWeDo__descr">Zirconium crowns became popular among dental clinics for
                                        their versatility. It is known for its toughness and durability. Zirconium is a
                                        very strong and reliable substance that can withstand our everyday habits.</p>
                                </div>
                            </div>
                            <div class="btn-center">
                                <a class="btnn " href="<?= $phone_href ?>"><span>Contact Us</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="whoWeAre">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <div class="whoWeAre__box">
                            <div class="whoWeAre__left">
                                <h2 class="whoWeAre__title">WHO WE ARE ?</h2>
                                <p class="whoWeAre__descr">ClinicExpert is one of the most prosperous hospitals in
                                    Turkey. Offering Hair Transplant and Aesthetic Operations. Our Goal is to offer
                                    highest quality services with most competitive prices. Thanks to our sure-handed
                                    medical staff, most advanced hospital equipments, and most recent technologies, we
                                    guarantee the best results possible and complete satisfaction for all our patients.
                                </p>
                            </div>
                            <div class="whoWeAre__right">
                                <img class="whoWeAre__img" src="assets/img/who-are-we-min.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="benefits">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <div class="benefits__items">
                            <div class="benefits__item">
                                <div class="benefits__img"></div>
                                <h3 class="benefits__title">Are you a hospital or a medical center?</h3>
                                <p class="benefits__descr">Clinic Expert is one of the best and high-ranked
                                    international hospitals that are certified by the Turkish ministry of health not
                                    only in Turkey,but in Europe as well.</p>
                            </div>
                            <div class="benefits__item">
                                <div class="benefits__img2"></div>
                                <h3 class="benefits__title">Do you have any branches outside Turkey?</h3>
                                <p class="benefits__descr">In order to maintain the quality of our services, and to
                                    abide-by the international standards of the ministry of health, we are only based in
                                    Turkey. Hence, we offer our patients some extra services for free. like the
                                    transportation between the airport, the hospital, the hotel and vice versa, as well
                                    as the accommodation.</p>
                            </div>
                            <div class="benefits__item">
                                <div class="benefits__img3"></div>
                                <h3 class="benefits__title">The Dental implant success rate</h3>
                                <p class="benefits__descr">As we are using the latest equipments and methods in cosmetic
                                    dentistry, and as we have competent and internationally qualified Doctors and
                                    cosmetic surgeons, we assure you a 99 percent success rate, and after the procedure
                                    , we will provide you with a guarantee that is certified by the Turkish Ministry of
                                    Health.</p>
                            </div>
                            <div class="benefits__item">
                                <div class="benefits__img4"></div>
                                <h3 class="benefits__title">The Dental implant survival rate</h3>
                                <p class="benefits__descr">The average age of the implants can reach up to 30 years and
                                    more as long as the patient is cautious about the general hygiene of his/her teeth .
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="plan">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <h2 class="plan__title">Your Medical Trip Plan</h2>
                        <div class="plan__items">
                            <div class="plan__item">
                                <img class="plan__img" src="assets/img/1transportation-min.jpg" alt="">
                                <p class="plan__name">TRANSPORTATION</p>
                                <p class="plan__descr">Welcome! Upon your arrival to Istanbul, Your private driver will
                                    pick you up at the airport, he will be responsible of your transportation between
                                    the airport, hotel and the hospital.</p>
                            </div>
                            <div class="plan__item">
                                <img class="plan__img" src="assets/img/2planning-min.jpg" alt="">
                                <p class="plan__name">PLANNING</p>
                                <p class="plan__descr">Everything is perfectly pre-planned!
                                    Your companion translator will guide you through the everyday details, and will do
                                    all the logistics for you in order to ensure your comfort.</p>
                            </div>
                            <div class="plan__item">
                                <img class="plan__img" src="assets/img/3accommodation-min.jpg" alt="">
                                <p class="plan__name">ACCOMMODATION</p>
                                <p class="plan__descr">Your accommodation is pre-booked!
                                    Your consultant will provide you with a variety of luxurious Hotels to pick from...
                                    And It is FREE !</p>
                            </div>
                            <div class="plan__item">
                                <img class="plan__img" src="assets/img/4consultancy-min.jpg" alt="">
                                <p class="plan__name">AFTERCARE</p>
                                <p class="plan__descr">We are just starting, but never ending!
                                    Our medical team will be in your service for a lifetime, you will have continuous
                                    follow-up and will answer all your questions and requests!</p>
                            </div>
                        </div>
                        <div class="plan__bottom">
                            <p class="plan__name-bottom">ARRANGE YOUR TRAVEL PLAN</p>
                            <p class="plan__descr-bottom">Our Specialist Will Help You</p>
                            <div class="btn-center">
                                <a class="btnn btnn--margin" href="<?= $phone_href ?>"><span>Contact Us</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="beforeAfter">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <div class="beforeAfter__box">
                            <h2 class="beforeAfter__title">BEFORE & AFTER</h2>
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide"><img src="assets/img/01-min.jpg" alt=""></div>
                                    <div class="swiper-slide"><img src="assets/img/02-min.jpg" alt=""></div>
                                    <div class="swiper-slide"><img src="assets/img/03-min.jpg" alt=""></div>
                                    <div class="swiper-slide"><img src="assets/img/04-min.jpg" alt=""></div>
                                    <div class="swiper-slide"><img src="assets/img/05-min.jpg" alt=""></div>
                                    <div class="swiper-slide"><img src="assets/img/06-min.jpg" alt=""></div>
                                    <div class="swiper-slide"><img src="assets/img/07-min.jpg" alt=""></div>
                                </div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="forms">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <div class="forms__box">
                            <h2 class="forms__title">Kontaktieren Sie uns:</h2>
                              <form id="jq_form" class="mt-5">
                                <div class="my-3">
                                    <input class="form-control" placeholder="Vorname" name="jq_name" type="text">
                                    <div id="jq_name" style="font-weight:700;font-size:15px;color:#fff;padding-top:2px;display:none">Dies ist ein Pflichtfeld.</div>
                                </div>
                                <div class="my-4">
                                    <input class="form-control" placeholder="Telefon" name="jq_phone" type="text">
                                    <div id="jq_phone" style="font-weight:700;font-size:15px;color:#fff;padding-top:2px;display:none">Dies ist ein Pflichtfeld.</div>
                                </div>
                                <div class="my-4">
                                    <input class="form-control" placeholder="Straße" name="jq_street" type="text">
                                </div>
                                <div class="my-4">
                                    <input class="form-control" placeholder="PLZ / Ort" name="jq_city" type="text">
                                </div>
                                <div class="my-4">
                                    <input class="form-control" placeholder="E-Mail" name="jq_email" type="text">
                                </div>
                                <div class="my-4">
                                    <textarea rows="3" class="form-control textarea-height" name="jq_text" placeholder="Nachricht"></textarea>
                                    <div id="jq_text" style="font-weight:700;font-size:15px;color:#fff;padding-top:2px;display:none">Dies ist ein Pflichtfeld.</div>
                                </div>
                                <div>
                                    <input class="btn  text-uppercase fw-bold mb-5 px-3 py-2 forms__button" type="submit" id="jq_submit" value="Senden">
                                </div>
                                <div id="jq_success" style="display:none">Vielen Dank für deine Nachricht. Sie wurde
                                    gesendet.</div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 container">
                    © Copyright 2022
                </div>
            </div>
        </div>
    </footer>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.min.css" rel="stylesheet">
    <script src="assets/js/main.min.js"></script>
</body>

</html>