


<!--require __DIR__ . '\public_html\php\autoload.php';-->
    
<!DOCTYPE html>
<html>
    <head>
        
        <meta charset="UTF-8">
        <title></title>


    </head>
    <body>
        <?php

//var_dump(stream_resolve_include_path("Interfaces.php"));

spl_autoload_register( function ($className) {
    $className = ltrim($className, '\\');
    $fileName  = '';
    $namespace = '';
    if ($lastNsPos = strrpos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }
    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';

    require $fileName;
});

use classes\Item\Book;
use classes\Item\DVD;
use classes\Member;
$book1 = new Book("Winning Hearts and minds", "David S. Gilbert-Smith MC", "English", "Leadership", "LE1", "On shelf");
$book2 = new Book("My heart will go on", "David S. Gilbert-Smith MC", "English", "Romance", "RO2","On shelf");
$book3 = new Book("Heart and Soul", "David S. Gilbert-Smith MC", "English", "Spirituality", "SPI12","On loan");
$book4 = new Book("Gone with the Wind", "David S. Gilbert-Smith MC","English", "Romance", "RO3", "On shelf");
$book5 = new Book("Crazy little ting", "David S. Gilbert-Smith MC", "English", "Comedy", "CO1", "On loan");
$member1 = new Member("Rosa", "Palli", "25/07/1986", "rosapalli@gmail.com", "172 Bow Common Lane, E34HH London", "07753248387");
$dvd1 = new DVD("Titanic", "James Cameron", 1997, "Language", "Drama", "DRAMA2", "On shelf");
echo $member1->welcome();
echo "<br>";
$book1->searchByStatus("On shelf");  
$book4->borrowItem($member1);
echo"<BR>";
$book4->getDetails();
echo"<BR>";
$book4->returnItem();
echo"<BR>";
$book4->getDetails();
//"<br>";
//$book1->searchAvailableByAuthor("David");
//$book1->borrowItem($member1, $loan1);
$dvd1->getDetails();
?>
    </body>
</html>
