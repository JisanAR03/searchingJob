@extends('layouts.app')

@section('content')
<main class="w-11/12 md:max-w-[767px] lg:max-w-[1000px] xl:max-w-[1200px] container mx-auto my-10">
  <button class="showSidebar btn-button flex md:hidden justify-start items-center mb-4">
    <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
      <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
    </svg> Show Sidebar </button>
  <div class="flex justify-between items-start md:w-11/12 lg:w-full h-full gap-4">
    <nav class="sidebar hidden md:block min-w-[270px] md:min-w-2/6 lg:w-2/5 xl:w-1/4 shadow-custom pt-8 fixed md:static top-0 left-0 z-40 bg-white h-screen md:h-full overflow-y-auto md:overflow-y-hidden">
      <ul>
        <li class="closeSidebar flex md:hidden justify-center items-center cursor-pointer text-sm font-bold text-red-600">
          <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg> Close
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
        <li class=" shadow-custom bg-primary/10 border-r-8 border-r-primary w-full">
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
        <li class="w-full">
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
    <div class="w-full md:w-4/6 xl:w-3/4 pt-8 px-8 md:px-12 xl:px-24 shadow-custom">
      <p class="font-semibold py-7">My profile Information</p>
      <form action="" class="space-y-8">
        <div class="flex flex-col md:flex-row justify-around items-start md:items-center w-full gap-2 md:gap-4">
          <label for="" class="w-60 font-medium">Full Name</label>
          <input type="text" class="input-class " placeholder="Google">
        </div>
        <div class="flex flex-col md:flex-row justify-around items-start md:items-center w-full gap-2 md:gap-4">
          <label for="" class="w-60 font-medium">Company name</label>
          <input type="text" class="input-class" placeholder="Google">
        </div>
        <div class="flex flex-col md:flex-row justify-around items-start md:items-center w-full gap-2 md:gap-4">
          <label for="" class="w-60 font-medium">Company website</label>
          <input type="text" class="input-class" placeholder="facebook.com">
        </div>
        <div class="flex flex-col md:flex-row justify-start items-start w-full gap-2 md:gap-4">
          <label for="" class="w-60 font-medium">Logo</label>
          <div class="flex flex-col w-full md:w-3/5 lg:w-full xl:w-full ">
            <label class="flex flex-col ">
              <div class="flex flex-col items-center justify-center input-class h-48 space-y-3">
                <div class="p-7 border border-black opacity-20 rounded-lg ">
                  <svg   class="w-12 h-12" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
                  </svg>
                </div>
                <p class="flex pt-1 text-sm text-bodyText">Upload Logo <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ml-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 8.25H7.5a2.25 2.25 0 00-2.25 2.25v9a2.25 2.25 0 002.25 2.25h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25H15m0-3l-3-3m0 0l-3 3m3-3V15" />
                  </svg>
                </p>
              </div>
              <input type="file" class="opacity-0" />
            </label>
            <p class="font-light text-xs text-bodyText">Make sure the photo is square , high regulation and at list 500px*500px </p>
          </div>
        </div>
        <div class="flex flex-col md:flex-row justify-start items-start w-full gap-2 md:gap-4">
          <label for="" class="w-60 font-medium">Company Banner</label>
          <div class="flex flex-col w-full md:w-3/5 lg:w-full xl:w-full ">
            <label class="flex flex-col ">
              <div class="flex flex-col items-center justify-center input-class h-48 space-y-3">
                <div class="p-7 border border-black opacity-20 rounded-lg ">
                  <svg   class="w-12 h-12" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
                  </svg>
                </div>
                <p class="flex pt-1 text-sm text-bodyText">Upload Banner <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ml-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 8.25H7.5a2.25 2.25 0 00-2.25 2.25v9a2.25 2.25 0 002.25 2.25h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25H15m0-3l-3-3m0 0l-3 3m3-3V15" />
                  </svg>
                </p>
              </div>
              <input type="file" class="opacity-0" />
            </label>
            <p class="font-light text-xs text-bodyText">Make sure the photo is square , high regulation and at list 500px*500px </p>
          </div>
        </div>
        <div class="flex flex-col md:flex-row justify-around items-start md:items-center w-full gap-2 md:gap-4">
          <label for="" class="w-60 font-medium">Email Address:</label>
          <input type="email" class="input-class" placeholder="abc 12345@gmail.com">
        </div>
        <div class="flex flex-col md:flex-row justify-around items-start md:items-center w-full gap-2 md:gap-4">
          <label for="" class="w-60 font-medium">Linkedin URL</label>
          <input type="text" class="input-class" placeholder="">
        </div>
        <div class="flex flex-col md:flex-row justify-around items-start md:items-center w-full gap-2 md:gap-4">
          <label for="" class="w-60 font-medium">Phone number</label>
          <input type="number" class="input-class" placeholder="">
        </div>
        <div class="flex flex-col md:flex-row justify-around items-start w-full gap-2 md:gap-4">
          <label for="" class="w-60 font-medium">Location</label>
          <div class="flex flex-col w-full">
            <input type="text" class="input-class" placeholder="Type Location">
            <button class="btn-button w-60 my-8 fWIMV">Save</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</main>
@endsection