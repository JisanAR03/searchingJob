@extends('layouts.app')

@section('content')
<main class="w-11/12 md:max-w-[767px] lg:max-w-[1000px] xl:max-w-[1200px] container mx-auto my-10">
  <button class="showSidebar btn-button flex md:hidden justify-start items-center mb-4">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
      <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
    </svg> Show Sidebar </button>
  <div class="flex justify-between items-start">
    @include('layouts.nav_for_profile')
    <div class="w-full md:w-4/6 xl:w-3/4 shadow-custom md:pl-8 pt-8 flex flex-col rounded space-y-3 h-fit">
      <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-2 px-2 md:px-0">
        {{-- <div class="relative fWIMV">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="absolute top-3 left-2 w-4 h-4 stroke-2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
          </svg>
          <input type="text" class="bg-gradient h-10 w-40 pl-8 rounded-lg focus:outline-none text-xs fWIMV" name="" placeholder="Search contacts....">
        </div> --}}
        <div class="relative inline-block">
          <div>
              <button type="button" id="dropdown-toggle" class="rounded-xl border border-button px-7 py-1 eWIMV flex items-center justify-between w-full">
                  <span id="selected-option" class="mr-2">Filter</span>
                  <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                  </svg>
              </button>
          </div>
          <div id="dropdown-menu" class="absolute w-full mt-2 bg-white border border-button rounded-xl shadow-lg hidden">
              <ul class="py-1">
                  <li>
                      <div id="newest-option" class="block px-4 py-2 hover:bg-gray-100 cursor-pointer">Newest</div>
                  </li>
                  <li>
                      <div id="oldest-option" class="block px-4 py-2 hover:bg-gray-100 cursor-pointer">Oldest</div>
                  </li>
              </ul>
          </div>
        </div>
      </div>
      <!-- <div><div class="flex justify-between items-center shadow-custom p-4 text-button text-xs"><div class=""><span></span>Title</span></div><div class="flex justify-start items-center gap-20"><div class=""><span>Applicants</span></div><div class=""><span>Created & expired</span></div><div class=""><span>Status</span></div><div class=""><span>Action</span></div></div></div><div class="flex justify-between items-center px-4 py-5 border-b border-b-[#A7A7A7]"><div><div class="flex justify-start items-center gap-3"><div class="w-9 h-9 bg-bodyText rounded-md"></div><div class="space-y-1"><p class="text-xs font-medium">Finance Manager & Health</p><div class="flex justify-start items-center gap-4"><div class="flex justify-center items-center"><svg
				xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" /></svg><span class="text-xs text-bodyText">Design</span></div><div class="flex justify-center items-center"><svg
				xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" /></svg><span class="text-xs text-bodyText">Design</span></div></div></div></div></div><div class="flex gap-20 w-56"><div class=""><span class="text-xs text-bodyText">July 20, 2021</span></div><div class="flex justify-around items-center gap-3"><svg
				xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 bg-iconBg rounded p-1 stroke-2"><path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /></svg><svg
				xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 bg-iconBg rounded p-1 stroke-2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg></div></div></div><div class="flex justify-between items-center px-4 py-5 border-b border-b-[#A7A7A7]"><div><div class="flex justify-start items-center gap-3"><div class="w-9 h-9 bg-bodyText rounded-md"></div><div class="space-y-1"><p class="text-xs font-medium">Finance Manager & Health</p><div class="flex justify-start items-center gap-4"><div class="flex justify-center items-center"><svg
				xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" /></svg><span class="text-xs text-bodyText">Design</span></div><div class="flex justify-center items-center"><svg
				xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" /></svg><span class="text-xs text-bodyText">Design</span></div></div></div></div></div><div class="flex gap-20 w-56"><div><span class="text-xs text-bodyText">July 20, 2021</span></div><div class="flex justify-around items-center gap-3"><svg
				xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 bg-iconBg rounded p-1 stroke-2"><path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /></svg><svg
				xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 bg-iconBg rounded p-1 stroke-2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg></div></div></div><div class="flex justify-between items-center px-4 py-5 border-b border-b-[#A7A7A7]"><div><div class="flex justify-start items-center gap-3"><div class="w-9 h-9 bg-bodyText rounded-md"></div><div class="space-y-1"><p class="text-xs font-medium">Finance Manager & Health</p><div class="flex justify-start items-center gap-4"><div class="flex justify-center items-center"><svg
				xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" /></svg><span class="text-xs text-bodyText">Design</span></div><div class="flex justify-center items-center"><svg
				xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" /></svg><span class="text-xs text-bodyText">Design</span></div></div></div></div></div><div class="flex gap-20 w-56"><div><span class="text-xs text-bodyText">July 20, 2021</span></div><div class="flex justify-around items-center gap-3  "><svg
				xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 bg-iconBg rounded p-1 stroke-2"><path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /></svg><svg
				xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 bg-iconBg rounded p-1 stroke-2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg></div></div></div><div class="flex justify-between items-center px-4 py-5 border-b border-b-[#A7A7A7]"><div><div class="flex justify-start items-center gap-3"><div class="w-9 h-9 bg-bodyText rounded-md"></div><div class="space-y-1"><p class="text-xs font-medium">Finance Manager & Health</p><div class="flex justify-start items-center gap-4"><div class="flex justify-center items-center"><svg
				xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" /></svg><span class="text-xs text-bodyText">Design</span></div><div class="flex justify-center items-center"><svg
				xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" /></svg><span class="text-xs text-bodyText">Design</span></div></div></div></div></div><div class="flex gap-20 w-56"><div><span class="text-xs text-bodyText">July 20, 2021</span></div><div class="flex justify-around items-center gap-3  "><svg
				xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 bg-iconBg rounded p-1 stroke-2"><path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /></svg><svg
				xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 bg-iconBg rounded p-1 stroke-2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg></div></div></div><div class="flex justify-between items-center px-4 py-5"><div><div class="flex justify-start items-center gap-3"><div class="w-9 h-9 bg-bodyText rounded-md"></div><div class="space-y-1"><p class="text-xs font-medium">Finance Manager & Health</p><div class="flex justify-start items-center gap-4"><div class="flex justify-center items-center"><svg
				xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" /></svg><span class="text-xs text-bodyText">Design</span></div><div class="flex justify-center items-center"><svg
				xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" /></svg><span class="text-xs text-bodyText">Design</span></div></div></div></div></div><div class="flex gap-20 w-56"><div><span class="text-xs text-bodyText">July 20, 2021</span></div><div class="flex justify-around items-center gap-3  "><svg
				xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 bg-iconBg rounded p-1 stroke-2"><path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /></svg><svg
				xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 bg-iconBg rounded p-1 stroke-2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg></div></div></div></div> -->
      <div>
        <div class="flex justify-between items-center shadow-custom p-4 text-button text-xs gap-8">
          <div class="w-60">
            <span>Title</span>
          </div>
          <div class="w-40">
            <span>Applicants</span>
          </div>
          <div class="w-40 hidden md:block">
            <span>Created & expired</span>
          </div>
          <div class="w-40 text-center">
            <span>Status</span>
          </div>
          <div class="w-40 text-center">
            <span>Action</span>
          </div>
        </div>
        @foreach($job_data as $job)
        <div class="flex justify-between items-center px-4 py-5 border-b border-b-[#A7A7A7] gap-4">
          <div class="w-60">
            <div class="flex justify-start items-center gap-3">
              <div class="space-y-1">
                <p class="text-xs font-medium">{{$job->JobTitle}}</p>
                <div class="flex justify-start items-center gap-4">
                  <div class="flex justify-center items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                      <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                    </svg>
                    <span class="text-xs text-bodyText">{{$job->JobLocation}}</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="w-40">
            <span class="text-[10px] text-bodyText">{{$job->ApplicationFormCount}} Applicants (S)</span>
          </div>
          <div class="w-40 hidden md:block">
            <p class="text-[10px] text-bodyText">
              <span class="font-medium">Created</span> : {{ date('F d, Y', strtotime($job->PostDate)) }}
            </p>
            <p class="text-[10px] text-bodyText">Expiry date : <span class="text-button">{{ date('F d, Y', strtotime($job->PostExpired)) }}</span>
            </p>
          </div>
          <div class="w-40 text-center">
            @if($job->Active == 1)
            <span class="text-[10px] text-bodyText">Published</span>
            @else
            <span class="text-[10px] text-bodyText">Not Published</span>
            @endif
          </div>
          <div class="iconDiv w-40 flex flex-col justify-center items-center text-center relative">
            <button>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ellipsis w-6 h-6 lg:hidden cursor-pointer ">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
              </svg>
            </button>
            <div class="showIcon absolute top-8 lg:hidden flex justify-center items-center w-24 text-center gap-2 bg-iconBg p-2 rounded-md shadow-sm">
              <form action="{{route('employers-job-preview')}}" method="POST">@csrf<input type="hidden" name="job_post_id" value="{{$job->JobPostID}}">
              <button type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 bg-gradient rounded p-1 stroke-2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
              </button>
              </form>
              <form action="{{route('employers-job-ApplyPermission')}}" method="POST">@csrf<input type="hidden" name="job_post_id" value="{{$job->JobPostID}}">
              <button type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 bg-gradient rounded p-1 stroke-2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                </svg>
              </button>
              </form>
              <form action="{{route('employers-job-delete')}}" method="POST">@csrf<input type="hidden" name="job_post_id" value="{{$job->JobPostID}}">
              <button type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 bg-gradient rounded p-1 stroke-2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
              </form>
            </div>
            <div class="hidden lg:flex justify-center items-center w-full text-center gap-2">
              <button>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 bg-iconBg rounded p-1 stroke-2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
              </button>
              <button>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 bg-iconBg rounded p-1 stroke-2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                </svg>
              </button>
              <button>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 bg-iconBg rounded p-1 stroke-2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
          </div>
        </div>
        @endforeach
        {{-- {{ $job_data->links() }} --}}
        <div class="pagination mt-5">
          @if ($job_data->onFirstPage())
              <button disabled>&laquo;</button>
          @else
              <a href="{{ $job_data->appends(request()->except('page'))->previousPageUrl() }}">&laquo;</a>
          @endif
      
          @php
              $start = max(1, $job_data->currentPage() - 5);
              $end = min($start + 9, $job_data->lastPage());
          @endphp
      
          @if ($start > 1)
              <span class="px-2">...</span>
          @endif
      
          @for ($i = $start; $i <= $end; $i++)
              @if ($i == $job_data->currentPage())
                  <button class="active">{{ $i }}</button>
              @else
                  <a href="{{ $job_data->appends(request()->except('page'))->url($i) }}">{{ $i }}</a>
              @endif
          @endfor
      
          @if ($end < $job_data->lastPage())
              <span class="px-2">...</span>
          @endif
      
          @if ($job_data->hasMorePages())
              <a href="{{ $job_data->appends(request()->except('page'))->nextPageUrl() }}">&raquo;</a>
          @else
              <button disabled>&raquo;</button>
          @endif
      </div>
      </div>
    </div>
  </div>
