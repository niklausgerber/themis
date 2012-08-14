<!--jQuery Plugin-->
<?php echo js('assets/js/jquery-1.7.1.min.js') ?>

<!--jQuery Backstretch-->
<?php echo js('assets/js/jquery.backstretch.min.js') ?>
<script language="JavaScript">
  //<![CDATA[
  	<?php foreach($page->images() as $image): ?>
		$.backstretch("<?php echo $image->url() ?>", {speed: 150}); 
	<?php endforeach ?>  	
  //]]>
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