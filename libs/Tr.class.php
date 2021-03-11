<?php

class Tr{
    private $aListElementTr = array();

    public function addElementTr($sElementTr){
        $this->aListElementTr[] = $sElementTr;
    }
    public function __toString(){
        $sTr = "<tr>\n";
        foreach ($this->aListElementTr as $sItemListElement) {
            $sHead .= $sItemListElement;
        }
        $sTr .= "</tr>\n";
        return $sTr;
    }

}