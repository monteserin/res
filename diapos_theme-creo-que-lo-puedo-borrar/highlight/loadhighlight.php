<?php
global $is_remote;
$path = '/usr/home/pablomonteserin/www/res/';
$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

$url_base = "https://pablomonteserin.com/res/diapos_theme/highlight/";
$hljscssdefault = $url_base . 'styles-borrame/default.css';
$hljscss = $url_base . 'styles-borrame/zenburn.css';
$hljsjs = $url_base . 'highlight.pack-old.js';
$hljsjsexecute = $url_base . '/highlight_execute.js';

if (strpos($url, 'code-pen') === false) {
    add_action('wp_head', function () {
        global $hljscssdefault;
        wp_enqueue_style('highlightCSS1', $hljscssdefault);

        // include $path . "diapos_theme/css/highlightcss.php";
    });

    add_action('wp_footer', function () {
        global $hljscss, $hljsjs, $hljsjsexecute;

        // wp_enqueue_style('highlightCSS', $url_base . 'css/zenburn.css');
        wp_enqueue_style('highlightCSS2', $hljscss);

        // wp_enqueue_script('mihighlight',  $url_base . 'highlight.pack.js');

        wp_enqueue_script('mihighlight', $hljsjs);

        wp_enqueue_script('activate_highlight', $hljsjsexecute);
    });
} else {

    echo '
       <link rel="stylesheet" href="../highlight/codigo-especifico-para-diapos-theme.css">
        <link rel="stylesheet" href="' . $hljscssdefault . '">
    <link rel="stylesheet" href="' . $hljscss . '">
  <script src="' . $hljsjs . '"></script>
    <script src="' . $hljsjsexecute . '"></script>
    ';
}
