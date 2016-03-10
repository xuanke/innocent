<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8" />
		<title>添加人员</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- basic styles -->

		<link href="<?php echo site_url();?>assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="<?php echo site_url();?>assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="<?php echo site_url();?>assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->

		<!-- fonts -->
		<link rel="stylesheet" href="<?php echo site_url();?>assets/css/jquery-ui-1.10.3.full.min.css" />
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

		<!-- ace styles -->

		<link rel="stylesheet" href="<?php echo site_url();?>assets/css/ace.min.css" />
		<link rel="stylesheet" href="<?php echo site_url();?>assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="<?php echo site_url();?>assets/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="<?php echo site_url();?>assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->

		<script src="<?php echo site_url();?>assets/js/ace-extra.min.js"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="<?php echo site_url();?>assets/js/html5shiv.js"></script>
		<script src="<?php echo site_url();?>assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="modal-open">
		<div class="navbar navbar-default" id="navbar">
			<script type="text/javascript">
				try {
					ace.settings.check('navbar', 'fixed')
				} catch (e) {}
			</script>

			<div class="navbar-container" id="navbar-container">
				<div class="navbar-header pull-left">
					<a href="#" class="navbar-brand">
						<small>
							创新平台管理系统
						</small>
					</a>
					<!-- /.brand -->
				</div>
				<!-- /.navbar-header -->

				<div class="navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="grey">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-tasks"></i>
								<span class="badge badge-grey">4</span>
							</a>

							<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="icon-ok"></i> 还有414 个任务完成
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">软件更新</span>
											<span class="pull-right">65%</span>
										</div>

										<div class="progress progress-mini ">
											<div style="width:65%" class="progress-bar "></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">硬件更新</span>
											<span class="pull-right">35%</span>
										</div>

										<div class="progress progress-mini ">
											<div style="width:35%" class="progress-bar progress-bar-danger"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">单元测试</span>
											<span class="pull-right">15%</span>
										</div>

										<div class="progress progress-mini ">
											<div style="width:15%" class="progress-bar progress-bar-warning"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">错误修复</span>
											<span class="pull-right">90%</span>
										</div>

										<div class="progress progress-mini progress-striped active">
											<div style="width:90%" class="progress-bar progress-bar-success"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										查看任务详情
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="purple">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-bell-alt icon-animated-bell"></i>
								<span class="badge badge-important">8</span>
							</a>

							<ul class="pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="icon-warning-sign"></i> 8条通知
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-pink icon-comment"></i>
												新闻评论
											</span>
											<span class="pull-right badge badge-info">+12</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<i class="btn btn-xs btn-primary icon-user"></i> 切换为编辑登录..
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-success icon-shopping-cart"></i>
												新订单
											</span>
											<span class="pull-right badge badge-success">+8</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-info icon-twitter"></i>
												粉丝
											</span>
											<span class="pull-right badge badge-info">+11</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										查看所有通知
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="green">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-envelope icon-animated-vertical"></i>
								<span class="badge badge-success">5</span>
							</a>

							<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="icon-envelope-alt"></i> 5条消息
								</li>

								<li>
									<a href="#">
										<img src="<?php echo site_url();?>assets/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Alex:</span> 不知道写啥 ...
										</span>

										<span class="msg-time">
												<i class="icon-time"></i>
												<span>1分钟以前</span>
										</span>
										</span>
									</a>
								</li>

								<li>
									<a href="inbox.html">
										查看所有消息
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="<?php echo site_url();?>assets/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>欢迎光临,</small>
									Jason
								</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#">
										<i class="icon-cog"></i> 设置
									</a>
								</li>

								<li>
									<a href="#">
										<i class="icon-user"></i> 个人资料
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="#">
										<i class="icon-off"></i> 退出
									</a>
								</li>
							</ul>
						</li>
					</ul>
					<!-- /.ace-nav -->
				</div>
				<!-- /.navbar-header -->
			</div>
			<!-- /.container -->
		</div>

		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try {
					ace.settings.check('main-container', 'fixed')
				} catch (e) {}
			</script>

			<div class="main-container-inner">
				<div class="sidebar" id="sidebar">
					<script type="text/javascript">
						try {
							ace.settings.check('sidebar', 'fixed')
						} catch (e) {}
					</script>

					<div class="sidebar-shortcuts" id="sidebar-shortcuts">
						<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
							<button class="btn btn-success">
								<i class="icon-signal"></i>
							</button>

							<button class="btn btn-info">
								<i class="icon-pencil"></i>
							</button>

							<button class="btn btn-warning">
								<i class="icon-group"></i>
							</button>

							<button class="btn btn-danger">
								<i class="icon-cogs"></i>
							</button>
						</div>

						<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
							<span class="btn btn-success"></span>

							<span class="btn btn-info"></span>

							<span class="btn btn-warning"></span>

							<span class="btn btn-danger"></span>
						</div>
					</div>
					<!-- #sidebar-shortcuts -->

					<ul class="nav nav-list">
						<li class="active">
							<a href="won-index.html">
								<i class="icon-dashboard"></i>
								<span class="menu-text"> 首页 </span>
							</a>
						</li>
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-desktop"></i>
								<span class="menu-text"> 项目管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="#" class="dropdown-toggle">
										<i class="icon-double-angle-right"></i> 项目申报
										<b class="arrow icon-angle-down"></b>
									</a>
									<ul class="submenu">
										<li>
											<a href="won-addproj.html">
												申报项目
											</a>
										</li>

										<li>
											<a href="won-checkpost.html">
												审核发布
											</a>
										</li>

										<li>
											<a href="won-signup.html">
												报名参加
											</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="#" class="dropdown-toggle">
										<i class="icon-double-angle-right"></i> 项目执行
										<b class="arrow icon-angle-down"></b>
									</a>
									<ul class="submenu">
										<li>
											<a href="won-personal.html">
												个人主页
											</a>
										</li>
										<li>
											<a href="#">
												项目进度
											</a>
										</li>
									</ul>
									<a href="#">
										<i class="icon-double-angle-right"></i> 历届项目公示
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 实验室人员管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>
							<ul class="submenu">
								<li>
									<a href="#">
										<i class="icon-double-angle-right"></i> 个人中心
									</a>
								</li>
								<li>
									<a href="won-login.html">
										<i class="icon-double-angle-right"></i> 添加人员
									</a>
								</li>
								<li>
									<a href="#">
										<i class="icon-double-angle-right"></i> 人员信息
									</a>
								</li>
							</ul>
						</li>
					</ul>
					<!-- /.nav-list -->

					<div class="sidebar-collapse" id="sidebar-collapse">
						<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
					</div>

					<script type="text/javascript">
						try {
							ace.settings.check('sidebar', 'collapsed')
						} catch (e) {}
					</script>
				</div>

				<div class="main-content">
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try {
								ace.settings.check('breadcrumbs', 'fixed')
							} catch (e) {}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="#">实验室管理</a>
							</li>
							<li class="active">添加人员详情</li>
						</ul>
						<!-- .breadcrumb -->
						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="icon-search nav-search-icon"></i>
								</span>
							</form>
						</div>
						<!-- #nav-search -->
					</div>
					<form class="row col-sm-12">
						<table id="sample-table-2" class="table table-striped table-bordered table-hover">
							<thead>
								<h3 class="blue">已添加名单如下<i class="icon-double-angle-right "></i></h3>
							</thead>
							<tbody>
								<tr>
								<?php
										//echo count($studentId);
									for($i=0;$i<count($student);$i++) {
										$Number = $student[$i];
								?>
											
											<td><?php echo $Number['studentId'];?>
												<button><i class="icon-remove red bigger-140"></i></button>
											</td>

										<?php
										if(($i % 5 == 4)&&($i>0)){
											echo "</tr><tr>";
										}
										}
										
										?>

							</tbody>
						</table>
						<div id="pagination">
						<?php   echo $page_list;?>
						</div>
						<a class="btn btn-primary" id="add-user">添 加</a>

				</div>

				</form>
				<!-- /.main-content -->

			</div>
			<!-- /.main-container-inner -->
			<div class="ui-dialog ui-widget ui-widget-content ui-corner-all" style="height: auto; width: 300px; top: 71px; left: 561px;display:none" id="add-user-modal">
				<div class="ui-dialog-titlebar ui-widget-header ">
					<span class="ui-dialog-title">
						<div class="widget-header">
							<h4 class="smaller">添加人员</h4>
						</div>
						<button id="close-modal" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-icon-only ui-dialog-titlebar-close"><span class="ui-button-icon-primary ui-icon ui-icon-closethick"></span><span class="ui-button-text">close</span></button>
					</span>
				</div>
				<form action="" style="padding:20px;">
					<div class="form-group clearfix">
						<label class="col-sm-3 control-label">学号</label>
						<div class="col-sm-9">
							<input type="text" id="form-field-1" placeholder="Username" class="form-control">
						</div>
					</div>
					<div class="form-group clearfix">
						<div class="pull-right">
							<button type="button" class="btn btn-primary ui-button">
								<span class="ui-button-text" id ="add">
									确 定
								</span>
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<script src="<?php echo site_url();?>assets/js/jquery-2.0.3.min.js"></script>
		<!-- /.main-container -->
		<script>
			$(function() {
				$('#pagination strong').each(function() {
					$(this).wrapAll("<li><a></a></li>");
				});
				$('#pagination a').each(function() {
					$(this).wrapAll("<li></li>");
				});
				$('#pagination li').wrapAll('<ul></ul>');
				$('#pagination ul').addClass("pagination");
			});
		</script>
		<!-- basic scripts -->

		<!--[if !IE]> -->

		<!-- <![endif]-->

		<script src="<?php echo site_url();?>assets/js/bootstrap.min.js"></script>
		<script src="<?php echo site_url();?>assets/js/typeahead-bs2.min.js"></script>
		<script src="<?php echo site_url();?>assets/js/bootstrap-modal.js"></script>
		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->

		<script src="<?php echo site_url();?>assets/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="<?php echo site_url();?>assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="<?php echo site_url();?>assets/js/jquery.slimscroll.min.js"></script>
		<script src="<?php echo site_url();?>assets/js/jquery.easy-pie-chart.min.js"></script>
		<script src="<?php echo site_url();?>assets/js/jquery.sparkline.min.js"></script>
		<script src="<?php echo site_url();?>assets/js/flot/jquery.flot.min.js"></script>
		<script src="<?php echo site_url();?>assets/js/flot/jquery.flot.pie.min.js"></script>
		<script src="<?php echo site_url();?>assets/js/flot/jquery.flot.resize.min.js"></script>

		<!-- ace scripts -->

		<script src="<?php echo site_url();?>assets/js/ace-elements.min.js"></script>
		<script src="<?php echo site_url();?>assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<div style="display:none">
			<script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script>
		</div>
		<script>
			$(function() {
			    $(".icon-remove").on("click", function() {
			    	$(this).parent().parent().remove();
			    	var tdvalue =  $(this).parent().parent().text();
			    	//alert(tdvalue);
			    	//console.log(tdvalue);
			    	$.ajax({
			    		url:'delete_person',
			    		type:'post',
			    		data:{id:tdvalue},
			    		async:false,
			    		datatype:'text',
			    		error:function() {
			    			alert('error');
			    			
			    		},
			    		success:function(result) {
			    			if(result == 1)
			    				alert('删除成功');
			    			else
			    				alert('删不了！');
			    		}
			    	});
			    });
			    
				$("#add-user").on("click", function() {
					$("#add-user-modal").css("display", "block");
				});
				$("#close-modal").on("click", function() {
					$("#add-user-modal").css("display", "none");
				});
				$("#add").click(function() {
					var value = document.getElementById("form-field-1").value;
					//alert(value);
					//
					//验证用户
					$.ajax({
						url:'check_person',
						type:'post',
						data:{id:value,labid:0},
						async:true,//是否同步刷新
						datatype:'text',
						error:function() {
							alert('error');
						},
						success:function(result) {        
							if(result==1){
								alert('添加成功！')
							}else{
								if(result==2)
									alert('添加过了！');
								else
									alert('添加失败！');
							}
							/*if(result == 2) {
								alert(result);								
							}else {
								 //更新用户实验室信息
								$.ajax({
									url:'add_person',
									type:'post',
									data:{studentid:value},
									async:true,
									datatype:'text',
									error:function() {
										alert('error');
									},
									success:function(result) {      
										if(result == 0)
											alert('添加失败');
										else{
											if(result ==2)
												alert('添加过了！')
											else
												alert('添加成功');
										}
											
									},
								})
								//$('#form').submit();*/
								parent.location.reload();
						}
					});		
				});
			});
		</script>
	</body>

</html>