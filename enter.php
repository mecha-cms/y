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