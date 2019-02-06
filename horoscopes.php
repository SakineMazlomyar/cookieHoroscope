<?php

        $horoscopes = array();
        //Stenbocken,
        $start = new DateTime('0000-12-22');
        $startToString = $start->format('d/m/Y');

        $end = new DateTime('0000-01-19');
        $endToString= $end->format('d/m/Y');
        
        $horoscopeOne = new stdClass();
        $horoscopeOne->start = $startToString;
        $horoscopeOne->end = $endToString;
        $horoscopeOne->name = 'stenbocken';

        //vattenumannen
        $startTwo = new DateTime('0000-01-20');
        $startToStringTwo = $startTwo->format('d/m/Y');

        $endTwo = new DateTime('0000-02-18');
        $endToStringTwo = $endTwo->format('d/m/Y');

        $horoscopeTwo = new stdClass();
        $horoscopeTwo->start = $startToStringTwo;
        $horoscopeTwo->end = $endToStringTwo;
        $horoscopeTwo->name = 'vattenumannen';

        
        //fiskarna
        $startThree = new DateTime('0000-02-19');
        $startToStringThree = $startThree->format('d/m/Y');
    
        $endThree = new DateTime('0000-03-20');
        $endToStringThree = $endThree->format('d/m/Y');

        $horoscopeThree = new stdClass();
        $horoscopeThree->start = $startToStringThree;
        $horoscopeThree->end = $endToStringThree;
        $horoscopeThree->name = 'fiskarna';


        
        //väduren
        $startFour = new DateTime('0000-03-21');
        $startToStringFour = $startFour->format('d/m/Y');

  
        $endFour = new DateTime('0000-04-19');
        $endToStringFour = $endFour->format('d/m/Y');

        $horoscopeFour = new stdClass();
        $horoscopeFour->start = $startToStringFour;
        $horoscopeFour->end = $endToStringFour;
        $horoscopeFour->name = 'väduren';

        //Oxen
        $startFive = new DateTime('0000-04-20');
        $startToStringFive = $startFive->format('d/m/Y');
    
    
        $endFive = new DateTime('0000-05-20');
        $endToStringFive = $endFive->format('d/m/Y');

        $horoscopeFive = new stdClass();
        $horoscopeFive->start = $startToStringFive;
        $horoscopeFive->end = $endToStringFive;
        $horoscopeFive->name = 'oxen';
         
        //Tvillingar 
        $startSix = new DateTime('0000-05-21');
        $startToStringSix = $startSix->format('d/m/Y');
    
        $endSix = new DateTime('0000-06-21');
        $endToStringSix = $endSix->format('d/m/Y');

        $horoscopeSix = new stdClass();
        $horoscopeSix->start = $startToStringSix;
        $horoscopeSix->end = $endToStringSix;
        $horoscopeSix->name = 'Tvillingar';

        
          
        //Kraften 
        $startSeven = new DateTime('0000-06-22');
        $startToStringSeven = $startSeven->format('d/m/Y');

        $endSeven = new DateTime('0000-07-22');
        $endToStringSeven = $endSeven->format('d/m/Y');
        
        $horoscopeSeven = new stdClass();
        $horoscopeSeven->start = $startToStringSeven;
        $horoscopeSeven->end = $endToStringSeven;
        $horoscopeSeven->name = 'kraften';


        //lejon
        $startEight= new DateTime('0000-07-23');
        $startToStringEight = $startEight->format('d/m/Y');

    
        $endEight = new DateTime('0000-08-22');
        $endToStringEight = $endEight->format('d/m/Y');
        
        $horoscopeEight= new stdClass();
        $horoscopeEight->start = $startToStringEight;
        $horoscopeEight->end = $endToStringEight;
        $horoscopeEight->name = 'lejon';
            
        //Jungfrun 
        $startNine= new DateTime('0000-08-23');
        $startToStringNine = $startNine->format('d/m/Y');

  
        $endNine = new DateTime('0000-09-22');
        $endToStringNine = $endNine->format('d/m/Y');

        $horoscopeNine= new stdClass();
        $horoscopeNine->start = $startToStringNine;
        $horoscopeNine->end = $endToStringNine;
        $horoscopeNine->name = 'jungfrun';
            
        //Vågen
        $startTen= new DateTime('0000-09-23');
        $startToStringTen = $startTen->format('d/m/Y');

    
        $endTen = new DateTime('0000-10-22');
        $endToStringTen = $endTen->format('d/m/Y');

        $horoscopeTen= new stdClass();
        $horoscopeTen->start = $startToStringTen;
        $horoscopeTen->end = $endToStringTen;
        $horoscopeTen->name = 'vågen';
            
        //skorpjon
        $startEleven= new DateTime('0000-10-23');
        $startToStringEleven = $startEleven->format('d/m/Y');
     

    
        $endEleven = new DateTime('0000-11-22');
        $endToStringEleven = $endEleven->format('d/m/Y');

        $horoscopeEleven = new stdClass();
        $horoscopeEleven->start = $startToStringEleven;
        $horoscopeEleven->end = $endToStringEleven;
        $horoscopeEleven->name = 'skorpjon';


        //Skytten
        $startTwelve= new DateTime('0000-11-23');
        $startToStringTwelve = $startTwelve->format('d/m/Y');

    
        $endTwelve = new DateTime('0000-12-21');
        $endToStringTwelve= $endTwelve->format('d/m/Y');

        $horoscopeTwelve = new stdClass();
        $horoscopeTwelve->start = $startToStringTwelve;
        $horoscopeTwelve->end = $endToStringTwelve;
        $horoscopeTwelve->name= 'skytten';
        
        //We push all horoscope into array and use it later
        array_push($horoscopes, $horoscopeOne,$horoscopeTwo, $horoscopeThree,
         $horoscopeFour,$horoscopeFive, $horoscopeSix, $horoscopeSeven, $horoscopeEight,
         $horoscopeNine, $horoscopeTen, $horoscopeEleven, $horoscopeTwelve);

