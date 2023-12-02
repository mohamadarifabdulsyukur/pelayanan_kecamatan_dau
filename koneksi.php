
<html>
    <head>
        <title>Koneksi Database MySQL</title>
    </head>
    <body>
    <?php
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "db_pelayananpublik";
        $koneksi = mysqli_connect($host,$username,$password,$database);
        if ($koneksi){
            echo "";
        }else {
            echo "Server not connected";
        }
        ?>
    </body>
</html>
