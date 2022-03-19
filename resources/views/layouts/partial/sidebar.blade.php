

<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">

    <div class="logo">
        <a class="simple-text logo-normal">
           Baron
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="{{Request:: is('admin/dashboard') ? 'active' :''}}  ">
                <a class="nav-link" href="{{route('admin.dashboard')}}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            
            <li class="{{Request:: is('admin/slider') ? 'active' :''}} ">
                <a class="nav-link" href="{{route('curr.index')}}">
                    <i class="material-icons">assignment_turned_in</i>
                    <p>reservation</p>
                </a>
            </li>
            <li class="{{Request:: is('admin/slider') ? 'active' :''}} ">
                <a class="nav-link" href="{{route('done.index')}}">
                    <i class="material-icons">assignment</i>
                    <p>Done Reservation</p>
                </a>
            </li>
            <li class="{{Request:: is('admin/slider') ? 'active' :''}} ">
                <a class="nav-link" href="{{route('slider.index')}}">
                    <i class="material-icons">slideshow</i>
                    <p>Slider</p>
                </a>
            </li>

            <li class="{{Request:: is('admin/category') ? 'active' :''}}  ">
                <a class="nav-link" href="{{route('category.index')}}">
                    <i class="material-icons">room_service</i>
                    <p>Category</p>
                </a>
            </li>

            <li class="{{Request:: is('admin/item') ? 'active' :''}}  ">
                <a class="nav-link" href="{{route('item.index')}}">
                    <i class="material-icons">local_dining</i>
                    <p>Items</p>
                </a>
            </li>

            <li class="{{Request:: is('admin/slider') ? 'active' :''}} ">
                <a class="nav-link" href="{{route('gallery.index')}}">
                    <i class="material-icons">crop_original</i>
                    <p>Gallery</p>
                </a>
            </li>

            
        </ul>
    </div>
</div>