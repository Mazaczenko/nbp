<!doctype html>
<html lang="pl">

<head>
    {{-- Favicon --}}
    <link rel="apple-touch-icon" sizes="57x57" href="/fav/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/fav/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/fav/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/fav/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/fav/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/fav/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/fav/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/fav/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/fav/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/fav/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/fav/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/fav/favicon-16x16.png">
    <link rel="manifest" href="/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/fav/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>NBP - waluty</title>
</head>

<body>
    <div class="container text-center">
        <h1>Kurs walut NBP</h1>
    </div>

    <hr />
    <div class="container">
        <div class="row">
            <div class="col-9">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Waluta</th>
                            <th scope="col">Skrót</th>
                            <th scope="col">Kurs</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($currencies as $currency)
                        <tr>
                            <td>{{ $currency->id }}</td>
                            <td>{{ $currency->name }}</td>
                            <td>{{ $currency->currency_code}}</td>
                            <td>{{ $currency->exchange_rate }}</td>
                        </tr>
                        @endforeach
                    </tbody>
            </div>
        </div>
    </div>
    </table>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>
