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
            <h1><?php $this->title() ?></h1>
            <div id="timeLine">
                        <ul class="article">
                            <li>
                                <section class="event">
                                    <div class="message">
                                        <div class="message-content">
                                            内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容
                                        </div>
                                        <div class="message-icon">
                                            <i class="iconfont">&#xe620;</i>
                                        </div>
                                    </div>
                                    <div class="line">
                                        &nbsp;
                                        <div class="icon">
                                            <i class="iconfont">&#xe60d;</i>
                                        </div>
                                    </div>
                                    <div class="time">
                                        <div class="time-tag">2016年10月11日</div>
                                    </div>
                                </section>
                            </li>
                            <li>
                                <section class="event">
                                    <div class="message">
                                        <div class="message-content">
                                            内容内容内容内容内容内容内容内容内容内容内容
                                        </div>
                                        <div class="message-icon">
                                            <i class="iconfont">&#xe621;</i>
                                        </div>
                                    </div>
                                    <div class="line">
                                        &nbsp;
                                        <div class="icon">
                                            <i class="iconfont">&#xe60d;</i>
                                        </div>
                                    </div>
                                    <div class="time">
                                        <div class="time-tag">2016年10月11日</div>
                                    </div>
                                </section>
                            </li>
                        </ul>
                    </div>
            <?php $this->need('comments.php'); ?>
        </section>
    </div>
<?php $this->need('footer.php'); ?>