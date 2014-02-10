<?php
/*======================================================================*\
|| #################################################################### ||
|| # ---------------------------------------------------------------- # ||
|| # com_library is a native Library Management Component for Joomla  # ||
|| # This component is not free or public.							  # ||
|| # It's for only our licensed customer							  # ||
|| # If you are not a licensed customer, You are not allowed to use it# ||
|| # Developer: Ulas ALKAN											  # ||
|| # Date: Jan 2009													  # ||
|| # This file may not be redistributed in whole or significant part. # ||
|| # ------------ OUR COMPONENT IS NOT FREE SOFTWARE ---------------- # ||
|| # www.ulasalkan.com |  www.ulasalkan.com/forum/showthread.php?t=12 # ||
|| #################################################################### ||
\*======================================================================*/
if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }
//PAYPAL E-MAİL DEĞİŞKENLERİ
define('_lkn_employer_buy_credits_email_subject_to_site_owner','Instant Payment Notification - Recieved Payment');
define('_lkn_employer_buy_credits_email_to_site_owner','Estimado usuario,
Una notificación de pago instantáneo fue recibida con éxito de {PAYER_EMAIL} en {CURRENT_DATE} .
El pago se realiza por {USER_NAME}
Detalles:
===========================================================================
{PAYMENT_DETAILS}
===========================================================================
Este mensaje ha sido creado automaticamente');
//PAYPAL E-MAİL DEĞİŞKENLERİ BİTTİ
//ŞİRKET EKLEME MAİLİ BAŞLADI
define('_lkn_company_add_update_subject','Empresa Agregar/Actualizar');
define('_lkn_company_add_update_text','Estimado usuario,
Uno de sus usuarios ha agregado o actualizado la información sobre la empresa {CURRENT_DATE}.
La empresa siguiente necesita su aprobación. Se puede aprobar a través del back-end o simplemente utilizar el enlace de abajo para publicar/despublicar/borrar la empresa. Este vínculo expira en 7 días.
Para publicar la empresa:
{PUBLISH}
Para despublicar la empresa:
{UNPUBLISH}
Detalles:
===========================================================================
Título de la empresa:{COMPANY_TITLE}
Enlace del perfil de empresa: {COMPANY_PROFILE}
Descripción de la empresa:{COMPANY_DESCRIPTION}
Sitio web de la empresa:{COMPANY_URL}
Dirección de la empresa:{COMPANY_ADDRESS}
Ciudad de la empresa:{COMPANY_CITY}
Código postal de la empresa:{COMPANY_ZIP_CODE}
Correo electrónico de le empresa:{COMPANY_EMAIL}
Nombre del contacto de la empresa:{COMPANY_CONTACT_NAME}
Teléfono del contacto de le empresa:{COMPANY_CONTACT_PHONE}
===========================================================================
Este mensaje ha sido creada automaticamente por empleo!');
//ŞİRKET EKLEME MAİLİ BİTTİ
//BANK TRANSFER MAİLİ BAŞLADI -SITE ADMIN
define('_lkn_employer_buy_credits_bank_subject','De crédito con el Banco de solicitud de Oferta de Transferencia');
define('_lkn_employer_buy_credits_bank_text','Estimado usuario,
Uno de sus usuarios se solicita para comprar créditos mediante transferencia bancaria en {CURRENT_DATE} .
Cuando el usuario envía los detalles del pago, recibirá un segundo correo electrónico.
Detalles:
===========================================================================
Nombre de usuario:{USER_NAME}
Cuenta de crédito que el usuario quiere comprar: {CREDIT_COUNT}
El dinero que el usuario tiene que pagar: {TOTAL} {CURRENCY}
===========================================================================
Este mensaje ha sido creado automaticamente por Empleo!');
define('_lkn_employer_buy_credits_bank_payment_details_subject','Segundo correo electrónico - De crédito con el Banco de solicitud de Oferta de Transferencia');
define('_lkn_employer_buy_credits_bank_payment_details_text','Estimado usuario,
Uno de sus usuarios ha enviado los detalles de pago que le hizo a su cuenta bancaria.
Puede aprobar o rechazar el pago en su panel de administración de componentes > créditos pendientes de la sección.
Este mensaje ha sido creado automaticamente por Empleo!');
//BANK TRANSFER MAİLİ BİTTİ - SITE ADMIN
//BANK TRANSFER MAİLİ BAŞLADI -EMPLOYER
define('_lkn_employer_bank_payment_credit_approved','Your Credit is approved on {DOMAIN}');
define('_lkn_employer_bank_payment_credit_approved_text','Dear user,
Your credit is approved on {LIVE_SITE}.
Thanks for your payment.
Best Regards
{LIVE_SITE}
This message has been created automaticly by Jobs!. Do not reply it');
define('_lkn_employer_bank_payment_credit_rejected','Your Credit is rejected on {DOMAIN}');
define('_lkn_employer_bank_payment_credit_rejected_text','Dear user,
Your credit is rejected on {LIVE_SITE}.
The reasons may be one of the below
1. You did not made any payment to our bank account
2. You did not made enough payment like paying 5$ instead of 7$ (Amounts can be different depending on your credit count) 
3. You did not inform us about your payment from employer panel
Best Regards
{LIVE_SITE}
This message has been created automaticly by Jobs!. Do not reply it');
//BANK TRANSFER MAİLİ BİTTİ -EMPLOYER
//şirket onay maili -EMPLOYER
define('_lkn_employer_company_approved_subject','Your company approved on {DOMAIN}');
define('_lkn_employer_company_approved_text','Dear user,
Your company is approved on {LIVE_SITE}.
Best Regards
{LIVE_SITE}
This message has been created automaticly by Jobs!. Do not reply it');
define('_lkn_employer_company_rejected_subject','Your Company is rejected on {DOMAIN}');
define('_lkn_employer_company_rejected_text','Dear user,
Your company is rejected on {LIVE_SITE}.
Best Regards
{LIVE_SITE}
This message has been created automaticly by Jobs!. Do not reply it');
define('_lkn_employer_company_submitted_subject','Company submission on {DOMAIN}');
define('_lkn_employer_company_submitted_text','Dear user,
We have recieved your company submission on {LIVE_SITE}.
You will be informed when we approve or reject your company.
Best Regards
{LIVE_SITE}
This message has been created automaticly by Jobs!. Do not reply it');
//şirket onay maili -EMPLOYER
define('_lkn_employer_get_application','You have new applicants on {DOMAIN}');
define('_lkn_employer_get_application_text','Dear user,
You have new applicant on {SITE_NAME}.
You can review the application with visiting your Employer Panel.
Details
====================================
Job Title: {JOB_TITLE}
Job Link: {JOB_LINK}
Employer Panel: {EMPLOYER_PANEL_LINK}
Best Regards
{LIVE_SITE}
This message has been created automaticly by Jobs!. Do not reply it');
//google checkout order recieve edildiğindeki mail başladı
define('_lkn_employer_google_checkout_order_recieved_subject','We have recieved your order on {DOMAIN}');
define('_lkn_employer_google_checkout_order_recieved_text','Dear user,
We have recieved your credit buying request with using Google Checkout .
Details
====================================
Credit Count: {CREDIT_COUNT}
Pending Credits Panel: {PENDING_CREDITS_URL} 
You will get another mail, When we have fully charged
Thanks for your payment.
Best Regards
{LIVE_SITE}
This message has been created automaticly by Jobs!. Do not reply it');
//google checkout order recieve edildiğindeki mail başladı
?>