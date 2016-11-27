<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'IVCore.php';

/**
 * Tem a responsabilidade de gerenciar a marcacao de html
 * @author Leandro Soares  <leandrogamedesigner@gmail.com>
 * @package vcore
 * @subpackage core
 */
class VCoreTag implements IVCore {

    private $tag;
    private $classList;
    private $attributeList;
    private $id;

    /**
     * @param String $tag tipo de marcação html desejada
     */
    public function __construct($tag) {

        $this->tag = $tag;
        $this->classList = array();
        $this->attributeList = array();
        $this->id = "";
    }

    /**
     * @return string
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param string $id
     * @return $this
     */
    public function setId($id) {
        $this->id = $id;
        $this->attr('id', $id);
        return $this;
    }

    /**
     * @param string $class
     * @return $this
     */
    public function addClass($class) {
        $this->classList[] = $class;
        return $this;
    }
    
    /**
     * @param array $classList
     * @return $this
     */
    public function addClassList($classList) {
        foreach ($classList as $class) {
            $this->addClass($class);
        }
        return $this;
    }

    /**
     * 
     * @param string $attr
     * @param string $value
     * @return $this
     */
    public function attr($attr, $value) {
        $this->attributeList[$attr] = $value;
        return $this;
    }

    /**
     * @param array $attrList
     * @return $this
     */
    public function attrList($attrList) {
        foreach ($attrList as $key => $value) {
            $this->attr($key, $value);
        }
        return $this;
    }

    /**
     * Retorna as classes para string html
     *
     * @return string
     */
    protected function getClasses() {
        $clist = '';
        $length = count($this->classList);

        if ($length > 0) {
            $clist = 'class="' . implode(" ", $this->classList) . ' "';
        }
        return $clist;
    }

    /**
     * Retorna as classes para string html
     *
     * @return string
     */
    protected function getAttributes() {
        $list = '';
        foreach ($this->attributeList as $key => $value) {
            $list .= "$key=\"$value\"";
        }
        return $list;
    }

    /**
     * Retorna string de html
     *
     * @return string
     */
    public function getHTML() {
        return "<{$this->tag} {$this->getClasses()} {$this->getAttributes()} >";
    }

    protected function getEndTagHTML() {
        return "</{$this->tag}>";
    }

    /**
     * Renderiza o html gerado por essa classe na tela
     */
    public function render() {
        echo $this->getHTML();
    }

}
