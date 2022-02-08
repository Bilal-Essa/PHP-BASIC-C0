<?php  
    $leeftijd = 14;
?>
<html>
<head>
</head>
<body>

    <div id="IsMeerderJarig">
        <?php
            if($leeftijd < 18 ){
                echo "<h6>u moet minimaal 18 zijn om de pagina te betreden.</h6>";
            }
        ?>
    </div>

</body>
</html>