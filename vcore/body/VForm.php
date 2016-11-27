<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'libraries/vcore/core/' . 'VCoreTagContainer.php';
require_once APPPATH . 'libraries/vcore/body/' . 'VInput.php';

/**
 * Classe para renderizar a marcação html "form"
 * @author Leandro Soares  <leandrogamedesigner@gmail.com>
 * @package vcore
 * @subpackage body
 */
class VForm extends VCoreTagContainer {

    static $ENCTYPE_MULTIPART_FORM_DATA = "multipart/form-data";

    /**
     * @param String $action
     * @param String $method
     */
    function __construct($action = '', $method = 'GET', $enctype=null) {
        parent::__construct('form', '');
        $this->setAction($action);
        $this->setMethod($method);
        if (isset($enctype)) {
            $this->setEnctype($enctype);
        }
    }

    public function setAction($action) {
        $this->attr('action', $action);
    }

    public function setMethod($method) {
        $this->attr('method', $method);
    }

    public function setEnctype($enctype) {
        $this->attr('enctype', $enctype);
    }

}
