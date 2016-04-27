<?php


  send('root','title=lorem');
 function send($autor,$data)
	{
		


$path='http://testfordel.atwebpages.com/api/create_post'; 
//error_log('curl  ',3,'log.txt');
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


	}

?>