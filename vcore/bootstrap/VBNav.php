<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'libraries/vcore/body/' . 'VNav.php';
require_once APPPATH . 'libraries/vcore/body/' . 'VDiv.php';
require_once APPPATH . 'libraries/vcore/body/' . 'VList.php';
require_once APPPATH . 'libraries/vcore/body/' . 'VA.php';

/**
 * Cria uma nav na estrutura do bootstrap
 * @author Leandro Soares  <leandrogamedesigner@gmail.com>
 * @package vcore
 * @subpackage bootstrap
 */
class VBNav extends VNav {

    private $container;
    private $navbarHeader;
    private $navbarCollapse;
    private $buttonList;
    private $brand;

    function __construct($content = "", $id = NULL) {
        parent::__construct($content, $id, "navbar navbar-inverse");

        $this->container = new VDiv();
        $this->container->addClass('container');

        $this->navbarHeader = new VDiv();
        $this->navbarHeader->addClass('navbar-header');
        $this->container->appendContent($this->navbarHeader);
        $buttoncontent = '<span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>';

        $btn = new VButton($buttoncontent, 'navbar-toggle collapsed', 'button');
        $btn->attr("data-toggle", "collapse");
        $btn->attr("data-target", "#navbar");
        $btn->attr("aria-expanded", "false");
        $btn->attr("aria-controls", "navbar");

        $this->navbarHeader->appendContent($btn);
        $this->brand = new VA("", "#", "navbar-brand");
        $this->navbarHeader->appendContent($this->brand);

        $this->navbarCollapse = new VDiv("", 'navbar', 'navbar-collapse collapse');
        $this->container->appendContent($this->navbarCollapse);

        $this->buttonList = new VList();
        $this->buttonList->addClass('nav navbar-nav');
        $this->navbarCollapse->appendContent($this->buttonList);
        $this->setContent($this->container);
    }

    public function addButton($href, $content, $class = null) {
        $this->buttonList->addItem(new VA($content, $href, $class));
    }

    public function addBrandText($text) {
        $this->brand->setContent($text);
    }

}
