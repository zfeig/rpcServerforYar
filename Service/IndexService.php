<?php
class IndexService{
	public function api($param=array()){
		return $param;
	}

	public function other($param=array()){
		$ret = [];
		$ret['name'] = __CLASS__;
		$ret['params'] = $param;
		return $ret;
	}

}
?>