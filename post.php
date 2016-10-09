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
                <span class="time"><?php get_post_view($this) ?></span>
            </div>
            <div>
                <?php $this->content(); ?>
            </div>
            <div class="share">
                <div class="page">
                    <?php thePrev($this); ?>   <?php theNext($this); ?>
                </div>
                <div class="shareItems">
                    <div class="share-item"><a target="_blank" href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=<?php $this->permalink() ?>&title=<?php $this->title() ?>&site=<?php $this->options->title(); ?>" data-tooltip="分享至QQ空间"><i  class="iconfont">&#xe61b;</i></a></div>
                    <div class="share-item"><a href="http://service.weibo.com/share/share.php?url=<?php $this->permalink() ?>/&appkey=<?php $this->options->title(); ?>/&title=<?php $this->title() ?>" target="_blank" data-tooltip="分享至微博"><i  class="iconfont">&#xe619;</i></a></div>
                </div>
            </div>
            <?php $this->need('comments.php'); ?>
        </section>
</div>
<?php $this->need('footer.php'); ?>