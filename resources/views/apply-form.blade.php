@extends('layouts.app')

@section('content')
<main class="md:max-w-[767px] lg:max-w-[1000px] xl:max-w-[1200px] container mx-auto">
  <div class="container mx-auto text-left space-y-3 py-20 w-11/12 md:w-96">
    <p class="text-xs text-bodyText">You are applying for:</p>
    <p class="font-semibold">Retail Supervisor</p>
    <p class="text-xs text-bodyText">Coffs Harbour Fishermen’s Coop – Coffs Harbour NSW</p>
    <a class="flex justify-center w-full text-[#0077B7] border border-[#0077B7] rounded-xl py-2 cursor-pointer">
      <button type="button" data-te-ripple-init data-te-ripple-color="light" class="mr-2 inline-block rounded-sm px-1 py-1 text-xs font-medium bg-[#0077b5]  text-[#ffffff] ">
        <svg   class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
          <path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
        </svg>
      </button> Applying With LinkedIn </a>
    <form action="{{route('apply-form-submit')}}" method="POST" class="space-y-3" enctype="multipart/form-data">@csrf
      <input type="hidden" value="{{request()->input('JobPostID') }}" name="JobPostID">
      <div>
        <label for="" class="label-class" required>Email*</label>
        <input type="email" class="input-class" name="Email">
      </div>
      <div>
        <label for="" class="label-class" required>Full Name *</label>
        <input type="text" class="input-class" name="FullName">
      </div>
      <div>
        <label for="" class="label-class" required>Phone number *</label>
        <input type="number" class="input-class" name="PhoneNumber">
      </div>
      <div>
        <label for="" class="label-class">Location</label>
        <input type="text" class="input-class" name="Location">
      </div>
      <div>
        <label for="" class="label-class">Current role title (optional)</label>
        <input type="text" class="input-class" name="CurrentRole">
      </div>
      <div class="flex flex-col">
        <label for="" class="label-class">Resume *</label>
        <label class="input-class h-20 p-3 space-y-2.5">
          <input type="file" class="text-xs file:bg-[#ffffff] file:border-bodyText file:border-opacity-20 file:rounded-lg file:text-xs file:text-bodyText" name="CoverLetter">
          <p class="text-xs">Types: .pdf, .doc, .docx Max file size: 5 MB</p>
        </label>
      </div>
      <div>
        <label for="" class="label-class ">Cover letter (optional)</label>
        <input type="text" class="input-class h-24" name="CoverLetterOptional">
      </div>
      <div class="items-center">
        <input type="checkbox" value="1" name="AlertForFutureJobs" id="alert">
        <label for="alert" class="label-class">I'd like to receive related job alerts</label>
      </div>
      <div>
        <p class="text-xs text-bodyText">I agree to Jora's <a href="https://au.jora.com/cms/terms-of-service" class="underline">Terms of Service</a> and <a href="https://au.jora.com/cms/privacy" class="underline">Privacy Statement</a>, as well as my application being sent onto the Employer and processed in accordance with the Employer's Privacy policy. </p>
      </div>
      <div>
        <button class="bg-button rounded-xl text-[#FFFFFF] py-2 px-4 w-full">Submit application</button>
      </div>
    </form>
  </div>
</main>
@endsection