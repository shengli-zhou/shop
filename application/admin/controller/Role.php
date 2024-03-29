<?php
namespace app\admin\controller;
use gmars\rbac\Rbac;
use Request;
use Db;
use Session;
class Role extends Common
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
      $rbac=new Rbac();
      //select r.id,r.name,r.description,p.name as p_name from permission as p join role_permission as r_p on p.id=r_p.permission_id join role as r on r.id=r_p.role_id
    	$arr=Db::query("select id,name,description from role");
      $json=['code'=>'0','status'=>'ok','data'=>$arr];
      return json($json);
      
    }
     public function show1()
        {
         $rbac= new Rbac();
         $arr=Db::query("select id,name,description from role");
          echo  json_encode($arr);
        }
        public function permissionShow()
    {
      $rbac=new Rbac();
      $arr=Db::query("select p.id,p.name,p.description,p.path,p_c.name as p_c_name,p.category_id from permission as p join permission_category as p_c on p.category_id=p_c.id");
      $newarr=[];
      foreach ($arr as $key => $value) {
        $newarr[$value['p_c_name']][]=$value;
      }
      $json=['code'=>'0','status'=>'ok','data'=>$newarr];
        return json($json);
    }
    public function mypermissionShow()
    {
      $id=Request::get('id');
      $rbac=new Rbac();
      $arr=Db::query("select permission_id from role_permission where role_id='$id'");
      // var_dump($newarr);
      $json=['code'=>'0','status'=>'ok','data'=>$arr];
      return json($json);   
    }
    public function updateAction(){
      $data=Request::post();
      $validate = new \app\admin\validate\Role;
        if (!$validate->check($data)) {
          $arr=['code'=>'1','status'=>'error','data'=>$validate->getError()];
            return json($arr);
        }
      //   unset($data['__token__']);
        $rbac= new Rbac();
        // $getname=$rbac->getPermission([['name', '=', $data['name']]]);
        $name=$data['name'];
        $id=$data['id'];
        $permission_id=$data['permission_id'];
        $up_data=$data;
        unset($up_data['__token__']);
        unset($up_data['permission_id']);

        $arr=Db::query("select * from role where name='$name'");
        if (empty($arr)||!empty($arr)&&$arr[0]['id']==$data['id']) {
          $arr=Db::table('role')->update($up_data);
          
            //删掉，重新入库
          $arr=Db::query("delete from role_permission where role_id='$id'");
          
            $pid_arr=explode(',', $permission_id);
            array_shift($pid_arr);
            foreach ($pid_arr as $key => $value) {
              $arr=Db::query("insert into `role_permission` (`role_id`,`permission_id`) values ('$id','$value')"); 
            }
            $arr=['code'=>'0','status'=>'ok','data'=>'修改成功'];
          
        }else{
            $arr=['code'=>'1','status'=>'error','data'=>'重名了'];
          }
        return json($arr);
        }
    public function add(){
      return $this->fetch();

    }

      public function addAction()
      {
        $data=Request::post();
        $validate = new \app\admin\validate\Role;
        if (!$validate->check($data)) {
          $arr=['code'=>'0','status'=>'error','data'=>$validate->getError()];
            return json($arr);
        }
        $rbac= new Rbac();
        $name=$data['name'];
        $description=$data['description'];
        $permission_id=$data['permission_id'];
        $getname=Db::query("select * from role where name='$name'");
        $arr=explode(',', $permission_id);
        array_shift($arr);
        $permission_id=implode(',',$arr);
        if (empty($getname)) {
          $rbac->createRole([
            'name' => $name,
            'description' => $description,
            'status' => 1
             ],$permission_id);
         $json=['code'=>'0','status'=>'ok','data'=>$arr];
         return json($json);
        }else{
          $json=['code'=>'1','status'=>'error','data'=>'名字不能重复'];
          return json($json);
        }

    }
    public function delete(){
        $data=Request::post();
        $validate = new \app\admin\validate\Delete;
        if (!$validate->check($data)) {
          $arr=['code'=>'1','status'=>'error','data'=>$validate->getError()];
            return json($arr);
        }
        $rbac=new Rbac();
        $rbac->delRole([$data['id']]);
        $arr=['code'=>'0','status'=>'ok','data'=>'删除成功'];
        return json($arr);
    }
      public function deletemore()
      {
       $data=Request::post();
       $id=$data['id'];
       $rbac=new Rbac();
       $validate = new \app\admin\validate\Delete;
            if (!$validate->check($data)) {
          $arr=['code'=>1,'status'=>'error', 'data'=>$validate->getError()];
      echo $json=json_encode($arr);
      die;
        }
         $id=Request::post('id');
         if (empty($id)) {
          $arr=['code'=>2,'status'=>'error','data'=>'未选择删除对象'];
          echo json_encode($arr);
          die;
         }
         $id=explode(",", $id);
         array_shift($id);
         $rbac->delRole($id);
         $arr=['code'=>0,'status'=>'ok','data'=>'删除成功'];
         echo json_encode($arr);
      }


}