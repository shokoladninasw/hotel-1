<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Отзывник на Отели</title>
</head>
<body>
    <div class="body">
<header>
    <nav>
        <ul>
            <li><a href="/"><img src="{{ asset('img/logo.svg') }}" alt="Logo"></a></li>
                <div class='btn_profile'>
            <li><img src="{{ asset('img/prfoile.svg') }}" alt="Profile"></li>
        @if(auth()->check())
            <li>{{ auth()->user()->name }}</li>
            <li>{{ auth()->user()->surname }}</li>
        <form class="form_logout" action="{{ url('/logout') }}" method="POST">
            @csrf
            <button class="btn_logout" type="submit">Выйти</button>
        </form>
        @else
            <li><a href="{{ route('register') }}">Регистрация</a></li>
            <li>/</li>
            <li><a href="{{ route('login') }}">Вход</a></li>
        @endif
                </div>
        </ul>
    </nav>
</header>


    <section class='main'>
    <h1>Поиск лучших отелей</h1>
    <h2>От роскошных отелей до темных берлог</h2>
    <form class="form_search" action="search" method='GET'>
        <input type="text" name="search" placeholder="Введите название отеля" value="{{ request()->input('search') }}" id="search">
        <input type="submit" value="Найти" id="btn_search">
    </form>
</section>
<main>
<h3>Отзывы по самым популярным направлениям</h3>
<section class='contents'>
    <div id="bigImg" class="image-container">
        <a href="{{ route('hotels', ['city' => 'Москва']) }}">
            <img src="{{ asset('img/img_moscow.jpg') }}" alt='Москва'>
            <div class="hover-text">Москва от 220 руб.</div>
        </a>    
    </div>
    <div class='content-1'>
        <div class="image-container">
            <a href="{{ route('hotels', ['city' => 'Санкт-Петербург']) }}">
                <img src="{{ asset('img/img_saintp.jpg') }}" alt='Санкт-Петербург'>
                <div class="hover-text">Санкт-Петербург от 100 руб.</div>
            </a>
        </div>
        <div class="image-container">
            <a href="{{ route('hotels', ['city' => 'Казань']) }}">
                <img src="{{ asset('img/img_kazan.jpg') }}" alt='Казань'>
                <div class="hover-text">Казань от 200 руб.</div>
            </a>
        </div>
        <div class="image-container">
            <a href="{{ route('hotels', ['city' => 'Адлер']) }}">
                <img src="{{ asset('img/img_adler.jpg') }}" alt='Адлер'>
                <div class="hover-text">Адлер от 210 руб.</div>
            </a>
        </div>
        <div class="image-container">
            <a href="{{ route('hotels', ['city' => 'Сочи']) }}">
                <img src="{{ asset('img/img_sochi.jpg') }}" alt='Сочи'>
                <div class="hover-text">Сочи от 300 руб.</div>
            </a>
        </div>
    </div>
</section>


 <h3>Самые свежие отзывы об отелях России</h3>

 <section class='fresh_reviews'>
    <div class="up_reviews">
            <img src="{{ asset('img/img_hotel_rus.jpg') }}" alt='Отель Русь'>
  

      <div class="name-text">
        <h4>Отель Русь</h4>
       Санкт-Петербург, ул. Артиллерийская, д. 1Р  
    </div> 
       
    <div class="name-text">
        <p>  8.9/10   </p>
      <span>     2834 отзыва </span>
    </div>
     
</div>

        <div class="down_reviews">
        
            <div class="ratings-container">
                <div class="rating">
                  <span>Расположение</span>
                  <div class="bar"><div style="width: 89%;"></div></div>
                  <span>8.9</span>
                </div>
                <div class="rating">
                  <span>Обслуживание</span>
                  <div class="bar"><div style="width: 79%;"></div></div>
                  <span>7.9</span>
                </div>
                <div class="rating">
                  <span>Цена/качество</span>
                  <div class="bar"><div style="width: 81%;"></div></div>
                  <span>8.1</span>
                </div>
                <div class="rating">
                  <span>Чистота</span>
                  <div class="bar"><div style="width: 81%;"></div></div>
                  <span>8.1</span>
                </div>
                <div class="rating">
                  <span>Питание</span>
                  <div class="bar"><div style="width: 70%; background-color: orange;"></div></div>
                  <span>7</span>
                </div>
                <div class="rating">
                  <span>Качество сна</span>
                  <div class="bar"><div style="width: 81%;"></div></div>
                  <span>8.1</span>
                </div>
              </div>
              

    </div>

