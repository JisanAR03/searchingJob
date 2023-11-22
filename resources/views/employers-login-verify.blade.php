@extends('layouts.app')

@section('content')
<section class="relative mb-20">
  <div class="bg-primary h-[500px]"></div>
  <div class="container mx-auto text-left space-y-3 p-8 md:p-14 w-11/12 md:w-[606px] shadow-custom z-30 bg-white -mt-64  rounded-lg">
    <h4 class="text-[24px] md:text-3xl">Verify Mail</h4>
    <p class="font-roboto">Don't have an account? <a href="{{route('employers-registration')}}" class="text-[#008D96] underline">Sign up</a>
    </p>
    <form action="{{Route('employers-login-verify')}}" method="POST" class="space-y-3">@csrf
      <div>
        <label for="" class="font-medium">Business Email</label>
        <input type="email" name="business_email" class="input-class">
      </div>
      <div>
        <button class="bg-button rounded-lg text-white py-2 px-4 w-40">Verify</button>
      </div>
    </form>
    <div>
      <p class="font-light">By creating an account, you agree to Indeed’s <a href="https://au.jora.com/cms/terms-of-service" class="underline">Terms of Service</a>, <a href="" class="underline">Cookie Policy</a> and <a href="https://au.jora.com/cms/privacy" class="underline">Privacy Statement</a>. You consent to receiving marketing messages from Indeed and may opt out from receiving such messages by following the unsubscribe link in our messages, or as detailed in our terms. </p>
    </div>
  </div>
</section>
@endsection