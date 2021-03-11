<?php
require('autoload.php');


$metaCharset = new Meta("UTF-8");
$metaHttEquiv = new Meta(null, null, "X-UA-Compatible", "IE=edge");
$metaName = new Meta(null, "viewport", null, "width=device-width, initial-scale=1.0");

$title = new Title("Minha Página");

$head = new Head();
$head->addElement($metaCharset);
$head->addElement($metaHttEquiv);
$head->addElement($metaName);
$head->addElement($title);


$table = new Table();
$th    = new Th();
$tbody = new Tbody();
$tr = new Tr("tr");
$td = new Td("td");
$table->addElements($th,$tbody,$tr,$td);
$th->addElementTh($tr,$td);
$tbody->addElementTBody($tr, $td);




$body = new Body("body");
$body->addElementBody($table);


$html = new Html("pt-br", $head, $body);


echo $html;