<!--jQuery Plugin-->
<?php echo js('assets/js/jquery-1.7.1.min.js') ?>

<!--OK Video-->
<?php echo js('assets/js/okvideo.js') ?>
<script type="text/javascript">
  $(function(){
      $.okvideo({ source: '<?php echo html($page->video()) ?>', 
                  volume: 0, 
                  loop: true,
                  hd:true, 
                  adproof: true,
                  annotations: false,
                  onFinished: function() { console.log('finished') },
                  unstarted: function() { console.log('unstarted') },
                  onPlay: function() { console.log('onplay') },
                  onPause: function() { console.log('pause') },
                  buffering: function() { console.log('buffering') },
                  cued: function() { console.log('cued') },
               });
  });
</script>

<!-- Enable CSS active pseudo styles in Mobile Safari -->
<script language="JavaScript">
  //<![CDATA[
    document.addEventListener("touchstart", function() {},false);
  //]]>
</script>

</body>
</html>

<!-- Theme by Niklaus Gerber | http://niklausgerber.com -->