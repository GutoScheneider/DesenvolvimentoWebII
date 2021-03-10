<?php
require_once 'interface_tag.php';
/**
 * Classe para o elemento Div.
 */
class Div implements InterfaceTag {
    
    private $div;
    private $arrayStyle = [];
    
    private function getTag() {
        return "<div style='%style' > %conteudo </div>";
    }
    
    public function getDiv() {
        $sStyle = '';
        if(count($this->getArrayStyle())) {
            foreach($this->getArrayStyle() as $oEstilo) {
                $sStyle .= "{$oEstilo['atributo']}: {$oEstilo['valor']};";
            }
            
            $this->div = str_replace('%style', $sStyle, $this->div);
        }
        
        return $this->div;
    }
    
    private function getArrayStyle() {
        return $this->arrayStyle;
    }
    
    public function setConteudoDiv($sConteudo) {
        $this->setDiv(str_replace('%conteudo', implode('', $sConteudo), $this->getDiv()));
    }

    public function setDiv($div) {
        $this->div = $div;
    }
    
    /**
     * {@inheritdoc}
     */
    public function setStyle($atributo, $valor) {
        $this->arrayStyle[] = ['atributo' => $atributo, 'valor' => $valor];
    }
    
    public function __construct() {
        $this->setDiv($this->getTag());
    }
    
    public function __toString() {
        return $this->getDiv();
    }
    
}