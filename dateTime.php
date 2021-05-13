<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="refresh" content="3">
</head>
<body>
   <?php
 
 /**
  *time()= for time showing function
  microtime() use for exeact time
  sleep(value); for stop time calculation

  */
  // set time zoon
date_default_timezone_set('asia/dhaka');
 
echo "<br/>";
 echo "Lession for Date and time function";
 echo "<br/>";
 echo time();
 echo "<br/>";
 echo date('d/m/y');
 echo "<br/>";
 echo microtime(true);
 echo "<br/>";

 $mt = microtime(true);
 printf("%10.8f", $mt);

 echo "<br/>"; 
 // how much time need this factorial number calculation;

 $startTime = microtime(true);
 factorial(100);
 $endTime = microtime(true);
 $executionTime = $endTime- $startTime;
 printf("%5.5f", $executionTime);

 function factorial($value){
     $result = 1;
     for($i=1; $i<=$value; $i++){
         $result *=$i;
     }
 }
//=============date function formate============================
echo "<br/>";
echo date('d, m, y');
echo "<br/>";

echo date('dS, F, Y');
echo "<br/>";

echo date('d, m, y h:i:s');
echo "<br/>";

echo date('d, m, y h:i:s A');
echo "<br/>"; // H= 24 format, a= am/pm, A=AM/PM

echo date('z'); // spent of yearing date
echo "<br/>"; 

echo date('t');


echo date('d, m, y h:i:s A', time()+ 24*60*60); // add custom time
echo "<br/>";

//=============================================
echo mktime(0,0,0,17,02,21); // how much time spend
echo "<br/>";
$n = mktime(0,0,0,17,02,21);
$result = (($n/(24*3600)))/365;
echo $result;

echo "<br/>";
// if need GMT time zoon 
echo gmmktime(0,0,0,17,02,2021); 

echo "<br/>";
// time calculation
// mktime always show secound result
echo ((mktime(0,0,0,12,10,2018) - mktime(0,0,0,11,3,2018)) / (24 * 60 * 60)) ;

echo "<br/>";
// =================================================

// 12 December, 2012
echo strtotime("01 January, 1997"); //string to time

echo "<br/>";
echo strtotime("now"); // todays time

echo "<br/>";
echo strtotime("+3days"); // which time of next three days

echo "<br/>";
echo "<br/>";
echo (strtotime("+5days") - strtotime("now"))/(86400);

echo "<br/> "; // for counter [perposs]/ add number 
echo (strtotime("+2 weeks 7 days 24 hours 86400 seconds") - strtotime("now"))/(86400);

//=Ai string to itme/ and diclear time format
echo "<br/> ";

echo date('H:i:s A', strtotime('1 january, 1997 04:30:30 AM'));

// ===============Calculation Date Difference=============================
echo "<br/> "; echo "<br/> ";

$date1 = new DateTime('01 January, 1997');
$date2 = new DateTime('17 March, 2021');

$difference = date_diff($date1, $date2);
echo $difference->Format('%m Month %d Days %y Years');
// ========%D = 07 ; %d = 7;
// ========%m = month view
// ========%y = year









    
    ?>
</body>
</html>


<?php
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "hi";