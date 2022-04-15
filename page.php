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
    </main>
    <footer>
      <?php if ($links->count): ?>
        <h3>
          <?= i('Links'); ?>
        </h3>
        <ul>
          <?php foreach ($links as $link): ?>
            <li>
              <a href="<?= $link->link ?: $link->url; ?>">
                <?= $link->title; ?>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>
      <p>
        &#x00A9; <?= $date->year; ?> <a href="<?= $url; ?>">
          <?= $site->title; ?>
        </a>
      </p>
    </footer>
  </body>
</html>