<?php defined('SYSPATH') OR die('No direct script access.');?>
<?php $error=isset($error)?$error:array();?>
<?php 
$content = View::factory('Component/Form/Train/Node');
$node = View::factory('Component/Form/Node');

$content->training = $training;
$content->error = $error;
$node->content = $content;

echo $node;