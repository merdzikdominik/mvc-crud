<?php

function checkEmail($email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email<br>";
        return false;
    }else {
        return $email;
    }
}

function createUser($firstName, $lastName, $email) {
    if (checkEmail($email) != false) {
        $controller = new Contr();
        $controller->createUser($firstName, $lastName, $email);

        $view = new View();
        $view->createUserNotification($firstName, $lastName);
    }
}

function userDeletion($firstName, $lastName, $email) {
    $controller = new Contr();
    $view = new View();

    if ($controller->userDeletion($firstName, $lastName, $email) == true) {
        $view->deleteUserNotification($firstName, $lastName);
    }
    else{
        $view->deleteUserNotificationError($firstName, $lastName);
    }
}

