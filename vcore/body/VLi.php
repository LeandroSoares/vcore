<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH.'libraries/vcore/core/'.'VCoreTagContainer.php';

/**
 * Classe para renderizar a marcação html "li"
 * @author Leandro Soares  <leandrogamedesigner@gmail.com>
 * @package vcore
 * @subpackage body
 */
class VLi extends VCoreTagContainer{

    function __construct($content="", $class=NULL) {
        parent::__construct('li', $content);
        if (isset($class)) {
            $this->addClass($class);
        }
    }
}
