<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Ведомости онлайн</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('storage/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/css/login.css') }}">
</head>
<body>
    <form class="form-signin">
        <h1 class="h3 mb-3 font-weight-normal text-center">Вход</h1>
        <label for="login" class="sr-only">Адрес электронной почты</label>
        <input type="text" id="login" placeholder="Логин" style="border-radius: 0.25rem 0.25rem 0 0; border-bottom: 0px" class="form-control" required autofocus>
        <label for="password" class="sr-only">Пароль</label>
        <input type="password" id="password" placeholder="Пароль" class="form-control" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>

        <p class="mt-5 mb-3 text-muted text-center">Ведомости онлайн</p>
    </form>

    <script src="{{ asset('storage/js/jquery.min.js') }}"></script>
    <script src="{{ asset('storage/js/bootstrap.min.js') }}"></script>
</body>
</html>
