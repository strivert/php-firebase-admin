function changecountrycategory()
{
	var countryid = document.getElementById('country_select').value;
	var categoryid = document.getElementById('category_select').value;  //alert(countryid + categoryid)
	$.ajax({
        type: "POST",
        url: "index.php",
        data: {
			 page			: 'changecountrycategory',
			 countryid		: countryid,
			 categoryid     : categoryid
    	},
        success: function(result){
            /* add here what to do on success */
            //alert(result);
        	if (result == 'fail') {
				alert("Failed to show points");			
			} 
        	else
        	{ //alert(result)
        		$('#point_select').html(result);
        	}
        }
    });
	
}

function changecountrycategoryforedit(countryid,categoryid,pointid)
{
//	var countryid = document.getElementById('country_select').value;
//	var categoryid = document.getElementById('category_select').value;  //alert(countryid + categoryid)
	$.ajax({
        type: "POST",
        url: "index.php",
        data: {
			page			: 'changecountrycategory',
			 countryid		: countryid,
			 categoryid     : categoryid,
			 pointid        : pointid
    	},
        success: function(result){
            /* add here what to do on success */
            //alert(result);
        	if (result == 'fail') {
				alert("Failed to show points");			
			} 
        	else
        	{ //alert(result)
            	$('#point_select').html(result);
        	}
        }
    });
	
}

// For model
function addPoint(tid)
{
	var country	 	 = document.tour_info_form.country_select.value; 
	var category	 = document.tour_info_form.category_select.value; 
	var point        = document.tour_info_form.point_select.value;
	var order        = document.tour_info_form.point_order.value;
	if(country == "0")
	{
		alert("Please select the country");
		return;
	}
	if(category == "0")
	{
		alert("Please select the category");
		return;
	}
	if(point == "0")
	{
		alert("Please select the point");
		return;
	}
	if (order == '')
	{
		alert("Please insert a order of point.");
		return;
	}
	$.ajax({
        type: "POST",
        url: "index.php",
        data: {
			 page			: 'addPointOnTour',
			 tid 			: tid,  
			 country_id		: country,
			 category_id    : category,
			 point_id		: point,
			 order          : order
    	},
        success: function(result){
            /* add here what to do on success */
            //alert(result);
        	if (result == 'fail') {
				alert("Failed to add point");			
			} else if(result == 'duplicate') {
				alert("Duplicate point");						
			} else if(result == 'orderduplicate') {
				alert("This order is in aleady.  Please insert another order.");						
			}else{ 
				//AddPoint(tid,result, country,point);
				$('#point_table').append(result);
				
				//$('#country_select').val('0');
				$('#category_select').val('0');
	        	$('#point_select').val('0');
	        	$('#point_order').val('');
			}

        	
        }
    });	
	
}

function AddPoint(tid,seq, country, point)
{
    var table = document.getElementById('point_table');

	
    
    // Insert a new row.
    var newRow = table.insertRow(table.rows.length);

    // 觳矆歆�TD
    var newCell = newRow.insertCell(0);
    newCell.innerHTML = seq;

    // 毵岇暯 TD臧�霊愱皽 鞚挫儊 鞛堨潉 瓴届毎
    newCell = newRow.insertCell(1);
    newCell.innerHTML = "<?php echo geCountryName(" + country +")?>";

    newCell = newRow.insertCell(2);
    newCell.innerHTML = point;

    newCell = newRow.insertCell(3);
    newCell.innerHTML = "<a href='javascript:edit_model(\"" + tid + "\" ,\"" + seq  + "\");'><img src='/backend/images/edit.png' alt='edit' title='edit'/></a>" + 
    					"<a href='javascript:delete_model(\"" + tid + "\" ,\"" + seq + "\");'><img src='/backend/images/delete.png' alt='delete' title='delete'/></a>";
} 


