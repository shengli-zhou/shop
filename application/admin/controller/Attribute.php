<?php
namespace app\admin\controller;

use Request;
use Db;
use Session;
class Attribute extends Common
{
 
      public function list()
      {
        $attrcate_id=Request::get('id');
        $this->assign('attrcate_id',$attrcate_id);
        return $this->fetch();
      }

      public function show()
      {
        $attrcate_id=Request::post('attrcate_id');
        $arr=Db::query("select attribute.id,attribute.name,attrcategory.name as a_name from attribute join attrcategory on attribute.attrcate_id=attrcategory.id where attribute.attrcate_id='$attrcate_id'");
        
        $json=['code'=>'0','status'=>'ok','data'=>$arr];
        return json($json);
      }
      public function showCate(){
          $arr=Db::query("select * from attrcategory");
          echo  json_encode($arr);
          // $this->getTree($arr);
        }

      public function addaction()
    {
     
      $name=Request::post('name');
      $attrcate_id=Request::post('attrcate_id');
      $arr=Db::query("select * from attribute where name='$name'");
      
      if(!empty($arr)){
        $json=['code'=>'1','status'=>'error','data'=>'名称不能为空或重复'];
        return json($json);
        die;
      }else{
        Db::query("insert into attribute (`name`,`attrcate_id`)values ('$name','$attrcate_id')");
        $json=['code'=>'0','status'=>'ok','data'=>'添加成功'];
        return json($json);
      }
    }
      public function updateaction()
        {   
          $data=Request::post();
          $name=$data['name'];
          $arr=Db::query("select * from attribute where name='$name'");
          if (empty($arr)) {
              $where=['name'=>$data['name']];
            $arr=Db::table('attribute')->where('id',$data['id'])->update($where);
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
          $arr1=Db::query("select * from attribute where id='$id'");
          Db::query("delete from attribute where id='$id'");
            $this->del($id);
            $json=['code'=>'0','status'=>'ok','data'=>'删除成功'];
            echo json_encode($json);   
        }


        function del($id){
            $arr=Db::query("select * from attribute where id='$id'");
            if (!empty($arr)) {
                foreach ($arr as $key => $value) {
                    $id1=$value['id'];
                    $arr=Db::query("delete from attribute where id=$id1");
                    $this->del($value['id']);
                   
                }
            }
        }
}