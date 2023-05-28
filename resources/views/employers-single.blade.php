@extends('layouts.app')

@section('content')
<section class="relative z-0 bg-primary pt-4 lg:pt-0">
  <div class="container mx-auto w-11/12 md:max-w-[767px] lg:max-w-[1000px] xl:max-w-[1200px] flex items-center justify-center">
    <div class="flex flex-col md:flex-row items-center justify-between">
      <div class="space-y-3 lg:space-y-5 text-center md:text-left">
        <h1 class=""> Find your <br /> next SaaS role </h1>
        <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
        <p class="font-roboto"> Keep ‘Are you an employer?’ <br />
          <span class="text-button"> and add Post jobs and find industry professionals’ </span>
        </p>
      </div>
      <div class="w-[320px] sm:w-[490px] md:w-[550px] lg:w-[668px] ">
        <img src="/src/img/herobanner.png" alt="" class="w-full h-full" />
      </div>
    </div>
  </div>
</section>
<main class=" w-11/12 md:max-w-[767px] lg:max-w-[1000px] xl:max-w-[1200px] container mx-auto my-10 pb-16">
  <div class="flex flex-col md:flex-row justify-center items-start gap-4">
    <div class="w-full md:w-8/12 space-y-9">
      <div class="flex justify-between  items-center bg-[#FAFAFA] w-full h-[220px] p-4 md:p-12">
        <div class="flex flex-col justify-start  mb-8">
          <img src="/src/img/signature.png" alt="" srcset="" class="w-[67px] h-[67ppx]">
          <h6 class="text-lg">IBM Technologies</h6>
        </div>
        <div>
          <button class="bg-button rounded-xl text-white py-3 px-4 md:px-1 lg:px-4">Join talent community</button>
        </div>
      </div>
      <div class="block md:hidden w-full md:w-4/12 p-10 bg-[#FAFAFA] space-y-5">
        <h5>Company Information</h5>
        <div class="space-y-1">
          <p class="text-bodyText text-xs">LinkedIn URL </p>
          <p class="font-medium">https://www.linkedin.com/in/saimul -islam-67370b194/</p>
        </div>
        <div class="space-y-1">
          <p class="text-bodyText text-xs">Website</p>
          <p class="font-medium">wwww.google.com</p>
        </div>
        <div class="space-y-1">
          <p class="text-bodyText text-xs">Location</p>
          <p class="font-medium">Dhaka, Bamgladesh</p>
        </div>
      </div>
      <div class="space-y-3 text-sm py-8">
        <div class="space-y-4">
          <p class="text-[17px] font-semibold">Company Description</p>
          <p class="text-sm">Company Name: Writesonic</p>
          <p class="text-sm">Website: <a href="https://www.writesonic.com/">www.writesonic.com</a>
          </p>
        </div>
        <p class="text-sm">About us</p>
        <p class="text-sm">Writesonic is an AI-powered writing assistant with a mission to empower everyone in the world to write anything and publish anywhere. It's like Canva for writing, with tools that simplify the process of creating, editing, and publishing articles, blog posts, ads, landing pages, eCommerce product descriptions, social media posts, and many other forms of content.</p>
        <p class="text-sm">Our customers love us, as evidenced by the 5000+ 5-star reviews on G2, TrustPilot, and Capterra.</p>
        <p class="text-sm">Last year, we raised $2.6M from Y-Combinator, HOF Capital, and other leading Silicon Valley investors. We have since grown to 16 employees who work remotely and helped 300k+ professionals and businesses generate 10s of millions of pieces of content. </p>
        <p class="text-sm font-semibold">Our Mission</p>
        <ul class="list-disc list-inside space-y-2 ml-2">
          <li class="text-sm">Our mission is to empower everyone to produce high-quality and cost-effective content themselves.</li>
          <li class="text-sm">We are dedicated to simplifying content writing so that people can focus on other important tasks, giving them more time and money. This will lead to all people becoming better writers in general.</li>
        </ul>
        <p class="text-sm">We are looking for a Senior Devops Engineer to join our rapidly growing engineering team. The ideal candidate will have experience working in a DevOps environment, designing and implementing solutions to improve system.</p>
        <p class="text-sm">This position requires an individual who is highly organized and able to quickly learn and apply new technologies and processes. The Senior Devops Engineer will collaborate with software engineers, and other team members to ensure.</p>
        <p class="text-sm font-semibold">Experience: 5 to 10 Years</p>
        <p class="text-sm font-semibold">Location: Remote</p>
        <p class="text-sm font-semibold">Role: Senior DevOps Engineer</p>
      </div>
    </div>
    <!-- second column -->
    <div class="hidden md:block w-full md:w-4/12 p-10 bg-[#FAFAFA] space-y-5">
      <h5>Company Information</h5>
      <div class="space-y-1">
        <p class="text-bodyText text-xs">LinkedIn URL </p>
        <p class="font-medium break-words">https://www.linkedin.com/in/saimul -islam-67370b194/</p>
      </div>
      <div class="space-y-1">
        <p class="text-bodyText text-xs">Website</p>
        <p class="font-medium">wwww.google.com</p>
      </div>
      <div class="space-y-1">
        <p class="text-bodyText text-xs">Location</p>
        <p class="font-medium">Dhaka, Bamgladesh</p>
      </div>
    </div>
  </div>
</main>
@endsection