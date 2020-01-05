<?php 
ini_set('display_errors', 'On');

class User {

    // properties
    // public, protected, private
    private $username;
    private $email = "email@dinustech.com";

    // constructor
    public function __construct($username, $email) {
        $this->setUsername($username);
        $this->setEmail($email);
    }

    // setter
    public function setUsername($username) {
        $this->username = $username;
        return $this;
    }

    public function setEmail($email) {
        if(strpos($email, "@") > -1) {
            $this->email = $email;
        } else {
            $this->email = "GOBLOK!";
        }
        return $this;
    }

    // getter
    public function getUsername() {
        return $this->username;
    }

    public function getEmail() {
        return $this->email;
    }

    // methods
    public function addFriend($friend) {
        return $this->username."(".$this->email.") add new friend: ".$friend;
    }
}

// inisiasi
$userSatu = new User("angger", "angger@dinustech.com");
$userDua = new User("adiq", "adiq@dinustech.com");

echo $userSatu
    ->setUsername('angger123')
    ->setEmail('angger123@dinustech.com')
    ->addFriend("siddiq");

// chaining method
// $data = \DB::table('pdam_portal')
//     ->where('email', 'angger@dinustech.com')
//     ->where('username', 'angger')
//     ->first();

// $data->where('email', 'angger@dinustech.com');
// $data->where('username', 'angger');
// $data->first();
?>

<html>
    <head>
        <title>NGOCOK OOP</title>
    </head>
</html>