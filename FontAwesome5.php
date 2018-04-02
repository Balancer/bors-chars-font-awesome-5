<?php

namespace B2\Chars;

class FontAwesome5 extends \B2\Chars
{
	var $edit_char = '<i class="far fa-edit"></i>';
	function _edit_str_def() { return '<i class="far fa-edit"></i> '._('Edit'); }
}
