<?php
/*======================================================================*\
|| #################################################################### ||
|| # ---------------------------------------------------------------- # ||
|| # com_jobs is a native Job Management Component for Joomla  	      # ||
|| # This component is not free or public.			      			  # ||
|| # It's for only our licensed customer			      			  # ||
|| # If you are not a licensed customer, You are not allowed to use it# ||
|| # Developer: Ulas ALKAN					      					  # ||
|| # Date: April 2009						      					  # ||
|| # This file may not be redistributed in whole or significant part. # ||
|| # ------------ OUR COMPONENT IS NOT FREE SOFTWARE ---------------- # ||
|| # www.instantphp.com |  www.instantphp.com/license.html?start=1    # ||
|| #################################################################### ||
\*======================================================================*/
//spelling errors are corrected by Gary Hessler. Thanks to Gary

if(! (defined('_JEXEC') || defined('_VALID_MOS'))){
	die('El acceso directo a esta ubicaci&oacute;n no est&aacute; permitido.');
}

//Admin Panel
define('_lkn_worker_search', 'B&uacute;squeda de empleos');
define('_lkn_description_front_end', 'Descripción');
define('_lkn_control_panel', 'Panel de Control');
define('_lkn_list_category', 'Lista de Categor&iacute;as');
define('_lkn_list_credit_history','Listar historial de créditos');
define('_lkn_list_company', 'Lista de Empresas');
define('_lkn_list_jobs', 'Lista de Empleos');
define('_lkn_list_cover_letters', 'Lista de cartas de presentaci&oacute;n');
define('_lkn_list_countries', 'Lista de Paises');
define('_lkn_list_status', 'Estado de la lista de solicitud');
define('_lkn_list_resumes', 'Lista de curr&iacute;culum vitae');
define('_lkn_list_applications', 'Lista de Solicitudes');
define('_lkn_list_email_templates', 'Lista de Plantillas de Correo Electr&oacute;nico');
define('_lkn_list_configuration', 'Configuraciones');
define('_lkn_title_curriculum_resume', 'Curr&iacute;culum Vitae');


define('_lkn_until', ' Disponible hasta');
define('_lkn_list_applicationslist', 'Mis solicitudes');
define('_lkn_job_cityjobstate', 'Provincia y Ciudad del Empleo');

define('_lkn_empresas', 'Empresas');

define('_lkn_credit_total', 'Total de Cr&eacute;ditos');
define('_lkn_credit_can_search', 'Este usuario puede reanudar la b&uacute;squeda hasta que aparezca');
define('_lkn_credit_history_full_payment_detail', 'Detalles de Pago Completo');
define('_lkn_credit_history_for', 'Historial del cr&eacute;dito para {USERNAME}'); //Historial de Crédito
define('_lkn_credit_buying_history', 'Historial de Cr&eacute;dito de Compras');
define('_lkn_credit_buying_history_curreny', 'Modena');
define('_lkn_credit_buying_history_payer_email', 'Correo electr&oacute;nico del Pagador');
define('_lkn_credit_buying_history_transaction_id', 'Identificador de transacci&oacute;n');
define('_lkn_credit_buying_history_verify_sign', 'Verificar Registrarse');
define('_lkn_credit_buying_history_attribs', 'Otros Datos');
define('_lkn_credit_buying_history_payment_date', 'Fecha de Pago');
define('_lkn_credit_buying_history_credit_count', 'Cr&eacute;ditos(s)');
define('_lkn_credit_buying_history_credit_cost', 'Cantidad de Pago');
define('_lkn_credit_buying_history_no_result', '<h2> Este usuario no ha comprado ning&uacute;n cr&eacute;dito</h2s>');
define('_lkn_credit_speding_history', 'Historia de gastos de cr&eacute;dito ');
define('_lkn_credit_speding_history_desc', ' Usted puede ver cuando y donde usted ha gastado sus cr&eacute;ditos ');
define('_lkn_credit_speding_history_action', 'Acci&oacute;n');
define('_lkn_credit_speding_history_action_add_job', 'Oferta de Empleo');
define('_lkn_credit_speding_history_action_search_resume_database', 'Reanudaci&oacute;n de b&uacute;squeda');
define('_lkn_credit_speding_history_spent_credit', 'Gasto de Cr&eacute;ditos');
define('_lkn_credit_speding_history_spent_date', 'Fecha');
define('_lkn_credit_speding_history_no_result', ' Este usuario no ha gastado ning&uacute;n cr&eacute;dito');

define('_lkn_category_name', 'Area del empleo a desempeñar');
define('_lkn_category_select', '—Seleccione la categor&iacute;a--');
define('_lkn_parent_category', 'Categor&iacute;a superior');
define('_lkn_category_add', 'Agregar nueva categor&iacute;a');
define('_lkn_category_update', 'Actualizar categor&iacute;a');
define('_lkn_category_no', 'No hay una categor&iacute;a');

define('_lkn_country', 'Pa&iacute;s de la empresa');
define('_lkn_country_select', '--Seleccionar el pa&iacute;s--');
define('_lkn_country_add', 'Agregar un nuevo pa&iacute;s');
define('_lkn_country_update', 'Actualizar el pa&iacute;s');

define('_lkn_status', 'Estado');
define('_lkn_status_add', 'Agregar un nuevo estado');
define('_lkn_status_update', 'Actualizar estado');
define('_lkn_delete_email','Eliminar');
define('_lkn_email_template_user', 'Lista de platillas de correo electrónico');

define('_lkn_email_template', 'Plantillas de correo de electr&oacute;nico');
define('_lkn_email_template_add', 'Agregar plantilla de correo de electr&oacute;nico');
define('_lkn_email_template_update', 'Actualizar plantilla de correo de electr&oacute;nico');
define('_lkn_email_template_desc', '<p>Las plantillas de correo electr&oacute;nico le ayudan mientras usted esta respondiendo a sus solicitantes. Estas plantillas pueden ser vistas por usted mientras usted esta revisando la solicitud. Existe algunos par&aacute;metros que puede usar.</p><strong>Par&aacute;metros</strong><br /><p>Nombre de la Empresa<br />Nombre del Candidato<br />Titulo del Empleo</p>');

define('_lkn_company', 'Empresa');
define('_lkn_company_owner', 'Propietarios de la empresa');
define('_lkn_company_add', 'Agregar nueva empresa');
define('_lkn_company_update', 'Actualizar datos de la empresa');
define('_lkn_company_logo', 'Logotipo de la empresa');
define('_lkn_company_logo_desc', 'Únicamente se permiten los extensiones {IMAGE_TYPES} como tipos de imágenes. Tiene permitido cargar una imagen de tamaño 128x128 pixeles. <b>El tamaño m&aacute;ximo del archivo es de 2MB</b>'); 

//Solo imágenes jpeg,jpg,gif,png están permitidas. Usted puede cargar máximo 200 Kb de tamaño de la imagen.
define('_lkn_company_details', 'Datos de la empresa');
define('_lkn_company_address', 'Direcci&oacute;n');
define('_lkn_company_city', 'Ciudad');
define('_lkn_company_zipcode', 'C&oacute;digo Postal');
define('_lkn_company_companyurl', 'Direcci&oacute;n web de la empresa');
define('_lkn_company_contactname', 'Nombre de contacto (RR.HH)');
define('_lkn_company_contactphone', 'Tel&eacute;fono de contacto');
define('_lkn_company_contactemail', 'Correo electr&oacute;nico de contacto');
define('_lkn_company_owner_credits', 'Cr&eacute;ditos de la empresa');

define('_lkn_job', 'Empleo');
define('_lkn_job_latest', '&Uacute;ltimos empleos');
define('_lkn_job_details', 'Datos del empleo');
define('_lkn_job_search', 'B&uacute;scar empleo');
define('_lkn_job_reference', 'N&uacute;mero de referencia');
define('_lkn_ref_short', 'Ref'); //Número de referencia del Empleo
define('_lkn_job_number_of_jobs', 'N&uacute;mero de puestos vacantes');
define('_lkn_job_job_type', 'Disponibilidad de tiempo');
define('_lkn_job_description', 'Descripci&oacute;n del empleo');
define('_lkn_job_country', 'Pa&iacute;s del Empleo');
define('_lkn_job_qualifications', 'Aptitudes laborales');
define('_lkn_job_salary', 'Salario del empleo');
define('_lkn_job_show_salary', 'Mostrar sueldo');
define('_lkn_job_publish_up', 'Inicio de oferta laboral');
define('_lkn_job_publish_down', 'Fecha l&iacute;mite de publicaci&oacute;n');
define('_lkn_job_hits', 'Visitas');
define('_lkn_job_experience', 'Experiencia (años)');
define('_lkn_job_category', 'Categor&iacute;a del empleo');
define('_lkn_job_add', 'Añadir nuevo empleo');
define('_lkn_job_update', 'Actualizar empleo');
define('_lkn_job_degree', 'Nivel de educaci&oacute;n requerida');
define('_lkn_job_apply', 'Aplicar para este empleo');
define('_lkn_job_add_cover_letter', 'Agregar una carta de presentaci&oacute;n para este Empleo');

define('_lkn_cover_letter', 'Cartas de presentaci&oacute;n');
define('_lkn_cover_letter2', 'Descripci&oacute;n de mi propuesta');
define('_lkn_cover_letter_front_desc', 'Si usted ha creado una carta de presentaci&oacute;n, usted puede buscarla en su p&aacute;gina de "Mis herramientas" o usted puede crear una nueva carta de presentaci&oacute;n:');
define('_lkn_cover_letter_what', 'Una carta de presentaci&oacute;n o una carta de motivaci&oacute;n es una carta de introducci&oacute;n adjunta, o acompañada de otro documento');
define('_lkn_cover_letter_add', 'Añadir una nueva carta de presentaci&oacute;n');
define('_lkn_cover_letter_update', 'Actualizar carta de presentaci&oacute;n');
define('_lkn_cover_letter_update_save', 'Actualizar cambios');

define('_lkn_resume', 'Postulante');
define('_lkn_resume_selection', 'Selecci&oacute;n de currículum vitae');
define('_lkn_resume_selection_desc', 'Puede utilizar su currículum vitae para aplicar los empleos que son listados a continuaci&oacute;n. Por favor seleccione a uno de ellos.');
define('_lkn_resume_add', 'Agregar nuevo currículum vitae');
define('_lkn_resume_update', 'Actualizar currículum vitae');
define('_lkn_general_information', 'General');
define('_lkn_resume_title', 'Título y Currículum vitae');
define('_lkn_resume_title_tip', 'Título del currículum vitae');
define('_lkn_resume_posting_language', 'Lenguaje del currículum vitae');
define('_lkn_resume_email_address', 'Correo electr&oacute;nico');
define('_lkn_resume_created', 'Fecha de creaci&oacute;n');
define('_lkn_resume_update_date', '&Uacute;ltima Fecha de modificaci&oacute;n');
define('_lkn_resume_city', 'Ciudad');
define('_lkn_cedula','Cedula');
define('_lkn_resume_phone', 'Tel&eacute;fono');
define('_lkn_resume_cellphone', 'Celular');
define('_lkn_resume_street', 'Parroquia');
define('_lkn_resume_state', 'Estado');
define('_lkn_resume_name', 'Nombres completos');
define('_lkn_resume_desired_pay', 'Aspiraci&oacute;n salarial');
define('_lkn_resume_job_type', 'Disponibilidad de tiempo');
define('_lkn_total_experience', 'Experiencia total');
define('_lkn_resume_name_tip', 'Nombres y Apellidos completos del solicitante');
define('_lkn_resume_city_tip', 'Ciudad del solicitante');
define('_lkn_resume_street_tip', 'Parroquia del solicitante');
define('_lkn_resume_phone_tip', 'Tel&eacute;fono del solicitante');
define('_lkn_resume_cellphone_tip', 'Celular del solicitante');
define('_lkn_config_email_tip', 'Correo electr&oacute;nico del solicitante');
//Oskar
//Variables para link de descargar de archivos del postulante
define('_lkn_resume_link_files', 'Arcchivos cargados');
define('_lkn_config_link_files_tip', 'Clic para descargar el archivo adjunto');
//Oskar
//Variables para nombre de campos del solicitante (Universidad)
define('_lkn_resume_user_university1', 'Universidad');
define('_lkn_resume_user_university1_tip', 'Nombre de la universidad');
define('_lkn_resume_user_ciudad1', 'Ciudad');
define('_lkn_resume_user_ciudad1_tip', 'Ciudad de la universidad');
define('_lkn_resume_user_provincia1', 'Provincia');
define('_lkn_resume_user_provincia1_tip', 'Provincia de la universidad');
define('_lkn_resume_user_area_estudio1', 'Título obtenido');
define('_lkn_resume_user_area_estudio1_tip', '&Aacute;rea de estudio en la que se graduo');
define('_lkn_resume_user_diploma1_tip', 'Estado académico');
define('_lkn_resume_user_diploma1', 'Estado académico');

define('_lkn_resumes_discapacidad','Discapacidades');
define('_lkn_resumes_title_get','T&iacute;tulo obtenido en la universidad');
//Variables para nombre de campos del solicitante (Postgrado)
define('_lkn_resume_user_university2', 'Nombre de la universidad');
define('_lkn_resume_user_area_estudio2', 'Título obtenido');
define('_lkn_resume_user_diploma2', 'Estado académico');

//Variables para el tipo de trabajo y experiencia
define('_lkn_resume_user_job_type', 'Disponibilidad de tiempo');
define('_lkn_resume_user_experiencia_total', 'Nivel de experiencia');

//Variables para el empleo mas reciente del solicitante
define('_lkn_resume_user_employer', 'Empleador');
define('_lkn_resume_user_employer_tip', 'Empeo m&aacute;s reciente');
define('_lkn_resume_user_phone_employer', 'Tel&eacute;fono del empleador');
define('_lkn_resume_user_position_employer', 'Puesto de trabajo');

define('_lkn_app', 'Solicitud');
define('_lkn_app_details', 'Datos de la solicitud');
define('_lkn_app_update', 'Actualizaci&oacute;n de solicitud');
define('_lkn_app_last_update_date', '&Uacute;ltima fecha de modificaci&oacute;n');
define('_lkn_app_date', 'Fecha de solicitud');
define('_lkn_app_status', 'Estatus de solicitud');
define('_lkn_app_comments', 'Comentarios de la solicitud');
define('_lkn_app_respond', 'Respuesta para el solicitante');
define('_lkn_app_email_from', 'Su correo electr&oacute;nico');
define('_lkn_app_email_to', 'Correo electr&oacute;nico de la solicitud');
define('_lkn_app_email_subject', 'Asunto del correo electr&oacute;nico');
define('_lkn_app_email_body', 'Cuerpo del correo electr&oacute;nico');
define('_lkn_app_email_template', 'Su plantilla de correo electr&oacute;nico');
define('_lkn_app_email_history', 'Correo electr&oacute;nico');
define('_lkn_app_email_sender', 'Correo electr&oacute;nico del remitente');
define('_lkn_app_email_date', 'Fecha del correo electr&oacute;nico');
define('_lkn_app_email_send', 'Enviar correo electr&oacute;nico al solicitante');
define('_lkn_app_count', 'Solicitudes');
define('_lkn_history_solicitud', 'Historial de solicitudes');
//genel
define('_lkn_id', 'ID');
define('_lkn_published', 'Publicado');
define('_lkn_published_x', 'Sin publicar');
define('_lkn_published_deleted', 'Eliminar por usuario');
define('_lkn_management', 'Administrador');
define('_lkn_alias', 'Alias');
define('_lkn_no', 'No');
define('_lkn_yes', 'Si');
define('_lkn_support', 'Soporte');
define('_lkn_filter', 'Filtrar');
define('_lkn_submit', 'Buscar');
define('_lkn_cancel', 'Cancelar');
define('_lkn_go', 'Ir');
define('_lkn_back', 'Regresar');
define('_lkn_currency', '$');
define('_lkn_reset', 'Limpiar');
define('_lkn_edit', 'Editar');
define('_lkn_select_state', '--Seleccionar estado--');
define('_lkn_paging_first', '&lsaquo; Primero');
define('_lkn_paging_pervious', '<<');
define('_lkn_paging_next', '>>');
define('_lkn_paging_last', '&Uacute;ltimo &rsaquo;');
define('_lkn_mail_send', 'Su correo electr&oacute;nico ha sido enviado a {NAME}'); //Usted envía el correo a Ulas Alkan define('_lkn_mail_send_error', 'Su correo no ha sido enviado. Por favor informar al editor del sitio');

define('_lkn_home_page_post_resume','Publique su hoja de vida!');//Post your resume and have employers find you!
define('_lkn_home_page_rss_feeds','&Uacute;ltimos empleos en nuestro sitio web');//Getting latest jobs from our web site is one click away from you
define('_lkn_home_page_cover_letter_desc','Crear cartas de presentaci&oacute;n para tus aplicaciones');//Create cover letters for your applications
define('_lkn_home_page_my_application_desc','Ver todas las aplicaciones');//View all of your applications together and follow the responses
define('_lkn_added', 'La informaci&oacute;n ha sido cargada correctamente');
define('_lkn_updated', 'La informaci&oacute;n ha sido actualizada correctamente');
define('_lkn_delete_info', 'La informaci&oacute;n ha sido eliminada correctamente');
define('_lkn_delete_problem', 'El registro {ID} noha sido eliminado debido a los registros activos');
define('_lkn_credits', 'Cr&eacute;ditos');
define('_lkn_info', 'Informaci&oacute;n');
define('_lkn_license', 'Licencia');
define('_lkn_meta', 'Metadatos');
define('_lkn_meta_desc', 'Describir objetivos');
define('_lkn_meta_keywords', 'Palabras clave');
define('_lkn_image', 'Imagen');
define('_lkn_username', 'Nombre de usuario');
define('_lkn_user_name_bolsa', 'Usuario');
define('_lkn_title', 'T&iacute;tulo');
define('_lkn_created', 'Fecha de creaci&oacute;n');
define('_lkn_login_to_continue', 'Usted debe estar registrado y conectado para solicitar este empleo');

//Oskar
//Variables para el formulario de empresas
define('_lkn_company_telefono','Tel&eacute;fono de la empresa');
define('_lkn_company_telefono_tip','Ingrese el tel&eacute;fono de la empresa');
define('_lkn_company_fax','Fax de la empresa');
define('_lkn_company_fax_tip','Ingrese el fax de la empresa');
define('_lkn_company_tip','Ingrese el nombre de la empresa');


//<macf>
//2011-02-03
define('_lkn_rhumanos','Representante legal');
define('_lkn_rhumanos_tip','Ingrese el nombre del representante legal'); 

