@extends('layouts.app')

@section('content')
<main class="w-11/12 md:max-w-[767px] lg:max-w-[1000px] xl:max-w-[1200px] container mx-auto my-10">
  <h4 class="my-14">My Profile</h4>
  <button class="showSidebar btn-button flex md:hidden justify-start items-center mb-4">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
      <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
    </svg> Show Sidebar </button>
  <div class="flex justify-between items-start gap-4 h-[600px]">
    <nav class="sidebar hidden md:block  md:max-w-4/12 xl:w-1/4 shadow-custom pt-8 fixed md:static top-0 left-0 z-40 bg-white h-screen md:h-full  overflow-y-auto md:overflow-y-hidden">
      <ul>
        <li class="closeSidebar flex md:hidden justify-center items-center cursor-pointer text-sm font-bold text-red-600">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg> Close
        </li>
        <li class="w-full">
          <a href="/src/candidate-myapplication.html" class="flex justify-start items-center gap-3 h-16 w-full  px-8 md:px-2 lg:px-8">
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
          <a href="/src/candidate-myjob.html" class="flex justify-start items-center gap-3 h-16 w-full  px-8 md:px-2 lg:px-8">
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
          <a href="/src/candidate-myprofile.html" class="flex justify-start items-center gap-3 h-16  px-8 md:px-2 lg:px-8">
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
          <a href="/src/candidate-myaccount.html" class="flex justify-start items-center gap-3 h-16 w-full  px-8 md:px-2 lg:px-8">
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
        <li class=" shadow-custom bg-primary/10 border-r-8 border-r-primary w-full">
          <a href="/src/candidate-messages.html" class="flex justify-start items-center gap-3 h-16 w-full  px-8 md:px-2 lg:px-8">
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
          <a href="/src/candidate-jobapplicants.html" class="flex justify-start items-center gap-3 h-16 w-full  px-8 md:px-2 lg:px-8">
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
          <a href="/src/candidate-talentcommunity.html" class="flex justify-start items-center gap-3 h-16 w-full  px-8 md:px-2 lg:px-8">
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
          <a href="/src/candidate-jobpostform.html" class="flex justify-start items-center gap-3 h-16 w-full  px-8 md:px-2 lg:px-8">
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
        <li class="w-full">
          <a href="/src/candidate-subscription.html" class="flex justify-start items-center gap-3 h-16 w-full  px-8 md:px-2 lg:px-8">
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
    <div class="flex flex-col w-full md:hidden">
      <button class="back-message my-4">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 p-3 shadow-custom rounded-md">
          <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
        </svg>
      </button>
      <!-- for mobile  -->
      <!-- second column -->
      <div class="all-user w-full md:w-1/4 shadow-custom p-8 md:p-2 lg:p-8 md:hidden flex flex-col rounded-xl space-y-3 h-full">
        <div class="relative">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="absolute top-3 left-2 w-4 h-4 stroke-2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
          </svg>
          <input type="text" class="bg-gradient h-10 w-full pl-8 rounded-lg focus:outline-none text-xs" name="" placeholder="Search contacts....">
        </div>
        <p class="text-bodyText texs-xs font-normal space-x-3 md:space-x-1 lg:space-x-3">
          <a href="#">All</a>
          <a href="#">Read</a>
          <a href="#">Unread</a>
        </p>
        <div class="space-y-6">
          <div class="user flex justify-between items-center cursor-pointer">
            <div class="flex justify-start items-center gap-3 md:gap-1 lg:gap-3">
              <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 stroke-1 fill-white bg-[#D9D9D9] p-2 rounded-full stroke-none">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                </svg>
              </div>
              <div>
                <p class="text-sm font-normal text-bodyText">Admin</p>
                <p class="text-xs font-normal text-[#C0C0C0]">test</p>
              </div>
            </div>
            <div>
              <p class="text-sm font-normal text-bodyText">2 years</p>
            </div>
          </div>
          <div class="user flex justify-between items-center cursor-pointer">
            <div class="flex justify-start items-center gap-1 lg:gap-3">
              <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 stroke-1 fill-white bg-[#D9D9D9] p-2 rounded-full stroke-none">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                </svg>
              </div>
              <div>
                <p class="text-sm font-normal text-bodyText">Admin</p>
                <p class="text-xs font-normal text-[#C0C0C0]">test</p>
              </div>
            </div>
            <div>
              <p class="text-sm font-normal text-bodyText">2 years</p>
            </div>
          </div>
          <div class="user flex justify-between items-center cursor-pointer">
            <div class="flex justify-start items-center gap-1 lg:gap-3">
              <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 stroke-1 fill-white bg-[#D9D9D9] p-2 rounded-full stroke-none">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                </svg>
              </div>
              <div>
                <p class="text-sm font-normal text-bodyText">Admin</p>
                <p class="text-xs font-normal text-[#C0C0C0]">test</p>
              </div>
            </div>
            <div>
              <p class="text-sm font-normal text-bodyText">2 years</p>
            </div>
          </div>
        </div>
      </div>
      <!-- third column -->
      <div class="message-box w-full md:w-2/4 shadow-custom md:hidden flex flex-col justify-between rounded-xl h-full">
        <div class="space-y-3 ">
          <div class="flex justify-between items-center p-8 shadow-custom rounded-t-xl">
            <div class="flex justify-start items-center gap-3">
              <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 stroke-1 fill-white bg-[#D9D9D9] p-2 rounded-full stroke-none">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                </svg>
              </div>
              <div>
                <p class="text-sm font-normal text-bodyText">Admin</p>
                <p class="text-xs font-normal text-[#C0C0C0]">test</p>
              </div>
            </div>
            <div>
              <button class="text-red-500">Delete Conversation</button>
            </div>
          </div>
          <div class="flex justify-start items-center w-full px-8 gap-8 md:gap-2 lg:gap-8">
            <div class="flex justify-start items-center gap-3 md:gap-2 lg:gap-3">
              <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 stroke-1 fill-white bg-[#D9D9D9] p-2 rounded-full stroke-none">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                </svg>
              </div>
              <div>
                <p class="text-sm font-normal text-bodyText">Admin</p>
              </div>
            </div>
            <div>
              <p class="text-xs font-normal text-[#C0C0C0]">July 1, 2021 4:09am</p>
            </div>
          </div>
          <div class="px-8">
            <button class="btn-buttonLight text-white w-full md:w-40 mr-20  py-3 px-4">tests stets</button>
          </div>
        </div>
        <div class="text-right p-8">
          <button class="bg-button rounded-xl text-white py-3 px-4 w-full md:w-40 mr-10 items-end">Send</button>
        </div>
      </div>
    </div>
    <!-- for others -->
    <!-- second column -->
    <div class="w-full md:w-3/12 xl:w-1/4 shadow-custom py-8 px-8 md:px-3 lg:px-8 hidden md:flex flex-col rounded-xl space-y-3 h-full">
      <div class="relative">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="absolute top-3 left-2 w-4 h-4 stroke-2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
        </svg>
        <input type="text" class="bg-gradient h-10 w-full pl-8 rounded-lg focus:outline-none text-xs" name="" placeholder="Search contacts....">
      </div>
      <p class="text-bodyText texs-xs font-normal space-x-3 md:space-x-1 lg:space-x-3">
        <a href="#">All</a>
        <a href="#">Read</a>
        <a href="#">Unread</a>
      </p>
      <div class="space-y-6">
        <div class="flex justify-between items-center cursor-pointer">
          <div class="flex justify-start items-center gap-3 md:gap-1 lg:gap-3">
            <div class="">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 stroke-1 fill-white bg-[#D9D9D9] p-2 rounded-full stroke-none">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
              </svg>
            </div>
            <div>
              <p class="text-sm font-normal text-bodyText">Admin</p>
              <p class="text-xs font-normal text-[#C0C0C0]">test</p>
            </div>
          </div>
          <div>
            <p class="text-sm font-normal text-bodyText">2 years</p>
          </div>
        </div>
        <div class="flex justify-between items-center cursor-pointer">
          <div class="flex justify-start items-center gap-1 lg:gap-3">
            <div class="">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 stroke-1 fill-white bg-[#D9D9D9] p-2 rounded-full stroke-none">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
              </svg>
            </div>
            <div>
              <p class="text-sm font-normal text-bodyText">Admin</p>
              <p class="text-xs font-normal text-[#C0C0C0]">test</p>
            </div>
          </div>
          <div>
            <p class="text-sm font-normal text-bodyText">2 years</p>
          </div>
        </div>
        <div class="flex justify-between items-center cursor-pointer">
          <div class="flex justify-start items-center gap-1 lg:gap-3">
            <div class="">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 stroke-1 fill-white bg-[#D9D9D9] p-2 rounded-full stroke-none">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
              </svg>
            </div>
            <div>
              <p class="text-sm font-normal text-bodyText">Admin</p>
              <p class="text-xs font-normal text-[#C0C0C0]">test</p>
            </div>
          </div>
          <div>
            <p class="text-sm font-normal text-bodyText">2 years</p>
          </div>
        </div>
      </div>
    </div>
    <!-- third column -->
    <div class="w-full md:w-5/12 xl:w-2/4 shadow-custom hidden md:flex flex-col justify-between rounded-xl h-full">
      <div class="space-y-3 ">
        <div class="flex justify-between items-center p-8 shadow-custom rounded-t-xl">
          <div class="flex justify-start items-center gap-3">
            <div class="">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 stroke-1 fill-white bg-[#D9D9D9] p-2 rounded-full stroke-none">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
              </svg>
            </div>
            <div>
              <p class="text-sm font-normal text-bodyText">Admin</p>
              <p class="text-xs font-normal text-[#C0C0C0]">test</p>
            </div>
          </div>
          <div>
            <button class="text-red-500">Delete Conversation</button>
          </div>
        </div>
        <div class="flex justify-start items-center w-full px-8 md:gap-2 lg:gap-8">
          <div class="flex justify-start items-center md:gap-2 lg:gap-3">
            <div class="">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 stroke-1 fill-white bg-[#D9D9D9] p-2 rounded-full stroke-none">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
              </svg>
            </div>
            <div>
              <p class="text-sm font-normal text-bodyText">Admin</p>
            </div>
          </div>
          <div>
            <p class="text-xs font-normal text-[#C0C0C0]">July 1, 2021 4:09am</p>
          </div>
        </div>
        <div class="px-8">
          <button class="btn-buttonLight text-white w-40 mr-20  py-3 px-4">tests stets</button>
        </div>
      </div>
      <div class="text-right p-8">
        <button class="bg-button rounded-xl text-white py-3 px-4 w-40 mr-10 items-end">Send</button>
      </div>
    </div>
  </div>
</main>
@endsection