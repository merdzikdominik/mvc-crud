<?php



class Model extends Database
{

    private $status = 0;

    protected function setUser($fName, $lName, $email)
    {
        $sql = "INSERT INTO users_data (user_first_name, user_last_name, user_email) VALUES (?, ?, ?);";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$fName, $lName, $email]);

        $this->checkIfUserExists($fName, $lName, $email);
    }

    protected function getUser($fName)
    {
        $sql = "SELECT user_first_name FROM users_data WHERE user_first_name = ?;";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$fName]);

        $result = $stmt->fetch();

        echo $result['user_first_name'];
    }

    private function checkIfUserExists($fName, $lName, $email): bool
    {
        $sql = 'SELECT user_first_name, user_last_name FROM users_data 
        WHERE user_first_name=? AND user_last_name=? AND user_email=?;';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$fName, $lName, $email]);

        $result = $stmt->rowCount();

        if ($result != 0) {
            return true;
        } else {

            return false;
        }
    }

    protected function deleteUser($fName, $lName, $email): bool
    {
        if ($this->checkIfUserExists($fName, $lName, $email) == true) {
            $sql = 'DELETE FROM users_data WHERE user_first_name=? AND user_last_name=? AND user_email=?;';
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$fName, $lName, $email]);

            return true;

        } else {
            return false;
        }
    }

}
