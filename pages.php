<!DOCTYPE html>
<html class>
  <head>
    <meta charset="utf-8">
    <title>
      <?= $t->reverse; ?>
    </title>
    <link href="<?= $url; ?>/favicon.ico" rel="icon">
    <link href="<?= $url->current(false, false); ?>" rel="canonical">
  </head>
  <body>
    <header>
      <h1>
        <?php if ($site->is('home')): ?>
          <?= $site->title; ?>
        <?php else: ?>
          <a href="<?= $url; ?>">
            <?= $site->title; ?>
          </a>
        <?php endif; ?>
      </h1>
      <p>
        <?= $site->description; ?>
      </p>
    </header>
    <main>
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
    </main>
    <footer>
      <p>
        &#x00A9; <?= $date->year; ?> <a href="<?= $url; ?>">
          <?= $site->title; ?>
        </a>
      </p>
    </footer>
  </body>
</html>