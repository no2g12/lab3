<?php
    function footer(){
    $date = date("Y");
        $output=   
        '<p class="col-md-offset-1 text-muted">Designed by Boyd\'s Artistic Design Company &copy; '.$date.'</p>';
        return $output;
}