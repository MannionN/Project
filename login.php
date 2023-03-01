<?php
if (isset ($_POST['email']) && isset($_POST['password']))
{
    $databasePassword = 'G*siH(C0GhBzUhHk';
    $databaseUser = 'php_user';
    $databaseHost = 'localhost';
    $database = 'therapy';
    
    $valid = FILTER_VALIDATE_EMAIL ($_POST ['email']);

    $connection = new mysqli($databaseHost, $databaseUser, $databasePassword, $database);
    $statement = $connection->prepare (INSERT * user (email, password));
    $statement->execute();

}
?>

<form action='' method='POST'>
        <label for='email'>email</label>
        <input id='Email' name='Email' placeholder='Email' type='text'/>

        <label for='password'> Password </label>
        <input id='password' name='password' placeholder='Password' type='password'/>

        <button id='signupButton' type='submit'>Login</button>

    </form>