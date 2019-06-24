<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-static-top">
<div class="container">
<a href="#" class="navbar-brand">
    Laravel-Shop
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggle-icon"></span>
</button>

    <div id="navbarSupportContented" class="collapse navbar-collapse">
    <ul class="navbar-nav mr-auto">

    </ul>

    <ul class="navbar-nav navbar-right">
        @guest
        <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">登录</a></li>
        <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">注册</a></li>
        @else
        <li class="nav-item dropdown">
            <a href="#" id="navbarDropdown" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="https://iocaffcdn.phphub.org/uploads/images/201709/20/1/PtDKbASVcz.png?imageView2/1/w/60/h/60" alt="" class="img-responsive img-circle" width="30px" height="30px">
                {{ Auth::user()->name}}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown" >
                <a href="{{ route('user_addresses.index') }}" class="dropdown-item">收货地址</a>
                <a href="#" id="logout" class="dropdown-item" onclick="event.preventDefault();document.getElementById('logout-form').submit();">退出登录</a>
                <form action=" {{ route('logout') }}" id="logout-form" style="display:none" method="post">{{ csrf_field()}}</form>
            </div>
        </li>
        @endguest
    </ul>
    </div>
</div>
</nav>

