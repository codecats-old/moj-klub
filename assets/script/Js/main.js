var control_list=new strz_Ajax.Control();

control_list.readAccessTableCookie();

control_list.setOrders({
	'-1'	:	'Guest',
	'1'		:	'Login',
	'2'		:	'Admin',
	'3'		:	'Player',
	'4'		:	'Staff',
	'5'		:	'Accountant',
//	'6'		:	'Manager',
	'7'		:	'Coach',
	'8'		:	'Capitan'
});


strz_Ajax.Factory.setAccessTable(control_list.getAccessTable());

strz_Ajax.Factory.setObjects({
	'2'		:	'Admin',
	'3'		:	'Player',
	'4'		:	'Staff',
	'5'		:	'Accountant',
	'6'		:	'Manager',
	'7'		:	'Coach',
	'8'		:	'Capitan'
});

control_list.runAll();