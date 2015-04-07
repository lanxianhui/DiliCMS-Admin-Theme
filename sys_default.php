<?php if ( ! defined('IN_DILICMS')) exit('No direct script access allowed');?>
<?php if(file_exists(BASEPATH.'../install')): ?>
<div class="callout callout-info">您的安装目录没有删除，为了系统安全，请尽快删除！</div>
<?php endif; ?>
<div class="callout callout-info" id="lower_ie" style="display:none">
	系统检测到你使用的浏览器为IE8以下的版本(含IE核心的浏览器)，为了更好的体验，请使用IE8以上的或者其他主流的浏览器进行浏览！
</div>
<section class="content">
	<div class="row">
		<div class="col-md-6">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">
						平台信息(
						<?php echo $this->platform->get_name(); ?>)</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body no-padding">
					<table class="table table-striped">
						<tbody>
							<tr>
								<td>网站名称</td>
								<td>
									<?php echo setting('site_name'); ?></td>
							</tr>
							<tr>
								<td>平台版本</td>
								<td>
									<?php echo DILICMS_VERSION; ?>
									(CI:
									<?php echo CI_VERSION; ?>)</td>
							</tr>
							<tr>
								<td>脚本语言</td>
								<td>
									<?php echo 'PHP'.PHP_VERSION; ?></td>
							</tr>
							<tr>
								<td>数据库</td>
								<td>
									<?php echo 'MySQL'.$this->db->version();  ?></td>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- /.box-body -->
			</div>
		</div>
		<div class="col-md-6">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">管理员</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body no-padding">
					<table class="table table-striped">
						<tbody>
							<tr>
								<td>当前帐号</td>
								<td>
									<?php echo $this->_admin->username; ?></td>
							</tr>
							<tr>
								<td>所属用户组</td>
								<td>
									<?php echo $this->_admin->name; ?></td>
							</tr>
							<tr>
								<td>登录IP</td>
								<td>
									<?php echo $this->input->ip_address(); ?></td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td>
									<a href="<?php echo backend_url('system/password'); ?>">修改密码</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- /.box-body -->
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">网站</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body no-padding">
					<table class="table table-striped">
						<tbody>
							<tr>
								<td>网站域名</td>
								<td>
									<?php echo $_SERVER['SERVER_NAME']; ?></td>
							</tr>
							<tr>
								<td>网站IP</td>
								<td>
									<?php echo getHostByName(php_uname('n')).':'.$_SERVER['SERVER_PORT']; ?></td>
							</tr>
							<tr>
								<td>当前编码</td>
								<td>UTF-8</td>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- /.box-body -->
			</div>
		</div>
		<div class="col-md-6">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">服务器</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body no-padding">
					<table class="table table-striped">
						<tbody>
							<tr>
								<td>当前时区</td>
								<td>
									<?php echo date_default_timezone_get(); ?></td>
							</tr>
							<tr>
								<td>上传上限</td>
								<td>
									<?php echo @ini_get('upload_max_filesize'); ?></td>
							</tr>
							<tr>
								<td>SimpleXMLElement支持</td>
								<td>
									<?php echo (class_exists('SimpleXMLElement')) ? '支持' : '不支持'; ?></td>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- /.box-body -->
			</div>
		</div>
	</div>
</section>
<script language="javascript">
if ( $.browser.msie && parseInt($.browser.version) < 8 ) {
		$('#lower_ie').show();
	}
</script>