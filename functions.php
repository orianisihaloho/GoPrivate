<!--author by 11315028 Kevin Jordan Lumban Raja -->
<?php
    function get_title($_title){
        return('<title>' .$_title. '</title>');
    }
    function open_page($_title){
        echo('<html><head>' .get_title($_title). '</head></head><body>');
    }
    function close_page(){
        echo('</body></html>');
    }
    function redirect($_location){
        header('Location: ' .$_location);
    }
?>
