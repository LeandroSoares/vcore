<?php

//<script src="" charset="utf-8"></script>

defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'libraries/vcore/core/' . 'VCoreTagContainer.php';

/**
 * Classe para renderizar "style"
 * @author Leandro Soares  <leandrogamedesigner@gmail.com>
 * @package vcore
 * @subpackage head
 */
class VStyle extends VCoreTagContainer {

    public function __construct($content = "") {
        parent::__construct('style', $content);


        return $this;
    }

}
