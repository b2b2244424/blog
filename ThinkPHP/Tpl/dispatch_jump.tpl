<style>
  .panel {
      width: 50%;
      margin: 15% auto;
      text-align: center;
  }
</style>
<section id="content">
          <section class="wrapper">
          <div class="m-b">
            <span class="h3 font-thin"><i class="i i-arrow-left3"></i>:)</span> 
          </div>
          <section class="panel panel-default">
            <?php if(isset($message)){?>
            <header class="panel-heading">
                :) 操作成功,页面自动 <a id="href" href="<?php echo($jumpUrl); ?>">跳转</a> 等待时间： <b id="wait"><?php echo($waitSecond); ?></b>
            </header>
          <?php }else{?>
            <header class="panel-heading">
                :) 操作失败,页面自动 <a id="href" href="<?php echo($jumpUrl); ?>">跳转</a> 等待时间： <b id="wait"><?php echo($waitSecond); ?></b>
            </header>
          <?php }?>
            <div class="table-responsive" id="growthrate">
            </div>
          </section>
        </section>
          <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
</section>
<script type="text/javascript">
(function(){
var wait = document.getElementById('wait'),href = document.getElementById('href').href;
var interval = setInterval(function(){
  var time = --wait.innerHTML;
  if(time <= 0) {
    location.href = href;
    clearInterval(interval);
  };
}, 1000);
})();
</script>