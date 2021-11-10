


<?php require('../parts/form.php'); ?>
<link rel="stylesheet" href="../css/index.css">
<?php

    require('connect.php');

    $id = $_GET['updateid'];
    
    if(isset($_POST['submit'])){
        
        $email = $_POST['email'];
        $sql="UPDATE utenti SET id=$id, nome=:nome, cognome=:cognome, email=:email, pswd=:pswd WHERE id=$id";

        $query = $db->prepare($sql);

        $query->bindParam(':nome', $_POST['nome'], PDO::PARAM_STR);
        $query->bindParam(':cognome', $_POST['cognome'], PDO::PARAM_STR);
        $query->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
        $query->bindParam(':pswd', $_POST['pswd'], PDO::PARAM_STR);


         if($query->execute()){
            //  echo 'dati Aggiornati<br>';
            header('location:../display.php');
         }else{ ?>
            
            <script> alert('The email already exists') </script>
            <?php
         }
      }
?>

            <div>
                <button id="neon" type="submit" name="submit">Update</button>
            </div>
        </form>
    </div>




