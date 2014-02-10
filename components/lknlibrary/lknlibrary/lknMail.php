<?php
/*======================================================================*\
|| #################################################################### ||
|| # ---------------------------------------------------------------- # ||
|| # com_jobs is a native Job Management Component for Joomla  		  # ||
|| # This component is not free or public.							  # ||
|| # It's for only our licensed customer							  # ||
|| # If you are not a licensed customer, You are not allowed to use it# ||
|| # Developer: Ulas ALKAN											  # ||
|| # Date: April 2009												  # ||
|| # This file may not be redistributed in whole or significant part. # ||
|| # ------------ OUR COMPONENT IS NOT FREE SOFTWARE ---------------- # ||
|| # www.instantphp.com |  www.instantphp.com/license.html?start=1 	  # ||
|| #################################################################### ||
\*======================================================================*/

if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }


	function lkncreateMail($from='', $fromname='', $subject, $body)
	{
		global $_lknBaseFramework,$_config;
		$path=JOOMLA_ROOT . LKN_DS . 'components' . LKN_DS . 'lknlibrary' . LKN_DS . 'phpmail' . LKN_DS;
		include_once($path . 'class.phpmailer.php');
		$mail = new lknPHPMailer();
		
		$jconfig=new lknJoomlaConfig();
		$mailfrom=$jconfig->get('mailfrom');
		$fromname_site=$jconfig->get('fromname');
		$sendmail=$jconfig->get('sendmail');
		
		$mailer=$_config['mailer'];
		
		$mail->SetLanguage( 'en', $path . 'language' . LKN_DS );
		$mail->CharSet 	= 'utf-8';//substr_replace(_ISO, '', 0, 8);
		$mail->IsMail();
		$mail->From 	= $from ? $from : $mailfrom;
		$mail->FromName = $fromname ? $fromname : $fromname_site;
			if ($mailer=='')
			{
				$mailer='mail';
			}
		$mail->Mailer 	= $mailer;	
		$mail->Subject 	= $subject;
		$mail->Body 	= $body;
		
			// Add smtp values if needed
			if ( $mailer == 'smtp' ) {
				$mail->SMTPAuth = $jconfig->get('smtpauth');
				$mail->Username = $jconfig->get('smtpuser');
				$mail->Password = $jconfig->get('smtppass');
				$mail->Host 	= $jconfig->get('smtphost');
			} else
		
			// Set sendmail path
			if ( $mailer == 'sendmail' ) {
				if (isset($sendmail))
					$mail->Sendmail = $sendmail;
			}
			
			if ($mailer=='gmail') {
				$mail->IsSMTP();
				$mail->SMTPAuth   = true;                  // enable SMTP authentication
				$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
				$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
				$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
				
				$mail->Username   = $_config['gmail_username'];// - GMAIL username
				$mail->Password   = $_config['gmail_password'];            // GMAIL password
			}

		return $mail;
	}
	
		/**
	* Mail function (uses phpMailer)
	* @param string From e-mail address
	* @param string From name
	* @param string/array Recipient e-mail address(es)
	* @param string E-mail subject
	* @param string Message body
	* @param boolean false = plain text, true = HTML
	* @param string/array CC e-mail address(es)
	* @param string/array BCC e-mail address(es)
	* @param string/array Attachment file name(s)
	* @param string/array ReplyTo e-mail address(es)
	* @param string/array ReplyTo name(s)
	* @return boolean
	*/
	function lknSendMail( $from, $fromname, $recipient, $subject, $body, $mode=0, $cc=NULL, $bcc=NULL, $attachment=NULL, $replyto=NULL, $replytoname=NULL ) {
	
		// Filter from, fromname and subject
		if (!isValidEmail( $from ) ) {
			return false;
		}
	
		$mail = lkncreateMail($from, $fromname, $subject, $body);
	
		// activate HTML formatted emails
		if ( $mode ) {
			$mail->IsHTML(true);
		}
	
		if (is_array( $recipient )) {
			foreach ($recipient as $to) {
				if (!isValidEmail( $to )) {
					return false;
				}
				$mail->AddAddress( $to );
			}
		} else {
			if (!isValidEmail($recipient )) {
				return false;
			}
			$mail->AddAddress( $recipient );
		}
		if (isset( $cc )) {
			if (is_array( $cc )) {
				foreach ($cc as $to) {
					if (!isValidEmail( $to )) {
						return false;
					}
					$mail->AddCC($to);
				}
			} else {
				if (!isValidEmail( $cc )) {
					return false;
				}
				$mail->AddCC($cc);
			}
		}
		if (isset( $bcc )) {
			if (is_array( $bcc )) {
				foreach ($bcc as $to) {
					if (!isValidEmail( $to )) {
						return false;
					}
					$mail->AddBCC( $to );
				}
			} else {
				if (!isValidEmail( $bcc )) {
					return false;
				}
				$mail->AddBCC( $bcc );
			}
		}
		if ($attachment) {
			if (is_array( $attachment )) {
				foreach ($attachment as $fname) {
					$mail->AddAttachment( $fname );
				}
			} else {
				$mail->AddAttachment($attachment);
			}
		}
		//Important for being able to use mosMail without spoofing...
		if ($replyto) {
			if (is_array( $replyto )) {
				reset( $replytoname );
				foreach ($replyto as $to) {
					$toname = ((list( $key, $value ) = each( $replytoname )) ? $value : '');
					if (!isValidEmail( $to )) {
						return false;
					}
					$mail->AddReplyTo( $to, $toname );
				}
	        } else {
				if (!isValidEmail( $replyto )) {
					return false;
				}
				$mail->AddReplyTo($replyto, $replytoname);
			}
	    }
	
//		$mailssend = $mail->Send();
	
		if(!$mail->Send()) {
		 	return $mail->ErrorInfo;
		} else {
		  	return '1';
		}

//		if( $mail->error_count > 0 ) {
//			return $mail->ErrorInfo;
//		}
//		return $mailssend;
	}
	
	/**
	 *
	 * @param	string	$email	String to check for a valid email address
	 * @return	boolean
	 */
	function isValidEmail( $email ) {
		$valid = preg_match( '/^[\w\.\-]+@\w+[\w\.\-]*?\.\w{1,4}$/', $email );
	
		return $valid;
	}


   
?>