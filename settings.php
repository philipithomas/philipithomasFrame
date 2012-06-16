<?php
/*
* Welcome to philipithomasFrame, by Philip I. Thomas, http://philipithomas.com 
* This file on Github: http://github.com/philipithomas/philipithomasFrame
* See the example file: http://philipithomasFrame.github.com
* This CSS/design is available free of charge under the Apache License version 2.0 - http://www.apache.org/licenses/LICENSE-2.0.html
* This settings file along with logo.png and favicon.ico contain example data that you can delete or modify without attribution.
*
*
* TO USE:
* Simply require header.inc at the top of very file
* and footer.inc at the end of every file. 
* If you use PHP sessions, this automatically starts 
* a session at every page within header.inc
*/

$title = "Philip I. Thomas";

// The navigation links in the sidebar. Wrap them with <li> tags to show up, and an <a href="/FILE.php"> tag to link to the correct page.
$nav = '
<li><a href="/">home</a></li>
  <li><a href="/about.php">about</a></li>
';

// For the Logo: overwrite logo.png

// For the Favicon: overwrite favicon.ico


// Tracking Code - put Google Analytics code here
$tracking= '

';


// HTML in the footer
$footer = '&copy;2011 <a href="http://sapientiamedia.com">Sapientia Media</a>';

?>