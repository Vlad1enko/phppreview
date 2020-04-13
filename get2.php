<?php 
    $pages = array();
    $pages[0] = "Page 1";
    $pages[1] = "Page 2";
    echo '<p><a href = "get2.php?page=' . 1 . '">' . $pages[0] . '</a></p>' . '<br/>';
    echo '<p><a href = "get2.php?page=' . 2 . '">' . $pages[1] . '</a></p>' . '<br/>';
    if( isset($_GET['page'])) {
        echo '<h1>Page ' . "{$_GET['page']}" . '</h1><br/>';
        echo '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>';
    }