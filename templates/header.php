<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script src="https://kit.fontawesome.com/yourcode.js%22%3E"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/style.css" >

    <title><?= $title; ?> | F&S Review</title>
  </head>
  <body>

    <header>
      <nav class="navbar navbar-expand-md">
        <a class="navbar-brand" href="/"><span>F&S Review</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto" id="Menubar">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/user">User</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="/kategorie">Kategorie</a>
              <ul>
                <li class="nav-item"><a class="nav-link" href="/kategorie/komoedie">Komödie</a></li>
                <li class="nav-item"><a class="nav-link" href="/kategorie/action">Action</a></li>
                <li class="nav-item"><a class="nav-link" href="/kategorie/drama">Drama</a></li>
              </ul>
            </li>
            <li class="nav-item">
            <?php echo (isset($_SESSION["user"])?'<a class="nav-link" href="/user/logout">Logout</a>':'<a class="nav-link" href="/user/login">Login</a>')?>    
            
            </li>
            <li class="nav-item">
              <?php echo (isset($_SESSION["user"])?$_SESSION["user"]:'')?>
            </li>
          </ul>
        </div>
        
        <a class="fa fa-question nav-link" href="/default/hilfe"> Hilfe</a>
      </nav>
    </header>

    <main class=container>
      <h1><?= $heading; ?></h1>