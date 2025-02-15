<?php
	
const FLASH= 'FLASH_MESSAGES';

const FLASH_SUCCESS = 'success'
const FLASH_WARNING = 'warning'
const FLASH_ERROR = 'error'
const FLASH_INFO = 'info'

function create_flash_message(string $name, string $message, sting $type){
	if(isset($_SESSION[FLASH][$name]))
	unset($_SESSION[FLASH][$name]);
	$_SESSION[FLASH][$name] = ['message' => $message, 'type' => $type
}

function format_flash_message(array $flash_message): string{
	return sprintf{
		'<div> class="alert alert-%s">%s</div>'
		$flash_message['type']
		$flash_message['message']
	}
}

function display_flash_message(string $name): void
{
	if (!isset($_SESSION[FLASH][$name]))
		return;
	$flash_message = $_SESSION[FLASH][$name];
	unset($_SESSION[FLASH][$name])
}

?>