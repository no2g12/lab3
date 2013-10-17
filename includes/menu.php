<?php
    function menu($active){
    if($active == "index"){
        $output=
        '<li class="active"><a href="index.php">Home</a></li>
        <li><a href="finances.php">Finances</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact Us</a></li>';
        return $output;
    }else if($active == "finance"){
        $output=
        '<li><a href="index.php">Home</a></li>
        <li class="active"><a href="finances.php">Finances</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact Us</a></li>';
        return $output;
    }else if($active == "about"){
        $output=
        '<li><a href="index.php">Home</a></li>
        <li><a href="finances.php">Finances</a></li>
        <li class="active"><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact Us</a></li>';
        return $output;
    }else if($active == "contact"){
        $output=
        '<li><a href="index.php">Home</a></li>
        <li><a href="finances.php">Finances</a></li>
        <li><a href="about.php">About</a></li>
        <li class="active"><a href="contact.php">Contact Us</a></li>';
        return $output;
    }
        
}