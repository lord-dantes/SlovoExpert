<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Slovo.Expert</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- MC with class is //masterclass// -->
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
            <form action="POST">
                <input type="text" name="name" placeholder="Ваше имя">
                <input type="text" name="phone" placeholder="+380506013432">
                <input type="email" name="email" placeholder="Ваш E-mail">
                <input type="submit" value="Зарегистрироваться">
            </form>
            <div id="resultRegForm"></div>
        </div>
    </section>
    <!-- regForm -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        var name = $('.regMC__wrapper form input[name="name"]');
        var email = $('.regMC__wrapper form input[name="email"]');
        var phone = $('.regMC__wrapper form input[name="phone"]');
        var button = $('.regMC__wrapper form input[type="submit"]');
        button.click(function() {
            var user_name = name.val();
            var user_email = email.val();
            var user_email_valid = user_email.indexOf('@');
            var user_phone = phone.val();

            if (user_name == "") {
                $("#resultRegForm").addClass('error');
                $("#resultRegForm").html("Введите имя, пожалуйста");
            } else if (user_email_valid == -1) {
                $("#resultRegForm").addClass('error');
                $("#resultRegForm").html("Введите почту, пожалуйста");
            } else if (user_phone == "") {
                $("#resultRegForm").addClass('error');
                $("#resultRegForm").html("Введите номер телефона, пожалуйста");
            } else if (grecaptcha.getResponse() == "") {
                $("#resultRegForm").addClass('error');
                $("#resultRegForm").html("Пройдите капчу, пожалуйста");
            } else if (user_name != "" && user_email != "" && user_phone != "") {
                $.ajax({
                    url: "<?php bloginfo('template_url') ?>/send.php",
                    type: "post",
                    data: {
                        "name": user_name,
                        "email": user_email,
                        "phone": user_phone,
                    },
                    error: function() {
                        $('#resultRegForm').removeClass('beforesend');
                        $("#resultRegForm").addClass('error');
                        $("#resultRegForm").html("Произошла ошибка!");
                    },
                    success: function(result) {
                        window.location.href = "#";
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