<div class="sidebar" role="navigation">
    <div class="navbar-collapse">
        <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right dev-page-sidebar mCustomScrollbar _mCS_1 mCS-autoHide mCS_no_scrollbar" id="cbp-spmenu-s1">
            <div class="scrollbar scrollbar1">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="{{url('dashboard')}}"><i class="fa fa-home nav_icon"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="{{url('/')}}"><i class="fa fa-home nav_icon"></i>Home</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-cogs nav_icon"></i>Question<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                                <a href="{{route('questions.create')}}">Add Question</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="widgets.html"><i class="fa fa-th-large nav_icon"></i>Widgets</a>
                    </li>                    
                </ul>
            </div>
        </nav>
    </div>
</div>