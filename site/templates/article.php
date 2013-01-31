<?php snippet('header') ?>

<div id="navigation">
	<?php if($page->hasPrev()): ?>
	<div id="previous"><a href="<?php echo $page->prev()->url() ?>" title="Previous"><img src="<?php echo html($site->url()) ?>/assets/images/icons/interface/previous.png"></a></div>
	<?php endif ?>	
	<?php if($page->hasNext()): ?>
	<div id="next"><a href="<?php echo $page->next()->url() ?>" title="Next"><img src="<?php echo html($site->url()) ?>/assets/images/icons/interface/next.png"></a></div>
	<?php endif ?>
	<div id="back"><a href="<?php echo html($site->url()) ?>" title="Back"><img src="<?php echo html($site->url()) ?>/assets/images/icons/interface/back.png"></a></div>
</div>

<?php snippet('footer-article') ?>
