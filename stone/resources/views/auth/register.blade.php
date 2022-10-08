{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}



@extends('website.layout')

@section('content')

<!-- Section: Design Block -->
<section class="text-center text-lg-start">
    <style>
      .cascading-right {
        margin-right: -50px;
      }
  
      @media (max-width: 991.98px) {
        .cascading-right {
          margin-right: 0;
        }
      }
    </style>
  
    <!-- Jumbotron -->
    <div class="container py-4">
      <div class=" g-0 align-items-center my-4">
        <div class="col-lg-6 offset-lg-3 mb-5 mb-lg-0">
          <div class="card cascading-right" style="
              background: hsla(0, 0%, 100%, 0.55);
              backdrop-filter: blur(30px);
              ">
            <div class="card-body p-5 shadow-5 text-center">
              <h2 class="fw-bold mb-5">Sign Up Now</h2>

                <div class="alert ">
                  <x-auth-validation-errors  :errors="$errors" />
                </div>


              <form method="POST" action="{{ route('register') }}">
                <!-- 2 column grid layout with text inputs for the first and last names -->

                @csrf
                <div class="row">
                  <div class="col-md-12 mb-4">
                    <div class="form-outline">
                      <input type="text" id="form3Example1" name="name" :value="old('name')" required autofocus  class="form-control" placeholder="Enter  Name" />
                 
                    </div>
                  </div>
                  
                </div>
  
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" id="form3Example3"  class="form-control" placeholder="email"  name="email" :value="old('email')" required />
                 
                </div>
                <!-- Phone input -->
                <div class="form-outline mb-4">
                  <input type="text" id="form3Example3" name="phone" class="form-control" placeholder="Phone Number" />
                
                </div>
  
                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4" name="password" class="form-control" placeholder="Password" />
               
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input  id="form3Example4" class="form-control"   type="password"
                  name="password_confirmation" require placeholder="confirm Password"/>
          
                </div>
  
                <!-- Checkbox -->
                {{-- <div class="form-check d-flex justify-content-center mb-4">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                  <label class="form-check-label" for="form2Example33">
                    Subscribe to our newsletter
                  </label>
                </div> --}}
  
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">
                  Sign up
                </button>
                
                <div class="mb-3">
                  <a href="{{route('login')}}">Already Have Account Login </a>
                </div>

                <!-- Register buttons -->
                <div class="text-center">
                  <p>or sign up with:</p>
                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-facebook-f"></i>
                  </button>
  
                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-google"></i>
                  </button>
  
                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-twitter"></i>
                  </button>
  
                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-github"></i>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
       
        
      </div>
    </div>
    <!-- Jumbotron -->
  </section>
  <!-- Section: Design Block -->

  @endsection