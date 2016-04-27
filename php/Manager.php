<?php
  phpinfo();
  /**
  * 
  */
  class Manager
  {
  	// arr Sites
  public $listsites=array(); 
 
  	public function run($index_site)
  	{

//phpQuery::ajaxAllowHost($this->listsites[$index_site]->host); 
  # code...
//print_r($this->listsites);

      echo $this->listsites[0]->url.$this->listsites[0]->childpage[$index_site].'-----------';

/*$doc=phpQuery::newDocument($this->listsites[0]->url.$this->listsites[0]->childpage[$index_site]);*/

try {




  phpQuery::get($this->listsites[0]->url.$this->listsites[0]->childpage[$index_site],'Parse_alitruse::parse'); 
  
} catch (Exception $e) {
       echo "ошибка соединения ".__FILE__;
}
try {
  
/* echo $this->listsites[0]->url.$this->listsites[0]->childpage[$index_site].'/?page=2'.'-----------';
phpQuery::get($this->listsites[0]->url.$this->listsites[0]->childpage[$index_site].'?page=2','Parse_alitruse::parse'); */

} catch (Exception $e) {
         echo "ошибка соединения " ;
}

      
  		# code...

  	}

  	function __construct($sitesList)
  	{
  		# code...
  		$this->listsites=$sitesList;
  	}
  	 	public function switch_sites($value='')
  	{
  		# code...



  	}


  }



?>