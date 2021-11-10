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
   
      <a href="index.php" class="btn btn-primary text-light"><i class="fas fa-user-plus"></i></a> 
     
      <a href="search.php" class="btn btn-secondary text-light"><i class="fas fa-search"></i></a> 
    </nav>

</div>
<div class="container">
      <table class="table text-center">

        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Surname</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">U/D</th>
          </tr>
        </thead>
        <tbody>


        <?php  include('user.php');?>
 
        </tbody>
      </table>
  </div>

</body>
</html>

</body>
</html>



