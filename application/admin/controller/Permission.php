<?php
namespace app\admin\controller;
use gmars\rbac\Rbac;
use Request;
use Db;
class Permission extends Common
{
// 	public function list()
// 	{
// 		return $this->fetch();
// 	}
// 	public function show()
//     {
//     	$rbac= new Rbac();
//         $arr=$rbac->getPermissionCategory([['status', '=', 1]]);
//         echo json_encode($arr);
//     }
//     public function delete()
// 	{
// 		$id=Request::post('id');
// 		$rbac= new Rbac();
//         $arr=$rbac->delPermissionCategory([$id]);
//         $arr=['code'=>'0','status'=>'ok','data'=>'删除成功'];
//         echo json_encode($arr);
// 	}

  //   public function addAction()
  //   {
  //   	// $name=Request::post('name');
  //   	// $description=Request::post('description');
  //   	$data=Request::post();
  //   	$validate = new \app\admin\validate\Permission;
  //   	if (!$validate->check($data)) {
  //           $arr=['code'=>'1','status'=>'error','data'=>$validate->getError()];
  //   		echo json_encode($arr);
  //   		die;
  //       }
    	
  //   	$rbac= new Rbac();
  //   	$getarr=$rbac->getPermissionCategory([['name', '=', $data['name']]]);
  //   	if (empty($getarr)) {
  //   	$rbac->createPermission([
		//     'name' => $data['name'],
		//     'description' =>$data['description'],
		//     'status' => 1
		// ]);
  //   		$arr=['code'=>'1','status'=>'ok','data'=>'添加成功'];
  //   		echo json_encode($arr);
  //   	}else{
  //   		$arr=['code'=>'0','status'=>'error','data'=>'分类已经存在'];
  //   		echo json_encode($arr);
  //   		die;
  //   	}
    	
		
  //   }
}