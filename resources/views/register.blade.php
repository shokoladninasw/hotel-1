<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container-registration">
    <section class="registration">
        <div class="registration-content">
            <img src="{{ asset('img/img_reg.jpg') }}" alt="Регистрация" class="registration-img">
            <div class="registration-form">
                <h1>
                    <span>Зарегистрироваться</span>
                    или <a href="{{ route('login') }}" class="login-link">Войти</a>
                </h1>
                <form action="{{ url('/register') }}" method="POST">
                    @csrf
                    <input type="text" name="name" id="name" value="{{ old('name') }}" placeholder='Имя' required>
                    <input type="text" name="surname" id="surname" value="{{ old('surname') }}" placeholder='Фамилия' required>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder='Электронная почта' required>
                    <input type="password" name="password" id="password" placeholder='Пароль' required>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder='Подтверждение пароля' required>
                    <button type="submit">Зарегистрироваться</button>
                </form>
            </div>
        </div>
    </section>
    </div>
</body>
</html>
