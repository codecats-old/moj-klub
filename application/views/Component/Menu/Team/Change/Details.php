<?php defined('SYSPATH') or die('No direct script access.');?>

<?php if(array_filter($options)):// if all options are empty show nothing?>


<div class="btn-group">

<?php echo HTML::anchor(
		Route::get('default')->uri(array('controller'=>'team', 'action'=>'change')),
		__('edit club'),
		array('class'=>'btn btn-inverse btn-mini', 'rel' => 'change_form_get')
);?>
<!-- 	<a href="#" class="btn btn-inverse btn-mini">edit club</a> -->
	<a href="#" class="btn btn-inverse btn-mini dropdown-toggle" data-toggle="dropdown">
		<span class="caret"></span>
	</a>
	<ul class="dropdown-menu pull-right" >
<?php if(Arr::get($options, 'description')):?>
		<li tabindex="-1">
	<?php echo HTML::anchor(
			Route::get('default')->uri( 
				array(
					'controller' => 'team', 
					'action' => 'change', 
					'id' => 'description'
				)), 
				__('description'),
				array('rel' => 'change_description_form_get')				
		); 
	?>
		</li>
<?php endif;?>
<?php if(Arr::get($options, 'training')):?>
		<li tabindex="-1">
	<?php echo HTML::anchor(
			Route::get('default')->uri( 
				array(
					'controller' => 'team', 
					'action' => 'change', 
					'id' => 'training'
				)), 
				__('training'),
				array('rel' => 'change_training_form_get')				
		); 
	?>
		</li>
<?php endif;?>
<?php if(Arr::get($options, 'success')):?>
		<li tabindex="-1">
	<?php echo HTML::anchor(
			Route::get('default')->uri( 
				array(
					'controller' => 'team', 
					'action' => 'change', 
					'id' => 'success'
				)), 
				__('success'),
				array('rel' => 'change_success_form_get')				
		); 
	?>
		</li>
<?php endif;?>
<?php if(Arr::get($options, 'contact')):?>
		<li tabindex="-1">
	<?php echo HTML::anchor(
			Route::get('default')->uri( 
				array(
					'controller' => 'team', 
					'action' => 'change', 
					'id' => 'contact'
				)), 
				__('contact'),
				array('rel' => 'change_contact_form_get')				
		); 
	?>
		</li>
<?php endif;?>
<?php if(Arr::get($options, 'address')):?>
		<li tabindex="-1">
	<?php echo HTML::anchor(
			Route::get('default')->uri( 
				array(
					'controller' => 'team', 
					'action' => 'change', 
					'id' => 'address'
				)), 
				__('address'),
				array('rel' => 'change_address_form_get')				
		); 
	?>
		</li>
<?php endif;?>
<?php if(Arr::get($options, 'name')):?>
		<li tabindex="-1">
	<?php echo HTML::anchor(
			Route::get('default')->uri( 
				array(
					'controller' => 'team', 
					'action' => 'change', 
					'id' => 'name'
				)), 
				__('name'),
				array('rel' => 'change_name_form_get')				
		); 
	?>
		</li>
<?php endif;?>
		<!--<li class="divider"></li>-->
	</ul>
</div>
<?php endif; //empty all?>