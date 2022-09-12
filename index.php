<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	<?php wp_head();?>

    <title>!NEW2020</title>
</head>

<body>

<header class="header ">
        <div class="container-fluid">
            <div class="header__body">
                <a href="#" class="header__logo">
                    LOGO
                </a>
                <div class="header__burger">
                    <span></span>
                </div>
                <nav class="header__menu">
                    <ul class="header__list">
                        <li>
                            <a href="#" class="header__link">Главная</a>
                            <div><img src="<?= get_template_directory_uri(). '/assets/img/site/stars.svg';?>" alt=""></div>
                        </li>
                        <li>
                            <a href="#" class="header__link">Новости</a>
                            <div><img src="<?= get_template_directory_uri(). '/assets/img/site/stars.svg';?>" alt=""></div>
                        </li>
                        <li>
                            <a href="#" class="header__link">Статьи</a>
                            <div><img src="<?= get_template_directory_uri(). '/assets/img/site/stars.svg';?>" alt=""></div>
                        </li>
                        <li>
                            <a href="#" class="header__link">Полезное</a>
                            <div><img src="<?= get_template_directory_uri(). '/assets/img/site/stars.svg';?>" alt=""></div>
                        </li>
                        <li>
                            <a href="#" class="header__link">О нас</a>
                            <div><img src="<?= get_template_directory_uri(). '/assets/img/site/stars.svg';?>" alt=""></div>
                        </li>
                        <li>
                            <a href="#" class="header__link">Контакты</a>
                            <div><img src="<?= get_template_directory_uri(). '/assets/img/site/stars.svg';?>" alt=""></div>
                        </li>
                    </ul>
                </nav> 
            </div>
        </div>
    </header>

    <div class="p-slider">
        
        <ul id="scene">
            <li class="layer layer_1" data-depth="0.15"><img onclick="alert(' Щелчок мыши!')" src="<?= get_template_directory_uri(). '/assets/img/site/SVG/1.svg';?>" alt=""></li>
            <li class="layer layer_2" data-depth="0.20"><img src="<?= get_template_directory_uri(). '/assets/img/site/SVG/2.svg';?>" alt=""></li>
            <li class="layer layer_3" data-depth="0.25"><img src="<?= get_template_directory_uri(). '/assets/img/site/SVG/3.svg';?>" alt=""></li>
            <li class="layer layer_4" data-depth="0.30"><img src="<?= get_template_directory_uri(). '/assets/img/site/SVG/4.svg';?>" alt=""></li>
            <li class="layer layer_5" data-depth="0.35"><img src="<?= get_template_directory_uri(). '/assets/img/site/SVG/5.svg';?>" alt=""></li>
            <li class="layer layer_6" data-depth="0.40"><img src="<?= get_template_directory_uri(). '/assets/img/site/SVG/6.svg';?>" alt=""></li>
            <li class="layer layer_7" data-depth="0.45"><img src="<?= get_template_directory_uri(). '/assets/img/site/SVG/7.svg';?>" alt=""></li>
            <li class="layer layer_8" data-depth="0.50"><img src="<?= get_template_directory_uri(). '/assets/img/site/SVG/8.svg';?>" alt=""></li>
            <li class="layer layer_9" data-depth="0.10"><h2 class="fs-2 text-white text-center">Муниципальное <br>автономное общеобразовательное учреждение<br> г. Хабаровска</h2></li>
            <li class="layer layer_10" data-depth="0.10"><h1 class="fs-1 text-white text-center">"Лицей "Звёздный"</h1></li>
            
        </ul>
    </div>
    
    
    

    <!--col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 col-xxl-3 p-1 d-flex justify-content-center-->

    <div class="main-container main-content">
        <div class="row">
            <!-- НАЧАЛО КОЛОНКА 1-->
            <div class="col-xl-3 col-lg-3 col-md-3 p-1">
                <!-- НАЧАЛО СВЕДЕНИЯ ОБ ОРГАНИЦАЦИИ -->
                <div id="about" class="block mb-3 stars">
                    <p class="h5 text-center">Сведения об организации</p>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link text-secondary active" href="#">Основные сведения об МАОУ лицея
                                “Звёздный”</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="#">Структура и органы управления</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="#">Документы</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="#">Образование</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="#">Образовательные стандарты</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="#">Руководство и педагогический состав</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="#">Материально-техническое обеспечение</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="#">Платные образовательные услуги</a>
                        </li>
                    </ul>
                </div>
                <!-- КОНЕЦ СВЕДЕНИЯ ОБ ОРГАНИЦАЦИИ -->
                <!-- НАЧАЛО БЛОКА РОДИТЕЛЯМ -->
                <div id="parents" class="block mb-3 stars">
                    <p class="h5 text-center">Родителям</p>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="#">Запись в первый класс</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="#">Подготовка к школе</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="#">Школьная форма</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="#">Помощь родителям</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="#">Питание</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="#">Платные услуги</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="#">Условия приема учащихся</a>
                        </li>
                    </ul>
                </div>
                <!-- КОНЕЦ БЛОКА РОДИТЕЛЯМ -->
                <!-- НАЧАЛО УЧЕНИКАМ -->
                <div id="students" class="block mb-3 stars">
                    <p class="h5 text-center">Ученикам</p>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link text-secondary active" href="#">Расписание звонков</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="#">Правила для учащихся</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="#">Библиотека</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="#">Профориентация</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="#">Соц. Поддержка</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="#">Дорожная безопасность</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="#">Медицинский кабинет</a>
                        </li>
                    </ul>
                </div>
                <!-- КОНЕЦ БЛОКА УЧЕНИКАМ -->
            </div>
            <!-- КОНЕЦ КОЛОНКА 1-->

            <!-- НАЧАЛО КОЛОНКА 2-->
            <div class="col-xl-6 col-lg-6 col-md-6 p-1">
                <!-- НАЧАЛО БЛОКА СЛАЙДЕР НОВОСТИ -->
                <!-- <div id="sliderNews" class="block block-news mb-3 p-0">

                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
                            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
                            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100"
                                    src="https://i.pinimg.com/originals/c3/5d/f3/c35df3a6a3b629a7170837d73ed41b93.jpg"
                                    alt="Первый слайд">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3>Заголовок 1</h3>
                                    <p>Надпись 1</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100"
                                    src="https://i.pinimg.com/originals/c3/5d/f3/c35df3a6a3b629a7170837d73ed41b93.jpg"
                                    alt="Первый слайд">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3>Заголовок 2</h3>
                                    <p>Надпись 1</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100"
                                    src="https://i.pinimg.com/originals/c3/5d/f3/c35df3a6a3b629a7170837d73ed41b93.jpg"
                                    alt="Первый слайд">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3>Заголовок 3</h3>
                                    <p>Надпись 1</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>
                </div> -->
                <!-- КОНЕЦ БЛОКА СЛАЙДЕР НОВОСТИ -->

                <!-- НАЧАЛО БЛОКА ДРУГИЕ НОВОСТИ -->
                <div class="row row-cols-1 row-cols-xl-2 g-2 mb-3">
                    <div class="col">
                        <div class="card" >
                            <div class="row g-0">
                                <div class="col-md-4 d-flex align-items-center p-1">
                                <img src="https://i.pinimg.com/originals/c3/5d/f3/c35df3a6a3b629a7170837d73ed41b93.jpg" alt="..." class="img-fluid rounded h-100 d-inline-block">
                                </div>
                                <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Заголовок новости очень большой</h5>
                                    <div class="d-flex justify-content-between">
                                    <a href="#" class="btn btn-outline-secondary btn-sm">Читать</a>
                                    <p class="card-text"><small class="text-muted">30.01.2011</small></p>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" >
                            <div class="row g-0">
                                <div class="col-md-4 d-flex align-items-center p-1">
                                    <img src="https://i.pinimg.com/originals/c3/5d/f3/c35df3a6a3b629a7170837d73ed41b93.jpg" alt="..." class="img-fluid rounded h-100 d-inline-block">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Заголовок новости очень большой</h5>
                                        <div class="d-flex justify-content-between">
                                            <a href="#" class="btn btn-outline-secondary btn-sm">Читать</a>
                                            <p class="card-text"><small class="text-muted">30.01.2011</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" >
                            <div class="row g-0">
                                <div class="col-md-4 d-flex align-items-center p-1">
                                <img src="https://i.pinimg.com/originals/c3/5d/f3/c35df3a6a3b629a7170837d73ed41b93.jpg" alt="..." class="img-fluid rounded h-100 d-inline-block">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Заголовок новости очень большой</h5>
                                        <div class="d-flex justify-content-between">
                                            <a href="#" class="btn btn-outline-secondary btn-sm">Читать</a>
                                            <p class="card-text"><small class="text-muted">30.01.2011</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" >
                            <div class="row g-0">
                                <div class="col-md-4 d-flex align-items-center p-1">
                                <img src="https://i.pinimg.com/originals/c3/5d/f3/c35df3a6a3b629a7170837d73ed41b93.jpg" alt="..." class="img-fluid rounded h-100 d-inline-block">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Заголовок новости очень большой</h5>
                                        <div class="d-flex justify-content-between">
                                            <a href="#" class="btn btn-outline-secondary btn-sm">Читать</a>
                                            <p class="card-text"><small class="text-muted">30.01.2011</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- КОНЕЦ БЛОКА ДРУГИЕ НОВОСТИ -->

                <!-- НАЧАЛО БЛОКА О ЛИЦЕЕ -->
                <div class="block mb-3 p-0">
                    <!--<p class="h3 text-center">О Лицее</p>-->
                    <!-- <div class="embed-responsive embed-responsive-16by9 mb-3">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/zoiO21920G0" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div> -->
                    <div class="content p-3">
                        <div class="row justify-content-end">
                            <p class="col-6 text-right font-italic font-weight-light">
                                Кто пренебрегает учёбой в юности,
                                теряет прошлое и становится
                                безликим в будущем
                                Еврипид, древнегреческий драматург
                            </p>
                        </div>
                        <div class="row justify-content-end p-3">
                            <p class="text-justify">
                                Дорогие, друзья! История Лицея «Звёздный» открывает новую страницу учебного года. И нам
                                уже
                                есть
                                чем гордиться: в 2018-2019 учебном году наши лицеисты приняли участие в городских
                                фестивалях
                                «Битва хоров» и «Хабаровск. НАШ», показали хорошие результаты на муниципальном этапе
                                Всероссийской олимпиады школьников, чемпионате профессионального мастерства «JuiorSkills
                                –
                                Хабаровск 2019» в компетенции «Сетевое и системное администрирование». Наши ученики –
                                победители
                                проекта «Если хочешь быть здоров…» муниципального гранта по продвижению технологий
                                здорового
                                образа жизни. Спортсмены «Звёздного» – активные участники и победители районных и
                                городских
                                соревнований. Мы гордимся своей звёздной футбольной командой!

                                Среди выпускников 9-х классов – 12 лицеистов, получивших аттестаты об окончании
                                основного
                                общего
                                образования с отличием!

                                Вместе с родителями мы совершили увлекательное путешествие на космодром «Восточный»!

                                Знаменательным событием в жизни Лицея стало посещение министром просвещения Российской
                                Федерации
                                О.Ю. Васильевой «Звёздного». За прошедший учебный год мы подружились с ребятами из г.
                                Санья,
                                Суньшань Китайской народной республики.

                                Впереди много планов… много идей и одна большая цель: «ТОЛЬКО ВПЕРЁД К НОВЫМ
                                СВЕРШЕНИЯМ»!!!!

                                От имени педагогического коллектива желаю всем успехов в учёбе, творчества и новых
                                открытий!
                            </p>
                        </div>
                        <div class="row justify-content-end">
                            <p class="col-6 text-right font-italic font-weight-light">
                                С уважением,
                                директор МАОУ Лицей «Звёздный», кандидат педагогических наук,
                                Почетный работник общего образования Российской Федерации
                                Анна Анатольевна Смирнова
                            </p>
                        </div>
                    </div>


                </div>
                <!-- КОНЕЦ БЛОКА О ЛИЦЕЕ -->
            </div>
            <!-- КОНЕЦ КОЛОНКА 2-->

            <!-- НАЧАЛО КОЛОНКА 3-->
            <div class="col-xl-3 col-lg-3 col-md-3 p-1">
                <!-- НАЧАЛО БЛОКА ПОИСКА -->
                <div id="search" class="block-search input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Поиск</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Default"
                        aria-describedby="inputGroup-sizing-default" placeholder="Что вы хотите найти?">
                </div>
                <!-- КОНЕЦ БЛОКА ПОИСКА -->

                <!-- НАЧАЛО БЛОКА ОЛИМПИАДЫ И КОНКУРСЫ -->
                <div id="olimp" class="block mb-3 stars">
                    <p class="h5 text-center">Олимпиады конкурсы</p>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link text-secondary active" href="#">ЕГЭ / ГИА</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="#">Всероссийская олимпиада школьников</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="#">Акция “Пятерки любимому городу”</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="#">Новогодняя открытка</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="#">Цифровой художник</a>
                        </li>
                    </ul>
                </div>
                <!-- КОНЕЦ БЛОКА ОЛИМПИАДЫ И КОНКУРСЫ -->

                <!-- НАЧАЛО БЛОКА ШКОЛЬНАЯ ЖИЗНЬ -->
                <div id="schoolLive" class="block mb-3 stars">
                    <p class="h5 text-center">Школьная жизнь</p>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link text-secondary active" href="#">Начальная школа</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="#">Основная и старшая школа</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="#">Дополнительное образование</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="#">ПФДО</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="#">Питание в ОУ</a>
                        </li>

                    </ul>
                </div>
                <!-- КОНЕЦ БЛОКА ШКОЛЬНАЯ ЖИЗНЬ -->

                <!-- НАЧАЛО БЛОКА МЕТОДИЧЕСКАЯ РАБОТА -->
                <div id="metodJob" class="block mb-3 stars">
                    <p class="h5 text-center">Методическая работа</p>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link text-secondary active" href="#">Инновационная деятельность</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="#">Web-страницы учителей</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="#">Семинары, проводимые в лицее</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="#">Информационная безопасность</a>
                        </li>

                    </ul>
                </div>
                <!-- КОНЕЦ БЛОКА МЕТОДИЧЕСКАЯ РАБОТА -->

                
                <!-- КОНЕЦ БЛОКА МЕТОДИЧЕСКАЯ РАБОТА -->
            </div>
            <!-- КОНЕЦ КОЛОНКА 3-->
        </div>
    </div>

    <script type="text/javascript">
        window.addEventListener("scroll", function(){
            var header = document.querySelector("header");
            header.classList.toggle("bg-scroll", window.scrollY > 100)
        })
    </script>
<!--     
    <script type="text/javascript">
        window.addEventListener("scroll", function(){
            var header = document.querySelector("nav");
            header.classList.toggle("bg-light", window.scrollY > 100)
        })
    </script> -->
    


    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script> -->
    

    
<?php wp_footer();?>

<script type="text/javascript">
         var scene = document.getElementById('scene');
        var parallaxInstance = new Parallax(scene); 
    </script>

    <script>
        document.querySelector('.header__burger').addEventListener('click', _=> {
            document.querySelector('.header__burger').classList.toggle('active');
            document.querySelector('.header__menu').classList.toggle('active');
            document.querySelector('body').classList.toggle("lock");
        })
    </script>

</body>

</html>