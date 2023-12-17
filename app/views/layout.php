<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$title?></title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">  
  </head>
  <body>
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">crm_for_telegram</a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " href="index.php?page=users">Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="index.php?page=roles">All Roles</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="index.php?page=roles&action=create">Create Role</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="index.php?page=register">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="index.php?page=login">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="index.php?page=logout">Logout</a>
        </li>
      </ul>
    </div>
</nav>
<div class="container mt-4">
    <?=$content?>
</div>
</div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>