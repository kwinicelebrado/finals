<?php 
	if (count($errors) > 0): ?> 
		<div class="errors">
			<?php foreach ($errors as $mistake): ?>
				<p>
					<?php echo $mistake; ?>
				</p>
			<?php endforeach ?>
		</div>
<?php endif ?>