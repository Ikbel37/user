
@extends('layout')
@section('content')



<!-- Section: Design Block -->
<section class="background-radial-gradient overflow-hidden">
  <style>
    .background-radial-gradient {
      background-color: hsl(218, 41%, 15%);
      background-image: radial-gradient(650px circle at 0% 0%,
          hsl(218, 41%, 35%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%),
        radial-gradient(1250px circle at 100% 100%,
          hsl(218, 41%, 45%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%);
    }

    #radius-shape-1 {
      height: 220px;
      width: 220px;
      top: -60px;
      left: -130px;
      background: radial-gradient(#44006b, #ad1fff);
      overflow: hidden;
    }

    #radius-shape-2 {
      border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
      bottom: -60px;
      right: -110px;
      width: 300px;
      height: 300px;
      background: radial-gradient(#44006b, #ad1fff);
      overflow: hidden;
    }

    .bg-glass {
      background-color: hsla(0, 0%, 100%, 0.9) !important;
      backdrop-filter: saturate(200%) blur(25px);
    }
  </style>

  <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
    <div class="row gx-lg-5 align-items-center mb-5">
      <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
        <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
          Create your account <br />
        </h1>
        <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
          Ready to get started? Create your account now to unlock exclusive features and join to the community.
          It only takes a few moments to set up your profile, and you'll gain access to a world of personalized content. 
          Join us in shaping your unique experience sign up and be part of the family today!
        </p>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

        <div class="card bg-glass">
         
            <div class="card-body p-5 shadow-5 ">

              <h2 class="fw-bold mb-5 text-center">Sign up now</h2>
            <form  action= "{{ route('register') }}" method="post">
              {!! csrf_field() !!} 
             
                <div class="form-outline mb-4">
                  <div class="form-outline">
                    <input type="text" name="name" id="name" id="form3Example1" class="form-control" />
                    <label class="form-label"  for="form3Example1">First name</label>
                  </div>
                </div>
               

              <div class="form-outline mb-4">
                <input type="email" name="email" id="email"  class="form-control" />
                <label class="form-label"  for="form3Example3">Email address</label>
              </div>

              <div class="form-outline mb-4">
                <input type="password" name="password" id="password" class="form-control" />
                <label class="form-label" for="form3Example4">Password</label>
              </div>

          

              <button type="submit" class="btn btn-primary btn-block mb-4">
                Sign up
              </button>
              <button type="button" class="btn" data-bs-toggle="button" id="loginButton" >login</button>
            <script>
                document.getElementById('loginButton').addEventListener('click', function() {
                  window.location.href = '{{ route("index") }}';
                });
              </script>

           
            </form>
            </div>
          </div>
        </div>
      
    </div>
  </div>
</section>


@stop 