define('_lkn_config', 'Configuraci&oacute;n');
define('_lkn_config_job_posting', 'Oferta de empleo');
define('_lkn_config_job_publish_down', 'Tiempo por defecto para publicar');
define('_lkn_config_job_publish_down_months', 'Mes(s)');
define('_lkn_config_job_publish_down_desc', 'Estas configuraciones afectan el tiempo m&iacute;nimo de publicaci&oacute;n.<em> por ejemplo, si Ud. Selecciona 2 para este campo, un empleo ser&aacute; eliminado despu&eacute;s de dos meses a partir de su fecha de creaci&oacute;n.</em>');
define('_lkn_config_general', 'Configuraciones generales');
define('_lkn_config_date_format', 'Formato de fecha');
define('_lkn_config_default_status', 'Estado por defecto');
define('_lkn_config_default_status_desc', 'Estado cuando un usuario aplica para un Empleo');
define('_lkn_config_date_format_desc', 'Seleccione el formato de Fecha que desee usar');
define('_lkn_config_records_per_page', 'Registros en el sitio');
define('_lkn_config_records_per_page_desc', 'M&aacute;ximo n&uacute;mero de registros en una p&aacute;gina');
define('_lkn_config_language', 'Lenguaje');
define('_lkn_config_language_desc', 'Componentes de Lenguaje');
define('_lkn_config_email', 'Correo electr&oacute;nico');
define('_lkn_config_email_desc', '* Si selecciona Gmail como remitente del correo electr&oacute;nico, usted tiene que escribir los datos de su cuenta de Gmail. Nombre de usuario: youremail@gmail.com , Contraseña: your_password. <br />* Si usted selecciona Gmail como su remitente de correo, Usted podr&iacute;a necesitar un servidor de certificado SSL <br />* Si usted escoge la opci&oacute;n SMTP, Los valores necesarios se tomaran de su archivo de configuraci&oacute;n Joomla');
define('_lkn_config_email_mailer', '');
define('_lkn_config_email_mailer_mail', 'Funci&oacute;n principal PHP');
define('_lkn_config_email_mailer_sendmail', 'Enviar mail');
define('_lkn_config_email_mailer_smtp', 'Servidor SMTP');
define('_lkn_config_email_mailer_gmail', 'Gmail');
define('_lkn_config_gmail_username', 'Nombre de usuario de la cuenta en Gmail');
define('_lkn_config_gmail_password', 'Contraseña de la cuenta en Gmail');
define('_lkn_config_credit_system_inform_me', 'Cr&eacute;dito compra');
define('_lkn_config_credit_system_inform_me_desc', 'Usted recibir&aacute; un correo electr&oacute;nico cada vez que alguien adquiera cr&eacute;dito.(Si el sistema de cr&eacute;dito est&aacute; activado)');
define('_lkn_config_company_adding_inform_me', 'Agregar o actualizar una empresa');
define('_lkn_config_company_adding_inform_me_desc', 'Usted recibir&aacute; un correo electr&oacute;nico cada vez que alguien agregre una nueva empresa o actualice la informaci&oacute;n de la empresa');

define('_lkn_config_inform_email', 'Notificaci&oacute;n de correo electr&oacute;nico');
define('_lkn_config_inform_email_desc', 'Especificar donde deben ser enviadas todas las notificaciones de mensajes.');
define('_lkn_config_image', 'Imagen');
define('_lkn_config_image_logo_image_folder', 'Imagen del logotipo de la empresa');
define('_lkn_config_image_logo_image_folder_desc', 'Esta carpeta debe estar escrito de acuerdo a su root. La carpeta debe existir. Los components no ser&aacute;n revisados para las carpetas existentes. La ruta de la carpeta debe comenzar y finalizar con / Por defecto: /images/stories/jobs/logos/');

define('_lkn_config_image_resume_image_folder', 'Directorio de resumen de im&aacute;genes');
define('_lkn_config_image_allowedimages', 'Permitir tipos de im&aacute;genes');
define('_lkn_config_image_allowedimages_desc', 'Escribir entre comas separadas. Por defecto: jpeg,jpg,png,gif');
define('_lkn_config_image_uploadSizeLimit', 'Tamaño de la imagen (Kb)');
define('_lkn_config_image_uploadSizeLimit_desc', 'El m&aacute;ximo tamaño de la imagen para cargar en Kb. Por defecto: 200');
define('_lkn_config_home_page', 'P&aacute;gina de inicio');
define('_lkn_config_home_page_categories', 'Mostrar categor&iacute;as de Empleos');
define('_lkn_config_home_page_categories_desc', 'Mostrar categor&iacute;as de Empleos en el componente de la p&aacute;gina principal.');
define('_lkn_config_home_page_latest_jobs', 'Mostrar &uacute;ltimos Empleos');
define('_lkn_config_home_page_latest_jobs_desc', 'Mostrar &uacute;ltimos empleos en el componente de la p&aacute;gina principal');
define('_lkn_config_home_page_latest_jobs_count', 'Cuenta de los &uacute;ltimos empleos');
define('_lkn_config_home_page_latest_jobs_count_desc', 'Si los &uacute;ltimos empleos se muestran en la p&aacute;gina principal, cu&aacute;ntos?');
define('_lkn_config_home_page_simple_search_form', 'Mostrar formulario de b&uacute;squeda simple.');
define('_lkn_config_home_page_simple_search_form_desc', 'Mostrar el Formulario de b&uacute;squeda simple en el component de p&aacute;gina principal.');
define('_lkn_config_company_activate', 'Activar funciones de la empresa');
define('_lkn_config_company_activate_desc', '<p>Si usted selecciona \'Si\' , Sus usuarios podr&iacute;an ser capaz de agregar sus Empresas (y el uso de las funciones relacionados, como oferta de empleo, responder a los demandantes, buscar un curriculum vitae en la base de datos) para su sitio web. </p><p>Esta es una soluci&oacute;n ideal, si usted est&aacute; usando com_jobs solo para su empresa (solo una empresa)</p><p>Si usted est&aacute; usando nuestro componente para ejecutar un portal de empleo como monster.com, Seleccione  \'Si\' para esta opci&oacute;n.</p><p>Nota: \'Super Administrador\' usuarios de grupo est&aacute;n fuera de este criterio</p>');

define('_lkn_config_thank_you_message', 'Gracias por su mensaje');

define('_lkn_config_credit_system', 'Sistema de cr&eacute;dito');
define('_lkn_config_credit_system_active_desc', 'Sistema de Cr&eacute;dito para<strong>Empleadores</strong>Activo o no. Si el sistema de cr&eacute;ditos est&aacute; activado, su cuenta de cr&eacute;dito ser&aacute; revisada. Si no tiene cr&eacute;dito suficiente, no ser&aacute; capaz de publicar.<br />Si el sistema de cr&eacute;dito no est&aacute; activado, Los propietarios de la empresa podr&aacute; publicar ofertas de empleo sin necesidad de confirmaci&oacute;n');
define('_lkn_config_credit_system_active', 'Sistema de Cr&eacute;dito activado?');
define('_lkn_config_credit_system_paypal_email', 'Correo electr&oacute;nico de PayPal');
define('_lkn_config_credit_system_paypal_email_desc', 'Ingresar su correo electr&oacute;nico de PayPal donde los pagos podr&aacute;n ser enviados');
define('_lkn_config_credit_system_sandbox_email', 'Sandbox e-mail');
define('_lkn_config_credit_system_sandbox_email_desc', 'Ingrese su correo electr&oacute;nico de Sandbox. Sandbox es un conjunto de herramientas y recursos que permiten a los desarrolladores y comerciantes, desarrollar sitios web de comercio electr&oacute;nico y aplicaciones web, utilizando los servicios de PayPal.<br /><br />usted puede conocer m&aacute;s sobre Sandbox en<a href="https://developer.paypal.com/" target="_new">https://developer.paypal.com/</a>');
define('_lkn_config_credit_system_sandbox', 'Sandbox');
define('_lkn_config_credit_system_sandbox_desc', 'El modo de Sandbox est&aacute; activado o no');
define('_lkn_config_credit_system_cost', 'Costo de un cr&eacute;dito ($)');
define('_lkn_config_credit_system_cost_desc', '<p> ¿Cu&aacute;l es el costo de un cr&eacute;dito?</p><p>Por ejemplo , si un cr&eacute;dito cuesta $0.5 y su usuario quiere comprar 20 cr&eacute;ditos, Al usuario se le cobrar&aacute; $10 (0.5*20=$10)</p>');
define('_lkn_config_credit_system_adding_a_job_cost', 'Costo de empleo');
define('_lkn_config_credit_system_adding_a_job_cost_desc', '¿Cu&aacute;ntos cr&eacute;ditos se añade a un costo empleo?');
define('_lkn_config_credit_system_resume_search_one_day_cost', 'El costo para reanudar una b&uacute;squeda es de 1 d&iacute;a');
define('_lkn_config_credit_system_resume_search_one_day_cost_desc', '<p>Los propietarios de la Empresa pueden comprar<em> reanudar la base de datos de b&uacute;squeda </em>con sus cr&eacute;ditos.</p><p>Si usted selecciona 4 cr&eacute;ditos para<em>1 d&iacute;a reanudar la base de datos de b&uacute;squeda </em>y el propietario de la empresa quiere comprar cinco d&iacute;as de reanudar la b&uacute;squeda de base de datos, se le cobrar&aacute; 20 cr&eacute;ditos por 5 d&iacute;as de reanudar la base de datos de b&uacute;squeda </p>');

define('_lkn_home_page', 'P&aacute;gina principal');

define('_lkn_worker', 'Herramientas de empleo para {NAME}'); //Herramientas de Empleo para Ulas Alkan
define('_lkn_worker_my_details', 'Mis datos de membres&iacute;a');
define('_lkn_worker_worker_name', 'Nombres y Apellidos');
define('_lkn_worker_worker_email', 'Correo electr&oacute;nico');
define('_lkn_worker_worker_last_visit_date', 'Fecha de &uacute;ltima visita');
define('_lkn_worker_no_resume', 'Usted no tiene curriculum vitae en archivo');
define('_lkn_worker_my_tools', 'Mis herramientas');
define('_lkn_worker_my_cover_letters', 'Cartas de presentaci&oacute;n');
define('_lkn_worker_my_cover_letters_desc', 'Podr&aacute; crear sus propias cartas de presentaci&oacute;n y tenerlas disponibles en cualquier momento, las mismas le ahorraran tiempo al momento de postular a un empleo. <b>Podr&aacute; ingresar un m&aacute;ximo de 1000 carateres</b>');
define('_lkn_worker_my_applications', 'Mis solicitudes');
define('_lkn_worker_my_applications_desc', 'Se muestran todas las solicitudes de empleo a las que usted aplic&oacute;');
define('_lkn_worker_response_date', 'Fecha de respuesta');
define('_lkn_worker_response', 'Respuesta');
define('_lkn_worker_application_no', 'Usted no ha solicitado ofertas de empleo');
define('_lkn_worker_applicant_email', 'Correo electr&oacute;nico del solicitante');
define('_lkn_worker_company_email', ' Correo electr&oacute;nico de la Empresa');
define('_lkn_worker_app_info_table_job_active', 'El empleo que usted ha solicitado est&aacute; activo ');
define('_lkn_worker_app_info_table_job_inactive', ' El empleo que usted ha solicitado est&aacute; inactivo ');
define('_lkn_worker_app_info_table_read_message', 'Usted tiene mensajes le&iacute;dos');
define('_lkn_worker_app_info_table_unread_message', 'Usted tiene mensajes sin leer');
define('_lkn_worker_app_info_table_has_cover_letter', 'Las solicitudes tienen una carta de presentaci&oacute;n. Usted puede editar la carta de presentaci&oacute;n haciendo clic al icono');
define('_lkn_worker_app_info_table_has_not_cover_letter', 'La solicitud no tiene carta de presentaci&oacute;n. Usted puede agregar una carta de presentaci&oacute;n haciendo clic en el icono');
define('_lkn_worker_total_applications', 'Total de solicitudes: {NUMBER}'); //Total de Solicitudes	: 856


define('_lkn_employer_tools', 'Herramientas del empleador');
define('_lkn_employer_add_new_job', 'Publicar un empleo');
define('_lkn_employer_add_new_job_desc', 'En este m&oacute;dulo se presenta un formulario para la publicaci&oacute;n de un empleo, en donde ingresar&aacute; informaci&oacute;n como el t&iacute;tulo, categor&iacute;a, grado de estudio, fecha de inicio disponible, fecha de finalizaci&oacute;n y  la descripci&oacute;n del empleo.');
define('_lkn_employer_no_company', 'No hay ninguna empresa');
define('_lkn_employer_list_jobs', 'Mi lista de empleos');
define('_lkn_employer_list_jobs_desc', ' En este m&oacute;dulo usted encontrar&aacute; todos los empleos que ha publicado, conocer su estado y actualizar su informaci&oacute;n.');
define('_lkn_employer_list_jobs_desc_', '<p> En este m&oacute;dulo usted encontrar&aacute; todos los empleos que ha publicado, conocer su estado y actualizar su informaci&oacute;n.<p/>');
define('_lkn_employer_info_table_job_is_published', 'Su empleo est&aacute; activo y ha sido publicado. Usted puede eliminar la publicaci&oacute;n haciendo clic en este icono.');
define('_lkn_employer_info_table_job_is_unpublished', 'Su empleo no est&aacute; activo y no ha sido publicado. Usted puede publicar haciendo clic en este icono ');
define('_lkn_employer_info_table_view', 'Si su empleo est&aacute; activo y ha sido publicado. Usted puede ver c&oacute;mo se ve haciendo clic en este icono');
define('_lkn_employer_info_table_edit', 'Usted puede usar este bot&oacute;n para editar los datos de su empleo');
define('_lkn_employer_info_table_email_template_published', 'Su plantilla de correo electr&oacute;nico esta publicada.Usted puede usarla ahora. Si usted quiere, usted puede eliminar la publicaci&oacute;n haciendo clic en este icono');
define('_lkn_employer_info_table_email_template_published_x', 'Su plantilla de correo electr&oacute;nico no est&aacute; publicada. Usted no puede usarla ahora. Si usted quiere, usted puede publicar haciendo clic en este icono');
define('_lkn_employer_info_table_email_template_edit', 'Usted puede editar su plantilla de correo electr&oacute;nico hacienda clic en este icono');
define('_lkn_employer_info_table_email_template_delete', 'Usted puede eliminar su plantilla de correo electr&oacute;nico hacienda clic en este icono');
define('_lkn_employer_info_inactive', 'Su empleo no ha sido publicado debido a que se agot&oacute; su tiempo de publicaci&oacute;n. Tiempo de publicaci&oacute;n se ha pasado.');
define('_lkn_employer_email_templates', 'Plantillas de correo electr&oacute;nico');
define('_lkn_employer_email_templates_desc', 'Usted puede crear una plantilla de Correo Electr&oacute;nico  para responder a sus solicitantes. Esta plantilla de Correo Electr&oacute;nico se mostrar&aacute; a usted mientras este respondiendo a sus solicitantes.');
define('_lkn_name_resume_front', 'Título');
define('_lkn_employer_applications', 'Ver sus postulantes');
define('_lkn_employer_applications_desc', 'En esta secci&oacute;n usted puede visualizar las solicitudes sobre sus empleos publicados con una breve descripci&oacute;n del curr&iacute;culum de sus solicitantes as&iacute; como tambi&eacute;n establecer contacto con ellos.');
define('_lkn_employer_buy_credits', 'Comprar cr&eacute;ditos');
define('_lkn_employer_buy_credits_desc', 'Usted necesita cr&eacute;ditos para agregar ofertas de empleo en nuestro sitio web. Este m&oacute;dulo le ayudar&aacute; a comprar cr&eacute;ditos. ');
define('_lkn_employer_search_resume', 'Buscar breve descripci&oacute;n de currículum');
define('_lkn_employer_search_resume_desc', 'En esta secci&oacute;n usted dispone de un buscador de los extractos de la hoja de vida de los postulantes, empleando criterios como titulo y nombre del postulante.');
define('_lkn_employer_total_credit', 'Cr&eacute;ditos totales:{NUMBER}'); //Algo parecido a créditos totals: 56
define('_lkn_employer_total_jobs_can_post', 'Usted puede publicar {NUMBER} ofertas de empleo con estos cr&eacute;ditos'); //Algo similar a 52 ofertas de empleo que usted puede publicar con sus créditos. define('_lkn_employer_can_search_resume_database', 'Usted puede reanudar la búsqueda en nuestra base de datos hasta {DATE}');
define('_lkn_employer_can_search_resume_database_extend_this', 'Ampli&eacute; esta fecha');
define('_lkn_employer_can_not_search_resume_database', 'Usted no tiene permitido reanudar su b&uacute;squeda en nuestra base de datos'); //esto se mostrará en las herramientas del empleador
define('_lkn_employer_can_not_search_resume_database_buy', 'Activar estos permisos');
define('_lkn_employer_can_not_search_resume_database_', 'Su permisos de b&uacute;squeda de curriculum vitae en nuestra base a expirado. Usted puede ampliar estos permisos desde su <strong><a href="index.php?option=com_jobs&task=employer">Panel del Empleador </a></strong>'); // esto debe presentarse en los resultados de búsqueda define('_lkn_employer_view_credit_buying_history', 'Mostrar mi historial de compras de crédito');
define('_lkn_employer_view_credit_buying_history_desc', 'Usted puede encontrar todos los datos de su historia de compra de cr&eacute;dito. Para ver los detalles completos de sus compras de cr&eacute;dito, usted necesita hacer clic en el identificador de la transacci&oacute;n');
define('_lkn_employer_view_credit_speding_history', 'Mostrar el historial de gasto de cr&eacute;dito');

