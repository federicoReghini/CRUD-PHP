<?php require('crud/connect.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
<?php include('parts/navbar.php') ?>

    <div>
      <a href="display.php" class="btn btn-primary text-light mx-1"><i class="fas fa-user"></i></a> 

      <a class="text-light btn btn-danger" href="parts/3div.html"><i class="fas fa-exclamation-triangle"></i></a>
    
    </div>

    <form class="d-flex" action="search.php" method="get">
      <input class="form-control" type="search" placeholder="cerca.." name="name">
      <input class="btn btn-outline-primary" type="submit" value="Search">
    </form>

    
  </nav>

  <div class="container">
      <table class="table text-center">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Surname</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">U/D</th>
          </tr>
        </thead>
        <tbody>


        <?php 



    include('crud/read.php');

?>
 
        </tbody>
      </table>
  </div>

</body>
</html>

</body>
</html>