<?php require('connect.php'); ?>

<?php 

if(isset($_GET['name'])){
  $sql = 'SELECT * FROM utenti WHERE nome LIKE "%'.$_GET['name'].'%"';

  $query = $db->prepare($sql);

  $query->execute();

}else {

  $sql = 'SELECT * FROM utenti';
  $query = $db->prepare($sql);

  $tot = $query->rowCount();

  $rows = $query->fetchAll(PDO::FETCH_ASSOC);

  foreach($rows as $row){
      $id = $row['id'];
      $name = $row['name'];
      $surname = $row['surname'];
      $email = $row['email'];
      $pswd = $row['pswd'];
      echo ' <tr>
          <th scope="row">'.$id.'</th>
          <td>'.$name.'</td>
          <td>'.$surname.'</td>
          <td>'.$email.'</td>
          <td>'.$pswd.'</td>
          <td>
            <button type="button" class="btn btn-outline-success bau"><a href="crud/update.php?updateid='.$id.'" class="update">Update</a></button>
            <button type="button" class="btn btn-outline-danger bau"><a href="crud/delete.php?deleteid='.$id.'" class="delete">Delete</a></button>
        </td>
      </tr>';
  } "</table>";
  
}

$query = $db->prepare($sql);


if($query->execute()){

  $tot = $query->rowCount();

  $rows = $query->fetchAll(PDO::FETCH_ASSOC);
  
  foreach($rows as $row){
      $id = $row['id'];
      $name = $row['name'];
      $surname = $row['surname'];
      $email = $row['email'];
      $pswd = $row['pswd'];

      echo '  <tr>
          <th scope="row">'.$id.'</th>
          <td>'.$name.'</td>
          <td>'.$surname.'</td>
          <td>'.$email.'</td>
          <td>'.$pswd.'</td>
          <td>
                    <button type="button" class="btn btn-outline-success bau"><a href="crud/update.php?updateid='.$id.'" class="update">Update</a></button>
                    <button type="button" class="btn btn-outline-danger bau"><a href="crud/delete.php?deleteid='.$id.'" class="delete">Delete</a></button>
                </td>
      </tr>';

  }
}

?>