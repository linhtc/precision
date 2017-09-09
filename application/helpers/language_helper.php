<?php

/**
 *
 *
 * @package 500ci_helper
 * @author Bui Huynh Kinh Luan <buihuynh.kinhluan@gmail.com>
 * @copyright (c) 2016, 500BITS
 * @link http://500bits.com
 * @license MIT
 * @version beta.0.1
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Function fullURL
 *
 * @param n/a
 * @author Bui Huynh Kinh Luan <buihuynh.kinhluan@gmail.com>
 */
if (!function_exists('lang')) {

    function lang($line) {
        global $LANG;
        return ($t = $LANG->line($line)) ? $t : $line;
    }

}