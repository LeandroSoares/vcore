<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH.'libraries/vcore/core/'.'VCoreTag.php';

/**
 * Classe para renderizar a marcação html "input"
 * @author Leandro Soares  <leandrogamedesigner@gmail.com>
 * @package vcore
 * @subpackage body
 */
class VInput extends VCoreTag {

    /**
     * 
     * @param type $type
     * @param type $name
     * @return $this
     */
    public function __construct($type, $name=NULL, $required=null) {
        parent::__construct('input', "");
        
        $this->attr("type", $type);
        if (isset($name)) {
            $this->attr("name", $name);
        }
        if (isset($required)) {
            $this->attr("required", $required);
        }
    }
    
    function setType($type) {
        $this->attr("type", $type);
    }
    function setValue($value) {
        $this->attr("value", $value);
    }
    function setName($name) {
        $this->attr("name", $name);
    }
    function setRequired($isRequired) {
        $this->attr("required", $isRequired);
    }
}
