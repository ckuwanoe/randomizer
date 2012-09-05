<?php include 'includes/core/document_head.php'?>
	<div id="pjax">
		<div id="wrapper" data-adminica-nav-top="2" data-adminica-side-top="2" class="has_fixed_bar">
			<?php include 'includes/components/topbar.php'?>
			<?php include 'includes/components/sidebar.php'?>
			<?php include 'includes/components/stackbar.php'?></div><!-- Closing Div for Stack Nav, you can boxes under the stack before this -->

			<?php include 'includes/components/navbar-fixed.php'?>
			<div id="main_container" class="main_container container_16 clearfix">
				<?php include 'includes/components/navigation.php'?>
				<?php include("includes/breadcrumb.php"); ?>
				<div class="grid_16">
			  	<div class="page-header">
				    <h1>Grid System
					    <small>960 fluid grid system<small>
				    </h1>
			  	</div>
			  	<p>Adminica uses the 960 fluid grid system but it also includes the default Bootstrap grid system. For info <strong>check out the <a href="http://twitter.github.com/bootstrap/">Bootstrap Documentation</a></strong>.</p>
				</div>

				<div class="grid_16">
					<div class="navbar">
						<div class="navbar-inner">
						  <div class="container-fluid">
							  <ul class="nav">
					        <li class="">
					          <a href="#" data-toggle-class="grid_16">Grid 16</a>
					        </li>
					        <li class="divider-vertical"></li>
					        <li class="">
					          <a href="#" data-toggle-class="grid_8"">Grid 8</a>
					        </li>
					        <li class="divider-vertical"></li>
					        <li>
					          <a href="#" data-toggle-class="grid_4">Grid 4</a>
					        </li>
					        <li class="divider-vertical"></li>
					        <li class="push-right">
					          <a href="#" data-toggle-class="*">Toggle ALL</a>
					        </li>
					      </ul>
						  </div>
						</div>
					</div>
				</div>

				<div class="box grid_16">
					<h2 class="box_head">Grid_16</h2>
					<div class="controls">
						<a href="#" class="grabber"></a>
						<a href="#" class="toggle"></a>
					</div>
					<div class="toggle_container">
						<div class="block lines">
							<div class="columns clearfix">
								<div class="col_50 no_border_top">
									<div class="section">
										<p>50% content</p>
									</div>
								</div>
								<div class="col_50 no_border_top no_border_right">
									<div class="section">
										<p>50% content</p>
									</div>
								</div>
							</div>
							<div class="columns clearfix">
								<div class="col_50">
									<div class="section">
										<p>50% content</p>
									</div>
								</div>
								<div class="col_50 no_border_right">
									<div class="section">
										<p>50% content</p>
									</div>
								</div>
							</div>
							<div class="columns clearfix shade">
								<div class="col_66">
									<div class="col_50">
										<div class="section">
											<p>33% content</p>
										</div>
									</div>
									<div class="col_50 no_border_right">
										<div class="section">
											<p>33% content</p>
										</div>
									</div>
									<div class="col_100">
										<div class="section">
											<p>66% content</p>
										</div>
									</div>
									<div class="col_50">
										<div class="section">
											<p>33% content</p>
										</div>
									</div>
									<div class="col_50 no_border_right">
										<div class="section">
											<p>33% content</p>
										</div>
									</div>
								</div>
								<div class="col_33 no_border_right">
									<div class="section">
										<p>Lots of content in this column:</p>
										<p>33% content</p>
										<p>33% content</p>
									</div>
								</div>
							</div>
							<div class="columns clearfix">
								<div class="col_25">
									<div class="section">
										<p>25% content</p>
									</div>
								</div>
								<div class="col_25">
									<div class="section">
										<p>25% content</p>
									</div>
								</div>
								<div class="col_25">
									<div class="section">
										<p>25% content</p>
									</div>
								</div>
								<div class="col_25 no_border_right">
									<div class="section">
										<p>25% content</p>
									</div>
								</div>
							</div>
							<div class="columns clearfix even clearfix">
								<div class="col_50">
									<div class="section">
										<p>Lots of content in this column:</p>
										<p>50% content</p>
										<p>50% content</p>
										<p>50% content</p>
									</div>
								</div>
								<div class="col_50 no_border_right">
									<div class="section">
										<p>50% content</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="box grid_16">
					<h2 class="box_head">Box with Button Bar</h2>
					<div class="controls">
						<a href="#" class="grabber"></a>
						<a href="#" class="toggle"></a>
					</div>
					<div class="toggle_container">
						<div class="block">
							<div class="section">
								<p>This box has a button bar - a great place to put any of the <a href="buttons.php">buttons</a> which come with Adminica.</p>
							</div>
							<div class="button_bar clearfix">
								<button class="btn btn-primary">
									<span>Submit</span>
								</button>
								<button class="btn btn-success">
									<span>Save</span>
								</button>
								<button class="btn btn-danger send_right">
									<span>Clear</span>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="main_container container_16 clearfix full_size">
				<div class="box grid_16">
					<h2 class="box_head">Full Width Content box <span>No lines dividing sections</span></h2>
					<div class="controls">
						<a href="#" class="grabber"></a>
						<a href="#" class="toggle"></a>
					</div>
					<div class="toggle_container">
						<div class="block">
							<div class="columns clearfix">
								<div class="col_50">
									<div class="section">
										<p>50% content</p>
									</div>
								</div>
								<div class="col_50 no_border_right">
									<div class="section">
										<p>50% content</p>
									</div>
								</div>
							</div>
							<div class="columns clearfix">
								<div class="col_33">
									<div class="section">
										<p>33% content</p>
									</div>
								</div>
								<div class="col_33">
									<div class="section">
										<p>33% content</p>
									</div>
								</div>
								<div class="col_33 no_border_right">
									<div class="section">
										<p>33% content</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="main_container container_16 clearfix full_size">
				<div class="box grid_16">
					<div class="block lines">
						<div class="columns clearfix">
							<div class="col_50 no_border_top">
								<div class="section">
									<p>50% content</p>
								</div>
							</div>
							<div class="col_50 no_border_top no_border_right">
								<div class="section">
									<p>50% content</p>
								</div>
							</div>
						</div>
						<div class="columns clearfix">
							<div class="col_33">
								<div class="section">
									<p>33% content</p>
								</div>
							</div>
							<div class="col_33">
								<div class="section">
									<p>33% content</p>
								</div>
							</div>
							<div class="col_33 no_border_right">
								<div class="section">
									<p>33% content</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="main_container" class="main_container container_16 clearfix">
				<div class="box grid_8">
					<h2 class="box_head">Grid_8</h2>
					<div class="controls">
						<a href="#" class="grabber"></a>
						<a href="#" class="toggle"></a>
					</div>
					<div class="toggle_container">
						<div class="block">
							<div class="section">
								<p>Content goes here</p>
							</div>
						</div>
					</div>
				</div>
				<div class="box grid_4">
					<h2 class="box_head">Grid_4</h2>
					<div class="controls">
						<a href="#" class="grabber"></a>
						<a href="#" class="toggle"></a>
					</div>
					<div class="toggle_container">
						<div class="block">
							<div class="section">
								<p>Content goes here</p>
							</div>
						</div>
					</div>
				</div>
				<div class="box grid_4">
					<h2 class="box_head">Grid_4</h2>
					<div class="controls">
						<a href="#" class="grabber"></a>
						<a href="#" class="toggle"></a>
					</div>
					<div class="toggle_container">
						<div class="block">
							<div class="section">
								<p>Content goes here</p>
							</div>
						</div>
					</div>
				</div>
				<div class="box light grid_8">
					<h2 class="box_head">Grid_8</h2>
					<div class="controls">
						<a href="#" class="grabber"></a>
						<a href="#" class="toggle"></a>
					</div>
					<div class="toggle_container">
						<div class="block">
							<div class="section">
								<p>Content goes here</p>
							</div>
						</div>
					</div>
				</div>
				<div class="box grid_8">
					<h2 class="box_head grad_grey_dark">Grid_8</h2>
					<div class="controls">
						<a href="#" class="grabber"></a>
						<a href="#" class="toggle"></a>
					</div>
					<div class="toggle_container">
						<div class="block">
							<div class="section">
								<p>Content goes here</p>
							</div>
						</div>
					</div>
				</div>



				<div class="box grid_8">
					<h2 class="box_head grad_black">Grid_8</h2>
					<div class="controls">
						<a href="#" class="grabber"></a>
						<a href="#" class="toggle"></a>
					</div>
					<div class="toggle_container">
						<div class="block">
							<div class="section">
								<p>Content goes here</p>
							</div>
						</div>
					</div>
				</div>
				<div class="box grid_8">
					<h2 class="box_head grad_blue">Grid_8</h2>
					<div class="controls">
						<a href="#" class="grabber"></a>
						<a href="#" class="toggle"></a>
					</div>
					<div class="toggle_container">
						<div class="block">
							<div class="section">
								<p>Content goes here</p>
							</div>
						</div>
					</div>
				</div>
				<div class="box grid_8">
					<h2 class="box_head grad_green">Grid_8</h2>
					<div class="controls">
						<a href="#" class="grabber"></a>
						<a href="#" class="toggle"></a>
					</div>
					<div class="toggle_container">
						<div class="block">
							<div class="section">
								<p>Content goes here</p>
							</div>
						</div>
					</div>
				</div>
				<div class="box grid_8">
					<h2 class="box_head grad_magenta">Grid_8</h2>
					<div class="controls">
						<a href="#" class="grabber"></a>
						<a href="#" class="toggle"></a>
					</div>
					<div class="toggle_container">
						<div class="block">
							<div class="section">
								<p>Content goes here</p>
							</div>
						</div>
					</div>
				</div>
				<div class="box grid_8">
					<h2 class="box_head grad_navy">Grid_8</h2>
					<div class="controls">
						<a href="#" class="grabber"></a>
						<a href="#" class="toggle"></a>
					</div>
					<div class="toggle_container">
						<div class="block">
							<div class="section">
								<p>Content goes here</p>
							</div>
						</div>
					</div>
				</div>
				<div class="box grid_8">
					<h2 class="box_head grad_red">Grid_8</h2>
					<div class="controls">
						<a href="#" class="grabber"></a>
						<a href="#" class="toggle"></a>
					</div>
					<div class="toggle_container">
						<div class="block">
							<div class="section">
								<p>Content goes here</p>
							</div>
						</div>
					</div>
				</div>
				<div class="box grid_8">
					<h2 class="box_head grad_orange">Grid_8</h2>
					<div class="controls">
						<a href="#" class="grabber"></a>
						<a href="#" class="toggle"></a>
					</div>
					<div class="toggle_container">
						<div class="block">
							<div class="section">
								<p>Content goes here</p>
							</div>
						</div>
					</div>
				</div>
				<div class="box grid_8">
					<h2 class="box_head grad_brown">Grid_8</h2>
					<div class="controls">
						<a href="#" class="grabber"></a>
						<a href="#" class="toggle"></a>
					</div>
					<div class="toggle_container">
						<div class="block">
							<div class="section">
								<p>Content goes here</p>
							</div>
						</div>
					</div>
				</div>



				<div class="box grid_16">
					<h2 class="box_head round_all">Grid_16 <small>(Closed by default)</small></h2>
					<div class="controls">
						<a href="#" class="grabber"></a>
						<a href="#" class="toggle toggle_closed"></a>
					</div>
					<div class="toggle_container" style="display:none;">
						<div class="block">
							<div class="section">
								<p>Content goes here</p>
							</div>
						</div>
					</div>
				</div>

				<div class="box grid_8">
					<div class="block">
						<div class="section">
							<p>Grid_8</p>
						</div>
					</div>
				</div>
				<div class="box grid_8">
					<div class="block">
						<div class="section">
							<p>Grid_8</p>
						</div>
					</div>
				</div>
				<div class="box grid_4">
					<div class="block">
						<div class="section">
							<p>Grid_4</p>
						</div>
					</div>
				</div>
				<div class="box grid_4">
					<div class="block">
						<div class="section">
							<p>Grid_4</p>
						</div>
					</div>
				</div>
				<div class="box grid_8">
					<div class="block">
						<div class="section">
							<p>Grid_8</p>
						</div>
					</div>
				</div>
				<div class="box grid_2">
					<div class="block">
						<div class="section">
							<p>Grid_2</p>
						</div>
					</div>
				</div>
				<div class="box grid_2">
					<div class="block">
						<div class="section">
							<p>Grid_2</p>
						</div>
					</div>
				</div>
				<div class="box grid_2">
					<div class="block">
						<div class="section">
							<p>Grid_2</p>
						</div>
					</div>
				</div>
				<div class="box grid_2">
					<div class="block">
						<div class="section">
							<p>Grid_2</p>
						</div>
					</div>
				</div>
				<div class="box grid_4">
					<div class="block">
						<div class="section">
							<p>Grid_4</p>
						</div>
					</div>
				</div>
				<div class="box grid_4">
					<div class="block">
						<div class="section">
							<p>Grid_4</p>
						</div>
					</div>
				</div>

				<div class="grid_16">
					<h2>Standalone Button Bar</h2>
					<p>This should be used when you don't need a content box and just need some cool looking buttons!</p>
				</div>

				<div class="grid_16 box clearfix">
					<div class="indented_button_bar clearfix">
						<button class="btn btn-primary" data-toggle-class="grid_16">
							<span>Grid 16</span>
						</button>
						<button class="btn btn-warning" data-toggle-class="grid_8">
							<span>Grid 8</span>
						</button>
						<button class="btn btn-success" data-toggle-class="grid_4">
							<span>Grid 4</span>
						</button>
						<button class="btn btn-inverse send_right" data-toggle-class="box">
							<span>Toggle ALL</span>
						</button>
					</div>
				</div>
				<div class="grid_8">
					<p><strong>Multicolumn text Layouts are straightforward</strong>.
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation <strong>ullamco</strong> laboris nisi ut aliquip ex ea commodo consequat.</p>
					<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat <strong>cupidatat</strong> non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
				</div>
				<div class="grid_8">
					<p>Multicolumn text Layouts are straightforward. Lorem ipsum dolor sit amet, <strong>consectetur</strong> adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut <strong>enim</strong> ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <strong>Excepteur</strong> sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
				</div>
			</div>
		</div>
		<?php include 'includes/dialogs/dialog_welcome.php'?>
		<?php include 'includes/dialogs/dialog_logout.php'?>
<?php include 'includes/core/document_foot.php'?>