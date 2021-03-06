<?php

namespace App\View\Helper;

use Cake\View\Helper;

class MarkdownHelper extends Helper
{

	protected $parsedown;

	public function __construct()
	{
		$this->parsedown = new \Parsedown();
	}

	public function toHtml($text)
	{
		return $this->parsedown->text($text);
	}

	public function toHtmlResume($text, $lenght = 250, $end = '...')
	{
		$text = $this->parsedown->text($text);
		$text = strip_tags($text);
		if (mb_strlen($text, 'utf-8') > $lenght) {
			$text = mb_substr($text, 0, $lenght, 'utf-8');
		}
		return $text .= $end;
	}

}