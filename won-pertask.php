<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>项目执行之个人主页</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- basic styles -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->

		<!-- fonts -->

		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

		<!-- ace styles -->

		<link rel="stylesheet" href="assets/css/ace.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->

		<script src="assets/js/ace-extra.min.js"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>
		<div class="navbar navbar-default" id="navbar">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<div class="navbar-header pull-left">
					<a href="#" class="navbar-brand">
						<small>
							创新平台管理系统
						</small>
					</a><!-- /.brand -->
				</div><!-- /.navbar-header -->

				<div class="navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="grey">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-tasks"></i>
								<span class="badge badge-grey">4</span>
							</a>

							<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="icon-ok"></i>
									还有414 个任务完成
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
									<i class="icon-warning-sign"></i>
									8条通知
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
										<i class="btn btn-xs btn-primary icon-user"></i>
										切换为编辑登录..
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
									<i class="icon-envelope-alt"></i>
									5条消息
								</li>

								<li>
									<a href="#">
										<img src="assets/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Alex:</span>
												不知道写啥 ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>1分钟以前</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="#">
										<img src="assets/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Susan:</span>
												不知道翻译...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>20分钟以前</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="#">
										<img src="assets/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Bob:</span>
												到底是不是英文 ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>下午3:15</span>
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
								<img class="nav-user-photo" src="assets/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>欢迎光临,</small>
									Jason
								</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#">
										<i class="icon-cog"></i>
										设置
									</a>
								</li>

								<li>
									<a href="#">
										<i class="icon-user"></i>
										个人资料
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="#">
										<i class="icon-off"></i>
										退出
									</a>
								</li>
							</ul>
						</li>
					</ul><!-- /.ace-nav -->
				</div><!-- /.navbar-header -->
			</div><!-- /.container -->
		</div>

		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div class="main-container-inner">
				<div class="sidebar" id="sidebar">
					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
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
					</div><!-- #sidebar-shortcuts -->

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
										<i class="icon-double-angle-right"></i>
										项目申报
										<b class="arrow icon-angle-down"></b>
									</a>
									<ul class="submenu">
										<li>
											<a href="won-addproj.html">
												申报项目
											</a>
										</li>

										<li>
											<a href="#" >
												审核发布
											</a>
										</li>

										<li>
											<a href="#" >
												报名参加
											</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="#" class="dropdown-toggle">
										<i class="icon-double-angle-right"></i>
										项目执行
										<b class="arrow icon-angle-down"></b>
									</a>
									<ul class="submenu">
										<li>
											<a href="#">
												个人主页
											</a>
										</li>
										<li>
											<a href="#" >
												项目进度
											</a>
										</li>
									</ul>
									<a href="#" >
										<i class="icon-double-angle-right"></i>
										历届项目公示										
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
										<i class="icon-double-angle-right"></i>
										个人主页
									</a>
								</li>
                                <li>
									<a href="won-login.html">
										<i class="icon-double-angle-right"></i>
										人员注册
									</a>
								</li>
								<li>
									<a href="#">
										<i class="icon-double-angle-right"></i>
										人员信息
									</a>
								</li>
							</ul>
						</li>
					</ul><!-- /.nav-list -->

					<div class="sidebar-collapse" id="sidebar-collapse">
						<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
					</div>
                    
					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
					</script>
				</div>

				<div class="main-content">
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<a href="#">项目管理</a>
							</li>

							<li>
								<a href="#">项目执行</a>
							</li>
							<li class="active">个人主页</li>
						</ul><!-- .breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="icon-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- #nav-search -->
					</div>
					<div class="page-content">
						<div class="page-header">
							<h1>
								个人主页
								<small>
									<i class="icon-double-angle-right"></i>
									详细信息
								</small>
							</h1>
						</div><!-- /.page-header -->
						<div class="col-sm-12">
							<div class="tabbable">
								<ul class="nav nav-tabs" id="myTab">
									<li class="active">
										<a data-toggle="tab" href="#join">
											参与的项目请求
											<span class="badge badge-danger">4</span>
										</a>
									</li>
									<li>
										<a data-toggle="tab" href="#found">
											创建的项目请求
											<span class="badge badge-danger">4</span>
										</a>
									</li>
									<li>
										<a data-toggle="tab" href="#proj-apply">
											立项申请
											<span class="badge badge-danger">4</span>
										</a>
									</li>
									<li>
										<a data-toggle="tab" href="#innovation">
											创新项目
											<span class="badge badge-danger">4</span>
										</a>
									</li>
									
								</ul>

								<div class="tab-content">
									<div id="join" class="tab-pane in active">
										<div class="table-header">
										参与的项目请求 
										</div>
										<div class="table-responsive">
											<table id="sample-table-2" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th>项目名称</th>
														<th>团队名称</th>
														<th>项目经费</th>
														<th class="hidden-480">请求创建者</th>

														<th class="hidden-480">
															<i class="icon-time "></i>
															最近更新
														</th>
														<th>
															项目状态
														</th>
													</tr>
												</thead>

												<tbody>	
													<?php
														
													for($i =0;$i<count($take_part);$i++){
													 	$arr = $take_part[$i];
													 ?>
													<tr>
														<td>
															<a href="#"><?php echo $arr[0]?></a>
														</td>
														<td>
															<a href="#"><?php echo $arr[1]?></a>
														</td>
														<td>$45</td>
														<td class="hidden-480"><?php echo $arr[2]?></td>
														<td><?php echo $arr[2]?></td>

														<td class="hidden-480">
															<span class="label label-sm label-warning"><?php echo $arr[4]?></span>
														</td>

													</tr>
													<?php } ?>
												</tbody>
											</table>
										</div>
									</div>
									<div id="found" class="tab-pane ">
										<div class="table-header">
										建立的项目请求*注意:项目信息填写完后会以草稿形式保存，在提交审核之前可以进行修改，
										若要提交,请进入项目页面点击提交审核，审核通过后将不能再次编辑
										</div>
										<div class="table-responsive">
											<table id="sample-table-2" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th>项目名称</th>
														<th>项目经费</th>
														<th class="hidden-480">请求创建者</th>

														<th class="hidden-480">
															<i class="icon-time "></i>
															最近更新
														</th>
														<th>项目状态</th>
														<th>团队名称</th>
													</tr>
												</thead>

												<tbody>
													<?php	
													for($i =0;$i<count($created);$i++){
													 	$arr = $created[$i];
													 ?>
													<tr>
														<td>
															<a href="#"><?php echo $arr[0]?></a>
														</td>
														<td>
															<a href="#"><?php echo $arr[1]?></a>
														</td>
														<td><?php echo $arr[2]?></td>
														<td class="hidden-480"><?php echo $arr[3]?></td>
														<td><?php echo $arr[4]?></td>

														<td class="hidden-480">
															<span class="label label-sm label-warning"><?php echo $arr[5]?></span>
														</td>

													</tr>
													<?php }?>
												</tbody>
											</table>
										</div>
									</div>

									<div id="proj-apply" class="tab-pane ">
										<div class="table-header">
										立项申请 
										</div>
										<div class="table-responsive">
											<table id="sample-table-2" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th>项目名称</th>
														<th>团队名称</th>
														<th>项目类型</th>
														<th class="hidden-480">项目负责人</th>
														<th class="hidden-480">
															<i class="icon-time "></i>
															最近更新
														</th>
														<th>项目状态</th>
													</tr>
												</thead>

												<tbody>
													<?php	
													for($i =0;$i<count($quest);$i++){
													 	$arr = $quest[$i];
													 ?>
													<tr>
														<td>
															<a href="#"><?php echo $arr[0]?></a>
														</td>
														<td>
															<a href="#"><?php echo $arr[1]?></a>
														</td>
														<td><?php echo $arr[2]?></td>
														<td class="hidden-480"><?php echo $arr[3]?></td>
														<td><?php echo $arr[4]?></td>

														<td class="hidden-480">
															<span class="label label-sm label-warning"><?php echo $arr[5]?></span>
														</td>

													</tr>
										        <?php } ?>
												</tbody>
											</table>
										</div>
									</div>

				                    <div id="innovation" class="tab-pane">
										<div class="table-header">
										创新项目 
										</div>
										<div class="table-responsive">
											<table id="sample-table-2" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th>项目名称</th>
														<th>团队名称</th>
														<th>项目类型</th>
														<th>项目经费</th>
														<th>起止时间</th>
													</tr>
												</thead>

												<tbody>
													<?php	
													for($i =0;$i<count($creative);$i++){
													 	$arr = $creative[$i];
													 ?>
													<tr>
														<td>
															<a href="#"><?php echo $arr[0]?></a>
														</td>
														<td><?php echo $arr[1]?></td>
														<td class="hidden-480"><?php echo $arr[2]?></td>
														<td><?php echo $arr[3]?></td>

														<td class="hidden-480">
															<span class="label label-sm label-warning"><?php echo $arr[4]?></span>
														</td>

													</tr>
												<?php } ?>
												</tbody>
											</table>
										</div>
									</div>

								</div>
							</div>
						</div><!-- /span -->
					</div>
				</div><!-- /.main-content -->



		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

		<!-- <![endif]-->


		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/typeahead-bs2.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->

		<script src="assets/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="assets/js/jquery.slimscroll.min.js"></script>
		<script src="assets/js/jquery.easy-pie-chart.min.js"></script>
		<script src="assets/js/jquery.sparkline.min.js"></script>
		<script src="assets/js/flot/jquery.flot.min.js"></script>
		<script src="assets/js/flot/jquery.flot.pie.min.js"></script>
		<script src="assets/js/flot/jquery.flot.resize.min.js"></script>

		<!-- ace scripts -->

		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->

	</body>
</html>

