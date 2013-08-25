<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class MY_Form_validation extends CI_Form_validation {

    function set_defaults($fields)
    {
        if (empty($fields))
            return FALSE;

        if(!empty($_POST))
            return FALSE;
        
        foreach ($fields as $key => $value) 
        {
            $this->_field_data[$key]['postdata'] = $value;
        }
    }
} 