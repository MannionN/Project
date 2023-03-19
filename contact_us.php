<?php
print_r($_POST);
if (!empty($_POST['fname']) ){ 
    if(isset($_POST['marketing'])) {
        $_POST['marketing']=True;
    }
    else{
        $_POST['marketing']=False;
    }
    // echo "hello";
    $databasePassword = 'rSy33)Duvw49nqYg';
    $databaseUser = 'phpuser';
    $databaseHost = 'localhost';
    $database = 'therapy';
    

    $connection = new mysqli($databaseHost, $databaseUser, $databasePassword, $database);
    $statement = $connection->prepare ('INSERT INTO user (`name`, `surname`, `contact_number`, `email_address`, `message`, `marketing`) values (?,?,?,?,?,?)');
    $statement->bind_param('ssssss', $_POST ['fname'], $_POST ['1name'], $_POST ['contact_number'], $_POST ['email_address'], $_POST ['message'], $_POST ['marketing'] );
    $statement->execute();

    // echo "complete";
}
?>