<?php

// Your layout-specific PHP code goes here.

Asset::set('index.css', 20);
Asset::set('index.js', 20);

$GLOBALS['links'] = Pages::from(LOT . D . 'page')->sort([1, 'title']);