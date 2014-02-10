<script type="text/javascript" src="ajax.js" language="javascript">
</script>
<style type="text/css">
.resultados
{
	width:280px;
	height:auto;
	font-family:helvetica;
	font-size:12px;
	color:#000;
	border-bottom:1px solid #000;
	border-left:1px solid #000;
	border-right:1px solid #000;
}
#texto
{
	font-family:helvetica;
	font-size:12px;
	color:#000;
}
</style>

<script type='text/javascript'> 
function ponerValor(){ 
	//macf
	window.opener.document.adminForm.db_memberid.value=document.miForm.valorrecojido.value;
} 
</script>
<script type="text/javascript">
function seleccionar(valor){
document.getElementById('valorrecojido').value = valor;
}
</script>
<div id="caja">
<form id="buscador" name="buscador">
Ingresar nombres y apellidos completos 
<br />
<input type="text" id="texto" name="texto" onKeyPress="Buscar();" size="50" value="">
</form>
</div>

<div id="resultados" class="resultados">
</div>

