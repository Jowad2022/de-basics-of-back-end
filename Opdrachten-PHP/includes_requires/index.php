<?php require 'content.php';?>

<html>
<body>
<div class="home">

</div>
<h1>Welcome to my home page!</h1>
<div>
    <ul>
        <?php
        for ($i = 0; $i < 10; $i++) {
            echo "<li>$full_name</li>";
        }
        ?>
    </ul>
</div>
</body>
</html>