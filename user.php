
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

$n_page = 3;

        $sql = 'SELECT id FROM utenti';

        $query = $db->query($sql);

        $risultati = $query->rowCount();
        $tot_page = ceil($risultati/$n_page);

        (!isset($_GET['page'])) ? $page = 1 : $page = $_GET['page'];
        

        $start = ($page - 1) * $n_page;


        $sql2 = "SELECT * FROM utenti LIMIT $start,$n_page";

        $query2 = $db->prepare($sql2);

        $query2->execute();

        $rows = $query2->fetchAll(PDO::FETCH_ASSOC);

        
        foreach($rows as $row){
            $id = $row['id'];
            $name = $row['name'];
            $surname = $row['surname'];
            $username = $row['username'];
            $email = $row['email'];
            $pswd = $row['pswd'];?>

            <tr>
                    <th scope="row"><?=$id?></th>
                    <td><?=$name?></td>
                    <td><?=$surname?></td>
                    <td><?=$username?></td>
                    <td><?=$email?></td>
                    <td id="pswd"><?=$pswd?></td>

                    <td>
                        <button type="button" class="btn btn-outline-success bau"><a href="display.php?updateid=<?=$id?>" class="update">Update</a></button>
                        <button type="button" class="btn btn-outline-danger bau"><a href="display.php?deleteid=<?=$id?>" class="delete">Delete</a></button>
                    </td>
            </tr><?php 
        }?>
        </tbody>
        </table>
        

        <div id="page">
            <?php

            for($page = 1; $page <= $tot_page; $page++){ ?>
            
            <a class="p-2 mx-0" href="?page=<?=$page?>"><?=$page?></a>

        <?php } ?>
        </div>
    

</body>
</html>