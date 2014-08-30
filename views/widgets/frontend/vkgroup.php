<script type="text/javascript" src="//vk.com/js/api/openapi.js?115"></script>
<div id="vk_groups"></div>
<script type="text/javascript">
    VK.Widgets.Group("vk_groups", {
        mode: <?php echo $plugin->get('type'); ?>,
        width: "<?php echo $plugin->get('width'); ?>",
        height: "<?php echo $plugin->get('height'); ?>",
        color1: "<?php echo $plugin->get('bgcolor'); ?>",
        color2: "<?php echo $plugin->get('textcolor'); ?>",
        color3: "<?php echo $plugin->get('btncolor'); ?>"
    }, <?php echo $plugin->get('group'); ?>);
</script>
<noscript>Please enable JavaScript to view the widget Vkgroup.</a></noscript>