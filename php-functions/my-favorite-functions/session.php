<?php
/** 
 * BuduEngine - A Delicious PHP Framework
 * 
 * @package  BuduEngine
 * @author   Kholed Langsari <langsaree@gmail.com>
 */

session_start();

function checkSessionMsg() {
    if (isset($_SESSION['msg']) && !empty($_SESSION['msg'])) {
        $msg = $_SESSION['msg'];
        return $msg;
    }
}
