
<?php
/**
 * @file
 * Displays the newspaper page controls.
 */
?>

<?php if ($controls['page_select']) : ?>
<div class="page_select">
<?php print render($controls['page_select']); ?>
</div>
<?php endif; ?>

<div class="np_page_controls">
<?php if ($controls['page_pager']) : ?>
<div class="page_pager">
<?php print render($controls['page_pager']); ?>
</div>
<?php endif; ?>

<?php if ($controls['issue_pager']) : ?>
<div class="issue_pager">
<?php print render($controls['issue_pager']); ?>
</div>
<?php endif; ?>
</div>


<div class="np_download">
	<?php if ($controls['text_view']) : ?>
	<div class="text_view">
	<?php print render($controls['text_view']); ?>
	</div>
	<?php endif; ?>

	<?php if ($controls['jp2_download']) : ?>
	<div class="jp2_download">
	<?php print render($controls['jp2_download']); ?>
	</div>
	<?php endif; ?>

	<?php if ($controls['tiff_download']) : ?>
	<div class="tiff_download">
	<?php print render($controls['tiff_download']); ?>
	</div>
	<?php endif; ?>

	<?php if ($controls['clip']) : ?>
	<div class="clip">
	<?php print render($controls['clip']); ?>
	</div>
	<?php endif; ?>
</div> 

