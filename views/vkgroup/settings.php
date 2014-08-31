<?php
/**
 * @Описание файла: "vkgroup 2.0"
 * 
 * -------
 * 
 * Виджет Вконтакте - KodiCms
 * 
 * -------
 * @Разработчик Масюков Павел
 * @Дата создания 29.08.2014
 * @Email p.masyukov@yandex.ru
 * @URL https://github.com/Developer-RU
 * 
 */
?>
<div class="row">

    <div class="col-sm-3">
        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title"><?php echo __('Settings'); ?></span>
            </div> 
            <div class="panel-body">
<?php echo $form; ?>
                <div class="control-group">
                    <div class="controls">
<?php echo Form::input('setting[group]', $plugin->get('group'), array('id' => 'setting_group', 'class' => 'form-control', 'placeholder' => Arr::get($plugin->labels(), 'group'))); ?>
                    </div> 
                    <hr class="divider">
                    <div class="controls">
<?php echo Form::radio('setting[type]', Plugin_Vkgroup::MODE_USERS, ($plugin->get('type') == Plugin_Vkgroup::MODE_USERS), array('id' => 'setting_type_user')) . "&#160;&#160;&#160;"; ?>
                        <?php echo Arr::get($plugin->labels(), 'users') . "&#160;&#160;&#160;"; ?>  
                        <br>
<?php echo Form::radio('setting[type]', Plugin_Vkgroup::MODE_NEWS, ($plugin->get('type') == Plugin_Vkgroup::MODE_NEWS), array('id' => 'setting_type_news')) . "&#160;&#160;&#160;"; ?>
                        <?php echo Arr::get($plugin->labels(), 'news'); ?>
                    </div>

                    <hr class="divider">
                    <div class="controls">
<?php echo Form::input('setting[width]', $plugin->get('width'), array('id' => 'setting_width', 'class' => 'form-control', 'placeholder' => Arr::get($plugin->labels(), 'width'))); ?>
                    </div><br>
                    <div class="controls">
<?php echo Form::input('setting[height]', $plugin->get('height'), array('id' => 'setting_height', 'class' => 'form-control', 'placeholder' => Arr::get($plugin->labels(), 'height'))); ?>
                    </div>
                    <hr class="divider">
                    <div class="controls">
<?php echo Form::input('setting[bgcolor]', $plugin->get('bgcolor'), array('id' => 'setting_bgcolor', 'class' => 'form-control', 'placeholder' => Arr::get($plugin->labels(), 'bgcolor'))); ?>
                    </div><br>
                    <div class="controls">
<?php echo Form::input('setting[textcolor]', $plugin->get('textcolor'), array('id' => 'setting_textcolor', 'class' => 'form-control', 'placeholder' => Arr::get($plugin->labels(), 'textcolor'))); ?>
                    </div><br>
                    <div class="controls">
<?php echo Form::input('setting[btncolor]', $plugin->get('btncolor'), array('id' => 'setting_btncolor', 'class' => 'form-control', 'placeholder' => Arr::get($plugin->labels(), 'btncolor'))); ?>
                    </div>
                </div>
<?php echo Form::close(); ?>
            </div>
        </div> 
    </div> 

    <div class="col-sm-9">	
        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title"><?php echo __('Preview'); ?></span>
            </div> 
            <div class="panel-body">

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

            </div>
        </div>
    </div>

</div>

<link href="/cms/plugins/vkgroup/vendor/colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">

<script>
    $(function() {
        $('#setting_bgcolor').colorpicker();
        $('#setting_textcolor').colorpicker();
        $('#setting_btncolor').colorpicker();
    });
</script>
<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="/cms/plugins/vkgroup/vendor/colorpicker/js/bootstrap-colorpicker.js"></script>