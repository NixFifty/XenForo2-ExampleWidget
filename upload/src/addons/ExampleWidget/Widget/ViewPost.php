<?php

namespace ExampleWidget\Widget;

use \XF\Widget\AbstractWidget;

class ViewPost extends AbstractWidget
{
	protected $defaultOptions = [
		'post_id' => 0
	];

	public function render()
	{
		$post = \XF::app()->findByContentType('post', $this->options['post_id']);

		if ($post)
		{
			$viewParams = [
				'post' => $post,
				'message' => $post->message
			];
			return $this->renderer('widget_post_view', $viewParams);
		}

		return '';
	}
}