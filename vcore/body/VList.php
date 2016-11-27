<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH.'libraries/vcore/core/'.'VCoreTagContainer.php';
require_once APPPATH . 'libraries/vcore/body/' . 'VLi.php';
/**
 * Cria uma lista com marcação html "ul" ou "ol"
 * @author Leandro Soares  <leandrogamedesigner@gmail.com>
 * @package vcore
 * @subpackage body
 */
class VList extends VCoreTagContainer {

    /**
     * __construct
     *
     * @param  boolean $ordenada - default:false. 
     *                             Define se é uma lista ordenada ou não. default:false
     * @return VList
     */
    function __construct($ordenada = false) {
        $this->itens = array();
        $listMarkup = $ordenada ? "ol" : "ul";
        parent::__construct($listMarkup, '');
        return $this;
    }

    /**
     * Adiciona automaticamente o conteúdo a um li e insere na lista
     *
     * @param  string|IVCore $content description
     * @return VList       description
     */
    public function addItem($content) {
        $liItem = new VLi($content);
        $this->appendContent($liItem);
        return $this;
    }
    /**
     * Adiciona automaticamente o conteúdo a "li"s e insere na lista, a partir de um array
     * @param Array $array
     */
    function addItensByArray($array) {
        foreach ($array as $key => $value) {
            $this->addItem($value);
        }
    }

}
