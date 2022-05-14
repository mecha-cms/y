<?= self::enter(); ?>
<article>
  <?php if ($page->exist): ?>
    <h2>
      <?= $page->title; ?>
    </h2>
    <?php if ($pages->count): ?>
      <?php foreach ($pages as $page): ?>
        <article>
          <h3>
            <a href="<?= $page->link ?: $page->url; ?>">
              <?= $page->title; ?>
            </a>
          </h3>
          <p>
            <?= $page->description; ?>
          </p>
        </article>
      <?php endforeach; ?>
    <?php else: ?>
      <?php if ($site->has('part')): ?>
        <p role="status">
          <?= i('No more %s to show.', 'pages'); ?>
        </p>
      <?php else: ?>
        <p role="status">
          <?= i('No %s yet.', 'pages'); ?>
        </p>
      <?php endif; ?>
    <?php endif; ?>
    <nav>
      <?= $pager; ?>
    </nav>
  <?php else: ?>
    <h2>
      <?= i('Error'); ?>
    </h2>
    <p>
      <?= i('%s does not exist.', 'Page'); ?>
    </p>
  <?php endif; ?>
</article>
<?= self::exit(); ?>