<?php include 'includes/core/document_head.php'?>
	<div id="pjax">
		<div id="wrapper">
			<div class="isolate">
				<div class="center narrow" style="margin-top:100px;">
					<div class="main_container full_size container_16 clearfix">
						<div class="box">
							<div class="block">

								<form class="form-horizontal" style="margin: 0px 0 0; padding-top:20px;" action="layout.php">
					        <fieldset>
					          <div class="control-group">
					            <label class="control-label" for="input01">Email</label>
					            <div class="controls">
					              <input type="text" class="input-large" id="input01">
					            </div>
					          </div>
					          <div class="control-group">
					            <label class="control-label" for="input01">Password</label>
					            <div class="controls">
					              <input type="password" class="input-large" id="input01">
					            </div>
					          </div>

					          <div class="control-group">
					          	<div class="controls">
					            	<button type="submit" class="btn">Login</button>
					          	</div>
					          </div>
					        </fieldset>
				        </form>
							</div>
						</div>
					</div>
					<a href="index.php" id="login_logo"><span>Adminica</span></a>
					<button data-dialog="dialog_register" class="btn btn-inverse dialog_button send_right" style="margin-top:10px;">
						<img src="images/icons/small/white/user.png">
						<span>Not Registered ?</span>
					</button>
				</div>
			</div>
		<?php include 'includes/dialogs/dialog_register.php'?>
<?php include 'includes/core/document_foot.php'?>