<!--author by 11315028 Kevin Jordan Lumban Raja -->
<?php
        function redirect_to($url = null)
    {
            echo("<SCRIPT LANGUAGE='JavaScript'>document.location='" . $url ."'</SCRIPT>");
            die;
    }
    
    function create_anchor($url, $link)
    {
        echo('<a href ="'.$url.'">'.$link.'</a>');
    }
?>
