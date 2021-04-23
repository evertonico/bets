<?php

if ( ! function_exists('alert')) {
    function alert()
    {
        $arr = get_instance()->session->flashdata('show_alert_arr');
        get_instance()->session->unset_userdata('show_alert_arr');
        if(isset($arr)) {
            foreach ($arr as $show_alert) {
                echo '<div class="alert alert-' . $show_alert->type . ' alert-dismissible" role="alert" data-timer='. $show_alert->timer .'>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><i class='. $show_alert->icon .'></i> '.$show_alert->message.'</div>';
            }
        }
    }
}

if ( ! function_exists('send_alert')) {
    function send_alert( $message, $type='danger',  $timer = null, $icon='exclamation-triangle'){
        $session = \Config\Services::session();
        $arr = \Config\Services::session()->getFlashdata('msg');
        $data = new stdClass();
        $data->type = $type ;
        $data->message = $message ;
        $data->icon = $icon ;
        $data->timer = $timer ;
       // if (!isset($arr)) {
        //    $arr = array();
        //}
        //array_push($arr, $data);

        $session->setFlashdata('msg', $data);

        //$session->set_flashdata('show_alert_arr' , $arr);
    }
}


