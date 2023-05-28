@extends('layouts.app')

@section('content')
<main class=" w-11/12 md:max-w-[767px] lg:max-w-[1000px] xl:max-w-[1200px] container mx-auto my-10 pb-16">
  <div class="flex flex-col md:flex-row justify-center items-start gap-4">
    <div class="w-full md:w-9/12">
      <div class="flex justify-between  items-center bg-[#FAFAFA] w-full h-[220px] p-12">
        <div class="flex flex-col justify-start  mb-8">
          <img src="/src/img/signature.png" alt="" srcset="" class="w-[67px] h-[67ppx]">
          <h6 class="text-lg">Jubayer Islam</h6>
        </div>
        <div>
          <button class="bg-button rounded-xl text-white py-3 px-4 w-40">Send Message</button>
        </div>
      </div>
      <div class="block md:hidden w-full md:w-5/12 p-10 bg-[#FAFAFA] space-y-5">
        <h5>Candidate Information</h5>
        <div class="space-y-1">
          <p class="text-bodyText font-xs">I am looking for</p>
          <p class="font-medium">Web Developer</p>
        </div>
        <div class="space-y-1">
          <p class="text-bodyText font-xs">Email</p>
          <p class="font-medium">joyerjoy56@gmail.com</p>
        </div>
        <div class="space-y-1">
          <p class="text-bodyText font-xs">LinkedIn URL </p>
          <p class="font-medium">https://www.linkedin.com/in/saimul -islam-67370b194/</p>
        </div>
        <div class="space-y-1">
          <p class="text-bodyText font-xs">Phone number</p>
          <p class="font-medium">01711244963</p>
        </div>
        <div class="space-y-1">
          <p class="text-bodyText font-xs">Location</p>
          <p class="font-medium">Dhaka, Bamgladesh</p>
        </div>
        <div class="space-y-1">
          <p class="text-bodyText font-xs">Saas experience</p>
          <p class="font-medium">yes</p>
        </div>
        <div class="space-y-1">
          <p class="text-bodyText font-xs">Salary expectation</p>
          <p class="font-medium">$50k-$100k</p>
        </div>
        <div class="space-y-1">
          <p class="text-bodyText font-xs">Skills</p>
          <p class="font-medium uppercase">graphic design, UI/UX Design , digital marketing, web developer</p>
        </div>
      </div>
      <div class="flex justify-start items-center gap-2 my-10">
        <button class="bg-primary rounded-lg py-2 px-4 w-28 text-sm text-black">Details</button>
        <button class="border border-black rounded-xl py-1.5 px-4 w-28 text-sm text-black">Resume</button>
      </div>
      <div class="space-y-6">
        <div class="rounded-md border border-">
          <p class="text-sm font-semibold bg-primary/25 py-2 px-2 rounded-md shadow-custom">Work Experience</p>
          <p class="text-sm font-semibold py-2 px-2 border-b">Work Title : <span class="font-normal">Graphics Designer</span>
          </p>
          <p class="text-sm font-semibold py-2 px-2 border-b">Company Name : <span class="font-normal">Goggle</span>
          </p>
          <p class="text-sm font-semibold py-2 px-2 border-b">Start Date : <span class="font-normal">2010</span>
          </p>
          <p class="text-sm font-semibold py-2 px-2">End Date : <span class="font-normal">2013</span>
          </p>
        </div>
        <div class="rounded-md border border-">
          <p class="text-sm font-semibold bg-primary/25 py-2 px-2 rounded-md shadow-custom">Work Experience</p>
          <p class="text-sm font-semibold py-2 px-2 border-b">Work Title : <span class="font-normal">Graphics Designer</span>
          </p>
          <p class="text-sm font-semibold py-2 px-2 border-b">Company Name : <span class="font-normal">Goggle</span>
          </p>
          <p class="text-sm font-semibold py-2 px-2 border-b">Start Date : <span class="font-normal">2010</span>
          </p>
          <p class="text-sm font-semibold py-2 px-2">End Date : <span class="font-normal">2017</span>
          </p>
        </div>
        <div class="rounded-md border border-">
          <p class="text-sm font-semibold bg-primary/25 py-2 px-2 rounded-md shadow-custom">Work Experience</p>
          <p class="text-sm font-semibold py-2 px-2 border-b">Work Title : <span class="font-normal">Graphics Designer</span>
          </p>
          <p class="text-sm font-semibold py-2 px-2 border-b">Company Name : <span class="font-normal">Goggle</span>
          </p>
          <p class="text-sm font-semibold py-2 px-2 border-b">Start Date : <span class="font-normal">2017</span>
          </p>
          <p class="text-sm font-semibold py-2 px-2">End Date : <span class="font-normal">I currently work here</span>
          </p>
        </div>
      </div>
    </div>
    <div class="hidden md:block w-full md:w-5/12 p-10 bg-[#FAFAFA] space-y-5">
      <h5>Candidate Information</h5>
      <div class="space-y-1">
        <p class="text-bodyText font-xs">I am looking for</p>
        <p class="font-medium">Web Developer</p>
      </div>
      <div class="space-y-1">
        <p class="text-bodyText font-xs">Email</p>
        <p class="font-medium">joyerjoy56@gmail.com</p>
      </div>
      <div class="space-y-1">
        <p class="text-bodyText font-xs">LinkedIn URL </p>
        <p class="font-medium">https://www.linkedin.com/in/saimul -islam-67370b194/</p>
      </div>
      <div class="space-y-1">
        <p class="text-bodyText font-xs">Phone number</p>
        <p class="font-medium">01711244963</p>
      </div>
      <div class="space-y-1">
        <p class="text-bodyText font-xs">Location</p>
        <p class="font-medium">Dhaka, Bamgladesh</p>
      </div>
      <div class="space-y-1">
        <p class="text-bodyText font-xs">Saas experience</p>
        <p class="font-medium">yes</p>
      </div>
      <div class="space-y-1">
        <p class="text-bodyText font-xs">Salary expectation</p>
        <p class="font-medium">$50k-$100k</p>
      </div>
      <div class="space-y-1">
        <p class="text-bodyText font-xs">Skills</p>
        <p class="font-medium uppercase">graphic design, UI/UX Design , digital marketing, web developer</p>
      </div>
    </div>
  </div>
</main>
@endsection