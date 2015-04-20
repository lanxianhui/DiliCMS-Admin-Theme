<?php if ( ! defined('IN_DILICMS')) exit('No direct script access allowed');?>
<?php $current_tab =  $this->input->get('tab') ? $this->input->get('tab') : 'site_basic' ; ?>
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>站点设置</h1>
	<ol class="breadcrumb">
		<li>
			<a> <i class="fa fa-dashboard"></i>
				系统
			</a>
		</li>
		<li>
			<a>系统设置</a>
		</li>
		<li class="active">站点设置</li>
	</ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<!-- Custom Tabs -->
			<div class="nav-tabs-custom">
				<ul class="nav nav-tabs">
					<li <?php echo $current_tab == 'site_basic' ? 'class="active"' : ''; ?>>
						<a href="#tab_1" data-toggle="tab">基本设置</a>
					</li>
					<li <?php echo $current_tab == 'site_status' ? 'class="active"' : ''; ?>>
						<a href="#tab_2" data-toggle="tab">站点状态</a>
					</li>
					<li <?php echo $current_tab == 'site_attachment' ? 'class="active"' : ''; ?>>
						<a href="#tab_3" data-toggle="tab">附件设置</a>
					</li>
					<li <?php echo $current_tab == 'site_terms' ? 'class="active"' : ''; ?>>
						<a href="#tab_4" data-toggle="tab">注册协议</a>
					</li>
					<li <?php echo $current_tab == 'site_theme' ? 'class="active"' : ''; ?>>
						<a href="#tab_5" data-toggle="tab">主题设置</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane <?php echo $current_tab == 'site_basic' ? 'active' : ''; ?>" id="tab_1">
						<!-- general form elements -->
						<div class="box box-primary">
							<!-- form start -->
							<?php echo form_open('setting/site?tab=site_basic'); ?>
							<div class="box-body">
								<div class="form-group">
									<label>站点名称：</label>
									<input type="text" class="form-control" name='site_name'  id="site_name" value="<?php echo $site->site_name; ?>"></div>
								<div class="form-group">
									<label>站点网址：</label>
									<input type="text" class="form-control" name='site_domain'  id="site_domain" value="<?php echo $site->site_domain; ?>"></div>
								<div class="form-group">
									<label>站点logo：</label>
									<input type="text" class="form-control" name='site_logo' id="site_logo" value="<?php echo $site->site_logo; ?>" ></div>
								<div class="form-group">
									<label>备案号：</label>
									<input type="text" class="form-control" name='site_icp' id="site_icp" value="<?php echo $site->site_icp; ?>" ></div>
								<div class="form-group">
									<label>统计代码：</label>
									<textarea class="form-control" rows="3" name='site_stats'  id="site_stats"><?php echo $site->site_stats; ?></textarea>
								</div>
								<div class="form-group">
									<label>站点底部：</label>
									<textarea name='site_footer'  id="site_footer" rows="10" cols="80"><?php echo $site->site_footer;?></textarea>
								</div>
								<div class="form-group">
									<label>站点关键字：</label>
									<input type="text" class="form-control" name='site_keyword' id="site_keyword" value="<?php echo $site->site_keyword; ?>"></div>
								<div class="form-group">
									<label>站点描述：</label>
									<input type="text" class="form-control" name='site_description' id="site_description" value="<?php echo $site->site_description; ?>" ></div>
							</div>
							<!-- /.box-body -->
							<div class="box-footer">
								<button type="submit" class="btn btn-primary">保存基本设置</button>
							</div>
							<?php echo form_close(); ?></div>
						<!-- /.box -->
					</div>
					<!-- /.tab-pane -->
					<div class="tab-pane <?php echo $current_tab == 'site_status' ? 'active' : ''; ?>" id="tab_2">
						<!-- general form elements -->
						<div class="box box-primary">
							<!-- form start -->
							<?php echo form_open('setting/site?tab=site_status') ?>
							<div class="box-body">
								<div class="form-group">
									<label>站点状态：</label>
									<div class="radio">
										<label>
											<input type="radio" name="site_status" value="1" <?php echo $site->site_status == 1 ? 'checked="checked"' : ''; ?>>开启</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="site_status" value="0" <?php echo $site->site_status == 0 ? 'checked="checked"' : ''; ?>>关闭</label>
									</div>
								</div>
								<div class="form-group">
									<label>站点关闭原因：</label>
									<textarea name='site_close_reason'  id="site_close_reason" rows="10" cols="80"><?php echo $site->site_close_reason;?></textarea>
								</div>
							</div>
							<!-- /.box-body -->
							<div class="box-footer">
								<button type="submit" class="btn btn-primary">保存站点状态</button>
							</div>
							<?php echo form_close(); ?></div>
						<!-- /.box -->
					</div>
					<!-- /.tab-pane -->
					<div class="tab-pane <?php echo $current_tab == 'site_attachment' ? 'active' : ''; ?>" id="tab_3">
						<!-- general form elements -->
						<div class="box box-primary">
							<!-- form start -->
							<?php echo form_open('setting/site?tab=site_attachment'); ?>
							<div class="box-body">
								<div class="form-group">
									<label>访问路径：(附件访问前缀，末尾不包含/)</label>
									<input type="text" class="form-control" name='attachment_url'  id="attachment_url" value="<?php echo $site->attachment_url; ?>" >
								</div>
								<div class="form-group">
									<label>上传路径：</label>
									<input type="text" class="form-control" name='attachment_dir'  id="attachment_dir" value="<?php echo $site->attachment_dir; ?>" >
								</div>
								<div class="form-group">
									<label>上传类型：</label>
									<input type="text" class="form-control" name='attachment_type'  id="attachment_type" value="<?php echo $site->attachment_type; ?>" >
								</div>
								<div class="form-group">
									<label>上传大小限制：</label>
									<input type="text" class="form-control" name='attachment_maxupload'  id="attachment_maxupload" value="<?php echo $site->attachment_maxupload; ?>"  >	
								</div>
							</div>
							<!-- /.box-body -->
							<div class="box-footer">
								<button type="submit" class="btn btn-primary">保存附件设置</button>
							</div>
							<?php echo form_close(); ?>
						</div>
						<!-- /.box -->
					</div>
					<!-- /.tab-pane -->
					<div class="tab-pane <?php echo $current_tab == 'site_terms' ? 'active' : ''; ?>" id="tab_4">
						<!-- general form elements -->
						<div class="box box-primary">
							<!-- form start -->
							<?php echo form_open('setting/site?tab=site_terms'); ?>
							<div class="box-body">
								<div class="form-group">
									<label>注册协议：</label>
									<textarea name='site_terms'  id="site_terms" rows="10" cols="80"></textarea>
								</div>	
							</div>
							<!-- /.box-body -->
							<div class="box-footer">
								<button type="submit" class="btn btn-primary">保存注册协议</button>
							</div>
							<?php echo form_close(); ?>
						</div>
						<!-- /.box -->
					</div>
					<!-- /.tab-pane -->
					<div class="tab-pane <?php echo $current_tab == 'site_theme' ? 'active' : ''; ?>" id="tab_5">
						<!-- general form elements -->
						<div class="box box-primary">
							<!-- form start -->
							<?php echo form_open('setting/site?tab=site_theme'); ?>
							<div class="box-body">
								<div class="form-group">
									<label>注册协议：</label>
									<input type="text" class="form-control" name='site_theme'  id="site_theme" value="default" >
								</div>	
							</div>
							<!-- /.box-body -->
							<div class="box-footer">
								<button type="submit" class="btn btn-primary">保存主题设置</button>
							</div>
							<?php echo form_close(); ?>
						</div>
						<!-- /.box -->
					</div>
					<!-- /.tab-pane -->
				</div>
				<!-- /.tab-content -->
			</div>
			<!-- nav-tabs-custom -->
		</div>
		<!-- /.col -->
	</div>
</section>
<!-- CK Editor -->
<script src="plugins/ckeditor/ckeditor.js"></script>
<script>
CKEDITOR.replace( 'site_footer' );
CKEDITOR.replace( 'site_close_reason' );
CKEDITOR.replace( 'site_terms' );
</script>