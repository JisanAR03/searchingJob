@extends('layouts.app')

@section('content')
<main class="w-11/12 md:max-w-[767px] lg:max-w-[1000px] xl:max-w-[1200px] container mx-auto my-10">
      <button class="showSidebar btn-button flex md:hidden justify-start items-center mb-4">
        <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
        Show Sidebar
      </button>
        <div class="flex justify-end my-5">
          <div class="flex  justify-start items-center gap-4 w-full md:w-3/4">
            <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 p-3 shadow-custom rounded-md">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
            </svg>
            <p class="text-bodyText">Back to setting</p>
          </div>
        </div>
        <div class="flex justify-between items-start md:w-11/12 lg:w-full gap-4">
          <nav class="sidebar hidden md:block min-w-[270px] md:min-w-2/6 lg:w-2/5 xl:w-1/4 shadow-custom pt-8 fixed md:static top-0 left-0 z-40 bg-white h-screen md:h-full  overflow-y-auto md:overflow-y-hidden">
            <ul>
              <li class="closeSidebar flex md:hidden justify-center items-center cursor-pointer text-sm font-bold text-red-600">
                <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
                Close
              </li>
              <li class="w-full">
                <a href="/src/employer-jobapplicants.html" class="flex justify-start items-center gap-3 h-16 w-full px-8">
                  <div class="">
                    <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
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
                <a href="/src/employer-myjob.html" class="flex justify-start items-center gap-3 h-16 w-full px-8">
                  <div class="">
                    <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
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
                <a href="/src/employer-myprofile.html" class="flex justify-start items-center gap-3 h-16 px-8">
                  <div class="">
                    <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
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
                <a href="/src/employer-myaccount.html" class="flex justify-start items-center gap-3 h-16 w-full px-8">
                  <div class="">
                    <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
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
              <a href="/src/employer-messages.html" class="flex justify-start items-center gap-3 h-16 w-full px-8">
                <div class="">
                  <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
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
                <a href="/src/employer-jobapplicants.html" class="flex justify-start items-center gap-3 h-16 w-full px-8">
                  <div class="">
                    <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
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
                <a href="/src/employer-talentcommunity.html" class="flex justify-start items-center gap-3 h-16 w-full px-8">
                  <div class="">
                    <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
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
                <a href="/src/employer-jobpostform.html" class="flex justify-start items-center gap-3 h-16 w-full px-8">
                  <div class="">
                    <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
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
                <a href="/src/employer-subscription.html" class="flex justify-start items-center gap-3 h-16 w-full px-8">
                  <div class="">
                    <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
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
          <div class="w-full md:w-4/6 xl:w-3/4 shadow-custom rounded-xl p-8 xl:pr-14 space-y-5">
            
            <h6 class="font-medium">Current Plan</h6>
            <div class="flex justify-between items-center">
              <div class="space-y-4 w-full md:w-3/5 lg:w-3/4">
                <div class="flex justify-start items-center gap-3 xl:gap-7">
                  <h4 class="text-button">ELITE</h4>
                  <button class="bg-primary/50 text-sm text-[#A7A7A7] rounded-2xl px-3 py-2">Yearly</button>
                  <div class="space-y-4">
                    <p>$2.80 / user /month</p>
                    <button class="btn-buttonLight w-36 md:w-40 py-1 text-[#A7A7A7] text-sm">After 20% discount</button>
                  </div>
                </div>
                <p class="text-sm text-bodyText">Ideal for Remote Teams or a combination of in-house, mobile & remote teams.      </p>
              </div>
              <div class="hidden md:block space-y-2 w-1/4 ">
                <button class="btn-button lg:48 xl:w-52 h-12">Change Plan</button>
                <button class="btn-white border-black  lg:48 xl:w-52 h-12 !px-1 text-button font-semibold">Cancel Subscription</button>
              </div>
            </div>
            <p class="text-sm text-bodyText flex justify-start items-center gap-2">Status :
              <button>
                <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 stroke-2 bg-button rounded-full p-1 ml-2 text-white">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                </svg>
              </button>
              Active</p>
            <p class="text-sm text-bodyText">Renew subscription by <span class="font-medium text-[#4C4C4C]">January 26, 2024</span></p>
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center">
              <div class="flex justify-start items-start gap-10 md:gap-4 xl:gap-10">
                <div class="">
                  <p class="text-sm text-bodyText">Payment Method</p>
                  <div class="flex justify-start items-center gap-2">
                    <img src="/src/img/visapro.png" alt="" srcset="" class="w-10 h-10">
                    <p class="text-bodyText font-semibold text-sm">****5702</p>
                  </div>
                </div>
                <div class="space-y-2">
                  <p class="text-sm text-bodyText">Expiry Date</p>
                  <p class="text-sm text-bodyText">12/2027</p>
                </div>
              </div>
              <button class="btn-white border-button w-full md:w-72 text-bodyText font-semibold py-3">Change payment Method</button>
            </div>
            <div class="md:hidden space-y-2 w-full flex flex-col">
              <button class="btn-button w-full  md:w-52 h-12">Change Plan</button>
              <button class="btn-white border-black w-full md:w-52 h-12 text-button font-semibold">Cancel Subscription</button>
            </div>
          </div>
            
        </div>
    </main>
@endsection