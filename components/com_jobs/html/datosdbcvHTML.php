<?php
//include_once "../../../configuration.php" ;
//$config = new JConfig();

 // el método de envio usado. (en el ejemplo un link genera un GET. En el formulario se usa POST podria ser GET tambien ...)
$idResumenPDF =$_GET['cid'];

/*
$host = '172.16.80.15';
$user = 'usrsitios2010';
$db = 'bolsadeempleodb';
$password = 'sitiosutpl2010';*/


$host = 'localhost';
$user = 'root';
$db = 'bolsadeempleodb';
$password = '';

$conn = mysql_connect($host, $user, $password);
if (! $conn){
	echo "Error no se pudo conectar";
	exit(); 
}
$query = mysql_select_db($db, $conn);

 
$query = mysql_query("SELECT id, title, cedula, civil, language, street,
						name, discapacidad, home_phone, city,  state, lknjobs_dlnumber,
						school, lknjobs_schooldiplomauniversity, 
						school_city, school_state, diploma_text1,
						school2,school_city2,school_state2, diploma_text2,study_area2,
						school3,school_city3,school_state3, diploma_text3,study_area3,
						lang_1, lang_1_reading, lang_1_writing, lang_1_understanding,						
						lang_2, lang_2_reading, lang_2_writing, lang_2_understanding,						
						lang_3, lang_3_reading, lang_3_writing, lang_3_understanding,						
						lang_4, lang_4_reading, lang_4_writing, lang_4_understanding,
						employer3, 	employer3_city, employer3_state, employer3_phone,
						employer3_pos, employer3_from, employer3_leave, employer3_sup,
						employer2, 	employer2_city, employer2_state, employer2_phone,
						employer2_pos, employer2_from, employer2_leave, employer2_sup,
						employer1, 	employer1_city, employer1_state, employer1_phone,
						employer1_pos, employer1_from, employer1_leave, employer1_sup,
						employer, 	employer_city, employer_state, employer_phone,
						employer_pos, employer_from, employer_leave, employer_sup,
						text_resume, discapacidad
						ref3_name, ref3_telephone, ref3_relationship, ref3_years, ref3_address,
						ref2_name, ref2_telephone, ref2_relationship, ref2_years, ref2_address,
						ref1_name, ref1_telephone, ref1_relationship, ref1_years, ref1_address,
						work_phone, cell_phone, email_address, street, city, image, state, 
						school, school_city, school_state, school1,school_city1, school_state1, 
						lknjobs_available, skills,lang_1, lang_1_where, study_area1, zip_code, 
						civil FROM jos_jobs_resumes WHERE id=$idResumenPDF") or die ("Fallo en la consulta");
 

$findDate = mysql_num_rows($query);
$html = '';

$cv = new stdClass();
if($findDate > 0){ 
	while($row = mysql_fetch_assoc($query)){
		//datos personales
		$cv->nombre = utf8_encode($row['name']);
		$cv->nombres = utf8_encode($row['name']);
		$image="";
		if(empty($row['image'])){
			$image = "logoMas.jpg";
		}else{
			$image = "http://localhost/bolsaempleo/images/stories/jobs/cv_images/".$row['image'];
		}
		$cv->imagen = $image;
		$cv->estadoCivil = utf8_encode($row['civil']);
		$cv->direccion = utf8_encode($row['street']);
		$cv->ciudad = utf8_encode($row['city']);
		$cv->provincia = utf8_encode($row['state']);
		$cv->mail = utf8_encode($row['email_address']);
		$cv->convencional = utf8_encode($row['home_phone']);
		$cv->celular = utf8_encode($row['cell_phone']);
		$cv->licencia = (!empty($row['lknjobs_dlnumber']))? 'SI':'NO';

		//estudios
		//colegio
		$cv->nombreColegio = utf8_encode($row['school']);
		$cv->diplomaColegio = utf8_encode($row['lknjobs_schooldiplomauniversity']);
		$cv->ciudadColegio = utf8_encode($row['school_city']);
		$cv->provinciaColegio = utf8_encode($row['school_state']);

		//universidad
		$cv->nombreU = utf8_encode($row['school1']);
		$cv->ciudadU = utf8_encode($row['school_city1']);
		$cv->provinciaU = utf8_encode($row['school_state1']);
		$cv->anioTU = utf8_encode($row['diploma_text1']);
		$cv->tituloU = utf8_encode($row['study_area1']);

		//4to nivel
		$cv->nombreCN = utf8_encode($row['school2']);
		$cv->ciudadCN = utf8_encode($row['school_city2']);
		$cv->provinciaCN = utf8_encode($row['school_state2']);
		$cv->anioTCN = utf8_encode($row['diploma_text2']);
		$cv->tituloCN = utf8_encode($row['study_area2']);

		//otros estudios
		$cv->nombreOE = utf8_encode($row['school3']);
		$cv->ciudadOE = utf8_encode($row['school_city3']);
		$cv->provinciaOE = utf8_encode($row['school_state3']);
		$cv->anioTOE = utf8_encode($row['diploma_text3']);
		$cv->titulacionOE = utf8_encode($row['study_area3']);


		//idiomas		
		$cv->idiomas = array();
		
		if(!empty($row['lang_1'])){				
			$idioma1 = new  stdClass();
			$idioma1->nombre =  utf8_encode($row['lang_1']);
			$idioma1->lectura =  $row['lang_1_reading'];
			$idioma1->escritura =  $row['lang_1_writing'];
			$idioma1->comprension =  $row['lang_1_understanding'];
			$cv->idiomas[] = $idioma1;
		}

		if(!empty($row['lang_2'])){
			$idioma2 = new  stdClass();
			$idioma2->nombre = utf8_encode($row['lang_2']);
			$idioma2->lectura =  $row['lang_2_reading'];
			$idioma2->escritura =  $row['lang_2_writing'];
			$idioma2->comprension =  $row['lang_2_understanding'];
			$cv->idiomas[] = $idioma2;
		}

		if(!empty($row['lang_3'])){
			$idioma3 = new  stdClass();
			$idioma3->nombre =  $row['lang_3'];
			$idioma3->lectura =  utf8_encode($row['lang_3_reading']);
			$idioma3->escritura =  $row['lang_3_writing'];
			$idioma3->comprension =  $row['lang_3_understanding'];
			$cv->idiomas[] = $idioma3;
		}

		if(!empty($row['lang_4'])){
			$idioma4 = new  stdClass();
			$idioma4->nombre =  utf8_encode($row['lang_4']);
			$idioma4->lectura =  $row['lang_4_reading'];
			$idioma4->escritura =  $row['lang_4_writing'];
			$idioma4->comprension =  $row['lang_4_understanding'];
			$cv->idiomas[] = $idioma4;
		}

		//empleos		
		$cv->empleador = utf8_encode($row['employer']);
		$cv->ciudadE = utf8_encode($row['employer_city']);
		$cv->provinciaE = utf8_encode($row['employer_state']);
		$cv->telefonoE = utf8_encode($row['employer_phone']);
		$cv->posicionE = utf8_encode($row['employer_pos']);		
		$cv->fechaE = utf8_encode($row['employer_from']);	
		$cv->supervisorE = utf8_encode($row['employer_sup']);			
		$cv->razonE = utf8_encode($row['employer_leave']);		

		$cv->empleador1 = utf8_encode($row['employer1']);
		$cv->ciudadE1 = utf8_encode($row['employer1_city']);
		$cv->provinciaE1 = utf8_encode($row['employer1_state']);
		$cv->telefonoE1 = utf8_encode($row['employer1_phone']);
		$cv->posicionE1 = utf8_encode($row['employer1_pos']);		
		$cv->fechaE1 = utf8_encode($row['employer1_from']);		
		$cv->supervisorE1 = utf8_encode($row['employer1_sup']);	
		$cv->razonE1 = utf8_encode($row['employer1_leave']);		

		$cv->empleador2 = utf8_encode($row['employer2']);
		$cv->ciudadE2 = utf8_encode($row['employer2_city']);
		$cv->provinciaE2 = utf8_encode($row['employer2_state']);
		$cv->telefonoE2 = utf8_encode($row['employer2_phone']);
		$cv->posicionE2 = utf8_encode($row['employer2_pos']);		
		$cv->fechaE2 = utf8_encode($row['employer2_from']);	
		$cv->supervisorE2 = utf8_encode($row['employer2_sup']);		
		$cv->razonE2 = utf8_encode($row['employer2_leave']);		

		$cv->empleador3 = utf8_encode($row['employer3']);
		$cv->ciudadE3 = utf8_encode($row['employer3_city']);
		$cv->provinciaE3 = utf8_encode($row['employer3_state']);
		$cv->telefonoE3 = utf8_encode($row['employer3_phone']);
		$cv->posicionE3 = utf8_encode($row['employer3_pos']);		
		$cv->fechaE3 = utf8_encode($row['employer3_from']);	
		$cv->supervisorE3 = utf8_encode($row['employer3_sup']);		
		$cv->razonE3 = utf8_encode($row['employer3_leave']);	

		//referencias
		$cv->nombreRef1 = utf8_encode($row['ref1_name']);
		$cv->telefonoRef1 = utf8_encode($row['ref1_telephone']);
		$cv->relacionRef1 = utf8_encode($row['ref1_relationship']);
		$cv->aniosRef1 = utf8_encode($row['ref1_years']);
		$cv->direccionRef1 = utf8_encode($row['ref1_address']);		

		$cv->nombreRef2 = utf8_encode($row['ref2_name']);
		$cv->telefonoRef2 = utf8_encode($row['ref2_telephone']);
		$cv->relacionRef2 = utf8_encode($row['ref2_relationship']);
		$cv->aniosRef2 = utf8_encode($row['ref2_years']);
		$cv->direccionRef2 = utf8_encode($row['ref2_address']);		

		$cv->nombreRef3 = utf8_encode($row['ref3_name']);
		$cv->telefonoRef3 = utf8_encode($row['ref3_telephone']);
		$cv->relacionRef3 = utf8_encode($row['ref3_relationship']);
		$cv->aniosRef3 = utf8_encode($row['ref3_years']);
		$cv->direccionRef3 = utf8_encode($row['ref3_address']);		

		//discapacidad
		$cv->resumenDisc = utf8_encode($row['discapacidad']);				
		$cv->resumen = utf8_encode($row['text_resume']);				
	}

}
include_once("esquemaCV.php"); 
?>