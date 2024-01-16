<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Нарушениям.Нет</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .form-signin {
            max-width: 400px;
            margin: 10% auto;
            justify-content: center
        }

        .form-signin .form-floating:focus-within {
            z-index: 2;
        }

        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input{
            margin: 5px 0;
        }

        .form-signin input[type="password"] {
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>
</head>

<body>
    <div class="container text-center">
        <main class="form-signin">
            <form action="{{route('signup_valid')}}" method="POST">
                @csrf
                <h1 class="mb-3">Регистрация</h1>
                <div class="form-floating">
                    <input type="text" name="login" class="form-control" id="floatingInput" placeholder="Логин">
                    <label for="floatingInput">Логин</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="floatingInput" placeholder="Пароль">
                    <label for="floatingInput">Пароль</label>
                </div>
                <div class="form-floating">
                    <input type="text" name="name" class="form-control" id="floatingInput" placeholder="Имя">
                    <label for="floatingInput">Имя</label>
                </div>
                <div class="form-floating">
                    <input type="text" name="surname" class="form-control" id="floatingInput" placeholder="Фамилия">
                    <label for="floatingInput">Фамилия</label>
                </div>
                <div class="form-floating">
                    <input type="text" name="patronymic" class="form-control" id="floatingInput" placeholder="Отчество">
                    <label for="floatingInput">Отчество</label>
                </div>
                <div class="form-floating">
                    <input type="text" name="phone" class="form-control" id="floatingInput" placeholder="Номер телефона">
                    <label for="floatingInput">Номер телефона</label>
                </div>
                <div class="form-floating">
                    <input type="email" name="email" class="form-control" id="floatingInput" placeholder="Электронная почта">
                    <label for="floatingInput">Электронная почта</label>
                </div>

                <div class="checkbox my-3">
                    <label>
                        <p>Есть аккаунт? <a href="{{ route('index') }}">Авторизация</a></p>
                    </label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Регистрация</button>
            </form>
        </main>
    </div>


</body>

</html>
