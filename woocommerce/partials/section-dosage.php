<?php //template part to show dosage table?>

<?php $dosage = get_sub_field('dosage_meal'); ?>

<section class="dosage container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<?php $img = get_sub_field('image')?>
                <img src="<?php echo $img['url']?>" alt="ipromea">
			</div>
			<div class="col-lg-6">
				<table class="has-fixed-layout">
					<h2>Size chart: dosage/meal</h2>
					<tbody>
						<tr>
							<td><img width="83" height="60" class="wp-image-928" style="width: 83px;" src="/wp-content/uploads/2021/03/icon-smallest-dog.png" alt="ipromea"></td>
							<td class="has-text-align-right" data-align="right">< 10 kg</td>
							<td class="has-text-align-right" data-align="right"><?php echo $dosage['_10kg']?></td>
						</tr>
						<tr>
							<td><img width="83" height="60" class="wp-image-927" style="width: 83px;" src="/wp-content/uploads/2021/03/icon-med-dog.png" alt="ipromea"></td>
							<td class="has-text-align-right" data-align="right">10 - 25 kg</td><td class="has-text-align-right" data-align="center"><?php echo $dosage['10_-_25kg']?></td>
						</tr>
						<tr>
							<td><img width="83" height="60" class="wp-image-926" style="width: 83px;" src="/wp-content/uploads/2021/03/icon-large-dog.png" alt="ipromea"></td>
							<td class="has-text-align-right" data-align="right"> > 25 kg</td><td class="has-text-align-right" data-align="center"><?php echo $dosage['_25kg']?></td>
						</tr>
					</tbody>
				</table>
			</div>

		</div>
	</div>
</section>


