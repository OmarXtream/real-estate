<div class="navbar-fixed">
    <nav class="indigo darken-4">
        <div class="container">
            <div class="nav-wrapper">
                الروابي للتطوير العقاري
                <a href="{{ route('home') }}" class="brand-logo">
                    <img src="{{asset('frontend/images/logo.png')}}" width="100" height="65">
                    
                    {{-- @if(isset($navbarsettings[0]) && $navbarsettings[0]['name'])
                        {{ $navbarsettings[0]['name'] }}
                    @else
                        شركة العقار
                    @endif --}}
                    {{-- <i class="material-icons left">location_city</i> --}}
                </a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger">
                    <i class="material-icons">القائمة</i>
                </a>
                
                <ul class="right hide-on-med-and-down">

                    <li class="{{ Request::is('contact') ? 'active' : '' }}">
                        <a href="{{ route('contact') }}">تواصل معنا</a>
                    </li>

                    <li class="{{ Request::is('InfoForm*') ? 'active' : '' }}">
                        <a href="{{ route('InfoForm') }}">حلول عقارية</a>
                    </li>

                    <li class="{{ Request::is('blog*') ? 'active' : '' }}">
                        <a href="{{ route('blog') }}">المدونة</a>
                    </li>

                    <li class="{{ Request::is('gallery') ? 'active' : '' }}">
                        <a href="{{ route('gallery') }}">المعرض</a>
                    </li>

                    <li class="{{ Request::is('agents*') ? 'active' : '' }}">
                        <a href="{{ route('agents') }}">الوسطاء</a>
                    </li>

                    <li class="{{ Request::is('property*') ? 'active' : '' }}">
                        <a href="{{ route('property') }}">العقارات</a>
                    </li>

                    <li class="{{ Request::is('/') ? 'active' : '' }}">
                        <a href="{{ route('home') }}">الرئيسية</a>
                    </li>

                    @guest
                        <li><a href="{{ route('login') }}"><i class="material-icons">الدخول</i></a></li>
                        <li><a href="{{ route('register') }}"><i class="material-icons">التسجيل</i></a></li>
                    @else
                        <li>
                            <a class="dropdown-trigger" href="#!" data-target="dropdown-auth-frontend">
                                {{ ucfirst(Auth::user()->username) }}
                                <i class="material-icons right">arrow_drop_down</i>
                            </a>
                        </li>

                        <ul id="dropdown-auth-frontend" class="dropdown-content">
                            <li>
                                @if(Auth::user()->role_id == 1)
                                    <a href="{{ route('admin.dashboard') }}" class="indigo-text">
                                        <i class="material-icons"></i>الملف الشخصي
                                    </a>
                                @elseif(Auth::user()->role_id == 2)
                                    <a href="{{ route('agent.dashboard') }}" class="indigo-text">
                                        <i class="material-icons"></i>الملف الشخصي
                                    </a>
                                @elseif(Auth::user()->role_id == 3)
                                    <a href="{{ route('user.dashboard') }}" class="indigo-text">
                                        <i class="material-icons"></i>الملف الشخصي
                                    </a>
                                @endif
                            </li>
                            <li>
                                <a class="dropdownitem indigo-text" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    <i class="material-icons"></i>خروج
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>

                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    
    <ul class="sidenav" id="mobile-demo">
        <li class="{{ Request::is('/') ? 'active' : '' }}">
            <a href="{{ route('home') }}">الرئيسية</a>
        </li>

        <li class="{{ Request::is('property*') ? 'active' : '' }}">
            <a href="{{ route('property') }}">العقارات</a>
        </li>

        <li class="{{ Request::is('agents*') ? 'active' : '' }}">
            <a href="{{ route('agents') }}">الوسطاء</a>
        </li>

        <li class="{{ Request::is('gallery') ? 'active' : '' }}">
            <a href="{{ route('gallery') }}">المعرض</a>
        </li>

        <li class="{{ Request::is('blog*') ? 'active' : '' }}">
            <a href="{{ route('blog') }}">المدونة</a>
        </li>

        <li class="{{ Request::is('contact') ? 'active' : '' }}">
            <a href="{{ route('contact') }}">تواصل معنا</a>
        </li>
    </ul>

</div>