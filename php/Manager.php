<?php
  
  /**
  * 
  */
  class Manager
  {
  	// arr Sites
  public $listsites=array(); 
 
  	public function run($index_site)
  	{
  		# code...
       // select on switch sites
            switch ($index_site) {
            	case 0:
            		# code...
            	// take site from $listsites
      //	print_r(expression)
/*echo $this->listsites[$index_site]->url.$this->listsites[$index_site]->childpage[0].'-----------' ;*/

phpQuery::ajaxAllowHost($this->listsites[$index_site]->host); 
	# code...
phpQuery::get($this->listsites[$index_site]->url.$this->listsites[$index_site]->childpage[0],'Parse_alitruse::parse'); 






 //echo "ali";

                        
            		break;
            		case 2:
            		# code...

            	
            		break;
            	
            	default:
            		# code...
            		break;
            }

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