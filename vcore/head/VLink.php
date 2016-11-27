<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH.'libraries/vcore/core/'.'VCoreTag.php';
/**
 * Classe para renderizar "link"
 * @author Leandro Soares  <leandrogamedesigner@gmail.com>
 * @package vcore
 * @subpackage head
 */
class VLink extends VCoreTag {
    private $href;

   /**
    * 
    * @param type $href
    */
    public function __construct($href="") {
        
        $this->href=$href;
        parent::__construct('link');
        $this->attr("rel","stylesheet");
        return $this;
    }
    
    function getHref() {
        return $this->href;
    }

    function setHref($href) {
        $this->href = $href;
    }

    public function getHTML() {
        $this->attr("href", $this->getHref());
        return parent::getHTML();
    }
}
