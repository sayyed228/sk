<!DOCTYPE html>
<html lang="en">
<head>
<title>S K Legal Associates : Advocate &amp; Legal Consultants</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<!-- 
Urbanic Template 
http://www.templatemo.com/preview/templatemo_395_urbanic 
-->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--<link rel="shortcut icon" href="PUT YOUR FAVICON HERE">-->

<!-- Google Web Font Embed -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic" rel="stylesheet" type="text/css">

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">

<!-- Custom styles for this template -->
<link href="js/colorbox/colorbox.css"  rel="stylesheet" type="text/css">
<link href="css/templatemo_style.css"  rel="stylesheet" type="text/css">
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

<style>
.what-we-do h3 {
	font-size: 15px;
	padding: 20px 0px;
	height: 60px;
	border: #ccc solid 0px;
	display: inline-block;
	width: 100%;
	text-align: center;
}
.what-we-do p {
	border: #ccc solid 0px;
	height: 220px;
	padding: 5px;
	margin-top: 10px;
	overflow: hidden
}
.profile1 p {
	display: none;
}
</style>
</head>

<body>
<div class="templatemo-top-bar" id="templatemo-top">
  <div class="container">
    <div class="subheader">
      <div id="phone" class="pull-left"> <i class="fa fa-phone fa-lg"></i>+ 91-22-4002 3089</div>
      <div id="email" class="pull-right HideOnMobile"> <i class="fa fa-envelope"></i> sklegal@sklegalassociates.com </div>
    </div>
  </div>
</div>
<div class="templatemo-top-menu">
  <div class="container"> 
    <!-- Static navbar -->
    <div class="navbar navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a href="#" class="navbar-brand"><!-- <img src="images/logo3.png"  width="70%" height="auto" alt="Urbanic free HTML5 template" title="Urbanic HTML5 Template" />--></a> </div>
        <div class="navbar-collapse collapse" id="templatemo-nav-bar">
          <ul class="nav navbar-nav navbar-right" style="margin-top: 40px;">
            <li class="active"><a href="#templatemo-top">HOME</a></li>
            <li><a href="#wedo">WHAT WE DO</a></li>
            <li><a href="#teammembers">TEAM MEMBERS</a></li>
            <li><a href="#OUR-PARTNERS">OUR PARTNERS</a></li>
            <li><a href="#templatemo-contact">CONTACT</a></li>
            <li><a href="#offices">ASSOCIATE OFFICES</a></li>
          </ul>
        </div>
        <!--/.nav-collapse --> 
      </div>
      <!--/.container-fluid --> 
    </div>
    <!--/.navbar --> 
  </div>
  <!-- /container --> 
</div>

<!-- Carousel -->
<div class="container-fluid">
  <div id="myCarousel" class="carousel slide" data-ride="carousel"> 
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="item active"> <img src="images/law2.jpg" class="img-fluid" alt=""/>
        <div class="container"> </div>
      </div>
      <div class="item"> <img src="images/law3.jpg" class="img-fluid"  alt=""/>
        <div class="container"> </div>
      </div>
      <div class="item"> <img src="images/law4.jpg" class="img-fluid"  alt=""/>
        <div class="container"> </div>
      </div>
    </div>
    <a class="" href="#myCarousel" role="button" data-slide="prev"> <img src="images/arrow-L-48.png" alt="" style="position:absolute;top:200px;left:15px;"/> </a> <a class="" href="#myCarousel" role="button" data-slide="next"> <img src="images/arrow-R-48.png" alt=""  style="position:absolute;top:200px;right:15px;"/> </a> </div>
  <!-- /.carousel --> 
  
</div>
<!-- /#templatemo-carousel -->

<div class="templatemo-welcome" id="templatemo-welcome">
  <div class="container">
    <div class="templatemo-slogan text-center"> <span class="txt_darkgrey">INTRODUCTION </span>
      <p class="txt_slogan"></p>
      <div class="row para">
        <div class="col-sm-12">
          <p>S. K. Legal Associates is a professionally managed law firm committed to provide the best legal services to its clients by understanding and analyzing the issues  and finding effective and practical  commercial solutions in consonance with the applicable laws. Our strength lies in our skills, specialized professional experience, practical approach, timely delivery and commitment to serve our clients. . 
