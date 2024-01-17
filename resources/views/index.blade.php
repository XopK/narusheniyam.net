<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Нарушениям.Нет</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
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

        .form-signin input {
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
            <form action="{{ route('signin_valid') }}" method="POST">
                @csrf
                <h1 class="mb-3">Нарушениям.Нет</h1>
                <div class="form-floating">
                    <input type="text" name="login" class="form-control" id="floatingInput" placeholder="Логин">
                    <label for="floatingInput">Логин</label>
                    @error('login')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ $message }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="floatingPassword"
                        placeholder="Пароль">
                    <label for="floatingPassword">Пароль</label>
                    @error('login')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ $message }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @enderror
                </div>

                <div class="checkbox my-3">
                    <label>
                        <p class="mb-0">Нет аккаунта? <a href="{{ route('signup') }}">Регистрация</a></p>
                    </label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Авторизация</button>
                @if (session('error'))
                    <div class="alert alert-danger alert-dismissible fade show my-3" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @else
                @endif
            </form>
        </main>
    </div>


</body>

</html>
