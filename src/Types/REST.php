<?php
// REpresentational State Transfer

// every HTTP request is stateless (high reliability)
// the client keeps the application state
// the server keeps the resource state
// this allows to scale horizontally

// HTTP Verbs
// GET: get a single or a collection of resources
// POST: create a new resource
// PUT: update entirely an existing resource
// PATCH: update partially an existing resource
// DELETE: remove an existing resource

// the client must specify what kind of resource is expecting back through the accept header
// the server must specify the type of resource through the content-type header