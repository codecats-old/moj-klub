<?php defined('SYSPATH') or die('No direct script access.');?>
<h3>Dane drużyny</h3>
<div>
	<label class="label">Pełna nazwa</label>
	<span class="text-info pull-right">
<?php echo Arr::get($team, 'full_name');?>
	</span>
</div>
<div class="well">
	<article class="text-info">
		<label class="label">opis</label>
		<p>
<?php echo Arr::get($team, 'description');?>	
		</p>
		<label class="label">największe sukesy</label>
		<p>
<?php echo Arr::get($team, 'success');?>		
		</p>
		<label class="label">treningi</label>
		<p>
<?php echo Arr::get($team, 'training');?>
		</p>
	</article>
</div>