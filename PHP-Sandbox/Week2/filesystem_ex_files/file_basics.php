<?php
/**
 * Created by IntelliJ IDEA.
 * User: tjackson
 * Date: 10/7/15
 * Time: 1:35 AM
 */
echo __FILE__. "</br>";
echo __LINE__. "</br>";
echo dirname(__FILE__). "</br>";
echo __DIR__. "</br>";

echo file_exists(__FILE__) ? 'yes' : 'no';
echo "</br>";
echo file_exists(dirname(__FILE__)."/basic.html")  ? 'yes' : 'no';
echo "</br>";
echo file_exists(dirname(__FILE__))  ? 'yes' : 'no';
echo "</br>";
echo is_file(dirname(__FILE__)."/basic.html")  ? 'yes' : 'no';
echo "</br>";
echo is_file(dirname(__FILE__))  ? 'yes' : 'no';