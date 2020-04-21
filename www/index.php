<!DOCTYPE html>
<html>
    <head><title>Informazioni di navigazione</title></head>
    <body>
        <?php
            $myip = $_SERVER["REMOTE_ADDR"];
            $browser = $_SERVER["HTTP_USER_AGENT"];
            $myroot = __FILE__;
            $serverip = $_SERVER["SERVER_ADDR"];
            $servername = $_SERVER["SERVER_NAME"];
            echo "Il tuo attuale IP e': " . $myip . "<br>";
            echo "Il tuo browser e': " . $browser . "<br>";
            echo "Il percorso assoluto dalla radice è: " . $myroot . "<br>";
            echo "L'ip del server è: " . $serverip . "<br>";
            echo "Il nome del server è: " . $servername . "<br>";
        ?>
    </body>
</html>