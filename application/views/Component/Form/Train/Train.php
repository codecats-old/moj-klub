<?php defined('SYSPATH') OR die('No direct script access.');?>

<?php 
$content = View::factory('Component/Form/Train/Node');
$node = View::factory('Component/Form/Node');

$content->last_training = $last_training;
$node->content = $content;

echo $node;