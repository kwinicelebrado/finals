<?php 
	if (count($error) > 0): ?> 
		<div class="error">
			<?php foreach ($error as $mistakes): ?>
				<p>
					<?php echo $mistakes; ?>
				</p>
			<?php endforeach ?>
		</div>
<?php endif ?>