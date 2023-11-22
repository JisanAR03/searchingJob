@extends('layouts.app')

@section('content')
<main class="w-11/12 md:max-w-[767px] lg:max-w-[1000px] xl:max-w-[1200px] container mx-auto mt-10 md:mt-0 mb-10">
  <div class="flex justify-evenly items-center gap-10">
    <div class="w-11/12 md:w-1/2 lg:w-5/12">
      <div class="space-y-6 w-full">
        <div class="space-y-4">
          <h3 class="text-black font-semibold">Veriy mail</h3>
          <p>send a verification mail to your mail</p>
        </div>
        <form action="{{route('job_seekers_login_verify')}}" method="POST" class="space-y-3">@csrf
          <div class="">
            <label for="" class="font-medium" required>Email</label>
            <input type="email" name="seeker_email" class="input-class">
          </div>
          <div>
            <button type="submit" class="bg-button rounded-xl text-white py-2 px-4 w-full">Verify</button>
          </div>
        </form>
        <p class="font-roboto text-center">Don't have an account? <a href="{{route('job_seeker_registration')}}" class="text-[#008D96] underline">Sign Up</a>
        </p>
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