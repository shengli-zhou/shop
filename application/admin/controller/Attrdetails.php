<?php
namespace app\admin\controller;

use Request;
use Db;
use Session;
class Attrdetails extends Common
{
 
      public function list()
      {
        $attr_id=Request::get('id');
        $this->assign('attr_id',$attr_id);
        return $this->fetch();
      }

      public function show()
      {
        $attr_id=Request::post('attr_id');
      	$arr=Db::query("select attrdetails.id,attrdetails.name,attribute.name as attr_name from attrdetails join attribute on attrdetails.attr_id=attribute.id where attrdetails.attr_id='$attr_id'");
      	$json=['code'=>'0','status'=>'ok','data'=>$arr];
        return json($json);
      }
     
        public function showCate(){
          $arr=Db::query("select * from attribute");
          echo  json_encode($arr);
          // $this->getTree($arr);
        }

      public function addaction()
    {
      $name=Request::post('name');
      $attr_id=Request::post('attr_id');
      $arr=Db::query("select * from attrdetails where name='$name'");
      
      if(!empty($arr)){
        $json=['code'=>'1','status'=>'error','data'=>'名称不能重复1'];
        return json($json);
      }else{
        
        Db::query("insert into attrdetails (`name`,`attr_id`)values ('$name','$attr_id')");
            $json=['code'=>'0','status'=>'ok','data'=>'添加成功'];
            return json($json);
      }
    }
      public function updateaction()
        {   
          $data=Request::post();
          $name=$data['name'];
          $arr=Db::query("select * from attrdetails where name='$name'");
          if (empty($arr)) {
              $where=['name'=>$data['name']];
            $arr=Db::table('attrdetails')->where('id',$data['id'])->update($where);
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
          $arr1=Db::query("select * from attrdetails where id='$id'");
          Db::query("delete from attrdetails where id='$id'");
            $this->del($id);
            $json=['code'=>'0','status'=>'ok','data'=>'删除成功'];
            echo json_encode($json);   
        }


        function del($id){
            $arr=Db::query("select * from attrdetails where id='$id'");
            if (!empty($arr)) {
                foreach ($arr as $key => $value) {
                    $id1=$value['id'];
                    $arr=Db::query("delete from attrdetails where id=$id1");
                    $this->del($value['id']);
                   
                }
            }
        }
}