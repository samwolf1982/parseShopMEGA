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
$content='<p><img src="http://json.org/img/json160.gif" alt="lorem" />Добро пожаловать в WordPress2. Это ваша первая 2 запись. Отредактируйте или удалите её, затем пишите! yeyssssssss</p>
<p>&nbsp;</p>';
$content='<p>OKI</p>';

$s='json=1';
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

/*$username='root';
$password='1111';
  if( $curl = curl_init() ) {
    curl_setopt($curl, CURLOPT_URL, $s);
     curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
     curl_setopt($curl, CURLOPT_USERPWD, "$username:$password");
     curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    $out = curl_exec($curl);
    echo $out;
    curl_close($curl);
  }*/

/* loaddocpost( 'http://testfordel.atwebpages.com/api/create_post/?nonce=8ec4fd2233&title=Newpost',array(),'testfordel.atwebpages.com');*/
echo 'http://testfordel.atwebpages.com/'.$s;
 loaddocpost('http://testfordel.atwebpages.com/'.$s,array(),'testfordel.atwebpages.com');
 // loaddocpost($s,array(),'testfordel.atwebpages.com');


function parse($document)
{
  echo "string";

  //echo "$document";
      $a=json_decode($document);
           print_r($a); 

 var_dump( func_get_args());

  if(1==1){


  }
}
 
?>