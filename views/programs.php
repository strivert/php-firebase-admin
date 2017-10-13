<div class="box">
	<div class="box-head tabs">
		<h3><?php echo $Title;?></h3>
		<ul class='nav nav-tabs'>
			<li class='active'>
				<a href="#basic" data-toggle="tab">Listing</a>
			</li>
		</ul>
	</div>
	<div class="box-content box-nomargin">
		<div class="tab-content">
				<div class="tab-pane active" id="basic">
					<div class="box-content box-nomargin">
					<table class='table table-striped dataTable table-bordered'>
						<thead>
							<tr>
								<th width="20">No.</th>
								<th width="85">Device Id</th>
								<th width="85">Date Time</th>
								<th width="85">Question Image URL</th>
								<th width="85">Question Text</th>
								<th width="85">User Answer Text</th>
							</tr>
						</thead>
						<tbody>
						<?php
						$m=1;
					    foreach($records as $key=>$r){
						?>	
							<tr>
								<td style="text-align: center;"><?php echo $m.$q;?></td>
								<td><?php echo $r['device_id']; ?></td>
								<td style="text-align: right;"><?php echo $r['date_time']; ?></td>
								<td><?php echo $r['question_image_url']; ?></td>
								<td><?php echo $r['question_text']; ?></td>
								<td><?php echo $r['user_answer_text']; ?></td>

							</tr>
						<?php	 	
						$m++;
						}
						?>
						</tbody>
					</table>									
				</div>
			</div>			
		</div>
	</div>
</div>
