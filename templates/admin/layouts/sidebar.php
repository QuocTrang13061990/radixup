

 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="<?php echo _WEB_HOST_ROOT_ADMIN; ?>" class="brand-link">
         <span class="brand-text font-weight-light text-uppercase">Radix Admin</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">
                 <img src="<?php echo _WEB_HOST_TEMPLATE_ADMIN; ?>/assets/img/anhdaidien.jpg" class="img-circle elevation-2" alt="User Image">
             </div>
             <div class="info">
                 <a href="#" class="d-block"><?php echo ucwords($userInfoLogin['fullname']); ?></a>
             </div>
         </div>

         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                 <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                 <li class="nav-item">
                     <a href="<?php echo _WEB_HOST_ROOT_ADMIN; ?>" class="nav-link">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p>Dashboards</p>
                     </a>
                 </li>
                 <li class="nav-item has-treeview">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fab fa-servicestack"></i>
                         <p>
                             Services
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="" class="nav-link">
                                 <i class="fas fa-caret-right nav-icon"></i>
                                 <p>Danh s??ch</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="" class="nav-link">
                                 <i class="fas fa-caret-right nav-icon"></i>
                                 <p>Th??m m???i</p>
                             </a>
                         </li>
                     </ul>
                 </li>
                 <li class="nav-item has-treeview">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fa fa-users"></i>
                         <!-- <i class="nav-icon fab fa-people-group"></i> -->
                         <p>
                             Groups
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="" class="nav-link">
                                 <i class="fas fa-caret-right nav-icon"></i>
                                 <p>Danh s??ch</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="" class="nav-link">
                                 <i class="fas fa-caret-right nav-icon"></i>
                                 <p>Th??m m???i</p>
                             </a>
                         </li>
                     </ul>
                 </li>
                 <li class="nav-item has-treeview">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-user"></i>
                         <p>
                             Users
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="" class="nav-link">
                                 <i class="fas fa-caret-right nav-icon"></i>
                                 <p>Danh s??ch</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="" class="nav-link">
                                 <i class="fas fa-caret-right nav-icon"></i>
                                 <p>Th??m m???i</p>
                             </a>
                         </li>
                     </ul>
                 </li>
                 <li class="nav-item has-treeview">
                     <a href="#" class="nav-link">
                         <!-- <i class="nav-icon fas fa-file"></i> -->
                         <i class="nav-icon fas fa-book"></i>
                         <p>
                             Pages
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="" class="nav-link">
                                 <i class="fas fa-caret-right nav-icon"></i>
                                 <p>Danh s??ch</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="" class="nav-link">
                                 <i class="fas fa-caret-right nav-icon"></i>
                                 <p>Th??m m???i</p>
                             </a>
                         </li>
                     </ul>
                 </li>
                 <li class="nav-item has-treeview">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-project-diagram"></i>
                         <p>
                            Portfolios
                            <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="" class="nav-link">
                                 <i class="fas fa-caret-right nav-icon"></i>
                                 <p>Danh s??ch d??? ??n</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="" class="nav-link">
                                 <i class="fas fa-caret-right nav-icon"></i>
                                 <p>Th??m m???i d??? ??n</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="" class="nav-link">
                                 <i class="fas fa-caret-right nav-icon"></i>
                                 <p>Danh m???c d??? ??n</p>
                             </a>
                         </li>
                     </ul>
                 </li>
                 <li class="nav-item has-treeview">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-blog"></i>
                         <p>
                             Blog
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="" class="nav-link">
                                 <i class="fas fa-caret-right nav-icon"></i>
                                 <p>Danh s??ch blog</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="" class="nav-link">
                                 <i class="fas fa-caret-right nav-icon"></i>
                                 <p>Th??m m???i blog</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="" class="nav-link">
                                 <i class="fas fa-caret-right nav-icon"></i>
                                 <p>Danh m???c blog</p>
                             </a>
                         </li>
                     </ul>
                 </li>
                 <li class="nav-item has-treeview">
                     <a href="#" class="nav-link">
                         <!-- <i class="nav-icon fas fa-project-diagram"></i> -->
                         <i class="nav-icon fas fa-file-contract"></i>
                         <p>
                             Contacts 
                             <span class="badge badge-danger"></span>
                             <i style="right: 1rem;" class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="" class="nav-link">
                                 <!-- <i class="fas fa-caret-right nav-icon"></i> -->
                                 <i class="fas fa-caret-right nav-icon"></i>
                                 <p>Danh s??ch <span class="badge badge-danger"></span></p>
                             </a>
                         </li>

                         <li class="nav-item">
                             <a href="" class="nav-link">
                                 <i class="fas fa-caret-right nav-icon"></i>
                                 <p>Ph??ng ban</p>
                             </a>
                         </li>
                     </ul>
                 </li>
                 <li class="nav-item has-treeview">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-cog"></i>
                         <p>
                             Setting
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="" class="nav-link">
                                 <i class="fas fa-caret-right nav-icon"></i>
                                 <p>Thi???t l???p chung</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="" class="nav-link">
                                 <i class="fas fa-caret-right nav-icon"></i>
                                 <p>Thi???t l???p header</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="" class="nav-link">
                                 <i class="fas fa-caret-right nav-icon"></i>
                                 <p>Thi???t l???p footer</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="" class="nav-link">
                                 <i class="fas fa-caret-right nav-icon"></i>
                                 <p>Thi???t l???p Trang ch???</p>
                             </a>
                         </li>
                     </ul>
                 </li>
             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">