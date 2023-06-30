<?php require 'variables.php';?>

<html>
<body>
<div class="home">

</div>
<h1>Welcome to my home page!</h1>
<div>
    <ul>
        <?php
        foreach ($fruit as $item) {
            echo "<li>$item</li>";
        }
        ?>
    </ul>
</div>
</body>
</html>