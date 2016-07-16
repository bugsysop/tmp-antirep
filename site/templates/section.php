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
            <h4><a href="<?php echo url('tag:' . urlencode($tag)) ?>"><?php echo $tag; ?></a>
            | <a href="<?php echo $page->url() ?>">Show all posts</a>
          </h4>
        </article>
    <?php else: ?>
        <?php $articles = $page->children()->visible()->paginate(10); ?>
    <?php endif; ?>
    <?php foreach ($articles as $article): ?>

        <article class="post">
            <header class="post-header">
                <h2 class="post-title">
                <a href="<?php echo $article->url(); ?>"><?php echo $article->title()->html() ?></a>
                </h2>
            </header>
            <section class="post-excerpt">
                <?php echo $article->intro()->kirbytext() ?>
                <a class="read-more" href="<?php echo $article->url() ?>">&#8594;&#8594;&#8594;</a>
            </section>
            <footer class="post-meta">

              <?php if ($article->source()->isNotEmpty()): ?>
              <span class="post-source"><?php echo $article->source(); ?>&nbsp;</span>
              <?php endif ?>
              <time class="post-date"
              datetime="<?php echo $article->date('c') ?>"><?php echo $article->date('d-m-Y'); ?> </time>

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

    <!-- navigation : previous/next -->
    <?php if ($articles = $page->children()->visible()->paginate(10)): // pagination ?>
        <?php if ($articles->pagination()->hasPrevPage()): ?>
        <nav class="pagination" role="navigation">
            <a class="newer-posts" href="<?php echo $articles->pagination()->prevPageURL() ?>">&lsaquo;&lsaquo;Articles plus récent</a>
            </nav>
        <?php endif ?>
        <?php if ($articles->pagination()->hasNextPage()): ?>
            <nav class="pagination" role="navigation">
            <a class="older-posts" href="<?php echo $articles->pagination()->nextPageURL() ?>">Articles plus anciens &rsaquo;&rsaquo;</a>
            </nav>
        <?php endif ?>
        </nav>
    <?php endif ?>


    <!-- content: end -->
    </main>

</div><!-- site-wrapper -->
<?php snippet('site-footer') ?>
