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
            margin: 15% auto;
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

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>
</head>

<body>
    <div class="container text-center">
        <main class="form-signin">
            <form>
                <h1 class="mb-3">Нарушениям.Нет</h1>
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Логин">
                    <label for="floatingInput">Логин</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Пароль">
                    <label for="floatingPassword">Пароль</label>
                </div>

                <div class="checkbox mb-3">
                    <label>
                        <p>Нет аккаунта? <a href="{{route('signup')}}">Регистрация</a></p>
                    </label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Авторизация</button>
            </form>
        </main>
    </div>


</body>

</html>
