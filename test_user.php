<?php 


// class User
// {
//     private $username;
//     private $password;
//     private $invitedBy;

//     private function __construct($username, $password, $invitedBy = null)
//     {
//         $this->username = $username;
//         $this->password = $password;
//         $this->invitedBy = $invitedBy;
//     }
//     public static function signUp($username, $password)
//     {
//         return new User($username, $password);
//     }
//     public static function fromInvitation($username, $password, User $invitedBy)
//     {
//         return new User($username, $password, $invitedBy);
//     }
//     public function changePassword($newPassword)
//     {
//         $this->password = $newPassword;
//     }
// }
// $newUser = User::signUp('john_doe', '1234');
// $newUser->changePassword('change_me');
// $another = User::fromInvitation('jane_doe', 'xyz', $newUser);


// var_dump($newUser);
// var_dump($another);

class Person
{
    private $firstName;
    private $lastName;

    public function __construct($firstName, $lastName)
    {
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
    }

    public function setFirstName($firstName)
    {
        $this->firstName = trim($firstName);
    }

    public function setLastName($lastName)
    {
        $this->lastName = trim($lastName);
    }

    public function fullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}

$person = new Person('     Ilike    ', '   spaces      ');
echo $person->fullName() . PHP_EOL;

$person->setFirstName('lolly');

echo $person->fullName() . PHP_EOL;


