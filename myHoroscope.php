
<?php
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

                echo $horoscope->name;
            }
        }
    

    }
  /*   public function getDetails(){
        echo $this->firstname . " ". $this->lastname . " ". $this->personnummer;
    }
 */
 }

$visiter = new Person($_POST['firstname'], $_POST['lastname'], $_POST['personnummer']);
//echo $visiter->getDetails();

echo $visiter->countHoroscope();





?>


