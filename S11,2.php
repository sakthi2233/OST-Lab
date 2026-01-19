<?php
// include → warning if file missing
include 'head.php';


// require → fatal error if file missing
//require 'head.php';
echo "<p>Main file content</p>";

// include_once → included only once
include_once 'foot.php';

// require_once → included only once
//require_once 'foot.php';
?>
