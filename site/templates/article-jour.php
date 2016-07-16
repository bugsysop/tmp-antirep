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

<?php snippet('page-breadcrumb') ?>

    <article classe="article">

      <header class="post-header">
        <h1 class="post-title"><?php echo $page->subtitle()->html() ?></h1>
        <section class="intro">
        <?php echo $page->intro()->kirbytext() ?>
        </section>
      </header>

      <div  class="post">
      <section class="post-content">
      <?php echo $page->text()->kirbytext() ?>
      </section>
      <div>

      <footer class="post-footer">
      <time class="post-date last-modification" datetime="<?php echo $page->updated('c'); ?>">Dernière modification: <?php echo $page->updated('d-m-Y'); ?></time>
      </footer>


    </article>

<?php snippet('page-prevnext-jour') ?>

    <!-- content: end -->
    </main>

</div><!-- site-wrapper -->
<?php snippet('site-footer') ?>
