<?php
/** 
 * BuduEngine - A Delicious PHP Framework
 * 
 * @package  BuduEngine
 * @author   Kholed Langsari <langsaree@gmail.com>
 */
function localFunctionTest()
{
    echo "Local Function";
}

function mysqliPrep($string)
{
   global $link;

   $safeString = mysqli_real_escape_string($link, $string);
   return $safeString;
}

/*
 | Find all field in table, using 2 argument
 | 1. table name
 | 2. field in table for ordering as ASC
 */
function findAll($dbTable, $orderField)
{
    global $link;

    $query = "SELECT * FROM {$dbTable} ";
    $query .= "ORDER BY {$orderField} ASC";
    $resultSet = mysqli_query($link, $query);

    confirmQuery($resultSet);
    return $resultSet;
}

/*
| Delete All using 3 Argument
| 1. Table name.
| 2. Table field
| 3. Indicator
*/
function deleteAll($dbTable, $processField, $inputField)
{
    global $link;

    $id = mysqliPrep($inputField);
    $query = "DELETE FROM ";
    $query .= "{$dbTable} ";
    $query .= "WHERE {$processField} = {$id}";

    $del = mysqli_query($link, $query);

    if (!$del) {
        $msg = mysqli_error($link);
        return $msg;
    } else {
        $msg = "ลบข้อมูลเรียบร้อยแล้ว";
        return $msg;
    }

}