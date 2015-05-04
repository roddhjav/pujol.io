<?php

class Contact
{
	/**
	 * Form var
	 */
	private $name;
	private $email;
	private $subject;
	private $message;
	private $bool;
	
	/**
	 * Constructor
	 */
	function __construct() {
		$this->name = ((isset($_POST['name'])) ? $_POST['name'] : null );
		$this->email = ((isset($_POST['email'])) ? $_POST['email'] : null );
		$this->subject = ((isset($_POST['subject'])) ? $_POST['subject'] : null );
		$this->message = ((isset($_POST['message'])) ? $_POST['message'] : null );
	}
	
	/**
	 * Send the email
	 * @return true if the mail has been sent, else return false
	 */
	public function sendmail() {
		$header = "From: " .$this->email. " \r\n";
		$subject = "[Contact Form] " .$this->subject;
		$body = "   " .$this->message. "\n\n   " .$this->name;
		
		return mail(MAIL, $subject, $body, $header);
	}
	
	/**
	 * Check if all the form var exist
	 * @return true if all the elements exist, else return false
	 */
	public function isfull() {
		return ( $this->name != null AND  $this->email != null AND  $this->subject != null AND  $this->message != null );
	}
	
	/**
	 * Check if the Contact form has been sent
	 * @return true if all the elements does'nt exist, else return false
	 */
	public function isempty() {
		return ( $this->name == null AND  $this->email == null AND  $this->subject == null AND  $this->message == null );
	}
	
	/**
	 * Check if $this->email is an email
	 * @return true if $this->email is an valid email adress, else return false
	 */
	public function isemail() {
		return filter_var($this->email, FILTER_VALIDATE_EMAIL);
	}
}
?>