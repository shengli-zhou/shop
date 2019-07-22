<?php /*a:3:{s:76:"C:\phpStudy\PHPTutorial\WWW\03kj\shop\application\admin\view\brand\list.html";i:1563153030;s:72:"C:\phpStudy\PHPTutorial\WWW\03kj\shop\application\admin\view\header.html";i:1563757466;s:72:"C:\phpStudy\PHPTutorial\WWW\03kj\shop\application\admin\view\footer.html";i:1562661169;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="favicon.ico" >
<link rel="Shortcut Icon" href="favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/static/hui/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/static/hui/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/static/hui/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/static/hui/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/static/hui/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<!--/meta 作为公共模版分离出去-->

<title>电商后台</title>
<meta name="keywords" content="H-ui.admin v3.0,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.0，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<!--_header 作为公共模版分离出去-->
<header class="navbar-wrapper">
	<div class="navbar navbar-fixed-top">
		<div class="container-fluid cl"> <a class="logo navbar-logo f-l mr-10 hidden-xs" href="/aboutHui.shtml">H-ui.admin</a> <a class="logo navbar-logo-m f-l mr-10 visible-xs" href="/aboutHui.shtml">H-ui</a> 
			<span class="logo navbar-slogan f-l mr-10 hidden-xs">v3.0</span> 
			<a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;">&#xe667;</a>
			<nav class="nav navbar-nav">
				<ul class="cl">
					<li class="dropDown dropDown_hover"><a href="javascript:;" class="dropDown_A"><i class="Hui-iconfont">&#xe600;</i> 新增 <i class="Hui-iconfont">&#xe6d5;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="javascript:;" onclick="article_add('添加资讯','article-add.html')"><i class="Hui-iconfont">&#xe616;</i> 资讯</a></li>
							<li><a href="javascript:;" onclick="picture_add('添加资讯','picture-add.html')"><i class="Hui-iconfont">&#xe613;</i> 图片</a></li>
							<li><a href="javascript:;" onclick="product_add('添加资讯','product-add.html')"><i class="Hui-iconfont">&#xe620;</i> 产品</a></li>
							<li><a href="javascript:;" onclick="member_add('添加用户','member-add.html','','510')"><i class="Hui-iconfont">&#xe60d;</i> 用户</a></li>
				</ul>
			</li>
		</ul>
	</nav>
			<nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
				<ul class="cl" id="user.id">
					<li>超级管理员</li>
					<li class="dropDown dropDown_hover"> <a href="#" class="dropDown_A"><?php echo htmlentities($name); ?> <i class="Hui-iconfont">&#xe6d5;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="javascript:;" onClick="myselfinfo()">个人信息</a></li>
							<li><a href="#">切换账户</a></li>
							<li><a href="<?php echo url('login/loginOut'); ?>">退出</a></li>
				</ul>
			</li>
					<li id="Hui-msg"> <a href="#" title="消息"><span class="badge badge-danger">1</span><i class="Hui-iconfont" style="font-size:18px">&#xe68a;</i></a> </li>
					<li id="Hui-skin" class="dropDown right dropDown_hover"> <a href="javascript:;" class="dropDown_A" title="换肤"><i class="Hui-iconfont" style="font-size:18px">&#xe62a;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="javascript:;" data-val="default" title="默认（黑色）">默认（黑色）</a></li>
							<li><a href="javascript:;" data-val="blue" title="蓝色">蓝色</a></li>
							<li><a href="javascript:;" data-val="green" title="绿色">绿色</a></li>
							<li><a href="javascript:;" data-val="red" title="红色">红色</a></li>
							<li><a href="javascript:;" data-val="yellow" title="黄色">黄色</a></li>
							<li><a href="javascript:;" data-val="orange" title="橙色">橙色</a></li>
				</ul>
			</li>
		</ul>
	</nav>
</div>
</div>
</header>
<!--/_header 作为公共模版分离出去-->

<!--_menu 作为公共模版分离出去-->
<aside class="Hui-aside">
	
	<div class="menu_dropdown bk_2">
		<dl id="menu-article">
			<dt><i class="Hui-iconfont">&#xe616;</i> 资讯管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a href="article-list.html" title="资讯管理">资讯管理</a></li>
		</ul>
	</dd>
</dl>
		<dl id="menu-picture">
			<dt><i class="Hui-iconfont">&#xe613;</i> 图片管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a href="picture-list.html" title="图片管理">图片管理</a></li>
		</ul>
	</dd>
</dl>
		<dl id="menu-product">
			<dt><i class="Hui-iconfont">&#xe620;</i> 产品管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a href="<?php echo url('brand/list'); ?>" title="品牌管理">品牌管理</a></li>
					<li><a href="<?php echo url('goodscate/list'); ?>" title="分类管理">分类管理</a></li>
					<li><a href="<?php echo url('goods/list'); ?>" title="产品管理">产品管理</a></li>
					<li><a href="<?php echo url('attrdetails/list'); ?>" title="产品管理">属性管理</a></li>
					<li><a href="<?php echo url('goodsp/list'); ?>" title="货品属性">货品属性</a></li>
					<li><a href="<?php echo url('order/list'); ?>" title="货品属性">订单管理</a></li>
		</ul>
	</dd>
</dl>
		<dl id="menu-comments">
			<dt><i class="Hui-iconfont">&#xe622;</i> 评论管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a href="http://h-ui.duoshuo.com/admin/" title="评论列表">评论列表</a></li>
					<li><a href="feedback-list.html" title="意见反馈">意见反馈</a></li>
		</ul>
	</dd>
</dl>
		<dl id="menu-member">
			<dt><i class="Hui-iconfont">&#xe60d;</i> 会员管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a href="member-list.html" title="会员列表">会员列表</a></li>
					<li><a href="member-del.html" title="删除的会员">删除的会员</a></li>
					<li><a href="member-level.html" title="等级管理">等级管理</a></li>
					<li><a href="member-scoreoperation.html" title="积分管理">积分管理</a></li>
					<li><a href="member-record-browse.html" title="浏览记录">浏览记录</a></li>
					<li><a href="member-record-download.html" title="下载记录">下载记录</a></li>
					<li><a href="member-record-share.html" title="分享记录">分享记录</a></li>
		</ul>
	</dd>
</dl>
		<dl id="menu-admin">
			<dt><i class="Hui-iconfont">&#xe62d;</i> 管理员管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a href="<?php echo url('role/list'); ?>" title="角色管理">角色管理</a></li>
					<li><a href="<?php echo url('permission/list'); ?>" title="权限管理">权限管理</a></li>
					<li><a href="<?php echo url('permissioncate/list'); ?>" title="权限管理">权限分类管理</a></li>
					<li><a href="<?php echo url('user/list'); ?>" title="管理员列表">管理员列表</a></li>
		</ul>
	</dd>
</dl>
		<dl id="menu-tongji">
			<dt><i class="Hui-iconfont">&#xe61a;</i> 系统统计<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a href="charts-1.html" title="折线图">折线图</a></li>
					<li><a href="charts-2.html" title="时间轴折线图">时间轴折线图</a></li>
					<li><a href="charts-3.html" title="区域图">区域图</a></li>
					<li><a href="charts-4.html" title="柱状图">柱状图</a></li>
					<li><a href="charts-5.html" title="饼状图">饼状图</a></li>
					<li><a href="charts-6.html" title="3D柱状图">3D柱状图</a></li>
					<li><a href="charts-7.html" title="3D饼状图">3D饼状图</a></li>
		</ul>
	</dd>
</dl>
		<dl id="menu-system">
			<dt><i class="Hui-iconfont">&#xe62e;</i> 系统管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a href="system-base.html" title="系统设置">系统设置</a></li>
					<li><a href="system-category.html" title="栏目管理">栏目管理</a></li>
					<li><a href="system-data.html" title="数据字典">数据字典</a></li>
					<li><a href="system-shielding.html" title="屏蔽词">屏蔽词</a></li>
					<li><a href="system-log.html" title="系统日志">系统日志</a></li>
		</ul>
	</dd>
</dl>
</div>
</aside>
<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
<!--/_menu 作为公共模版分离出去-->
<section class="Hui-article-box">
	<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 产品管理 <span class="c-gray en">&gt;</span> 品牌管理 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
		
	<div class="Hui-article">
		<article class="cl pd-20">
			<div class="text-c">
					<input id="__token__" name="__token__" value="<?php echo htmlentities(app('request')->token()); ?>" hidden="">
					<input type="text" placeholder="名称" value="" class="input-text" style="width:120px" id="name">
					<input type="text" placeholder="描述" value="" class="input-text" style="width:120px" id="description">
					<input type="file" id="logo" >
					<button type="button" class="btn btn-success" id="add" name="" onClick=""><i class="Hui-iconfont">&#xe600;</i> 添加</button>
					<span id="add_span"></span> 
			</div>
			<div class="cl pd-5 bg-1 bk-gray mt-20">
				<span class="l"> <a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i>批量删除</a></span>

			<span class="r">共有数据：<strong>54</strong> 条</span> </div>
			<div class="mt-10">
				<table class="table table-border table-bordered table-bg table-sort">
					<thead>
						<tr class="text-c">
							<th width="25"><input type="checkbox" name="" value=""></th>
							<th width="70">ID</th>
							<th width="120">品牌名称</th>
							<th width="120">品牌描述</th>
							<th width="120">LOGO</th>
							<th width="100">操作</th>
						</tr>
					</thead>
					<tbody>
					</tbody>
				</table>
			</div>
		</article>
	</div>

	<div id="modal-demo" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content radius">
			<div class="modal-header">
				<h3 class="modal-title">对话框标题</h3>
				<a class="close" data-dismiss="modal" aria-hidden="true" href="javascript:void();">×</a>
			</div>
			<div class="modal-body">
				<input type="text" value="" id="up_id" hidden="">
				<input type="text" value="" id="up_name">
				<input type="text" value="" id="up_description">
				<span id="up_span"></span>
			</div>
			<div class="modal-footer">
				<button class="btn btn-primary" id="update">确定</button>
				<button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
			</div>
		</div>
	</div>	
</div>
	<div id="modal-demo1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content radius">
			<div class="modal-header">
				<h3 class="modal-title">对话框标题</h3>
				<a class="close" data-dismiss="modal" aria-hidden="true" href="javascript:void();">×</a>
			</div>
			<div class="modal-body">
				<input type="text" value="" id="up_id1" hidden="">
				<input type="file" placeholder="名称" name="up_myfile" value="" class="input-text" style="width:120px" id="up_logo">
				<span id="up_span1"></span>
			</div>
			<div class="modal-footer">
				<button class="btn btn-primary" onclick="up_logo()">确定</button>
				<button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
			</div>
		</div>
	</div>	
</div>
</section>
<!--_footer 作为公共模版分离出去-->
<!-- <script type="text/javascript" src="/static/hui/lib/jquery/1.9.1/jquery.min.js"></script>  -->
<script src="/static/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/hui/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/static/hui/static/h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="/static/hui/static/h-ui.admin/js/H-ui.admin.page.js"></script> 
<!--/_footer /作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript">
	function getToken(){

		$.ajax({
			url:"<?php echo url('common/commonToken'); ?>",
			dataType:'json',
			success:function(res){
				$('#__token__').val(res.token)
			}
		})
	}
</script>
<!--/请在上方写此页面业务相关的脚本-->





</body>
</html>
<script>
				$("#add").click(function(){
					var __token__ =$('#__token__').val()
					var name =$('#name').val()
					var description=$('#description').val()
					var formData=new FormData();
					formData.append('logo',$('#logo')[0].files[0]);
					formData.append('description',description);
					formData.append('name',name);
					formData.append('__token__',__token__);
					$.ajax({
						url:"<?php echo url('brand/addAction'); ?>",
						type:'post',
						data:formData,
							name:name,
							contentType:false,
							processData:false,
							cache:false,
						dataType:'json',
						success:function(res){
							console.log(res)
							getToken()
							show()
						}
					})
				})
	function show() {
		$.ajax({
			url:'<?php echo url("brand/show"); ?>',
			success:function(res){
				if(res.status=='error'){
					alert('没有权限')
				}else{
					console.log(res)
					var data=res.data
					var tr=''
					for (var i = 0; i <data.length; i++){
						tr=tr+"<tr><td><input class='mycheckbox' type='checkbox' value='"+data[i]['id']+"'</td><td>"+data[i]['id']+"</td><td>"+data[i]['name']+"</td><td>"+data[i]['description']+"</td><td><img onclick='img("+data[i]['id']+")' style='height:50px;width:50px' src='/uploads/"+data[i]['logo']+"'/</td><td class='f-14 product-brand-manage'><a style='text-decoration:none' onclick='modaldemo(\""+data[i]['id']+"\",\""+data[i]['name']+"\",\""+data[i]['description']+"\",\""+data[i]['logo']+"\")' title='编辑'><i class='Hui-iconfont'>&#xe6df;</i></a> <a style='text-decoration:none' class= ml-5' onclick='del("+data[i]['id']+")' title='删除'><i class='Hui-iconfont'>&#xe6e2;</i></a></td></tr>";			
					}
					$('.table tbody').html(tr)
				}
				
			}
		})
	}
	show()

		function del(id){
		var r=confirm("确定删除吗？");
		var __token__=$("#__token__").val()
		if (r==true){
			$.ajax({
				url:"<?php echo url('brand/delete'); ?>",
				data:{
					id:id,
					__token__:__token__,
				},
				type:'post',
				dataType:'json',
				success:function(res){
					show()
					getToken()
				}
			})
		}
	}
			function datadel(){
		var r=confirm("确定删除吗？");
		var __token__=$("#__token__").val()
		if (r==true){
			var box = $(".mycheckbox:checked")
			var id = ''
			for (var i = 0; i < box.length; i++) {
				id = id+","+ box[i].value
			}
			$.ajax({
				url:"<?php echo url('brand/datadel'); ?>",
				type:'post',
				data:{
					id:id,
					__token__:__token__,
				},
				dataType:'json',
				success:function(res){
					console.log(res)
					show()
				}
			})
		}
	}
      function modaldemo(id,name,description){
					$("#up_id").val(id)
					$("#up_name").val(name)
					$("#up_description").val(description)
	               $("#modal-demo").modal("show")
		}
     		 


     		 function modaldemo1(id,logo){
					$("#up_id1").val(id)
					$("#up_logo").val(logo)
	               $("#modal-demo1").modal("show")	        
	    }

	 	$("#update").click(function(){
		var id=$("#up_id").val()
		var name=$("#up_name").val()
		var description=$("#up_description").val()
	
		$.ajax({
			url:"<?php echo url('brand/updateAction'); ?>",
			type:'post',
			data:{
				id:id,
				name:name,
				description:description,
				
			},
			dataType:'json',
			success:function(res){
				console.log(res)
				show()
			}
		})
	})	


	 	function img (id){
	 		$("#up_id1").val(id)
	 		$("#modal-demo1").modal("show")
	 	}


	 	function up_logo(){
	 		var  id=$("#up_id1").val()
	 		var formData=new FormData();
	 		formData.append('logo',$('#up_logo')[0].files[0]);
	 		formData.append('id',id);
	 		$.ajax({
	 			url:"<?php echo url("","",true,false);?>",
	 			data:formData,
	 			type:'post',
	 			contentType:false,
	 			processData:false,
	 			cache:false,
	 			success:function(res){
	 				if(res.status=='error'){
	 				alert(res.data)
	 			}else{
	 				show()
	 			}
	 		}
	 	})
	 }

</script>