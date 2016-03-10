<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8" />
		<title>立项申请</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- basic styles -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" />
		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="assets/css/datepicker.css" />
		<!-- fonts -->

		<!-- ace styles -->

		<link rel="stylesheet" href="assets/css/ace.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->
		<link rel="stylesheet" href="assets/css/chosen.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-timepicker.css" />
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
										<img src="assets/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
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
									<a href="#">
										<img src="assets/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Susan:</span> 不知道翻译...
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
												<span class="blue">Bob:</span> 到底是不是英文 ...
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
											<a href="#">
												审核发布
											</a>
										</li>

										<li>
											<a href="#">
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
											<a href="#">
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
										<i class="icon-double-angle-right"></i> 人员注册
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
								<a href="#">立项新增信息</a>
							</li>
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
					<div class="page-content">
						<div class="alert alert-info">

							<strong>
								<i class="icon-bullhorn"></i>
								 项目已经申报成功！现在请继续完善立项信息
							</strong>

						</div>
						<!--
                        	作者：1043095705@qq.com
                        	时间：2015-11-21
                        	描述：insert picture
                        -->
                       
						<?php echo $error;?>
						<div class="row">
							<?php echo form_open_multipart('upload/do_upload');?>

							<div class="col-sm-6">
								<div class="widget-box">
								
									<div>

										<h4><i class="icon-upload purple">上传项目图片</i></h4>

										<span class="widget-toolbar">
											<a href="#" data-action="collapse">
												<i class="icon-chevron-up"></i>
											</a>			
										</span>
									</div>
									
									<div>
										<div>
										
											<input type="file" name="userfile" size="20" id="id-input-file-3"/>
											<label>
												<input type="checkbox" checked="checked" id="id-file-format" />
												<span class="lbl"> 仅允许图片</span>
											</label>
										</div>	
									</div>
								</div>
							</div>

							<div class="col-sm-8">
								<h4>
									<i class="icon-edit purple"></i>
									<a href="#modal-form" role="button" class="purple" data-toggle="modal">编辑团队排期</a>
								</h4>
								<table class="table-bordered col-sm-12 " id="arrange">
									<tr class="text-center">
										<th class="text-center">姓 名</th>
										<th class="text-center">任 务</th>
										<th class="text-center">截止时间</th>
										<th class="text-center">操 作</th>
									</tr>
								</table>
							</div>

							<div class="col-sm-8">
								<h4>
									<i class="icon-group minimized purple"></i>
									<a href="#modal-form" role="button" class="purple" data-toggle="modal">创建队名</a>
								</h4>
								<div>
									<input type="text" name="teamName" class="col-sm-12">
								</div>
							</div>

							<div class="col-sm-8">
								<h4>
									<i class="icon-compass minimized purple"></i>
									<a href="#modal-form" role="button" class="purple" data-toggle="modal">源码地址 </a>
								</h4>
								<div>
									<input type="url" name="codeaddress" class="col-sm-12">
									
								</div>
							</div>
							
							<div class="col-xs-12">
								<br />
							    <span class="btn btn-info btn-sm" id="confirm" ><input type="submit" value="upload" /></span>
							</div>

							</form>
							<div id="modal-form" class="modal" tabindex="-1">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" id="submit" class="close" data-dismiss="modal">&times;</button>
											<h4 class="blue bigger">添 加 排 期</h4>
										</div>

										<div class="modal-body overflow-visible">
											<div class="row">
												<div class="col-xs-12 col-sm-7">
													<div class="form-group">
														<label for="form-field-select-3">姓 名</label>

														<div>
															<select class="chosen-select" data-placeholder="请选择一位队员……">
															<?php for($k =0;$k<count($u_name);$k++){?>
																<option value="<?php echo $u_id[$k]?>"><?php echo $u_name[$k]?></option>
																<?php }?>
															</select>
														</div>
													</div>

													<div class="space-4"></div>

													<div class="form-group">
														<label for="form-field-username">任 务</label>

														<div>
															<input class="input-large" type="text" name ="task" id="form-field-username" placeholder="Username" value="任务简述……" />
														</div>
													</div>

													<div class="space-4"></div>

													<div class="form-group">

														<div class="input-group padding-0">
															<label>截止时间</label>
															<input class="form-control input-mask-date" type="text"id="form-field-mask-1" />

														</div>

													</div>
												</div>
											</div>
										</div>

										<div class="modal-footer">
											<button class="btn btn-sm" data-dismiss="modal">
												<i class="icon-remove"></i> 取 消
											</button>

											<button class="btn btn-sm btn-primary" id="save-button">
												<i class="icon-ok"></i> 保存并添加
											</button>
										</div>
										
									</div>
								</div>
							</div>
						</div>
						<!-- /.main-content -->

					</div>
					<!-- /.main-container -->

					<!-- basic scripts -->

					<!--[if !IE]> -->

					<script src="assets/js/jquery-2.0.3.min.js"></script>

					<!-- <![endif]-->

					<script src="assets/js/bootstrap.min.js"></script>
					<script src="assets/js/typeahead-bs2.min.js"></script>

					<!-- page specific plugin scripts -->

					<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->

					<script src="assets/js/jquery-ui-1.10.3.custom.min.js"></script>
					<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
					<script src="assets/js/chosen.jquery.min.js"></script>
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
					<script src="assets/js/date-time/bootstrap-datepicker.min.js"></script>
					<script src="assets/js/date-time/moment.min.js"></script>
					<script src="assets/js/jquery.maskedinput.min.js"></script>
					<script>
						//$(function() {
							
							$('#id-input-file-3').ace_file_input({
								style: 'well',
								btn_choose: '拖拽或者点击来选择图片',
								btn_change: null,
								no_icon: 'icon-cloud-upload ',
								droppable: true,
								thumbnail: 'fit' //large | fit
									//,icon_remove:null//set null, to hide remove/reset button
									/**,before_change:function(files, dropped) {
										//Check an example below
										//or examples/file-upload.html
										return true;
									}*/
									/**,before_remove : function() {
										return true;
									}*/
									,
								preview_error: function(filename, error_code) {
									//name of the file that failed
									//error_code values
									//1 = 'FILE_LOAD_FAILED',
									//2 = 'IMAGE_LOAD_FAILED',
									//3 = 'THUMBNAIL_FAILED'
									//alert(error_code);
								}
							}).on('change', function() {
								//console.log($(this).data('ace_input_files'));
								//console.log($(this).data('ace_input_method'));
							});

							$(".chosen-select").chosen();
							$('#chosen-multiple-style').on('click', function(e) {
								var target = $(e.target).find('input[type=radio]');
								var which = parseInt(target.val());
								if (which == 2) $('#form-field-select-4').addClass('tag-input-style');
								else $('#form-field-select-4').removeClass('tag-input-style');
							});
							$('#modal-form').on('shown.bs.modal', function() {
								$(this).find('.chosen-container').each(function() {
									$(this).find('a:first-child').css('width', '210px');
									$(this).find('.chosen-drop').css('width', '210px');
									$(this).find('.chosen-search input').css('width', '200px');
								});
							})
							$('.date-picker').datepicker({
								autoclose: true
							}).next().on(ace.click_event, function() {
								$(this).prev().focus();
							});
							$.mask.definitions['~'] = '[+-]';
							$('.input-mask-date').mask('9999/99/99');

							$('#save-button').on("click", function() {
								$('#modal-form').modal("hide");
								var name = $('.chosen-single span').html();
								var task = $('#form-field-username').val();
								var time = $('#form-field-mask-1').val();
								var str = '<tr class="text-center"><td>' + name + '</td><td>' + task + '</td><td>' + time + '</td><td ><i class="icon-remove" id="data-remove"></i></td></tr>';
								$('table').append(str);

								$('#data-remove').on('click', function() {
								$(this).parent().parent().remove();
								});	

								var s3 = document.getElementById('arrange');//获得安排表格
								var schedule = new Array();
								for(var i = 1;i < s3.rows.length;i++){
	            					for(var j = 0;j<s3.rows[i].cells.length-1;j++){  
	               						 alert(s3.rows[i].cells[j].innerHTML);	       //获取表格的值     
	               						//schedule[i][j] = s3.rows[i].cells[j].innerHTML;
	               						//alert(schedule[i][j]);
           							} 
           						}
           					});
						
						/*$("#confirm").on('click', function() {
							$.ajax({
								url:'do_upload',
								type:'post',
								data:{sche:JSON.stringify(schedule)},
								async:true,//是否同步刷新
								datatype:'json',
								//alert(sche);
								error:function() {
									alert('error');
								},
								success:function(result) {        
									alert(result);
									}
									if(result == 2) {
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
										$('#form').submit();
										parent.location.reload();
								}) 
							}) 
						
						//})*/
					</script>

	</body>

</html>