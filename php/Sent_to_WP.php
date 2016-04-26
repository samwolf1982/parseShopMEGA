<?php
/**
* 
*/
class Sent_to_WP
{
	public  $url;
	public $data;
	function __construct($url,$data)
	{
		# code...
		$this->url=$url;
		$this->data=$data;
		//$this->autor=$autor;
	}
	public function send($autor)
	{
		


$path='http://testfordel.atwebpages.com/api/create_post'; 
error_log('curl  ',3,'log.txt');
		# code...
 if( $curl = curl_init() ) {
    curl_setopt($curl, CURLOPT_URL, $path);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
    curl_setopt($curl, CURLOPT_POST, false);

$data2='n=n&autor='.$autor.'&'.$this->data;
//echo  $this->url.$data2;
    curl_setopt($curl, CURLOPT_POSTFIELDS,$data2);
    $out = curl_exec($curl);
   // echo $out;
    curl_close($curl);
  }


	}
}
?>