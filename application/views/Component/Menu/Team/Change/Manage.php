<?php defined('SYSPATH') or die('No direct script access.');?>
<div class="btn-group">

	<a href="#" class="btn btn-inverse btn-mini disabled">manage</a>
	<a href="#" class="btn btn-inverse btn-mini dropdown-toggle" data-toggle="dropdown">
		<span class="caret"></span>
	</a>
	<ul class="dropdown-menu pull-right" >
<?php if(Arr::get($options, 'players')):?>
		<li tabindex="-1">
			<a class="btn disabled" href="#">players</a>
		</li>
<?php endif;?>
<?php if(Arr::get($options, 'staff')):?>
		<li tabindex="-1">
			<a class="btn disabled"  href="#">staff</a>
		</li>
<?php endif;?>
<?php if(Arr::get($options, 'management')):?>
		<li tabindex="-1">
			<a class="btn disabled"  href="#">management</a>
		</li>
<?php endif;?>
<?php if(Arr::get($options, 'leave')):?>
		<li class="divider"></li>
		<li tabindex="-1">
			<a class="btn disabled"  href="#">leave<i class="offset6 icon-remove"></i></a>
		</li>
<?php endif;?>
		<!--<li class="divider"></li>-->
	</ul>
</div>
