<?php
class base_c extends controller {
	protected $result = array('result'=>0, 'msg'=>'error'); 
	public static $err = array(
		-1 => '非法请求',
	);
	
	function _init(){
	
		
	}
	
	function json($res=null, $msg=null){
		if(is_null($res)){
			$res = $this->result;
		}else if(is_array($res) && !empty($res)){
			$res =  array_merge($this->result, array('result'=>$res));
		}else{
			$res['result'] = $res;
		}
		if(is_null($msg))	$res['msg'] = 'ok';
		
		return parent::json($res);
	}
	
	
	
}