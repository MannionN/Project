<?php
if (isset ($_GET['q']) )
{
    $databasePassword = 'rSy33)Duvw49nqYg';
    $databaseUser = 'phpuser';
    $databaseHost = 'localhost';
    $database = 'therapy';
    

    $connection = new mysqli($databaseHost, $databaseUser, $databasePassword, $database);
    $statement = $connection->prepare ('SELECT * from list_of_treatments WHERE `name` = ?');
    $statement->bind_param('s', $_GET ['q']);
    $statement->execute();

    $result = $statement->get_result();
    
    if ($result->num_rows > 0) {
        
      $therapy = $result->fetch_assoc();

      $therapyId = $therapy['id'];

      $therapyName = $therapy['name'];

      $therapyDescription = $therapy['description'];

}
 echo $therapyName;
 echo $therapyDescription;
}
    
?>

<form class="topnav" action = "./index.php", method = "GET">
  <input type="text" placeholder="Search..", name= "q">

  <button id='search' type='submit'>search</button>
</form>



<script src= "./JS/app.js">
</script>