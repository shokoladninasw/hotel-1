<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container-login">
    <section class="login">
        <div class="login-content">
            <img src="{{ asset('img/img_reg.jpg') }}" alt="Регистрация" class="login-img">
            <div class="login-form">
                <h1>
                    <span>Войти</span> или 
                    <a href="{{ url('/register') }}" class="register-link">Зарегистрироваться</a>
                </h1>
                <form action="{{ url('/login') }}" method="POST">
                    @csrf
                    <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder='Электронная почта' required>
                    <input type="password" name="password" id="password" placeholder='Пароль' required>
                    <button type="submit">Войти</button>
                </form>
            </div>
        </div>
    </section>
    </div>
</body>
</html>
