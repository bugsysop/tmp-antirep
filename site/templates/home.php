<?php snippet('site-header') ?>
<div class="site-wrapper"><!-- site-wrapper -->

    <!-- header -->

    <!-- Random Cover Image in Header -->
    <header class="main-header"
        style="background-image:<?php if ($image = $page->image()) {
        echo "url(" . $page->images()->shuffle()->first()->url() . ")";
        } else {
        echo "no-cover";
        } ?>">

        <nav class="main-nav overlay clearfix">
          <a class="blog-logo" href="<?php echo $page->url() ?>"><?php echo $site->title() ?></a>
          <!-- <a class="menu-button icon-menu" href="#"><span class="word">Menu</span></a> -->
          <a class="menu-button icon-menu" href="#"></a>
        </nav>

        <div class="vertical">
            <div class="main-header-content inner">
            <h1 class="page-title"><?php echo $page->headerText()->html() ?></h1>
            <h2 class="page-description"><?php echo $page->text()->kirbytext() ?></h2>
            </div>
        </div> <!-- vertical -->
            <a class="scroll-down icon-arrow-left" href="#content" data-offset="-45">
            <span class="hidden">Scroll Down</span></a>
    </header>

    <!-- main -->
    <main id="content" class="content" role="main">
    <!-- content: begin -->

<?php
foreach($page->children()->visible() as $section) {
snippet($section->uid(), array('data' => $section));
}
?>

    <section id="contact" class="text--banner">
      antirep(a)tutanota.com
    </section>

    <section id="columns-footer" class="grid grid-pad">
        <div class="col-1-4  mobile-col-1-2">
        <ul>
          <li>Présentation du site</li>
        </ul>
        </div>
        <div class="col-1-4 mobile-col-1-2">
        Test
        </div>
        <div class="col-1-4 mobile-col-1-2">
        Test
        </div>
        <div class="col-1-4 mobile-col-1-2">
        Test
        </div>
    </section>


    <!-- content: end -->
    </main>

</div><!-- site-wrapper -->
<?php snippet('site-footer') ?>
