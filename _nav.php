<?php
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)
{
  $loggedin=true;
} 
else {
  $loggedin=false;
}

echo  '   <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
<a class="navbar-brand" href="#">
    <div class="logo">
        <img src="logo.jpg" alt="Healthcare Logo"><tb> </tb>HealthSync
    </div>
</a>
<button type="button" class="btn btn-primary ml-auto mr-2" data-toggle="modal" data-target="#checkboxModal">
      Daily Checkbox
    </button>';
        if (!$loggedin) {
          echo     '<li  style-type: none; class="nav-item">
          <a class="nav-link" href="/loginsys/login.php">Login</a>
          </li>
          <li  list-style-type: none; class="nav-item">
          <a class="nav-link" href="/loginsys/signup.php">SignUp</a>
          </li>';
        }
        if($loggedin){
          echo '<li class="nav-item">
          <a class="nav-link" href="/loginsys/logout.php">LogOut</a>
          </li>';
        }
        
echo   '</ul>
      
    </div>
  </div>
</nav>';

?>