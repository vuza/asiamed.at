<?php include 'header.php'; ?>

<?php
parse_str(parse_url($_SERVER[REQUEST_URI])['query'], $query);
$name = $query['course'];

if(!$name) {
    echo "<script>window.location.replace('/');</script>";
}

$config = json_decode(file_get_contents('./kurse/' . $name . '/config.json'));
$content = file_get_contents('./kurse/' . $name . '/detail.html');
?>

<section class="contentSection">
    <div class="contentWrapper">
        <button class="btn btn-info" onclick="window.history.back()"><i class="fa fa-backward"></i> Zur&uuml;ck</button>
    </div>
</section>

<section class="contentSection">
    <div class="contentWrapper">
        <h2><?php echo $config->name; ?></h2>
        <?php echo $content; ?>
    </div>
</section>

<?php include 'footer.php'; ?>