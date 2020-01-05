<?php 
ini_set('display_errors', 'On');

class User {

    // properties
    // public, protected, private
    private $username;
    private $email = "email@dinustech.com";
    private $tanggal_resign;

    // constructor
    public function __construct($username, $email) {
        $this->setUsername($username);
        $this->setEmail($email);
    }

    // setter
    public function setUsername($username) {
        $this->username = $username;
    }

    public function setEmail($email) {
        if(strpos($email, "@") > -1) {
            $this->email = $email;
        } else {
            $this->email = "GOBLOK!";
        }
    }

    public function setTanggalResign($tanggal_resign) {
        $this->tanggal_resign = $tanggal_resign;
    }

    // getter
    public function getUsername() {
        return $this->username;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getTanggalResign() {
        return $this->formatTanggalResign();
    }

    // methods
    public function addFriend($friend) {
        return $this->username."(".$this->email.") add new friend: ".$friend;
    }


    private function formatTanggalResign() {
        if( empty($this->tanggal_resign) ) {
            return $this->username.": Belum Resign!";
        } else {
            return $this->username.": Tanggal Resign: ".$this->tanggal_resign;
        }
    }
}

// inisiasi
$userSatu = new User("angger", "angger@dinustech.com");
$userDua = new User("adiq", "adiq@dinustech.com");

// panggil setter
$userSatu->setTanggalResign("01 Desember 2019"); 

// ngisi property
// $userSatu->username = "angger";
// $userDua->username = "adiq";

// $userSatu->email = "angger@dinustech.com";

// panggil method
echo $userSatu->addFriend("siddiq")."<br>";
echo $userDua->addFriend("siddiq")."<br>";

echo "<hr>";

// panggil getter
echo $userSatu->getTanggalResign()."<br>";
echo $userDua->getTanggalResign()."<br>";

?>

<html>
    <head>
        <title>NGOCOK OOP</title>
    </head>
</html>