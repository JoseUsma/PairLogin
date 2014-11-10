<?php
// get the feedback (they are arrays, to make multiple positive/negative messages possible)
$result_page = Session::get('result_page');
$pages = ceil($this->result_count/PAGE_ITEMS);
if ($pages > 1) {
	for ($pagecount = 1 ; $pagecount <= $pages ; $pagecount++) {
	if ($this->page == $pagecount){
		echo $pagecount. ' | ' ; 
	}else {
	?>
		<a href="javascript:loadResultPage('#searchresults','<?php echo $this->web_page ?>','<?php echo $pagecount ?>')"> <?php echo $pagecount ?></a> | 
	<?php } 
	} ?>
	</div>
<?php } ?>
