<?php 
function dd($params = [], $die = true) 
{
    echo '<prev>';
    print_r($params);
    echo '</prev>';

    if ($die) die();
}