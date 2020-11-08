<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    <div class="boddy white-theme container">
        
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand">Navbar</a>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </nav>

            @yield('content')
        
        <footer class="pt-4 my-md-5 pt-md-5 border-top">
                <div class="row">
                  <div class="col-12 col-md">
                    <img class="mb-2" src="/docs/4.5/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
                    <small class="d-block mb-3 text-muted">© 2017-2020</small>
                  </div>
                  <div class="col-6 col-md">
                    <h5>Features</h5>
                    <ul class="list-unstyled text-small">
                      <li><a class="text-muted" href="#">Cool stuff</a></li>
                      <li><a class="text-muted" href="#">Random feature</a></li>
                      <li><a class="text-muted" href="#">Team feature</a></li>
                      <li><a class="text-muted" href="#">Stuff for developers</a></li>
                      <li><a class="text-muted" href="#">Another one</a></li>
                      <li><a class="text-muted" href="#">Last time</a></li>
                    </ul>
                  </div>
                  <div class="col-6 col-md">
                    <h5>Resources</h5>
                    <ul class="list-unstyled text-small">
                      <li><a class="text-muted" href="#">Resource</a></li>
                      <li><a class="text-muted" href="#">Resource name</a></li>
                      <li><a class="text-muted" href="#">Another resource</a></li>
                      <li><a class="text-muted" href="#">Final resource</a></li>
                    </ul>
                  </div>
                  <div class="col-6 col-md">
                    <h5>About</h5>
                    <ul class="list-unstyled text-small">
                      <li><a class="text-muted" href="#">Team</a></li>
                      <li><a class="text-muted" href="#">Locations</a></li>
                      <li><a class="text-muted" href="#">Privacy</a></li>
                      <li><a class="text-muted" href="#">Terms</a></li>
                    </ul>
                  </div>
                </div>
        </footer>
        
    </div>
    <script src="js/app.js"></script>
</body>
</html>