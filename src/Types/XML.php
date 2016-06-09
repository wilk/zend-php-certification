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

// XML Extension
$parser = xml_parser_create("UTF-8"); // create a new parser with UTF-8 encoding
$parserNS = xml_parser_create_ns("UTF-8", ":"); // create a new parser that supports XML namespaces
xml_parser_free($parserNS); // free an XML parser
xml_set_element_handler($parser, function ($xmlResource, $elementName, $attributes) {
    // start element handler
}, function ($xmlResource, $elementName) {
    // end element handler
});
xml_set_object($parser, $anObject); // allow to use the parser as an object and so to set the handlers as methods
xml_parse_into_struct($parser, $xmlStr, $valueArr, $indexArr); // parse an XML string into two parallel arrays (values and indexes))

// DOM
// requires libxml2 extension and expat library
$doc = new DOMDocument();
$doc->load("file.xml");
$doc->save("file2.xml"); // save a XML file
$str = $doc->saveXML(); // save a XML string
$html = $doc->saveHTML(); // save a HTML string
$doc->saveHTMLFile("file.html"); // save a HTML file
$xpath = new DOMXPath($doc);
$elements = $xpath->query("//*[@id]"); // get a list of documents with an id
foreach ($elements as $element) {
    echo $element->nodeName . PHP_EOL;

    $nodes = $element->childNodes;
    foreach ($nodes as $node) {
        echo $node->nodeValue . PHP_EOL;
    }
}

/*
Method          Description
createElement   Creates a node element that can be appended with the appendChild method of the node class
createElementNS As with createElement but supports documents with namespaces
saveXML         Dumps the XML tree back into a string
save            Dumps the XML tree back into a file
createTextNode  creates a new instance of class DOMText
*/

// DOM Nodes
// getting nodes methods that return a DOMNodeList that can be traversed over using foreach
/*$doc->getElementsById();
$doc->getElementsByTagName();
$doc->getElementsByTagNameNS();*/

/*
Method          Description
appendChild     Adds a new child node at the end of the children
insertBefore    Adds a new child before a reference node
parentNode      The parent of the node, or null if there is no parent
cloneNode       Clones a node and optionally all of its descendent nodes
setAttributeNS  Adds a new attribute
*/

// SimpleXML
// tree parser that loads the entire document into memory so is not suitable for large documents
// all objects are istances of SimpleXMLElement class and elements are properties of it, while attributes can be accessed as associative arrays
$xml = simple_xml_load_string($xmlString);
$xml = simple_xml_load_file($xmlFile);
$xml = new SimpleXMLElement($xmlString);
$children = $xml->children();

// SimpleXML methods
/**
Function                        Action
SimpleXMLElement::construct()   Creates a new SimpleXMLElement object
SimpleXMLElement::attributes()  Identifies an elements attributes
SimpleXMLElement::getName()     Retrieves an elements name
SimpleXMLElement::children()    Returns the children of the given node
SimpleXMLElement::count()       Returns how many children a node has
SimpleXMLElement::asXML()       Returns the element as a well-formed XML string
SimpleXMLElement::xpath()       Runs an xpath query on the current node
*/

// simple_xml_import_dom import DOM Node into SimpleXML
// dom_import_simplexml do the same for DOM