<?php

require_once "autoLoader.php";

class View extends Model{
    public function createUserNotification($firstName, $lastName) {
        echo "=========================================" . "<br>";
        echo "User " . $firstName . " " . $lastName . " has been created!" . "<br>";
        echo "=========================================" . "<br>";
    }

    public function getUserNotification($firstName) {
        $this->getUser($firstName);
    }

    public function deleteUserNotification($firstName, $lastName) {
        echo "=========================================" . "<br>";
        echo "User " . $firstName . " " . $lastName . " has been deleted!" . "<br>";
        echo "=========================================" . "<br>";
    }

    public function deleteUserNotificationError($firstName, $lastName) {
        echo "=========================================" . "<br>";
        echo "Error, User " . $firstName . " " . $lastName . " doesn't exist." . "<br>";
        echo "=========================================" . "<br>";
    }
}
