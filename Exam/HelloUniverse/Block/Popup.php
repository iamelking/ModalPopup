<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Exam\HelloUniverse\Block;


class Popup extends \Magento\Framework\View\Element\Template
{
	public function getContent()
	{
		return __('Hello Universe');
	}
}
