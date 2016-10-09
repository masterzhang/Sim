<?php
 if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
<body class="content">
<?php $this->need('nav.php'); ?>
<div class="main">
    <?php $this->need('title.php'); ?>
    <section>
            <h1><?php $this->title() ?></h1>
            <div>
                <span><?php $this->date('M d,Y'); ?> in&nbsp;</span>
                <span><?php $this->tags(', ', true, 'none'); ?>&nbsp;by&nbsp;</span>
                <span><a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a>&nbsp;</span>
                <span><i class="iconfont">&#xe60d;</i></span>
                <span class="time">20</span>
            </div>
            <div>
                <?php $this->content(); ?>
            </div>
            <div class="share">
                <div class="page">
                    <?php thePrev($this); ?>   <?php theNext($this); ?>
                </div>
                <div class="shareItems">
                    <div class="share-item"><i  class="iconfont">&#xe61b;</i></div>
                    <div class="share-item"><a class="jiathis_button_tsina"><i  class="iconfont">&#xe619;</i></a></div>
                </div>
            </div>
            <?php $this->need('comments.php'); ?>
        </section>
</div>
<?php $this->need('footer.php'); ?>