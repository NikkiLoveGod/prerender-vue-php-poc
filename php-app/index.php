<?php
ob_start();
require_once "./vue-dist/index.html";
$index_html = ob_get_clean();
$split_html = explode('<div id=app></div>', $index_html);
$top_html_part = $split_html[0];
$bottom_html_part = $split_html[1];
?>

<?= $top_html_part ?>

<style>
  * {
    position: relative;
  }
  html {
    width: 100%;
    height: 100%;
  }
  body {
    width: 100%;
    min-height: 100%;
    margin: 0;
    padding-bottom: 100px;
    font-family: Avenir, Helvetica, Arial, sans-serif;
    box-sizing: border-box;
  }

  header {
    width: 100%;
    height: 50px;
    background-color: #42b983;
    color: white;
    text-align: center;
    line-height: 50px;
  }

  footer {
    position: absolute;
    height: 100px;
    background-color: #2c3e50;
    bottom: 0;
    left: 0;
    right: 0;
    color: white;
    font-size: 20px;
    text-align: center;
    line-height: 100px;
  }
</style>

<header>
  PHP-Header
</header>
<section>
  <div id=app></div>
</section>
<footer>
  PHP-footer
</footer>

<?= $bottom_html_part ?>