We are having the sufficientinfrastructure, competent and knowledgeable Advocates, Solicitors and Advocate on Record, Court clerks for serving our clients, lists whereof are given herein.

Our office is strategically located in South Bombay, close to High Court, City Civil Court, Bombay Stock Exchange, Sub-Registrar of Assurances, Bombay Stamp Office and Reserve Bank of India and also within the periphery of Small Causes Court, Co-Operative Court, and  DRTs and DRAT , Mumbai.
</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container todo" id="wedo">
  <div class="row">
    <div class="col-sm-12 text-center control">
      <h1>What we do</h1>
      <p>We are specialized in the following areas of practice and provide a comprehensive range of services across a broad spectrum of transactions:</p>
    </div>
  </div>
 
  
      <div class="row what-we-do">
            <?php
                include("dbconnect.php");
				$query  = "SELECT id, Title, Description FROM what_we_do_list ORDER BY id ASC";
				$result = mysql_query($query);
				while($row = mysql_fetch_array($result, MYSQL_ASSOC))
				{
					
				$Title = stripslashes($row['Title']);
				$Description = stripslashes($row['Description']);
				
				?>
                
                 <div class="col-md-4">
      <div class="templatemo-service-item">
        <h3 class="templatemo-service-item-header"><?php echo $Title; ?></h3>
        <p><?php echo $Description; ?></p>
      </div>
    </div>
    <?php } ?>
                
 </div>
</div>
<div id="teammembers"  style="padding-top:50px;">
  <div class="container">
    <div class="row">
   
           
           
      <div class="col-sm-12 text-center">
        <h1>ASSOCIATED ADVOCATES</h1>
        <p>Associates of the firm collectively have wide-ranging professional experience and they come from good social and academic backgrounds.</p>
      </div>
      <div class="col-sm-12">
        <h1>Team Members</h1>
      </div>
      <div class="col-sm-4">
        <div class="profile" id="tm-detail-1">
          <h2>Mr. S. B. Pawar, Advocate</h2>
          <p>He is graduated from University of Bombay in Arts (Economic & Politics) and Law. After completion of Law he was associated with Apex Juris, Advocates & Solicitors, one of the growing and reputed Solicitors firm of Mumbai. During the said period he got experience of litigation in civil and criminal courts. He has appeared in various matters in the High Court, D.R.T., Bombay City Civil Court, Special Court, Sessions Court and Magistrate Court and has got experience of property litigation and documentation and various Writs including Public Interest Litigation, Company matters, and matters relating to recovery and eviction proceedings, matters relating to Government and Engineering contracts and Arbitration matters.

He has been consultant to various Builders & Developers for the purpose of documentation, stamp-duty and registration of documents. He is well versed with Arbitration matters, Property matters (litigations, convincing and documentations), banking matters (Recovery , disputes & documentations), infrastructure projects disputes, Revenue Matters, Consumer matters, Municipal laws, Rent Act, Maharashtra Co-operative Societies Act, Assessment of Property Tax viz. Land Under Construction, Assessment matters etc. His clientele includes some of the leading Developers, Builders, Gov. Contractors and film personalities.</p>
        </div>
      </div>
      <div class="col-sm-8">
       <?php
                include("dbconnect.php");
				$query  = "SELECT id, Name , Description FROM sk_partners ORDER BY listorder ASC";
				$result = mysql_query($query);
				while($row = mysql_fetch_array($result, MYSQL_ASSOC))
				{
					
				$Name = stripslashes($row['Name']);
				$Description = stripslashes($row['Description']);
				
				?>
         <div class="col-sm-6">
              <div class="profile1"> <a>
            <h2><?php echo $Name; ?></h2>
            </a>
            <p><?php echo $Description; ?></p>
          </div>
          </div>
          <?php } ?>
       
   </div>
  </div>


