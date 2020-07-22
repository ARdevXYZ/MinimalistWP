jQuery(document).ready(function(){
  jQuery(".menu-button-class").click(function(){
    jQuery("#menuId").toggle();
  });
});

jQuery(document).ready(function() {
	jQuery("#menuButtonId").click(function(){
  	jQuery("#navGridId").toggle();
  });
  jQuery("#closeButtonId").click(function() {
  	jQuery("#navGridId").hide();
  });
});
