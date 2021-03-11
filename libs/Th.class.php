<?php

class Th{
  private $aListElementThead = array();


  public function addElementTh($sElementThead){
      $this->aListElementThead[] = $sElementThead;
  }


  public function __toString(){
      $sTh = "<th>\n";
      foreach($this->aListElementThead as $sItemListElementThead){
          $sTh .= $sItemListElementThead;
      }
      $sTh .= "</th>\n";
      return $sTh;

  }


}