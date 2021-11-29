<?php
setcookie("FavItem", "Books", time() + 86400, "/");
echo "The cookie is set successfully!<br>";

echo "The cookie for the key FavItem is " . $_COOKIE['FavItem'] . "<br>";
?>