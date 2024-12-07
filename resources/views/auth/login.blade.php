@extends('layouts.app')
@section('title', 'Sign In')
@section('content')
<main class="mt-0 main-content">
  <section>
    <div class="bg-white page-header min-vh-100">
      <div class="container">
        <div class="row">
          <div class="mx-auto col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 ">
            <div class="card card-plain">
              <div class="pb-0 card-header text-start">
                <h4 class="font-weight-bolder">Sign In</h4>
                <p class="mb-0">Enter your email and password to sign in</p>
              </div>
              <div class="card-body">
                <form role="form" method="POST" action="{{ route('login.perform') }}">
                  @csrf
                  @method('post')
                  <div class="flex flex-col mb-3">
                    <input type="email" name="email" class="form-control form-control-lg" aria-label="Email"
                      placeholder="email@mail.id">
                    @error('email') <p class="pt-1 text-s text-danger"> {{$message}} </p>@enderror
                  </div>
                  <div class="flex flex-col mb-3">
                    <input type="password" name="password" class="form-control form-control-lg" aria-label="Password"
                      placeholder="password">
                    @error('password') <p class="pt-1 text-s text-danger"> {{$message}} </p>
                    @enderror
                  </div>
                  <div class="form-check form-switch">
                    <input class="form-check-input" name="remember" type="checkbox" id="rememberMe">
                    <label class="form-check-label" for="rememberMe">Remember me</label>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="mt-4 mb-0 btn btn-lg btn-primary w-100">Sign
                      in</button>
                  </div>
                </form>
              </div>
              <div class="px-1 pt-0 text-center card-footer px-lg-2">
                <p class="mx-auto mb-1 text-sm">
                  Forgot you password? Reset your password
                  <a href="{{ route('reset-password') }}" class="text-primary text-gradient font-weight-bold">here</a>
                </p>
              </div>
              <div class="px-1 pt-0 text-center card-footer px-lg-2">
                <p class="mx-auto mb-4 text-sm">
                  Don't have an account?
                  <a href="{{ route('register') }}" class="text-primary text-gradient font-weight-bold">Sign up</a>
                </p>
              </div>
            </div>
          </div>
          <div
            class="top-0 my-auto text-center col-6 d-lg-flex d-none h-100 pe-0 position-absolute end-0 justify-content-center flex-column">
            <div
              class="overflow-hidden position-relative bg-gradient-primary h-100 px-7 d-flex flex-column justify-content-center"
              style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signin-ill.jpg');
              background-size: cover;">
              <span class="mask bg-gradient-primary opacity-6"></span>
              <h4 class="mt-5 text-white font-weight-bolder position-relative">"Attention is the new
                currency"</h4>
              <p class="text-white position-relative">The more effortless the writing looks, the more
                effort the writer actually put into the process.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection
