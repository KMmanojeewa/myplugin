<?php

if(! defined('ABSPATH')) {
    exit;
}

function myplugin_validate_options($input) {
    return $input;
}


//callback:textarea field
function myplugin_callback_field_textarea($args) {
    //todo:add callback functionality
    echo 'This will be a textarea';
}