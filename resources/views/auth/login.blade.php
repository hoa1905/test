<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Criminal Investigation Management Software - Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="d-flex align-items-center justify-content-center vh-100">
  <div class="card p-4 shadow-lg rounded-4 border-0 login-card">
    <div class="text-center mb-3">
      <h3 class="text-primary fw-bold">Criminal Investigation Management Software</h3>
      <h5 class="text-dark">Log in</h5>
    </div>
    <div class="row align-items-center">
      <div class="col-md-5 text-center">
        <img src="{{ asset('images/login.jpg') }}" alt="Login Image" class="img-fluid" />
      </div>
      <div class="col-md-7">
        <form id="loginForm" method="POST" action="{{ route('login') }}">
          @csrf
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="abc@example.com" required autofocus />
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="********" required />
          </div>
          <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" name="remember" id="remember">
            <label class="form-check-label" for="remember">
              Remember me
            </label>
          </div>
          <button type="submit" class="btn btn-primary w-100">Log in</button>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>