@extends('layouts.app')

@section('content')
<main class="w-11/12 md:max-w-[767px] lg:max-w-[1000px] xl:max-w-[1200px] container mx-auto mt-10 md:mt-0 mb-10">
  <div class="flex justify-evenly items-center gap-10">
    <div class="w-11/12 md:w-1/2 lg:w-5/12">
      <div class="space-y-6 w-full">
        <div class="space-y-4">
          <h3 class="text-black font-semibold">Registration</h3>
          <p>Sign in to create and apply for jobs Email</p>
        </div>
        <form action="" class="space-y-3">
          <div class="">
            <label for="" class="font-medium" required>Email</label>
            <input type="email" class="input-class">
          </div>
          <div>
            <label for="" class="font-medium" required>Password</label>
            <input type="text" class="input-class">
          </div>
          <div>
            <button class="bg-button rounded-xl text-white py-2 px-4 w-full">Login</button>
          </div>
        </form>
        <p class="font-roboto text-center">Don't have an account? <a href="/src/candidate-login.html" class="text-[#008D96] underline">Sign Up</a>
        </p>
        <a class="flex justify-center w-full text-[#0077B7] border border-[#0077B7] rounded-xl py-2 cursor-pointer">
          <button type="button" data-te-ripple-init data-te-ripple-color="light" class="mr-2 inline-block rounded-sm px-1 py-1 text-xs font-medium bg-[#0077b5]  text-white ">
            <svg   class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
              <path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
            </svg>
          </button> Applying With LinkedIn </a>
      </div>
    </div>
    <div class="bg-primary md:w-1/2 lg:w-7/12 p-12  hidden md:block">
      <div class="space-y-32">
        <div class="space-y-9">
          <div class="bg-button w-[165px] h-10 flex items-center justify-evenly font-light">
            <span class="bg-white py-0.5 px-2 text-button">New</span>
            <span class="text-white">Login page</span>
          </div>
          <h1>Welcome to <br> HireUP. </h1>
        </div>
        <div class="space-y-9">
          <p>“Hireup puts the focus in the right place: on the people who are using it.”</p>
          <div class="flex justify-start items-center gap-3">
            <div class="">
              <img src="/src/img/login_man.png" alt="" srcset="" class="rounded-full w-[48px] h-[48px] object-contain">
            </div>
            <div>
              <p class="text-sm font-medium">City of Melbourne</p>
              <p class="text-xs font-light text-bodyText">Lorem Ipsum is simply dummy text of the industry.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection