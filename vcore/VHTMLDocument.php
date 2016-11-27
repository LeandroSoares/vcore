<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'libraries/vcore/core/' . 'VCoreTagContainer.php';
require_once APPPATH . 'libraries/vcore/head/' . 'VHead.php';
require_once APPPATH . 'libraries/vcore/body/' . 'VBody.php';
require_once APPPATH . 'libraries/vcore/bootstrap/' . 'VBNav.php';
require_once APPPATH . 'libraries/vcore/bootstrap/' . 'VBForm.php';

/**
 * Classe para renderizar um documento html
 * @author Leandro Soares  <leandrogamedesigner@gmail.com>
 * @package vcore
 */
class VHTMLDocument extends VCoreTagContainer {

    /**
     * Variável pública de acesso ao head do html.
     * @var VHead
     */
    public $head;

    /**
     * Variável pública de acesso ao body do html.
     * @var VBody
     */
    public $body;
    /**
     * Construtor html.
     * Instância o head e body e constrói a tag html.
     */
    function __construct() {
        parent::__construct('html', "");
        $this->head = new VHead();
        $this->body = new VBody();
        $this->appendContent($this->head);
        $this->appendContent($this->body);
    }

    /**
     * Atribui valor ao atributo "lang" do html.
     * @param String $lang
     */
    function setLang($lang) {
        $this->attr('lang', $lang);
    }

    /**
     * Atalho para adicionar conteúdo ao body.
     * @param String|IVCore $content
     */
    function appendToBody($content) {
        $this->body->appendContent($content);
    }

    /**
     * Atalho para adicionar conteúdo ao head.
     * @param String|IVCore $content
     */
    function appendToHead($content) {
        $this->head->appendContent($content);
    }

    /**
     * Renderiza o html gerado adicionando o "!DOCTYPE html", do html5.
     *
     * @return void
     */
    public function render() {
        echo "<!DOCTYPE html>\n" . $this->getHTML();
    }

}
