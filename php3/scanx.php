<?php
header('Content-Type: text/html; charset=utf-8');
//                 caci@leeching.net   mail
//    db                us                 pass

require_once ('../phpQuery/phpQuery/phpQuery.php');
require_once 'setings.php';


/*require_once 'is_present.php';
require_once 'Manager.php';
require_once 'Sites.php';
require_once 'Parse_a1.php';
require_once 'Sent_to_WP.php';*/

                    // 50 el
if(isset($argv)){

  if (isset($argv[2]) & is_int ($argv[2])) {

  for ($i=2; $i <=intval($argv[2]) ; $i++) {

  	# code...else{
 scanx($argv[1].'?page='.$i);
  }
    }
  else
 {
	if (isset($argv[1])) {
		# code...
			  scanx($argv[1]);
	}

 }
// end console
} 

if(isset($_GET )){
	echo $_GET['path'];
	if(isset($_GET['path'])){
	//die();
		if(isset($_GET['count'])){

			 for ($i=2; $i <=intval($_GET['count']) ; $i++) { 
			 	# code...
			 				 scanx($_GET['path'].'?page='.$i);
			 }

		}else
	 scanx($_GET['path']);
	}
		else{
	$path_site='http://alitrust.ru/boasts/odezhda-i-obuv';
           scanx($path_site);
       }

}


 function scanx($path_site)
{
	//$path_site='http://alitrust.ru/boasts/odezhda-i-obuv';
	# code...
  phpQuery::ajaxAllowHost($GLOBALS['curent_host']); 

  phpQuery::get($path_site,function ($do)
    {
    	# code...
         $arrayName = array('main' =>'div.b-boast-list__item:nth-child() ', 'links_add_a'=>'div.b-boast-list__item:nth-child(' );

 // $obj=new Parse_alitruse($arrayName,'http://alitrust.ru');
   # code...
  // create page    witn 50 el 
      $document=phpQuery::newDocument($do);
  



  //echo $obj->ways['main'];       take count  
 $total_count =$document->find($str=str_replace('>', '','div.b-boast-list__item:nth-child() ')   )->count();

//echo "TOTSL: ".$total_count;
//***** 



 // 1  loop
    # code...    count == 50    manual 1  // собрать ссилки на дочер ст.
 //for ($i=1; $i <= $total_count-$total_count+2 ; $i++) { 
     $child_links=array();
 	for ($i=1; $i <= $total_count ; $i++) { 
  // результат для сссылок на дочерние страницы
           $res=array();
      
  # code...
     $a_main='div.b-boast-list__item:nth-child('.$i.") a";
     $el=$document->find($str=str_replace('>', '', $a_main) );
//$a="div.b-boast-list__item:nth-child(".$i.") img";
$pq=pq($el);

// result    формирование полной ссылки
$child_links[]=$GLOBALS['curent_host_full'].$pq->attr('href');
//$res['href']=$obj->curenhost.$pq->attr('href');
  //echo "I'm parse ali: ".$res['href'];
$pq=null;


   // end loop
  }
echo count($child_links);
// loop 2  проход по 50 ссилок  sett time script (50*4)
  try {
   set_time_limit($total_count*3); 
} catch (Exception $e) {
    echo 'Выброшено исключение: ',  $e->getMessage(), "\n";
}
foreach ($child_links as $key => $value) {
  # code...
      sleep(rand(1,3));
         // поход в дочерние ссылки по полной ссылке выше
  $r=go_to_main_el($value,$GLOBALS['curent_host_full']);


$state=1;   // проверка на совпадение  сделать     false    go to wp 
if( is_present(hash('ripemd160', $r['text']))==false){

$res['fotos']=$r['fotos'];
$res['text']=$r['text'];
//$obj->result[]=$res;

// post to wp

$data='title=loremlorem&'.create_content($res);
$wp=send('root',$data);
//$wp=send($GLOBALS['author'],$data);
//$wp->send('root');



}else{
  echo 'Есть совпадение дальше не обрабатываеться.';
   break;
}

//if()    
/* echo "-------";echo  hash('ripemd160', $r['text']);
echo "-------";*/

if(is_null($state)) break;
else{





   // end loop 2
           }}
  //*****
 
   $document=null;







   //print_r($obj->result);


             


     //end anonim n GET
    }); 


// end fun scanx    
}

    // переход на страницу  собратть aдресс фото и текст
function go_to_main_el($link,$host)
  {

   //temp=array(); // fotos[] text
     $temp=$host; // fotos[] text

     phpQuery::get($link, array(), function ($d) use (&$temp)
     {
      $host=$temp;
      $temp=array();
       # code...
     // echo $d;
          // echo
     $doc=phpQuery::newDocument($d);
                   // image 
  $a_main=".fotorama > img:nth-child()";
$el=$doc->find($str=str_replace('>', '', $a_main) );
$total_count =$doc->find($str=str_replace('>', '', $a_main) )->count();
//echo $total_count;
//$resarr=array();
 for ($i=1; $i <=$total_count ; $i++) { 
  # code...
  $a_main=".fotorama > img:nth-child(".$i.")";
$el=$doc->find($str=str_replace('>', '', $a_main) );
$temp['fotos'][]=$host.pq($el)->attr('src');
 }
// текст
$a_main='div.stripe > div:nth-child(1) > div:nth-child(2) > div:nth-child(1) > div:nth-child(2) > div:nth-child(1) > p';
$el=$doc->find($str=str_replace('>', '', $a_main) );

//echo pq($el)->text();
$temp['text']=pq($el)->text();

     }, "GET"); 


      
      $doc=null;
  return $temp;
  //  end go_to_main_el
}


//    fasle если нету
function is_present($value)
	{

$path=$GLOBALS['path_hash'];
		if (!file_exists($path)) {
$myfile = fopen($path, "w") or die("Unable to open file!");
fclose($myfile);
}
         // добавить блокировку
		$file_c = file_get_contents($GLOBALS['path_hash']);
        $all_hasess = explode(",",trim($file_c));
		# code...
		if(!in_array($value, $all_hasess)){
                   $all_hasess[]=$value;
                   // работа дальше
                   file_put_contents($path,
	implode(",",$all_hasess));
                   $all_hasess=null;
                   //   закртить блокировку
                /*   $file_c = file_get_contents($this->path);
                 $this->all_hasess = explode(",",trim($file_c));
*/
                   return false;
		}
		else die(); return true;
	// end	is_present
	}
	 function create_content($data)
{
  $res='';
  foreach ($data['fotos'] as $key => $value) {
    # code...

   $res.=('<p><img src="'.$value.'" /></p>');
   
  }

     $res.='<p>'.$data['text'].'</p>';
  # code...

  return 'content='.$res;
 // end create_content
}

	 function send($autor,$data)
	{
		


$path=$GLOBALS['path_to_WP']; 

error_log('curl  ',3,'log.txt');
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

 // end send 
	}

?>