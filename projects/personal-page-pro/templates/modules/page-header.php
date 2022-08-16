<section class="page-header">
	<inner-column>
		<div class="header-content">
			
			<h1 class="loud-voice"><?=$pageData['header']?></h1>
			<?php
				if ($pageData['subheader']) { ?>
					<h2 class="attention-voice"><?=$pageData['subheader']?></h2>
			<?php } ?>

			<?php
				//print_r($pageData);
				if ($pageData['breadcrumbs']) {

					include("breadcrumbs.php");
				}

			?>

		</div>
	</inner-column>
</section>