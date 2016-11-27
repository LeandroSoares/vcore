<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH.'libraries/vcore/core/'.'VCoreTagContainer.php';
/**
 * Classe para renderizar a marcação html "a"
 * @author Leandro Soares  <leandrogamedesigner@gmail.com>
 * @package vcore
 * @subpackage body
 */
class VA extends VCoreTagContainer{

    /**
     * 
     * @param String/IVCore $content - Conteudo renderizado em string ou objeto que implementa a interface IVCore
     * @param String $href - url de link
     * @param String $class
     * @return VA $this
     */
    function __construct($content="", $href=NULL, $class=NULL) {
        parent::__construct('a', $content);
        if (isset($href)) {
            $this->attr('href', $href);
        }
        if (isset($class)) {
            $this->addClass($class);
        }
        return $this;
    }
}
