<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/hotels.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
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
            <li><a href="{{ route('register') }}">Регистрация /</a></li>
            <li><a href="{{ route('login') }}">Вход</a></li>
        @endif
                </div>
        </ul>
    </nav>
</header>
<body>

@if($newHotels->isNotEmpty())
    <h1>Отели в {{ $newHotels->first()->city }}</h1>

    <h2>Посмотреть отзывы туристов об отелях {{ $newHotels->first()->city }}. Узнать плюсы и минусы каждой гостиницы, сравнить их по цене, уровню комфорта и расположению</h2>
@else
    <h1>Отели не найдены</h1>

    <h2>К сожалению, в данный момент нет доступных отелей.</h2>
@endif


<section class="hotels">
    <div class="hotel">
    @foreach ($newHotels as $hotel)
        <div class="hotel_card">
            <img src="{{ $hotel->photo }}" alt="{{ $hotel->name }}" width="455" height="358">
            <div class="hotels_text">
                <h3>{{ $hotel->name }}</h3>
                <h4>{{ $hotel->address }}</h4>
                <div class="hotel_rating">
                <p class='hotel_rating_ra'>8.1/10</p>
                <p class='hotel_rating_re'>48 отзывов</p>
                </div>
                    <h5>от {{ $hotel->price }} руб.</h5>
                    <a href="{{ route('aboutHotel', ['id' => $hotel->id]) }}"><button class='btn_more'>Подробнее</button></a>
            </div>
        </div>
    @endforeach
    </div>
</section>

<a href="/">На главную</a>



<footer>
    <ul>
     <li>+79093112288</li>  
     <li><a href="/"><img src="{{ asset('img/logo.svg') }}" alt="Logo"></a></li> 
     <li>c HotelReviewHub. 2024</li>  
   </ul>
   
   </footer>
</body>
</html>