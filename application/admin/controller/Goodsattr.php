<?php
namespace app\admin\controller;
use Request;
use Db;

class Goodsattr extends Common
{
 
      public function list()
      {

          $goods_id=Request::get('id');
          $this->assign('goods_id',$goods_id);
              // var_dump($goods_id);
              //   die;
        return $this->fetch();
      }

      public function attrcategory_show()
      {
       $arr=Db::query("select * from attrcategory");
       $goods_id=Request::post('goods_id');
      
       $goods_arr=Db::query("select * from goods where id='$goods_id'");
      
       $json=['code'=>'0','status'=>'ok','data'=>$arr];
          if (!empty($goods_arr)) {
          $json['default']=$goods_arr;
          }
         return json($json);
        
      }

      public function show()
      {
        $attr_category=Request::post('attr_category');
        $arr=Db::query("select attribute.id,attribute.name as a_name,attrdetails.id,attrdetails.name as a_d_name from attribute join attrdetails on attribute.id=attrdetails.attr_id where attrcate_id='$attr_category'");
          $newarr=[];
            foreach ($arr as $key => $value) {
           $newarr[$value['a_name']][]=$value;
         }
           $json=['code'=>'0','status'=>'ok','data'=>$newarr];

             $goods_id=Request::post('goods_id');
             $arr1=Db::query("select attr_details_id from goodsattr where goods_id='$goods_id'");
             $json['default']=$arr1;
             return json($json);
      }
  
        public function addAction()
        {
      $data=Request::post();
        $attr_details_id =$data['attr_details_id'];
      $goods_id=$data['goods_id'];
        $attr_cate=$data['attr_cate'];
      $attr_details_id=explode(',', $attr_details_id);
      array_shift($attr_details_id);
        $arr1=Db::query("update goods set attr_cate=$attr_cate where id='$goods_id'");
        $arr2=Db::query("select * from goods where attr_cate=$attr_cate");
            
      if (!empty($arr2)) {
         $arr3=Db::table('goodsattr')->where('goods_id',$goods_id)->delete();
        foreach ($attr_details_id as $key => $value) {
      $arr=Db::table('attrdetails')->where('id',$value)->find();
      $attr_details_id=$value;
      $attr_id=$arr['attr_id'];
       
      $arr4=Db::query("insert into goodsattr (`goods_id`,`attr_details_id`,`attr_id`) value ('$goods_id','$attr_details_id',$attr_id)");
          }
        }else{
             $arr1=Db::query("insert into goodsattr (`goods_id`,`attr_details_id`,`attr_id`) value ('$goods_id','$attr_details_id',$attr_id)");
        } 
    
    }
             

}