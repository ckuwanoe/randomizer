<?php include 'includes/core/document_head.php'?>
		<div id="wrapper" data-adminica-nav-top="3" data-adminica-nav-inner="1" data-adminica-side-top="3" data-adminica-side-inner="1" class="has_fixed_bar">
			<?php include 'includes/components/topbar.php'?>
			<?php include 'includes/components/sidebar.php'?>
			<?php include 'includes/components/stackbar.php'?></div><!-- Closing Div for Stack Nav, you can boxes under the stack before this -->

			<?php include 'includes/components/navbar-fixed.php'?>

			<div id="main_container" class="container_16 main_container">
			<?php include 'includes/components/navigation.php'?>

		  	<div class="grid_16">
			  	<div class="page-header">
				    <h1>Typography
				    	<small>Headings, paragraphs, lists, and other inline type elements</small>
				    </h1>
			  	</div>
			  	<p>This is only a selection of the text styles included with Bootstrap to see the rest, <strong>check out the <a href="http://twitter.github.com/bootstrap/">Bootstrap Documentation</a></strong>.<p>
		      <h3>Example body text</h3>
		      <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
		      <p><a href="#">Fusce dapibus</a>, <strong>tellus ac cursus commodo</strong>, <em>tortor mauris condimentum nibh</em>, ut fermentum massa justo sit amet risus. Maecenas faucibus mollis interdum. Nulla vitae elit libero, a pharetra augue.</p>
		      <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
		    </div>
			</div>
			<div class="main_container container_16">
		    <div class="grid_10">
		    	<h3>Column of Text</h3>
		    	<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
		    	<p class="lead">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
		    </div>
		    <div class="grid_6">
		      <h3>Example Addresses</h3>
		      <address>
		        <strong>Twitter, Inc.</strong><br>
		        795 Folsom Ave, Suite 600<br>
		        San Francisco, CA 94107<br>
		        <abbr title="Phone">P:</abbr> (123) 456-7890
		      </address>
		      <address>
		        <strong>Full Name</strong><br>
		        <a href="mailto:#">first.last@gmail.com</a>
		      </address>
		    </div>
			</div>
			<div class="main_container container_16">
				<div class="grid_16 box">
					<h2 class="box_head">Box with Text Columns</h2>
					<div class="controls">
						<a class="toggle" href="#"></a>
					</div>
					<div class="toggle_container">
						<div class="block">
								<div class="columns clearfix">
									<div class="col_33">
										<div class="section">
											<h3>Blockquote</h3>
											<p>Here is an example blockquote:</p>
											<blockquote>
											  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante venenatis.</p>
											  <small>Someone famous</small>
											</blockquote>
										</div>
							    </div>
							    <div class="col_33">
										<div class="section">
								      <h3>Unordered List</h3>
								      <ul>
								        <li>Lorem ipsum dolor sit amet</li>
								        <li>Nulla volutpat aliquam velit
								          <ul>
								            <li>Phasellus iaculis neque</li>
								            <li>Purus sodales ultricies</li>
								            <li>Vestibulum laoreet porttitor sem</li>
								            <li>Ac tristique libero volutpat at</li>
								          </ul>
								        </li>
								        <li>Faucibus porta lacus fringilla vel</li>
								        <li>Aenean sit amet erat nunc</li>
								      </ul>
										</div>
							    </div>
							    <div class="col_33">
										<div class="section">
								      <h3>Ordered List</h3>
								      <ol>
								        <li>Lorem ipsum dolor sit amet</li>
								        <li>Consectetur adipiscing elit</li>
								        <li>Integer molestie lorem at massa</li>
								        <li>Facilisis in pretium nisl aliquet</li>
								        <li>Nulla volutpat aliquam velit</li>
								        <li>Faucibus porta lacus fringilla vel</li>
								        <li>Aenean sit amet erat nunc</li>
								        <li>Facilisis in pretium nisl aliquet</li>
								        <li>Eget porttitor lorem</li>
								      </ol>
										</div>
							    </div>
							  </div>
							  <div class="section clearfix">
									<div class="hero-unit" style="margin-bottom:0">
										<h1>Hello, world!</h1>
										<p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
										<p><a class="btn btn-primary btn-large">Learn more</a></p>
									</div>
							  </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php include 'includes/core/document_foot.php'?>