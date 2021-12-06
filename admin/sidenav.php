
  <nav id="sidebar" class='mx-lt-7 bg-dark' style="top:0cm;position:absolute; padding:38px 0px 70px 9px;;">
  <div class="container-fluid mt-6" style="padding: 0">
  <h4 class="text-white" style="left:1cm; position:relative;">ADMIN</h4>

    
    
    <div class="sidebar-list bg-dark " style="background-color: #071320;">
    
            <a class="nav-item " href="index.php?page=home" style="background-color: #343a40;padding:20px 77px 20px 20px;">
              <i class="fa fa-tachometer-alt"></i>
              Dashboard
            </a>
        
            
        
        
            <a class="nav-item nav-productlist" href="index.php?page=productlist" style="background-color: #343a40;padding:20px 77px 20px 20px;">
              <i class="fa fa-list nav-productlist"></i>
              Product List
            </a>
            <a class="nav-item nav-orders" href="index.php?page=orders" style="background-color: #343a40;padding:20px 77px 20px 20px;">
              <i class="fa fa-book"></i>
              Orders
            </a>
            <a class="nav-item" href="index.php?page=maintenance" style="background-color: #343a40;padding:20px 77px 20px 20px;">
              <i class="fa fa-cogs nav-maintenance"></i>
              Manage
            </a>
            
            <a class="nav-item nav-adduser nav-edituser nav-manageuser" href="index.php?page=manageuser" style="background-color: #343a40;padding:20px 77px 20px 20px;">
              <i class="fa fa-users"></i>
                Users<br>
              </a>
            </div>
          
        
        
        
        
        
            
    </div>

  </div>
</nav>

<script>
  if('<?php echo isset($_GET['page']) ?>' == 1)
    $('.nav-<?php echo $_GET['page'] ?>').addClass('active')
</script>
    
    