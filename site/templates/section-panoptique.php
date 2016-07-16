<?php snippet('site-header') ?>
<div class="site-wrapper"><!-- site-wrapper -->

    <!-- header -->
    <header class="main-header post-head"
        style="background-image:<?php if ($image = $page->image()) {
        echo "url(" . $image->url() . ")";
        } else {
        echo "no-cover";
        } ?>">
        <nav class="main-nav overlay clearfix">
          <a class="blog-logo" href="<?php echo $site->url() ?>"><?php echo $site->title() ?></a>
          <a class="menu-button icon-menu" href="#"></a>
        </nav>
    </header>

    <main  id="content" class="content" role="main">
    <!-- content : begin -->

    <header class="section-header">
      <h1><?php echo $page->title()->html() ?></h1>
      <section class="intro">
      <?php echo $page->intro()->kirbytext() ?>
    </header>

    <?php $articles = $page->children()->visible() ?>
    <?php foreach ($articles as $article): ?>

        <article class="post">
            <header class="post-header">
                <h2 class="post-title">
                <a href="<?php echo $article->url(); ?>"><?php echo $article->title()->html() ?></a>
                </h2>
            </header>
            <section class="post-excerpt" align="center">
                <a  href="<?php echo $article->url() ?>">&#8594;</a>
            </section>
            <footer class="post-meta">

            </footer>
        </article>

    <?php endforeach ?>


    <!-- content: end -->
    </main>

</div><!-- site-wrapper -->
<?php snippet('site-footer') ?>
