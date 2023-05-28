@extends('layouts.app')

@section('content')
<main class=" w-11/12 md:max-w-[767px] lg:max-w-[1000px] xl:max-w-[1200px] container mx-auto my-10">
  <h4 class="my-14">My Profile</h4>
  <button class="showSidebar btn-button flex md:hidden justify-start items-center mb-4">
    <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
      <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
    </svg> Show Sidebar </button>
  <div class="flex justify-start items-start shadow-custom h-full">
    <nav class="sidebar hidden md:block min-w-[270px] md:min-w-2/6 xl:w-1/4 shadow-custom pt-8 fixed md:static top-0 left-0 z-40 bg-white h-screen md:h-full">
      <ul>
        <li class="closeSidebar flex md:hidden justify-center items-center cursor-pointer text-sm font-bold text-red-600">
          <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg> Close
        </li>
        <li class="w-full">
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
        <li class=" shadow-custom bg-primary/10 border-r-8 border-r-primary w-full">
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
    <div class=" md:w-4/6 pt-8 px-8 md:px-12 xl:px-24">
      <p class="font-semibold py-7">My profile Information</p>
      <form action="" class="space-y-8">
        <div class="flex flex-col md:flex-row justify-around items-start md:items-center w-full gap-2 md:gap-4">
          <label for="" class="w-full md:w-60 font-medium">Full Name</label>
          <input type="text" class="input-class lg:min-w-[300px]" placeholder="Jubayer Islam">
        </div>
        <div class="flex flex-col md:flex-row justify-around items-start md:items-center w-full gap-2 md:gap-4">
          <label for="" class="w-full md:w-60 font-medium">I am looking for (Job Category)</label>
          <input type="text" class="input-class" placeholder="UI /Ux Designer">
        </div>
        <div class="flex flex-col md:flex-row justify-start items-start w-full gap-2 md:gap-4">
          <label for="" class="w-full md:w-60 font-medium">Profile photo</label>
          <div class="flex flex-col w-full md:w-3/5 lg:w-full xl:w-full ">
            <label class="flex flex-col ">
              <div class="flex flex-col items-center justify-center input-class h-48 space-y-3">
                <div class="p-7 border border-black opacity-20 rounded-lg ">
                  <svg   class="w-12 h-12" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
                  </svg>
                </div>
                <p class="flex pt-1 text-sm text-bodyText">Upload profile photo <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ml-1">
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
          <label for="" class="w-full md:w-60 font-medium">Email</label>
          <input type="email" class="input-class" placeholder="abc 12345@gmail.com">
        </div>
        <div class="flex flex-col md:flex-row justify-around items-start md:items-center w-full gap-2 md:gap-4">
          <label for="" class="w-full md:w-60 font-medium">Linkedin URL</label>
          <input type="text" class="input-class" placeholder="">
        </div>
        <div class="flex flex-col md:flex-row justify-around items-start md:items-center w-full gap-2 md:gap-4">
          <label for="" class="w-full md:w-60 font-medium">Phone number</label>
          <input type="number" class="input-class" placeholder="">
        </div>
        <div class="flex flex-col md:flex-row justify-around items-start md:items-center w-full gap-2 md:gap-4">
          <label for="" class="w-full md:w-60 font-medium">Location</label>
          <input type="text" class="input-class" placeholder="City, State, Country">
        </div>
        <div class="flex flex-col md:flex-row justify-around items-start md:items-center w-full gap-2 md:gap-4">
          <label for="" class="w-full md:w-60 font-medium">Work title</label>
          <input type="text" class="input-class" placeholder="web developer.">
        </div>
        <div class="flex flex-col md:flex-row justify-around items-start w-full gap-2 md:gap-4">
          <label for="" class="w-full md:w-60 font-medium">Company name</label>
          <div class="w-full flex flex-col">
            <input type="text" class="input-class  mb-2" placeholder="Google">
            <p class="font-light text-sm text-bodyText">Visibility Preference: <span class="text-button">Public</span>
            </p>
          </div>
        </div>
        <div class="flex flex-col md:flex-row justify-around items-start w-full gap-2 md:gap-4">
          <label for="" class="w-full md:w-60 font-medium">Work duration</label>
          <div class="flex flex-col w-full md:w-3/5 lg:w-full  space-y-5">
            <div class="flex gap-3">
              <input type="date" class="input-class w-1/2" placeholder="Start date">
              <input type="date" class="input-class w-1/2" placeholder="">
            </div>
            <!-- <div class="flex"><div class="relative max-w-sm"><div class="absolute inset-y-0 left-0 flex items-center pl-3"><svg
																  fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" /></svg></div><input datepicker type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Start date"></div><label class="flex  items-center justify-start input-class"><svg
																  fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" /></svg><p class="pt-1 text-sm text-bodyText">End Date</p><input type="text" class="opacity-0" /></label></div> -->
            <div>
              <input type="checkbox" name="" id="work" class="">
              <label for="work" class="text-sm text-bodyText font-light">I currently work here</label>
            </div>
            <button class="border border-button rounded-xl  py-3 w-48 text-bodyText font-medium">Add more experience</button>
          </div>
        </div>
        <div class="flex flex-col md:flex-row justify-around items-start md:items-center w-full gap-2 md:gap-4">
          <label for="" class="w-full md:w-60 font-medium">SaaS Experience</label>
          <div class="w-full flex gap-7">
            <label>
              <input type="radio" id="yes" name="saas_experience" class="">
              <span for="yes" class="text-sm text-bodyText">Yes</span>
            </label>
            <label>
              <input type="radio" id="no" name="saas_experience">
              <span for="no" class="text-sm text-bodyText">No</span>
            </label>
          </div>
        </div>
        <div class="flex flex-col md:flex-row justify-around items-start md:items-center w-full gap-2 md:gap-4">
          <label for="" class="w-full md:w-60 font-medium">Salary Expectation</label>
          <input type="text" class="input-class" placeholder="">
        </div>
        <div class="flex flex-col md:flex-row justify-around items-start w-full gap-2 md:gap-4">
          <label for="" class="w-full md:w-60 font-medium">Resume</label>
          <div class="flex flex-col w-full md:w-3/5 lg:w-full ">
            <label class="flex flex-col ">
              <div class="flex flex-col items-center p-20 md:p-2 xl:p-20 justify-center input-class h-24">
                <p class="text-sm text-bodyText">
                  <span class="text-[#008D96]">Choose your resume file</span> or drag & drop your resume allows pdf, dox, upto 3 MB
                </p>
              </div>
              <input type="file" class="opacity-0" />
            </label>
            <p class="font-light text-sm text-bodyText">You can write about yourself, your skills, achievements and previous job experiences.</p>
          </div>
        </div>
        <div class="flex flex-col md:flex-row justify-around items-start w-full gap-2 md:gap-4">
          <label for="" class="w-full md:w-60 font-medium">Skills</label>
          <div class="flex flex-col w-full gap-3">
            <input type="text" class="input-class h-20" placeholder="e.g. Product Management, Vendor Management, Microsoft Word, Microsoft Excel, Google Analytics">
            <p class="font-light text-xs text-bodyText">List you skills here. The more and better skills you use the more you show up when employer search for specific skills.</p>
            <div>
              <input type="checkbox" name="" id="messages">
              <label for="messages" class="text-sm text-bodyText font-semibold">Want to get messages?</label>
            </div>
            <div>
              <input type="checkbox" name="" id="availableforwork">
              <label for="availableforwork" class="text-sm text-bodyText font-semibold">Available for work</label>
            </div>
            <p class="font-light text-xs text-bodyText">Employers will be able to view your profile and contact you only if it's set to available.</p>
            <button class="bg-button rounded-xl text-white py-2 px-4 w-60 my-10 fWIMV">Save</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</main>
@endsection