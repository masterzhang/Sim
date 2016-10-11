<?php
/**
 * 关于
 *
 * @package custom
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
    <body class="about">
<?php $this->need('nav.php'); ?>
    <div class="main">
        <?php $this->need('title.php'); ?>
        <section>
            <h1>关于本站</h1>
            <div id="timeLine">
                <ul class="article">
                    <?php $category = $this->widget('Widget_Archive@category', 'pageSize=1000&type=category', 'mid=7');
                    $n = 1;
                    while ($category->next()): ?>
                        <li>
                            <section class="event">
                                <div class="message">
                                    <div class="message-content">
                                        <?php $category->content('Continue Reading...'); ?>
                                    </div>
                                    <div class="message-icon">
                                        <?php if ($n % 2 == 0): ?>
                                            <i class="iconfont">&#xe620;</i>
                                        <?php else: ?>
                                            <i class="iconfont">&#xe621;</i>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="line">
                                    &nbsp;
                                    <div class="icon">
                                        <i class="iconfont">&#xe60d;</i>
                                    </div>
                                </div>
                                <div class="time">
                                    <div class="time-tag"><?php $category->date('Y年m月d日'); ?></div>
                                </div>
                            </section>
                        </li>
                        <?php
                        $n += 1;
                    endwhile; ?>
                </ul>
            </div>
            <?php $this->need('comments.php'); ?>
        </section>
    </div>
<?php $this->need('footer.php'); ?>