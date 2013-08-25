<?php
class Article_model extends MY_Model
{
   protected $validate = array(
        array( 'field' => 'title', 
               'label' => 'Title',
               'rules' => 'required' ),
        array( 'field' => 'body',
               'label' => 'Body',
               'rules' => 'required' )
    );
}