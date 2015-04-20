<?php if ( ! defined('IN_DILICMS')) exit('No direct script access allowed');?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>修改密码</h1>
  <ol class="breadcrumb">
    <li>
      <a> <i class="fa fa-dashboard"></i>
        系统
      </a>
    </li>
    <li class="active">修改密码</li>
  </ol>
</section>
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <!-- form start -->
        <?php echo form_open('system/password'); ?>
          <div class="box-body">
            <div class="form-group">
              <label >旧密码：</label>
              <input class="form-control" name='old_pass' type='password' id="old_pass">
              <label class="control-label"><?php echo form_error('old_pass'); ?></label>
              </div>
            <div class="form-group">
              <label >新密码：</label>
              <input class="form-control" name='new_pass' type='password' id="new_pass">
              <label class="control-label"><?php echo form_error('new_pass'); ?></label>
              </div>
            <div class="form-group">
              <label >确认新密码：</label>
              <input class="form-control" name='new_pass_confirm' type='password' id="new_pass_confirm">
              <label class="control-label"><?php echo form_error('new_pass_confirm'); ?></label>
              </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">保 存</button>
          </div>
      <?php echo form_close(); ?>
      </div>
      <!-- /.box --> </div>
  </div>
</section>