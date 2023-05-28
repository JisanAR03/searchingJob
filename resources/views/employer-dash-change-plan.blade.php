@extends('layouts.app')

@section('content')
<main class="w-11/12 md:max-w-[767px] lg:max-w-[1000px] xl:max-w-[1200px] container mx-auto my-10">
  <button class="showSidebar btn-button flex md:hidden justify-start items-center mb-4">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
      <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
    </svg> Show Sidebar </button>
  <div class="flex justify-end my-5">
    <div class="flex  justify-start items-center gap-4 w-full md:w-4/6 xl:w-3/4">
      <button>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 p-3 shadow-custom rounded-md">
          <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
        </svg>
      </button>
      <p class="text-bodyText">Back to setting</p>
    </div>
  </div>
  <div class="flex justify-between md:justify-between items-start w-full gap-4">
    <nav class="sidebar hidden md:block  md:max-w-2/6 xl:w-1/4 shadow-custom pt-8 fixed md:static top-0 left-0 z-40 bg-white h-screen md:h-full  overflow-y-auto md:overflow-y-hidden">
      <ul>
        <li class="closeSidebar flex md:hidden justify-center items-center cursor-pointer text-sm font-bold text-red-600">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg> Close
        </li>
        <li class="w-full">
          <a href="/src/employer-jobapplicants.html" class="flex justify-start items-center gap-3 h-16 w-full  px-8 md:px-2 lg:px-8">
            <div class="">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
              </svg>
            </div>
            <div>
              <p class="font-semibold">My Application</p>
              <p class="text-sm font-medium text-bodyText hidden md:block">view jobs you applied to</p>
            </div>
          </a>
        </li>
        <li class="w-full">
          <a href="/src/employer-myjob.html" class="flex justify-start items-center gap-3 h-16 w-full  px-8 md:px-2 lg:px-8">
            <div class="">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
              </svg>
            </div>
            <div>
              <p class="font-semibold">My Job</p>
              <p class="text-sm font-medium text-bodyText hidden md:block">view jobs you applied to</p>
            </div>
          </a>
        </li>
        <li class="w-full">
          <a href="/src/employer-myprofile.html" class="flex justify-start items-center gap-3 h-16  px-8 md:px-2 lg:px-8">
            <div class="">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
              </svg>
            </div>
            <div>
              <p class="font-semibold">My Profile</p>
              <p class="text-sm font-medium text-bodyText hidden md:block">Manage your profile</p>
            </div>
          </a>
        </li>
        <li class="w-full">
          <a href="/src/employer-myaccount.html" class="flex justify-start items-center gap-3 h-16 w-full  px-8 md:px-2 lg:px-8">
            <div class="">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
              </svg>
            </div>
            <div>
              <p class="font-semibold">My Account</p>
              <p class="text-sm font-medium text-bodyText hidden md:block">Edit personal details</p>
            </div>
          </a>
        </li>
        <li class="w-full">
          <a href="/src/employer-messages.html" class="flex justify-start items-center gap-3 h-16 w-full  px-8 md:px-2 lg:px-8">
            <div class="">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
              </svg>
            </div>
            <div>
              <p class="font-semibold">Massage</p>
              <p class="text-sm font-medium text-bodyText hidden md:block">Edit personal details</p>
            </div>
          </a>
        </li>
        <li class="w-full">
          <a href="/src/employer-jobapplicants.html" class="flex justify-start items-center gap-3 h-16 w-full  px-8 md:px-2 lg:px-8">
            <div class="">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
              </svg>
            </div>
            <div>
              <p class="font-semibold">Job applicant</p>
              <p class="text-sm font-medium text-bodyText hidden md:block">Edit personal details</p>
            </div>
          </a>
        </li>
        <li class="w-full">
          <a href="/src/employer-talentcommunity.html" class="flex justify-start items-center gap-3 h-16 w-full  px-8 md:px-2 lg:px-8">
            <div class="">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
              </svg>
            </div>
            <div>
              <p class="font-semibold">Talent community</p>
              <p class="text-sm font-medium text-bodyText hidden md:block">Edit personal details</p>
            </div>
          </a>
        </li>
        <li class="w-full">
          <a href="/src/employer-jobpostform.html" class="flex justify-start items-center gap-3 h-16 w-full  px-8 md:px-2 lg:px-8">
            <div class="">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
              </svg>
            </div>
            <div>
              <p class="font-semibold">Post a new job </p>
              <p class="text-sm font-medium text-bodyText hidden md:block">Edit personal details</p>
            </div>
          </a>
        </li>
        <li class=" shadow-custom bg-primary/10 border-r-8 border-r-primary w-full">
          <a href="/src/employer-subscription.html" class="flex justify-start items-center gap-3 h-16 w-full  px-8 md:px-2 lg:px-8">
            <div class="">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
              </svg>
            </div>
            <div>
              <p class="font-semibold">Subscription</p>
              <p class="text-sm font-medium text-bodyText hidden md:block">Edit personal details</p>
            </div>
          </a>
        </li>
      </ul>
    </nav>
    <!-- pricing table -->
    <!-- flex flex-col md:flex-row justify-center items-center md:items-start  -->
    <!-- <div class="w-full md:w-4/6 xl:w-3/4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 justify-center items-center gap-4 md:gap-2 lg:gap-4"><div class="flex flex-col justify-start rounded-xl border border-1 border-button px-5 py-5 space-y-24 h-full md:h-[460px] xl:h-[400px] "><div class="space-y-6"><div class="space-y-3.5"><h6>Basic</h6><p class="text-sm">For individuals or teams just getting
