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
  <h3 class="panel-title">Welcome to Plan Your Travel - User Mode</h3>
 </div>
 <div class="panel-body">
  <h1>Welcome - <?php echo $_SESSION["usermodename"];?></h1>


  <br>
    <a href="logout.php">Logout</a>
</div>
 </div>
</div>
</html>
