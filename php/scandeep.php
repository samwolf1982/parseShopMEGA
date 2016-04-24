<?php
//http://alitrust.ru/boasts/odezhda-i-obuv/begovyye-krossovki-s-logotipom-keep-running-4846
require_once ('../phpQuery/phpQuery/phpQuery.php');
$GLOBALS['curenhost']='http://alitrust.ru';

// обязательно ввести все
function loaddocpost($url, $data,$host, $calback='parse', $type='GET')
{
	phpQuery::ajaxAllowHost($host); 
	# code...
phpQuery::get($url, $data, $calback, $type); 



}
/*
  loaddocpost('http://rent-scaner.ru/estate?per-page='.$GLOBALS['per_page'],array(),'alitrust.ru');*/
    loaddocpost('http://alitrust.ru/boasts/odezhda-i-obuv/begovyye-krossovki-s-logotipom-keep-running-4846',array(),'alitrust.ru');


header('Content-Type: text/html; charset=utf-8');
mb_internal_encoding("UTF-8");


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

//echo $this->document;
//div.fotorama__nav__frame:nth-child(3) > div:nth-child(1)
$a_main="img";
$a_main=".fotorama > img:nth-child()";
$el=$this->document->find($str=str_replace('>', '', $a_main) );
$total_count =$this->document->find($str=str_replace('>', '', $a_main) )->count();
echo $total_count;
$resarr=array();
 for ($i=1; $i <=$total_count ; $i++) { 
 	# code...
 	$a_main=".fotorama > img:nth-child(".$i.")";
$el=$this->document->find($str=str_replace('>', '', $a_main) );
$resarr[]=$GLOBALS['curenhost'].pq($el)->attr('src');
 }

//$pq=pq($el);
//echo $pq->attr('src');
print_r($resarr);
//$this->total_count =$this->document->find($str=str_replace('>', '', $this->u_path) )->count();


  }
  public function search_elements()
  {
    # code...
 for ($i=1; $i <= $this->total_count-$this->total_count+1; $i++) { 
  $res=array();
  # code...
$a_main="div.b-boast-list__item:nth-child(".$i.") a";
$el=$this->document->find($str=str_replace('>', '', $a_main) );
$a="div.b-boast-list__item:nth-child(".$i.") img";
$pq=pq($el);
$res['href']=$GLOBALS['curenhost'].$pq->attr('href');


$a="div.b-boast-list__item:nth-child(".$i.") img";
$el=$this->document->find($str=str_replace('>', '', $a) );
$pq=pq($el);
//echo $pq->attr('src');
$res['src']=$GLOBALS['curenhost']. $pq->attr('src');

$this->res_arr[]=$res;
//print_r($res);
//echo "<br>";

// end loop
}
$this->document=null;

  }

  public function go_to_main_el()
  {
    $temp="";
    # code...
    sleep(rand(3,10));
      foreach ($this->res_arr as $key => $value) {
        # code...
        echo $value['href'] ."<br>";
     phpQuery::get($value['href'], array(), function ($d) use (&$temp)
     {
       # code...
     // echo $d;
          // echo
                  $doc=phpQuery::newDocument($d);
                   // .fotorama__stage
           $a="div.fotorama__stage__frame:nth-child(1):image ";
           $a='div.fotorama__stage__frame:nth-child(1) > img:nth-child(1)';
           $a='img';
           //div.fotorama__stage__frame:nth-child(1)
           $el=$doc->find($str=str_replace('>', '', $a) );
           $pq=pq($el);
           //echo $pq->attr('src');
//          $res['src']=$GLOBALS['curenhost']. $pq->attr('src');
           //foreach ($pq as $key => $value) {
             # code...
            // echo $value->attr('src');
           //}
echo $pq;
      echo $pq->attr('src');



      //$temp="LOREM";
    //             echo "CALL";

     }, "GET"); 




      }
  // echo "$temp";
  }
}





function parse($document)
{

$res=array();
	# code...
  $document = phpQuery::newDocument($document);

  if(1==1){
    //$document1 = phpQuery::newDocument($document);
     // $document2 = phpQuery::newDocument($document);

    $obj=new Parse_alitruse($document,$GLOBALS['curenhost'],"div.b-boast-list__item:nth-child() ");
    //$obj->search_elements();
     //$obj->go_to_main_el();


  

  }

}


  ?>