<?php

/*

type: layout
content_type: dynamic
name: Shop
is_shop: y
description: Showcase shop items in a sylish grid arrangement.
position: 4
*/

?>

<?php include template_dir() . "header.php"; ?>

<div class="edit" rel="content" field="content">
    <module type="layouts" template="skin-16"/>

</div>

<div class="container">
   <module type="shop" />
</div>




<div class="edit" rel="content" field="shop-after-content">
    <p class="element"></p>
</div>

<?php include template_dir() . "footer.php"; ?>
