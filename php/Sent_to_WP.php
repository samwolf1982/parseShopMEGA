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
		# code...
 if( $curl = curl_init() ) {
    curl_setopt($curl, CURLOPT_URL, $this->url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
    curl_setopt($curl, CURLOPT_POST, false);

$data2='autor='.$autor.'&'.$this->data;
echo  $this->url.$data2;
    curl_setopt($curl, CURLOPT_POSTFIELDS,'autor='.$autor.'&'.$this->data);
   // $out = curl_exec($curl);
   // echo $out;
    curl_close($curl);
  }


	}
}
?>