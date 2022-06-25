<?php

require_once __DIR__ . '/../bootstrap/app.php';

$index = __DIR__ . '/../templates/index.php';

if (production()) {
  $htmlMin = new \voku\helper\HtmlMin();
  $htmlMin->doRemoveSpacesBetweenTags();
  $htmlMin->doOptimizeViaHtmlDomParser();
  $html = get_include_contents($index);
  echo $htmlMin->minify($html);
} else {
  ob_start();
  include $index;
  echo ob_get_clean();
}
