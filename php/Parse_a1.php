<?php

//$GLOBALS['curenhost']='http://alitrust.ru';

class Parse_alitruse
{

 public $ways=null; // cписок путей беру из фф   
 public $curenhost;
 public $child_links=array();
  public $result=array();
     static public  function parse($do)
     {
  $arrayName = array('main' =>'div.b-boast-list__item:nth-child() ', 'links_add_a'=>'div.b-boast-list__item:nth-child(' );
  $obj=new Parse_alitruse($arrayName,'http://alitrust.ru');
   # code...
 $document=phpQuery::newDocument($do);
  
  echo $obj->ways['main'];
 $total_count =$document->find($str=str_replace('>', '', $obj->ways['main'])   )->count();


//***** 
 // 1  loop
    # code...
 for ($i=1; $i <= $total_count-$total_count+1 ; $i++) { 
  // результат для сссылок на дочерние страницы
  $res=array();
  # code...
$a_main=$obj->ways['links_add_a'].$i.") a";
$el=$document->find($str=str_replace('>', '', $a_main) );
//$a="div.b-boast-list__item:nth-child(".$i.") img";
$pq=pq($el);

// result    формирование полной ссылки
$obj->child_links[]=$obj->curenhost.$pq->attr('href');
//$res['href']=$obj->curenhost.$pq->attr('href');
  //echo "I'm parse ali: ".$res['href'];
$pq=null;


   // end loop
  }


// loop 2   проход по 50 ссилок
foreach ($obj->child_links as $key => $value) {
  # code...
      
         // поход в дочерние ссылки по полной ссылке выше
$r=$obj->go_to_main_el($value,$obj->curenhost);


$state=1;   // проверка на совпадение  сделать

if(is_null($state)) break;
else{

$res['fotos']=$r['fotos'];
$res['text']=$r['text'];
$obj->result[]=$res;
   // end loop 2
           }}
  //*****
   $document=null;

   print_r($obj->result);


}



    // переход на страницу
  public function go_to_main_el($link,$host)
  {

   //temp=array(); // fotos[] text
     $temp=$host; // fotos[] text
    # code...
    sleep(rand(3,10));
        # code...
        //echo $value['href'] ."<br>";
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
  
}






  function __construct($a,$host)
  {
    # code...
      $this->ways=$a;
      $this->curenhost=$host;
  }




}
?>
