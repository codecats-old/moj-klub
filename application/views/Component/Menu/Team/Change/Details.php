<?php defined('SYSPATH') or die('No direct script access.');?>
<div class="btn-group">
<?php echo HTML::anchor(
		Route::get('default')->uri(array('controller'=>'team', 'action'=>'change')),
		'edit club',
		array('class'=>'btn btn-inverse btn-mini')
);?>
<!-- 	<a href="#" class="btn btn-inverse btn-mini">edit club</a> -->
	<a href="#" class="btn btn-inverse btn-mini dropdown-toggle" data-toggle="dropdown">
		<span class="caret"></span>
	</a>
	<ul class="dropdown-menu pull-right" >
<?php if(Arr::get($options, 'description')):?>
		<li tabindex="-1">
			<a href="#">description</a>
		</li>
<?php endif;?>
<?php if(Arr::get($options, 'trainings')):?>
		<li tabindex="-1">
			<a href="#">trainings</a>
		</li>
<?php endif;?>
<?php if(Arr::get($options, 'success')):?>
		<li tabindex="-1">
			<a href="#">success</a>
		</li>
<?php endif;?>
<?php if(Arr::get($options, 'contact')):?>
		<li tabindex="-1">
			<a href="#">contact</a>
		</li>
<?php endif;?>
<?php if(Arr::get($options, 'address')):?>
		<li tabindex="-1">
			<a href="#">address</a>
		</li>
<?php endif;?>
<?php if(Arr::get($options, 'name')):?>
		<li tabindex="-1">
			<a href="#">name</a>
		</li>
<?php endif;?>
		<!--<li class="divider"></li>-->
	</ul>
</div>