</main>
@section('scripts')
  <script>
    document.getElementById('dropdown-toggle').addEventListener('click', function () {
        document.getElementById('dropdown-menu').classList.toggle('hidden');
    });

    // Hide the dropdown menu if clicked outside
    document.addEventListener('click', function (event) {
        const dropdownMenu = document.getElementById('dropdown-menu');
        const dropdownToggle = document.getElementById('dropdown-toggle');

        if (!dropdownMenu.contains(event.target) && !dropdownToggle.contains(event.target)) {
            dropdownMenu.classList.add('hidden');
        }
    });
    document.getElementById('newest-option').addEventListener('click', function() {
    console.log('newest');
    var form = document.createElement('form');
    form.action = "{{ route('employers-my-job') }}";
    form.method = "GET";

    var hiddenInput = document.createElement('input');
    hiddenInput.type = "hidden";
    hiddenInput.name = "filter";
    hiddenInput.value = "newest";

    form.appendChild(hiddenInput);
    document.body.appendChild(form);
    form.submit();
  });
  document.getElementById('oldest-option').addEventListener('click', function() {
      var form = document.createElement('form');
      form.action = "{{ route('employers-my-job') }}";
      form.method = "GET";

      var hiddenInput = document.createElement('input');
      hiddenInput.type = "hidden";
      hiddenInput.name = "filter";
      hiddenInput.value = "oldest";

      form.appendChild(hiddenInput);
      document.body.appendChild(form);
      form.submit();
  });
  </script>
@endsection
@endsection