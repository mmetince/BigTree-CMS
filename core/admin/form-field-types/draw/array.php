<?
	$entries = is_array($field["value"]) ? $field["value"] : array();
	$x = 0;
	
	// We recreate the field array because Chrome doesn't like to do for loops properly when the numeric keys are out of order.
	$aoi_fields = array();
	if (!is_array($field["options"]["fields"]) || !count($field["options"]["fields"])) {
		trigger_error("Array of Items field type requires at least one field.");
	} else {
		foreach ($field["options"]["fields"] as $f) {
			$aoi_fields[] = $f;
		}
	}
?>
<div class="multi_widget" id="<?=$field["id"]?>">
	<ul>
		<?
			foreach ($entries as $entry) {
		?>
		<li>
			<input type="hidden" name="<?=$field["key"]?>[<?=$x?>]" value="<?=htmlspecialchars(json_encode($entry))?>" />
			<span class="icon_sort"></span>
			<p><?=htmlspecialchars(htmlspecialchars_decode(BigTree::trimLength(strip_tags(current($entry)),100)))?></p>
			<a href="#" class="icon_delete"></a>
			<a href="#" class="icon_edit"></a>
		</li>
		<?
				$x++;
			}
		?>
	</ul>
	<footer>
		<a href="#" class="add button"><span class="icon_small icon_small_add"></span>Add Item</a>
	</footer>
</div>
<script>
	new BigTreeArrayOfItems("<?=$field["id"]?>",<?=$x?>,"<?=$field["key"]?>",<?=json_encode($aoi_fields)?>);
</script>