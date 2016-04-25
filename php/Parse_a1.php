<?php

$GLOBALS['curenhost']='http://alitrust.ru';

class Parse_alitruse
{
 private $host;
 private $u_path;
 private $res_arr=array();
 private $total_count;
 private $document;
  function __construct($do,$host,$unique_path)
  {
    # code...
$this->host=$host;
$this->u_path=$unique_path;
$this->document=phpQuery::newDocument($do);
$this->total_count =$this->document->find($str=str_replace('>', '', $this->u_path) )->count();


  }
  public function search_elements()
  {
    # code...
 for ($i=1; $i <= $this->total_count-$this->total_count+1 ; $i++) { 
  $res=array();
  # code...
$a_main="div.b-boast-list__item:nth-child(".$i.") a";
$el=$this->document->find($str=str_replace('>', '', $a_main) );
//$a="div.b-boast-list__item:nth-child(".$i.") img";
$pq=pq($el);
$res['href']=$GLOBALS['curenhost'].$pq->attr('href');

//     картинка дублируется
/*
$a="div.b-boast-list__item:nth-child(".$i.") img";
$el=$this->document->find($str=str_replace('>', '', $a) );
$pq=pq($el);
$res['src']=$GLOBALS['curenhost']. $pq->attr('src');
*/
// call go to main
$r=$this->go_to_main_el($res['href']);
$res['fotos']=$r['fotos'];
$res['text']=$r['text'];






$this->res_arr[]=$res;
print_r($res);
echo "<br><br>";

// end loop
//print_r( $this->res_arr);
}
$this->document=null;

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




function parseali($document)
{

$res=array();
	# code...
  $document = phpQuery::newDocument($document);

  if(1==1){
    //$document1 = phpQuery::newDocument($document);
     // $document2 = phpQuery::newDocument($document);

    $obj=new Parse_alitruse($document,$GLOBALS['curenhost'],"div.b-boast-list__item:nth-child() ");
    $obj->search_elements();
     //$obj->go_to_main_el();


  

  }
?>
