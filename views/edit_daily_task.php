<div class="box">
	<div class="box-head tabs">
		<div class="tab-pane" id="condensed">
			<div class="box-content">
				<form action="index.php?page=edit_daily_task" class='validate form-horizontal' method="post" name="adddaily_task" enctype="multipart/form-data">

					<div class="control-group">
						<label for="pw3" class="control-label">Question Image URL</label>
						<div class="controls">
							<input type="text" name="question_image_url" value="<?php echo $question['question_image_url']?>" class='{required:true}'>
						</div>
					</div>	

					<div class="control-group">
						<label for="pw3" class="control-label">Question Text</label>
						<div class="controls">
							<textarea name="question_text" class='{required:true}'><?php echo $question['question_text']?></textarea>
						</div>
					</div>

					<div class="control-group">
						<label for="pw3" class="control-label">Correct Text</label>
						<div class="controls">
							<textarea name="correct_text" class='{required:true}'><?php echo $question['correct_text']?></textarea>
						</div>
					</div>

					<div class="control-group">
						<label for="pw3" class="control-label">Incorrect Text 1</label>
						<div class="controls">
							<input type="text" name="incorrect_text1" value="<?php echo $question['incorrect_text1']?>" class='{required:true}'>
						</div>
					</div>

					<div class="control-group">
						<label for="pw3" class="control-label">Incorrect Text 2</label>
						<div class="controls">
							<input type="text" name="incorrect_text2" value="<?php echo $question['incorrect_text2']?>" class='{required:true}'>
						</div>
					</div>

					<div class="control-group">
						<label for="pw3" class="control-label">Incorrect Text 3</label>
						<div class="controls">
							<input type="text" name="incorrect_text3" value="<?php echo $question['incorrect_text3']?>" class='{required:true}'>
						</div>
					</div>

					<div class="control-group">
						<label for="pw3" class="control-label">Incorrect Text 4</label>
						<div class="controls">
							<input type="text" name="incorrect_text4" value="<?php echo $question['incorrect_text4']?>" class='{required:true}'>
						</div>
					</div>

					<div class="control-group">
						<label for="pw3" class="control-label">Incorrect Text 5</label>
						<div class="controls">
							<input type="text" name="incorrect_text5" value="<?php echo $question['incorrect_text5']?>" class='{required:true}'>
						</div>
					</div>

					<div class="control-group">
						<label for="pw3" class="control-label">Level</label>
						<div class="controls">
							<input type="text" name="level" value="<?php echo $question['level']?>" class='{required:true}'>
						</div>
					</div>

					
					<div class="form-actions">
						<input type="hidden" name="uID" value="<?php echo $dateTime?>">
						<input type="submit"  value="Update" name="UpdateDailyTask" class='btn btn-primary'>
						<input type="button" class="btn btn-danger" onClick="location.href='<?php echo "index.php?page=daily_tasks"?>'" value="Cancel"/>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
