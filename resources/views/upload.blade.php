<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Upload file</title>
        <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
          integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link rel="stylesheet" href="{{mix('css/app.css')}}">

    <!-- Styles -->
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Elite</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('acceuil') }}">Acceuil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Inscription</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Connexion</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="{{ url('upload') }}">Ajouter cour</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="{{ url('etudiant') }}">Gestion étudiant</a>
      </li>
    </ul>
  </div>
</nav>
        <form class="" action="{{URL::to('/store')}}" enctype="multipart/form-data" method="post">
    <input type="file" name="cour" value="">
    <input type="hidden" name="_token" value="{{ csrf_token()}}">
    <br>
    <button type="submit" name="button">Upload cour</button> 
</form>
{{--  --}}
</div>
    </body>
</html>