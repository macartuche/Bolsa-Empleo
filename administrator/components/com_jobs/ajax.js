function Buscador ()
{ 
	var xmlhttp = false;
	try
	{ 
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	}
	catch (e)
	{
		try
		{ 
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		catch (e)
		{
			xmlhttp = false;
		}	
	}
	if (!xmlhttp && typeof XMLHttpRequest!='undefined')
	{
		xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}
function Buscar ()
{
	var Texto = document.getElementById("texto").value;
	var Resultados = document.getElementById("resultados");
	ajax = Buscador();
	ajax.open("GET","buscar.php?q="+Texto);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4)
		{
			Resultados.innerHTML = ajax.responseText;
		}	
	}
	ajax.send(null);
}