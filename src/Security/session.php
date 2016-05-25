<?php
// starts a new session and generate a new id
session_start();
// use session cookies only over an HTTPS connection
ini_set('session.cookie_secure', 'On');
// avoid manipulating cookies from other ways unless HTTP (so the JS cannot do anything)
ini_set('session.cookie_httponly', true);
// get the current session id
session_id();
// generate a new id (this is done after a new authentication of the same user)
session_regenerate_id();
// use ids generated from PHP and prevent using user ids supplied
ini_set('session.use_strict_mode', 'On');
// force PHP using session id only from cookies, not from url
ini_set('session.use_cookies', 'On');
ini_set('session.use_only_cookies', 'On');
// destroy current session
session_destroy();