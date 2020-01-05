<?php 
ini_set('display_errors', 'On');

class User {

    // properties
    // public, protected, private
    protected $username;
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

class UserAdmin extends User {

    private $email_admin;

    // overriding methods
    public function __construct($username, $email, $email_admin) {
        $this->email_admin = $email_admin;
        parent::__construct($username, $email);
    }

    public function getEmailAdmin() {
        return $this->email_admin;
    }

    public function getUsername() {
        return $this->username;
    }
}

// inisiasi
// $userSatu = new User("angger", "angger@dinustech.com");
// $userDua = new User("adiq", "adiq@dinustech.com");

// echo $userSatu->addFriend("siddiq").'<br>';
// echo $userDua->addFriend("siddiq").'<br>';

$userAdmin = new UserAdmin("admin", "admin@dinustech.com", "emailadmin@dinustech.com");

echo $userAdmin->addFriend("siddiq").'<br>';
echo "Username: ".$userAdmin->getUsername().'<br>';
echo "Email: ".$userAdmin->getEmail().'<br>';
echo "Email Admin: ".$userAdmin->getEmailAdmin().'<br>';

?>

<html>
    <head>
        <title>NGOCOK OOP</title>
    </head>
</html>