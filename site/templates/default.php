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

      <div class="vertical"></div>
  </header>

    <main  id="content" class="content" role="main">
    <!-- content : begin -->

    <article classe="article">

        <header class="post-header">
          <h1 class="post-title"><?php echo $page->title()->html() ?></h1>
          <section class="intro">
          <?php echo $page->intro()->kirbytext() ?>
          </section>
        </header>

        <div  class="post">
        <section class="post-content">
        <?php echo $page->text()->kirbytext() ?>
        </section>
        <div>

  </article>


<!-- content: end -->
</main>

</div><!-- site-wrapper -->
<?php snippet('site-footer') ?>
