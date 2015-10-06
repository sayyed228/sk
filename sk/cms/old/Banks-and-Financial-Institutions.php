<!DOCTYPE html>
<html lang="en">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta content="IE=edge" http-equiv="X-UA-Compatible" />
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>Page structure</title>
<meta content="" name="description" />
<meta content="" name="keywords" />
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="style.css" rel="stylesheet" />
<!--<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"> -->
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<style type="text/css">
{
 -webkit-backface-visibility: hidden;
}
</style>
<script type="text/javascript">


</script>
</head>
<body>

<!-- Button trigger modal -->

<div class="container-fluid">
  <div class="navbar navbar-default" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="#">Project name</a> </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#" data-toggle="collapse" data-target=".navbar-collapse">Home</a></li>
          <li><a href="#" data-toggle="collapse" data-target=".navbar-collapse">OUR PARTNERS</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
       <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddPopUp" style="margin-bottom:15px;">Add New</button>
       <div class="clearfix"></div>
	  <div class="panel panel-default">
     
          <div class="panel-heading">
           Banks and Financial Institutions
           
         </div>
          <div class="panel-body">
            
            <?php
	include_once 'dbconnect.php'; 
		?>
      <?php
		$sql = ("SELECT * FROM banks_and_financial_institutions");
		
		$result = mysql_query($sql);
		
		echo('<table class="table" id="Banks_and_Financial_Institutions_table"> ');
		while($row = mysql_fetch_array($result))
		{
		echo('<tr>');
		//echo('<td><input class="form-control Banks_and_Financial_Institutions" type="text" value="'.$row['Banks and Financial Institutions'].'" /></td>');
		echo('<td>'."asdf".'</td>');
		echo('<td class="Banks_and_Financial_Institutions">'.$row['Name'].'</td>');
		echo('<td class="text-right">
		<input  class="btn btn-primary updateConfirmation" data-toggle="modal" data-target="#Update" type="button" id="'.$row['id'].'" value="Update"/>         &nbsp;&nbsp;
		<input  class="btn btn-danger deleteConfirmation" data-toggle="modal" data-target="#Delete" type="button" id="'.$row['id'].'" value="Delete"/></td>');
		echo('</tr>');
		}
		echo('</table>');
		?>
            
          </div>
        </div>
    </div>
  </div>
</div>

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
        <input type="text" value="asdfasdfasdf" class="form-control" id="Add" placeholder="Add Banks and Financial Institutions"/>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-primary" id="Add_Banks_and_Financial_Institutions" data-dismiss="modal">Add</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript"  src="js/jquery.min.js"></script> 
<script type="text/javascript"  src="js/bootstrap.min.js"></script> 
<script type="text/javascript"  src="js/custom.js"></script> 

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
        var Banks_and_Financial_Institutions = document.getElementById('Banks_and_Financial_Institutions').value
        aa.open("GET", "Banks-and-Financial-Institutions-update.php?id=" + id + "&Banks_and_Financial_Institutions=" + Banks_and_Financial_Institutions, true)
        aa.send()
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

        aa.open("GET", "Banks-and-Financial-Institutions-delete.php?id=" + id, true)
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
       // alert(Add)
		
        aa.open("GET", "Banks-and-Financial-Institutions-add.php?Add=" + Add, true)
        aa.send()
		 setTimeout(function(){
  	  location.reload();
	 }, 800);
	
	
    }




    $('.updateConfirmation , .deleteConfirmation').click(function () {
        var id = $(this).attr('id')
        var Banks_and_Financial_Institutions = $(this).closest('tr').find('.Banks_and_Financial_Institutions').text()
        $('#id').val(id)
        $('#Banks_and_Financial_Institutions').val(Banks_and_Financial_Institutions)
        $('#id_delete').val(id)
        $('#Banks_and_Financial_Institutions_delete').val(Banks_and_Financial_Institutions)
        //alert(id)
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


  var tables = $('#Banks_and_Financial_Institutions_table') 
    var table = tables[tables.length - 1];
    var rows = table.rows;
    for(var i = 0, td; i < rows.length; i++){
        td = document.createElement('td');
        td.appendChild(document.createTextNode(i + 1));
        rows[i].insertBefore(td, rows[i].firstChild);
    }


});
</script>



</body>
</html>
