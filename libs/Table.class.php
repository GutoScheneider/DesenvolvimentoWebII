<?php

class Table{
    private $aListElement = array();

   public function addElements($sElement){
        $this->aListElement[] = $sElement;
   }

   public function __toString(){
       $sTable = "<table>\n";
       foreach ($this->aListElement as $sItemListElement){
           $sTable .= $sItemListElement;
       }
       $sTable .="</table>\n";
       return $sTable;
   }



}