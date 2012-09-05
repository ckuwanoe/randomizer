<?php include 'includes/core/document_head.php'?>
		<div id="wrapper" data-adminica-nav-top="3" data-adminica-nav-inner="3" data-adminica-side-top="3" data-adminica-side-inner="3" class="has_fixed_bar">
			<?php include 'includes/components/topbar.php'?>
			<?php include 'includes/components/sidebar.php'?>
			<?php include 'includes/components/stackbar.php'?></div><!-- Closing Div for Stack Nav, you can boxes under the stack before this -->

			<?php include 'includes/components/navbar-fixed.php'?>

			<div id="main_container" class="main_container container_16">
			<?php include 'includes/components/navigation.php'?>

			  <div class="grid_16 ">

			  	<div class="page-header">
				    <h1>Forms Fields
				    	<small>Layout, Types and States</small>
				    </h1>
			  	</div>
			  	<p>This is only a selection of the form styles included with Bootstrap to see the rest, <strong>check out the <a href="http://twitter.github.com/bootstrap/">Bootstrap Documentation</a></strong>.<p>

			  	<form class="form-horizontal" style="margin: 20px 0 0;">
		        <fieldset>
		          <div class="control-group">
		            <label class="control-label" for="input01">Text input</label>
		            <div class="controls">
		              <input type="text" class="input-xlarge" id="input01">
		              <p class="help-block">In addition to freeform text, any HTML5 text-based input appears like so.</p>
		            </div>
		          </div>
		          <div class="control-group">
		            <label class="control-label" for="optionsCheckbox">Checkbox</label>
		            <div class="controls">
		              <label class="checkbox">
		                <input type="checkbox" id="optionsCheckbox" value="option1">
		                Option one is this and that—be sure to include why it's great
		              </label>
		            </div>
		          </div>
		          <div class="control-group">
		            <label class="control-label" for="select01">Select list</label>
		            <div class="controls">
		              <select id="select01">
		                <option>something</option>
		                <option>2</option>
		                <option>3</option>
		                <option>4</option>
		                <option>5</option>
		              </select>
		            </div>
		          </div>
		          <div class="control-group">
		            <label class="control-label" for="multiSelect">Multicon-select</label>
		            <div class="controls">
		              <select multiple="multiple" id="multiSelect">
		                <option>1</option>
		                <option>2</option>
		                <option>3</option>
		                <option>4</option>
		                <option>5</option>
		              </select>
		            </div>
		          </div>
		          <div class="control-group">
		            <label class="control-label" for="textarea">Textarea</label>
		            <div class="controls">
		              <textarea class="input-xlarge" id="textarea" rows="3"></textarea>
		            </div>
		          </div>
		          <div class="form-actions">
		            <button type="submit" class="btn btn-primary">Save changes</button>
		            <button class="btn">Cancel</button>
		          </div>
		        </fieldset>
		      </form>
			  </div>
			  <div class="grid_16 box">
					<h2 class="box_head">Form Control States</h2>
					<div class="controls">
						<a href="#" class="grabber"></a>
						<a href="#" class="toggle"></a>
					</div>
					<div class="toggle_container">
						<div class="block">
							<form class="form-horizontal" style="margin-bottom:0; padding-top:20px;">
				        <fieldset>
				          <div class="control-group">
				            <label class="control-label" for="focusedInput">Focused input</label>
				            <div class="controls">
				              <input class="input-xlarge focused" id="focusedInput" type="text" value="This is focused…">
				            </div>
				          </div>
				          <div class="control-group">
				            <label class="control-label">Uneditable input</label>
				            <div class="controls">
				              <span class="input-xlarge uneditable-input">Some value here</span>
				            </div>
				          </div>
				          <div class="control-group">
				            <label class="control-label" for="disabledInput">Disabled input</label>
				            <div class="controls">
				              <input class="input-xlarge disabled" id="disabledInput" type="text" placeholder="Disabled input here…" disabled="">
				            </div>
				          </div>
				          <div class="control-group">
				            <label class="control-label" for="optionsCheckbox2">Disabled checkbox</label>
				            <div class="controls">
				              <label class="checkbox">
				                <input type="checkbox" id="optionsCheckbox2" value="option1" disabled="">
				                This is a disabled checkbox
				              </label>
				            </div>
				          </div>
				          <div class="control-group warning">
				            <label class="control-label" for="inputWarning">Input with warning</label>
				            <div class="controls">
				              <input type="text" id="inputWarning">
				              <span class="help-inline">Something may have gone wrong</span>
				            </div>
				          </div>
				          <div class="control-group error">
				            <label class="control-label" for="inputError">Input with error</label>
				            <div class="controls">
				              <input type="text" id="inputError">
				              <span class="help-inline">Please correct the error</span>
				            </div>
				          </div>
				          <div class="control-group success">
				            <label class="control-label" for="inputSuccess">Input with success</label>
				            <div class="controls">
				              <input type="text" id="inputSuccess">
				              <span class="help-inline">Woohoo!</span>
				            </div>
				          </div>
				          <div class="control-group success">
				            <label class="control-label" for="selectError">Select with success</label>
				            <div class="controls">
				              <select id="selectError">
				                <option>1</option>
				                <option>2</option>
				                <option>3</option>
				                <option>4</option>
				                <option>5</option>
				              </select>
				              <span class="help-inline">Woohoo!</span>
				            </div>
				          </div>
				          <div class="form-actions" style="margin-bottom:0">
				            <button type="submit" class="btn btn-primary">Save changes</button>
				            <button class="btn">Cancel</button>
				          </div>
				        </fieldset>
				      </form>
						</div>
					</div>
			  </div>
			  <div class="grid_16 box">
			  	<div class="block">
				  	<form class="form-horizontal" style="margin-bottom:0; padding-top:20px;">
			        <fieldset>
			          <div class="control-group">
			            <label class="control-label">Form grid sizes</label>
			            <div class="controls docs-input-sizes">
			              <input class="span1" type="text" placeholder=".span1">
			              <input class="span2" type="text" placeholder=".span2">
			              <input class="span3" type="text" placeholder=".span3">
			              <select class="span1">
			                <option>1</option>
			                <option>2</option>
			                <option>3</option>
			                <option>4</option>
			                <option>5</option>
			              </select>
			              <select class="span2">
			                <option>1</option>
			                <option>2</option>
			                <option>3</option>
			                <option>4</option>
			                <option>5</option>
			              </select>
			              <select class="span3">
			                <option>1</option>
			                <option>2</option>
			                <option>3</option>
			                <option>4</option>
			                <option>5</option>
			              </select>
			              <p class="help-block">Use the same <code>.span*</code> classes from the grid system for input sizes.</p>
			            </div>
			          </div>
			          <div class="control-group">
			            <label class="control-label">Alternate sizes</label>
			            <div class="controls docs-input-sizes">
			              <input class="input-mini" type="text" placeholder=".input-mini">
			              <input class="input-small" type="text" placeholder=".input-small">
			              <input class="input-medium" type="text" placeholder=".input-medium">
			              <p class="help-block">You may also use static classes that don't map to the grid, adapt to the responsive CSS styles, or account for varying types of controls (e.g., <code>input</code> vs. <code>select</code>).</p>
			            </div>
			          </div>
			          <div class="control-group">
			            <label class="control-label" for="prependedInput">Prepended text</label>
			            <div class="controls">
			              <div class="input-prepend">
			                <span class="add-on">@</span><input class="span2" id="prependedInput" size="16" type="text">
			              </div>
			              <p class="help-block">Here's some help text</p>
			            </div>
			          </div>
			          <div class="control-group">
			            <label class="control-label" for="appendedInput">Appended text</label>
			            <div class="controls">
			              <div class="input-append">
			                <input class="span2" id="appendedInput" size="16" type="text"><span class="add-on">.00</span>
			              </div>
			              <span class="help-inline">Here's more help text</span>
			            </div>
			          </div>
			          <div class="control-group">
			            <label class="control-label" for="appendedPrependedInput">Append and prepend</label>
			            <div class="controls">
			              <div class="input-prepend input-append">
			                <span class="add-on">$</span><input class="span2" id="appendedPrependedInput" size="16" type="text"><span class="add-on">.00</span>
			              </div>
			            </div>
			          </div>
			          <div class="control-group">
			            <label class="control-label" for="appendedInputButton">Append with button</label>
			            <div class="controls">
			              <div class="input-append">
			                <input class="span2" id="appendedInputButton" size="16" type="text"><button class="btn" type="button">Go!</button>
			              </div>
			            </div>
			          </div>
			          <div class="control-group">
			            <label class="control-label" for="appendedInputButtons">Two-button append</label>
			            <div class="controls">
			              <div class="input-append">
			                <input class="span2" id="appendedInputButtons" size="16" type="text"><button class="btn" type="button">Search</button><button class="btn" type="button">Options</button>
			              </div>
			            </div>
			          </div>
			          <div class="control-group">
			            <label class="control-label" for="inlineCheckboxes">Inline checkboxes</label>
			            <div class="controls">
			              <label class="checkbox inline">
			                <input type="checkbox" id="inlineCheckbox1" value="option1"> 1
			              </label>
			              <label class="checkbox inline">
			                <input type="checkbox" id="inlineCheckbox2" value="option2"> 2
			              </label>
			              <label class="checkbox inline">
			                <input type="checkbox" id="inlineCheckbox3" value="option3"> 3
			              </label>
			            </div>
			          </div>
			          <div class="control-group">
			            <label class="control-label" for="optionsCheckboxList">Checkboxes</label>
			            <div class="controls">
			              <label class="checkbox">
			                <input type="checkbox" name="optionsCheckboxList1" value="option1">
			                Option one is this and that—be sure to include why it's great
			              </label>
			              <label class="checkbox">
			                <input type="checkbox" name="optionsCheckboxList2" value="option2">
			                Option two can also be checked and included in form results
			              </label>
			              <label class="checkbox">
			                <input type="checkbox" name="optionsCheckboxList3" value="option3">
			                Option three can—yes, you guessed it—also be checked and included in form results
			              </label>
			              <p class="help-block"><strong>Note:</strong> Labels surround all the options for much larger click areas and a more usable form.</p>
			            </div>
			          </div>
			          <div class="control-group">
			            <label class="control-label">Radio buttons</label>
			            <div class="controls">
			              <label class="radio">
			                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
			                Option one is this and that—be sure to include why it's great
			              </label>
			              <label class="radio">
			                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
			                Option two can be something else and selecting it will deselect option one
			              </label>
			            </div>
			          </div>
			          <div class="form-actions">
			            <button type="submit" class="btn btn-primary">Save changes</button>
			            <button class="btn">Cancel</button>
			          </div>
			        </fieldset>
			      </form>
			  	</div>
			  </div>
			</div>

			</div>
		</div>
<?php include 'includes/core/document_foot.php'?>