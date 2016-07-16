<!-- footer -->
<footer class="site-footer clearfix">
    <section class="copyright"><a href="<?php $site->url() ?>"><?php echo $site->title() ?></a> – Copyleft © <?php echo date("Y", time()); ?></section>
    <section class="poweredby">Développé avec ♥ et <a href="http://getkirby.com/">Kirby</a></section>
</footer>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
<?php echo js('assets/js/jquery.fitvids.js') ?>
<?php echo js('assets/js/index.js') ?>
<?php echo js('assets/plugins/typography/js/dist/copyfix.min.js') ?>
<?php echo js('assets/plugins/oembed/js/oembed.js') ?>

</body>
</html>
