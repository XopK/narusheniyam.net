<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Нарушениям.Нет</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>

<body>
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mt-3">
            <h1>Панель админстратора</h1>
            <a href="{{ route('logout') }}">Выйти</a>
        </div>

        <ul class="list-group list-group-horizontal mt-3 mb-3">
            <li class="list-group-item"><a href="/admin"><img width="30px" src="/images/asc-sort.png"
                        alt="asc-sort.png"></a></li>
            <li class="list-group-item"><a href="/admin?sort=desc"><img width="30px" src="/images/desc-sort.png"
                        alt="desc-sort.png"></a></li>
        </ul>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Номер авто</th>
                        <th scope="col">Нарушение</th>
                        <th scope="col">Заявитель</th>
                        <th scope="col">Статус</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($application as $item)
                        <tr>
                            <th scope="row">{{ $item->id }}</th>
                            <td>{{ $item->number_auto }}</td>
                            <td>{{ $item->violation }}</td>
                            <td>{{ $item->get_user->surname }} {{ $item->get_user->name }}</td>
                            <td>{{ $item->get_status->title_status }}</td>
                            @if ($item->id_status == 1)
                                <td><a href="/admin/accept/{{ $item->id }}"><span class="material-symbols-outlined">
                                            done
                                        </span></a></td>
                                <td><a href="/admin/denay/{{ $item->id }}"><span class="material-symbols-outlined">
                                            close
                                        </span></a></td>
                            @endif

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $application->withQueryString()->links('pagination::bootstrap-5') }}
    </div>
</body>

</html>
