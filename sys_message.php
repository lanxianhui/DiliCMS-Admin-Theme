<?php if ( ! defined('IN_DILICMS')) exit('No direct script access allowed');?>
<div class="row">
	<div class="col-md-4 col-md-offset-4 sys-message">
		<div class="box box-default">
			<div class="box-header with-border"> <i class="fa fa-warning"></i>
				<h3 class="box-title">提示信息</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<div class="alert alert-success alert-dismissable">
					<h4> <i class="icon fa fa-check"></i>
					<?php echo $msg; ?>!</h4>
					<br />
                    <br />
                    <br />
                    <br />
					<?php if($auto): ?>
					<script>
                            function redirect($url)
                            {
                                location = $url;
                            }
                            setTimeout("redirect('<?php echo $goto; ?>');", <?php echo $pause; ?>);</script>
					<a href="<?php echo $goto; ?>"><?php echo "页面正在自动转向，你也可以点此直接跳转！"; ?></a>
					<br />
                    <br />
                    <br />
                    <br />
					<?php endif; ?></div>
			</div>
			<!-- /.box-body -->
		</div>
	</div>
</div>