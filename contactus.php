<!DOCTYPE html>
<html lang="en">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mainp.css">

<body>
  
      <title>

      </title>
      <head class="container-homepage-link">
      <button onclick="window.location.href = 'index.php';">HOMEPAGE</button>
      </head>
      <section>
  <form id=contactform class="contact-form" action="./app.js" method="GET">
<div>
<label for="fname">Forename</label>
    <input type="text" id="fname" name="fname" placeholder="First name..">
</div>
   

<div>
    <label for="1name">Surname</label>
    
    <input type="text" id="lname" name="1name" placeholder="Last Name.">
</div>

<div>
    <label for="contact_number">Contact Number</label>
    <input type="text" id="Contact-Number" name="Contact-Number" placeholder="Contact Number">
</div>

<div>
      <label for="email_address">Email address</label>
      <input type="text" id="email" placeholder="email address">
</div>

<div>message</label>
    <textarea id="message" name="message" placeholder="How can we help?" style="height:200px"></textarea>
</div>
    
<div>
    <label for="marketing"><input type="checkbox" name="marketing" value="red" id="c1">Would you like to opt in for markerting and offers?</label>
</div>

    <input type="submit" value="Submit">

  </form>
</div>
<section>
  <p id='conctact-error'></p>
</section>
<div>
<section class="container-contact-info">
        <p >
          or you can contact us via
        </p>
        <ul>
          <li>
            <p>phone: 01-1234567</p>
          </li>
          <li> 
            <p>email: info@revivemuscletherapy.ie</p>
          </li>
        </ul>
       </section>
</div>
       


    </body>
</html>

<?php
if (isset ($_POST['q']) )
{
    $databasePassword = 'rSy33)Duvw49nqYg';
    $databaseUser = 'phpuser';
    $databaseHost = 'localhost';
    $database = 'therapy';
    

    $connection = new mysqli($databaseHost, $databaseUser, $databasePassword, $database);
    $statement = $connection->prepare ('INSERT INTO user (`name`, `surname`, `contact_number`, `email`, `message`, `marketing`) values (?,?,?,?,?)');
    $statement->bind_param('sssss', $_POST ['fname'], $_POST ['1name'], $_POST ['contact_number'], $_POST ['email_address'], $_POST ['message'], $_POST ['marketing'] );
    $statement->execute();
}
?>

<script src="../Jquery/app.js"></script>