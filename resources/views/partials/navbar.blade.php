<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
<!-- <img src="{{ asset('backpacker.ico') }}" alt="Small Logo"> -->
  <div class="container">
    <a class="navbar-brand" href="/">
      <img src="{{ asset('backpacker.ico') }}" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
      SobatBackpacker
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto">
        <a class="nav-link {{($title === "Home") ? 'active' : ''}}" href="/"><i class="bi bi-house-door-fill"></i> Home</a>
      </div>
    </div>
  </div>
</nav>