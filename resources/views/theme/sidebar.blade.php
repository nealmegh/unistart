 <div class="sidebar-wrapper sidebar-theme">

            <nav id="sidebar">
                <div class="shadow-bottom"></div>
                <ul class="list-unstyled menu-categories" id="accordionExample">
                    <li class="menu">
                        <a href="#dashboard" data-active="{{ (Request::route()->getPrefix() == '/admin') ? 'true' : 'false' }}" data-toggle="collapse" aria-expanded="{{ (Request::route()->getPrefix() == '/admin') ? 'true' : 'false'}}" class="dropdown-toggle {{ (Request::route()->getPrefix() == '/admin') ? '' : 'collapsed' }}">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                <span>Dashboard</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
{{--                        {{dd(Route::currentRouteName())}}--}}
                        <ul class="collapse submenu list-unstyled {{ (Request::route()->getPrefix() == '/admin') ? 'show' : '' }}" id="dashboard" data-parent="#accordionExample">

                            <li class="{{ (Route::currentRouteName() == 'admin.dashboard') ? 'active' : '' }}">
                                <a href="{{ route('admin.dashboard') }}"> Overview </a>
                            </li>

{{--                            <li class="{{ (Route::currentRouteName() == 'admin.reports') ? 'active' : '' }}">--}}
{{--                                <a href="{{ route('admin.reports') }}"> Reports </a>--}}
{{--                            </li>--}}
                        </ul>
                    </li>
{{--                    <li class="menu">--}}
{{--                        <a href="{{route('admin.index')}}" data-active="{{ (Request::route()->getPrefix() == 'admin/questions') ? 'true' : 'false' }}" aria-expanded="{{ (Request::route()->getPrefix() == 'admin/questions') ? 'true' : 'false' }}" class="dropdown-toggle">--}}
{{--                            <div class="">--}}
{{--                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>--}}
{{--                                <span>Questions</span>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </li>--}}
                    <li class="menu">
                        <a href="{{route('admin.students')}}" data-active="{{ (Request::route()->getPrefix() == 'admin/students') ? 'true' : 'false' }}" aria-expanded="{{ (Request::route()->getPrefix() == 'admin/students') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                <span>Students</span>
                            </div>
                        </a>
                    </li>
                    <li class="menu">
                        <a href="{{route('admin.teachers')}}" data-active="{{ (Request::route()->getPrefix() == 'admin/teachers') ? 'true' : 'false' }}" aria-expanded="{{ (Request::route()->getPrefix() == 'admin/teachers') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                <span>Teachers</span>
                            </div>
                        </a>
                    </li>
                    <li class="menu">
                        <a href="{{route('admin.users')}}" data-active="{{ (Request::route()->getPrefix() == 'admin/users') ? 'true' : 'false' }}" aria-expanded="{{ (Request::route()->getPrefix() == 'admin/users') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                <span>Users</span>
                            </div>
                        </a>
                    </li>
                    <li class="menu">
                        <a href="{{route('admin.courses.index')}}" data-active="{{ (Request::route()->getPrefix() == 'admin/courses') ? 'true' : 'false' }}" aria-expanded="{{ (Request::route()->getPrefix() == 'admin/courses') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                <span>Courses</span>
                            </div>
                        </a>
                    </li>
                    <li class="menu">
                        <a href="{{route('admin.questions.index')}}" data-active="{{ (Request::route()->getPrefix() == 'admin/questions') ? 'true' : 'false' }}" aria-expanded="{{ (Request::route()->getPrefix() == 'admin/questions') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                <span>Questions</span>
                            </div>
                        </a>
                    </li>
                    <li class="menu">
                        <a href="{{route('admin.universities.index')}}" data-active="{{ (Request::route()->getPrefix() == 'admin/universities') ? 'true' : 'false' }}" aria-expanded="{{ (Request::route()->getPrefix() == 'admin/universities') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                <span>Universities</span>
                            </div>
                        </a>
                    </li>

{{--                        <li class="menu">--}}
{{--                            <a href="{{route('courses.index')}}" data-active="{{ (Request::route()->getPrefix() == 'admin/questions') ? 'true' : 'false' }}" aria-expanded="{{ (Request::route()->getPrefix() == 'admin/questions') ? 'true' : 'false' }}" class="dropdown-toggle">--}}
{{--                                <div class="">--}}
{{--                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>--}}
{{--                                    <span>Courses</span>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="menu">--}}
{{--                            <a href="{{route('students.index')}}" data-active="{{ (Request::route()->getPrefix() == 'admin/questions') ? 'true' : 'false' }}" aria-expanded="{{ (Request::route()->getPrefix() == 'admin/questions') ? 'true' : 'false' }}" class="dropdown-toggle">--}}
{{--                                <div class="">--}}
{{--                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>--}}
{{--                                    <span>Students</span>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    <li class="menu">--}}
{{--                        <a href="{{route('user.users')}}" data-active="{{ (Request::route()->getPrefix() == 'admin/users') ? 'true' : 'false' }}" aria-expanded="{{ (Request::route()->getPrefix() == 'admin/users') ? 'true' : 'false' }}" class="dropdown-toggle">--}}
{{--                            <div class="">--}}
{{--                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>--}}
{{--                                <span>Users</span>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </li>--}}


                </ul>

            </nav>

        </div>

