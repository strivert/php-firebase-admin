<div class="box">
	<div class="box-head tabs">
		<h3><?php echo $Title;?></h3>
		<ul class='nav nav-tabs'>
			<li class='active'>
				<a href="#basic" data-toggle="tab">Listing</a>
			</li>
			<li>
				<a href="#condensed" data-toggle="tab">Add</a>
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
								<th width="40">Question <br>Image URL</th>
								<th width="80">Question Text</th>
								<th width="80">Correct Text</th>
								<th width="80">Incorrect Text1</th>
								<th width="80">Incorrect Text2</th>
								<th width="80">Incorrect Text3</th>
								<th width="80">Incorrect Text4</th>
								<th width="80">Incorrect Text5</th>
								<th width="40">Level</th>
								
								<th width="70">Operations</th>
							</tr>
						</thead>
						<tbody>
						<?php
						$m=1;
					    foreach( $questionAnswers as $key=>$r){							
						?>	
							<tr>
								<td style="text-align: center;"><?php echo $m?></td>
								<td><?php echo $r['question_image_url']; ?></td>
								<td><?php echo stripslashes($r['question_text']); ?></td>
								<td><?php echo stripslashes($r['correct_text']); ?></td>
								<td><?php echo $r['incorrect_text1']; ?></td>
								<td><?php echo $r['incorrect_text2']; ?></td>
								<td><?php echo $r['incorrect_text3']; ?></td>
								<td><?php echo $r['incorrect_text4']; ?></td>
								<td><?php echo $r['incorrect_text5']; ?></td>
								<td><?php echo $r['level']; ?></td>

								<td style="text-align: center;">
									<div class="btn-group">
										<a href="index.php?page=edit_question&uID=<?php echo $key;?>" class='btn btn-mini tip' title="Edit"><img src="img/icons/fugue/hammer-screwdriver.png" alt=""></a>									
										<a href="index.php?page=questions&uID=<?php echo $key;?>&act=del" onclick="javascript: return confirm('Are You sure!');" class='btn btn-mini tip' title="Remove"><img src="img/icons/fugue/cross.png" alt=""></a>
									</div>
								</td>
							</tr>
						<?php	 	
						$m++;
						}
						?>
						</tbody>
					</table>									
				</div>
			</div>
			
			<div class="tab-pane" id="condensed">
				<div class="box-content">
					<form action="index.php?page=addquestion" class='validate form-horizontal' method="post" name="addquestion" enctype="multipart/form-data">

						<div class="control-group">
							<label for="pw3" class="control-label">Question Image URL</label>
							<div class="controls">
								<input type="text" name="question_image_url">
							</div>
						</div>

						<div class="control-group">
							<label for="pw3" class="control-label">Question Text</label>
							<div class="controls">
								<textarea name="question_text" class='{required:true}'></textarea>
							</div>
						</div>

						<div class="control-group">
							<label for="pw3" class="control-label">Correct Text</label>
							<div class="controls">
								<textarea type="text" name="correct_text" class='{required:true}'></textarea>
							</div>
						</div>

						<div class="control-group">
							<label for="pw3" class="control-label">Incorrect Text 1</label>
							<div class="controls">
								<input type="text" name="incorrect_text1" class='{required:true}'>
							</div>
						</div>

						<div class="control-group">
							<label for="pw3" class="control-label">Incorrect Text 2</label>
							<div class="controls">
								<input type="text" name="incorrect_text2" class='{required:true}'>
							</div>
						</div>

						<div class="control-group">
							<label for="pw3" class="control-label">Incorrect Text 3</label>
							<div class="controls">
								<input type="text" name="incorrect_text3">
							</div>
						</div>

						<div class="control-group">
							<label for="pw3" class="control-label">Incorrect Text 4</label>
							<div class="controls">
								<input type="text" name="incorrect_text4">
							</div>
						</div>

						<div class="control-group">
							<label for="pw3" class="control-label">Incorrect Text 5</label>
							<div class="controls">
								<input type="text" name="incorrect_text5">
							</div>
						</div>

						<div class="control-group">
							<label for="pw3" class="control-label">Level</label>
							<div class="controls">
								<input type="text" name="level" class='{required:true}'>
							</div>
						</div>
						
						<div class="form-actions">
							<input type="submit"  value="Save" name="AddDailyTask" class='btn btn-primary'>
						</div>
					</form>
				</div>					
			</div>
		</div>
	</div>
</div>