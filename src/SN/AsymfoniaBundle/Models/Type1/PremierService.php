<?php

namespace SN\AsymfoniaBundle\Models\Type1;

class PremierService{
	private $attrib;


	public function __construct(){
		$this->attrib="constructueur du service donne cette valuer à cette propriete attrib";
	}

	public function getAttrib(){
		return $this->attrib;
	}

	public function maju($text){
		return strtolower($text);
	}

	public function minu($text){
		return strtoupper($text);
	}
}