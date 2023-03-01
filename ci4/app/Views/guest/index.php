<h2><?= esc($title) ?></h2>

<?php if (! empty($guest) && is_array($guest)): ?>

    <?php foreach ($guest as $guest_item): ?>

        <h3><?= esc($guest_item['title']) ?></h3>

        <div class="main">
        <h3><?= esc($guest_item['name']) ?></h3>
            <p><?= esc($guest_item['email']) ?></p>
            <p><?= esc($guest_item['comment']) ?></p>
        </div>
        <p><a href="~esarong/lab3/ci4/public/guest/<?= esc($news_item['slug'], 'url') ?>">View article</a></p>

    <?php endforeach ?>

<?php else: ?>
    <h3>No guest</h3>
    <p>Unable to find any guest for you.</p>

<?php endif ?>
