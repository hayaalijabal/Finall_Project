<a class="menu_trigger" href="#">menu</a>
<nav id="nav">
    <ul class="navi">
        <li class="searc_li" >
            <div  class="ul_search li">
                <a class="search" href="#"><span>search</span></a>
                <form method="get" class="searchform" action="#">
                    <input type="text" class="field" name="s" id="s" placeholder="What are you looking for?" />
                    <input type="submit" class="submit" value=""  />
                    <div class="clear"></div>
                </form>
            </div >
        </li>
        <li>
            <a href="{{route('Frontsite.Home')}}">Home</a>
        </li>
        <li>
            <a href="{{route('Frontsite.Girls')}}">Girls </a>
        </li>
        <li>
            <a href="{{route('Frontsite.Boys')}}">Boys</a>
        </li>
        <li>
            <a href="{{route('Frontsite.Intelligent games')}}">Intelligent games </a>
        </li>
        <li>
            <a href="{{route('Frontsite.cart')}}">Cart</a>
        </li>

        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{route('login')}}">Login</a>
            </li>
        @endguest

        @auth
            <li class="nav-item">
                <a class="nav-link" href="{{route('dashboard.home')}}">Dashboard</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('logout')}}">Logout</a>
            </li>
        @endauth
    </ul>
    <div  class="ul_search">
        <a class="search" href="#"><span>search</span></a>
        <form method="get" class="searchform" action="#">
            <input type="text" class="field" name="s" id="s" placeholder="What are you looking for?" />
            <input type="submit" class="submit" value=""  />
        </form>
    </div >
</nav>
