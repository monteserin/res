<?php

function printCode($w,$h){
echo '<!DOCTYPE html>
<html lang="en-us">

<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="robots" content="noindex, follow">
  <title>Unity WebGL Player | acierta-imagen</title>
</head>

<body style="text-align: center">
  <canvas id="unity-canvas" style="width: 900px; height: 600px; background: #231F20"></canvas>
  <script src="Build/game.loader.js"></script>
  <script>
    createUnityInstance(document.querySelector("#unity-canvas"), {
      dataUrl: "Build/game.data",
      frameworkUrl: "Build/game.framework.js",
      codeUrl: "Build/game.wasm",
      streamingAssetsUrl: "StreamingAssets",
      companyName: "DefaultCompany",
      productName: "acierta-imagen",
      productVersion: "0.1",
    });
  </script>

  <!-- Este es el código para copiar y pegar -->

  <script>
    document.querySelector("body").style = "margin:0; background-color:#231F20;";
    const calculateSceneDimensions = () => {
      const w = window.innerWidth;
      const h = window.innerHeight;
      const a = '.$w.';
      const b = '.$h.';
      const proportion = a / b;
      const proportion2 = w / h;

      const uc = document.querySelector("#unityContainer");
      let uc_w, uc_h;
      if (proportion > proportion2) {
        uc_w = w;
        uc_h = w * b / a;
      } else {

        uc_w = h * a / b; //resto 2 para corregir la altura
        uc_h = h;
      }
      document.querySelector("canvas").style = `width: ${uc_w}px; height: ${uc_h}px; display:block; margin:auto;`;
    }

    calculateSceneDimensions();
  </script>
  <!-- FIN-->

</body>

</html>';
}
