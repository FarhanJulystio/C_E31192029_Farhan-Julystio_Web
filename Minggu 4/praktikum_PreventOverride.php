<?php
// The parent class has hello method that returns "beep".
class Car
{
    final public function hello()
    {
        return "beep";
    }
}

//The child class has hello method that returns "Halllo"
class SportsCar extends Car
{
    public function hello()
    {
        return "Hallo";
    }
}

//Create a new object
$sportsCarl = new SportsCar();

//Get the result of the hello method
echo $sportsCarl->hello();

/*
Output : Fatal error: Cannot override final method Car::hello() in C:\xampp\htdocs\Semester-4\Minggu 4\Praktikum_PreventOverride.php on line 14
Penjelasan :
Pada child class ini (kelas SportsCar) melakukan  overriding method hello() sehingga yang digunakan ialah oleh objek
dari kelas SportsCar adalah method hello() milik kelas SportsCar, namun hal tersebut tidak dapat dilakukan
karena pada saat parent class (kelas Car) method hello() yaitu memiliki keyword final
*/