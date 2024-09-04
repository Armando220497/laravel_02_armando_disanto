<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rotte Parametriche</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    {{-- Nav --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route("homepage")}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route("chiSiamo")}}">Chi siamo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('servizi')}}">Servizi</a>
              </li>
            
            </ul>
          </div>
        </div>
      </nav>
    {{-- Nav end --}}
    
    <div class="row d-flex flex-wrap">
        @foreach ($People as $person)
           <div class="col-12 col-md-3 mb-4">
            <div class="card mx-auto my-5" style="width: 18rem;">
                <img src="https://picsum.photos/200" class="card-img-top" alt="foto profilo">
                <div class="card-body">
                  <h5 class="card-title">{{ $person['name'] }} {{ $person['surname'] }}</h5>
                  <p class="card-text">Age: {{ $person['age'] }}</p>
                  <a href="{{route('person.detail',['detail'=>$person['detail']] )}}" class="btn btn-primary">Dettagli</a>
                </div>
              </div>
            </div>
        @endforeach
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>