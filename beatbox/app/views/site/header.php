<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/styles_nav_footer.css">
    <link rel="stylesheet" href="../public/css/styles.css">

    <?php foreach($css_pages as $css_page) : ?>
    <link rel="stylesheet" href= <?= $css_page ?> >
    <?php endforeach; ?>

    <title><?= $title ?></title>

</head>