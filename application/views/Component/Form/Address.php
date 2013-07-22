<?php defined('SYSPATH') or die('No direct script access.');?>
<fieldset class="form-inline">
	<legend><small>Address</small></legend>
	<div class="control-group">
		<label class="control-label" for="address">Street:</label>
		<div class="controls controls-row">
			<div class="span9">
				<input class="span12" type="text" name="street" placeholder="street name">
				<span class="label label-warning"><?php echo Arr::get($error, 'street');?></span>
			</div>
			<div class="span3">
				<input class="span12" type="text" name="street_no" placeholder="no">
				<span class="label label-warning"><?php echo Arr::get($error, 'street_no');?></span>
			</div>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="address">Post:</label>
		<div class="controls controls-row">
			<div class="span4">
				<div class="row-fluid">
					<div class="span12">
						<div class="row-fluid">
							<input class="span5" name="zip_code" type="number" placeholder="">
							<input class="span7" name="zip_code2" type="number" placeholder="">
						</div>
					</div>
				</div>
			<!-- 	<input class="span5" type="text" placeholder="Zip code"> -->
				<span class="label label-warning"><?php echo Arr::get($error, 'zip_code');?></span>

			</div>
			
			
			<div class="span8">
				<input class="span12" type="text" name="city" placeholder="City">
				<span class="label label-warning"><?php echo Arr::get($error, 'city');?></span>
			</div>
		</div>
	</div>
	
	
</fieldset>
