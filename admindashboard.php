<html>
<style>
.form_style
{
 width: auto;
 margin: 0 auto;
}
</style>
<!--THIS IS THE USER'S DASHBOARD/HOME PAGE -->
<div class="panel panel-default">
 <div class="panel-heading">
  <h3 class="panel-title">Welcome to Plan Your Travel - Admin Mode</h3>
 </div>
 <div class="panel-body">
   <br>
  <h1>Welcome Admin - <?php echo $_SESSION["adminmodename"];?></h1>

<div class="tab">
<button class="tablinks" onclick="openCity(event, 'accounts')">accounts</button>
<button class="tablinks" onclick="openCity(event, 'closedistances')">closedistances</button>
<button class="tablinks" onclick="openCity(event, 'home')">home</button>
</div>

<div id="accounts" class="tabcontent">
<h3>table: accounts</h3>
<p>table: accounts</p>
</div>

<div id="closedistances" class="tabcontent">
<h3>table: closedistances</h3>
<p>table: closedistances</p>
</div>

<div id="home" class="tabcontent">
<h3>table: home</h3>
<p>table: home</p>
</div>

  <br>
  <a href="logout.php">Logout</a>
 </div>
</div>
</html>
