<?php
/**
* 
*/
class Sites
{
public	$host=null;
	public	$url=null;
		// array child pages
		public	$childpage=null;
	function __construct($host,$url,$childpage)
	{
		# code...
		        $this->host=$host;
				$this->url=$url;
				$this->childpage=$childpage;
	}
}

?>