@extends('layouts.app')

@section('content')
<main class="w-11/12 md:max-w-[767px] lg:max-w-[1000px] xl:max-w-[1200px] container mx-auto my-10">
  <h4 class="my-14">My Profile</h4>
  <button class="showSidebar btn-button flex md:hidden justify-start items-center mb-4">
    <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
      <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
    </svg> Show Sidebar </button>
  <div class="flex justify-center items-start gap-4 ">
    <nav class="sidebar hidden md:block min-w-[270px] md:min-w-2/6 xl:w-1/4 shadow-custom pt-8 fixed md:static top-0 left-0 z-40 bg-white h-screen md:h-full">
      <ul>
        <li class="closeSidebar flex md:hidden justify-center items-center cursor-pointer text-sm font-bold text-red-600">
          <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg> Close
        </li>
        <li class=" shadow-custom bg-primary/10 border-r-8 border-r-primary w-full">
          <a href="/src/candidate-myapplication.html" class="flex justify-start items-center gap-3 h-16 w-full px-8">
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
          <a href="/src/candidate-myprofile.html" class="flex justify-start items-center gap-3 h-16 px-8">
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
          <a href="/src/candidate-myaccount.html" class="flex justify-start items-center gap-3 h-16 w-full px-8">
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
          <a href="/src/candidate-messages.html" class="flex justify-start items-center gap-3 h-16 w-full px-8">
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
          <a href="/src/candidate-jobapplicant.html" class="flex justify-start items-center gap-3 h-16 w-full px-8">
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
          <a href="/src/candidate-talentcommunity.html" class="flex justify-start items-center gap-3 h-16 w-full px-8">
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
          <a href="/src/candidate-postanewjob.html" class="flex justify-start items-center gap-3 h-16 w-full px-8">
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
        <li class="w-full">
          <a href="/src/candidate-postanewjob.html" class="flex justify-start items-center gap-3 h-16 w-full px-8">
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
    <div class="w-full md:w-3/4 shadow-custom pl-8 pt-8 pr-8 pb-8 flex flex-col rounded space-y-3 h-fit">
      <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-2">
        <div class="relative fWIMV">
          <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="absolute top-3 left-2 w-4 h-4 stroke-2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
          </svg>
          <input type="text" class="bg-gradient h-10 w-40 pl-8 rounded-lg focus:outline-none text-xs fWIMV" name="" placeholder="Search contacts....">
        </div>
        <div class="space-x-2 md:space-x-5 md:mr-8 fWIMV mTFMV mBFMV">
          <label for="" class="text-base font-medium">Sort By</label>
          <select name="" id="" class="rounded-xl border border-button px-7 py-1 eWIMV select2">
            <option value="">Newest</option>
            <option value="">Oldest</option>
          </select>
        </div>
      </div>
      <div>
        <div class="flex justify-between items-center shadow-custom p-4 text-button text-xs">
          <div class="">
            <span>Job Title</span>
          </div>
          <div class="flex justify-end md:justify-start items-center w-56 gap-8 sm:gap-16 md:gap-16 lg:gap-20">
            <div class="">
              <span>Date applied</span>
            </div>
            <div class="">
              <span>Action</span>
            </div>
          </div>
        </div>
        <div class="flex justify-between items-center px-4 py-5 border-b border-b-[#A7A7A7]">
          <div>
            <div class="flex justify-start items-center gap-3">
              <div class="w-9 h-9 bg-bodyText rounded-md"></div>
              <div class="space-y-1">
                <p class="text-xs font-medium">Finance Manager & Health</p>
                <div class="flex justify-start items-center gap-1 md:gap-4">
                  <div class="flex justify-center items-center">
                    <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                    </svg>
                    <span class="text-xs text-bodyText">Design</span>
                  </div>
                  <div class="flex justify-center items-center">
                    <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                      <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                    </svg>
                    <span class="text-xs text-bodyText">New York</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="flex justify-end md:justify-start gap-4 sm:gap-12 md:gap-16 lg:gap-20 w-56">
            <div class="">
              <span class="text-xs text-bodyText">July 20, 2021</span>
            </div>
            <div class="flex justify-around items-center gap-3">
              <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 bg-iconBg rounded p-1 stroke-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
              <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 bg-iconBg rounded p-1 stroke-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </div>
          </div>
        </div>
        <div class="flex justify-between items-center px-4 py-5 border-b border-b-[#A7A7A7]">
          <div>
            <div class="flex justify-start items-center gap-3">
              <div class="w-9 h-9 bg-bodyText rounded-md"></div>
              <div class="space-y-1">
                <p class="text-xs font-medium">Finance Manager & Health</p>
                <div class="flex justify-start items-center gap-1 md:gap-4">
                  <div class="flex justify-center items-center">
                    <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                    </svg>
                    <span class="text-xs text-bodyText">Design</span>
                  </div>
                  <div class="flex justify-center items-center">
                    <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                      <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                    </svg>
                    <span class="text-xs text-bodyText">New York</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="flex justify-end md:justify-start gap-4 sm:gap-12 md:gap-16 lg:gap-20 w-56">
            <div class="">
              <span class="text-xs text-bodyText">July 20, 2021</span>
            </div>
            <div class="flex justify-around items-center gap-3">
              <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 bg-iconBg rounded p-1 stroke-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
              <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 bg-iconBg rounded p-1 stroke-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </div>
          </div>
        </div>
        <div class="flex justify-between items-center px-4 py-5 border-b border-b-[#A7A7A7]">
          <div>
            <div class="flex justify-start items-center gap-3">
              <div class="w-9 h-9 bg-bodyText rounded-md"></div>
              <div class="space-y-1">
                <p class="text-xs font-medium">Finance Manager & Health</p>
                <div class="flex justify-start items-center gap-1 md:gap-4">
                  <div class="flex justify-center items-center">
                    <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                    </svg>
                    <span class="text-xs text-bodyText">Design</span>
                  </div>
                  <div class="flex justify-center items-center">
                    <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                      <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                    </svg>
                    <span class="text-xs text-bodyText">New York</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="flex justify-end md:justify-start gap-4 sm:gap-12 md:gap-16 lg:gap-20 w-56">
            <div class="">
              <span class="text-xs text-bodyText">July 20, 2021</span>
            </div>
            <div class="flex justify-around items-center gap-3">
              <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 bg-iconBg rounded p-1 stroke-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
              <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 bg-iconBg rounded p-1 stroke-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </div>
          </div>
        </div>
        <div class="flex justify-between items-center px-4 py-5 border-b border-b-[#A7A7A7]">
          <div>
            <div class="flex justify-start items-center gap-3">
              <div class="w-9 h-9 bg-bodyText rounded-md"></div>
              <div class="space-y-1">
                <p class="text-xs font-medium">Finance Manager & Health</p>
                <div class="flex justify-start items-center gap-1 md:gap-4">
                  <div class="flex justify-center items-center">
                    <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                    </svg>
                    <span class="text-xs text-bodyText">Design</span>
                  </div>
                  <div class="flex justify-center items-center">
                    <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                      <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                    </svg>
                    <span class="text-xs text-bodyText">New York</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="flex justify-end md:justify-start gap-4 sm:gap-12 md:gap-16 lg:gap-20 w-56">
            <div class="">
              <span class="text-xs text-bodyText">July 20, 2021</span>
            </div>
            <div class="flex justify-around items-center gap-3">
              <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 bg-iconBg rounded p-1 stroke-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
              <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 bg-iconBg rounded p-1 stroke-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </div>
          </div>
        </div>
        <div class="flex justify-between items-center px-4 py-5 border-b border-b-[#A7A7A7]">
          <div>
            <div class="flex justify-start items-center gap-3">
              <div class="w-9 h-9 bg-bodyText rounded-md"></div>
              <div class="space-y-1">
                <p class="text-xs font-medium">Finance Manager & Health</p>
                <div class="flex justify-start items-center gap-1 md:gap-4">
                  <div class="flex justify-center items-center">
                    <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                    </svg>
                    <span class="text-xs text-bodyText">Design</span>
                  </div>
                  <div class="flex justify-center items-center">
                    <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                      <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                    </svg>
                    <span class="text-xs text-bodyText">New York</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="flex justify-end md:justify-start gap-4 sm:gap-12 md:gap-16 lg:gap-20 w-56">
            <div class="">
              <span class="text-xs text-bodyText">July 20, 2021</span>
            </div>
            <div class="flex justify-around items-center gap-3">
              <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 bg-iconBg rounded p-1 stroke-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
              <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 bg-iconBg rounded p-1 stroke-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection