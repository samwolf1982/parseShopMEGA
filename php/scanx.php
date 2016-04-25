<?php 
#!/usr/bin/php
#!/usr/bin/env  php
#!/usr/bin/php -n
#!/usr/bin/php -ddisplay_errors=E_ALL
#!/usr/bin/php -n -ddisplay_errors=E_ALL

header('Content-Type: text/html; charset=utf-8');
//                 caci@leeching.net   mail
//    db                us                 pass

require_once ('../phpQuery/phpQuery/phpQuery.php');
require_once 'Manager.php';
require_once 'Sites.php';
require_once 'Parse_a1.php';
require_once 'Sent_to_WP.php';


$arr= array();

$arr[]=new Sites('alitrust.ru','http://alitrust.ru/',array('boasts/odezhda-i-obuv' ));

$obj=new Manager($arr);
// 0 for ali
$obj->run(0);


// обязательно ввести все

/*
  loaddocpost('http://rent-scaner.ru/estate?per-page='.$GLOBALS['per_page'],array(),'alitrust.ru');*/
  /*  loaddocpost('http://alitrust.ru/boasts/odezhda-i-obuv',array(),'alitrust.ru');
    echo "<br>";
     loaddocpost('http://alitrust.ru/boasts/bizhuteriya-i-chasy',array(),'alitrust.ru');*/



/*
$r=date('r', time());
//error_log("$r  $datefrom   $dateto   \n",3, 'log.txt');



if($GLOBALS['totalparts']>$GLOBALS['per_page']){
$r=(int)($GLOBALS['totalparts']/$GLOBALS['per_page']);

 if( ($GLOBALS['totalparts']%(int)$GLOBALS['per_page'])!=0){
 $r++;
 $GLOBALS['totalparts']=$r;
 }


}else
{
	# code...
	$GLOBALS['totalparts']=0;
}
//http://rent-scaner.ru/estate?page=11&per-page=50
for ($i=2; $i <=$GLOBALS['totalparts'] ; $i++) { 
	# code...
loaddocpost('http://rent-scaner.ru/estate?page='.$i.'&per-page='.$GLOBALS['per_page'],generator_form_data("507","1",$datefrom,$dateto),'rent-scaner.ru');
sleep(5);

}*/


//die();

 
?>