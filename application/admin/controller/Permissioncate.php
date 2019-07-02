<?php
namespace app\admin\controller;
use gmars\rbac\Rbac;
use Request;
use Db;
use Session;
class Permissioncate extends Common
{
    public function list()
    {
    	$token=uniqid();
    	Session::set('token',$token);
    	$this->assign('token',$token);
        return $this->fetch();
    }

    public function show()
    {

    	$rbac= new Rbac();
        $arr=$rbac->getPermissionCategory([['status', '=', 1]]);
        echo json_encode($arr);
    }
    public function addAction()
    {
    	// $name=Request::post('name');
    	// $description=Request::post('description');
    	$data=Request::post();
    	$validate = new \app\admin\validate\Permissioncate;
    	if (!$validate->check($data)) {
            $arr=['code'=>'1','status'=>'error','data'=>$validate->getError()];
    		echo json_encode($arr);
    		die;
        }
    	
    	$rbac= new Rbac();
    	$getarr=$rbac->getPermissionCategory([['name', '=', $data['name']]]);
    	if (empty($getarr)) {
    	$rbac->savePermissionCategory([
		    'name' => $data['name'],
		    'description' =>$data['description'],
		    'status' => 1
		]);
    		$arr=['code'=>'1','status'=>'ok','data'=>'添加成功'];
    		echo json_encode($arr);
    	}else{
    		$arr=['code'=>'0','status'=>'error','data'=>'分类已经存在'];
    		echo json_encode($arr);
    		die;
    	}
    	
		
    }

     public function delete()
    {
    	$__token__=Request::post('__token__');
    	$session_token=Session::get('token');
    	$token=uniqid();
    	Session::set('token',$token);

    	if (!$__token__==Session::get('token')) {
    		$arr=['code'=>'0','status'=>'ok','data'=>'令牌不匹配','token'=>$token];
        	echo $json=json_encode($arr);
        	die;
    	}
    	$id=Request::post('id');
    	$result=Db::query("delete from permission_category where id=$id");
		$arr=['code'=>'0','status'=>'ok','data'=>'删除成功','token'=>$token];
        echo $json=json_encode($arr);
        die;
    }
     public function del()
    {
    	$arr=Request::post('arr');
    	$arr=explode(",", $arr);
    	if (empty($arr)) {
    		$arr=['code'=>'1','status'=>'error','data'=>'请至少勾选一个'];
    		echo $json=json_encode($arr);
    		die;
    	}


    	for ($i=0; $i < count($arr); $i++) { 
    		$id=$arr[$i];
    		Db::query("delete from permission_category where id=$id");
    	}
    	$arr=['code'=>'0','status'=>'ok','data'=>'删除成功'];
		echo $json=json_encode($arr);
    }
    public function updateAction(){
    	$data=Request::post();
    	$validate = new \app\admin\validate\Permissioncate;
    	if (!$validate->check($data)) {
            $arr=['code'=>'1','status'=>'error','data'=>$validate->getError()];
    		echo json_encode($arr);
    		die;
    	}
    	$rbac=new Rbac();
    	$getarr=$rbac->getPermissionCategory([['name','=',$data['name']]]);
    	if (empty($getarr)) {
    		Db::table('permission_category')->where('id',$data['id'])->update(['name'=>$data['name'],'description'=>$data['description']]);

    		$arr=['code'=>'0','status'=>'ok','data'=>'修改成功'];
    		echo json_encode($arr);
    		die;
    	}else{
    		if ($geyarr[0]['id']!=$data['id']) {
    			$arr=['code'=>'1','status'=>'ok','data'=>'分类已经存在'];
    		echo json_encode($arr);
    		die;
    		
    		
    	}else{
    		Db::table('permission_category')->where('id',$data['id'])->update(['name'=>$data['name'],'description'=>$data['description']]);
			$arr=['code'=>'0','status'=>'ok','data'=>'修改成功'];
    		echo json_encode($arr);
    		die;
    	}
    }
	}
}
