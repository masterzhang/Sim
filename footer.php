<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

        <footer>
        <div>
            <div><span>博客已萌萌哒运行<time id="life">471天1小时13分26秒</time></span></div>
            <div>2016 Powered By <a href="http://typecho.org/" target="_blank">Typecho</a></div>
        </div>
    </footer>
    <div class="tools">
        <ul>
            <li class="up" style="display: none;" onclick="scrollToTop()">
                <div><i  class="iconfont">&#xe601;</i></div>
            </li>
        </ul>
    </div>
</div>
<div class="mask" onclick="closeDraw()"></div>
<script type="text/javascript">
    $(".mask").hide();
    window.onload = function () {
        window.onresize = windowChange;
        windowChange();
    }
    $(window).scroll(function (even) {
        var winPos = $(window).scrollTop();
        if (winPos == 0) {
            $(".up").fadeOut(1000);
        } else {
            $(".up").fadeIn(1000);
        }
    });
</script>
<script type="text/javascript" src="http://v2.jiathis.com/code/jia.js" charset="utf-8"></script>
</body>
</html>

<?php $this->footer(); ?>
</body>
</html>
