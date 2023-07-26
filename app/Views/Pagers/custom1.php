<?php $pager->setSurroundCount(2) ?>

<nav aria-label="Page navigation">
    <ul class="pagination flex gap-8">
    <?php if ($pager->hasPrevious()) : ?>
        <li>
            <a href="<?= $pager->getFirst() ?>" aria-label="<?= lang('Pager.first') ?>" class="p-4 text-white font-semibold rounded-md transition duration-150 bg-gold">
                <span aria-hidden="true"><?= lang('Pager.first') ?></span>
            </a>
        </li>
        <li>
            <a href="<?= $pager->getPrevious() ?>" aria-label="<?= lang('Pager.previous') ?>" class="p-4 text-white font-semibold rounded-md transition duration-150 bg-gold">
                <span aria-hidden="true"><?= lang('Pager.previous') ?></span>
            </a>
        </li>
    <?php endif ?>

    <?php foreach ($pager->links() as $link): ?>
        <li <?= $link['active'] ? 'active' : '' ?>>
            <a href="<?= $link['uri']  ?>" class='p-4 text-white font-semibold rounded-md transition duration-150 <?= $link['active'] ? 'bg-gold' : 'bg-yellow-800 hover:bg-gold' ?>'>
                <?= $link['title']?>
            </a>
        </li>
    <?php endforeach ?>

    <?php if ($pager->hasNext()) : ?>
        <li>
            <a href="<?= $pager->getNext() ?>" aria-label="<?= lang('Pager.next') ?>" class='p-4 text-white font-semibold rounded-md transition duration-150 <?= $link['active'] ? 'bg-gold' : 'bg-yellow-800 hover:bg-gold' ?>'>
                <span aria-hidden="true"><?= lang('Pager.next') ?></span>
            </a>
        </li>
        <li>
            <a href="<?= $pager->getLast() ?>" aria-label="<?= lang('Pager.last') ?>" class='p-4 text-white font-semibold rounded-md transition duration-150 <?= $link['active'] ? 'bg-gold' : 'bg-yellow-800 hover:bg-gold' ?>'>
                <span aria-hidden="true"><?= lang('Pager.last') ?></span>
            </a>
        </li>
    <?php endif ?>
    </ul>
</nav>