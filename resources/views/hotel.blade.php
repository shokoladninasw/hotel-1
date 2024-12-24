<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/hotel.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Отзывник на Отели</title>
</head>
<body>
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
@foreach ($aboutHotel as $hotel)
<h3>{{ $hotel->name }}</h3>
<a href="{{ route('hotels', ['city' => 'Москва']) }}">Отели Москвы</a>
<section class="slider-container">
    <div class='slider-img'>
        <img src="{{ $hotel->photo }}" alt="">
    </div>
    <div class='slider-info'>
        <p class='slider-text'>Цена за сутки от {{ $hotel->price }} руб.</p>
    <div class="two">   <div class="two_text">  <p class='hotel_rating_ra'>8.1/10</p>
        <p class='hotel_rating_re'>48 отзывов</p>
    </div>
    </div>

<ul>
<li>До центра города: 3.1 км</li>
    <li>До аэропорта: 24.2 км</li>
        <li>До ж/д вокзала: 0.9 км</li>
            <li>До Гребного канала: 8.1 км</li>
                <li>До Строгинского залива: 8.9 км</li>
                    <li>До Реки Клязьма: 24.2 км</li>
                        <li>До канала имени Москвы: 25.9 км </li>
</ul>
    </div>




</section>
<h4>Описание</h4>
    <p class='text-description'>{{ $hotel->description }}</p>
@endforeach

    <h4>Оставьте свой отзыв</h4>

    <form class="form_review" action="{{ url('hotel/' . $hotel->id) }}" method='POST'>
        @csrf
        <input type='text' name='name' placeholder='Имя'>
        <input type='text' name='dignities' placeholder='Достоинства'>
        <input type='text' name='disadvantages' placeholder='Недостатки'>
    
        
    <div class="container">
        <div class="slider">
          <label for="location">Расположение:</label>
          <input type="range" id="location" min="0" max="10" step="0.1" value="0" oninput="updateValue(this)">
          <output id="location-output">0</output>
        </div>
    
        <div class="slider">
          <label for="service">Обслуживание:</label>
          <input type="range" id="service" min="0" max="10" step="0.1" value="0" oninput="updateValue(this)">
          <output id="service-output">0</output>
        </div>
    
        <div class="slider">
          <label for="price">Цена/качество:</label>
          <input type="range" id="price" min="0" max="10" step="0.1" value="0" oninput="updateValue(this)">
          <output id="price-output">0</output>
        </div>
    
        <div class="slider">
          <label for="cleanliness">Чистота:</label>
          <input type="range" id="cleanliness" min="0" max="10" step="0.1" value="0" oninput="updateValue(this)">
          <output id="cleanliness-output">0</output>
        </div>
    
        <div class="slider">
          <label for="food">Питание:</label>
          <input type="range" id="food" min="0" max="10" step="0.1" value="0" oninput="updateValue(this)">
          <output id="food-output">0</output>
        </div>
    
        <div class="slider">
          <label for="sleep">Качество сна:</label>
          <input type="range" id="sleep" min="0" max="10" step="0.1" value="0" oninput="updateValue(this)">
          <output id="sleep-output">0</output>
        </div>
      </div>
    
      <script>
        function updateValue(input) {
          const outputId = input.id + '-output';
          document.getElementById(outputId).textContent = input.value;
        }
      </script>

<input class='btn_submit' type='submit' value='Отправить'>
    </form>

    <h4>Отзывы</h4>
    
    <section class='reviews'>
        <div class='header_reviews'>
        <div class='header_review'>
            @foreach($aboutHotel as $hotel)
        <h6>{{ $hotel->name }}</h6>
        <h5>{{ $hotel->address }}</h5>
            @endforeach
        </div>
        <div class='points'>
            <p class='point'>8.1/10</p>
            <p class='amount_reviews'>48 отзывов</p>
        </div>
        </div>

    </section>


    
    <footer>
        <ul>
         <li>+79093112288</li>  
         <li><a href="/"><img src="{{ asset('img/logo.svg') }}" alt="Logo"></a></li> 
         <li>c HotelReviewHub. 2024</li>  
       </ul>
       
       </footer>

</body>




</html>