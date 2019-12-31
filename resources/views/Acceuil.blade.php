<!DOCTYPE html>
<html lang="en">
<head>
  <title>Acceuil</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
          integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <style type="text/css">
  body{
     background-image: url("{{asset('images/home.png')}}");
     background-color: #cccccc;
     height: 900px;
     background-position: center;
     background-repeat: no-repeat;
     background-size: cover;
     position: relative;

  }
</style>

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
<div class="container">
 <!-- here i put the background image-->

</div>

</body>
</html>