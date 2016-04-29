<?php
	namespace BigTree;
	
	$item = $admin->getModuleAction(end($bigtree["commands"]));
	\BigTree::globalizeArray($item);
	\Kint::dump($item);
	$module = $admin->getModule($module);
?>
<div class="container">
	<form method="post" action="<?=DEVELOPER_ROOT?>modules/actions/update/<?=$item["id"]?>/" class="module">
		<input type="hidden" name="position" value="<?=$item["position"]?>" />
		<?php include Router::getIncludePath("admin/modules/developer/modules/actions/_form.php") ?>
		<footer>
			<input type="submit" class="button blue" value="<?=Text::translate("Update", true)?>" />
		</footer>
	</form>
</div>

<script>
	$(".developer_icon_list a").click(function() {
		$(".developer_icon_list a").removeClass("active");
		$(this).addClass("active");
		$("#selected_icon").val($(this).attr("href").substr(1));
		
		return false;
	});
</script>