define('_lkn_employer_extend_resume_database_search', 'Extender el tiempo de reanudaci&oacute;n de la b&uacute;squeda en la base de datos');
//cuando el propietario de la empresa quiere extender su fecha de acceso actual define('_lkn_employer_extend_resume_database_search_desc1', 'Usted actualmente tiene permisos para buscar en nuestra base de datos de Curriculum Vitae hasta {DATE}. Este módulo puede ayudar a que amplié esta fecha.');
define('_lkn_employer_extend_resume_database_search_desc2', 'Usted actualmente no tiene permisos para buscar en nuestra base de datos de Curriculum Vitae. Este m&oacute;dulo puede ayudar a comprar estos permisos
.');
define('_lkn_employer_extend_resume_database_search_days', 'Cu&aacute;ntos d&iacute;as?');
define('_lkn_employer_extend_resume_database_search_days_desc', 'Cu&aacute;ntos d&iacute;as usted tiene para buscar en nuestra base de datos de Curr&iacute;culos Vitae en nuestra? Un d&iacute;a buscando cuesta {COST} cr&eacute;ditos y tiene {CREDIT} cr&eacute;ditos');
define('_lkn_employer_extend_resume_database_search_confirm', '<p><strong>Por favor verifique los datos </strong>:</p><p>D&iacute;as adicionales que usted puede agregar:{DAYS} days<br />Costo total de estos <sup>*</sup>: {COST} cr&eacute;ditos</p><p><sup>*</sup>Usted tiene {CREDIT_COUNT} cr&eacute;ditos</p>');
define('_lkn_employer_extend_resume_database_search_complete', 'Usted puede buscar en nuestra base de datos de Curr&iacute;culos Vitae hasta{NEW_DATE}');

define('_lkn_search', 'Buscar');
define('_lkn_name_company_front', 'Empresa registrada');
define('_lkn_backfrontal', 'Atrás');
define('_lkn_search_detailed', 'Búsqueda avanzada');
define ('_lkn_rssname', 'RSS');
define('_lkn_search_new','Nueva b&uacute;squeda de empleo »');//New Job Search
define('_lkn_search_detail', 'Detalles'); //esto es mostrado en la página de resultados de búsqueda
define('_lkn_search_brief', 'Resumen'); // esto es mostrado en la página de resultados de búsqueda
define('_lkn_search_view', 'Ver');
define('_lkn_search_count_display', '<h1>Resultados de b&uacute;squeda ({START} de {END} para {TOTAL})</h1>');
define('_lkn_search_adv_desc', 'Ingrese su criterio de b&uacute;squeda o seleccione la categoría de empleo, haga clic en el bot&oacute;n "Buscar" para obtener los resultados.');
define('_lkn_search_job_category', '<strong>Categor&iacute;as de Empleos:</strong>');
define('_lkn_search_job_country', '<strong>Pa&iacute;s del Empleo:</strong>');
define('_lkn_search_job_title_', 'T&iacute;tulo del Empleo');
define('_lkn_search_job_title_example', 'Ejemplos: Consultor de, IT');
define('_lkn_search_job_cat_country', 'Especificar la categor&iacute;a del empleo y su ubicaci&oacute;n');
define('_lkn_search_job_salary_range', 'Especificar el rango salario');
define('_lkn_search_job_salary_range_', 'Rango de salario:');
define('_lkn_search_job_salary_range_from', 'Desde');
define('_lkn_search_job_salary_range_to', 'A');
define('_lkn_search_job_salary_range_yearly', '(Salario anual)');
define('_lkn_search_job_emp_type', 'Especificar el tipo de empleo:');
define('_lkn_search_job_education_level', 'Especificar el tipo de empleo');
define('_lkn_search_job_education_level_', 'Nivel de educaci&oacute;n:');
define('_lkn_search_not_necessary', '<font size="1"><strong><font color="#ff0000">*ATENCI&Oacute;N</font>:</strong> Algunos campos pueden no ser necesarios de llenar para las Empresas. Si usted no encuentra un criterio de b&uacute;squeda, puede experimentar ingresando palabras similares en el criterio de b&uacute;squeda.</font>');
define('_lkn_search_job_experience', 'Especificar experiencia');
define('_lkn_search_job_experience_', 'Experiencia (años):');
define('_lkn_search_job_experience_min', 'M&iacute;nimo:');
define('_lkn_search_job_experience_max', 'M&aacute;ximo:');

define('_lkn_search_resume', 'Buscar un currículum vitae');
define('_lkn_search_resume_desc', 'Seleccione su curr&iacute;culum vitae de los criterios de b&uacute;squeda y haga clic en el bot&oacute;n "Buscar" para ver los resultados');
define('_lkn_search_resume_search_attention', '<font size="1"><strong><font color="#ff0000">*ATENCI&Oacute;N</font>:</strong> Algunos campos pueden no ser necesarios de llenar para las personas que buscan empleo. Si un solicitante de empleo no especifica este campo para su curriculum vitae y usted ingresa este campo como criterio de b&uacute;squeda, esto curriculum vitae ser&aacute;n omitidos. Para ver todos los Curr&iacute;culo Vitae dejar esta secci&oacute;n vac&iacute;a.</font>');
define('_lkn_search_resume_new', 'Nueva b&uacute;squeda de curr&iacute;culum vitae »');

define('_lkn_credit_buy', 'Comprar Cr&eacute;ditos');
define('_lkn_credit_count', 'Cu&aacute;nto?');
define('_lkn_credit_count_desc', 'Cu&aacute;ntos cr&eacute;ditos desea comprar? El costo de un cr&eacute;dito es ${COST}'); //{Costo} costo de la configuración.
define('_lkn_credit_paypal_item_name', '{NÚMERO} de cr&eacute;ditos para {USUARIO}');
define('_lkn_credit_paypal_redirect_page_title', 'Procesando pago...');
define('_lkn_credit_paypal_order_thanks', '<h3>Gracias por su orden.</h3>');
define('_lkn_credit_paypal_redirect_form_header', '<center><h2>Por favor espere un momento, su orden esta siendo procesada y usted sera redireccionado a su p&aacute;gina web de paypal.</h2></center>');
define('_lkn_credit_paypal_redirect_form_footer', '<center><br/><br/>Si no es autom&aacute;ticamente dirigido a paypal en 2 segundos… <br/><br/>');
define('_lkn_credit_paypal_order_canceled_page_title', 'Cancelado');
define('_lkn_credit_paypal_order_canceled', '<h3>Su orden fue cancelada.</h3>');

define('_lkn_error_application_made_before','<table cellspacing="0" border="0" style="border-collapse: separate;" id="tools_employees" ><thead><tr><th></th></tr></thead><tbody><tr><td><div id="contentcurri" style="margin:10px;">Hola {FULL_NAME},<br /><br />Ha aplicado para este empleo el {DATE} {RESUME_TITLE} con su curriculum vitae!<br /><br />Por favor recuerde! Cuando se realiza un cambio en su curr&iacute;culum, las empresas que han solicitado, a voluntad deben ser capaz de ver la &uacute;ltima versi&oacute;n.<br /><br />Usted puede ver las aplicaciones y las respuestas a las aplicaciones de nuestro m&oacute;dulo "Mis aplicaciones".</div></td></tr></tbody></table><br /><br /><br /><br /><br />');

define('_lkn_error_acl_permission','<br /><table cellspacing="0" border="0" id="tools_employees" cellpadding="5"><thead><tr><th><h1>No se puede realizar esta acci&oacute;n</h1></th></tr></thead><tbody style="text-align:left; margin:10px;"><tr><td><p style="margin:10px;">La raz&oacute;n puede ser una de las siguientes: </p><ol><li class="smallfont">Usted no se ha identificado</li><li class="smallfont">Puede que no tenga privilegios suficientes para acceder a esta p&aacute;gina. ¿Est&aacute;s tratando de editar una hoja de vida, acceder a funciones administrativas o alg&uacute;n otro sistema restringido?</li><li class="smallfont">Si usted est&aacute; tratando de hacer una funci&oacute;n de la empresa, tales como ofertas de empleo, el administrador puede haber desactivado esta funci&oacute;n</li><li class="smallfont">Si usted est&aacute; tratando de hacer una funci&oacute;n de buscador de empleo, tales como la publicaci&oacute;n de curriculum vitae, el administrador puede haber desactivado esta funci&oacute;n</li></ol><p style="margin:10px;">Por favor <a href="index.php?option=com_jobs">haga clic</a> para registrarse.<p></td></tr></tbody></table><br /><br /><br /><br /><br />');
//Esto se presenta cuando alguien está tratando de hacer algo para lo cual no tiene permisos. 
//Por ejemplo, tratar de editar el Currículo de otra persona
define('_lkn_error_form', 'Algunos de los campos necesitan corrección');
define('_lkn_error_no_input_for_job_search', 'Usted debe seleccionar una categor&iacute;a para su b&uacute;squeda');
define('_lkn_error_no_input_for_resume_search', 'Usted debe escribir o seleccionar algo para buscar');
define('_lkn_error_form_empty', 'El campo obligatorio no se ha llenado en');
define('_lkn_error_form_resume_title', 'Currículum vitae debe tener un título');
define('_lkn_error_form_resume_name', 'Tienes que introducir el nombre completo');
define('_lkn_error_form_resume_email', 'Usted debe ingresar el Correo Electrónico');
define('_lkn_error_form_company_title', 'Empresa debe tener un título');
define('_lkn_error_form_company_country', 'Usted debe seleccionar el país de la Empresa');
define('_lkn_error_form_company_email', 'Usted debe ingresar el correo electrónico de la Empresa');


//<macf>
//2011-02-02
define('_lkn_error_form_company_logo','Debe cargar el logo de su empresa');
define('_lkn_error_form_company_address','Debe ingresar la dirección de la empresa');
define('_lkn_error_form_company_city','Debe ingresar la ciudad de la empresa');
define('_lkn_error_form_company_zipcode','Debe ingresar el código postal');
define('_lkn_error_form_company_companyurl','Ingrese la dirección web del sitio  su empresa');
define('_lkn_error_form_company_contactname','Ingrese el nombre del contacto');
define('_lkn_error_form_company_contactphone','Ingrese el teléfono del contacto');
define('_lkn_error_form_company_contactemail','Ingrese el e-mail del contacto');
//fin modificacion

//Oskar
//2011-08-28
define('_lkn_error_form_company_db_rhumanos','Ingrese el nombre del representante legal');
define('_lkn_error_form_company_db_telefono','Ingrese el telefono de la empresa');

define('_lkn_error_form_cover_title', 'La carta de presentaci&oacute;n debe tener un T&iacute;tulo');
define('_lkn_error_form_cover_body', 'Usted debe ingresar la carta de presentaci&oacute;n');
define('_lkn_error_no_response', 'No hay respuesta para su aplicaci&oacute;n');

define('_lkn_error_form_job_title', 'La oferta de empleo debe tener un t&iacute;tulo');
define('_lkn_error_form_job_category', 'Usted debe seleccionar la categor&iacute;a de la oferta de empleo');
define('_lkn_error_form_job_company', 'Usted debe seleccionar la Empresa');
define('_lkn_error_form_job_country', 'Usted debe seleccionar el pa&iacute;s');

define('_lkn_error_form_employer_email_template', 'Las plantillas de correo electr&oacute;nico deben tener un T&iacute;tulo');
define('_lkn_error_form_employer_email_template_body', 'El cuerpo de las plantillas de correo electr&oacute;nico deben ser escritas');

define('_lkn_error_no_job', '<h1>No hay ofertas de empleo para su criterio de b&uacute;squedas</h1>'); //Este es usado por categorías de páginas
define('_lkn_error_job_is_not_found', '<h1>La oferta de empleo que usted est&aacute; tratando de ingresar ha sido suprimida o no publicada</h1><br />
<a href="javascript:history.go(-1)">Regresar</a>
'); //si un trabajo no está publicado o ha sido eliminado


define('_lkn_error_email_body_empty', 'Usted debe ingresar el cuerpo del correo electr&oacute;nico para enviar');
define('_lkn_error_email_subject_empty', 'El asunto del correo electr&oacute;nico est&aacute; vac&iacute;o');

define('_lkn_error_credit_number_empty', 'Usted puede ingresar el cr&eacute;dito que desea comprar');
define('_lkn_error_credit_not_enough_to_add_job', 'Usted no tiene suficiente cr&eacute;ditos para publicar este Empleo. Usted necesita comprar cr&eacute;ditos en el panel del empleador.');
define('_lkn_error_credit_not_enough_to_search_resume_database', 'Usted no tiene suficiente cr&eacute;dito para buscar en nuestra base de datos de Curr&iacute;culo Vitae. Por favor visite su <strong><a href="index.php?option=com_jobs&task=employer">Panel del Empleador </a></strong>par a ver m&aacute;s detalle o para comprar m&aacute;s cr&eacute;dito');
define('_lkn_error_credit_has_no_credit', 'Usted no tiene cr&eacute;ditos disponibles. Por favor<a href="index.php?option=com_jobs&task=buy_credits">Compre cr&eacute;ditos </a>y vuelva a intentar');

define('_lkn_error_search_job_no_result','<br /><div id="linkredirectresume"><a href="/index.php?option=com_jobs&Itemid=6" id="titletopfrontal" /><img title="Regresar al inicio" src="/components/com_jobs/templates/default/images/atras.png"/>Atrás</a></div><br />
<h1 id="advSrchdefault">No se ha encontrado ning&uacute;n resultado que coincida con sus criterios</h1>');
define('_lkn_error_search_resume_no_result', '<br /><h1 id="advSrchdefault">No hemos encontrado ning&uacute;n curr&iacute;culum vitae que coincida con sus criterios</h1>');

define('_lkn_error_extend_resume_database_search_day_is_empty', 'Usted debe introducir el n&uacute;mero de d&iacute;as que desee agregar para la b&uacute;squeda de curr&iacute;culos');
define('_lkn_error_extend_resume_database_search_enough_credits', 'Usted no tiene suficiente cr&eacute;ditos. Usted debe necesitar {CREDIT_COUNT} cr&eacute;ditos');

define('_lkn_error_no_application', '<h1>Usted no ha recibido solicitudes</h1>');

//added for 1.0.3
define('_lkn_admin_rss', 'Canales RSS');
define('_lkn_admin_rss_desc', 'Los canales RSS puede ayudarle a obtener las &uacute;ltimas noticias y productos para instantphp.com');
define('_lkn_admin_rss_title', 'T&iacute;tulo');

//added for 1.0.6
define('_lkn_error_date_field', 'Necesita ingresar el formato de la fecha'); //utilizados para el formulario de configuración.
define('_lkn_error_records_on_page', 'Necesita ingresar el registro de las p&aacute;ginas'); // utilizados para el formulario de configuración.


define('_lkn_worker_rss', 'Rss');
define('_lkn_worker_rss_desc', 'Obtener las &uacute;ltimas ofertas de empleo de nuestro sitio web esta a un clic de camino para usted. Usted puede ser capaz de crear su propio canal de RSS en esta p&aacute;gina. Suscr&iacute;base a nuestro RSS para obtener las ofertas de empleo m&aacute;s actuales directamente en su escritorio!');

define('_lkn_worker_rss_rss_page_desc', '<strong>¿Qu&eacute; es RSS?</strong><br />RSS, es un formato de informaci&oacute;n web que puede ser usada para publicar  cualquier contenido actualizado con frecuencia tales como: noticias, blogs y ofertas de empleo.<br /><br /><strong>¿C&oacute;mo puede esto beneficiarme?</strong><br />RSS es una manera f&aacute;cil de estar informado sobre las ofertas de empleo que son de inter&eacute;s para usted. En lugar de tener que ir a cada sitio web para ver si hay una nueva oferta de empleo, usted puede usar RSS para que le notifique cada vez que se actualice una oferta de empleo de su inter&eacute;s. Los sitios de empleos en l&iacute;nea contienen informaci&oacute;n actualizada de todas las &uacute;ltimas ofertas de empleo, enviado autom&aacute;ticamente a trav&eacute;s de un lector de canales de informaci&oacute;n. Ofrece una forma sencilla de hacer el seguimiento de los &uacute;ltimos empleos de cada d&iacute;a, para que no pierda su empleo ideal<br /><br /><strong>¿C&oacute;mo usar este formato?</strong><br />Usted puede escoger que tipo de empleos quiere obtener, puede usar la tecla Control para seleccionar m&aacute;s de un criterio o eliminar los criterios seleccionados.');

define('_lkn_worker_rss_category', 'Categor&iacute;a :'); //utilizado para obtener el formulario RSS
define('_lkn_worker_rss_country', 'Pa&iacute;s :'); // utilizado para obtener el formulario RSS
define('_lkn_worker_rss_company', 'Empresa :'); // utilizado para obtener el formulario RSS
define('_lkn_worker_rss_address', 'Direcci&oacute;n Rss:'); // utilizado para obtener el formulario RSS
define('_lkn_worker_rss_address_desc', 'Despu&eacute;s usted debe crear su propio canal de RSS, copiar y pegar la direcci&oacute;n web del canal de RSS a la secci&oacute;n del lector del canal'); // utilizado para obtener el formulario RSS
define('_lkn_worker_rss_disabled', '<h1>El canal RSS esta deshabilitado </h1>');
define('_lkn_worker_rss_max_category_select', 'Puede seleccionar m&aacute;ximo  {NUMBER} categor&iacute;as'); // utilizado para obtener el formulario RSS
define('_lkn_worker_rss_max_country_select', 'Usted puede seleccionar m&aacute;ximo {NUMBER} pa&iacute;ses'); // utilizado para obtener el formulario RSS
define('_lkn_worker_rss_max_company_select', 'Usted puede seleccionar m&aacute;ximo {NUMBER} empresas'); // utilizado para obtener el formulario RSS


define('_lkn_worker_resume_count', 'Usted tiene {ACTIVE_RESUME_COUNT} curr&iacute;culo(s) y usted puede tener m&aacute;ximo y {ALLOWED_RESUME_COUNT} Curr&iacute;culo(s)');
define('_lkn_worker_no_new_resume_allowed', 'Usted no puede agregar un nuevo curr&iacute;culo');

define('_lkn_config_rss_feeds', 'Canal Rss');
define('_lkn_config_rss_feeds_active', 'Canal rss activado?');
define('_lkn_config_rss_feeds_active_desc', 'Usted puede abrir o cerrar el canal RSS para su sitio de empleos.');
define('_lkn_config_rss_feeds_categories', 'Canal de categor&iacute;as?');
define('_lkn_config_rss_feeds_categories_desc', 'Usuarios pueden obtener el canal RSS por categor&iacute;as');
define('_lkn_config_rss_feeds_company', 'Canal de empresas?');
define('_lkn_config_rss_feeds_company_desc', 'Usuarios pueden obtener el canal RSS por perfiles de las empresas');
define('_lkn_config_rss_feeds_country', 'Canales de pa&iacute;ses?');
define('_lkn_config_rss_feeds_country_desc', 'Usuarios pueden obtener el canar RSSpor pa&iacute;ses');
define('_lkn_config_rss_feeds_count', 'contador de canal RSS');
define('_lkn_config_rss_feeds_count_desc', 'Cu&aacute;ntas ofertas de empleo pueden ser presentadas por canal RSS. Por defecto:20');
define('_lkn_config_rss_feeds_limit_job_description', 'L&iacute;mite de descripci&oacute;n de Empleo');
define('_lkn_config_rss_feeds_limit_job_description_desc', 'Cu&aacute;ntos caracteres pueden ser desplegados para la descripci&oacute;n en los canales RSS. Si usted quiere describir todas las descripciones de los empleos en su canal RSS. Escriba 0 (cero). Por defecto:300');
define('_lkn_config_rss_feeds_criteria_select_count', 'Cu&aacute;ntos? ');
define('_lkn_config_rss_feeds_criteria_select_count_desc', 'cuantos criterios se permiten seleccionar mientras se est&aacute;n creando RSS? . Por ejemplo, si usted escribe 10 para este par&aacute;metro, sus usuarios pueden seleccionar un m&aacute;ximo de 10 categor&iacute;as mientras ellos est&aacute;n creando sus propios canales RSS desde el panel de Buscar Empleo. Por defecto: 10');
define('_lkn_config_rss_feeds_description', 'Descripci&oacute;n');
define('_lkn_config_rss_feeds_description_desc', 'Escribir una frase corta m&aacute;ximo 100 caracteres. Este puede ser desplegado con la descripci&oacute;n de su canal RSS');

define('_lkn_config_worker', 'Panel del Empleador');
define('_lkn_config_worker_resume_count', 'Reanudar conteo');
define('_lkn_config_worker_resume_count_desc', 'Cu&aacute;ntas b&uacute;squedas se permite tener a los empleadores? Por ejemplo, si Ud. escribe 5 para este campo, un empleador puede crear un m&aacute;ximo de 5 reactivaciones para su panel.<br /><br />Escriba 0 (cero) para colocar por defecto un valor. 0 (cero) significa que un empleador puede crear un ilimitado n&uacute;mero de b&uacute;squedas. <br /><br />Por defecto: 5');

define('_lkn_config_employer', 'Panel del Empleador');
define('_lkn_config_employer_company_count', 'Conteo de Empresas');
define('_lkn_config_employer_company_count_desc', 'Cu&aacute;ntas empresas pueden tener asociadas sus empleados? Por ejemplo, si escribe 5 en este campo, un empleador puede asociar un m&aacute;ximo de 5 empresas en su panel.<br /><br />Escriba 0 (cero) para colocar el valor por defecto. 0 (cero) significa que un empleador puede asociar y gestionar un sin n&uacute;mero de empresar en su panel.<br /><br />Por defecto : 1');

define('_lkn_employer_company_count', 'Usted tiene {ACTIVE_COMPANY_COUNT} Empresas y usted puede tener un m&aacute;ximo de {ALLOWED_COMPANY_COUNT} Empresas');
define('_lkn_employer_no_new_company_allowed', 'Usted no puede agregar una Empresa');

//added for 1.0.7
define('_lkn_support_forum', 'Foro de soporte');
define('_lkn_support_bug_tracker', 'Localizador de fallas y aciertos');
define('_lkn_show', 'Mostrar');
define('_lkn_hide', 'Ocultar');

define('_lkn_country_tip', 'Escriba el pa&iacute;s como USA, Inglaterra, Turqu&iacute;a, etc');

define('_lkn_category_name_tip', 'Escriba el nombre de la categor&iacute;a');

define('_lkn_published_tip', 'Seleccione el estado de la publicaci&oacute;n');
define('_lkn_alias_tip', 'Usted puede ingresar o dejar el valor del alias vac&iacute;o. Si usted lo deja vac&iacute;o, este puede ser creado autom&aacute;ticamente. El alias s&eacute; usar&aacute; para crear las direcciones web SEF');
define('_lkn_parent_category_tip', 'Seleccione el tipo de categor&iacute;a. Si usted no selecciona alguna, se puede usar la categor&iacute;a ra&iacute;z');
define('_lkn_meta_desc_tip', 'Ingrese la descripci&oacute;n de los metadatos');
define('_lkn_meta_keywords_tip', 'Ingrese las palabras claves de los metadatos');

define('_lkn_company_logo_tip', 'Usted puede cargar el logo de su Empresa. Clic en el bot&oacute;n seleccionar logo de su computador');
define('_lkn_company_address_tip', 'Ingrese la direcci&oacute;n de su Empresa');
define('_lkn_company_country_tip', 'Seleccione el pa&iacute;s de la Empresa de la lista despegable');
define('_lkn_company_city_tip', 'Ingrese la ciudad de la Empresa');
define('_lkn_company_zipcode_tip', 'Ingrese el c&oacute;digo postal de la Empresa');
define('_lkn_company_companyurl_tip', 'Escriba la direcci&oacute;n web completa de la Empresa Ejemplo: http://www.miempresa.com');
define('_lkn_company_contactname_tip', 'Ingrese el nombre de contacto (Recursos Humanos)');
define('_lkn_company_contactphone_tip', 'Ingrese el tel&eacute;fono de contacto de la Empresa');
define('_lkn_company_contactemail_tip', 'Ingrese el correo electr&oacute;nico de la Empresa.');
define('_lkn_company_description_tip', 'Ingrese el texto de descripci&oacute;n de su Empresa. Esta informaci&oacute;n ser&aacute; visible para todos los visitantes del sitio');

define('_lkn_job_tip', 'Ingrese el t&iacute;tulo del Empleo');
define('_lkn_job_category_name_tip', 'Seleccione la categor&iacute;a de este Empleo');
define('_lkn_job_description_tip', 'Ingrese la descripci&oacute;n del Empleo');
define('_lkn_job_qualifications_tip', 'Ingrese los requisitos para el empleo');
define('_lkn_job_company_tip', 'Usted puede seleccionar la Empresa para este empleo');
define('_lkn_job_reference_tip', 'Usted puede escribir un n&uacute;mero de solicitud para este empleo. Este este debe ser usado en la visualizaci&oacute;n del Empleo. Los buscadores de Empleo pueden ver los detalles de la p&aacute;gina web del Empleo. Este puede ser n&uacute;mero o caracteres');
define('_lkn_job_number_of_jobs_tip', 'Cu&aacute;ntas personas est&aacute; buscando? Usted puede dejar este campo vac&iacute;o');
define('_lkn_job_job_type_tip', 'Seleccione el tiempo de empleo de la lista desplegable');
define('_lkn_job_country_tip', 'Seleccione el pa&iacute;s del empleo');
define('_lkn_job_experience_tip', 'Introduzca el nivel m&iacute;nimo de empleo para este empleo. Como 5 o 7 o nivel en blanco');
define('_lkn_job_degree_tip', 'Seleccione el nivel de educaci&oacute;n que prefiere para este empleo');
define('_lkn_job_salary_tip', 'Ingrese el salario anual para este empleo');
define('_lkn_job_show_salary_tip', 'Usted puede escoger que el buscador de empleo puede ver o no el salario del empleo');
define('_lkn_job_publish_up_tip', 'Inicio de la publicaci&oacute;n: fecha y hora de inicio de la publicaci&oacute;n');
define('_lkn_job_publish_down_tip', 'Finalizar la publicaci&oacute;n: fecha y  hora de finalizaci&oacute;n de la publicaci&oacute;n');
define('_lkn_job_hits_tip', 'Consejos laborales');

define('_lkn_cover_letter_title_tip', 'Ingrese el t&iacute;tulo para la carta de presentaci&oacute;n como "Carta de presentaci&oacute;n de docencia", "Carta de presentaci&oacute;n de diseño Web" etc.');
define('_lkn_cover_letter_tip', 'Ingrese su carta de presentaci&oacute;n.');

define('_lkn_credit_total_tip', 'Cu&aacute;ntos cr&eacute;ditos este usuario actualmente tiene?');
define('_lkn_credit_can_search_tip', 'Este usuario puede usar la base de datos de curr&iacute;culo vitae hasta la fecha');

define('_lkn_status_tip', 'Los estados son como las categor&iacute;as de una solicitud. Ejemplo de Estado: Rechazado, Llamar primero para entrevista, etc. Usted puede definir m&aacute;s estados para su Empresa o Empleos');

define('_lkn_email_template_title_tip', 'Escriba el t&iacute;tulo de esta plantilla de correo electr&oacute;nico');
define('_lkn_email_template_tip', 'Escriba la plantilla de correo electr&oacute;nico aqu&iacute;. La plantilla de correo electr&oacute;nico puede ser presentada a usted, cuando est&aacute; evaluando sus solicitudes. Esto puede ayudarle a ahorrar tiempo. Por ejemplo, usted puede crear una plantilla de correo electr&oacute;nico para aceptar una solicitud, etc');

define('_lkn_app_status_tip', 'Usted puede cambiar el estado de la esta solicitud');
define('_lkn_app_date_tip', 'La Solicitud fue creada en esta fecha');
define('_lkn_app_last_update_date_tip', 'La &uacute;ltima fecha de modificaci&oacute;n de esta presentaci&oacute;n');
define('_lkn_app_comments_tip', 'Usted puede ingresar comentarios para este solicitud como: " Esta solicitudes rechazada por X raz&oacute;n", "El candidato ha sido llamado para la primera entrevista en la fecha X" o cualquier otro comentario que usted quiera agregar');
define('_lkn_app_email_template_tip', 'Sus correo electr&oacute;nicos se han creado a partir de las plantillas de correo electr&oacute;nico. Cuando usted selecciona cualquier plantilla de correo electr&oacute;nico, todos los valores ser&aacute;n llenados autom&aacute;ticamente');
define('_lkn_app_email_from_tip', 'Su direcci&oacute;n de correo electr&oacute;nico');
define('_lkn_app_email_to_tip', 'Los correos electr&oacute;nicos de los solicitantes');
define('_lkn_app_email_subject_tip', 'El asunto de el correo electr&oacute;nico');
define('_lkn_app_email_body_tip', 'El cuerpo del correo electr&oacute;nico. El mensaje que usted quiere enviar a su candidato');

define('_lkn_credit_count_tip', 'Ingrese el n&uacute;mero de cr&eacute;ditos que usted quiere comprar como: 5 o 7 o 4.5');

define('_lkn_search_job_search_word_tip', 'Esta palabra puede ser buscada en el t&iacute;tulo del Empleo, en las descripciones del Empleo, Aptitudes laborales');
define('_lkn_search_job_category_tip', 'Usted puede seleccionar una categor&iacute;a espec&iacute;fica o las categor&iacute;as de los empleos a buscar');
define('_lkn_search_job_country_tip', 'Usted puede seleccionar un pa&iacute;s espec&iacute;fico');
define('_lkn_search_job_salary_range_tip', 'Ingresar el salario');
define('_lkn_search_job_experience_tip', 'Usted puede especificar un rango del nivel de experiencia para la b&uacute;squeda');
define('_lkn_search_job_education_level_tip', 'Usted puede especificar el nivel de educaci&oacute;n de preferencia para b&uacute;squeda de empleo');
define('_lkn_search_job_emp_type_tip', 'Usted puede especificar el tipo de empleo');

define('_lkn_company_description', 'Descripci&oacute;n de la empresa');

define('_lkn_config_image_resize_desc', '<strong>Para el tamaño de la im&aacute;gen y la marca de agua de la empresa se requiere la librer&iacute;a GD2+.</strong>');
define('_lkn_config_image_resize_gd_yes', 'Se ha detectado la librer&iacute;a GD2+ en su servidor. Estas funciones pueden trabajar en su servidor');
define('_lkn_config_image_resize_gd_no', 'Nosotros no encontramos la versi&oacute;n de la librer&iacute;a GD requerida en su servidor. Usted necesita contartar a su proveedor de alojamiento. Las im&aacute;genes con marca de agua no funcionan en este servidor. ');
define('_lkn_config_image_resize_desc2', '<h2>Una sugerencia: Ingrese los valores en esta secci&oacute;n y nunca cambie estos</h2>');

define('_lkn_config_image_resize_active', 'Desea cambiar el tamaño de la imagen activado?');
define('_lkn_config_image_resize_active_desc', 'Si usted selecciona Si, las im&aacute;genes de su curr&iacute;culo y los logotipos de la Empresa pueden cambiar su tamaño.');
define('_lkn_config_image_watermark_text', 'Marca de agua de texto');
define('_lkn_config_image_watermark_text_desc', 'Crear una etiqueta de texto en la imagen (el nombre de su sitio web o la direcci&oacute;n web, etc). Etiqueta vac&iacute;a para desplegar esta caracter&iacute;stica.');
define('_lkn_config_image_watermark_text_color', 'Color de la marca de agua del texto');
define('_lkn_config_image_watermark_text_color_desc', 'El color de la etiqueta en hexadecimal (por defecto: #000000)');
define('_lkn_config_image_watermark_text_background_color', 'Color de fondo de la Marcar de agua del texto');
define('_lkn_config_image_watermark_text_background_color_desc', 'Color de fondo de la etiqueta de texto (por defecto: #FFFFFF)');

define('_lkn_config_image_dimensions', '<h2>Dimensiones de la imagen</h2>');

define('_lkn_config_resume_image_watermark', 'Marca de agua de la im&aacute;genes en el curr&iacute;culo');
define('_lkn_config_resume_image_watermark_desc', 'Si usted selecciona Si, el texto con marca de agua que ha configurado anteriormente se inserta en el logos de la compañ&iacute;a');
define('_lkn_config_resume_image_width', 'Altura de la imagen del curr&iacute;culo');
define('_lkn_config_resume_image_width_desc', 'Altura m&aacute;xima de la imagen en el Curr&iacute;culo. Por defecto: 100');
define('_lkn_config_resume_image_height', 'Ancho de la imagen del curr&iacute;culo');
define('_lkn_config_resume_image_height_desc', 'Ancho m&aacute;ximo de la imagen del curr&iacute;culo. Por defecto: 160');
define('_lkn_config_company_logo_watermark', 'Marca de agua de los logotipos de la empresa');
define('_lkn_config_company_logo_watermark_desc', 'Si usted selecciona Si, el texto con marca de agua que ha configurado anteriormente se inserta en el logo de la compañ&iacute;a');
define('_lkn_config_company_logo_width', 'Ancho del logotipo de la empresa');
define('_lkn_config_company_logo_width_desc', 'Ancho m&aacute;ximo del logotipo de la empresa. Por defecto: 150');
define('_lkn_config_company_logo_height', 'Altura del logotipo de la Empresa');
define('_lkn_config_company_logo_height_desc', 'La altura m&aacute;xima del logotipo de la empresa. Por defecto: 40');

//Agregar para el empleo! 1.0.8
define('_lkn_config_home_page_category_column', 'Columna del contador de categor&iacute;as');
define('_lkn_config_home_page_category_column_desc', 'Presentar las categor&iacute;as en una tabla multi columna. Por ejemplo, si escribe 2 para estam las categor&iacute;as en la p&aacute;gina principal se presentar&aacute;n en dos columnas. Por defecto: 2');
define('_lkn_config_home_page_category_job_count', 'Cuenta laboral');
define('_lkn_config_home_page_category_job_count_desc', 'Mostrar el conteo laboral bajo una categor&iacute;a. Si selecciona "si" se mostrar&aacute;n en el lugar indicado.');

define('_lkn_category_categories', 'Categor&iacute;as'); //plural


define('_lkn_credit_system', 'Sistema de cr&eacute;dito');
define('_lkn_credit_add_new_credit', 'Añadir un nuevo cr&eacute;dito');
define('_lkn_credit_add_new_credit_currency_tip', 'Escribir una moneda para el pago que recibi&oacute; como: USD, TRY, EURO. Este valor es presentado en el historial de Compra de Cr&eacute;dito de los Empleadores.');
define('_lkn_credit_add_new_credit_payer_email_tip', 'Si usted recibi&oacute; el pago de un sitio web como Paypal, escribir el correo del que hace el pago');
define('_lkn_credit_add_new_credit_verify_sign_tip', 'Usted puede ingresar a verificar y firmar el pago');
define('_lkn_credit_add_new_credit_credit_cost_tip', 'Cu&aacute;nto dinero recibe para añadir este cr&eacute;dito?');
define('_lkn_credit_add_new_credit_credit_count_tip', 'Cu&aacute;ntos cr&eacute;ditos usted puede agregar a esta sesion? Si el usuario tiene 10 cr&eacute;ditos y usted ingresa 20 para este valor, los 20 cr&eacute;ditos deben agregarse a la cuenta del usuario. Entonces el usuario puede tener 30 cr&eacute;ditos despu&eacute;s de haber completado esta');
define('_lkn_credit_add_new_credit_tnx_id_tip', 'Qu&eacute; es el ID de la transacci&oacute;n para el pago? Usted necesita escribir un &uacute;nico identificador (ID) para esto');
define('_lkn_credit_add_new_credit_attribs_tip', 'Usted puede escribir los otros detalles del pago aqu&iacute;');
define('_lkn_error_member_is_a_employer', 'El miembro que usted ha seleccionado es un empleador. Los empleadores no pueden tener curr&iacute;culos o cartas de presentaci&oacute;n, o usar cualquier herramienta de los que buscan empleo');
define('_lkn_error_member_is_a_job_seeker', 'El usuario que usted ha seleccionado es un buscador de empleo, &eacute;l no puede ser propietario de un Empresa o usar las funciones de la Empresa.');
define('_lkn_config_resume_user_name_desc', 'Seleccione los propietarios de los Curr&iacute;culos. NOTA: SI EL USUARIO QUE USTED SELECCIONO ES UN EMPLEADOR (RELACIONADO CON LA EMPRESA) USTED NO PUEDE AGREGAR/ACTUALIZAR EL CURR&Iacute;CULO');
define('_lkn_config_employer_inform_on_company_approve', 'Informar a los empleadores?');
define('_lkn_config_employer_inform_on_company_approve_desc', 'El empleador recibir&aacute; un correo el&eacute;ctronico cuando su empresa est&aacute; autorizada.');
define('_lkn_config_employer_inform_on_company_submission', 'Env&iacute;o de confirmaci&oacute;n de correo electr&oacute;nico?');
define('_lkn_config_employer_inform_on_company_submission_desc', 'El empleador recibir&aacute; un correo electr&oacute;nico cuando se ha presentado a la empresa');

define('_lkn_toolbar_employer_tools', 'Herramientas del empleador');
define('_lkn_toolbar_job_seeker_tools', 'Herramientas del buscador de empleo');
define('_lkn_toolbar_job_categories', 'Categor&iacute;as del empleo');
define('_lkn_toolbar_message', 'Hola  {USERNAME}');
define('_lkn_toolbar_message_guest', 'Invitado');

define('_lkn_error_employer_can_not_apply', 'Los empleadores no pueden solicitar puestos de empleo. ');
define('_lkn_error_employer_can_visit_worker_panel', 'Los empleadores no pueden visitar el panel de los Buscadores de Empleos o usar el panel de funciones');
define('_lkn_error_worker_can_visit_employer_panel', 'Los Buscadores de empleo no pueden visitar el panel de los Empleadores o el panel de funciones de los empleadores');

define('_lkn_credit_payment_method', 'M&eacute;todo de pago');
define('_lkn_credit_payment_method_tip', 'Si usted compra cr&eacute;dito con Paypal, este ser&aacute; solicitado a su cuenta despu&eacute;s de haber completado el pago con transferencias');
define('_lkn_error_payment_type_is_empty', 'Usted necesita seleccionar el tipo de pago');
define('_lkn_credit_payment_method_bank_transfer_result_message', 'El primer paso se ha completado para la compra de cr&eacute;dito con la transferencia bancaria. Ahora, usted necesita para completar el pago a nuestra cuenta bancaria e informarnos acerca de su pago con la ayuda de "cr&eacute;ditos pendientes" enlace desde su "Panel de empleadores".');

define('_lkn_config_show_tool_bar', 'Mostrar barra de herramientas?');
define('_lkn_config_show_tool_bar_desc', 'Usted puede mostrar u ocultar los componentes de la barra de herramientas. Se sugiere configurar esta Vista.');
define('_lkn_config_credit_system_bank_transfer', 'Transferencia bancaria');

define('_lkn_list_pending_credits', 'Lista de cr&eacute;ditos pendientes');
define('_lkn_employer_pending_credit', 'Cr&eacute;ditos pendientes');
define('_lkn_employer_pending_credit_desc', '<p>Los cr&eacute;ditos pendientes son los cr&eacute;ditos que usted tiene solicitados para comprar pero no ha completado el pago. Esta herramienta puede ayudarle para enviar los detalles del pago al sitio de administradores. Despu&eacute;s, el sitio de administradores confirma su pago, los cr&eacute;ditos pueden ser solicitados de su cuenta. </p><p>Usted puede encontrar nuestros detalles de pago en esta direcci&oacute;n electr&oacute;nica (CAMBIEN ESTO A SU P&Aacute;GINA DE DETALLES DE PAGO)</p>');
define('_lkn_employer_pending_credit_date', 'Fecha de solicitud');
define('_lkn_employer_pending_payment_date', 'Fecha de pago');
define('_lkn_employer_pending_inform_date', 'Fecha de informe');
define('_lkn_employer_pending_credit_payment_made', 'Pendiente de aprobar. Usted ha completado el pago de este cr&eacute;dito e informado al administrador del sitio. Usted puede enviar los detalles de pago al administrador del sitio con la ayuda del siguiente bot&oacute;n.');
define('_lkn_employer_pending_credit_payment_not_made', 'Usted no puede completar el pago todav&iacute;a. Usted puede enviar los detalles del pago administrador del sitio');
define('_lkn_employer_pending_credit_credit_cost_tip', 'La cantidad de dinero que han pagado por la compra de estos cr&eacute;ditos');
define('_lkn_employer_pending_credit_credit_count_tip', 'El n&uacute;mero de cr&eacute;ditos que usted desea comprar');
define('_lkn_employer_pending_credit_date_tip', 'La fecha en que ha solicitado la compra de &eacute;stos cr&eacute;ditos');
define('_lkn_employer_pending_payment_date_tip', 'Cuando usted hace el pago a nuestra cuenta? Por favor seleccione la fecha hacienda clic en el bot&oacute;n');
define('_lkn_employer_pending_inform_date_tip', 'La fecha que usted ha enviado los detalles de pago al administrador del sitio. La fecha se calcula autom&aacute;ticamente cuando hace clic en el bot&oacute;n de abajo.');
define('_lkn_employer_pending_credit_tnx_id_tip', 'El &uacute;nico identificador de la transacci&oacute;n de pago que usted ha tomado de la transferencia bancaria.');
define('_lkn_employer_pending_credit_other_details_tip', 'Puede añadir otros detalles de pago que usted desee');
define('_lkn_employer_pending_credit_inform_site_editor', 'Informe al administrador del sitio sobre sus pagos');
define('_lkn_employer_pending_credit_warn', '<p>Por favor, tenga cuidado</p><ol><li>Por favor, verifique dos veces los datos, debido a que depu&eacute;s no podran ser editados </li><li>Un correo electr&oacute;nico ser&aacute; enviado por el administrador del sitio sobre los detalles de su pago despu&eacute;s de hacer clic en el bot&oacute;n</li></ol>');

define('_lkn_employer_pending_credit_payment_sent', 'La informaci&oacute;n del pago ha sido enviada por usuario. Usted puede aprobar los cr&eacute;ditos.');
define('_lkn_employer_pending_credit_payment_is_not_sent', 'La informaci&oacute;n del pago ha sido enviada por usuario. Usted no puede aprobar los cr&eacute;ditos.');
define('_lkn_employer_pending_credit_action', 'Aprobar o rechazar los cr&eacute;ditos pendientes');
define('_lkn_employer_pending_credit_approved', 'Usted ha aprobado satisfactoriamente el cr&eacute;dito pendiente');
define('_lkn_employer_pending_credit_rejected', 'Usted ha rechazado satisfactoriamente el cr&eacute;dito pendiente');
define('_lkn_employer_pending_credit_count_zero', '<h1>No hay cr&eacute;ditos pendientes</h1>');
define('_lkn_employer_pending_saved', 'Usted ha enviado satisfactoriamente los detalles de su pago a nuestro correo electr&oacute;nico. Por favor perm&iacute;tanos confirmar su pago');

define('_lkn_error_pending_credit_tnx_id_empty', 'Usted puede ingresar el identificador de la transacci&oacute;n');
define('_lkn_error_pending_credit_payment_date_empty', 'Usted puede seleccionar la fecha de pago');

define('_lkn_employer_forced_company_saved_message', 'Sus datos empresariales han sido actualizados. Gracias por su colaboraci&oacute;n');

//Añadido para 1.0.10
define('_lkn_job_location', 'Ubicaci&oacute;n');
define('_lkn_new_to_jobs', 'Nuevo empleo?');
define('_lkn_new_to_jobs_desc', '<a href="http://www.instantphp.com/store/details/6/jobs.html">lknJobs es un portal professional de Empleos, componente de administraci&oacute;n para Joomla 1.0.x y Joomla 1.5.x . (CAMBIE ESTE DESDE SU ARCHIVO DE IDIOMAS) >></a>');
define('_lkn_home_page_who_are_we', 'Qui&eacute;nes somos?');
define('_lkn_home_page_who_are_we_desc','Este sitio ha sido creado con la finalidad de favorecer la interacci&oacute;n de los estudiantes, egresados y graduados utepelinos  con los empleadores de reconocidas empresas locales, nacionales e internacionales. Brindando oportunidades laborales de alto nivel, para lograr  un exitoso ingreso al mercado laboral u obtener un mejor desarrollo profesional a  trav&eacute;s de pasant&iacute;as, pr&aacute;cticas laborales, procesos de asesor&iacute;a, informaci&oacute;n y vinculaci&oacute;n con empresas y organizaciones.');

define('_lkn_config_home_page_ads', 'Usted puede insertar sus anuncios como el c&oacute;digo de AdSense u otra direcci&oacute;n. HTML est&aacute; permitido. El c&oacute;digo que ha introducido aqu&iacute; ser&aacute; insertado en la p&aacute;gina de principal en el panel derecho. Tienes que dejar este campo en blanco para desactivar este.');
define('_lkn_jobs', 'Empleos');
define('_lkn_job_city', 'Ciudad del empleo');
define('_lkn_job_city_tip', 'Ingrese la ciudad del empleo (o ciudades). Si usted va a escribir m&aacute;s de una ciudad, separe estas con comas, as&iacute;: New York, Istanbul, London');
define('_lkn_job_state', 'Provincia del empleo');
define('_lkn_job_state_tip', 'Ingrese el estado del empleo (o estados). Si usted va a escribir m&aacute;s de un estado, separe estos con comas, as&iacute;: GA, NE, DC');
define('_lkn_job_city_search_tip', 'Ingrese la ciudad que usted desee para buscar empleo, as&iacute; como: Chicago, New York');
define('_lkn_job_state_search_tip', 'Ingrese el estado que usted desea, para buscar empleo, as&iacute; como: IL, NY');

define('_lkn_config_templates', 'Plantillas');
define('_lkn_config_templates_select', 'Seleccione las plantillas');
define('_lkn_config_templates_select_desc', '<p>Seleccione la plantilla componente</p><p>Notas para el sistema de plantillas:</p><ol><li>Todas las plantillas son ubicadas bajo la carpeta /components/com_jobs/templates/ </li><li>Aseg&uacute;rese que los nombres de las plantillas no contengan alg&uacute;n car&aacute;cter no permitido. Los nombres de las plantillas solo pueden contener letras y n&uacute;meros</li><li>Los nombres de las plantillas y los plantillas de los archivos css deben tener el mismo nombre</li></ol><p>Nosotros actualmente estamos escribiendo documentaci&oacute;n para este sistema de plantillas. Si usted tiene cualquier pregunta sobre las plantillas, usted puede usar nuestro foro de soporte </p>');
define('_lkn_config_templates_advice_title', 'T&iacute;tulo Asesoramiento');
define('_lkn_config_templates_advice', 'Orientaci&oacute;n');
define('_lkn_config_templates_advice_desc', '<p>Un aviso se muestra en el detalle del empleo para que el usuario pueda visualizarlo antes de aplicar para un empleo en particular.</p><p><span style="text-decoration: underline;">Un ejemplo de aviso</span></p><p><em>Para su privacidad y protecci&oacute;n, cuando aplica para un empleo en l&iacute;nea, nunca entregue su n&uacute;mero de seguro social o realice una transacci&oacute;n monetaria.<br /><br />Al aplicar  para un empleo mediante YourSite.Com, Ud. acepta por completo los t&eacute;rminos y condiciones en el sitio.</em></p><p>Se puede escribir c&oacute;digo HTML en le descripci&oacute;n del aviso. Si no desea esta caracter&iacute;stica, deje en blanco el t&iacute;tulo del aviso.</p>');

define('_lkn_company_has_active_jobs', '{COMPANY_NAME} tiene {COUNT} Empleos activos');
define('_lkn_worker_no_cover_letter', '<h1>No hay cartas de presentaci&oacute;n </h1>');
define('_lkn_job_print', 'Imprimir esta oferta de Empleo');

define('_lkn_config_social_bookmarking', 'Marcadores sociales');
define('_lkn_config_social_bookmarking_active', 'Marcador social activado?');
define('_lkn_config_social_bookmarking_active_desc', 'En caso afirmativo, los botones de los marcadores sociales deben ser insertados dentro del  detalle de la p&aacute;gina de Empleo. (En el logotipo de la Empresa y el enlace de la Empresa)');
define('_lkn_config_social_bookmarking_type', 'Tipo de bot&oacute;n');
define('_lkn_config_social_bookmarking_type_local', 'Ubicaci&oacute;n de los botones');
define('_lkn_config_social_bookmarking_type_addthis',' Botones de Addthis.com ');
define('_lkn_config_social_bookmarking_type_desc', '<p><strong>Ubicaciones de los botones</strong>: Los botones del Marcador Social deben ser deplegados desde su servidor local </p><p><strong>Botones Addthis.com</strong>: El bot&oacute;n addthis.com se insertar&aacute; </p>');
define('_lkn_config_social_bookmarking_addthis_id', 'Identificador de AddThis.com');
define('_lkn_config_social_bookmarking_addthis_id_desc', 'Si usted ha selccionado el bot&oacute;n Addthis.com arriba, escriba su identificador AddThis.com que usted obtuvo en el sitio web');
define('_lkn_config_social_bookmarking_addthis_button_url', 'Bot&oacute;n AddThis.com');
define('_lkn_config_social_bookmarking_addthis_button_url_desc', 'Usted puede escojer el bot&oacute;n para addthis.com. Escriba la direcci&oacute;n electr&oacute;nica complete del bot&oacute;n addthis.com. Por defecto es  http://s7.addthis.com/static/btn/lg-share-en.gif');

define('_lkn_list_employers', 'Lista de empleadores');
define('_lkn_list_employers_count', 'Conteo de empresas');
define('_lkn_list_employers_jobs', 'Empleos de este usuario');
define('_lkn_list_employers_et', 'Plantillas de correo electr&oacute;nico de este usuario');
define('_lkn_list_workers', 'Lista de buscadores de empleo');
define('_lkn_list_workers_count', 'Cuenta de curr&iacute;culo vitae');

define('_lkn_home_page_indeed', 'Indeed Jobroll');
define('_lkn_config_home_page_indeed', 'Indeed Jobroll?');
define('_lkn_config_home_page_indeed_desc', 'Ud. puede mostrar u ocultar el Indeed Jobroll. Los par&aacute;metros est&aacute;n abajo. Nota: Estos modulos Indeed Jobroll est&aacute;n embebidos dentro de Joomla 1.0 y Joomla 1.5, tambi&eacute;n los puede usar.');

define('_lkn_resume_hits', 'Curr&iacute;culum vitae sobresalientes');
define('_lkn_config_employer_approve_all_companies', 'Aprobar todas las Empresas nuevas?');
define('_lkn_config_employer_approve_all_companies_desc', '<p><strong>Si</strong>: Las empresas a las cuales un trabajador aplica, no estar&aacute;n activas hasta su aprobaci&oacute;n. Se deben aprobar todas las empresas antes de que se pueda añadir empleos.</p><p> Los usuarios no pueden cambiar el estado de la Empresa publicada. LA CONFIGURACI&Oacute;N DE SUGERENCIA PARA ESTE PAR&Aacute;METRO ES SI</p><p><strong>No</strong>: Los usuarios pueden ingresar a una empresa y esta autom&aacute;ticamente pasa a estado activo. </p><p><strong>Nota</strong>: Usted puede obtener un correo electr&oacute;nico cuando el usuario env&iacute;a una empresa mediante la selecci&oacute;n\'<em>Informe de las adiciones y actualizaciones de las Empresas</em>\' par&aacute;metro en \'<em>Correo Electr&oacute;nico</em>\' tab.</p>');
define('_lkn_config_worker_prevent_to_delete_last_resume', 'Prevenir la eliminaci&oacute;n de el &uacute;ltimo curr&iacute;culo vitae?');
define('_lkn_config_worker_prevent_to_delete_last_resume_desc', 'Si usted selecciona Si, empleos! Evitar&aacute; que el solicitante de empleo elimine el &uacute;ltimo Curr&iacute;culo Vitae que el usuario tiene. LA CONFIGURACI&Oacute;N DE SUGERENCIA PARA ESTE PAR&Aacute;METRO ES SI');
define('_lkn_error_worker_prevent_to_delete_last_resume', 'Este Curr&iacute;culo Vitae es el &uacute;ltimo. Usted no puede eliminar este. Si usted quiere, usted puede no publicar el curr&iacute;culo vitae o crear otro y eliminar este.');
define('_lkn_apply', 'Guardar');
define('_lkn_save_as_new', 'Guardar como Nuevo');

//Añadir a Empleos! 1.0.11
define('_lkn_config_category_order', 'Orden de la categor&iacute;a');
define('_lkn_config_category_order_desc', 'Seleccione el orden para las categor&iacute;as de los empleos');

//Añadir a Empleos! 1.0.12
define('_lkn_list_files', 'Lista de archivos de los curr&iacute;culum vitae');
define('_lkn_files_file_name', 'Nombre del archivo');
define('_lkn_config_files', 'Usuario del sistema de archivos');
define('_lkn_config_files_desc', 'Los solicitantes de empleo pueden adjuntar archivos (como archivos pdf, doc, etc.) o imagenes para sus curr&iacute;culos con la ayuda<strong>U</strong>ser <strong>F</strong>iles <strong>S</strong>ystem (UFS)');
define('_lkn_config_files_active', 'Activar UFS?');
define('_lkn_config_files_active_desc', 'Abrir/Cerrar UFS');
define('_lkn_config_files_closed', '<h1>El sistema de archivos de usuarios est&aacute; cerrado desde su configuraci&oacute;n del sistema </h1>');
define('_lkn_config_files_folder', 'Carpeta de archivos');
define('_lkn_config_files_folder_desc', ' La carpeta que se utilizar&aacute; para UFS. Usted debe estar seguro de que la carpeta exista y debe tener permisos de escritura (chmod 777). Este valor debe comenzar y terminar con un /. Por defecto /images/stories/jobs/files/');
define('_lkn_config_files_file_types', 'Tipos de archivo permitidos');
define('_lkn_config_files_file_types_desc', 'Qu&eacute; tipo de archivos puede utilizarse para los archivos adjuntos del Curr&iacute;culo Vitae. Por defecto: zip,rar,txt');
define('_lkn_config_files_image_types', 'Tipos de im&aacute;genes permitidas');
define('_lkn_config_files_image_types_desc', 'Que tipo de im&aacute;genes se permite usar para adjuntar. Por defecto: jpeg,jpg,png,gif');
define('_lkn_config_files_image_rezize_desc', 'Si usted selecciona Si, las im&aacute;genes subidas por el solicitante de Empleo pueden ser cambiadas de tamaño');
define('_lkn_config_files_size', 'Tamaño del archivo (Kb)');
define('_lkn_config_files_size_desc', 'El tamaño m&aacute;ximo para cargar archives en Kb. Por defecto: 1024. Nota: 1024 Kb= 1MB');
define('_lkn_config_files_image_watermark_active', 'Activar Marca de Agua en la imagen?');
define('_lkn_config_files_image_watermark_active_desc', 'Si usted selecciona Si, El texto marca de agua que usted ha configurado en "La pestaña del Correo Electr&oacute;nico> Marca de Agua del Texto, Color de la Marca de Agua del Texto, Color de fonto de la Marca de Agua del Texto " se insertar&aacute; en la im&aacute;genes del UFS');
define('_lkn_config_files_own_count', 'Propietario de la Cuenta de Archivos');
define('_lkn_config_files_own_count_desc', 'Si usted escribe 10 para este par&aacute;metro, el usuario podr&aacute; tener como m&aacute;ximo 10 archivos. Escribir 0 (cero)para cerrar esta funci&oacute;n');
define('_lkn_config_files_attach_count', 'Adjuntar Cuenta');
define('_lkn_config_files_attach_count_desc', 'Si usted escribe 10 para este par&aacute;metro, el usuario podr&aacute; tener como m&aacute;ximo 10 archivos para un curr&iacute;culo vitae. Por defecto: 5. Escriba 0 (cero) para cerrar esta funci&oacute;n');
define('_lkn_files_file_new', 'Agregar nuevo archivo');
define('_lkn_files_file_new_is_not_allowed', 'Usted no puede agregar un nuevo archivo');
define('_lkn_files_file_update', 'Actualizar archivo');
define('_lkn_files_owner', 'Propietario del Archivo');
define('_lkn_owner_tip', 'Seleccionar el propietario. Hacer clic en el enlace "Editar" y seleccionar el usuario que usted desee');
define('_lkn_file_notes', 'Archivo de notas');
define('_lkn_file_notes_tip', 'Usted puede tomar notas para este archivo. Estas notas no son visibles para los Empleadores. Esta es solo para usted (Max. 255 caracteres)');
define('_lkn_file_upload_tip', 'Usted puede cargar un archivo/imagen. Hacer clic en el bot&oacute;n de seleccionar un archivo/imagen de su computador');
define('_lkn_file_is_used', ' El archivo que est&aacute; buscando es usado para las hojas de vida de  debajo');
define('_lkn_resume_files', 'Archivos de Curr&iacute;culum Vitae');
define('_lkn_resume_files_tip', 'Seleccione los archivos que usted quiere adjuntar a su Curr&iacute;culo vitae. Usted puede usar la tecla Control para seleccionar m&aacute;s de un archivo');
define('_lkn_file_hits', 'Achivo de Visitas');
define('_lkn_worker_files', 'Archivos de mi Curr&iacute;culum Vitae');
define('_lkn_worker_files_desc', 'Usted puede cargar archivos como: documentos de Word, pdf, para adjuntar a su Curr&iacute;culum Vitae. Cargue su Curr&iacute;culum Vitae y realice cambios en cualquier momento.');
define('_lkn_worker_files_count_info', 'Usted tiene {COUNT} archive (s)u usted puede tener un m&aacute;ximo de {TOTAL} archivos (s)');
define('_lkn_list_files_no', '<h1>No hay archivos para presentar</h1>');
define('_lkn_error_files_no', 'Usted debe seleccionar el archivo a cargar');
define('_lkn_error_files_attach_count', 'Usted puede adjuntar m&aacute;ximo {COUNT} archivos (s)a su Curr&iacute;culum Vitae');
define('_lkn_error_attachment_can_not_download', '<h1>Usted no puede descargar el archivo adjunto.</h1><p>La raz&oacute;n puede ser una de las siguientes.</p><ol><li class="smallfont">El adjunto es eliminado por el administrador del sitio</li><li class="smallfont">Usted no tiene suficientes permisos para descargar este adjunto. </li></ol>');
define('_lkn_draft', 'Borrador');
define('_lkn_error_job_has_app', 'Usted no puede marcar este empleo como borrador porque contiene una solicitud');
define('_lkn_employer_info_draft', 'Este empleo es un borrador. No puede a&uacute;n ser publicado.');
define('_lkn_error_saved_as_draft', 'El Empleo est&aacute; grabado como borrador');
define('_lkn_error_updated_as_draft', 'El Empleo esta actualizado como borrador');
define('_lkn_job_inform_me', 'Informar');
define('_lkn_job_inform_me_tip', 'Si usted selecciona Si. Usted recibir&aacute; un correo electr&oacute;nico cuando los solicitantes de empleo aplican a este empleo');

define('_lkn_config_employer_inform_on_application', 'Informa al Empleador sobre la solicitud?');
define('_lkn_config_employer_inform_on_application_desc', '* <u>Dejar que los Empleadores elijan</u> : Los Empleadores necesitan seleccionar \'Informar&aacute;?\'par&aacute;metros que est&aacute;n creando el Empleo.<br />* <u>Siempre informar a los Empleadores</u>: Los Empleadores siempre env&iacute;an un correo electr&oacute;nico cuando reciben una solicitud <br/>* <u>No informar a los Empleadores </u>: Los Empleadores no env&iacute;an correo electr&oacute;nico sobre las solicitudes.');

define('_lkn_app_history', 'Historial de Solicitudes');
define('_lkn_app_history_desc', 'Usted puede encontrar los detalles de otras solicitudes para este usuario de los propietarios de la Empresa');

define('_lkn_config_make_jobs_national', 'Make Jobs! Nacional');
define('_lkn_config_make_jobs_national_desc', '<p>El campo del pa&iacute;s es usado para los detalles de la empresa y el diseño de los detalles del Empleo. Este par&aacute;metro puede ayudarle a <strong>ocultar</strong> el campo del pa&iacute;s para sus Empleadores y solicitantes de Empleo. El campo del pa&iacute;s seguir&aacute; existiendo pero ninguno de sus visitantes/empleadores/ solicitantes de empleo podr&aacute;n ver este. Usted ver&aacute; el campo del pa&iacute;s en el panel de administrador </p><p>* Escriba el identificador del pa&iacute;s que usted quiera usar. Visite <em>Joomla Admin Panel&gt;Components&gt;Jobs&gt;List Countries</em> . Agregue un Nuevo pa&iacute;s y escriba el identificador de su pa&iacute;s. Verifique que el pa&iacute;s sea publicado </p><p>* escriba 0 (cero) para cerrar esta funci&oacute;n </p>');
define('_lkn_resume_add_quick_resume', 'Agregar r&aacute;pidamente un curr&iacute;culo vitae');

define('_lkn_config_job_seeker_activate', 'Activar las funciones del Solicitante de Empleo');
define('_lkn_config_job_seeker_activate_desc', '<p>Si usted selecciona \'Si\' , Usted puede agregar su curr&iacute;culo vitae (y el uso de las funciones relacionadas con las personas que buscan empleo, cartas de presentaci&oacute;n, solicitudes presentadas a los puestos de empleo) a su sitio web.</p><p>Note: \'Super Administrador \' el grupo del usuario esta fuera de este criterio </p>');
define('_lkn_config_home_page_companies', 'P&aacute;gina principal de las Empresas');
define('_lkn_config_home_page_company_count', 'P&aacute;gina principal de la Empresa');
define('_lkn_home_page_hiring', 'Cons&uacute;ltenos');
define('_lkn_home_page_company', 'Empresas');
define('_lkn_error_upload', 'El archivo no se carga');

//lknJobs 1.1
define('_lkn_order', 'Orden');
define('_lkn_list_field_categories', 'Lista de curr&iacute;culo vitae por el campo de categor&iacute;as');
define('_lkn_field_category_order', 'Orden');
define('_lkn_field_category_order_tip', 'Seleccione el orden por la categor&iacute;a del Curr&iacute;culo Vitae.  En orden se presentar&aacute; primero los n&uacute;meros m&aacute;s pequeños');
define('_lkn_field_category_add', 'Agregar un Nuevo campo de Categor&iacute;a al Curr&iacute;culo vitae');
define('_lkn_field_category_update', 'Actualizar el campo de categor&iacute;a del curr&iacute;culo vitae');

//lknJobs 1.1.2
define('_lkn_config_hide_company', 'Ocultar las Empresa?');
define('_lkn_config_hide_company_all', 'Mostrar todos los detalles de la Empresa');
define('_lkn_config_hide_company_choose', 'Permitir escoger una Empresa');
define('_lkn_config_hide_company_hide', 'Ocultar todos los detalles de la Empresa');
define('_lkn_config_hide_company_desc', '<p>* <span style="text-decoration: underline;">Mostrar todos los detalles de la Empresa </span>: Puestos de Empleo! se muestran detalles de la empresa a los personas que buscan empleo y al p&uacute;blico </p><p>* <span style="text-decoration: underline;">Permitir escoger una Emprea</span>: A "Ocultar el Nombre de la Emprea?" la opci&oacute;n van a aparecer en formulario de empleo. Esta ser&aacute; una opci&oacute;n de los empleadores para poder publicar ofertas de empleo de forma an&oacute;nima.</p><p>* <span style="text-decoration: underline;">Ocultar todos los detalles de la Empresa</span>: Esto ocultar&aacute; "Datos de la empresa" a los personas que buscan empleo y al p&uacute;blico. Las personas que buscan empleo podr&aacute;n ver los detalles de la Empresa despu&eacute;s de hacer una solicitud a la oferta de empleo</p>');
define('_lkn_job_hide_company_name', 'Ocultar el nombre de la Empresa?');
define('_lkn_job_hide_company_name_tip', 'Si usted selecciona SI, las personas que buscan empleo, no podr&aacute;n ver el nombre de la Empresa hasta que ellos hagan una solicitud');
define('_lkn_job_company_name_is_hidden', 'El nombre de la Empresa es Secreto');

define('_lkn_list_education_levels', 'Listar los niveles de Educaci&oacute;n');
define('_lkn_education_level_add', 'Agregar un Nuevo nivel de Educaci&oacute;n');
define('_lkn_education_level_update', 'Actualizar los niveles de Educaci&oacute;n');
define('_lkn_education_level', 'Niveles de Educaci&oacute;n');
define('_lkn_education_level_tip', 'Escribir el nombre del nivel de Educaci&oacute;n. El nivel de Educaci&oacute;n podr&aacute; ser creado autom&aacute;ticamente');
define('_lkn_education_level_value', 'Valor del nivel de Educaci&oacute;n');

define('_lkn_list_job_types', 'Lista de tipos de Empleo');
define('_lkn_job_type_add', 'Agregar un Nuevo tipo de Empleo');
define('_lkn_job_type_update', 'Actualizar el tipo de Empleo');
define('_lkn_job_type_level', 'Tipo de Empleo');
define('_lkn_job_type_level_tip', 'Escribir el nombre del tipo de Empleo. El tipo de empleo ser&aacute; creado autom&aacute;ticamente');
define('_lkn_job_type_value', 'Valor del tipo de Empleo');

define('_lkn_job_search_cats_select_all', 'Seleccione Todos');
define('_lkn_job_search_cats_select_all_clear', 'Limpiar Selecci&oacute;n');

define('_lkn_job_posting_redirect_payment_page_message', 'Usted puede tener {REQUIRED_CREDIT} cr&eacute;dito (s) para publicar este empleo en nuestro sitio web, usted tiene que comprar {CURRENT_CREDIT_COUNT} cr&eacute;ditos');
define('_lkn_config_job_posting_redirect_payment_page', 'Redireccionar a la p&aacute;gina de pago?');
define('_lkn_config_job_posting_redirect_payment_page_desc', 'ESTE PAR&Aacute;METRO PODRA USARSE, SI SU SISTEMA DE CR&eacute;DITO ESTA ACTIVO <br /><br />* <strong>Si</strong>: Si sus empleadores visitan las p&aacute;gina de "Ofertas de Empleo" sin tener los cr&eacute;ditos suficientes para publicar el Empleo, Ellos van a ser redireccionados a la p&aacute;gina de compra de cr&eacute;dito con un mensaje. Usted puede cambiar el mensaje desde su archivo de idioma. Su mensaje actual es: "Usted debe tener 5 cr&eacute;dito(s) para publicar un Empleo en nuestro sitio web, pero usted tiene 1 cr&eacute;dito" <br /><br /><strong>No</strong>: La redirecci&oacute;n antes mencionadas no se har&aacute;, pero si no tiene suficientes cr&eacute;ditos para publicar el Empleo, este ser&aacute; guardado como borrador');

define('_lkn_config_job_apply', 'P&aacute;gina para Solicitar Empleo');
define('_lkn_config_job_apply_new_resume_create', 'Crear un nuevo Curr&iacute;culo Vitae en la p&aacute;gina de Solicitar Empleo');
define('_lkn_config_job_apply_new_resume_create_desc', 'SI: Las personas que buscan empleo tienen permiso para crear en la p&aacute;gina para solicitar empleo (Panel de las personas que buscan Empleo>. <br /><br />Usted puede leer<a href="http://www.instantphp.com/support/33-completed/2708-redirect-to-add-rew-resume-when-applying.html" target="_new">este subproceso</a> que es la idea detr&aacute;s del par&aacute;metro.');
define('_lkn_job_apply_new_resume_create', 'Crear un nuevo Curr&iacute;culo Vitae');
define('_lkn_job_apply_new_resume_createand_apply', 'Crear un nuevo curr&iacute;culo Vitae & Solicitar el Empleo');

define('_lkn_config_credit_system_googlecheckout_merchant_id', 'Su identificaci&oacute;n');
define('_lkn_config_credit_system_googlecheckout_merchant_key', 'Su clave');
define('_lkn_config_credit_system_googlecheckout_sandbox', 'Activar Modo Caja?');
define('_lkn_config_credit_system_googlecheckout_currency', 'Su moneda');
define('_lkn_config_credit_system_googlecheckout_currency_desc', 'Usted debe escribir el c&oacute;digo de moneda de su pa&iacute;s.');
define('_lkn_config_credit_system_googlecheckout_notes', 'Su API de retorno URL es {API_URL}');

define('_lkn_config_credit_system_active_for_job_seekers', 'Activar el sistema de Cr&eacute;dito para los solicitantes de Empleo?');
define('_lkn_config_credit_system_for_job_seekers_adding_a_resume_cost', 'Crear un costo por reinicio');
define('_lkn_config_credit_system_for_job_seekers_adding_a_resume_cost_desc', 'Cu&aacute;nto costar este reinicio? Escriba cero para cerrar esto');
define('_lkn_config_credit_system_for_job_seekers_applying_a_job_cost', 'Aplicando un costo al empleo');
define('_lkn_config_credit_system_for_job_seekers_applying_a_job_cost_desc', 'Con cu&aacute;ntos cr&eacute;ditos se solicita un Empleo? Escriba cero para cerrar esta opci&oacute;n');

define('_lkn_worker_credit_system_resume_create', '<li>Usted puede crear {COUNT} curr&iacute;culo(s)</li>'); //no eliminar <li> o </li>
define('_lkn_worker_credit_system_apply_job', '<li>Usted puede solicitar {COUNT} empleo(s)</li>'); //do not remove <li> or </li>
define('_lkn_worker_buy_credits_desc', 'Usted puede necesitar cr&eacute;ditos para ciertas acciones. Este m&oacute;dulo puede ayudarle a comprar cr&eacute;ditos');
define('_lkn_error_worker_need_more_credits_to_apply_job', 'Usted no tiene los suficientes cr&eacute;ditos para solicitar este Empleo. Para solicitar este empleo requiere comprar {COST} cr&eacute;ditos, usted tiene {CURRENT_CREDITS} cr&eacute;ditos');
define('_lkn_credit_speding_history_action_apply_job', 'Solicitando un Empleo');
define('_lkn_error_worker_need_more_credits_to_create_new_resume', 'Usted no tiene suficientes cr&eacute;ditos para crear un Nuevo Curr&iacute;culo. Para crear un nuevo curr&iacute;culo requiere comprar {COST} cr&eacute;ditos, pero usted tiene {CURRENT_CREDITS} cr&eacute;ditos');
define('_lkn_credit_speding_history_action_create_resume', 'Creando un Curr&iacute;culo Vitae');

define('_lkn_resume_email_address_tip', 'Escriba su correo electr&oacute;nico');
define('_lkn_config_download_id_desc', 'Usted necesita ingresar su identificador de descarga para validar su instalaci&oacute;n. Si usted no conoce su identificador de descarga, Por favor haga clic en <a href="http://www.instantphp.com/index.php?option=com_instant" target="_blank"></a> para editar los detalles de su licencia');
define('_lkn_config_credit_system_paypal_currency', 'Modena de Paypal');
define('_lkn_config_credit_system_paypal_currency_desc', 'La moneda de pago PayPal. La lista de selecci&oacute;n muestra las monedas admitidas por PayPal. Por favor haga clic en <a href="https://www.paypal.com/cgi-bin/webscr?cmd=p/sell/mc/mc_wa-outside" target="_blank"></a> para ver m&aacute;s detalles');
define('_lkn_config_user_registration', 'Perfiles de M&eacute;todos de Creaci&oacute;n');
define('_lkn_config_user_registration_force', 'En su primera Visita');
define('_lkn_config_user_registration_plugins', 'Que Plugins');
define('_lkn_config_user_registration_desc', '<p>* <span style="text-decoration: underline;">En su primera Vis&iacute;ta</span>: Ofertas de Empleo! obligar&aacute; a los usuarios a crear su empleador o el perfil de las persona que busca empleo despu&eacute;s de activar su cuenta (a trav&eacute;s de nuevas cuentas de usuario de correo la activaci&oacute;n se envi&oacute; desde Joomla!) y visitar las ofertas de Empleo por primera vez. Ver <a href="' . LIVE_SITE . '/administrator/components/com_jobs/images/registration_force.gif" target="_new">en su pantalla</a> para tener una major idea. LE SUGERIMOS SELECCIONAR ESTA OPCI&Oacute;N PARA ESTE PAR&Aacute;METRO</p><p>* <span style="text-decoration: underline;">Qu&eacute; Plugins</span>: Usted necesita para instalar los plugins de registro por separado que se est&aacute;n proporcionando con los paquetes del Empleo</p>');
define('_lkn_user_registration_create_profile', 'Crear Perfil');
define('_lkn_user_registration_create_profile_worker_message', '<h1>REGISTRARSE COMO UNA PERSONA QUE SOLICITA EMPLEO</h1><ul><li> Ingrese su Curr&iacute;culo para facilitar la aplicaci&oacute;n en l&iacute;nea </li><li>Establecer agentes de empleo</li><li>Deje que los Empleadores lo encuentren</li><li> Mant&eacute;ngase al d&iacute;a en las ferias de empleo en su &aacute;rea </li></ul>');
define('_lkn_user_registration_create_profile_worker_link_message', 'Creaci&oacute;n del perfil de la persona que solicita Empleo');
define('_lkn_user_registration_create_profile_employer_message', '<h1>REGISTRARSE COMO EMPLEADOR</h1><ul><li>Post Jobs</li><li>Buscar en la base de datos del solicitante</li><li>Ingrese empleos voluntarios gratuitamente!</li><li>...y mucho m&aacute;s!</li></ul>');
define('_lkn_user_registration_create_profile_employer_link_message', 'Creaci&oacute;n del perfil de los Empleadores');

//añadido para Jobs! 1.3
define('_lkn_config_employer_inform_on_application_let_employer_to_choose', 'Dejar que los Empleadores escojan');
define('_lkn_config_employer_inform_on_application_allways_inform', 'No deje de informar');
define('_lkn_config_employer_inform_on_application_do_not_inform', 'No informar');
define('_lkn_jobs_plugin_install_error', 'Error en la instalaci&oacute;n del nuevo plugin');
define('_lkn_jobs_plugin_install_file_extract_error', 'Empleo! No se pude extraer el plugin del archivo');
define('_lkn_jobs_plugin_install_file_no_installer', 'Empleo! No puede encontrar el archivo de instalaci&oacute;n XML');
define('_lkn_jobs_plugin_install_xml_parse_error', 'Error: No se pudo analizar el archivo XML. Instalaci&oacute;n suspendida');
define('_lkn_jobs_plugin_install_plugin_exist', 'Un plugin con ese nombre ya est&aacute; instalado');
define('_lkn_jobs_plugin_install_copy_error', 'Error mientras se copiaban los archivos');
define('_lkn_jobs_plugin_install_installed', ' Plugin instalado correctamente');
define('_lkn_jobs_plugin_install_remove_', 'El identificador del Plugin no se encuentra');
define('_lkn_jobs_plugin_install_remove_1', 'No hay ning&uacute;n plugin como el este');
define('_lkn_jobs_plugin_install_remove_2', ' No se puede eliminar algunos archivos o directorios ');
define('_lkn_jobs_plugin_install_uninstalled', 'Plugin desinstalado correctamente');
define('_lkn_jobs_plugin_name', 'Nombre del Plugin');
define('_lkn_jobs_plugin_version', 'Versi&oacute;n del Plugin');
define('_lkn_jobs_plugin_author', 'Autor del Plugin');
define('_lkn_jobs_plugin_author_url', 'Direcci&oacute;n Web del Autor');
define('_lkn_jobs_plugin_type', 'Tipo de Plugin');
define('_lkn_jobs_plugin_edit', 'Editar las configuraciones del Plugin');
define('_lkn_jobs_plugin_edit_system_settings', 'Informaci&oacute;n del Plugin');
define('_lkn_jobs_plugin_description', 'Descripci&oacute;n Plugin ');
define('_lkn_jobs_plugin_no_setting', 'No hay configuraciones para este plugin');

define('_lkn_config_home_page_login_form', 'Mostrar la p&aacute;gina de ingreso?');
define('_lkn_config_payment_systems_moved', '<h1>Todas las formas de pago fueron movidas hacia un plugin al que se puede acceder v&iacute;a<a href="index2.php?option=com_jobs&task=list_plugins&plgType=payment">here</a></h1>');
define('_lkn_config_home_page_category_style', 'Estilo de categor&iacute;a');
define('_lkn_config_home_page_category_style_desc', 'Se puede elegir el tipo de b&uacute;squeda sea en la p&aacute;gina principal o en b&uacute;squeda avanzada');

define('_lkn_list_job_alerts', 'Listado de alertas de empleos');
define('_lkn_worker_job_alerts', 'Alertas de empleos');
define('_lkn_worker_job_alerts_desc', 'Añada una alerta para dar seguimiento a un empleo en el que usted est&eacute; interesado.');

define('_lkn_config_job_alerts_active', 'Activar alertas de empleo?');
define('_lkn_config_job_alerts_count', 'Contador de alertas de empleo');
define('_lkn_worker_job_alerts_count', 'Ud. tiene {ACTIVE_JOB_ALERT_COUNT} alerta(s) de empleo y puede tener un m&aacute;ximo de {ALLOWED_JOB_ALERT_COUNT}');
define('_lkn_worker_job_alerts_info_table_published', 'El empleo que ha creado se encuentra activo');
define('_lkn_worker_job_alerts_info_table_published_x', 'El empleo que ha creado no se encuentra activo');
define('_lkn_worker_job_alerts_info_table_edit', 'Puede editar su alerta de empleo hacienda clic aqu&iacute;');
define('_lkn_worker_job_alerts_info_table_delete', 'Puede eliminar su alerta de empleo hacienda clic aqu&iacute;');
define('_lkn_config_job_alerts_html', 'Correo Html');
define('_lkn_worker_job_alerts_new', 'Añadir una nueva alerta');
define('_lkn_worker_job_alerts_update', 'Actualizar una alerta');
define('_lkn_worker_job_alerts_no_new_allowed', 'Ud. No puede añadir una nueva alerta de empleo');
define('_lkn_worker_job_alerts_search_word_tip', 'Palabras clave (e.g. "program manager")');
define('_lkn_worker_job_alert_alert_help', '<p>Llene el formulario de abajo con sus criterios clave para un empleo y le notificaremos tan pronto exista uno.</p><p><small>Seleccionar multiples opciones presionando la tecla CTRL mientras elige.</small></p>');
define('_lkn_worker_job_alert_f', 'Frecuencia de alertas');
define('_lkn_worker_job_alert_f_daily', 'Diariamente');
define('_lkn_worker_job_alert_f_weekly', 'Semanalmente');
define('_lkn_worker_job_alert_email_format', 'Formato Email');
define('_lkn_worker_job_alert_email_format_html', 'HTML');
define('_lkn_worker_job_alert_email_format_plain', 'Plano');
define('_lkn_worker_job_alert_name', 'Nombre de la alerta');
define('_lkn_worker_job_alert_name_tip', 'Un nombre descriptivo para la alerta');
define('_lkn_error_form_job_alert_title', 'Una alerta de empleo debe tener un t&iacute;tulo');
define('_lkn_error_form_no_job_alert', 'No existe una alerta de empleo');
define('_lkn_error_form_job_alert_no_criteria', 'Al parecer, est&aacute; intentando crear una alerta sin criterios. Debe proporcionar al menos uno para continuar.');
define('_lkn_config_job_alert_closed', 'Las alertas de empleo no est&aacute;n permitidas para su configuraci&oacute;n');
define('_lkn_worker_job_alert_owner', 'Propietario de las alertas de empleo');
define('_lkn_config_job_alert_mail_sending_type', 'Tipo de procesamiento de correos');
define('_lkn_config_job_alert_job_count', 'Conteo de empleos en alerta');
define('_lkn_config_job_alert_count_per_cycle', 'Conteo de alertas de empleo para procesar por ciclo');
define('_lkn_config_job_alert_mail_html', 'Correo con alerta de empleo (HTML)');
define('_lkn_config_job_alert_mail_plain', ' Correo con alerta de empleo (Plain)');
define('_lkn_config_job_alert_mail_subject', 'Tema del correo de alerta');

define('_lkn_list_unlock_requests', 'Lista de solicitudes desbloqueadas');
define('_lkn_unlock_resume_exist', 'Ha solicitado desbloquear esta solicitud. Recibir&aacute; un correo cuando el administrador apruebe su solicitud de desbloqueo.');
define('_lkn_unlock_resume_success', 'Ha enviado exitosamente su solicitud de desbloqueo al administrador del sitio. Cuando su solicitud se apruebe recibir&aacute; un correo de confirmaci&oacute;n.');
define('_lkn_list_unlock_requests_unlocked', 'Desbloquear?');
define('_lkn_list_unlock_requests_unlocked_unlocked', 'Desbloqueado');
define('_lkn_list_unlock_requests_unlocked_pending_unlock', 'Desbloqueo pendiente');

define('_lkn_config_hide_mails_on_application_form', 'Activar Modo Agente');
define('_lkn_config_hide_mails_on_application_form_desc', '<p>* <span style="text-decoration: underline;">Si</span>: Jobs! will try to prevent employers to directly contact the job seekers</p><p>* <span style="text-decoration: underline;">No</span>: Employer can see job seekers contact details and can directly contact to the job seekers</p><p>THERE IS AN OFFICIAL JOBS! PLUGIN WHICH WORKS WITH THIS PARAMETER. DO NOT FORGET TO READ THE RELATED DOCUMENT ON OUR DOCUMENTATION WEB WEB SITE</p>');

define('_lkn_app_email_from_', 'Ud.');
define('_lkn_app_email_to_', 'Candidato');

define('_lkn_config_job_apply_login_warning', 'Lugar para advertencias de logueo');
define('_lkn_error_you_must_be_logged_in_to_apply_job', '<h1>Debe ingresar al sistema para poder aplicar a un empleo. Utilice el formulario a continuaci&oacute;n.</h1>');

define('_lkn_config_rss_feeds_title_paramaters', 'RSS');
define('_lkn_config_rss_feeds_description_paramaters', 'Descripci&oacute;n RSS');

//Jobs! 1.3.2
define('_lkn_config_job_posting_allow_aplication_link', 'Redireccionar Aplicaci&oacute;n');
define('_lkn_config_job_posting_allow_aplication_link_desc', 'Si Ud. selecciona SI, las empresas podr&aacute;n añadir accesos para la aplicaci&oacute;n de tal manera que se redireccione hacia el sitio web de la misma empresa.');
define('_lkn_job_application_link', 'Enlace de aplicaci&oacute;n');
define('_lkn_job_application_link_tip', 'Si Ud. añade un enlace (como http://www.google.com) a este par&aacute;metro, las solicitudes ser&aacute;n direccionadas a esta p&aacute;gina. Es necesario añadir la URL completa. NOTA: Si Ud. usa este enlace, las solicitudes ser&aacute;n direccionadas a ese sitio y las caracter&iacute;sticas en su sitio no estar&aacute;n disponibles.');
define('_lkn_page', 'P&aacute;gina'); 
define('_lkn_config_worker_allow_uplad_on_resume_creation', 'Permitir la carga de archivos cuando se reanuda una creaci&oacute;n.');
define('_lkn_worker_allow_uplad_on_resume_creation', '<br /><br /><strong>O cargar un Nuevo archivo</strong><br />{FORM_FIELD}');
define('_lkn_config_employer_approve_all_jobs', 'Aprobar todos los nuevos empleos?');
define('_lkn_employer_approve_all_jobs', 'Aprobaci&oacute;n en espera');
define('_lkn_home_all_jobs', 'Mirar todos los empleos');
define('_lkn_config_home_page_logos_must_post_jobs', 'La empresa debe tener empleos para mostrar su logotipo.');
define('_lkn_config_home_page_logos_create_thumbs', 'Crear miniaturas de los logos');
define('_lkn_search_company', 'Buscar por Empresa');
define('_lkn_config_search_company_letters', 'Buscar por Nombre de Empresa');
define('_lkn_company_no_record', '<h1>No existen empresas bajo el criterio de b&uacute;squeda</h1>');
define('_lkn_credit_order_information', 'Orden de la informaci&oacute;n.');
define('_lkn_credit_order_customer', 'Informaci&oacute;n del visitante');
define('_lkn_credit_order_date', 'Fecha de la orden');
define('_lkn_credit_order_status', 'Estado de la orden');
define('_lkn_credit_order_status_p', 'Pendiente');
define('_lkn_credit_order_items', 'Otros items');
define('_lkn_credit_order_items_quantity', 'Cantidad');
define('_lkn_credit_order_items_name', 'Nombre');
define('_lkn_credit_order_items_unit_price', 'Precio por unidad');
define('_lkn_credit_order_items_subtotal', 'Subtotal');
define('_lkn_credit_order_items_total', 'Total');


//Jobs! 1.4
define('_lkn_config_credit_system_based_on', 'Los cr&eacute;ditos del sistema se basan en');
define('_lkn_config_credit_system_based_on_single_payment', 'Cr&eacute;ditos simples');
define('_lkn_config_credit_system_based_on_single_payment_parameters', 'Par&aacute;metros para los cr&eacute;ditos simples');
define('_lkn_config_credit_system_based_on_package', 'Paquetes');
define('_lkn_credit_system_package_plans', 'Planes de paquetes');
define('_lkn_config_credit_system_closed_or_wrong_type', '<h1>El sistema de cr&eacute;dito est&aacute; cerrado o no se basa en paquetes.</h1>');
define('_lkn_list_packages', 'Lista de paquetes');
define('_lkn_package_resume_count', 'Reanudar Solicitud');
define('_lkn_package_resume_count_created', 'Conteo de solicitudes creado');
define('_lkn_package_resume_count_tip', 'Contar solicitudes');
define('_lkn_package_job_apply_count', 'Conteo de empleos disponibles');
define('_lkn_package_job_applied_count', 'Conteo de empleos aplicados');
define('_lkn_package_job_apply_count_tip', 'Conteo de empleos aplicables');
define('_lkn_package_job_count', 'Conteo de empleos');
define('_lkn_package_job_count_posted', 'Conteo de empleos publicados');
define('_lkn_package_job_duration', 'Duraci&oacute;n del Empleo');
define('_lkn_package_job_duration_tip', 'Cu&aacute;ntos d&iacute;as estar&aacute;n disponibles los empleos que se publique con este paquete?0 (cero) significa que un empleo no puede publicarse con este paquete.');
define('_lkn_package_resume_view', 'Conteo de vistas de solicitudes');
define('_lkn_package_resume_view_unlimited', 'Ilimitado');
define('_lkn_package_resume_view_duration', 'Reanudar acceso a la base de datos (d&iacute;as)');
define('_lkn_error_form_no_package', 'No existe un paquete');
define('_lkn_package_add', 'Añadir paquete');
define('_lkn_package_update', 'Actualizar paquete');
define('_lkn_package_title', 'T&iacute;tulo del paquete');
define('_lkn_package_title_tip', 'Escriba el t&iacute;tulo para este paquete');
define('_lkn_package_job_count_tip', 'Cu&aacute;ntos empleos pueden publicarse con este paquete?0 (cero) significa que una empresa no puede publicar con este paquete.');
define('_lkn_package_resume_view_tip', 'Cu&aacute;ntas solicitudes pueden verse con este paquete? 0 (cero) significa que una empresa puede ver una cantidad ilimitada de solicitudes. NOTA: Esta configuraci&oacute;n afecta la b&uacute;squeda de solicitudes. Las empresas contin&uacute;an viendo las solicitudes a los empleos.');
define('_lkn_package_resume_view_duration_tip', 'Cu&aacute;ntos d&iacute;as se permite al usuario accede a la base de datos de solicitudes? 0 (cero) significa que una empresa no puede acceder a la BD de solicitudes con este paquete.');
define('_lkn_package_type', 'Tipo de Paquete');
define('_lkn_package_type_tip', 'Como es de su conocimiento, los empleos tienen un buscador y una empresa. Qui&eacute;n va a utilizar este paquete?');
define('_lkn_package_type_1', 'Empleador');
define('_lkn_package_type_2', 'Buscador de empleo');
define('_lkn_employer_buy_credits_desc2', 'Necesita escoger el paquete que desea adquirir. Los paquetes son usados para publicar o acceder a la BD de solicitudes.');
define('_lkn_package_price', 'Precio del paquete(' . _lkn_currency . ')');
define('_lkn_package_price_tip', 'Cu&aacute;l es el precio de este paquete en ' . _lkn_currency . '?');
define('_lkn_package_packages', 'Paquetes'); //plural
define('_lkn_package_package', 'Paquete'); //single
define('_lkn_package_packages_tip', 'Seleccione el paquete que desea comprar');
define('_lkn_package_buy', 'Comprar este paquete');
define('_lkn_credit_package_name', '{PACKAGE_NAME} para {USER}');
define('_lkn_credit_buying_history_item_name', 'Nombre del Item');
define('_lkn_list_purchase_history', 'Listar el historial de compras');
define('_lkn_job_posting_redirect_payment_page_message2', 'Su paquete no est&aacute; activo para publicar empleos.');
define('_lkn_credit_package_list_left', 'Empleos restantes'); 
define('_lkn_package_package_job_posting_tip', 'Seleccione el paquete que desea usar para publicar empleos.');
define('_lkn_error_form_job_package', 'Debe seleccionar un paquete.');
define('_lkn_error_credit_package_can_not_be_used', 'No usar este paquete para esta acci&oacute;n.');
define('_lkn_employer_package_count', 'Ud. tiene {NUMBER} paquetes activos'); 
define('_lkn_error_form_job_package_for_resume_search', 'No posee ning&uacute;n paquete para reanudar b&uacute;squedas. Puede comprar un paquete para acceder a las solicitudes v&iacute;a:<a href="index.php?option=com_jobs&task=buy_credits">aqu&iacute;</a>');
define('_lkn_employer_package_use_this', 'Aplicar este paquete');
define('_lkn_employer_extend_resume_database_search_confirm_with_packs', 'Actualmente, tiene acceso a solicitudes desde <strong>{RESUME_VIEW_COUNT_CURRENT}</strong> vista(s) hasta<strong>{RESUME_VIEW_DATE_CURRENT}</strong>. Despu&eacute;s de esto, podr&aacute; acceder con <strong>{RESUME_VIEW_COUNT_NEXT}</strong>vista(s) hasta<strong>{RESUME_VIEW_DATE_NEXT}</strong>');
define('_lkn_employer_extend_resume_database_search_confirm_with_packs_', 'No puede acceder a la BD de solicitudes. Despu&eacute;s de esto, tundra acceso con<strong>{RESUME_VIEW_COUNT_NEXT}</strong>vista(s) hasta<strong>{RESUME_VIEW_DATE_NEXT}</strong>');
define('_lkn_employer_my_packages', 'Mis Paquetes');
define('_lkn_employer_my_packages_desc', 'Puede encontrar todos los paquete que ha adquirido y su estado.');
define('_lkn_package_has_resume_access', 'Reanudar b&uacute;squeda');
define('_lkn_package_has_resume_access_no', 'Este paquete no tiene permisos para reanudar b&uacute;squedas');
define('_lkn_package_has_resume_access_', 'Puede usar este paquete para reanudar b&uacute;squedas desde el Panel Empresarial.');
define('_lkn_package_has_resume_access_used', 'Ha utilizado este paquete para realizar b&uacute;squedas desde el {START} hasta el {END}');
define('_lkn_package_ended', 'Paquete caducado?');
define('_lkn_job_posting_redirect_payment_page_message3', 'No tiene paquetes activos para aplicar a este empleo.');
define('_lkn_credit_package_list_left_job_apply', 'Solicitudes restantes');
define('_lkn_credit_package_list_left_job_apply_desc', 'Qu&eacute; paquete va a utilizer para aplicar a este empleo?');
define('_lkn_credit_speding_history_remove_filter', 'Eliminar filtro');
define('_lkn_job_posting_redirect_payment_page_message4', 'No tiene activo un paquete para crear una solicitud.');
define('_lkn_credit_package_list_left_resume_create', 'Solicitudes faltantes'); 
define('_lkn_credit_package_list_left_resume_create_desc', 'Con cu&aacute;l paquete va a crear esta solicitud?');
define('_lkn_config_credit_system_email', 'Enviar correo');
define('_lkn_config_credit_system_email_desc', 'Desea enviar un correo al usuario cuando el pago se haya completado?');
define('_lkn_list_resume_fields', 'Listar campos de solicitud');

define('_lkn_list_resume_fields_admin', 'Listar campos de currículum');
define('_lkn_list_tools', 'Listar herramientas');
define('_lkn_list_plugins', 'Listar plugins');
define('_lkn_list_job_templates', 'Listar plantillas de empleos');
define('_lkn_list_job_template_name', 'Nombre de la plantilla de empleo');
define('_lkn_list_job_templates_desc', 'Si est&aacute; creando varios empleos en un tiempo limitado, puede crear un esquema de empleos y puede llenar la oferta laboral en un solo clic. Esto le puede ayudar a ahorrar tiempo en lugar de copiar y pegar la misma informaci&oacute;n todas las veces.');
define('_lkn_job_templates_add', 'Añadir nueva plantilla de empleo');
define('_lkn_job_templates_update', 'Actualizar plantilla de empleo');
define('_lkn_error_form_job_template_title', 'Todas las plantillas deben tener un nombre');
define('_lkn_list_job_template_owners', 'Propietario de la plantilla');
define('_lkn_list_job_template_name_tip', 'Escriba el nombre de la plantilla de empleo.');
define('_lkn_list_job_templates_', 'Llene el formulario');
define('_lkn_list_job_templates_disabled', 'La caracteristica de plantillas de empleo est&aacute; desactivada para su configuraci&oacute;n. Si desea que sus empleadores utilicen &eacute;sta, debe activarla en su configuraci&oacute;n.');
define('_lkn_config_template_footer', 'Pie de plantilla');
define('_lkn_config_template_footer_desc', 'Ud. Puede editar el pie de todas las plantillas desde aqu&iacute;. Si no desea usar esta caracter&iacute;stica, d&eacute;jela en blanco.<br /><span style="text-decoration: underline;">Por defecto est&aacute; debajo<br /></span>');
define('_lkn_config_activate_job_templates', 'Activar plantillas de empleo');
define('_lkn_config_activate_job_templates_desc', 'Si sus empleadores est&aacute;n puclicando docenas de empleos similares en un momento determinado, ser&iacute;a m&aacute;s provechoso el permitirles el crear sus propias plantillas. Lo ideal es hacer el empleo f&aacute;cil al permitirles crear plantillas con descripciones est&aacute;ndar de empleos de tal manera que cuando deseen publicar un nuevo empleo, seleccionan alguno de los ya existentes en lugar de tener que cortar y pegar todos los detalles en el sistema una y otra vez.');

define('_lkn_delete', 'Eliminar');
define('_lkn_view', 'Ver');
define('_lkn_print', 'Imprimir');

define('_lkn_list_tools_check_orphan_records', 'Validar registros perdidos');
define('_lkn_list_tools_check_orphan_records_desc', 'Esta herramienta validar&aacute; sus tablas en la BD y elminar&aacute; registros perdidos o hu&eacute;rfanos. Sugerimos ejecutar esta herramienta de manera peri&oacute;dica.');
define('_lkn_list_tools_check_orphan_records_no', 'No existen registros perdidos');
define('_lkn_list_tools_check_orphan_records_yes', '{COUNT} registros perdidos han sido eliminados.');

define('_lkn_field_create_error', 'El campo no est&aacute; creado');
define('_lkn_field_name', 'Nombre del campo');
define('_lkn_field_name_tip', 'Escriba el  nombre del campo. Cada campo debe contener nombres &uacute;nicos. Si esto no es as&iacute;, obtendr&aacute; el error: Archivo no creado.');
define('_lkn_field_type', 'Tipo de campo');
define('_lkn_field_type_tip', 'Seleccione el tipo de campo');
define('_lkn_field_category', 'Categor&iacute;a del campo');
define('_lkn_field_category_tip', 'Categor&iacute;a del campo: Puede añadir/actualizar/eliminar las categor&iacute;as de los empleos.');
define('_lkn_field_required', 'Requerido?');
define('_lkn_field_searchable', 'Explorable?');
define('_lkn_field_searchable_tip', 'Es este campo explorable? Si elige SI, este campo ser&aacute; explorable desde la opci&oacute;n de b&uacute;squeda avanzada.');
define('_lkn_field_search_group', 'Agrupar b&uacute;squeda de campos');
define('_lkn_field_search_group_tip', '<h1>SI NO COMPRENDE LO QUE HACE ESTE PAR&Aacute;METRO, D&Eacute;JELO EN BLANCO. EST&Aacute; ADVERTIDO!!!!</h1><br />Cu&aacute;les campos ser&aacute;n agrupados en una b&uacute;squeda de solicitudes cuando este campo sea explorable?<br /> Visite<a href="http://www.instantphp.com/support/25-feature-request/9713-field-search-group-feature.html" target="_new">http://www.instantphp.com/support/25-feature-request/9713-field-search-group-feature.html</a>para m&aacute;s detalles sobre este par&aacute;metro');
define('_lkn_field_can_unpublish', 'Se puede dar de baja la publicaci&oacute;n?');
define('_lkn_field_can_delete', 'Se puede eliminar?');
define('_lkn_field_size', 'Tamaño');
define('_lkn_field_initial_value', 'Valor por defecto pre - llenado');
define('_lkn_field_initial_value_tip', 'Puede definir un valor infinito para este campo. El valor inicial ser&aacute; usado en un nuevo formulario.');
define('_lkn_field_ml', 'Longitud m&aacute;xima');
define('_lkn_field_cols', 'Conteo de campos');
define('_lkn_field_rows', 'Conteo de registros');
define('_lkn_field_tooltip', 'Consejos');
define('_lkn_field_tooltip_tip', 'Este consejo ser&aacute; mostrado al usuario en un formulario resumen');
define('_lkn_field_search_tooltip', 'Consejo para b&uacute;squedas');
define('_lkn_field_search_tooltip_tip', 'Si Ud. hace a este campo explorable, el consejo se mostrar&aacute; al empleador en la p&aacute;gina de b&uacute;squeda avanzada.');
define('_lkn_field_error_message', 'Mensaje de Error');
define('_lkn_field_error_message_tip', 'Si Ud. marca este campo como requerido, el mensaje se mostrar&aacute; al usuario mediante un pop up en javascript (si no se proporciona un valor requerido). Si lo deja en blanco, los empleos crear&aacute;n un mensaje como:{FIELD_TITLE} NO PUEDE SER VAC&Iacute;O');
define('_lkn_field_error_required_field_is_empty', '{FIELD_TITLE} no puede ser vac&iacute;o');
define('_lkn_field_title_tip', 'T&iacute;tulo de este campo');
define('_lkn_field_use_table', 'Use la table a continuaci&oacute;n para añadir nuevos valores.');
define('_lkn_field_add_value', 'Añadir un Valor');
define('_lkn_field_value', 'Valor');

define('_lkn_config_company_logo_thumb', 'Logo de la Empresa');
define('_lkn_config_company_logo_thumb_size_desc', 'Los empleos pueden crear miniaturas para los logos de las empresas en su propia p&aacute;gina de inicio. (Si Ud. activ&oacute; el crear miniaturas en la pestaña "P&aacute;gina de inicio") Escriba el tamaño para el logo. Por defecto 135x60');

define('_lkn_error_1', 'Debe seleccionar un usuario');
define('_lkn_error_2', 'Debe seleccionar la moneda');
define('_lkn_error_3', 'Ha olvidado escribir el nombre');
define('_lkn_error_4', 'Debe elegir una categor&iacute;a superior diferente.');
define('_lkn_error_5', 'Todos los paquetes de cr&eacute;dito deben tener un precio.');
define('_lkn_error_6', 'El paquete que intenta crear no est&aacute; en uso. Los empleos no se crear&aacute;n con &eacute;l.');
define('_lkn_error_7', 'Debe seleccionar el propietario de esta alerta de empleo.');
define('_lkn_error_8', 'Debe seleccionar el archivo.');
define('_lkn_error_9', 'Debe seleccionar el propietario de la empresa');
define('_lkn_error_10', 'Debe seleccionar el pa&iacute;s de la empresa.');
define('_lkn_error_11', 'Debe escribir una direcci&oacute;n de correo.');
define('_lkn_error_12', 'La plantilla de empleo debe tener un nombre.');
define('_lkn_error_13', 'Debe seleccionar un estado por defecto.');
define('_lkn_error_14', 'Necesita escribir su ID para descargas');
define('_lkn_error_15', 'Debe seleccionar una categor&iacute;a para el empleo.');
define('_lkn_error_16', 'Debe seleccionar el compañ&iacute;a propietaria del empleo.');
define('_lkn_error_17', 'Debe seleccionar un pa&iacute;s.');
define('_lkn_error_18', 'Debe seleccionar la carta de presentaci&oacute;n del propietario');
define('_lkn_error_19', 'Debe escribir una carta de presentaci&oacute;n');
define('_lkn_error_20', 'Debe escribir la expectativa salarial.');
define('_lkn_error_21', 'Debe escribir/seleccionar los paquetes/cuentas que desee añadir a este usuario');
define('_lkn_error_22', 'Debe escribir el ID de transacci&oacute;n.');
define('_lkn_error_23', 'Necesita escribir un cr&eacute;dito.');
define('_lkn_error_24', 'Debe seleccionar al propietario de la plantilla de correos.');
define('_lkn_error_25', 'Debe escribir el mensaje para la plantilla.');
define('_lkn_error_26', 'Debe escribir su correo.');
define('_lkn_error_27', 'No olvide escribir el correo del solicitante.');
define('_lkn_error_28', 'Ha olvidado escribir el tema del correo');
define('_lkn_error_29', 'Ha olvidado escribir un texto en su correo.');
define('_lkn_error_30', '{FIELD_NAME} es requerido para continuar. Al parecer ha sido removido. Empleos, tratar&aacute; de repararlo pero si no lo logr&aacute; no se podr&aacute; continuar. Abra un nuevo foro en la secci&oacute;n de soporte.');
define('_lkn_error_31', 'No puede eliminar el ID {ID}');
define('_lkn_error_32', 'El campo con ID {ID}est&aacute; eliminado');
define('_lkn_error_33', 'No puede eliminar campos con ID {ID}');
define('_lkn_error_34', 'El campo con ID {ID} ha sido eliminado.');
define('_lkn_error_35', 'Debe seleccionar un directorio ra&iacute;z diferente.');
define('_lkn_config_user_registration_who', 'Qui&eacute;n puede crear perfiles en la pantalla principal?');
define('_lkn_config_user_registration_who_employer', 'Empleadores');
define('_lkn_config_user_registration_who_worker', 'Buscadores de empleo');
define('_lkn_all', 'Todos');
define('_lkn_config_user_registration_who_desc', 'Si ha seleccionado el par&aacute;metro "On First Visit" para el m&eacute;todo de creaci&oacute;n de perfiles, lo puede utilizar.');
define('_lkn_config_user_registration_resume_type', 'Tipos de solicitudes en el perfil de creaci&oacute;n');
define('_lkn_config_user_registration_resume_type_extended', 'Creaci&oacute;n de solicitudes avanzada.');
define('_lkn_config_user_registration_resume_type_quick', 'Creaci&oacute;n de solicitudes r&aacute;pida.');

define('_lkn_list_locations', 'Listar ubicaci&oacute;n');
define('_lkn_location', 'Ubicaci&oacute;n');
define('_lkn_location_tip', 'Escribir nueva ubicaci&oacute;n');
define('_lkn_location_parent', 'Ubicaci&oacute;n superior');
define('_lkn_location_zipcode', 'C&oacute;digo ZIP');
define('_lkn_location_zipcode_tip', 'Si lo conoce, escriba el ZIP para su localidad, esto ser&aacute; utilizado para b&uacute;squedas de empleos.');
define('_lkn_location_parent_tip', 'Seleccione el nivel superior para esta ubicaci&oacute;n');
define('_lkn_location_country_tip', 'Seleccione el pa&iacute;s de su ubicaci&oacute;n.');
define('_lkn_location_add', 'Añadir nueva ubicaci&oacute;n');
define('_lkn_location_update', 'Actualizar ubicaci&oacute;n.');

define('_lkn_custom_field_managers', 'Gestores de campos adaptados');
define('_lkn_list_field_categories_jobs', 'Listar las categor&iacute;as de los campos del empleo.');
define('_lkn_list_job_fields', 'Listar campos del empleo');

define('_lkn_expired_jobs', 'Empleos caducados');

define('_lkn_search_any', 'Palabras clave');
define('_lkn_search_all', 'Todas las palabras clave');
define('_lkn_search_exact', 'La frase exacta.');

define('_lkn_job_location_desc', 'Ejemplo: Chicago IL o 60607');
define('_lkn_job_alert_location_tip', 'Seleccionar la ubicaci&oacute;n en d&oacute;nde desea que se le informe. (No olvidar el pa&iacute;s)');

define('_lkn_credit_order_status_c', 'Confirmado y aplicado a la cuenta del usuario');
define('_lkn_credit_order_details', 'Detalles del pago.');

define('_lkn_list_tools_migrate_credits', 'Cr&eacute;ditos restantes');
define('_lkn_list_tools_migrate_credits_desc', 'Visite http://www.instantphp.com/support/33-completed/10127-credit-migration.html para m&aacute;s detalles');
define('_lkn_list_tools_migrate_credits_from_to', 'Migrar cr&eacute;ditos desde {FROM} hasta {TO}');
define('_lkn_list_tools_migrate_credits_needs', 'Datos de cr&eacute;ditos antes de la migraci&oacute;n');
define('_lkn_list_tools_migrate_credits_needs_', 'Datos de cr&eacute;ditos despu&eacute;s de la migraci&oacute;n.');

define('_lkn_list_jobs_by_locations', 'Listar empleos por ubicaci&oacute;n.');
define('_lkn_list_jobs_by_countries', 'Listar empleos por pa&iacute;s');
define('_lkn_config_locations_are_linkable', 'Ubicaciones disponibles en enlaces?');
define('_lkn_config_locations_are_multiple_drop_down', 'Campo ubicaci&oacute;n con multiples selecciones.');

define('_lkn_location_bulk', 'Incrementar ubicaciones');
define('_lkn_location_bulk_tip', 'Si va a añadir ubicaciones, h&aacute;galo desde aqu&iacute;, una ubicaci&oacute;n por l&iacute;nea.');


//Jobs! 1.4.1
define('_lkn_employer_info_active_but_pending', 'Publicado, pero est&aacute; <u>Pendiente</u>. Se mostrar&aacute; pronto.');
define('_lkn_config_disable_advanced_search', 'Desactivar b&uacute;squeda avanzada?');
define('_lkn_config_locations_disable', 'Desactivar ubicaciones');
define('_lkn_credit_system_tax', 'Estado de impuestos');
define('_lkn_credit_system_tax_', 'Tasa de impuestos');
define('_lkn_config_credit_system_tax_activate', 'Activar impuestos');
define('_lkn_config_credit_system_tax_confirmation_text', 'Texto de confirmaci&oacute;n de impuestos');
define('_lkn_config_credit_system_tax_rate', 'Tasa de impuestos (%)');
define('_lkn_config_unregistered_user_can_apply', 'Usuarios no registrados pueden aplicar a empleos?');
define('_lkn_config_unregistered_user_can_apply_id', 'ID de usuario no registrado');
define('_lkn_config_unregistered_user_apply_fields', 'Campos aplicados por un usuario no registrado');
define('_lkn_config_unregistered_user_apply_allow_file_upload', 'Permitir la carga de archivos');
define('_lkn_config_unregistered_user_apply_make_file_is_uploaded', 'Aseg&uacute;rese de que el archive ha sido cargado.');
define('_lkn_apply_without_register', '<h3>Quiero aplicar para el empleo sin tener que registarme</h3>');
define('_lkn_error_you_must_be_logged_in_to_apply_job_', '<h3>}Estoy registrado y quiero iniciar sesi&oacute;n antes de aplicar para un empleo. Le sugerimos registrarse para acceder a todas las caracter&iacute;sticas de nuestro sitio.</h3>');
define('_lkn_config_unregistered_user_cv', 'Solicitud');
define('_lkn_config_unregistered_user_cv_desc', 'Puede adjuntar un archivo a su solicitud');
define('_lkn_config_unregistered_user_apply_image_verify', 'Usar verificaci&oacute;n por imagen');
define('_lkn_config_unregistered_user_apply_image_verify_0', 'No usar verificaci&oacute;n por imagen');
define('_lkn_config_unregistered_user_apply_image_verify_1', 'Usar verificaci&oacute;n por imagen');
define('_lkn_config_unregistered_user_apply_image_verify_write', 'Ingrese los caracteres que vea a su izquierda ***');
define('_lkn_config_unregistered_user_apply_image_verify_wrong', 'La validaci&oacute;n de la imagen es incorrecta, por favor trate nuevamente');
define('_lkn_config_unregistered_user_apply_no_file', 'Debe cargar un archivo para continuar.');
define('_lkn_config_employer_inform_on_application_email_type', 'Tipo de correo electrónico');
define('_lkn_config_employer_inform_on_application_email_type_1', 'correo electrónico en texto plano');
define('_lkn_config_employer_inform_on_application_email_type_2', 'correo electrónico en HTML con todos los detalles');


//Jobs! 1.5
define('_lkn_record_is_not_found', 'No se encuentra el registro');
define('_lkn_employer_company_remove_logo', 'Eliminar logo');
define('_lkn_field_readonly', 'Solo lectura?');
define('_lkn_field_readonly_tip', 'Si el campo es solo lectura no podr&aacute; ser modificado por el usuario');
define('_lkn_field_show_in_view', 'Mostrar en la vista?');
define('_lkn_field_show_in_view_tip', 'SI: el valor del campo ser&aacute; mostrado en la vista preliminar. NO: El valor del campo no ser&aacute; mostrado');
define('_lkn_field_show_in_search_result_brief', 'Mostrar en los resultados de b&uacute;squedas preliminares?');
define('_lkn_field_show_in_search_result_brief_tip', 'SI: El campo sera mostrado en las b&uacute;squedas. NO: el campo no ser&aacute; mostrado.<u>NO OLVIDE LEER DOCUMENTACI&Oacute;NREFERFENTE AL TEMA EN INSTANTPHP.COM</u>');
define('_lkn_field_show_in_search_result_detail', 'Mostrar en los resultados de b&uacute;squedas detalladas?');
define('_lkn_field_show_in_search_result_detail_desc', 'SI: El campo sera mostrado en las b&uacute;squedas. NO: el campo no ser&aacute; mostrado.<u>NO OLVIDE LEER DOCUMENTACI&Oacute;N REFERFENTE AL TEMA EN INSTANTPHP.COM</u>');
define('_lkn_print_view', 'Vista de impresi&oacute;n');
define('_lkn_field_search_type', 'Tipo de b&uacute;squeda?');
define('_lkn_field_search_type_tip', 'GENERAL: Empleos! Buscar&aacute; los campos exactos. <br />ENTRE: Puede permitir la busqueda entre numeros mayores a 5 o entre 1 y 5. (ENTRE estar&aacute; visible si se ha creado un campo entero como EDAD)<br />NO OLVIDE LEER DOCUMENTACI&Oacute;N REFERFENTE AL TEMA EN INSTANTPHP.COM');
define('_lkn_field_search_type_general', 'B&uacute;squeda General');
define('_lkn_field_search_type_between', 'Entre');
define('_lkn_config_job_adding_inform_me', 'Publicando o actualizando un empleo');
define('_lkn_config_job_adding_inform_me_desc', 'Recibir&aacute; un correo cuando alguien publique un Nuevo empleo o se actualice la informaci&oacute;n de alguno.');
define('_lkn_config_job_posting_featured_allowed', 'Permitir caracter&iacute;sticas de publicaci&oacute;n de empleos.');
define('_lkn_config_job_posting_featured_allowed_desc', 'SI: Ud. o sus empleadores ser&aacute;n capaces de publicar empleos premium. &Eacute;stos toman un lugar m&aacute;s alto en las b&uacute;squedas y tienen im&aacute;genes especiales cerca de ellos.<br /><br /> NO: empleos premium no est&aacute;n permitidos.<br /><br />No olvide revisar las configuraciones de los cr&eacute;ditos o paquetes.');
define('_lkn_config_credit_system_adding_a_featured_job_cost', 'Costo de empleos premium');
define('_lkn_config_credit_system_adding_a_featured_job_cost_desc', 'Cu&aacute;nto cuenta el publicar un empleo premium');
define('_lkn_employer_total_featured_jobs_can_post', 'Ud. puede publicar hasta {NUMBER} empleos caracter&iacute;sticos con estos cr&eacute;ditos');define('_lkn_employer_post_featured_jobs', 'Publicar un empleo premium');
define('_lkn_employer_post_featured_jobs_desc', 'Los empleos premium se ubican en posiciones m&aacute;s altas en las p&aacute;ginas de b&uacute;squeda. Puede obtener mayores solicitudes con empleos premium.');
define('_lkn_employer_featured_job', 'Empleo destacado');
define('_lkn_employer_normal_job', 'Empleo normal');
define('_lkn_package_featured_job_count', 'Conteo de empleos destacados');
define('_lkn_package_featured_job_count_tip', 'Cu&aacute;ntos empleos destacados se pueden publicar con este paquete? 0 (cero) significa que una empresa no puede publicar empleos destacados con este paquete.');
define('_lkn_package_featured_job_count_posted', 'Conteo de empleos destacados publicados.');
define('_lkn_list_xml_feeds', 'Listar XML Feeds');
define('_lkn_list_xml_feed_add', 'Añadir nuevo XML Feed');
define('_lkn_list_xml_feed_update', 'Actualizar XML Feed');
define('_lkn_list_xml_feeds_add_root', 'Añadir element ra&iacute;z');
define('_lkn_xml_feed_title_tip', 'Escribir un t&iacute;tulo para este xml feed');
define('_lkn_site_url', 'URL del sitio.');
define('_lkn_job_link', 'Enlace al empleo');
define('_lkn_site_name', 'Nombre del sitio');
define('_lkn_current_date', 'Fecha actual');
define('_lkn_list_xml_feeds_field_id', 'ID del campo');
define('_lkn_list_xml_feeds_field_start_loop', 'Bucle de inicio <br />para este elemento.');
define('_lkn_list_xml_feeds_field_cdata', 'Nodo CDATA?');
define('_lkn_list_xml_feeds_field_name','Nombre del campo');
define('_lkn_list_xml_feeds_field_value','Valor del campo');
define('_lkn_list_xml_feeds_field_text','Texto del campo');
define('_lkn_list_xml_feeds_field_format','Formato del campo');
define('_lkn_list_xml_feeds_field_extra','Atributos del campo');
define('_lkn_list_xml_feeds_field_count','Conteo');
define('_lkn_list_xml_feeds_field_count_tip','Cu&aacute;ntos registros se pueden mostrar con este xml feed? Por defecto: 10');

define('_lkn_list_xml_feeds_field_add_sub', 'Añadir sub-elemento');
define('_lkn_list_xml_feeds_field_save_to_add_more', 'Debe guardar y continuar para añadir este sub-elemento.');
define('_lkn_list_xml_feeds_field_save_error', 'Llene los campos requeridos o elim&iacute;nelos');
define('_lkn_list_xml_feeds_field_save_error_1', 'No posee ning&uacute;n campo para este xml feed');
define('_lkn_list_xml_feeds_field_search_tip', 'Puede añadir criterios de b&uacute;squeda para su xml feed. Seleccione el criterio de b&uacute;squeda y escriba su valor.');
define('_lkn_list_xml_feeds_add_search_criteria', 'Añadir criterios de b&uacute;squeda');
define('_lkn_config_credit_system_allow_user_to_search_resume', 'Permitir la b&uacute;squeda de solicitudes sin criterio alguno.');
define('_lkn_config_credit_system_allow_user_to_search_resume_desc', 'SI: un empleador puede visualizar la b&uacute;squeda de solicitudes sin tener cr&eacute;dito. Pero se le solicitar&aacute; cr&eacute;dito cuando intente ver a profundidad una solicitud<br /><br />NO: Un empleador necesita tener cr&eacute;ditos para visualizar solicitudes y crear nuevas b&uacute;squedas.');
define('_lkn_config_use_nice_to_have', 'Usar los botones "Es bueno tener" y "Requerido" en las p&aacute;ginas de b&uacute;squeda?');
define('_lkn_search_nice_to_have', 'Es bueno tener');
define('_lkn_search_required', 'Requerido');
define('_lkn_config_home_company_ids', 'IDs de la empresa');
define('_lkn_dig_jobs', 'Profundizar empleos');
define('_lkn_dig_jobs_error', 'Debe seleccionar criterios formales de b&uacute;squeda y sus valores');
define('_lkn_dig_jobs_count', '{COUNT} empleos para profundizar');
define('_lkn_dig_jobs_suggestion', 'Palabras alternas para la b&uacute;squeda:');
define('_lkn_config_worker_allow_job_digging', 'Activar profundizaci&oacute;n de empleos');
define('_lkn_config_employer_activate_resume_digging', 'Activar profundizaci&oacute;n de solicitudes');
define('_lkn_config_employer_activate_resume_digging_desc', 'La profundizaci&oacute;n de solicitudes tiene las mismas reglas que la b&uacute;squeda normal de solicitudes.');
define('_lkn_dig_resumes', 'Reanudar profundizaci&oacute;n');
define('_lkn_dig_resumes_desc', 'Reanudar profundizaci&oacute;n es una herramienta de filtrado avanzado para las solicitudes.');
define('_lkn_error_credit_not_enough_to_dig_resumes', 'No tiene suficientes cr&eacute;ditos para profundizar b&uacute;squedas. Por favor, visite el panel del empleador <strong><a href="index.php?option=com_jobs&task=employer"></a></strong> par aver detalles o comprar m&aacute;s cr&eacute;dito');
define('_lkn_dig_resumes_count', '{COUNT} solicitudes para profundizar');
define('_lkn_search_employe','Permite buscar empleos de acuerdo a la elecci&oacute;n que m&aacute;s se ajuste a sus necesidades');

define('_lkn_version', 'La version de empleos!!');
define('_lkn_tam_cart_present', 'El texto de su carta de presentaci&oacute;n no debe ser mayor a 4000 caracteres');
define('_lkn_version_latest', '&Uacute;ltima Versi&oacute;n de Empleos!!');
define('_lkn_search_word', 'Buscar');
define('_lkn_search_word2', 'Buscar por tipo de empleo');
define('_lkn_config_thank_you_message_desc', 'Este mensaje ser&aacute; mostrado a los solicitantes cuando han hecho una postulaci&oacute;n exitosa.<br /><p>Los parametros son los siguientes.<br /><br />{APPLICANT}: Nombres y Apellidos del solicitante<br />{JOB_NAME}:Nombre del empleo<br /> {COMPANY_NAME}: Nombre de la Empresa</p><p>Por defecto es el siguiente:</p><p>Hola {APPLICANT};</p><p>Hemos recibido su postulacion para {JOB_NAME} . Nos comunicaremos con usted tan pronto como sea posible.</p><p> Saludos <br /> {COMPANY_NAME} Recursos Humanos </p>');
//Oskar
//Creación de campos, para la administración
define('_lkn_name_fields', 'Nombre del campo');
define('_lkn_name_fields_traductor', 'Nombre del campo (Traducción)');
define('_lkn_fields_type_admin', 'Tipo');
define('_lkn_fields_category_admin', 'Categoria');
define('_lkn_fields_requeride', 'Requerido?');
define('_lkn_fields_published', 'Publicado?');
define('_lkn_fields_search_admin', 'Búsqueda');
define('_lkn_fields_can_published', 'Puede despublicar?');
define('_lkn_fields_can_delete', 'Se pueden eliminar?');
?>