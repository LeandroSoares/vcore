<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'libraries/vcore/core/' . 'VCoreTagContainer.php';

/**
 * Classe para renderizar a marcação html "label"
 * @author Leandro Soares  <leandrogamedesigner@gmail.com>
 * @package vcore
 * @subpackage body
 */
class VLabel extends VCoreTagContainer {

    /**
     * 
     * @param String $content
     * @param String $for
     */
    public function __construct($content, $for = NULL) {
        parent::__construct('label', $content);

        if (isset($for)) {
            $this->attr("for", $for);
        }
    }

}
