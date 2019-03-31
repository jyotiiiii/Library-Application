<?php

//autoload-will search for a word containing characters a-z in classes folder with .class.php ending
function my_autoload($class) {
    if(preg_match('/\A\w+\Z/', $class)) {
        include 'classes/' . $class . '.class.php';
    }
}

spl_autoload_register('my_autoload');

/*
//Functions for classes
get_declared_classes()

class_exists($string)


//Functions for properties
get_class_vars($string)

get_object_vars($object)

//Example
$member1 = new Member;
$member1->firstName = 'Lucy';
$member1->lastName = 'Liu';

$member2 = new Member;
$member2->firstName = 'Louis';
$member2->lastName = 'Lee';

echo $member1->firstName . " " . $member1->lastName . "\n";
echo $member2->firstName . " " . $member2->lastName . "\n";

$class_vars = get_class_vars('Member');
echo "Class vars:\n";
print_r($class_vars);

$object_vars = get_object_vars($member1);
echo "Object vars:\n";
print_r($object_vars);

property_exists($mixed, $string)
         
//Example
if(property_exists('Member', 'firstName')) {
    echo "Property firstName exists in Member class.\n";
} else {
    echo "Property firstName does NOT exist in Member class.\n";
}

//Functions for Methods
get_class_methods($mixed)

method_exists($mixed, $string)

//Functions for Inheritance

get_parent_class($mixed)

is_subclass_of($mixed, $string)

class_parents($mixed)


//List all classes (including PHP's own classes)
$classes = get_declared_classes();
echo "Classes: " . implode(', ', $classes) . "\n";

//Check custom classes exist
$class_names = ['Member', 'Item', 'DVD', 'Book', 'People', 'Loan', 'Library'];
foreach($class_names as $class_name) {
    if(class_exists($class_name)) {
        echo "{$class_name} is a declared class. \n";
    } else {
        echo "{$class_name} is NOT a declared class. \n";
    }
}


 
