<!-- View stored in resources/views/ArticlesCategory.php -->
<section>
    <header class="news-category__header">
        <span translate="NEWS_SHOW_MORE"></span>
        <nav class="news-category__navigation">
            <ul class="news-category__list">
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $articleCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="news-category__item">
                        <?php if($articleCategory->name == $category->name): ?>
                            <a href="/community/category/<?php echo e($articleCategory->name); ?>"
                               translate="<?php echo e($articleCategory->translate); ?>"
                               class="news-category__link--active news-category__link">
                            </a>
                        <?php else: ?>
                            <a href="/community/category/<?php echo e($articleCategory->name); ?>"
                               translate="<?php echo e($articleCategory->translate); ?>"
                               class="news-category__link">
                            </a>
                        <?php endif; ?>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </nav>
    </header>
    <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $articleContent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <article class="news-header">
            <?php if($articleContent->roomId != 0): ?>
                <a href="/hotel?room=<?php echo e($articleContent->roomId); ?>"
                   class="news-header__link news-header__banner">
                    <figure class="news-header__viewport">
                        <img src="<?php echo e($articleContent->thumbnailUrl); ?>"
                             alt="<?php echo e($articleContent->title); ?>" class="news-header__image news-header__image--thumbnail">
                        <img src="<?php echo e($articleContent->imageUrl); ?>"
                             alt="<?php echo e($articleContent->title); ?>" class="news-header__image news-header__image--featured">
                    </figure>
                </a>
                <a href="/hotel?room=<?php echo e($articleContent->roomId); ?>" class="news-header__link news-header__wrapper">
                    <h2 class="news-header__title"><?php echo e($articleContent->title); ?></h2>
                </a>
            <?php else: ?>
                <a href="/community/article/<?php echo e($articleContent->id); ?>/content"
                   class="news-header__link news-header__banner">
                    <figure class="news-header__viewport">
                        <img src="<?php echo e($articleContent->thumbnailUrl); ?>"
                             alt="<?php echo e($articleContent->title); ?>" class="news-header__image news-header__image--thumbnail">
                        <img src="<?php echo e($articleContent->imageUrl); ?>"
                             alt="<?php echo e($articleContent->title); ?>" class="news-header__image news-header__image--featured">
                    </figure>
                </a>
                <a href="/community/article/<?php echo e($articleContent->id); ?>/content"
                   class="news-header__link news-header__wrapper">
                    <h2 class="news-header__title"><?php echo e($articleContent->title); ?></h2>
                </a>
            <?php endif; ?>
            <aside class="news-header__wrapper news-header__info">
                <time class="news-header__date">
                    <?php echo e(date('M j, Y' , strtotime($articleContent->createdAt))); ?>

                </time>
                <ul class="news-header__categories">
                    <?php $__currentLoopData = $articleContent->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $articleCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="news-header__category">
                            <a href="/community/category/<?php echo e($articleCategory->name); ?>"
                               class="news-header__category__link"
                               translate="<?php echo e($articleCategory->translate); ?>"></a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </aside>
            <p class="news-header__wrapper news-header__summary"><?php echo e($articleContent->description); ?></p>
        </article>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <footer>
        <nav>
            <ul>
                <?php if($page > 1): ?>
                    <li>
                        <a href="/community/category/<?php echo e($category->name); ?>/<?php echo e($page - 1); ?>" translate="NEWS_PREVIOUS"
                           class="news-category__previous"></a>
                    </li>
                <?php endif; ?>
                <?php if($articles->count() == 10): ?>
                    <li>
                        <a href="/community/category/<?php echo e($category->name); ?>/<?php echo e($page + 1); ?>" translate="NEWS_NEXT"
                           class="news-category__next"></a>
                    </li>
                <?php endif; ?>
            </ul>
        </nav>
    </footer>
</section>