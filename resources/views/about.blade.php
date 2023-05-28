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
<main class="container mx-auto w-11/12 md:max-w-[767px] lg:max-w-[1000px] xl:max-w-[1200px] space-y-7">
  <section class=" flex flex-col md:flex-row justify-between items-center py-8">
    <!-- <div class=" flex justify-center items-center py-8"> -->
    <div class="w-full md:w-1/2 space-y-5 flex flex-col justify-center items-center md:justify-start md:items-start">
      <h2 class="text-center md:text-left">About Us</h2>
      <img src="/src/img/aboutus.png" alt="" class="md:hidden">
      <p class="text-sm font-normal text-bodyText">Athyna is a global employment platform, whose mission is to help democratise opportunity across the globe. We do this by creating a sustainable ecosystem of talent, and tools in order to bridge the gap between companies and job seekers.We partner with solo-entrepreneurs to decacorns (10X unicorns) but our real passion is in brand and culture. Business should be a force for good in the world and we pride ourselves on doing for-profit business the right way. Business by example, by way of caring about our people and by building impact into our business model. We also invest 5% of all revenue into impact-driven startups.We aim to inspire and equip the next generation of founders to build great, meaningful companies.</p>
    </div>
    <div class="w-full md:w-1/2 flex justify-center">
      <img src="/src/img/aboutus.png" alt="" class="hidden md:block">
    </div>
    <!-- </div> -->
  </section>
  <!-- values -->
  <section class="">
    <div class="space-y-12">
      <div class="text-center space-y-5">
        <h2>What are value</h2>
        <p>Values are how you act when others are not around. Here are ours.</p>
      </div>
      <div class="grid grid-cols-2 items-start gap-4 md:gap-10">
        <div class="flex flex-col justify-center items-start space-y-8 md:space-y-12">
          <div class=" rounded-md shadow-custom  p-10">
            <img src="/src/img/value1.png" alt="">
          </div>
          <div class="space-y-3">
            <h4>Passionate & Uniquely Ourselves</h4>
            <p>Be yourself, and allow others to thrive around you. Remember the human behind the work.</p>
          </div>
        </div>
        <div class="flex flex-col justify-center items-start  space-y-8 md:space-y-12 ">
          <div class=" rounded-md shadow-custom  p-10">
            <img src="/src/img/value2.png" alt="">
          </div>
          <div class="space-y-3">
            <h4>Driven by Integrity</h4>
            <p>Build strong relationships with everyone you meet through honesty, integrity and trust.</p>
          </div>
        </div>
        <div class="flex flex-col justify-center items-start  space-y-8 md:space-y-12">
          <div class=" rounded-md shadow-custom  p-10">
            <img src="/src/img/value3.png" alt="">
          </div>
          <div class="space-y-3">
            <h4>Be There for One Another</h4>
            <p>Remember that we are in this together. Support each other to deliver our highest potential.</p>
          </div>
        </div>
        <div class="flex flex-col justify-center items-start  space-y-8 md:space-y-12">
          <div class="rounded-md shadow-custom p-10">
            <img src="/src/img/value4.png" alt="">
          </div>
          <div class="space-y-3">
            <h4>Make Impact, Empower Others</h4>
            <p>Have the courage to dream big. Make decisions that lead to improved outcomes for the world.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- team -->
  <section class="space-y-20 py-20">
    <h2 class="text-center ">We built this together as a team</h2>
    <div class="flex flex-col md:flex-row justify-between items-center gap-4">
      <div class="w-full md:w-[550px]">
        <img src="/src/img/aboutus2.png" alt="" class="w-full">
      </div>
      <div class=" w-full md:w-1/2">
        <p class="text-sm font-normal">We wanted our values to represent each one of us deciding what we want to honor, and the impact we want to generate in the world. We gathered the whole gang through a video session and using Miro boards, we contributed in real-time, sharing our perspectives and everyone had the chance to speak on what we should stand for.We are proud to say this is Athyna.</p>
      </div>
    </div>
  </section>
</main>
@endsection