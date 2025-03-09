<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$url = $_GET['url'];
$queTiene = isset($_GET['queTiene']) ? $_GET['queTiene'] : '';
$url = str_contains($url, 'http') ? $url : '/res/' . $url;
$cssContents = "";
$jsContents = "";
$htmlContents = "";

$base_url = dirname(__DIR__, 3) . '/';
?>
<!DOCTYPE html>
<html>

<head>
  <title>Code Editor</title>
  <meta charset="UTF-8">
  <meta name="robots" content="noindex">
</head>

<body>
  <?php

  if (isset($queTiene) && $queTiene != '') {
  ?>
    <div id="btn_ver_codigo_Wrapper">
      <input type="button" value="Ver código" onclick="toggleCodigoVisible()" id="btn_ver_codigo">
    </div>
  <?php
  } ?>
  <div class="codigos" id="codigos">
    <?php
    if ($queTiene == 1 || $queTiene == 2 || $queTiene == 3 || $queTiene == 4) {
      ob_start();
      include $base_url . $url;
      $htmlContents = ob_get_contents();
      $htmlContents = htmlentities($htmlContents);
      ob_end_clean();
      echo ' <pre><code id="html" class="html" contenteditable="true">' . $htmlContents . '</code></pre>';
    }

    if ($queTiene == 2 || $queTiene == 3) {
      ob_start();
      $cssPath = $base_url . $url;
      $cssPath = substr($cssPath, 0, strrpos($cssPath, "/")) . "/style.css";
      include $cssPath;
      $cssContents = ob_get_contents();
      ob_end_clean();
      echo '<pre><code id="css" class="css" contenteditable="true">' . $cssContents . '</code></pre>';
    }

    if ($queTiene == 3 || $queTiene == 4 || $queTiene == 5) {
      $jsPath = $base_url . $url;
      ob_start();
      $jsPath = substr($jsPath, 0, strrpos($jsPath, "/")) . "/javascript.js";
      include $jsPath;
      $jsContents = ob_get_contents();
      //$jsContents = htmlentities($jsContents);
      ob_end_clean();
      echo '<pre><code id="js" class="js" contenteditable="true">' . $jsContents . '</code></pre>';
    }
    ?>
  </div>

  <div id="monteserin_iframe_wrapper">
    <iframe id="code" frameborder="0" src="https://pablomonteserin.com<?= $url ?>"></iframe>
  </div>
  <div id="code2"></div>

  <div id="consoleOutput" style="display:none; border: 1px solid #000; padding: 10px; margin-top: 10px;">
    <strong>Console Output:</strong>
  </div>
  <!-- <script src="js/js.js"></script> -->

  <script>
    const iframe = document.querySelector("iframe#code");

    function toggleCodigoVisible() {
      let codigos = document.getElementById("codigos");
      codigos.classList.toggle("visible");

      let btnVerCodigo = document.getElementById("btn_ver_codigo");

      if (codigos.classList.contains("visible")) {
        btnVerCodigo.value = "Ocultar código";
      } else {
        btnVerCodigo.value = "Ver código";
      }
    }
  </script>

  <?php
  include $base_url . "res/diapos_theme/highlight/loadhighlight.php";
  ?>
</body>

</html>