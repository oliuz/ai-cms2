<!-- Toolbar-->
<div class="toolbar">
  <div class="inner">
    <div class="tools">
      <div class="search"><i class="icon-search"></i></div>
      <div class="account"><a href="account-orders.html"></a><i class="icon-head"></i>
        <ul class="toolbar-dropdown">
          <li class="sub-menu-user">
            <div class="user-ava"><img src="img/account/user-ava-sm.jpg" alt="Daniel Adams">
            </div>
            <div class="user-info">
              <h6 class="user-name">Daniel Adams</h6><span class="text-xs text-muted">290 Reward points</span>
            </div>
          </li>
            <li><a href="account-profile.html">My Profile</a></li>
            <li><a href="account-orders.html">Orders List</a></li>
            <li><a href="account-wishlist.html">Wishlist</a></li>
          <li class="sub-menu-separator"></li>
          <li><a href="#"> <i class="icon-unlock"></i>Logout</a></li>
        </ul>
      </div>
      @include('layouts.parts.cart')
    </div>
  </div>
</div>