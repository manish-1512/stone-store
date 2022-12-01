<!--Main Navigation-->
<style>
.list-group a{
    padding: 20px;
    color: #8e410c
}
.list-group a i{
    padding-right: 30px;
}
.list-group-item.active{
    color: #fff;
    background-color: #d78a5e;
    border-color: #d78a5e;
}

</style>
<header>
    <!-- Sidebar -->
    <nav>
      <div class="position-sticky  my-5">
        <div class="list-group list-group-flush mx-3  shadow">
          <a
             href="{{route('user.dashboard')}}"
             class="list-group-item list-group-item-action ripple <?php echo  (Request::segment(1) == "dashboard") ? "active" : '' ;?>"
             aria-current="true"
             >
            <i class="fas fa-tachometer-alt fa-fw "></i
              ><span>dashboard</span>
          </a>
          
          <a
             href="{{route('user.profile')}}"
             class="list-group-item list-group-item-action <?php echo  (Request::segment(1) == "my-profile") ? "active" : '' ;?>"
             >
            <i class="fas fa-user fa-fw "></i
              ><span>Profile</span>
          </a>
          <a
             href="{{route('user.change_password')}}"
             class="list-group-item list-group-item-action <?php echo  (Request::segment(1) == "change-password") ? "active" : '' ;?>"
             ><i class="fas fa-lock fa-fw "></i><span>Change Password</span></a
            >
          <a
             href=""
             class="list-group-item list-group-item-action"
             ><i class="fas fa-shopping-cart fa-fw "></i><span>My Orders</span></a
            >
          <a
             href="{{route('user.manage_address')}} <?php echo  (Request::segment(1) == "manage-address") ? "active" : '' ;?>"
             class="list-group-item list-group-item-action"
             ><i class="fas fa-location fa-fw "></i><span>Manage Address</span></a
            >
          <a
             href=""
             class="list-group-item list-group-item-action"
             ><i class="fas fa-sign-out-alt fa-fw "></i><span>Logout</span></a
            >
        </div>
      </div>
    </nav>
    <!-- Sidebar -->
  
  </header>