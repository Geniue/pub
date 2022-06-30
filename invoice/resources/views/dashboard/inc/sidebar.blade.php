<!-- Left Sidenav -->
<div class="left-sidenav">
    <ul class="metismenu left-sidenav-menu">
        <li>
            <a href="{{route('dashboard')}}"><i class="ti-bar-chart"></i><span>Dashboard</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
        </li>

        <li>
            <a href="javascript: void(0);"><i class="ti-money"></i><span>Invoices</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
            <ul class="nav-second-level" aria-expanded="false">
                <li class="nav-item"><a class="nav-link" href="{{route('invoices.create')}}"><i class="ti-control-record"></i>Generate Invoice</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('invoices.index')}}"><i class="ti-control-record"></i>Invoices List</a></li>
            </ul>
        </li>

        <li>
            <a href="javascript: void(0);"><i class="ti-ticket"></i><span>Tickets</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
            <ul class="nav-second-level" aria-expanded="false">
                <li class="nav-item"><a class="nav-link" href="{{route('tickets.create')}}"><i class="ti-control-record"></i>Generate Ticket</a></li>

                <li class="nav-item"><a class="nav-link" href="{{route('tickets.index')}}"><i class="ti-control-record"></i>Ticket List</a></li>
            </ul>
        </li>
         @if(\Illuminate\Support\Facades\Auth::user()->is_admin==1)
            <li>
                <a href="javascript: void(0);"><i class="ti-user"></i><span>Employees</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item"><a class="nav-link" href="{{route('users.create')}}"><i class="ti-control-record"></i>Add Employee</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('users.index')}}"><i class="ti-control-record"></i>Employee List</a></li>
                </ul>
            </li>
        @endif
        <li>
            <a href="javascript: void(0);"><i class="ti-map"></i><span>Locations</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
            <ul class="nav-second-level" aria-expanded="false">
                <li class="nav-item"><a class="nav-link" href="{{route('locations.create')}}"><i class="ti-control-record"></i>Add Location</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('locations.index')}}"><i class="ti-control-record"></i>Location List</a></li>
            </ul>
        </li>
        <li>
            <a href="{{route('posts.index')}}"><i class="ti-notepad"></i><span>Posts</span></a>
        </li>
		<li>
            <a href="javascript: void(0);"><i class="ti-image"></i><span>Blog</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
            <ul class="nav-second-level" aria-expanded="false">
                <li class="nav-item"><a class="nav-link" href="{{route('blog.create')}}"><i class="ti-control-record"></i>Add Blog</a></li>

                <li class="nav-item"><a class="nav-link" href="{{route('blog.index')}}"><i class="ti-control-record"></i>Blog List</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript: void(0);"><i class="ti-gallery"></i><span>Gallery</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
            <ul class="nav-second-level" aria-expanded="false">
                <li class="nav-item"><a class="nav-link" href="{{route('gallery.create')}}"><i class="ti-control-record"></i>Add Gallery</a></li>

                <li class="nav-item"><a class="nav-link" href="{{route('gallery.index')}}"><i class="ti-control-record"></i>Gallery List</a></li>
            </ul>
        </li>
		<li>
            <a href="javascript: void(0);"><i class="ti-list"></i><span>Pages</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
            <ul class="nav-second-level" aria-expanded="false">
                <li class="nav-item"><a class="nav-link" href="{{route('pages.create')}}"><i class="ti-control-record"></i>Add Page</a></li>

                <li class="nav-item"><a class="nav-link" href="{{route('pages.index')}}"><i class="ti-control-record"></i>Pages List</a></li>
            </ul>
        </li>
        
    </ul>
</div>
<!-- end left-sidenav-->
