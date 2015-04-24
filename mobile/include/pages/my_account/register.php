<div class="pull-right dialog-header">
	<span class="blue">Sign in</span> | <a href="javascript:showCreateAccountPopUp();">Register</a>
</div>
<div class="clearfix"></div>

<form role="form">
	<div class="form-group">
		<label for="email">E-mail address</label>
		<input type="text" class="form-control" id="email" name="email" />
	</div>
	<div class="form-group">
		<label for="password">Password | <a href="javascript:showLostPassword();">Forgotten your password?</a></label>
		<input type="text" class="form-control" id="password" name="password" />
	</div>
	<button type="submit" class="btn btn-default center-block">sign in</button>
</form>

<br />
<div class="pull-left">
	<input type="checkbox" />
	<label> Remember me</label>
</div>
<div class="pull-right">
	<a href="javascript:removeWindow('dialog_ajax');"><i class="fa fa-times-circle-o"></i>cancel</a>
</div>
<div class="clearfix"></div>