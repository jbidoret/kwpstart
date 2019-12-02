<!DOCTYPE html>
<html lang="<?php echo $kirby->language() ?? 'fr' ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="cleartype" content="on">

    <script>document.getElementsByTagName('html')[0].className = 'js'</script>

    <title><?= r($page !== $site->homePage(), $page->title()->html() . ' | ') . $site->title()->html() ?></title>

    <?php snippet("header-metas") ?>

    <?php if (isset($map) && $map ==true): ?>
        <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v1.3.1/mapbox-gl.css' rel='stylesheet' />
    <?php endif; ?>
    <link rel="alternate" type="application/rss+xml" title="<?= t('feed') ?>" href="<?= site()->url() ?>/feed"/>
    <?php echo liveCSS('assets/builds/bundle.css') ?>

</head>
<body
    data-login="<?php e($kirby->user(),'true', 'false') ?>"
    data-template="<?php echo $page->template() ?>"
    data-intended-template="<?php echo $page->intendedTemplate() ?>">


    <div class="page">

        <header class="header">
          <a class="logo" href="<?= $site->url() ?>"><span><?= $site->title() ?></span></a>
        </header>

        <aside class="aside">
            <div class="tada">&nbsp;</div>
            <div class="ornament"></div>
            <?= snippet("cart-button")?>
        </aside>

        <?= snippet("nav")?>
