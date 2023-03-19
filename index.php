<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mainp.css">
    <link rel="stylesheet" href="contactus.php">
    <link rel="stylesheet" href="treatment.php">
    <link rel="stylesheet" href="therapist.php">
    </title>
</head>

<body>
<header>
    <img src="reviviemuscletherapylogo.jpg" alt="" style="display:block;width:100%;height:500px;">
</header>
<section>
<form class="top-nav" action = "./index.php", method = "GET">
  <input type="text" placeholder="Search..", name= "q">

  <button id='search' type='submit'>search</button>
</form>
</section>
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

      $therapistId = $therapy ['therapist_id'];

}
 echo $therapyName;
 echo $therapyDescription;
 echo "<a href='therapist.php?id={$therapistId}'>therapist</a>";
}
    
?>

<section>
    <nav>
        <ul class="nav_container">
            <li class="nav_item_container">
                <a href="./therapist.php">About Us</a>
            </li>
            <li>
                <a href="./treatment.php">Treatments</a>
            </li>
            <li>
                <a href="./contactus.php">Contact Us</a>
            </li>
        </ul>
    </nav>
    </section>

    <section>
    <div class="row-container mt-10">
        <div class="item-img">
            <img src="massage-image.jpg" alt=""style="display:block;width:80%">
        </div>
        <p>
            
        "Our mission is to provide high quality care to members of the community for the enhancement of physical health and functional abilities."
        
    </p>
    </div>

    <div class="row-container mt-10">
        <div class="item">
            <H1> 
                Reviews 
            </H1>
            <img src="review-2.jpg" alt="reviews" style="width:45%">
            <img src="review-1.jpg" alt="reviews" style="width:45%">
        </div>
    </div>
    </div>
</section>
<footer>
</footer>
</body>
</html>
