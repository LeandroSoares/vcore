<?php
//<script src="" charset="utf-8"></script>

defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH.'libraries/vcore/core/'.'VCoreTagContainer.php';
/**
 * Classe para renderizar "script"
 * @author Leandro Soares  <leandrogamedesigner@gmail.com>
 * @package vcore
 * @subpackage head
 */
class VScript extends VCoreTagContainer {

    private $src;

    public function __construct($src="", $content="") {
        parent::__construct('script', $content);
        
        $this->attr("charset","utf-8");
        if (isset($src)) {
            $this->setSrc($src);
        }

        return $this;
    }
    
    public function setSrc($src) {
        $this->src = $src;
        $this->attr('src', $src);
    }

}

