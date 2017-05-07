<div class="row">
	<div class="col-sm-6">
		<h1><?php echo $title; ?></h1>
	</div>
	<div class="col-sm-6">
		<form>
			<div class="form-group">

				<input type="email" class="form-control" id="search">
			</div>
			<button type="submit" id="search_btn" class="btn btn-default">Search button</button>
		</form>
	</div>

	<div class="clearfix"></div>
	<p></p>
	<div class="table-responsive">
		<table class="table">
			<thead>
			<tr>
				<th>No.</th>
				<th>Serial</th>
				<th>Customer</th>
				<th>Issue Date</th>
				<th>Last use</th>
				<th>Lost date</th>
				<th></th>

			</tr>
			</thead>
			<tbody>

			<?php foreach ($display_data as $key=>$lost_pass_card): ?>
				<?php echo '<tr>';?>
				<td><?php echo $key+1;?></td>
				<td><?php echo $lost_pass_card['serial'];?></td>
				<td><?php echo $lost_pass_card['customer'];?></td>
				<td><?php echo $lost_pass_card['issue_date'];?></td>
				<td><?php echo $lost_pass_card['last_use'];?></td>
				<td><?php echo $lost_pass_card['lost_date'];?></td>

				<td><a href="<?php echo base_url();?>admin/pass_card_generated">Re-generate</a>
					<a href="<?php echo base_url();?>admin/pass_card_detail">Icon detail</a>
				</td>
				<?php echo '</tr>';?>
			<?php endforeach; ?>

			</tbody>
		</table>
	</div>
	<select id="pagination-select">
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		<option>6</option>
		<option>7</option>
	</select>
	<ul class="pager">
		<li><a href="#"><i class="fa  fa-angle-left"></i></a></li>
		<li><a href="#"><i class="fa  fa-angle-right"></i></a></li>
	</ul>
</div>