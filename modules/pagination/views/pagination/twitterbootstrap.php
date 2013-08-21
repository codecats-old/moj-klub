<?php defined('SYSPATH') OR die('No direct script access');?>
<div class="pagination pagination-small well well-opacity pagination-right">
	<ul>
		
	<?php if ($first_page !== FALSE): ?>
		<li class="previous">
			<a href="<?php echo HTML::chars($page->url($first_page)) ?>"><?php echo '&larr;' ?></a>
		</li>
	<?php else: ?>
		<li class="previous active">
			<span>
		<?php echo '&larr;' ?>
			</span>
		</li>
	<?php endif ?>
	
	<?php if ($previous_page !== FALSE): ?>
		<li class="next">
			<a href="<?php echo HTML::chars($page->url($previous_page)) ?>"><?php echo '&laquo;' ?></a>
		</li>
	<?php else: ?>
		<li class="next active">
			<span>
		<?php echo '&laquo;' ?>
			</span>
		</li>
	<?php endif ?>	
		
<!-- numbers -->		
	<?php for ($i = 1; $i <= $total_pages; $i++): ?>
		
		<?php if ($i == $current_page): ?>
		<li class="active">
			<span><?php echo $i ?></span>
		</li>
		<?php else: ?>
		<li>
			<a href="<?php echo HTML::chars($page->url($i)) ?>"><?php echo $i ?></a>
		</li>
		<?php endif ?>
		
	<?php endfor ?>

	<?php if ($next_page !== FALSE): ?>
		<li class="previous">
			<a href="<?php echo HTML::chars($page->url($next_page)) ?>"><?php echo '&raquo;' ?></a>
		</li>
	<?php else: ?>
		<li class="previous active">
			<span>
		<?php echo '&raquo;' ?>
			</span>
		</li>
	<?php endif ?>	

	<?php if ($last_page !== FALSE): ?>
		<li class="next">
			<a href="<?php echo HTML::chars($page->url($last_page)) ?>"><?php echo '&rarr;' ?></a>
		</li>
	<?php else: ?>
		<li class="next active">
			<span>
		<?php echo '&rarr;' ?>
			</span>
		</li>
	<?php endif ?>		
		
	</ul>
</div><!-- .pagination -->