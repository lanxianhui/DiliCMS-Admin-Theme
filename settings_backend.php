<?php if ( ! defined('IN_DILICMS')) exit('No direct script access allowed');?>
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>后台设置</h1>
	<ol class="breadcrumb">
		<li>
			<a> <i class="fa fa-dashboard"></i>
				系统
			</a>
		</li>
		<li>
			<a>系统设置</a>
		</li>
		<li class="active">后台设置</li>
	</ol>
</section>
<!-- Main content -->
<section class="content">
	<div class="row">
		<!-- left column -->
		<div class="col-md-12">
			<!-- general form elements -->
			<div class="box box-primary">
				<!-- form start -->
				<?php echo form_open('setting/backend'); ?>
				<div class="box-body">
					<div class="form-group">
						<label>后台主题：(暂不开放)</label>
						<input type="text" class="form-control"  name="backend_theme" value="<?php echo $backend->backend_theme; ?>" disabled="disabled" autocomplete="off"></div>
					<div class="form-group">
						<label>后台语言：(暂不开放)</label>
						<input type="text" class="form-control" name="backend_lang"  value="<?php echo $backend->backend_lang; ?>" disabled="disabled" autocomplete="off"></div>
					<div class="form-group">
						<label>后台入口：(若改变，请务必相应的地方如文件夹名称等.)</label>
						<input type="text" class="form-control" name="backend_access_point" value="<?php echo $backend->backend_access_point; ?>" disabled="disabled" autocomplete="off">
					</div>
					<div class="form-group">
						<label>后台网页标题：(用于显示网页标题)</label>
						<input type="text" class="form-control" name="backend_title" value="<?php echo $backend->backend_title; ?>" autocomplete="off"></div>
					<div class="form-group">
						<label>后台LOGO：(左上角LOGO自定义路径)</label>
						<input type="text" class="form-control" name="backend_logo" value="<?php echo $backend->backend_logo; ?>" autocomplete="off"></div>
					<div class="form-group">
						<label>插件开发模式：(开启该选项后每次请求都会自动刷新插件缓存，非插件开发时候请勿开启)</label>
						<div class="radio">
							<label>
								<input type="radio" name="plugin_dev_mode" <?php echo $backend->plugin_dev_mode ? 'checked="checked"' :''; ?> value="1" >开启</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="plugin_dev_mode" value="0" <?php echo !$backend->plugin_dev_mode ? 'checked="checked"' :''; ?> >关闭</label>
						</div>
					</div>
					<div class="form-group">
						<label>是否允许root用户登录：</label>
						<div class="radio">
							<label>
								<input type="radio" name="backend_root_access" <?php echo $backend->backend_root_access ? 'checked="checked"' :''; ?> value="1" >开启
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="backend_root_access" value="0" <?php echo !$backend->backend_root_access ? 'checked="checked"' :''; ?> >关闭</label>
						</div>
					</div>
					<div class="form-group">
						<label>HTTP BASIC AUTH：</label>
						<div class="radio">
							<label>
								<input type="radio" name="backend_http_auth_on" <?php echo $backend->backend_http_auth_on ? 'checked="checked"' :''; ?> value="1" >开启
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="backend_http_auth_on" value="0" <?php echo !$backend->backend_http_auth_on ? 'checked="checked"' :''; ?> >关闭</label>
						</div>
					</div>

					<div class="form-group">
						<label>BASIC AUTH 用户名：</label>
						<input type="text" class="form-control"  name="backend_http_auth_user" value="<?php echo $backend->backend_http_auth_user; ?>" autocomplete="off"></div>

					<div class="form-group">
						<label>BASIC AUTH 密码：</label>
						<input type="text" class="form-control"  name="backend_http_auth_password" value="<?php echo $backend->backend_http_auth_password; ?>" autocomplete="off"></div>

				</div>
				<!-- /.box-body -->

				<div class="box-footer">
					<button type="submit" class="btn btn-primary">保存后台设置</button>
				</div>
				<?php echo form_close(); ?></div>
			<!-- /.box -->
		</div>
		<!--/.col (left) -->
	</div>
	<!-- /.row -->
</section>