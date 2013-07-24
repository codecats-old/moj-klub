<?php defined('SYSPATH') or die('No direct script access.');?>
<div class="btn-group">

	<a href="#" class="btn btn-inverse btn-mini">manage</a>
	<a href="#" class="btn btn-inverse btn-mini dropdown-toggle" data-toggle="dropdown">
		<span class="caret"></span>
	</a>
	<ul class="dropdown-menu pull-right" >
<?php if(Arr::get($options, 'players')):?>
		<li tabindex="-1">
			<a href="#">players</a>
		</li>
<?php endif;?>
<?php if(Arr::get($options, 'staff')):?>
		<li tabindex="-1">
			<a href="#">staff</a>
		</li>
<?php endif;?>
<?php if(Arr::get($options, 'management')):?>
		<li tabindex="-1">
			<a href="#">management</a>
		</li>
<?php endif;?>
<?php if(Arr::get($options, 'leave')):?>
		<li class="divider"></li>
		<li tabindex="-1">
			<a href="#">leave<i class="offset6 icon-remove"></i></a>
		</li>
<?php endif;?>
		<!--<li class="divider"></li>-->
	</ul>
</div>
