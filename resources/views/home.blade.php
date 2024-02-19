<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Azienda</th>
                            <th>Stazione di partenza</th>
                            <th>Stazione di arrivo</th>
                            <th>Orario partenza</th>
                            <th>Orario arrivo</th>
                            <th>Codice Treno</th>
                            <th>Numero carrozze</th>
                            <th>in orario</th>
                            <th>cancellato</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($trains as $train)
                            <tr>
                                <td>{{ $train->id }}</td>
                                <td>{{ $train->azienda }} </td>
                                <td>{{ $train->stazione_partenza }}</td>
                                <td>{{ $train->stazione_arrivo }}</td>
                                <td>{{ $train->orario_partenza }}</td>
                                <td>{{ $train->orario_arrivo }}</td>
                                <td>{{ $train->codice_treno }}</td>
                                <td>{{ $train->numero_carrozze }}</td>
                                <td>{{ $train->in_orario }}</td>
                                <td>{{ $train->cancellato }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
