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