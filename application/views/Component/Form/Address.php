<?php defined('SYSPATH') or die('No direct script access.');?>
<fieldset class="form-inline">
	<legend><small><?php echo ucfirst(__('address'));?></small></legend>
	<div class="control-group">
		<label class="control-label" for="address"><?php echo ucfirst(__('street'));?>:</label>
		<div class="controls controls-row">
			<div class="span9">
<?php echo Form::input(
		'street', 
		Arr::get($address, 'street'),
		array('class'=>'span12', 'placeholder'=>__('street name')));
?>
				<span class="label label-warning"><?php echo Arr::get($error, 'street');?></span>
			</div>
			<div class="span3">
<?php echo Form::input(
		'street_no', 
		Arr::get($address, 'street_no'),
		array('class'=>'span12', 'placeholder'=>__('no.'), 'type'=>'text'));
?>
				<span class="label label-warning"><?php echo Arr::get($error, 'street_no');?></span>
			</div>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="address"><?php echo __('Post');?>:</label>
		<div class="controls controls-row">
			<div class="span4">
				<div class="row-fluid">
					<div class="span12">
						<div class="row-fluid">
<?php 
    $zip = explode('-', Arr::get($address, 'zip_code'));
    $zip[1] = (! empty($zip[1])) ? $zip[1] : Arr::get($address, 'zip_code2');
	echo Form::input(
		'zip_code', 
		Arr::get($zip, 0),
		array('class'=>'span5', 'placeholder'=>'', 'type'=>'number'));
?>
<?php echo Form::input(
		'zip_code2', 
		Arr::get($zip, 1),
		array('class'=>'span7', 'placeholder'=>'', 'type'=>'number'));
?>
						</div>
					</div>
				</div>
			<!-- 	<input class="span5" type="text" placeholder="Zip code"> -->
				<span class="label label-warning"><?php echo Arr::get($error, 'zip_code');?></span>
				<span class="label label-warning"><?php echo Arr::get($error, 'zip_code2');?></span>
			</div>		
			<div class="span8">
<?php echo Form::input(
		'city', 
		Arr::get($address, 'city'),
		array('class'=>'span12', 'placeholder'=>__('city'), 'type'=>'text'));
?>
				<span class="label label-warning"><?php echo Arr::get($error, 'city');?></span>
			</div>
		</div>
	</div>
	
	<div class="help-block btn-mini control-group">
		<div class="offset5 span6">
			<p><i><?php echo __('for example');?>:</i></p>
			<p><i>ul. Reymonta 22</i></p>
			<p><i>30-059 Kraków</i></p>
		</div>
	</div>
</fieldset>
