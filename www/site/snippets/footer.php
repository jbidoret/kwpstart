    <footer class="footer">
        <?php if ($about = page('info')): ?>
        <div>
            <nav class="legal">
                <ul>
                    <li><a href="<?= page("cg")->url() ?>"><?= page("cg")->title() ?></a></li>
                    <li><a href="<?= $about->url() ?>"><?= t("crédits") ?></a></li>
                </ul>
            </nav>

            <nav class="social">
                <ul>
                    <li><a href="<?= $about->url() ?>"><?= t("contacts") ?></a></li>
                    <?php foreach ($about->social()->toStructure() as $social): ?>
                        <li><a href="<?= $social->url() ?>"><?= $social->platform() ?></a></li>
                    <?php endforeach ?>
                </ul>
            </nav>
        </div>
        <?php endif ?>
    </footer>

    <!-- scripts -->
    <?php echo js('assets/builds/bundle.js') ?>

</body>
</html>
