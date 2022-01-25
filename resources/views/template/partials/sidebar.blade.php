<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="">
              <img alt="image" src="{{asset('assets/img/logo.png')}}" class="header-logo" />
              <span class="logo-name">Grexsan</span>
            </a>
          </div>
          <ul class="sidebar-menu">
          	<li class="dropdown active" style="display: block;">
          		 <div class="sidebar-profile">
	                 <div class="siderbar-profile-pic">
	                     <img src="{{asset('assets/img/users/user-6.png')}}" class="profile-img-circle box-center" alt="User Image">
	                 </div>
	                 <div class="siderbar-profile-details">
	                     <div class="siderbar-profile-name"> {{Auth::user()->name}}</div>
	                 </div>
	                 
                 </div>
             </li>
            <li class="menu-header">Main</li>
            
            
            <li><a class="nav-link" href=""><i class="far fa-calendar-alt"></i><span>Home</span></a></li>
            <li><a class="nav-link" href="{{route('design-list')}}"><i class="far fa-calendar-alt"></i><span>Designs</span></a></li>            
            

            <li><a class="nav-link" href="{{route('logout')}}"><i class="far fa-calendar-alt"></i><span>Logout</span></a></li>
            
            
            
          
            
            
            
          
            
            
            
            
            
          </ul>
        </aside>
      </div>