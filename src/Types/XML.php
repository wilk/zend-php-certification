<?php

// stylesheet for XML Doc
$xslDoc = new DOMDocument();
$xslDoc->load("style.xsl");

// Document to parse
$xmlDoc = new DOMDocument();
$xmlDoc->load("document.xml");

// processor to transform XML into another XML applying the XSL stylesheet
$xslt = new XSLTProcessor();
$xslt->importStylesheet($xslDoc);
echo $xslt->transformToXml($xmlDoc).PHP_EOL;
