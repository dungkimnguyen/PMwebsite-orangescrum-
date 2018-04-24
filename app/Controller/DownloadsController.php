<?php
App::uses('AppController', 'Controller');
class DownloadsController extends AppController {
    public $name = 'Download';
	public $components = array('Format');
	
	function casefile($files = NULL)
	{
		$this->Format->downloadFile($files);
		exit;
	}
}
?>