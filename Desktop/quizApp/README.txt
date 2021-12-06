BootstrapTemplate

Class that extends the "Template" class to add Bootstrap.
One deviation from the Bootstrap documentation is that 
jQuery is added in the <head> section rather than at 
the end of the <body> section.


Structure:

Place CSS and JS files in the following structure:

site/
  css/
    shared/
      bstemplate/
  js
    shared/
      bstemplate/

This class expects there to be a directory called
Template at the same level that contains Template.php

The expected hierarchy between this and the main Template class is:

classes/
  shared/
    BootstrapTemplate/
    Template/

Overall then:

public_html/
  site/
    css/
      shared/
        bstemplate/
    js/
      shared/
        bstemplate/

  classes/
    shared/
      BootstrapTemplate/
      Template



Usage:
<?php

require_once("classes/BootstrapTemplate/BootstrapTemplate.php");

$p = new BootstrapTemplate("Test Page");

$p->finalizeTopSection();
$p->finalizeBottomSection();

print $p->getTopSection();
print "\t<div class=\"container\">" . PHP_EOL;
print "\t\t<div>This is where content goes</div>" . PHP_EOL;
print "\t</div>" . PHP_EOL;
print $p->getBottomSection();