started with project management.</p></div><div class="space-y-2"><h3 class="font-bold text-black text-[22px] md:text-[24px] lg:text-[28px]">$0/Month</h3><p class="text-xs">Free forever</p><ul class="pricing_ul"><li class="text-sm">No access to the SaaS network</li></ul></div></div><button class="btn-white border-black py-2 px-4 w-full">Get Started</button></div><div class="flex flex-col justify-start rounded-xl border border-1 border-button border-t-[15px] border-t-button px-5 py-2 space-y-10 h-full md:h-[460px] xl:h-[400px]  "><div class="space-y-6"><div class="space-y-3.5"><h4 class="">Premium</h4><p class="text-sm">For individuals or teams just getting
started with project management.</p></div><div class="space-y-2"><h3 class="font-bold text-black text-[22px] md:text-[24px] lg:text-[28px]">$250/Month</h3><p class="text-sm">Per user, per month billed annually
US$ 13.49 billed monthly</p><ul class="pricing_ul"><li class="text-sm">Post unlimited jobs</li><li class="text-sm">Access to the SaaS network</li></ul></div></div><button class="rounded-xl bg-button border border-solid border-button text-white py-2 px-4 w-full">Get Started</button></div><div class="place-self-center flex flex-col justify-start rounded-xl border border-1 border-button px-5 py-5 space-y-5 h-full md:h-[460px] xl:h-[400px]  "><div class="space-y-6"><div class="space-y-3.5"><h6 class="text-button">Enterprise</h6><p class="text-sm">For individuals or teams just getting
started with project management.</p></div><div class="space-y-2"><h3 class="font-bold text-black text-[22px] md:text-[24px] lg:text-[28px]">$500/Month</h3><p class="text-sm">Per user, per month billed annually
US$ 30.49 billed monthly</p><ul class="pricing_ul"><li class="text-sm">Post unlimited jobs</li><li class="text-sm">Access to the SaaS network</li><li class="text-sm">Access to a SaaS Talent Sourcer</li></ul></div></div><button class="btn-white border-black py-2 px-4 w-full">Get Started</button></div></div> -->
    <div class="w-full md:w-4/6 xl:w-3/4  flex flex-col lg:flex-row justify-center items-center md:items-start gap-4 md:gap-2 lg:gap-4">
      <div class=" w-full lg:w-2/3 flex flex-col md:flex-row justify-center items-center md:items-start gap-4 md:gap-2 lg:gap-4">
        <div class="w-full flex flex-col justify-start rounded-xl border border-1 border-button px-5 py-5 space-y-24 h-full md:h-[420px] lg:h-[450px] xl:h-[400px] ">
          <div class="space-y-6">
            <div class="space-y-3.5">
              <h6>Basic</h6>
              <p class="text-sm">For individuals or teams just getting started with project management.</p>
            </div>
            <div class="space-y-2">
              <h3 class="font-bold text-black text-[22px] md:text-[24px] lg:text-[28px]">$0/Month</h3>
              <p class="text-xs">Free forever</p>
              <ul class="pricing_ul">
                <li class="text-sm">No access to the SaaS network</li>
              </ul>
            </div>
          </div>
          <button class="btn-white border-black py-2 px-4 w-full">Get Started</button>
        </div>
        <div class="w-full flex flex-col justify-start rounded-xl border border-1 border-button border-t-[15px] border-t-button px-5 py-2 space-y-10 h-full md:h-[420px] lg:h-[450px] xl:h-[400px]  ">
          <div class="space-y-6">
            <div class="space-y-3.5">
              <h4 class="">Premium</h4>
              <p class="text-sm">For individuals or teams just getting started with project management.</p>
            </div>
            <div class="space-y-2">
              <h3 class="font-bold text-black text-[22px] md:text-[24px] lg:text-[28px]">$250/Month</h3>
              <p class="text-sm">Per user, per month billed annually US$ 13.49 billed monthly</p>
              <ul class="pricing_ul">
                <li class="text-sm">Post unlimited jobs</li>
                <li class="text-sm">Access to the SaaS network</li>
              </ul>
            </div>
          </div>
          <button class="rounded-xl bg-button border border-solid border-button text-white py-2 px-4 w-full">Get Started</button>
        </div>
      </div>
      <div class="w-full md:w-2/3 lg:w-1/3 place-self-center flex flex-col justify-start rounded-xl border border-1 border-button px-5 py-5 space-y-5 h-full lg:h-[450px] xl:h-[400px]  ">
        <div class="space-y-6">
          <div class="space-y-3.5">
            <h6 class="text-button">Enterprise</h6>
            <p class="text-sm">For individuals or teams just getting started with project management.</p>
          </div>
          <div class="space-y-2">
            <h3 class="font-bold text-black text-[22px] md:text-[24px] lg:text-[28px]">$500/Month</h3>
            <p class="text-sm">Per user, per month billed annually US$ 30.49 billed monthly</p>
            <ul class="pricing_ul">
              <li class="text-sm">Post unlimited jobs</li>
              <li class="text-sm">Access to the SaaS network</li>
              <li class="text-sm">Access to a SaaS Talent Sourcer</li>
            </ul>
          </div>
        </div>
        <button class="btn-white border-black py-2 px-4 w-full">Get Started</button>
      </div>
    </div>
  </div>
</main>
@endsection