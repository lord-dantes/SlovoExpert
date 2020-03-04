<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Slovo.Expert</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- MC with class is //masterclass// -->
    <section class="mc__wrapper">
        <div class="container">
            <div class="mc__box">
                <div class="mc__box__leftside">
                    <img class="mc__box__logo" src="img/logo.svg" alt="">
                    <h1>Запустите машину <br> онлайн-продаж</h1>
                    <p class="mc__box__description">Как за 9 простых шагов начать получать от 50 клиентов в день из интернет в любую нишу</p>
                    <a class="mc__box__link" href="javascript:void(0);">Зарегистрироваться<img src="img/linkCursorIcon.svg" alt=""></a>
                    <div class="mc__box__timer">
                        <p class="mc__box__timer-title">Регистрируйся в течении</p>
                        <span class="mc__box__timer--seconds">127</span>
                        <p class="mc__box__timer-seconds">секунд</p>
                    </div>
                    <p class="mc__box__timer-gift">И получите в подарок</p>
                </div>
                <div class="mc__box_rightside"></div>
            </div>
        </div>
    </section>
    <section class="aboutMC__wrapper">
        <div class="container">
            <div class="aboutMC__box">
                <div class="aboutMC__box__leftside">
                    <h2>О чём будем говорить на мастер-классе</h2>
                    <ul>
                        <li>Как начать свой бизнес в интернете</li>
                        <li>Почему <b>90%</b> бизнесов <b>умрут</b>, если не начнут продавать онлайн</li>
                        <li>Как за <b>9 простых шагов</b> создать машину по привлечению покупателей</li>
                        <li>Пошаговый план как создать креатив, <br> который будет как крючок <b>ловить клиентов</b></li>
                        <li>Разрушим мифы, которые мешают вам зарабатывать <b>неприлично много</b> в онлайне</li>
                    </ul>
                </div>
                <div class="aboutMC__box__rightside">
                    <img src="img/aboutDescriptionImage.svg" alt="">
                </div>
            </div>
            <a class="mcLink" href="javascript:void(0);">Зарегистрироваться<img src="img/linkCursorIcon.svg" alt=""></a>
        </div>
    </section>
    <section class="finalMC__wrapper">
        <div class="container">
            <h2>Какой Результат после мастер-класса:</h2>
            <div class="finalMC__features">
                <div class="finalMC__features__item">
                    <img src="img/finalFeaturesItemImg1.svg" alt="">
                    <p>Поймете</p>
                    <p>Как запустить любой бизнес в интернете следуя 9-ми простым шагам</p>
                </div>
                <div class="finalMC__features__item">
                    <img src="img/finalFeaturesItemImg2.svg" alt="">
                    <p>Увидите</p>
                    <p>Как построить свою собственную машину онлайн-продаж</p>
                </div>
                <div class="finalMC__features__item">
                    <img src="img/finalFeaturesItemImg3.svg" alt="">
                    <p>Получите готовые инструменты</p>
                    <p>Ведь начать продавать в интернете просто, легко, интересно</p>
                </div>
            </div>
            <a class="mcLink" href="javascript:void(0);">Зарегистрироваться<img src="img/linkCursorIcon.svg" alt=""></a>
        </div>
    </section>
    <section class="ownerMC__wrapper">
        <div class="container">
            <h2>Кто проводит мастер-класс</h2>
            <div class="ownerMC__box">
                <div class="ownerMC__box__leftside">
                    <img src="img/owner.svg" alt="">
                </div>
                <div class="ownerMC__box__rightside">
                    <h3>Владимир Курченко</h3>
                    <ul>
                        <li>Маркетолог, занимаюсь рекламой с 2014 года</li>
                        <li>Соавтор и преподаватель курсов Buy & Sell, Offer Leaks, Tommy Univer, Zaichenko Team, гостевой лектор Киево-Могилянской академии</li>
                        <li>Работал как маркетолог более чем с 30-ю разными нишами</li>
                        <li>Совокупно на проекты генерируем 3000 лидов/месяц</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="regMC__wrapper">
        <div class="container">
            <h2>Зарегистрируйтесь</h2>
            <form action="" method="POST">
                <input class="regMC__name" type="text" name="name" placeholder="Ваше имя">
                <input class="regMC__phone" type="text" name="phone" placeholder="Ваш номер телефона">
                <input class="regMC__email" type="email" name="email" placeholder="Ваш E-mail">
                <input class="regMC__btn" type="button" value="Зарегистрироваться">
            </form>
            <div class="resultRegForm"></div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        var haveSec = jQuery('.mc__box__timer--seconds').html();
        var newSec = haveSec - 1;
        let timerId = setInterval(() => , 1000);
        setTimeout(() => { clearInterval(timerId); alert('stop'); }, 10000);
    </script>
    <!-- regForm -->
    <script src="libs/jQueryInputMask/jquery.inputmask.js"></script>    
    <script>
        jQuery('.regMC__phone').inputmask("+38 (999) 99 99 999");
        var button = jQuery('.regMC__btn');
        button.click(function() {
            var name = jQuery('.regMC__name');
            var email = jQuery('.regMC__email');
            var phone = jQuery('.regMC__phone');
            // 
            var user_name = name.val();
            var user_email = email.val();
            var user_email_valid = user_email.indexOf('@');
            var user_phone = phone.val();
            // 
            if (user_name == "") {
                jQuery(".resultRegForm").addClass('resultRegForm__error');
                jQuery(".resultRegForm").html("Введите имя, пожалуйста");
            } else if (user_phone == "") {
                jQuery(".resultRegForm").addClass('resultRegForm__error');
                jQuery(".resultRegForm").html("Введите номер телефона, пожалуйста");
            } else if (user_email_valid == -1) {
                jQuery(".resultRegForm").addClass('resultRegForm__error');
                jQuery(".resultRegForm").html("Введите почту, пожалуйста");
            } else if (user_name != "" && user_email != "" && user_phone != "") {
                $.ajax({
                    url: "regForm.php",
                    type: "post",
                    data: {
                        "name": user_name,
                        "email": user_email,
                        "phone": user_phone,
                    },
                    error: function() {
                        jQuery('.resultRegForm').removeClass('beforesend');
                        jQuery(".resultRegForm").addClass('resultRegForm__error');
                        jQuery(".resultRegForm").html("Произошла ошибка!");
                    },
                    success: function(result) {
                        window.location.href = "https://bm.slovo.expert";
                    }
                });
            }
        });
    </script>
    <!-- regForm end -->
    <!-- preloader -->
    <style type="text/css">
        #hellopreloader>p {
            display: none;
        }
        
        #hellopreloader_preload {
            display: block;
            position: fixed;
            z-index: 99999;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            min-width: 1000px;
            background: #fff26e url(img/preloader.svg) center center no-repeat;
            background-size: 73px;
        }
    </style>
    <div id="hellopreloader">
        <div id="hellopreloader_preload"></div>
    </div>
    <script type="text/javascript">
        var hellopreloader = document.getElementById("hellopreloader_preload");

        function fadeOutnojquery(el) {
            el.style.opacity = 1;
            var interhellopreloader = setInterval(function() {
                el.style.opacity = el.style.opacity - 0.05;
                if (el.style.opacity <= 0.05) {
                    clearInterval(interhellopreloader);
                    hellopreloader.style.display = "none";
                }
            }, 16);
        }
        window.onload = function() {
            setTimeout(function() {
                fadeOutnojquery(hellopreloader);
            }, 300);
        };
    </script>
    <!-- preloader end -->
</body>

</html>