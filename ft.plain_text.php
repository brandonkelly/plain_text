<?php if (! defined('BASEPATH')) exit('No direct script access allowed');


/**
 * Plain Text Fieldtype for EE2
 * 
 * @author    Brandon Kelly <brandon@pixelandtonic.com>
 * @copyright Copyright (c) 2011 Pixel & Tonic, Inc
 */
class Plain_text_ft extends EE_Fieldtype {

	var $info = array(
		'name' => 'Plain Text',
		'version' => '1.0'
	);

	/**
	 * Install
	 */
	function install()
	{
		return array();
	}

	// --------------------------------------------------------------------

	/**
	 * Display Field
	 */
	function display_field($data)
	{
		return form_textarea($this->field_name, $data);
	}

	/**
	 * Display Cell
	 */
	function display_cell($data)
	{
		$r['class'] = 'matrix-text';
		$r['data'] = '<textarea class="matrix-textarea" name="'.$this->cell_name.'" rows="10">'.$data.'</textarea>';

		return $r;
	}

	// --------------------------------------------------------------------

	/**
	 * Validate Cell
	 */
	function validate_cell($data)
	{
		// is this a required column?
		if ($this->settings['col_required'] == 'y' && ! $data)
		{
			return lang('col_required');
		}

		return TRUE;
	}

}
