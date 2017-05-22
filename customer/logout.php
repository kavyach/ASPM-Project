<?php
    include "conn.php";
    session_destroy();
    echo"<script>location='index.php?login=no'</script>";
?>