// $Id$
(function ($) {

/**
 * uncollapse the metadata.
 */
Drupal.behaviors.uncollapse_fieldset = {
  attach: function (context, settings) {
	$('.islandora-metadata').removeClass('collapsed collapsible collapse-processed');
  }
}

})(jQuery);
