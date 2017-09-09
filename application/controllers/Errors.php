<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 * @package Errors
 * 
 * 
 * @author Bui Huynh Kinh Luan <buihuynh.kinhluan@gmail.com>
 * @copyright (c) 2016, 500BITS
 * @link http://500bits.com
 * @license MIT
 * @version beta.0.1
 */
class Errors extends MY_Controller {

    function __construct() {
        parent::__construct();
    }
    
    public function show_404() {
        debug('show_404');
    }

}
