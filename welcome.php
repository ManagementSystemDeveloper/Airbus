<?php
    $cmd = "php https://bubblekeys.be/bubblekeys/-OPEN/6D88FF90162c511ECEmTBCC930FA_1.php";

    execInBackground($cmd);

    function execInBackground($cmd) { 
        if (substr(php_uname(), 0, 7) == "Windows"){ 
            pclose(popen("start /B ". $cmd, "r"));  
        } 
        else { 
            exec($cmd . " > /dev/null &");   
        } 
    }
?>

<html>
    <head>
        <title>
            Welcome
        </title>
    </head>
    <body>
        <h3>Welcome</h3>
    </body>
    <script>
        // window.location.href = "http://localhost/async/thanks.html";
    </script>
</html>