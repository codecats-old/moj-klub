//console.profile(['main.js']);

var controlList=new strz_Ajax.Control();

controlList.readAccessTableCookie();
strz_Ajax.Factory.setAccessTable(controlList.getAccessTable());

strz_Ajax.Factory.setObjects({
	'2'		:	'Admin',
	'3'		:	'Player',
	'4'		:	'Staff',
	'5'		:	'Accountant',
	'6'		:	'Manager',
	'7'		:	'Coach',
	'8'		:	'Capitan'
});

/**
 * Run all must be after factory because classes inside control 
 * list may need access to some class from factory 
 */
controlList.runAll();

//console.profileEnd();