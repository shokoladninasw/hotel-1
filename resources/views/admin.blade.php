<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin.css">
    <title>Document</title>
</head>
<body>
<h1>Добавить отель</h1>
    <form action="/admin" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="name">Название:</label>
        <input type="text" id="name" name="name" required>

        <label for="address">Адрес:</label>
        <input type="text" id="address" name="address" required>

        <label for="description">Описание:</label>
        <textarea id="description" name="description" required></textarea>

        <label for="city">Город</label>
        <select name="city" id="city">
            <option value="">Выберите Город</option>
            <option value="Москва">Москва</option>
            <option value="Санкт-Петербург">Санкт-Петербург</option>
            <option value="Казань">Казань</option>
            <option value="Сочи">Сочи</option>
            <option value="Адлер">Адлер</option>
        </select>

        <label for="price">Цена</label>
        <input type="number" id="price" name="price" required>

        <label for="photo">Фотография:</label>
        <input type="url" id="photo" name="photo">

        <button type="submit">Добавить</button>
    </form>
    <a href="/">На главную</a>
</body>
</html>