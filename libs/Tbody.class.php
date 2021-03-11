<?php

class Tbody{
     private $aListElementTbody = array();

     public function addElementTBody($sElement){
         $this->aListElementTbody[] = $sElement;
     }

     public function __toString(){
         $sTbody = "<tbody>\n";
         foreach ($this->aListElementTbody as $sItemTbody){
             $sTbody .= $sItemTbody;
         }
         $sTbody .= "</tbody>\n";
         return $sTbody;
     }


}