<div class="container">
	<form method="post" action="<?=DEVELOPER_ROOT?>cloud-storage/google/activate/" class="module" enctype="multipart/form-data">
		<section>
			<p><?=Text::translate("To activate Google Cloud Storage you must follow these steps:")?></p>
			<hr />
			<ol>
				<li><?=Text::translate('Login to the <a href="https://console.developers.google.com/" target="_blank">Google Developers Console</a> and create a project. Enter the Project ID below.')?></li>
				<li><?=Text::translate('Click into the project and enter the "APIs &amp; auth" / APIs section. Enable access to the Google Cloud Storage and Google Cloud Storage JSON API.')?></li>
				<li><?=Text::translate('Click into the "Credentials" section and click the "Create New Client ID" button.')?></li>
				<li><?=Text::translate('Enter <?=DEVELOPER_ROOT?>cloud-storage/google/return/ as an "Authorized Redirect URI" and choose "Web Application" for the Application Type.')?></li>
				<li><?=Text::translate('Enter the Client ID and Client Secret that was created from the previous step below.')?></li>
				<li><?=Text::translate('If you want to use the Temporary Private URLs feature of Cloud Storage (for providing URLs that expire after a certain amount of time), click the "Create New Client ID" button again, this time choosing "Service Account" as the type. Your private key will automatically download. Upload that private key below and enter the email address from the Service Account block as the Certificate Email Address.')?></li>
				<li><?=Text::translate('If you have not yet signed up for Cloud Storage, go into Storage / Cloud Storage / Storage browser and sign up for the Cloud Storage product.')?></li>
				<li><?=Text::translate('Follow the OAuth process of allowing BigTree/your application access to your Google Cloud Storage account.')?></li>
			</ol>
			<hr />
			<fieldset>
				<label><?=Text::translate("Project ID")?></label>
				<input type="text" name="project" value="<?=htmlspecialchars($cloud->Settings["project"])?>" />
			</fieldset>
			<fieldset>
				<label><?=Text::translate("Client ID")?></label>
				<input type="text" name="key" value="<?=htmlspecialchars($cloud->Settings["key"])?>" />
			</fieldset>
			<fieldset>
				<label><?=Text::translate("Client Secret")?></label>
				<input type="text" name="secret" value="<?=htmlspecialchars($cloud->Settings["secret"])?>" />
			</fieldset>
			<fieldset>
				<label><?=Text::translate("Certificate Email Address")?> <small>(<?=Text::translate("optional, needed only for Temporary Private URLs")?>)</small></label>
				<input type="text" name="certificate_email" value="<?=htmlspecialchars($cloud->Settings["certificate_email"])?>" />
			</fieldset>
			<fieldset class="developer_cloud_key">
				<label><?=Text::translate("Certificate Private Key")?> <small>(<?=Text::translate("optional, needed only for Temporary Private URLs")?>)</small></label>
				<input type="file" name="private_key" />
				<?php if ($cloud->Settings["private_key"]) { ?>
				<span class="icon_approve icon_approve_on"></span>
				<?php } ?>
			</fieldset>
		</section>
		<footer>
			<input type="submit" class="button blue" value="<?=Text::translate("Activate Google Cloud Storage", true)?>" />
		</footer>
	</form>
</div>