<nav class="sidebar hidden md:block min-w-[270px] md:min-w-2/6 lg:w-2/5 xl:w-1/4 shadow-custom pt-8 fixed md:static top-0 left-0 z-40 bg-white h-screen md:h-full overflow-y-auto md:overflow-y-hidden">
    <ul>
      <li class="closeSidebar flex md:hidden justify-center items-center cursor-pointer text-sm font-bold text-red-600">
        <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg> Close
      </li>
      {{-- the whole li of super admin  --}}
      @if(session()->has('super_admin_session'))
      <li class="@if(request()->routeIs('mailSystem')) shadow-custom bg-primary/10 border-r-8 border-r-primary @endif w-full">
        <a href="{{route('mailSystem')}}" class="flex justify-start items-center gap-3 h-16 w-full px-8">
          <div class="">
            <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
            </svg>
          </div>
          <div>
            <p class="font-semibold">My Mail Details</p>
            <p class="text-sm font-medium text-bodyText hidden md:block">change your mail system</p>
          </div>
        </a>
      </li>
      @endif
      {{-- the whole li of super admin  --}}
      @if(!session()->has('super_admin_session'))
      @if(session()->has('seeker_session'))
      <li class="@if(request()->routeIs('job-seeker-my-application')) shadow-custom bg-primary/10 border-r-8 border-r-primary @endif w-full">
        <a href="{{route('job-seeker-my-application')}}" class="flex justify-start items-center gap-3 h-16 w-full px-8">
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
      @endif
      @if(session()->has('employer_session'))
      <li class="@if(request()->routeIs('employers-my-job')) shadow-custom bg-primary/10 border-r-8 border-r-primary @endif w-full">
        <a href="{{route('employers-my-job')}}" class="flex justify-start items-center gap-3 h-16 w-full px-8">
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
      @endif
      <li class="@if(request()->routeIs('employers-my-profile') || request()->routeIs('job-seeker-my-profile')) shadow-custom bg-primary/10 border-r-8 border-r-primary @endif w-full">
        <a href="@if(session()->has('employer_session')){{route('employers-my-profile')}}@else{{route('job-seeker-my-profile')}}@endif" class="flex justify-start items-center gap-3 h-16 px-8">
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
      <li class="@if(request()->routeIs('employers-my-account')  ||  request()->routeIs('job-seeker-my-account')) shadow-custom bg-primary/10 border-r-8 border-r-primary @endif w-full">
        <a href="@if(session()->has('employer_session')){{route('employers-my-account')}}@else{{route('job-seeker-my-account')}}@endif" class="flex justify-start items-center gap-3 h-16 w-full px-8">
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
      <li class="@if(request()->routeIs('job-seeker-message') || request()->routeIs('job-seeker-message') || request()->routeIs('message-view') || request()->routeIs('message-view')) shadow-custom bg-primary/10 border-r-8 border-r-primary @endif w-full">
        <a href="@if(session()->has('employer_session')){{route('job-seeker-message')}}@else{{route('job-seeker-message')}}@endif" class="flex justify-start items-center gap-3 h-16 w-full px-8">
          <div class="">
            <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
            </svg>
          </div>
          <div>
            <p class="font-semibold">Massage</p>
            <p class="text-sm font-medium text-bodyText hidden md:block">Showing messages</p>
          </div>
        </a>
      </li>
      @if(session()->has('employer_session'))
      <li class="@if(request()->routeIs('job-applicants')) shadow-custom bg-primary/10 border-r-8 border-r-primary @endif w-full">
        <a href="{{route('job-applicants')}}" class="flex justify-start items-center gap-3 h-16 w-full px-8">
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
      @endif
      <li class="@if(request()->routeIs('employers-talent-community')) shadow-custom bg-primary/10 border-r-8 border-r-primary @endif w-full">
        <a href="{{route('employers-talent-community')}}" class="flex justify-start items-center gap-3 h-16 w-full px-8">
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
      @if(session()->has('employer_session'))
      <li class="@if(request()->routeIs('job-post-form')) shadow-custom bg-primary/10 border-r-8 border-r-primary @endif w-full">
        <a href="{{route('job-post-form')}}" class="flex justify-start items-center gap-3 h-16 w-full px-8">
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
      @endif
      <li class="@if(request()->routeIs('employers-subscription')) shadow-custom bg-primary/10 border-r-8 border-r-primary @endif w-full">
        <a href="{{route('employers-subscription')}}" class="flex justify-start items-center gap-3 h-16 w-full px-8">
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
      @endif
    </ul>
  </nav>