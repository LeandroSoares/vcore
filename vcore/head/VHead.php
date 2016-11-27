<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'libraries/vcore/core/' . 'VCoreTagContainer.php';
require_once APPPATH . 'libraries/vcore/head/' . 'VLink.php';
require_once APPPATH . 'libraries/vcore/head/' . 'VScript.php';
require_once APPPATH . 'libraries/vcore/head/' . 'VStyle.php';

/**
 * Tem a responsabilidade de gerenciar os links e tags do "head" do documento html
 * @author Leandro Soares  <leandrogamedesigner@gmail.com>
 * @package vcore
 * @subpackage head
 */
class VHead extends VCoreTagContainer {

    public $title;

    function __construct($content = "") {
        parent::__construct('head', $content);
        $this->links = array();
        $this->title = new VCoreTagContainer('title', NULL);
        $this->appendContent($this->title);
    }
    function setTitleText($text) {
        $this->title->setContent($text);       
    }
    function addLink($href) {
        $this->appendContent(new VLink($href));
    }

    function addScript($src) {
        $this->appendContent(new VScript($src));
    }

}
