<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'libraries/vcore/body/' . 'VDiv.php';
require_once APPPATH . 'libraries/vcore/body/' . 'VP.php';
require_once APPPATH . 'libraries/vcore/body/' . 'VLabel.php';
require_once APPPATH . 'libraries/vcore/body/' . 'VInput.php';

/**
 * Cria um form-group na estrutura do bootstrap
 * @author Leandro Soares  <leandrogamedesigner@gmail.com>
 * @package vcore
 * @subpackage bootstrap
 */
class VBFormGroup extends VDiv {

    /**
     * @param String $type tipo de input
     * @param String $labelText texto da label
     * @param String $name nome do input 
     * @param Boolean $required se é requerido ou não
     * @param String $helptext texto de ajuda
     */
    function __construct($type, $labelText, $name, $required = null, $helptext = null) {
        parent::__construct(null, null, 'form-group');

        $this->appendContent(new VLabel($labelText, $name));
        $this->appendContent(new VInput($type, $name,$required));
        
        if (isset($helptext)) {
            $this->appendContent(new VP($helptext, "help-block"));
        }
    }

}
