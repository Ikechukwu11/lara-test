<!DOCTYPE html>
<head>
  <title>@yield('title')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="teal">
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
  />
  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
  />
  <link rel="icon" type="image/x-icon" href="/favicon.ico"/>
  <link rel="stylesheet" href="/css/mdb.min.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:teal">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarNav"
      aria-controls="navbarNav"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/posts">Blog</a>
        </li>
       </ul>
    </div>
  </div>
</nav>
  <div class="container">
    <div class="row my-5">
      @yield('content')
    </div>
  </div>
</body>
<!-- MDB -->
<script
  type="text/javascript"
  src="/js/mdb.min.js"
></script>