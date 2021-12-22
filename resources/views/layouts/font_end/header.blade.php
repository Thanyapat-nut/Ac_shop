<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.php">Ac Coffee Shop<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="{{route('page')}}">หน้าแรก</a></li>
          <li class="dropdown"><a href=""><span>สินค้า</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{route('page.p1')}}">กาแฟ</a></li>  
              <li><a href="{{route('page.p2')}}">ขนมต่างๆ</a></li>  
        </ul>
        <li><a class="nav-link scrollto " href="{{route('page.a')}}">เกี่ยวกับ</a></li>
        <li><a class="nav-link scrollto  " href="{{route('page.c')}}">ช่องทางติดต่อ</a></li>
        <li class="dropdown"><a href="{{route('home')}}"><span>สมัครสมาชิก</span></i></a>
      </nav><!-- .navbar -->

    </div>
  </header>