<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/index.css">

</head>
<body>
    
<div class="box" id="bg">
    <div class="glass">
        <form id="create" method="post">
            <div class="box">
                <label for="nome">Name</label>
                <input type="text" class="form-control me-2" name="nome"  placeholder="name" required>
            </div>
            <div class="box">
                <label for="cognome">Surname</label>
                <input type="text" class="form-control" name="cognome"  placeholder="surname" required>
            </div>
            <div class="box">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email"  placeholder="email" required>
            </div>
            <div class="box">
                <label for="pswd">Password</label>
                <input type="password" class="form-control" name="pswd"  placeholder="password" required>
            </div>