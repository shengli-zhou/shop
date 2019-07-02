<?php
namespace app\admin\controller;
use think\Controller;
use think\facade\Session;
// use Session;
class Common extends Controller
{

    public function initialize()
    {
    	
        $name=Session::get('name');
        
        if (empty($name)) {
       		return $this->redirect('login/login');
        }else{
       	$this->assign("name",$name);
        }
    }
    public function commonToken()
    {
        $token = $this->request->token('__token__', 'sha1');
       	$arr=['token'=>$token];
       	echo $json=json_encode($arr); 
    }

}
