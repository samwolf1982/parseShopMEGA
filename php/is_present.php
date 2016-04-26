<?php
/**
* 
*/
class Is_Present
{
	public $path=null;
	public $all_hasess=array();
	function __construct($path)
	{
		# code...
		$this->path=$path;
if (!file_exists($path)) {
$myfile = fopen($path, "w") or die("Unable to open file!");
fclose($myfile);
}

		$file_c = file_get_contents($this->path);
        $this->all_hasess = explode(",",trim($file_c));


      // echo var_dump($all_hasess);
	}

	public function is_present($value)
	{
		# code...
		if(!in_array($value, $this->all_hasess)){
                   $this->all_hasess[]=$value;
                   // работа дальше
                   file_put_contents($this->path,
	implode(",",$this->all_hasess));
                   $this->all_hasess=null;
                   $file_c = file_get_contents($this->path);
        $this->all_hasess = explode(",",trim($file_c));

                   return false;
		}
		else return true;
	}


	  function __destruct() {

	  
//hasess.txt  /opt/lampp/htdocs/testwp/php   dirname( getcwd()).$this->path
file_put_contents($this->path,
	implode(",",$this->all_hasess));


   }
}


?>