  <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            
<?php if($_SESSION['role']=="user"){?>     
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="dashboard.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Mahasiswa</p>
                </a>
              </li>
            </ul>
            <?php }?>
<?php if($_SESSION['role']=="admin"){?>            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="laporan_mahasiswa.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan Data Mahasiswa</p>
                </a>
              </li>
            </ul>
            <?php }?>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logout</p>
                </a>
              </li>
            </ul>
          </li>
          
        </ul>
      </nav>