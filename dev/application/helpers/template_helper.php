<?php

function get_template_directory($path, $dir_file)
{
    global $SConfig;

    $replace_path = str_replace('\\', '/', $path);
    $get_digit_doc_root = strlen($SConfig->document_root);
    $full_path = substr($replace_path, $get_digit_doc_root);
    return $SConfig->site_url . $full_path . '/' . $dir_file;

    function get_template($view)
    {
        $me = get_instance();
        return $me->site->view($view);
    }
}
