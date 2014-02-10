<?php
include_once "../../../../../configuration.php" ;
$config = new JConfig();


 // el método de envio usado. (en el ejemplo un link genera un GET. En el formulario se usa POST podria ser GET tambien ...)
$idResumenPDF =$_GET['cid'];
echo $idResumenPDF;
$conn = mysql_connect($config->host, $config->user, $config->password);

if (! $conn){
	echo "Error no se pudo conectar";
	exit(); 
}
$query = mysql_select_db($config->db, $conn);;
 
$query = mysql_query("SELECT id, title, cedula, language, name, discapacidad, home_phone,  work_phone, cell_phone, email_address, street, city, image, state, school, school_city, school_state, school1,school_city1, school_state1, lknjobs_available, skills,lang_1, lang_1_where, study_area1, zip_code, civil FROM jos_jobs_resumes WHERE id=$idResumenPDF") or die ("Fallo en la consulta");
$findDate = mysql_num_rows($query);
$html = '';

if($findDate > 0){ 
while($row = mysql_fetch_assoc($query)){
$html .='<div id="cabecera" style="height:50px; border:#06F 1px solid; background-color:#06F;">
			<h1 style="background-color:#06F; text-align:center; color:#FFF;">
			CURRICULUM VITAE
			</h1>
		 </div><br>';
$html .='<div class="profile_user" style="height:800px; width:250px;background:#FCC;border:#F00 solid 1px;">';
		$html .='<h2 style="text-align:center; margin:10px;">
				Informaci&oacute;n del perfil
				</h2>';
		$html .='<div id="imagenempleyooescurriculum" style="height:30px; margin-left:90px;">';
		$html .= "<img src='http://wutoloja.com/bolsaempleo/images/stories/jobs/cv_images/".$row["image"]."' width='60' height='60'/><br>";
		$html .='</div>';
		$html .='<div class="profile" style="margin:10px; width:250px;">';
				$html .= "<b>Nombre: </b>".$row["name"]."<br>";
				$html .= "<b>Cedula: </b>".$row["cedula"]."<br>";
				$html .= "<b>T&#237;tulo del curriculum: </b>".$row["title"]."<br>";
				$html .= "<b>Tel&#233;fono convencional: </b>".$row["home_phone"]."<br>";
				$html .= "<b>Tel&#233;fono del trabajo: </b>".$row["work_phone"]."<br>";
				$html .= "<b>Tel&#233;fono celular: </b>".$row["cell_phone"]."<br>";
				$html .= "<b>Correo eletr&oacute;nico: </b>".$row["email_address"]."<br>";
				$html .= "<b>Direcci&oacute;n del domicilio: </b>".$row["street"]."<br>";
				$html .= "<b>Estado civil: </b>".$row["civil"]."<br>";
				$html .= "<b>Ciudad: </b>".$row["city"]."<br>";
				$html .= "<b>Provincia: </b>".$row["state"]."<br>";
		$html .= '</div>';
$html .= '</div><br />';
$html .='<div id="infoacademica" style="margin-left:250px; margin-top:-830px;">';
		$html .='<h2 style="text-align:left; margin-top:10px;margin-left:40px; color:#500;">
				Informaci&oacute;n acad&#233;mica
				</h2>';
		$html .='<div class="infoacademicadescripction" style="margin-top:10px;margin-left:40px;">';
				$html .= "<b>Estudios secundarios: </b>".$row["school"]."<br>";
				$html .= "<b>Ciudad de estudios secundarios: </b>".$row["school_city"]."<br>";
				$html .= "<b>Provincia de estudios secundarios: </b>".$row["school_state"]."<br>";
				$html .= "<b>Estudios universitarios: </b>".$row["school1"]."<br>";
				$html .= "<b>Ciudad de estudios universitarios: </b>".$row["school_city1"]."<br>";
				$html .= "<b>Provincia de estudios universitarios: </b>".$row["school_state1"]."<br>";
		$html .= '</div>';
$html .='</div>';
$html .='<div id="separatorpuntos" style="margin-left:285px;">';
		$html .='<h3 style="color:#500;">
&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;
				</h3>';
$html .='</div>';
$html .='<div id="infoprofesional" style="margin-left:250px;">';
		$html .='<h2 style="text-align:left; margin-top:10px;margin-left:40px; color:#500;">
				Informaci&oacute;n profesional
				</h2>';
		$html .='<div class="infoprofesionaldescripction" style="margin-top:10px;margin-left:40px;">';
				$html .= "<b>Manejo de idiomas: </b>".$row["lang_1"]."<br>";
				$html .= "<b>Academia en la que estudio: </b>".$row["lang_1_where"]."<br>";
				$html .= "<b>Dias que usted desee trabajar: </b>".$row["lknjobs_available"]."<br>";
				$html .= "<b>&Aacute;rea de profesi&oacute;n: </b>".$row["study_area1"]."<br>";
				$html .= "<b>Esperiencia: </b>".$row["skills"]."<br>";
		$html .= '</div>';
$html .='</div>';
$html .='<div id="separatorpuntos" style="margin-left:285px;">';
		$html .='<h3 style="color:#500;">	&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;
				</h3>';
$html .='</div>';
$html .='<div id="infootros" style="margin-left:250px;">';
		$html .='<h2 style="text-align:left; margin-top:10px;margin-left:40px; color:#500;">
				Otros
				</h2>';
		$html .='<div class="infootrosdescripction" style="margin-top:10px;margin-left:40px;">';
				$html .= "<b>Idioma: </b>".$row["language"]."<br>";
				$html .= "<b>Discapacidad: </b>".$row["discapacidad"]."<br>";
				$html .= "<b>C&oacute;digo postal: </b>".$row["zip_code"]."<br>";
		$html .= '</div>';
$html .='</div>';
$html .='<div id="separatorpuntos" style="margin-left:285px;">';
		$html .='<h3 style="color:#500;">
&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;
				</h3>';
$html .='</div>';
}
}
$html = utf8_encode($html);

include("../mpdf.php");
$mpdf=new mPDF(); 
$mpdf->useOnlyCoreFonts = true;
$mpdf->mirrorMargins = true;
$mpdf->SetDisplayMode('fullpage','two');
$mpdf->WriteHTML($html);
$mpdf->Output();
exit;
?>