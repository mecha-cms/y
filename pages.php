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
        <h2>
          <?= $page->title; ?>
        </h2>
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
        <nav>
          <?= $pager; ?>
        </nav>
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