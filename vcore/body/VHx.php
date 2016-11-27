<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH.'libraries/vcore/core/'.'VCoreTagContainer.php';

/**
 * Classe para renderizar a marcação html "h"
 * @author Leandro Soares  <leandrogamedesigner@gmail.com>
 * @package vcore
 * @subpackage body
 */
class VHx extends VCoreTagContainer{

    public function __construct($content='', $nivel=1, $class=NULL) {
        parent::__construct('h'.$nivel, $content);
        if(isset($class))
            $this->addClass($class);
    }
}
