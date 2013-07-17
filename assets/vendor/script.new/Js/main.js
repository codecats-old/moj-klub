var control_list=new strz_Ajax.Control();
control_list.readAccessTableCookie();
control_list.setOrders({
	'-1'	:	'Guest',
	'1'		:	'Login'
		});	
control_list.runAll();
