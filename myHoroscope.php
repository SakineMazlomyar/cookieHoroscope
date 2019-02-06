<?php 
if(!isset($_COOKIE["user"]) ){
$array = array(
    "firstname" => $_POST["firstname"],
    "lastname" => $_POST["lastname"], 
    "personnummer" => $_POST["personnummer"]);

setcookie("user", serialize($array), time() +  (86400 * 30), "/");


}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
if(isset($_COOKIE["user"])){
    $var = unserialize($_COOKIE["user"]);
    
class Person {
        protected $firstname;
        protected $lastname;
        protected $personnummer;
        public function __construct($firstname, $lastname, $personnummer)
        {
            $this->firstname = $firstname;
            $this->lastname = $lastname;
            $this->personnummer = $personnummer;
        }
        
    public function countHoroscope(){
        include("./horoscopes.php");
        $birthday = substr($this->personnummer, 0, 9);
        $day = substr($birthday, 6);
        $month = substr($birthday, 4, 2);
        
        foreach($horoscopes as $horoscope) {
            $startMonth = substr($horoscope->start,3,2);
            $startDay= substr($horoscope->start,0,2);

            $endMonth = substr($horoscope->end,3,2);
            $endDay = substr($horoscope->end,0,2);

            if($day >= $startDay && $month == $startMonth) {

                echo $horoscope->name;
            }

            if($day <= $endDay && $month == $endMonth) {

                echo "<h1>".$horoscope->name."</h1>";
            }
        }
    

    }
    public function getDetails(){
        echo $this->firstname . " ". $this->lastname . " ". $this->personnummer;
    }

    }

$visiter = new Person($var["firstname"], $var['lastname'], $var['personnummer']);
//echo $visiter->getDetails();

echo $visiter->countHoroscope();

}

?>   
</body>
</html>


