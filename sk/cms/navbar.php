<div class="container">
 <div class="row">
  <div class="col-sm-12 text-right">
    hi' <?php echo $userRow['username']; ?>
  </div>
 </div>
</div>
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="#">SK</a> </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li><a href="#">Home</a></li>
        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="client-list.php">Client Lists</a></li>
            <li><a href="sk-partners.php">Partners</a></li>
            <li><a href="what-we-do.php">what-we-do</a></li>
            <li><a href="#">Real Estate Companies</a></li>
          </ul>
        </li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Change Password</a></li>
            <li><a href="logout.php?logout">Sign Out</a></li>
          </ul>
        </li>
      </ul>
      
    </div>
    <!--/.nav-collapse --> 
  </div>
  <!--/.container-fluid --> 
</nav>
