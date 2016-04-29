<?php
	namespace BigTree;
	
	// Stop notices
	$id = $name = $description = $display_default = $level = "";
	$fields = array();

	if ($_SESSION["bigtree_admin"]["error"]) {
		BigTree::globalizeArray($_SESSION["bigtree_admin"]["saved"]);
		$show_error = $_SESSION["bigtree_admin"]["error"];
		unset($_SESSION["bigtree_admin"]["error"]);
		unset($_SESSION["bigtree_admin"]["saved"]);
	}
?>
<div class="container">
	<form method="post" action="<?=DEVELOPER_ROOT?>callouts/create/" enctype="multipart/form-data" class="module">
		<?php include Router::getIncludePath("admin/modules/developer/callouts/_form-content.php") ?>
		<footer>
			<input type="submit" class="button blue" value="<?=Text::translate("Create", true)?>" />
		</footer>
	</form>
</div>

<?php include Router::getIncludePath("admin/modules/developer/callouts/_common-js.php") ?>
<script>
	BigTree.localResourceCount = <?=$x?>;
</script>