<?php
// PHP Namespaces provide a way in which to group related classes, interfaces, functions and constants.
namespace Mobile;

class User
{

    public $name = 'mobile user';
}

$user = new \Mobile\User;
echo $user->name;

namespace TV;

class User
{
    public static $name = 'tv user';
}

echo \TV\User::$name;



// -------------------------------------------------------Interfaces----------------------------------------------------
//  PHP interface defines a contract which a class must fulfill.
interface Vocalizer
{
    public function someMethod();
    public function vocalize(string $message): string;
}

// A class that implements an interface must implement all of the interface's methods.
class Bird implements Vocalizer
{
    public function vocalize(string $message): string
    {
        return sprintf('<tweet>%</tweet>');
    }
    public function someMethod()
    {
        return null;
    }
}

////////////////////////////////////////////////// Instantiation ////////////////////////////////////////////////

class Mobile
{
    public string $name;
    public int $price;

    public function __construct(string $name, int $price){
        $this->name = $name;
        $this->price = $price;
    }

    // Setter
    function setPrice(int $num)
    {
        $this->price = $num;
    }

    // Getter
    public function getPrice()
    {
        return $this->price;
    }
    
}

$samsung = new Mobile("v1", 500);
$iphone = new Mobile("I23", 670);

$samsung->setPrice(400);
$iphone->setPrice(650);
