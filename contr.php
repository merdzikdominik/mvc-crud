<?php



class Contr extends Model {
    public function createUser($firstName, $lastName, $email) {
        $this->setUser($firstName, $lastName, $email);
    }

    public function userDeletion($fName, $lName, $email) {
        $this->deleteUser($fName, $lName, $email);
    }

}