<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH.'libraries/vcore/core/'.'VCoreTagContainer.php';
require_once APPPATH.'libraries/vcore/body/'.'VDiv.php';
require_once APPPATH.'libraries/vcore/body/'.'VList.php';
require_once APPPATH.'libraries/vcore/body/'.'VHx.php';
require_once APPPATH.'libraries/vcore/body/'.'VP.php';
require_once APPPATH.'libraries/vcore/body/'.'VDiv.php';
require_once APPPATH.'libraries/vcore/body/'.'VButton.php';
require_once APPPATH.'libraries/vcore/body/'.'VImg.php';
require_once APPPATH.'libraries/vcore/body/'.'VForm.php';
require_once APPPATH.'libraries/vcore/body/'.'VArticle.php';
require_once APPPATH.'libraries/vcore/body/'.'VHeader.php';

/**
 * Classe para renderizar a marcação html "body" e importa a maioria das tags
 * @author Leandro Soares  <leandrogamedesigner@gmail.com>
 * @package vcore
 * @subpackage body
 */
class VBody extends VCoreTagContainer {
/**
 * 
 * @param String/IVCore $content - Conteudo renderizado em string ou objeto que implementa a interface IVCore
 * @param String $class
 */
    function __construct($content = "", $class = NULL) {
        parent::__construct('body', $content);
        if (isset($class))
            $this->addClass($class);
    }

}