<!-- /#templatemo-Partners -->

<div class="templatemo-partners" id="OUR-PARTNERS" >
  <div class="container">
    <div class="row">
      <div class="templatemo-line-header" >
        <div class="text-center">
          <hr class="team_hr team_hr_left hr_gray"/>
          <span class="txt_darkgrey">OUR PARTNERS</span>
          <hr class="team_hr team_hr_right hr_gray" />
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="container">
       
        <div class="row">
          <div class="col-sm-12  text-center">
            <h2>Banks and Financial Institutions:</h2>
          </div>
          </div>
          <div class="row partner">
            <?php
                include("dbconnect.php");
				$query  = "SELECT id, Name FROM banks_and_financial_institutions ORDER BY listorder ASC";
				$result = mysql_query($query);
				while($row = mysql_fetch_array($result, MYSQL_ASSOC))
				{
					
				$Name = stripslashes($row['Name']);
				
				?>
           <div class=" col-sm-4">
         
            <p><?php echo $Name; ?></p>
             
          </div>
          <?php } ?>
          </div>
          
        </div>
        
      </div>
    
    </div>
  </div>
</div>
<!-- /#templatemo-Partners --> 

<!--Contact starts here -->

<div id="templatemo-contact">
  <div class="container">
    <div class="row">
      <div class="templatemo-line-header head_contact">
        <div class="text-center">
          <hr class="team_hr team_hr_left hr_gray"/>
          <span class="txt_darkgrey">CONTACT US</span>
          <hr class="team_hr team_hr_right hr_gray"/>
        </div>
      </div>
      <div class="col-md-12">
        <div style="margin-bottom:15px;">
          <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=+77+%2F+79,+Janmabhoomi+Marg&amp;aq=&amp;sll=21.125498,81.914063&amp;sspn=56.068323,93.076172&amp;ie=UTF8&amp;hq=&amp;hnear=Janmabhoomi+Marg,+Kala+Ghoda,+Fort,+Mumbai,+Maharashtra&amp;ll=18.933515,72.833613&amp;spn=0.001799,0.00284&amp;t=m&amp;z=14&amp;output=embed"></iframe>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="col-md-6 contact_right">
        <form class="form-horizontal" action="#">
          <div class="form-group">
            <input type="email" class="form-control" placeholder="Your Name..." maxlength="40" />
          </div>
          <div class="form-group">
            <input type="email" class="form-control" placeholder="Your Email..." maxlength="40" />
          </div>
          <div class="form-group">
            <textarea  class="form-control" style="height: 130px;" placeholder="Write down your message..."></textarea>
          </div>
          <button type="submit" class="btn btn-orange pull-right">SEND</button>
        </form>
      </div>
      <div class="col-md-6 contact_right">
        <h3>Mumbai </h3>
        <p><i class="fa fa-map-marker fa-lg"></i> Mumbai Office:  201-B, M. B. House, 2nd Floor, 77 / 79, Janmabhoomi Marg, Fort, </p>
        <p> Mumbai - 400 001, INDIA</p>
        <p><i class="fa fa-phone fa-lg"></i> + 91-22-4002 3089, 4002 3090 </p>
        <p><i class="fa fa-fax fa-lg"></i> Tele Fax : + 91-22-4002 3098</p>
        <p><i class="fa fa-envelope"></i> Email : sklegal@sklegalassociates.com</p>
        <h3>Delhi </h3>
        <p><i class="fa fa-map-marker fa-lg"></i> 1 FS CS 53, Ansal Plaza, Corporate Office & Suits </p>
        <p> Vaishali Sec. 1 GZB UP - 201 010 </p>
        <p><i class="fa fa-phone fa-lg"></i> Phone No : 011-47065888</p>
        <p><i class="fa fa-fax fa-lg"></i> Tele Fax : 011-47051888</p>
        <p><i class="fa fa fa-globe fa-lg"></i> Website:  www.sklegalassociates.com</p>
      </div>
    </div>
    <!-- /.row --> 
  </div>
  <!-- /.container --> 
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-12 text-center">
      <h2>Associate Offices</h2>
    </div>
  </div>
