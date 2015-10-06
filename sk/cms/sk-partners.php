<?php include_once 'session.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Welcome -<?php echo $userRow['email']; ?></title>

<?php include_once 'header.php'; ?>

<style>

</style>
<script type="text/javascript">
 function slideout(){
  setTimeout(function(){
  $("#response").slideUp("slow", function () {
      });
    
}, 2000);}
	
    $("#response").hide();
	$(function() {
	$("#list ul").sortable({ opacity: 0.8, cursor: 'move', update: function() {
			
			var order = $(this).sortable("serialize") + '&update=update'; 
			$.post("sk-partners-update-list.php", order, function(theResponse){
				$("#response").html(theResponse);
				$("#response").slideDown('slow');
				slideout();
			}); 															 
		}								  
		});
	});

</script>
</head>
<body>
<?php  require_once('navbar.php');?>
<!-- -->

  
  
 

<div class="container">
 <div class="pull-left"><h2>asdfcasdfads <!--LIST OF EXISTING CLIENTS--></h2></div>
 <div class="pull-right" style="margin-bottom:-15px;">
  <button type="button" class="btn btn-primary pull-left" data-toggle="modal" data-target="#AddPopUp"><i class="fa fa-plus-circle"></i> Add New</button>
 </div>
</div>

<div id="container" class="container" style="overflow:auto; height:500px;">

  <div class="clearfix"></div>
  <div id="list">
    <div id="response"> </div>
    
    <ul>
      <?php
                include("dbconnect.php");
				$query  = "SELECT id, Name, Description FROM sk_partners ORDER BY listorder ASC";
				$result = mysql_query($query);
				while($row = mysql_fetch_array($result, MYSQL_ASSOC))
				{
					
				$id = stripslashes($row['id']);
				$Name = stripslashes($row['Name']);
				$Description = stripslashes($row['Description']);
				
				?>
      <li id="arrayorder_<?php echo $id ?>"> <i class="fa fa-arrows pointer"></i>&nbsp; 
      <span class="Banks_and_Financial_Institutions"><?php echo $Name; ?></span><br/>
      <textarea class="Banks_and_Financial_Institutions" style="margin-top:20px; height:100px; width:400px;padding:10px;"><?php echo $Description; ?></textarea>
        <input  class="btn btn-primary updateConfirmation pull-right marginTop_6 marginLeft" data-toggle="modal" data-target="#Update" type="button" id="<?php echo $id ?>" value="Update"/>
        &nbsp;&nbsp;
        <input  class="btn btn-danger deleteConfirmation pull-right marginTop_6" data-toggle="modal" data-target="#Delete" type="button" id="<?php echo $id ?>" value="Delete"/>
        <div class="clear"></div>
      </li>
      <?php } ?>
    </ul>
  </div>
</div>

<!--  


<!-- Button trigger modal --> 

<!-- --> 

<!-- Button trigger modal --> 

<!-- Update Modal -->
<div class="modal fade" id="Update" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Update Banks and Financial Institutions</h4>
      </div>
      <div class="modal-body">
        <input type="text" class="form-control" value="" id="Banks_and_Financial_Institutions"/>
        <br/>
        <textarea id="description" class="form-control" style="height:400px;"></textarea>
        <br>
        <input type="text" class="form-control" value="" id="id" disabled />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary update" data-dismiss="modal">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Delete Modal  -->
<div class="modal fade" id="Delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Update Banks and Financial Institutions</h4>
      </div>
      <div class="modal-body">
        <h2 class="text-center">Are you sure you want to delete this ?</h2>
        <input type="text" class="form-control" value="" id="Banks_and_Financial_Institutions_delete"/>
        <br>
        <input type="text" class="form-control" value="" id="id_delete" disabled />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-primary delete" data-dismiss="modal">Yes</button>
      </div>
    </div>
  </div>
</div>

<!-- Add Modal  -->
<div class="modal fade" id="AddPopUp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Banks and Financial Institutions</h4>
      </div>
      <div class="modal-body">
        <input type="text" value="" class="form-control" id="Add" placeholder="Add Banks and Financial Institutions"/>
          <br/>
        <textarea id="Adddescription" class="form-control" style="height:400px;"></textarea>
        <br>
        <input type="text" value="" class="form-control" id="listorder" placeholder=""/>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-primary" id="Add_Banks_and_Financial_Institutions" data-dismiss="modal">Add</button>
      </div>
    </div>
  </div>
