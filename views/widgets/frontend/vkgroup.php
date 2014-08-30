<script type="text/javascript" src="//vk.com/js/api/openapi.js?115"></script>
<!-- VK Widget -->
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
<noscript>Please enable JavaScript to view the widget Vkgroup.</a></noscript><br>
<p><b>Написать разработчику:  </b>   <a href="mailto:p.masyukov@yandex.ru" class="dsq-brlink">p.masyukov@yandex.ru</a></p>
<p><b>Последняя версия с GitHub: </b>   <code>https://github.com/Developer-RU/Kodicms-plugin-vkgroup.git</code></p><br>