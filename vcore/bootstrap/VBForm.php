<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'libraries/vcore/body/' . 'VForm.php';
require_once APPPATH . 'libraries/vcore/body/' . 'VButton.php';
require_once APPPATH . 'libraries/vcore/bootstrap/' . 'VBFormGroup.php';

/**
 * Cria um form na estrutura do bootstrap
 * @author Leandro Soares  <leandrogamedesigner@gmail.com>
 * @package vcore
 * @subpackage bootstrap
 */
class VBForm extends VForm {

    function __construct($action = '', $method = 'GET', $enctype = null) {
        parent::__construct($action, $method, $enctype);
    }

    public function addInput($type, $labelText, $name, $required, $helptext = null) {
        $this->appendContent(new VBFormGroup($type, $labelText, $name, $required, $helptext));
    }

    public function addSubmitButton($text = "Submit") {
        $submit = new VButton($text, "submit");
        $submit->addClassList(['btn', 'btn-default']);
        $this->appendContent($submit);
    }

}
