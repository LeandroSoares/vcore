<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH.'libraries/vcore/core/'.'VCoreTagContainer.php';

/**
 * Classe para renderizar a marcação html "button"
 * @author Leandro Soares  <leandrogamedesigner@gmail.com>
 * @package vcore
 * @subpackage body
 */
class VButton extends VCoreTagContainer{
/**
 * 
 * @param String/IVCore $content - Conteudo renderizado em string ou objeto que implementa a interface IVCore
 * @param String $class classe de css
 * @param String $type tipo de botao
 */
    function __construct($content="", $class=NULL, $type=NULL) {
        parent::__construct('button', $content);
        if(isset($class))
            $this->addClass($class);
        if(isset($type))
            $this->attr("type", $type);
    }
}
