<?php
require_once "classes/Person.php";

/*
Class               Used to inspect
ReflectionClass     Classes
ReflectionObject    Objects
ReflectionMethod    Methods of objects
ReflectionFunction  Functions like PHP or user functions
ReflectionProperty  Properties
*/

$reflectedClass = new ReflectionClass("Person");
$methods = $reflectedClass->getMethods();
var_dump($methods);

$reflectMethod = new ReflectionMethod("Person", "getSkill");
var_dump($reflectMethod->isPublic());

$reflectMethod = new ReflectionProperty("Person", "skill");
var_dump($reflectMethod->isProtected());