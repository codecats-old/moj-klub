var control_list=new strz_Ajax.Control();
//TODO: read Access table and runAll on done ajax
control_list.readAccessTableCookie();
control_list.setOrders({
	'-1'	:	'Guest',
	'1'		:	'Login'
		});	
control_list.runAll();
