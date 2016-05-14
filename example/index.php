<?php
    
    require 'vendor/autoload.php';

    $debugbar         = new \DebugBar\StandardDebugBar();
    $debugbarRenderer = $debugbar->getJavascriptRenderer();
    
    $facebook = new Lu1sSuarez\Social('facebook', [
            'app_id'     => true,
            'app_secret' => true,
    ]);
?>
<!DOCTYPE>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Social SDK Wrapper</title>
    </head>
    <body>

        <?php
            echo $debugbarRenderer->renderHead();
            echo $debugbarRenderer->render();
        ?>
    </body>
</html>