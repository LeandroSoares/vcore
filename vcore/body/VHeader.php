<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH.'libraries/vcore/core/'.'VCoreTagContainer.php';

/**
 * Classe para renderizar a marcação html "header"
 * @author Leandro Soares  <leandrogamedesigner@gmail.com>
 * @package vcore
 * @subpackage body
 */
class VHeader extends VCoreTagContainer {
/**
 * 
 * @param String/IVCore $content - Conteudo renderizado em string ou objeto que implementa a interface IVCore
 * @param String $id
 * @param String $class
 */
    function __construct($content = "", $id = NULL, $class = NULL) {
        parent::__construct('header', $content);
        if (isset($id))
            $this->setId($id);
        if (isset($class))
            $this->addClass($class);
    }

}
