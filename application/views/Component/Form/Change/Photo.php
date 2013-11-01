<?php defined('SYSPATH') or die('No direct script access.');?>
<?php $error=(isset($error)?$error:null);?>
<?php echo Form::open(Route::get('default')->uri(
		//array('controller'=>'image', 'action'=>Request::current()->action())),
		array('controller'=>Request::initial()->controller(), 'action'=>Request::initial()->action())),
		array('enctype' => 'multipart/form-data', 'class'=>'form-horizontal'));
?>
<div class="well">
	<div class="row-fluid">
		<div class="span12 text-center">
			<label for="photo">
				<?php echo __('photo');?>:
			</label>
			<input type="file" name="add_photo" value="" />
			<span class="label label-warning"><?php  echo Arr::get($error, 'photo');?></span>              
			<span class="label label-warning"><?php  echo Arr::get($error, 'add_photo');?></span>
		</div>
	</div>
	<hr>
<?php echo Form::submit('submit', __('submit'), array('class'=>'btn btn-success offset8'));?>

<?php echo HTML::anchor(
		Route::get('default')->uri(
			array(
				'controller'	=> lcfirst(Request::initial()->controller()),
				'action'		=> lcfirst(Request::initial()->action())
			)
				
		),
		ucfirst(__('close')),
		array('class'=>'btn btn-small', 'rel'=>'form_close'));?>
</div>
<?php echo Form::close();?>