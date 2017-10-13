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
								<th width="85">Correct /<br>Wrong</th>
							</tr>
						</thead>
						<tbody>
						<?php
						$m=1;
					    foreach($records as $key=>$r){
							foreach($r as $k=>$v){
						?>	
							<tr>
								<td style="text-align: center;"><?php echo $m.$q;?></td>
								<td><?php echo $key; ?></td>
								<td style="text-align: right;"><?php echo date('m/d/Y H:i:s', $v['date_time']); ?></td>
								<td><?php echo $v['question_image_url']; ?></td>
								<td><?php echo $v['question_text']; ?></td>
								<td><?php echo $v['user_answer_text']; ?></td>
								<td style="text-align: center;">
								<?php 
									if($v['is_correct']){
										echo '<img src="img/icons/fugue/tick.png" alt="Correct" title="Correct" />'; 	
									}
									else {
										echo '<img src="img/icons/fugue/cross.png" alt="Wrong" title="Wrong" />'; 
									}
								?>
								</td>
							</tr>
						<?php	 	
							$m++;
							}
						
						}
						?>
						</tbody>
					</table>									
				</div>
			</div>			
		</div>
	</div>
</div>
