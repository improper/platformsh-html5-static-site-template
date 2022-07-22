<?php
/** Let the web request know that there is nothing to be found here */
header("HTTP/1.0 404 Not Found");
?>
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <title>Welcome to Platform.sh</title>
    </head>
    <body style="background: #000000; display: flex; flex-direction: column; padding: 20% 20%; align-items: center; font-size: 5rem; font-family: system-ui; color: white; text-transform: uppercase; font-weight: 700;">
        <p>Uh-oh, couldn't answer this request.</p>
    </body>
</html>

