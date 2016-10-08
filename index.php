<?php
/**
 * 一个兑现约定的皮肤，打败拖延症
 * 
 * @package delay 
 * @author 张华焱
 * @version 0.1
 * @link http://typecho.org
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
<body class="home">
<?php $this->need('nav.php'); ?>
<div class="main">
    <?php $this->need('title.php'); ?>
    <section>
        <ul>
		<?php while($this->next()): ?>
            <li>
                <article>
                    <h1 class="title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
                    <div class="author">
                        <div href="#" class="target"><?php $this->tags(',', true, 'none'); ?></div>
                        <span><i class="iconfont">&#xe615;</i></span>
                        <a href="<?php $this->author->permalink(); ?>" class="username"><?php $this->author(); ?></a>
                        <span><i class="iconfont">&#xe617;</i></span>
                        <span class="time"><?php $this->date('Y-m-d'); ?></span>
                        <span><i class="iconfont">&#xe60d;</i></span>
                        <span class="time">20</span>
                    </div>
                    <div class="content">
                       <?php $this->content('Continue Reading...'); ?>
                    </div>
                    <div class="footer">
                        <a href="<?php $this->permalink() ?>">阅读全文</a>
                    </div>
                </article>
            </li>
		<?php endwhile; ?>
        </ul>
        <div class="page-nav">
            <div>
 <?php $this->pageLink('<xt class="btn--one"><i class="iconfont icon-zuo text-base mr"></i><span>NEWER</span></xt>'); ?>
<?php $this->pageLink('<xt class="btn--one"><span>OLDER</span><i class="iconfont icon-you text-base ml"></i></xt>','next'); ?>
            </div>
            <div class="page-right">PAGE
            <?php if($this->_currentPage>1) echo $this->_currentPage;  else echo 1;?> <span id="txt">OF</span> <?php echo   ceil($this->getTotal() / $this->parameter->pageSize); ?></div>
        </div>
    </section>
<?php $this->need('footer.php'); ?>
