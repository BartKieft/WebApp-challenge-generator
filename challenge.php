<?php include "includes/head.php" ?>

<?php

$json_string = file_get_contents("includes/challenges.json");
$parsed_json = json_decode($json_string, true);

$one_item = $parsed_json[rand(0, count($parsed_json) - 1)];
?>
<div class="alert-wrapper d-flex justify-content-center align-items-center">
<p>All projects must be coded object oriënted!</p>
</div>
<div class="main-wrapper d-flex flex-column justify-content-center align-items-center">

<h1><?php echo $one_item['title']; ?></h1>
<p><?php echo $one_item['description']; ?></p>
<a class="btn btn-primary" href="index.php" role="button">Terug</a>
</div>
<?php include "includes/footer.php" ?>