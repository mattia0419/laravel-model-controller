<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Styles -->
  @vite('resources/js/app.js')
</head>

<body>
  <div class="container">
    <div class="row g-5">
      @foreach($movies as $movie)
      <div class="col-3">
        <div class="card text-center h-100">
          <div class="card-header">
            <h4>{{ $movie->title }}</h4>
          </div>
          <div class="card-body">
            <h6>Titolo originale: <span>{{ $movie->original_title }}</span> </h6>
            <h6>Nazionalità: <span>{{ $movie->nationality }}</span> </h6>
            <h6>data d'uscita: <span>{{ $movie->date }}</span> </h6>
            <h6>Valutazione: <span>{{ $movie->vote }}</span> </h6>
          </div>
        </div> 
      </div>
      @endforeach
    </div>
  </div>
  
</body>

</html>