</div>
<div>&nbsp;</div>
<div>&nbsp;</div>
<div class="container" id="offices">
  <div class="row address">
    <div class="col-sm-3 text-left">
      <h4>Pune Office address:</h4>
      <p>Mr. Madhukar M. Mokashi, Advocate,</p>
      <p>S. No. 16/1A, Ustad Hamid Khan Building,</p>
      <p>Near Acharya Society, Warje Naka(old),</p>
      <p>Warje, Pune -411058.</p>
      <p>Phone:- 020-25231522</p>
      <p>Mobile:- 0-9422031063</p>
    </div>
    <div class="col-sm-3 text-left">
      <h4>Chennai  Office address:</h4>
      <p>Mr. U. Ashok Kumar,</p>
      <p>Mrs. U. Priyadarshini</p>
      <p>Advocates</p>
      <p>2/784, 1st Street, Kazura Garden,</p>
      <p>Neelankarai,</p>
      <p>Chennai – 600 041</p>
    </div>
    <div class="col-sm-3 text-left">
      <h4>Kolkata  Office address:</h4>
      <p>Mr,Soudip Palchoudhary,</p>
      <p>Advocate,</p>
      <p>10 K S Roy Road,</p>
      <p>Kolkata – 700 001.</p>
    </div>
    <div class="col-sm-3 text-left">
      <h4>Bengaluru  Office address:</h4>
      <p> Mr.K. Prashant Kumar,</p>
      <p>Advocate,</p>
      <p>739, Cellar Floor,</p>
      <p>60th Cross, Near Bhashyam Circle,</p>
      <p>5th Block,</p>
      <p>Rajaji Nagar,</p>
      <p>Bangalore – 560 010</p>
      <p>Email : prashanthkumarkavoor@gmail.com</p>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-3 text-left">
      <h4>Hyderabad Office address:</h4>
      <p>Mr. Laxminarayana,</p>
      <p>Advocate,</p>
      <p>Flat No.203, Saikrishna Residency,</p>
      <p>Aravindnagar</p>
      <p>Domalguda,</p>
      <p>Hydrabad – 500 029</p>
      <p>Tel: 040 66626496</p>
      <p>Email: laxminarayana_adv@yahoo.co.in</p>
    </div>
    <div class="col-sm-3 text-left">
      <h4>Kochi Office Address:</h4>
      <p>Mr.Abu Mathew,</p>
      <p>Advocate,</p>
      <p>39/4367-J, 2nd Floor,</p>
      <p>Cherry’s Building,</p>
      <p>Manikkiri Building,</p>
      <p>Ernakulam South,</p>
      <p>Kochi - 16</p>
    </div>
    <div class="col-sm-3 text-left">
      <h4>Kozhikode Office Address:</h4>
      <p>Mr. Deepu B.V,</p>
      <p>Advocate,</p>
      <p>Puthiyedath  Arcade</p>
      <p>Kozhikode</p>
      <p>Kerala -673006</p>
      <p>Mobile:  +919847345764</p>
    </div>
    <div class="col-sm-3 text-left">
      <h4>Jaipur Office Address:</h4>
      <p>Mr.  OM Prakash  Pareek,</p>
      <p>Advocate:</p>
      <p>A -9 Gyatri Nagar Sodala</p>
      <p>Jaipur, Rajesthan.</p>
      <p>M- 9314504587</p>
      <p>M- 9782718281</p>
    </div>
  </div>
</div>

<!-- /#templatemo-contact -->

<div class="templatemo-footer" >
  <div class="container">
    <div class="row">
      <div class="text-center">
        <div class="footer_container">
          <ul class="list-inline">
            <li> <a href="https://www.facebook.com/sklegalassociates.advocates "> <span class="social-icon-fb"></span> </a> </li>
            <li> <a href="https://plus.google.com/100807991705415785660/"> <span class="social-icon-twitter"></span> </a> </li>
            <li> <a href="https://www.linkedin.com/company/s.k.-legal-associates?trk=nav_account_sub_nav_company_admin"> <span class="social-icon-linkedin"></span> </a> </li>
          </ul>
          <div class="height30"></div>
          <a class="btn btn-lg btn-orange" href="#" role="button" id="btn-back-to-top">Back To Top</a>
          <div class="height30"></div>
        </div>
        <div class="footer_bottom_content"> Copyright All rights reserved © 2015 </div>
      </div>
    </div>
  </div>
