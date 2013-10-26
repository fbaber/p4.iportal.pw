<!DOCTYPE html>
<html>
<body>
	<p><b>You have signed up</b>
	</p>
	<frame>
	<?php $this->template->content = View::instance('v_users_login'); ?>
     	<?php $this->template->content->error = $error; ?>
		<?php echo $this->template; ?>
	</frame>
</body>
</html>