</section>



<h3>Лучшие отели для семейного отдыха</h3>

<h2>Итоги прошедшей недели</h2>

<section class='best_hotels'>
    <div class="hotel_reviews">
            <img src="{{ asset('img/hotel1.png') }}" alt='Лотте Отель'>
  
            <div>

<div class="up_reviews">

      <div class="name-text">
        <h4>Лотте Отель Москва</h4>
        Новинский бульвар, д. 8, стр. 2, Москва
    </div> 
       
    <div class="name-text">
        <p>  9.5/10  </p>
      <span>   1 379 отзывов</span>
    </div>

</div>

        <p> 
            Роскошный Лотте Отель Москва, расположенный в самом центре столицы, открылся в сентябре 2010 года. За годы присутствия на рынке Лотте Отель завоевал множество престижных наград и заслужил признание путешественников со всего мира. Отель предлагает 300 просторных номеров и люксов, самый большой в России Королевский люкс, а также два великолепных ресторана:
        </p>
    
    </div>



</section>



<section class='best_hotels'>
    <div class="hotel_reviews">
            <img src="{{ asset('img/hotel2.png') }}" alt='Page 20'>
  
            <div>

<div class="up_reviews">

      <div class="name-text">
        <h4>Апарт-отель Page 20</h4>
        New Arbat Ave, 15 2001-2021, Москва
    </div> 
       
    <div class="name-text">
        <p>  9.7/10 </p>
      <span>  668 отзывов</span>
    </div>

</div>

        <p> 
            Дизайнерский апарт-отель Page 20 нового формата в центре Москвы. Панорамные окна и собственная кухня в каждом номере. В апартаментах Page 20 останавливаются как в одиночку, так и с друзьями, большой семьей и с детьми. Гостям предлагается шесть типов номеров от 25 до 65 м2, от небольшой студии до просторных трехкомнатных апартаментов с двумя спальнями и гостиной.        </p>
    
    </div>



</section>


<h3>Как лучше выбрать отель?</h3>

<h2>Часто задаваемые вопросы и советы для путешественников</h2>

<div class="how_get">

<ul>
   <p> Определите свои потребности  </p>
    <li>Тип поездки: Учитывайте, путеш ествуете ли вы в одиночку, с семьей или в романтическом путешествии.
    </li>
    <li>Бюджет: Установите пределы бюджета на проживание.
    </li>
        <p>Исследуйте местоположение </p>
    <li>Близость к достопримечательностям: Выбирайте отель, расположенный рядом с основными интересными местами.
    </li>
    <li>Транспортная доступность: Проверьте, насколько удобно добираться до отеля на общественном транспорте или такси.
    </li>
        <p>Как избежать распространенных ошибок при бронировании отеля </p>
    <li>Не забывайте проверять правила отмены: Важность понимания условий отмены бронирования.
    </li>
    <li>Чтение мелкого шрифта: На что обратить внимание в условиях бронирования.
    </li>
        <p>Планируйте заранее </p>
    <li>Создайте маршрут: Определите, какие места хотите посетить и как доберетесь до них.
    </li>
    <li>Забронируйте отель заранее: Это поможет избежать проблем с отсутствием свободных мест.
    </li>
        <p>Упакуйте вещи разумно </p>
    <li>Минимализм: Берите только самое необходимое, чтобы не перегружать себя.
    </li>
    <li>Подготовьте документы: Убедитесь, что у вас есть все необходимые документы (паспорт, визы, страховка).
    </li>
        <p>Будьте открыты к новым впечатлениям </p>
    <li>Пробуйте местную кухню: Не бойтесь экспериментировать с блюдами.
    </li>
    <li>Знакомьтесь с новыми людьми: Общение с местными жителями может обогатить ваш опыт.
    </li>
        <p>Следите за безопасностью </p>
    <li>Храните ценные вещи в безопасности: Используйте сейфы в отелях и не оставляйте ценные вещи без присмотра.
    </li>
    <li>Будьте внимательны к окружающим: Избегайте неблагополучных районов и следите за своим окружением.
    </li>


</ul>

</div>


</main>
<footer>
 <ul>
  <li>+79093112288</li>  
  <li><a href="/"><img src="{{ asset('img/logo.svg') }}" alt="Logo"></a></li> 
  <li>c HotelReviewHub. 2024</li>  
</ul>

</footer>

<a href="{{ route('showPanel') }}">Админ Панель</a>

</div>
</body>
</html>