</div>
<?php $highest_listorder = mysql_result(mysql_query("SELECT MAX(listorder)FROM sk_partners"), 0); 
                 
           
				 echo('<input type="hidden" id="highest_listorder" value="'.$highest_listorder.'"/>')  
				 ?>
<!-- --> 
<script type="text/javascript"  src="jquery.min.js"></script> 
<script>
$(document).ready(function (e) {






    function example() {
        if (window.XMLHttpRequest) {
            aa = new XMLHttpRequest();
        }

        aa.onreadystatechange = function () {
            if (aa.readyState == 4 && aa.status == 200) {
                document.getElementById('txthint').innerHTML = aa.responseText
            }
        }


        var id = document.getElementById('id').value
        var Name = document.getElementById('Banks_and_Financial_Institutions').value
		var description = document.getElementById('description').value
        aa.open("GET", "sk-partners-update.php?id=" + id + "&Name=" + Name + "&description=" + description, true)
		//alert(description)
        aa.send();
		setTimeout(function(){
  	  location.reload();
	 }, 800);
    }


    /**  Delete query excute here! **/

    function Delete_Banksand_Financial_Institutions() {
        if (window.XMLHttpRequest) {
            aa = new XMLHttpRequest();
        }

        aa.onreadystatechange = function () {
            if (aa.readyState == 4 && aa.status == 200) {
                document.getElementById('txthint').innerHTML = aa.responseText
            }
        }

        var id = document.getElementById('id').value
        var Banks_and_Financial_Institutions = document.getElementById('Banks_and_Financial_Institutions').value

        aa.open("GET", "sk-partners-delete.php?id=" + id, true)
        aa.send()
		
			
		// 
		 
	setTimeout(function(){
  	  location.reload();
	 }, 800);
		
    }



    /**  Add query excute here! **/

    function Add_Banks_and_Financial_Institutions() {

        //alert('Add');
        if (window.XMLHttpRequest) {
            aa = new XMLHttpRequest();
        }

        aa.onreadystatechange = function () {
            if (aa.readyState == 4 && aa.status == 200) {
                document.getElementById('txthint').innerHTML = aa.responseText
            }
        }

        var Add = document.getElementById('Add').value
		var Adddescription = document.getElementById('Adddescription').value
		//Adddescription =
		var highest_listorder = document.getElementById('highest_listorder').value;
		var plusOne  = 1 ;
		var highest_listorder_plus = (+highest_listorder + +plusOne);
 		
        
		
		var listorder = document.getElementById('listorder').value= highest_listorder_plus
		//alert(listorder)
        aa.open("GET", "sk-partners-add.php?Add=" + Add + "&Adddescription=" + Adddescription + "&listorder=" + listorder, true)
		//alert(Adddescription)
        aa.send()
		 setTimeout(function(){
  	  location.reload();
	 }, 800);
	
	
    }




    $('.updateConfirmation , .deleteConfirmation').click(function () {
        var id = $(this).attr('id')
        var Banks_and_Financial_Institutions = $(this).prevAll('span').text();
		var Description = $(this).prevAll('textarea').text();
        $('#id').val(id)
        $('#Banks_and_Financial_Institutions').val(Banks_and_Financial_Institutions)
        $('#id_delete').val(id)
        $('#Banks_and_Financial_Institutions_delete').val(Banks_and_Financial_Institutions)
        $('#description').text(Description)
		//alert(Description)
    });

    $('.update').click(function () {
        example()
    });


    $('.delete').click(function () {
        Delete_Banksand_Financial_Institutions()
    });



    $('#Add_Banks_and_Financial_Institutions').click(function () {
        Add_Banks_and_Financial_Institutions();

    });
	
	


  var tables = $('#sk_partners') 
    var table = tables[tables.length - 1];
    var rows = table.rows;
    for(var i = 0, td; i < rows.length; i++){
        td = document.createElement('td');
        td.appendChild(document.createTextNode(i + 1));
        rows[i].insertBefore(td, rows[i].firstChild);
    }


});
</script> 

<!-- -->
</body>
</html>
