<?php
header('Content-Type: text/html; charset=utf-8');
//                 caci@leeching.net   mail
//    db                us                 pass

require_once ('../phpQuery/phpQuery/phpQuery.php');
phpQuery::ajaxAllowHost('alitrust.ru'); 
/*
  phpQuery::get('http://alitrust.ru/boasts',function ($document)
  {
  	# code...

  	echo "$document";
$path='http://testfordel.atwebpages.com/api/create_post'; 
//echo $path.$s3;
$s1='api/auth/generate_auth_cookie/?nonce=5309e34c29&username=root&password=1111&insecure=cool';

  });*/ 
  $path='http://testfordel.atwebpages.com/api/create_post?title=loremlorem&author=root';

if (!isset($_GET['author'])) {
    system('wget '.$path);
     system('wget '.$path);
     
} elseif ($_GET['thread'] == 'make_me_happy') {
    make_her_happy();
} elseif ($_GET['thread'] == 'make_me_rich') {
    find_another_one();
}


  send('root','title=lorem');
   //   system('/usr/bin/GET http://testwp.dev/php2/testwget.php');  LOOP!!!!
 function send($autor,$data)
	{
		


$path='http://testfordel.atwebpages.com/api/create_post'; 
//error_log('curl  ',3,'log.txt');
		# code...
 if( $curl = curl_init() ) {
    curl_setopt($curl, CURLOPT_URL, $path);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
    curl_setopt($curl, CURLOPT_POST, false);

$data2='n=n&autor='.$autor.'&'.$data;
//echo  $this->url.$data2;
    curl_setopt($curl, CURLOPT_POSTFIELDS,$data2);
    $out = curl_exec($curl);
   // echo $out;
    curl_close($curl);
  }


	}



?>