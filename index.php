<?php 
Interface Animal{
public function animal_sound();
}

class Cat implements Animal
{
    public function animal_sound()
    {
        echo "meow";
    }
}
$cat = new Cat();
$cat->animal_sound();
?>
