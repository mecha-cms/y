<?= self::enter(); ?>
<article>
  <?php if ($page->exist): ?>
    <h2>
      <?= $page->title; ?>
    </h2>
    <?= $page->content; ?>
  <?php else: ?>
    <h2>
      <?= i('Error'); ?>
    </h2>
    <p>
      <?= i('%s does not exist.', 'Page'); ?>
    </p>
  <?php endif; ?>
</article>
<nav>
  <?= $pager; ?>
</nav>
<?= self::exit(); ?>