</div>

<!-- --> 

<!-- DISCLAIMER -->
<div class="modal fade" id="DISCLAIMER" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">DISCLAIMER</h4>
      </div>
      <div class="modal-body">
        <p>By accessing this website, the User expressly acknowledges that:
          
          » This website will not be construed as an advertisement, personal communication, solicitation, invitation or inducement of any nature whatsoever, by the firm, its partner or associates, to promote its services or solicit clients.
          
          » The User intends to obtain information made available on this website solely for his/her personal information and use.
          
          » The User is accessing this website out of his own volition and that the firm will not be liable for the consequences of any reliance placed on the information made available on this website, its use, transmission, distribution or dissemination in any manner. </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">ACCEPT </button>
      </div>
    </div>
  </div>
</div>

<!-- --> 

<script src="js/jquery.min.js" type="text/javascript"></script> 
<script src="js/bootstrap.min.js"  type="text/javascript"></script> 
<script src="js/stickUp.min.js"  type="text/javascript"></script> 
<script src="js/colorbox/jquery.colorbox-min.js"  type="text/javascript"></script> 
<script src="js/templatemo_script.js"  type="text/javascript"></script> 
<script>


$(document).ready(function(e) {
	
	
	  $(window).load(function(){
        $('#DISCLAIMER').modal('show');
    });
	

	
	
 $('#tm-detail-1').show();
$('#tm1').click(function(){
	$('.profile').hide();
    $('#tm-detail-1').show();

 });


$('#tm2').click(function(){
	$('.profile').hide();
    $('#tm-detail-2').show();
 });



$('#tm3').click(function(){
	$('.profile').hide();
    $('#tm-detail-3').show();
 });

$('#tm4').click(function(){
	$('.profile').hide();
    $('#tm-detail-4').show();
 });



$('#tm5').click(function(){
	$('.profile').hide();
    $('#tm-detail-5').show();
 });

$('#tm6').click(function(){
	$('.profile').hide();
    $('#tm-detail-6').show();
 });


$('#tm7').click(function(){
	$('.profile').hide();
    $('#tm-detail-7').show();
 });



$('#tm8').click(function(){
	$('.profile').hide();
    $('#tm-detail-8').show();
 });
	
	

$('#tm9').click(function(){
	$('.profile').hide();
    $('#tm-detail-9').show();
 });
	

$('#tm10').click(function(){
	$('.profile').hide();
    $('#tm-detail-10').show();
 });	
	


$('#tm11').click(function(){
	$('.profile').hide();
    $('#tm-detail-11').show();
 });



$('#tm12').click(function(){
	$('.profile').hide();
    $('#tm-detail-12').show();
 });

	



$('#tm13').click(function(){
	$('.profile').hide();
    $('#tm-detail-13').show();
 });


$('#tm14').click(function(){
	$('.profile').hide();
    $('#tm-detail-14').show();
 });




$('#tm15').click(function(){
	$('.profile').hide();
    $('#tm-detail-15').show();
 });






	
});





    
	//alert($('#mydiv').text().length)
	
$(".what-we-do p ").hover(
  function() {
    $( this).animate({scrollTop: 500}, 1000);
	//alert('asdf')
  }, function() {
    $( this).animate({scrollTop: 0}, 1000);
  }
);



$('.profile1').click(function() {
	
	var ProfileHeading = $(this).find('h2').text();
	var ProfileDiscription = $(this).find('p').text();
	
	//alert(ProfileHeading)
	
	$('.profile h2').text(ProfileHeading)
	$('.profile p').text(ProfileDiscription)
	
	});






</script>
</body>
</html>