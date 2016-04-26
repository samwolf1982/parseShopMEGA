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
  
  //echo $obj->ways['main'];
 $total_count =$document->find($str=str_replace('>', '', $obj->ways['main'])   )->count();

//echo "TOTSL: ".$total_count;
//***** 
 // 1  loop
    # code...
 for ($i=1; $i <= $total_count-$total_count+6 ; $i++) { 
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
      sleep(rand(3,10));
         // поход в дочерние ссылки по полной ссылке выше
$r=$obj->go_to_main_el($value,$obj->curenhost);


$state=1;   // проверка на совпадение  сделать     false    go to wp 
if( $GLOBALS['is_present']->is_present(hash('ripemd160', $r['text']))==false){

$res['fotos']=$r['fotos'];
$res['text']=$r['text'];
$obj->result[]=$res;

// post to wp

$data='title=loremlorem&'.$obj->create_content($res);
$wp=new Sent_to_WP('http://testfordel.atwebpages.com/api/create_post',$data);
$wp->send('root');



}else{
  echo 'PRESENT ';
  // break
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







   print_r($obj->result);


}
public function create_content($data)
{
  $res='';
  foreach ($data['fotos'] as $key => $value) {
    # code...

   $res.=('<p><img src="'.$value.'" /></p>');
   
  }

     $res.='<p>'.$data['text'].'</p>';
  # code...
  $str='<p>Добро пожаловать в WordPress. Это ваша next запись. Отредактируйте или удалите её, затем пишите!</p>
<p><img class="alignnone" src="https://lh5.googleusercontent.com/DkB_oV-xYF6jcGt37LaipfCqES1Dli7c8Iti3YynRx_mBFiNpR-tHhp7GR8EOc0ConyPm-hYqA=s640-h400-e365" width="640" height="400" /></p>';


  return 'content='.$res;
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
