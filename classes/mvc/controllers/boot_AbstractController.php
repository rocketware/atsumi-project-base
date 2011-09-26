<?php
abstract class boot_AbstractController extends mvc_AbstractController {
	function preRender() {
		$this->push('css', 'css/core.css');
	}
}
?>
