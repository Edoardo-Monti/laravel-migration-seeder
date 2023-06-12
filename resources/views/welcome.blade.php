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

  
<h1>ciao</h1>
@foreach ($trains as $item)
<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{$item['Azienda']}}</h5>
      <h6 class="card-subtitle mb-2 text-body-secondary">Stazione_di_partenza:{{$item['Stazione_di_partenza']}}</h6>
      <h6 class="card-subtitle mb-2 text-body-secondary">Stazione_di_arrivo:{{$item['Stazione_di_arrivo']}}</h6>
      <h6 class="card-subtitle mb-2 text-body-secondary">Orario_di_partenza:{{$item['Orario_di_partenza']}}</h6>
      
    </div>
  </div>
@endforeach
</body>

</html>