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

    <?php if (param('tag')): // show tag results ?>
        <?php $tag = urldecode(param('tag'));
        $articles = $pages->find($page)
            ->children()
            ->visible()
            ->filterBy('tags', $tag, ',')
            ->flip()
            ->paginate(10);
        ?>
        <article class="post">
            <h3><a href="<?php echo url('tag:' . urlencode($tag)) ?>"><?php echo $tag; ?></a>
            | <a href="<?php echo $page->url() ?>">Show all posts</a>
            </h3>
        </article>
    <?php else: ?>
        <?php $articles = $page->children()->visible() ?>
    <?php endif; ?>
    <?php foreach ($articles as $article): ?>

        <article class="post">
            <header class="post-header">
                <h2 class="post-title">
                <a href="<?php echo $article->url(); ?>"></span>&nbsp;<?php echo $article->subtitle()->html() ?></a>
                </h2>
            </header>
            <section class="post-excerpt">
                <?php echo $article->intro() ?>
                <a class="read-more" href="<?php echo $article->url() ?>">&nbsp;Lire la suite&nbsp;&#8594;</a>
            </section>
            <footer class="post-meta">

              <?php if ($article->tags() != ''): ?>
              <span class="post-tags">
                  <?php foreach (str::split($article->tags()) as $tag): ?>
                  <a href="<?php echo url($page . '/tag:' . urlencode($tag)) ?>">#<?php echo $tag; ?></a>
                  <?php endforeach ?>
              </span>
              <?php endif ?>

            </footer>
        </article>

    <?php endforeach ?>

<?php snippet('page-prevnext') ?>

    <!-- content: end -->
    </main>

</div><!-- site-wrapper -->
<?php snippet('site-footer') ?>
