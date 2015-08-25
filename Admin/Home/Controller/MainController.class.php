<?php
namespace Home\Controller;
use Think\Controller;

class MainController extends Controller {
	public function _initialize(){
		 if(!session('username'))
			$this->error('Please Login First!',$this->site_url,5); 
	}
}
?>