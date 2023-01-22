<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="index.html">Stisla</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="index.html">St</a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Dashboard</li>
      <li class="{{ active('dashboard*') }}"><a class="nav-link" href="/dashboard"><i class="fa fa-fire"></i>Dashboard</a></li>           
      <li class="menu-header">User</li>
      <li class="{{ active('user*') }}"><a class="nav-link" href="{{route('user.index')}}"><i class="fa fa-user"></i>User</a></li>           
    </ul>
 
  </aside>
</div>