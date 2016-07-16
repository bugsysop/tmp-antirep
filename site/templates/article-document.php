<?php snippet('site-header') ?>
<div class="site-wrapper"><!-- site-wrapper -->

  <!-- header -->
  <header class="no-cover main-header">
    <nav class="main-nav overlay clearfix">
    <a class="blog-logo" href="<?php echo $site->url() ?>"><?php echo $site->title() ?></a>
    <a class="menu-button icon-menu" href="#"></a>
    </nav>
  </header>

    <main  id="content" class="content" role="main">
    <!-- content : begin -->

<!-- <?php snippet('page-breadcrumb') ?> -->

    <article classe="article">

        <header class="post-header">
          <h1 class="post post-title"><?php echo $page->title()->html() ?></h1>
          <section class="intro">
          <?php echo $page->intro()->kirbytext() ?>
          </section>
        </header>

        <div  class="post">
        <section class="post-content">
        <?php echo $page->text()->kirbytext() ?>
        <small><?php echo $page->asside()->kirbytext() ?></small>
        </section>
        <div>

        <footer class="post-footer">
        <?php if ($page->source()->isNotEmpty()): ?>
          <span class="post-source">
          <a href="<?php echo $page->link() ?>"><?php echo $page->source() ?></a></span>
        <?php endif ?>
          <time class="post-date" datetime="<?php echo $page->date('c') ?>">
          <?php echo $page->date('d-m-Y') ?></time>
        </footer>

    </article>


<!-- content: end -->
</main>

</div><!-- site-wrapper -->
<?php snippet('site-footer') ?>
