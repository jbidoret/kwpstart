<?php snippet('header') ?>

<main class="home">

    <div class="splash homesplash"><div style="background-image:url(<?= $page->cover()->toFile()->url()?>)"><span></span></div></div>

    <?php snippet("sticky") ?>

    <?php if ($homecontent = $page->children()->listed()->first()): ?>
        <article class="homecontent">

            <p class="home-animated-p">
            <?php
                $splitlines = explode("\n", $homecontent->hometext()->text() );
                if ($homecontent->details()->isNotEmpty() ) {
                    $splitlines = array_pad(array_slice($splitlines, 0, 4) , 4, "&nbsp;");
                }
                foreach ($splitlines as $line) {
                    echo("<span>$line&nbsp;</span>");
                }?>

            <?php if ($homecontent->details()->isNotEmpty() ): ?>
                    <span><a href="<?= $homecontent->url() ?>">Plus de</a></span>
                    <span><a href="<?= $homecontent->url() ?>">détails</a></span>

            <?php endif; ?>
            </p>
        </article>
    <?php endif; ?>
</main>

<?php snippet('footer') ?>
