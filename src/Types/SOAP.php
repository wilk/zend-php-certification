<?php
// SOAP -> Simple Object Access Protocol
// version 1.0 and 1.1 released by industry while 1.2 is controlled by W3C as a standard
// now SOAP is just a plain name
// the SOAP extension uses the libxml so it must be enabled
// SOAP cache functions -> soap.wsdl_cache_* in php.ini

// is_soap_fault($soapClient) // returns true if a soap call has failed (client-side)
// use_soap_error_handler() // it is useful to catch errors and send them to the client, instead of using the PHP default error handler (when this is configured to false)

// RPC: remote procedure call
// it allows to execute functions on a server, pass it complex data and expect complex data as response

// WSDL (whizz-dill) : Web Service Description Language specifies the methods, the data types passed and expected within an XML structure
// SOAP communication is done with XML (WSDL)

// example with WSDL enabled
$client = new SoapClient("http://my.example.com/login?wsdl");
$params = ["username" => "username", "password" => "password"];
$client->login($params); // login call
$client->__soapCall("login", [$params]); // generic soap call

// example without WSDL
$client = new SoapClient(null, [
    "location" => "http://my.example.com",
    "uri" => "http://test-uri/",
    "style" => SOAP_DOCUMENT,
    "use" => SOAP_LITERAL,
    "trace" => true // enabled debugging the raw SOAP envelops headers and body
]);

// debugging methods
// SoapClient::__getLastRequestHeaders()
// SoapClient::__getLastRequest()

// server example
$server = new SoapServer(null, [
    "uri" => "http://localhost/test/"
]);
$server->setClass("MySoapServer"); // the name of the class being called from the client (the client will call the methods of this class directly)
$server->handle();