<?php
	namespace BigTree;
?>
<div class="container">
	<form method="post" action="<?=DEVELOPER_ROOT?>cloud-storage/amazon/update/" class="module">
		<section>
			<div class="alert">
				<p><?=Text::translate("To enable usage of Amazon S3 for all BigTree uploads enter your access keys below.<br />Please note that this change is not retroactive -- only future uploads will be stored on Amazon S3.")?></p>
			</div>	
			<fieldset>
				<label><?=Text::translate("Access Key ID")?></label>
				<input type="text" name="key" value="<?=Text::htmlEncode($amazon->Key)?>" />
			</fieldset>
			<fieldset>
				<label><?=Text::translate("Secret Access Key")?></label>
				<input type="text" name="secret" value="<?=Text::htmlEncode($amazon->Secret)?>" />
			</fieldset>
		</section>
		<footer>
			<input type="submit" class="button blue" value="<?=Text::translate("Update", true)?>" />
		</footer>
	</form>
</div>