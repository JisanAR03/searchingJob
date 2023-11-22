@extends('layouts.app')

@section('content')
<main class="w-11/12 md:max-w-[767px] lg:max-w-[1000px] xl:max-w-[1200px] container mx-auto my-12">
  <button class="showSidebar btn-button flex md:hidden justify-start items-center mb-4">
    <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
      <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
    </svg> Show Sidebar </button>
  <div class="flex justify-between items-start w-full gap-4">
    @include('layouts.nav_for_profile')
    <div class="w-full md:w-2/3 xl:w-3/4 shadow-custom">
      <div class="p-4 shadow-custom space-y-6">
        <div class="flex justify-between items-center">
          <select name="" id="" class="text-xs text-bodyText rounded-lg border border-button px-7 py-1 select2">
            <option value="">Filter by job</option>
          </select>
          <select name="" id="" class="rounded-xl border border-button px-7 py-1 select2">
            <option value="">Default</option>
          </select>
        </div>
        <div class="flex justify-between items-center text-button">
          <h6 class="font-semibold">Graphic design</h6>
          <p class="font-semibold text-xs mr-8">Total : 360</p>
        </div>
      </div>
      <!-- all applicants -->
      <div class=" p-3 flex flex-col space-y-3">
        <!-- single applicant -->
        <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center w-full rounded-xl shadow-custom px-9 md:px-2 xl:px-9 py-5 space-y-3 md:space-y-0">
          <div class="flex flex-col md:flex-row justify-center items-center gap-1 ">
            <div class="w-full xl:w-56 py-1">
              <p class="text-xs font-medium">Jubayer Islam</p>
              <p class="text-[10px] leading-4 font-medium text-button">Skill : graphic design, web design UI/UX Design Adobe photoshop </p>
              <p class="text-[10px] text-bodyText">Applied date : January 15,2023</p>
            </div>
            <div class="flex justify-between fCFMV fBHFMV fWIMV">
              <div class="w-32 md:w-28 xl:w-32 space-y-3 px-0 xl:px-3.5 fWIMV">
                <p class="text-xs text-bodyText dIBFMV">Total Experience</p>
                <p class="text-xs text-button dIBFMV">7</p>
              </div>
              <div class="w-32 md:w-28 xl:w-32 md:border-y-0 md:border-x border-[#A7A7A7] space-y-3 px-1 xl:px-3.5 fWIMV">
                <p class="text-xs text-bodyText dIBFMV">Sass experience </p>
                <p class="text-xs text-button dIBFMV">Yes</p>
              </div>
              <div class="w-32 md:w-28 xl:w-32 md:border-y-0 md:border-x border-[#A7A7A7] space-y-3 px-1 xl:px-3.5 fWIMV">
                <p class="text-xs text-bodyText dIBFMV">Expected Annual Salary </p>
                <p class="text-xs text-button dIBFMV">$60k - $90k</p>
              </div>
            </div>
          </div>
          <div class="flex justify-center items-center text-center gap-3">
            <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 bg-primary rounded p-1 stroke-2 text-button">
              <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 bg-primary rounded p-1 stroke-2 text-button">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
            </svg>
            <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 bg-primary rounded p-1 stroke-2 text-button">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 13.5l3 3m0 0l3-3m-3 3v-6m1.06-4.19l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
            </svg>
            <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 bg-primary rounded p-1 stroke-2 text-button">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </div>
        </div>
        <!-- single applicant -->
        <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center w-full rounded-xl shadow-custom px-9 md:px-2 xl:px-9 py-5 space-y-3 md:space-y-0">
          <div class="flex flex-col md:flex-row justify-center items-center gap-1 ">
            <div class="w-full xl:w-56 py-1">
              <p class="text-xs font-medium">Jubayer Islam</p>
              <p class="text-[10px] leading-4 font-medium text-button">Skill : graphic design, web design UI/UX Design Adobe photoshop </p>
              <p class="text-[10px] text-bodyText">Applied date : January 15,2023</p>
            </div>
            <div class="flex justify-between fCFMV fBHFMV fWIMV">
              <div class="w-32 md:w-28 xl:w-32 space-y-3 px-0 xl:px-3.5 fWIMV">
                <p class="text-xs text-bodyText dIBFMV">Total Experience</p>
                <p class="text-xs text-button dIBFMV">7</p>
              </div>
              <div class="w-32 md:w-28 xl:w-32 md:border-y-0 md:border-x border-[#A7A7A7] space-y-3 px-1 xl:px-3.5 fWIMV">
                <p class="text-xs text-bodyText dIBFMV">Sass experience </p>
                <p class="text-xs text-button dIBFMV">Yes</p>
              </div>
              <div class="w-32 md:w-28 xl:w-32 md:border-y-0 md:border-x border-[#A7A7A7] space-y-3 px-1 xl:px-3.5 fWIMV">
                <p class="text-xs text-bodyText dIBFMV">Expected Annual Salary </p>
                <p class="text-xs text-button dIBFMV">$60k - $90k</p>
              </div>
            </div>
          </div>
          <div class="flex justify-center items-center text-center gap-3">
            <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 bg-primary rounded p-1 stroke-2 text-button">
              <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 bg-primary rounded p-1 stroke-2 text-button">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
            </svg>
            <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 bg-primary rounded p-1 stroke-2 text-button">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 13.5l3 3m0 0l3-3m-3 3v-6m1.06-4.19l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
            </svg>
            <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 bg-primary rounded p-1 stroke-2 text-button">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </div>
        </div>
        <!-- single applicant -->
        <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center w-full rounded-xl shadow-custom px-9 md:px-2 xl:px-9 py-5 space-y-3 md:space-y-0">
          <div class="flex flex-col md:flex-row justify-center items-center gap-1 ">
            <div class="w-full xl:w-56 py-1">
              <p class="text-xs font-medium">Jubayer Islam</p>
              <p class="text-[10px] leading-4 font-medium text-button">Skill : graphic design, web design UI/UX Design Adobe photoshop </p>
              <p class="text-[10px] text-bodyText">Applied date : January 15,2023</p>
            </div>
            <div class="flex justify-between fCFMV fBHFMV fWIMV">
              <div class="w-32 md:w-28 xl:w-32 space-y-3 px-0 xl:px-3.5 fWIMV">
                <p class="text-xs text-bodyText dIBFMV">Total Experience</p>
                <p class="text-xs text-button dIBFMV">7</p>
              </div>
              <div class="w-32 md:w-28 xl:w-32 md:border-y-0 md:border-x border-[#A7A7A7] space-y-3 px-1 xl:px-3.5 fWIMV">
                <p class="text-xs text-bodyText dIBFMV">Sass experience </p>
                <p class="text-xs text-button dIBFMV">Yes</p>
              </div>
              <div class="w-32 md:w-28 xl:w-32 md:border-y-0 md:border-x border-[#A7A7A7] space-y-3 px-1 xl:px-3.5 fWIMV">
                <p class="text-xs text-bodyText dIBFMV">Expected Annual Salary </p>
                <p class="text-xs text-button dIBFMV">$60k - $90k</p>
              </div>
            </div>
          </div>
          <div class="flex justify-center items-center text-center gap-3">
            <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 bg-primary rounded p-1 stroke-2 text-button">
              <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 bg-primary rounded p-1 stroke-2 text-button">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
            </svg>
            <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 bg-primary rounded p-1 stroke-2 text-button">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 13.5l3 3m0 0l3-3m-3 3v-6m1.06-4.19l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
            </svg>
            <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 bg-primary rounded p-1 stroke-2 text-button">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </div>
        </div>
        <!-- single applicant -->
        <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center w-full rounded-xl shadow-custom px-9 md:px-2 xl:px-9 py-5 space-y-3 md:space-y-0">
          <div class="flex flex-col md:flex-row justify-center items-center gap-1 ">
            <div class="w-full xl:w-56 py-1">
              <p class="text-xs font-medium">Jubayer Islam</p>
              <p class="text-[10px] leading-4 font-medium text-button">Skill : graphic design, web design UI/UX Design Adobe photoshop </p>
              <p class="text-[10px] text-bodyText">Applied date : January 15,2023</p>
            </div>
            <div class="flex justify-between fCFMV fBHFMV fWIMV">
              <div class="w-32 md:w-28 xl:w-32 space-y-3 px-0 xl:px-3.5 fWIMV">
                <p class="text-xs text-bodyText dIBFMV">Total Experience</p>
                <p class="text-xs text-button dIBFMV">7</p>
              </div>
              <div class="w-32 md:w-28 xl:w-32 md:border-y-0 md:border-x border-[#A7A7A7] space-y-3 px-1 xl:px-3.5 fWIMV">
                <p class="text-xs text-bodyText dIBFMV">Sass experience </p>
                <p class="text-xs text-button dIBFMV">Yes</p>
              </div>
              <div class="w-32 md:w-28 xl:w-32 md:border-y-0 md:border-x border-[#A7A7A7] space-y-3 px-1 xl:px-3.5 fWIMV">
                <p class="text-xs text-bodyText dIBFMV">Expected Annual Salary </p>
                <p class="text-xs text-button dIBFMV">$60k - $90k</p>
              </div>
            </div>
          </div>
          <div class="flex justify-center items-center text-center gap-3">
            <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 bg-primary rounded p-1 stroke-2 text-button">
              <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 bg-primary rounded p-1 stroke-2 text-button">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
            </svg>
            <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 bg-primary rounded p-1 stroke-2 text-button">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 13.5l3 3m0 0l3-3m-3 3v-6m1.06-4.19l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
            </svg>
            <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 bg-primary rounded p-1 stroke-2 text-button">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </div>
        </div>
        <!-- single applicant -->
        <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center w-full rounded-xl shadow-custom px-9 md:px-2 xl:px-9 py-5 space-y-3 md:space-y-0">
          <div class="flex flex-col md:flex-row justify-center items-center gap-1 ">
            <div class="w-full xl:w-56 py-1">
              <p class="text-xs font-medium">Jubayer Islam</p>
              <p class="text-[10px] leading-4 font-medium text-button">Skill : graphic design, web design UI/UX Design Adobe photoshop </p>
              <p class="text-[10px] text-bodyText">Applied date : January 15,2023</p>
            </div>
            <div class="flex justify-between fCFMV fBHFMV fWIMV">
              <div class="w-32 md:w-28 xl:w-32 space-y-3 px-0 xl:px-3.5 fWIMV">
                <p class="text-xs text-bodyText dIBFMV">Total Experience</p>
                <p class="text-xs text-button dIBFMV">7</p>
              </div>
              <div class="w-32 md:w-28 xl:w-32 md:border-y-0 md:border-x border-[#A7A7A7] space-y-3 px-1 xl:px-3.5 fWIMV">
                <p class="text-xs text-bodyText dIBFMV">Sass experience </p>
                <p class="text-xs text-button dIBFMV">Yes</p>
              </div>
              <div class="w-32 md:w-28 xl:w-32 md:border-y-0 md:border-x border-[#A7A7A7] space-y-3 px-1 xl:px-3.5 fWIMV">
                <p class="text-xs text-bodyText dIBFMV">Expected Annual Salary </p>
                <p class="text-xs text-button dIBFMV">$60k - $90k</p>
              </div>
            </div>
          </div>
          <div class="flex justify-center items-center text-center gap-3">
            <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 bg-primary rounded p-1 stroke-2 text-button">
              <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 bg-primary rounded p-1 stroke-2 text-button">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
            </svg>
            <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 bg-primary rounded p-1 stroke-2 text-button">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 13.5l3 3m0 0l3-3m-3 3v-6m1.06-4.19l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
            </svg>
            <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 bg-primary rounded p-1 stroke-2 text-button">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </div>
        </div>
        <!-- single applicant -->
        <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center w-full rounded-xl shadow-custom px-9 md:px-2 xl:px-9 py-5 space-y-3 md:space-y-0">
          <div class="flex flex-col md:flex-row justify-center items-center gap-1 ">
            <div class="w-full xl:w-56 py-1">
              <p class="text-xs font-medium">Jubayer Islam</p>
              <p class="text-[10px] leading-4 font-medium text-button">Skill : graphic design, web design UI/UX Design Adobe photoshop </p>
              <p class="text-[10px] text-bodyText">Applied date : January 15,2023</p>
            </div>
            <div class="flex justify-between fCFMV fBHFMV fWIMV">
              <div class="w-32 md:w-28 xl:w-32 space-y-3 px-0 xl:px-3.5 fWIMV">
                <p class="text-xs text-bodyText dIBFMV">Total Experience</p>
                <p class="text-xs text-button dIBFMV">7</p>
              </div>
              <div class="w-32 md:w-28 xl:w-32 md:border-y-0 md:border-x border-[#A7A7A7] space-y-3 px-1 xl:px-3.5 fWIMV">
                <p class="text-xs text-bodyText dIBFMV">Sass experience </p>
                <p class="text-xs text-button dIBFMV">Yes</p>
              </div>
              <div class="w-32 md:w-28 xl:w-32 md:border-y-0 md:border-x border-[#A7A7A7] space-y-3 px-1 xl:px-3.5 fWIMV">
                <p class="text-xs text-bodyText dIBFMV">Expected Annual Salary </p>
                <p class="text-xs text-button dIBFMV">$60k - $90k</p>
              </div>
            </div>
          </div>
          <div class="flex justify-center items-center text-center gap-3">
            <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 bg-primary rounded p-1 stroke-2 text-button">
              <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 bg-primary rounded p-1 stroke-2 text-button">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
            </svg>
            <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 bg-primary rounded p-1 stroke-2 text-button">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 13.5l3 3m0 0l3-3m-3 3v-6m1.06-4.19l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
            </svg>
            <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 bg-primary rounded p-1 stroke-2 text-button">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection