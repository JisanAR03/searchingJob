@extends('layouts.app')

@section('content')
<section class="relative mb-20">
  <div class="bg-primary h-[500px]"></div>
  <div class="container mx-auto text-left space-y-3 p-8 md:p-14 w-11/12 md:w-[606px] shadow-custom z-30 bg-white -mt-64  rounded-lg">
    <h4 class="text-[24px] md:text-3xl">Sign in</h4>
    <p class="font-roboto">Don't have an account? <a href="{{route('employers-registration')}}" class="text-[#008D96] underline">Sign up</a>
    </p>
    <form action="{{Route('employers-login')}}" method="POST" class="space-y-3">@csrf
      <div class="">
        <label for="" class="font-medium">Company Name</label>
        <input type="text" name="company_name" class="input-class">
      </div>
      <div>
        <label for="" class="font-medium">Business Email</label>
        <input type="email" name="business_email" class="input-class">
        <a href="{{route('employers_login_verify')}}" class="text-[#008D96]">verify mail</a>
      </div>
      <div>
        <label for="" class="font-medium">Password</label>
        <input type="password" name="password" class="input-class">
      </div>
      <div>
        <button class="bg-button rounded-lg text-white py-2 px-4 w-40">Continue</button>
      </div>
    </form>
    <a href="{{ route('empregister.provider', ['provider' => 'google']) }}" class="flex justify-center w-full text-[#DB4437] border border-[#DB4437] rounded-xl py-2 cursor-pointer">
      <button type="button" data-te-ripple-init data-te-ripple-color="light" class="mr-2 inline-block rounded-sm px-1 py-1 text-xs font-medium bg-[#DB4437] text-white">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16"> <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/> </svg>
      </button> Sign-Up With Google
    </a>
    
    <a href="{{ route('empregister.provider', ['provider' => 'linkedin']) }}" class="flex justify-center w-full text-[#0077B7] border border-[#0077B7] rounded-xl py-2 cursor-pointer">
      <button type="button" data-te-ripple-init data-te-ripple-color="light" class="mr-2 inline-block rounded-sm px-1 py-1 text-xs font-medium bg-[#0077b5]  text-white ">
        <svg   class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
          <path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
        </svg>
      </button> Sign-Up With LinkedIn </a>
    <div>
      <p class="font-light">By creating an account, you agree to Indeed’s <a href="https://au.jora.com/cms/terms-of-service" class="underline">Terms of Service</a>, <a href="" class="underline">Cookie Policy</a> and <a href="https://au.jora.com/cms/privacy" class="underline">Privacy Statement</a>. You consent to receiving marketing messages from Indeed and may opt out from receiving such messages by following the unsubscribe link in our messages, or as detailed in our terms. </p>
    </div>
  </div>
</section>
@endsection