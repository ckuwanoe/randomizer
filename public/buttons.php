<?php include 'includes/core/document_head.php'?>
		<div id="wrapper" data-adminica-nav-top="3" data-adminica-nav-inner="4" data-adminica-side-top="3" data-adminica-side-inner="4" class="has_fixed_bar">
			<?php include 'includes/components/topbar.php'?>
			<?php include 'includes/components/sidebar.php'?>
			<?php include 'includes/components/stackbar.php'?></div><!-- Closing Div for Stack Nav, you can boxes under the stack before this -->

			<?php include 'includes/components/navbar-fixed.php'?>

			<div id="main_container" class="main_container container_16">
				<?php include 'includes/components/navigation.php'?>

			  <div class="grid_16">
				  <div class="page-header">
				    <h1>Buttons
				    	<small>Colours, Sizes & Icons</small>
				    </h1>
				  </div>
				  <table class="table table-bordered table-striped">
				    <thead>
				      <tr>
				        <th>Button</th>
				        <th>class=""</th>
				        <th>Description</th>
				      </tr>
				    </thead>
				    <tbody>
				      <tr>
				        <td><button class="btn" href="#">Default</button></td>
				        <td><code>btn</code></td>
				        <td>Standard gray button with gradient</td>
				      </tr>
				      <tr>
				        <td><button class="btn btn-primary" href="#">Primary</button></td>
				        <td><code>btn btn-primary</code></td>
				        <td>Provides extra visual weight and identifies the primary action in a set of buttons</td>
				      </tr>
				      <tr>
				        <td><button class="btn btn-info" href="#">Info</button></td>
				        <td><code>btn btn-info</code></td>
				        <td>Used as an alternative to the default styles</td>
				      </tr>
				      <tr>
				        <td><button class="btn btn-success" href="#">Success</button></td>
				        <td><code>btn btn-success</code></td>
				        <td>Indicates a successful or positive action</td>
				      </tr>
				      <tr>
				        <td><button class="btn btn-warning" href="#">Warning</button></td>
				        <td><code>btn btn-warning</code></td>
				        <td>Indicates caution should be taken with this action</td>
				      </tr>
				      <tr>
				        <td><button class="btn btn-danger" href="#">Danger</button></td>
				        <td><code>btn btn-danger</code></td>
				        <td>Indicates a dangerous or potentially negative action</td>
				      </tr>
				      <tr>
				        <td><button class="btn btn-inverse" href="#">Inverse</button></td>
				        <td><code>btn btn-inverse</code></td>
				        <td>Alternate dark gray button, not tied to a semantic action or use</td>
				      </tr>
				    </tbody>
				  </table>
			  </div>
			</div>
		</div>
<?php include 'includes/core/document_foot.php'?>