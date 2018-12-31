<?php
echo "<ul class=\"pagination margin-zero\">";
 
// button for first page
if($page>1){
    echo "<li><a href='{$page_url}' title='Go to the first page.'>";
        echo "First Page";
    echo "</a></li>";
}
 
// calculate total number of pages/tính tổng số trang
$total_pages = ceil($total_rows / $records_per_page);
 
// range of links to show/phạm vi liên kết để hiển thị
$range = 2;
 
// display links to 'range of pages' around 'current page'/hiển thị các liên kết đến 'phạm vi trang' xung quanh 'trang hiện tại'
$initial_num = $page - $range;
$condition_limit_num = ($page + $range)  + 1;
 
for ($x=$initial_num; $x<$condition_limit_num; $x++) {
     
    // be sure '$x is greater than 0' AND 'less than or equal to the $total_pages'
    if (($x > 0) && ($x <= $total_pages)) {
     
        // current page/trang hiện tại
        if ($x == $page) {
            echo "<li class='active'><a href=\"#\">$x <span class=\"sr-only\">(current)</span></a></li>";
        } 
         
        // not current page
        else {
            echo "<li><a href='{$page_url}page=$x'>$x</a></li>";
        }
    }
}
 
// button for last page
if($page<$total_pages){
    echo "<li><a href='" .$page_url . "page={$total_pages}' title='Last page is {$total_pages}.'>";
        echo "Last Page";
    echo "</a></li>";
}
 
echo "</ul>";
?>