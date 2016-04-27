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
require_once 'is_present.php';
require_once 'Manager.php';
require_once 'Sites.php';
require_once 'Parse_a1.php';
require_once 'Sent_to_WP.php';

                               //  FULL PATH !!!!!

//$is_present=new Is_Present('/opt/lampp/htdocs/testwp/php/hasess.txt');
/*echo "---------------------------------";
echo dirname(__FILE__);*/
                                  // uncoment at hosting
//$is_present=new Is_Present('/home/u479185984/public_html/php/hasess.txt');
$GLOBALS['is_present'] = $is_present;
$arr= array();


$arr[]=new Sites('alitrust.ru','http://alitrust.ru/',array('boasts/odezhda-i-obuv','boasts/bizhuteriya-i-chasy','boasts/vse-dlya-detyei','boasts/home','boasts/pets','boasts/telefony-i-kompyutery','boasts/sumki-i-aksessuary','sport-khobbi-i-razvlecheniya','boasts/avtotovary','boasts/elektronika','boasts/adult18','boasts/other' ));//0-11
phpQuery::ajaxAllowHost('alitrust.ru'); 
$obj=new Manager($arr);
// 0 for ali
// первыи из arr[];
$obj->run(0);
//$obj->run(1);


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