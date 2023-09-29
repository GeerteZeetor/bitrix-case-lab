<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?php if (!empty($arResult)): ?>
    <div class="footer-nav white-text">
        <nav>
            <ul>
                <?php foreach ($arResult as $item) : ?>
                    <?php if ($item["TEXT"] === 'Главная') : ?>
                        <li class="mega-parent">
                            <a href="<?= $item['LINK'] ?>"><?= $item['TEXT'] ?></a>
                        </li>
                    <?php elseif ($item["SELECTED"]) : ?>
                        <li>
                            <a href="<?= $item['LINK'] ?>" style="color:#70ceff"><?= $item['TEXT'] ?></a>
                        </li>
                    <?php else: ?>
                        <li>
                            <a href="<?= $item['LINK'] ?>"><?= $item['TEXT'] ?></a>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </nav>
    </div>
<?php endif; ?>