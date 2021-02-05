<!--
var formblock;
var forminputs;
var jscheck = 0;

function prepare() 
{
	formblock= document.getElementById('form_add');
	forminputs = formblock.getElementsByTagName('input');
}

function select_all(name, value) 
{
	for (i = 0; i < forminputs.length; i++) 
	{ 
		if (forminputs[i].getAttribute('name') == 'a[]') 
		{ 
			if (value == '1') 
			{
				forminputs[i].checked = true;
			} 
			else 
			{
				forminputs[i].checked = false;
			}
		}
	}
}

if (window.addEventListener) 
{
	window.addEventListener("load", prepare, false);
} else if (window.attachEvent) 
		{
			window.attachEvent("onload", prepare)
		} else if (document.getElementById) 	
				{
					window.onload = prepare;
				}
 
//-->