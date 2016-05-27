<?php
// PHP XML parser uses LibXML and Expat libraries and they're enabled by default

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

// XML tree parsers: DOM and SimpleXML
// XML Event-based parsers are faster and consume less than XML tree parser: XMLReader, XML Expat Parser

// XML Constants (https://secure.php.net/manual/en/xml.constants.php)
/*
Prefix      Code                Description
XML_ERROR_
            SYNTAX
            INVALID TOKEN
            UNKNOWN_ENCODING
XML_OPTION_
            CASE_FOLDING        Enabled by default and sets element names to uppercase.
            SKIP_WHITE          Skips excess whitespace in the source document
*/

// XML supported encoding:
// UTF-8
// ISO-8859-1 (unicode)
// US-ASCII