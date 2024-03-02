<!DOCTYPE html>
<html lang="<?= CONF_SITE_LANG ?>" itemscope itemtype="<?= CONF_SITE_SCHEMA; ?>" prefix="og: <?= CONF_SITE_SCHEMA_OPEN_GRAPH; ?>">
<head>
    <meta charset="<?= CONF_SITE_CHARSET ?>">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <title><?= CONF_SITE_NAME ?> | <?= CONF_SITE_DESC ?></title>

    <link rel="icon" type="image/png" href="<?= theme("/assets/images/favicon.png") ?>"/>
    <link rel="stylesheet" href="<?= theme("/assets/css/styles.css") ?>"/>
</head>
<body>

<!-- HEADER -->

<?= $this->insert('parts/header')?>
<!-- HEADER -->

<!-- MAIN -->
<main class="main_content">
      <?= $this->section('content')?>
</main>
<!-- MAIN -->

<!-- FOOTER -->
<?= $this->insert('parts/footer')?>
<!-- FOOTER -->

<script src="<?= theme("/assets/js/scripts.min.js") ?>"></script>
<script src="<?= theme("/assets/js/main.js") ?>"></script>


</body>
</html>