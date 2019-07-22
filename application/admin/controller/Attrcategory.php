<?php
namespace app\admin\controller;

use Request;
use Db;
use Session;
class Attrcategory extends Common
{
 
      public function list()
      {
        return $this->fetch();
      }

      public function show()
      {
      	$arr=Db::query("select * from attrcategory ");
      	$json=['code'=>'0','status'=>'ok','data'=>$arr];
        return json($json);
      }

      public function addaction()
    {
      $name=Request::post('name');
      
      $arr=Db::query("select * from attrcategory where name='$name'");
      if(!empty($arr)){
        $json=['code'=>'1','status'=>'error','data'=>'名称不能为空或重复'];
        return json($json);
        die;
      }else{
        $data=['name'=>$name];
        $id=Db::name('attrcategory')->insertGetId($data);
        $json=['code'=>'0','status'=>'ok','data'=>$id];
        return json($json);
      }
    }
      public function updateaction()
        {   
          $data=Request::post();
          unset($data['__token__']);
          $name=$data['name'];
          $arr=Db::query("select * from attrcategory where name='$name'");

          if (empty($arr)) {
            
            $arr=Db::table('attrcategory')->update($data);
            $json=['code'=>'0','status'=>'ok','data'=>'修改成功'];
            return json($json);
          }else{
            $json=['code'=>'1','status'=>'error','data'=>'产品类型不能重复'];
            return json($json);
          }          
        }
      public function deletemore()
        {   
            $data=Request::post();
            $id=$data['id'];
          $arr1=Db::query("select * from attrcategory where id='$id'");
          Db::query("delete from attrcategory where id='$id'");
            $this->del($id);
            $json=['code'=>'0','status'=>'ok','data'=>'删除成功'];
            echo json_encode($json);   
        }


        function del($id){
            $arr=Db::query("select * from attrcategory where id='$id'");
            if (!empty($arr)) {
                foreach ($arr as $key => $value) {
                    $id1=$value['id'];
                    $arr=Db::query("delete from attrcategory where id=$id1");
                    $this->del($value['id']);
                   
                }
            }
        }
}