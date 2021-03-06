<h2><?php echo lang('user_reset_password_title');?></h2>

<?php if(!empty($error_string)):?>
<div class="error-box"><?php echo $error_string;?></div>
<?php endif;?>

<?php echo form_open('users/reset_pass', array('id'=>'reset_pass')); ?>

<p class="float-left spacer-right">
	<label for="user_name"><?php echo lang('user_username') ?></label><br/>
	<input type="text" name="user_name" maxlength="40" value="<?php echo set_value('user_name'); ?>" />
</p>

<p>
	<label for="email"><?php echo lang('user_email') ?></label><br/>
	<input type="text" name="email" maxlength="100" value="<?php echo set_value('email'); ?>" />
</p>

<?php echo form_submit('btnSubmit', lang('user_reset_pass_btn')) ?>
<?php echo form_close(); ?>