<?php
require './database/bdd.php';

$register = false;
var_dump($_GET['register']);
if (($_GET['register'] === 'false'))
{
    if (!empty($_POST))
    {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $login = $_POST['login'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        // var_dump($user);

        $query = $pdo->prepare
        (
            "INSERT INTO client
            (`FirstName`, `LastName`, `Login`, `Password`, `Email`)
            VALUES ($firstname, $lastname, $login, $password, $email)"
        );
        $query->execute();
    };
}
else
{
    if (!empty($_POST))
    {
        $user['login'] = $_POST['login'];
        $user['password'] = $_POST['password'];
        $user['email'] = $_POST['email'];
        // var_dump($user);
        if ($user['login'] === 'JoKER')
        {
            header('Location: admin.php');
            exit();
        } 
        else 
        {
            header('Location: index.php');
            exit();
        }
    };
};

require './views/form.phtml';
?>