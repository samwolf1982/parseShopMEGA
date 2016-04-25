<?php

//$GLOBALS['curenhost']='http://alitrust.ru';

class Parse_alitruse
{

 public $ways=null; // cписок путей беру из фф   
 public $curenhost;
 public $child_links=array();
     static public  function parse($do)
     {
  $arrayName = array('main' =>'div.b-boast-list__item:nth-child() ', 'links_add_a'=>'div.b-boast-list__item:nth-child(' );
  $obj=new Parse_alitruse($arrayName,'http://alitrust.ru');
   # code...
 $document=phpQuery::newDocument($do);
  
  echo $obj->ways['main'];
 $total_count =$document->find($str=str_replace('>', '', $obj->ways['main'])   )->count();

  //echo "I'm parse ali: ".$total_count;

//***** 
 // main loop
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


// loop 2
for ($i=0; $i < ; $i++) { 
  # code...
// поход в дочерние ссылки по полной ссылке выше
$r=$this->go_to_main_el($res['href']);
$res['fotos']=$r['fotos'];
$res['text']=$r['text'];






$obj->result[]=$res;

   // end loop
}
  //*****


   $document=null;
       }

    // переход на страницу
  public function go_to_main_el($link)
  {

    $temp=array(); // fotos[] text
    # code...
    sleep(rand(3,10));
        # code...
        //echo $value['href'] ."<br>";
     phpQuery::get($link, array(), function ($d) use (&$temp)
     {
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
$temp['fotos'][]=$GLOBALS['curenhost'].pq($el)->attr('src');
 }
// текст
$a_main='div.stripe > div:nth-child(1) > div:nth-child(2) > div:nth-child(1) > div:nth-child(2) > div:nth-child(1) > p';
$el=$doc->find($str=str_replace('>', '', $a_main) );

//echo pq($el)->text();
$temp['text']=pq($el)->text();


      //$temp="LOREM";
    //             echo "CALL";

     }, "GET"); 


//print_r($temp);

      
      $doc=null;
  return $temp;
  }
}






  function __construct($a,$host)
  {
    # code...
      $this->ways=$a;
      $this->curenhost=$host;
  }




}
?>
