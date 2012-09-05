<?php include 'includes/core/document_head.php'?>
		<div id="wrapper" data-adminica-nav-top="3" data-adminica-nav-inner="2" data-adminica-side-top="3" data-adminica-side-inner="2" class="has_fixed_bar">
			<?php include 'includes/components/topbar.php'?>
			<?php include 'includes/components/sidebar.php'?>
			<?php include 'includes/components/stackbar.php'?></div><!-- Closing Div for Stack Nav, you can boxes under the stack before this -->

			<?php include 'includes/components/navbar-fixed.php'?>

			<div id="main_container" class="main_container container_16">
			<?php include 'includes/components/navigation.php'?>

				<div class="grid_16">

			  	<div class="page-header">
				    <h1>Tables
				    	<small>Regular, compressed, striped, bordered</small>
				    </h1>
			  	</div>
			  	<p>This is only a selection of the table styles included with Bootstrap to see the rest, <strong>check out the <a href="http://twitter.github.com/bootstrap/">Bootstrap Documentation</a></strong>.<p>
				<table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <td>3</td>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
				</div>
			  <div class="grid_16 box">
					<h2 class="box_head">Condensed Table</h2>
					<div class="controls">
						<a href="#" class="grabber"></a>
						<a href="#" class="toggle"></a>
					</div>
					<div class="toggle_container">
						<div class="block">
							<div class="">
								<table class="table table-condensed" style="margin-bottom:0;">
					        <thead>
					          <tr>
					            <th>#</th>
					            <th>First Name</th>
					            <th>Last Name</th>
					            <th>Username</th>
					          </tr>
					        </thead>
					        <tbody>
					          <tr>
					            <td>1</td>
					            <td>Mark</td>
					            <td>Otto</td>
					            <td>@mdo</td>
					          </tr>
					          <tr>
					            <td>2</td>
					            <td>Jacob</td>
					            <td>Thornton</td>
					            <td>@fat</td>
					          </tr>
					          <tr>
					            <td>3</td>
					            <td>Larry</td>
					            <td>the Bird</td>
					            <td>@twitter</td>
					          </tr>
					        </tbody>
					      </table>
							</div>
						</div>
					</div>
			  </div>
			  <div class="grid_16 box">
					<h2 class="box_head grad_black">Striped Table</h2>
					<div class="controls">
						<a href="#" class="grabber"></a>
						<a href="#" class="toggle"></a>
					</div>
					<div class="toggle_container">
						<div class="block">
							<div class="">
								<table class="table table-striped" style="margin-bottom:0;">
					        <thead>
					          <tr>
					            <th>#</th>
					            <th>First Name</th>
					            <th>Last Name</th>
					            <th>Username</th>
					          </tr>
					        </thead>
					        <tbody>
					          <tr>
					            <td>1</td>
					            <td>Mark</td>
					            <td>Otto</td>
					            <td>@mdo</td>
					          </tr>
					          <tr>
					            <td>2</td>
					            <td>Jacob</td>
					            <td>Thornton</td>
					            <td>@fat</td>
					          </tr>
					          <tr>
					            <td>3</td>
					            <td>Larry</td>
					            <td>the Bird</td>
					            <td>@twitter</td>
					          </tr>
					        </tbody>
					      </table>
							</div>
						</div>
					</div>
			  </div>
			  <div class="grid_16 box light">
					<h2 class="box_head">Bordered Table</h2>
					<div class="controls">
						<a href="#" class="grabber"></a>
						<a href="#" class="toggle"></a>
					</div>
					<div class="toggle_container">
						<div class="block">
							<div class="section">
								<table class="table table-bordered table-striped">
					        <thead>
					          <tr>
					            <th>#</th>
					            <th>First Name</th>
					            <th>Last Name</th>
					            <th>Username</th>
					          </tr>
					        </thead>
					        <tbody>
					          <tr>
					            <td rowspan="2">1</td>
					            <td>Mark</td>
					            <td>Otto</td>
					            <td>@mdo</td>
					          </tr>
					          <tr>
					            <td>Mark</td>
					            <td>Otto</td>
					            <td>@TwBootstrap</td>
					          </tr>
					          <tr>
					            <td>2</td>
					            <td>Jacob</td>
					            <td>Thornton</td>
					            <td>@fat</td>
					          </tr>
					          <tr>
					            <td>3</td>
					            <td colspan="2">Larry the Bird</td>
					            <td>@twitter</td>
					          </tr>
					        </tbody>
					      </table>
							</div>
						</div>
					</div>
			  </div>
			</div>

			</div>
		</div>
<?php include 'includes/core/document_foot.php'?>