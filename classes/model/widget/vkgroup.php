<?php

defined('SYSPATH') or die('No direct access allowed.');

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

class Model_Widget_Vkgroup extends Model_Widget_Decorator{

	public function fetch_data()
	{
		$plugin = Plugins::get_registered('Vkgroup');
		
		return array(
			'plugin' => $plugin
		);
	}

}