var sel_cid = 0, sel_catid = 0,sel_pid = 0, sel_seq = 0, sel_idx = 0;
function edit_model(cid,catid,pid,seq , idx) {
	changecountrycategoryforedit(cid,catid,pid);
	$('#country_select').val(cid);
	$('#category_select').val(catid);
	
	
	
	$('#point_select').val(pid); 
	
	$('#point_order').val(seq);
	$('#add_button').css("display","none");
	$('#update_button').css("display","block");
	
	sel_cid = cid;
	sel_catid = catid
	sel_pid = pid;
	sel_seq = seq;
	sel_idx = idx;

}

function update_model(tid)
{
	var country	 = document.tour_info_form.country_select.value; 
	var category = document.tour_info_form.category_select.value; 
	var point    = document.tour_info_form.point_select.value;
	var order    = document.tour_info_form.point_order.value;
	if ( sel_idx == "0" )
	{
		alert("Fail to update.");
		return;
	}
	if(country == "0")
	{
		alert("Please select the country");
		return;
	}
	if(category == "0")
	{
		alert("Please select the category");
		return;
	}
	if(point == "0")
	{
		alert("Please select the point");
		return;
	}
	if (order == '')
	{
		alert("Please insert a order of point.");
		return;
	}
	$.ajax({
        type: "POST",
        url: "index.php",
        data: {
			 page			: 'updatePointOnTour',
			 tid 			: tid,  
			 country_id		: country,
			 category_id    : category,
			 point_id		: point,
			 order          : order,
			 idx            : sel_idx
    	},
        success: function(result){
            /* add here what to do on success */
            //alert(result);
        	if (result == 'fail') {
				alert("Failed to add point");			
			} else if(result == 'duplicate') {
				alert("Duplicate point");						
			} else if(result == 'orderduplicate') {
				alert("This order is in aleady.  Please insert another order.");						
			}else{ 
				//AddPoint(tid,result, country,point);
				//$('#point_table').refresh();
				
				var table = document.getElementById('point_table');
				
				for (r = 0; r < table.rows.length; r ++) {
					if (table.rows[r].cells[0].innerHTML == sel_seq) { 
						table.rows[r].innerHTML  = result;
						break;
					}
				}
				
				
				//$('#country_select').val('0');
				$('#category_select').val('0');
	        	$('#point_select').val('0');
	        	$('#point_order').val('');
	        	
	        	$('#add_button').css("display","block");
	        	$('#update_button').css("display","none");
			}

        	
        }
    });
	
	
}
function update_model_cancel()
{
	//$('#country_select').val('0');
	$('#category_select').val('0');
	$('#point_select').val('0');
	$('#point_order').val('');

	$('#add_button').css("display","block");
	$('#update_button').css("display","none");
}

function delete_model(cid, catid, pid, seq , idx) {

	var confirm_delete= confirm("Are you sure you want to delete this point from tour?");

	if(confirm_delete == false) return;

	var table = document.getElementById('point_table');
	for (r = 0; r < table.rows.length; r ++) {
		if (table.rows[r].cells[0].innerHTML == seq) {
			model    =  table.rows[r].cells[1].innerHTML ;
			break;
		}
	}

	$.ajax({
        type: "POST",
        url: "index.php",
        data: {
			 page			: 'deletePointOnTour',
			 cuntry_id 		: cid,
			 category_id    : catid,
			 point_id 		: pid, 
			 order			: seq,
			 idx            :idx
    	},
        success: function(result){
            /* add here what to do on success */
            //alert(result);
        	if (result == 'fail') {
				alert("Failed to delete point");								
			}else{
				deletemodel(seq);
			}

        	//$('#country_select').val('0');
        	$('#category_select').val('0');
        	$('#point_select').val('0');
        	$('#point_order').val('');

        	$('#add_button').css("display","block");
			$('#update_button').css("display","none");
        }
    });
}

function deletemodel(seq){
	
	var table = document.getElementById('point_table');
	
	for (r = 0; r < table.rows.length; r ++) {
		if (table.rows[r].cells[0].innerHTML == seq) {
			table.deleteRow(r);	
			break;
		}
	}
	
}