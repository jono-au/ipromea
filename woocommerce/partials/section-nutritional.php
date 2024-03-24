<?php //template part to show nutrional section?>

<section class="container-fluid nutritional">
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
			<?php

			$treat = get_sub_field('nutrition_per_treat');
			$per_100 = get_sub_field('per_100g');
		

			if( $treat || $per_100 ): ?>
				<h2>Nutritional panel</h2>
				<table>
					<thead>
						<tr>
							<th></th>
							<th class="has-text-align-right" data-align="right"><strong>Quantity Per Treat</strong></th>
							<th class="has-text-align-right" data-align="right"><strong>Quantity Per 100g</strong></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><strong>Energy</strong></td>
							<td class="has-text-align-right" data-align="right"><?php echo $treat['energy'] ?> kj</td>
							<td class="has-text-align-right" data-align="right"><?php echo $per_100['energy'] ?> kj</td>
						</tr>
						<tr>
							<td><strong>Protein</strong></td>
							<td class="has-text-align-right" data-align="right"><?php echo $treat['protein'] ?>  g</td>
							<td class="has-text-align-right" data-align="right"><?php echo $per_100['protein'] ?>  g</td>
						</tr>
						<tr>
							<td><strong>Fat - total</strong><br>- saturated</td>
							<td class="has-text-align-right" data-align="right"><?php echo $treat['fat_total'] ?>  g<br><?php echo $treat['fat_saturated'] ?>  g</td>
							<td class="has-text-align-right" data-align="right"><?php echo $per_100['fat_total'] ?>  g<br><?php echo $per_100['fat_saturated'] ?>  g</td>
						</tr>
						<tr>
							<td><strong>Carbohydrate - total</strong><br>- sugars</td>
							<td class="has-text-align-right" data-align="right"><?php echo $treat['carb_total'] ?>  g<br><?php echo $treat['carb_sugars'] ?>  g</td>
							<td class="has-text-align-right" data-align="right"><?php echo $per_100['carb_total'] ?>  g<br><?php echo $per_100['carb_sugars'] ?>  g</td>
						</tr>
						<tr>
							<td><strong>Sodium</strong></td>
							<td class="has-text-align-right" data-align="right"><?php echo $treat['sodium'] ?>  mg</td>
							<td class="has-text-align-right" data-align="right"><?php echo $per_100['sodium'] ?>  mg</td>
						</tr>
					</tbody>
				</table>
				
			<?php endif; ?>
			</div>
			<div class="col-lg-5">
				<?php $img = get_sub_field('image')?>
                <img src="<?php echo $img['url']?>" alt="ipromea">
			</div>
		</div>
	</div>
</section>