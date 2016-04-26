<?php 
//header('Content-Type: text/html; charset=utf-8');

require_once ('../phpQuery/phpQuery/phpQuery.php');
//include_once 'parse.php';

// обязательно ввести все
function loaddocpost($url, $data,$host, $calback='parse', $type='GET')
{
  phpQuery::ajaxAllowHost($host); 
  # code...
phpQuery::get($url,$calback); 



}

 phpQuery::ajaxAllowHost('testfordel.atwebpages.com'); 
  # code...


$content='<p><img src="http://json.org/img/json160.gif" alt="lorem" />Добро пожаловать в WordPress2. Это ваша первая 2 запись. Отредактируйте или удалите её, затем пишите! yeyssssssss</p>
<p>&nbsp;</p>';
$content='<p>OKI</p>';

$sjs='json=1';
$s='json=get_recent_posts';
//$s='api/core/get_category_posts/';
$s='json=respond.submit_comment';
$s='json=info';
$s='json=get_posts';
$s='json=get_page&slug=sample-page';
$s='json=get_nonce&method=create_post&controller=posts';
$s='json=1';
$s='api/create_post/?nonce=fac8bb95c3&title=Newpost%20Test&st­atus=publish';

$s='http://testfordel.atwebpages.com/api/create_post/?nonce=6aa87f0806&title=Newpost';


$s='http://testfordel.atwebpages.com/api/create_post/?nonce=6aa87f0806&title=Newpost';
$s='json=get_nonce&controller=posts&method=create_post';
$s='json=create_post&nonce=7924faf4d6&title=Newpost';
$s='http://testfordel.atwebpages.com/api/create_post/?nonce=fac8bb95c3&title=Newpost%20Test&st­atus=publish';
$s='json=get_page&slug=sample-page';
//*ok
$s='json=get_nonce&controller=posts&method=create_post';
$s='json=create_post&nonce=20aa44b434&title=gogogo';
$s='api/get_nonce/?controller=auth&method=generate_auth_cookie'; // au cookie
$s='api/auth/generate_auth_cookie/?nonce=a19fe2b644&username=root&password=1111&insecure=cool nonce';
//---
//1  get nonce for auth  
$s='api/get_nonce/?controller=auth&method=generate_auth_cookie'; // 5309e34c29
//1a  for root n user
//                                         nonce UP
$s='api/auth/generate_auth_cookie/?nonce=5309e34c29&username=root&password=1111&insecure=cool';
  /*  
    [cookie] => root|1462799960|jXQdChAgSeDRsN0glTzhcVqFDbdFEWWlTQEajamD3ti|5b674e8309f553c88c0d297f0dda412982950c530af80c79876efa7cf936d505
    [cookie_name] => wordpress_logged_in_0e9958a8fddd1f94ef048c3ef1e52fe0
*/
/*        EXAMPLE
Use cookie like this with your other controller calls: http://localhost/api/contoller-name/method-name/?cookie=Catherine|1392018917|3ad7b9f1c5c2cccb569c8a82119ca4fd
*/

//2  get nounce  for create post
$s='api/get_nonce?controller=posts&method=create_post&cookie=root|1462797296|HasA4M3lFwk8NZORFvYdQ2Sd3iGoj7rILCXruS5uXFI|7211793b62e5d8726b37544215506315b0039475567327d82c74e529a04c3fa8'; // 5309e34c29
//3 create post
$s3='api/create_post?nonce=9ed90f1e86&title=loremlorem&author=root&cookie=root|1462799960|jXQdChAgSeDRsN0glTzhcVqFDbdFEWWlTQEajamD3ti|5b674e8309f553c88c0d297f0dda412982950c530af80c79876efa7cf936d505&cookie_name=wordpress_logged_in_0e9958a8fddd1f94ef048c3ef1e52fe0'; //
$a4postfield='nonce=9ed90f1e86&title=loremlorem&author=root&cookie=root|1462799960|jXQdChAgSeDRsN0glTzhcVqFDbdFEWWlTQEajamD3ti|5b674e8309f553c88c0d297f0dda412982950c530af80c79876efa7cf936d505&cookie_name=wordpress_logged_in_0e9958a8fddd1f94ef048c3ef1e52fe0';


$path='http://testfordel.atwebpages.com/api/create_post'; 
//echo $path.$s3;
$s1='api/auth/generate_auth_cookie/?nonce=5309e34c29&username=root&password=1111&insecure=cool';
$path='http://testfordel.atwebpages.com/?json=1'; 

phpQuery::get($path.$sjs,'parse');

/*      IT WORK DONT DELETE
 if( $curl = curl_init() ) {
    curl_setopt($curl, CURLOPT_URL, $path);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
    curl_setopt($curl, CURLOPT_POST, false);
    curl_setopt($curl, CURLOPT_POSTFIELDS, "a=4&b=7");
    $out = curl_exec($curl);
    echo $out;
    curl_close($curl);
  }
*/
function parse($document)
{
  echo "string";

  //echo "$document";
      $a=json_decode($document);
           print_r($a); 

 //var_dump( func_get_args());

  if(1==1){


  }
}
 
?>