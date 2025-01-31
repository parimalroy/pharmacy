@include('Backend.layouts._header')
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    @include('Backend.layouts._sidebar')
    <!-- End Sidebar-->

    <main id="main" class="main">
      <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </nav>
      </div>
      <!-- End Page Title -->
      <section class="section dashboard">
          @yield('content')
        
      </section>
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('Backend.layouts._footer');