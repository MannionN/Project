<!DOCTYPE html>
<html lang="en">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mainp.css">

<body class="background">
  
      <title>

      </title>
      <head class="container-homepage-link">
      <button onclick="window.location.href = 'index.php';">HOMEPAGE</button>
      </head>
      <section>
  <form id=contactform class="contact-form" action="./contactus.php" method="POST">
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
    <input type="text" id="contact_number" name="contact_number" placeholder="Contact Number">
</div>

<div>
      <label for="email_address">Email address</label>
      <input type="text" id="email" name="email_address" placeholder="email address">
</div>

<div>Message</label>
    <textarea id="message" name="message" placeholder="How can we help?" style="height:150px">How can we help?</textarea>
</div>
    
<div>
    <label for="marketing"><input type="checkbox" name="marketing" id="c1">Would you like to opt in for markerting and offers?</label>
</div>

    <input type="submit" value="Submit">

  </form>
</div>
</section>
<section>
  <p id='contact-error'></p>
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



<script src="/xampp/Project/JS/app.js"></script>