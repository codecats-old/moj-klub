<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * 
 * @author t
 *
 * Object Manager is useufl to manipulate low level data recived f.ex. from POST 
 * and formatted to ORM or/and View.
 * 
 * Example working:
 * POST -> Manager -> (suitable data) ORM
 * 	OR
 * ORM	-> Manager -> (suitable data) View
 */
abstract class Manager extends Kohana_Manager {}