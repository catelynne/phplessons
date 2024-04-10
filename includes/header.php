<?php
  session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="./style.css">
  </head>
  <body>
  
  <nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <navbar class="bg-custom">
    <ul class="navbar-nav">

        
        <li class="nav-item">
          <a class="nav-link" href="calculator.php">Calculator</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="calendar.php">Calendar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="conditionals.php">Conditionals</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="datatypes.php">Datatypes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="functions.php">Functions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Index</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="loops.php">Loops</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="operators.php">Operators</a>
        </li>   
      </ul>
    </div>
  </div>
</nav>

<?php 

$_SESSION['username'] = "CateyBeth.1234";
echo $_SESSION['username'];
  
if (!isset($_SESSION['username'])) {
  echo "You are not logged in!";
} else {
  echo "You are logged in!";
}

?>

</body>
</html>
