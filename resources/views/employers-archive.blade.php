@extends('layouts.app')

@section('content')
<section class="relative z-0 bg-primary pt-4 lg:pt-0">
 <div class="container mx-auto w-11/12 md:max-w-[767px] lg:max-w-[1000px] xl:max-w-[1200px] flex items-center justify-center">
   <div class="flex flex-col md:flex-row items-center justify-between">
     <div class="space-y-3 lg:space-y-5 text-center md:text-left">
       <h1 class=""> Join the <br /> SaaS network </h1>
       <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
     </div>
     <div class="w-[320px] sm:w-[490px] md:w-[550px] lg:w-[668px] ">
       <img src="/src/img/herobanner.png" alt="" class="w-full h-full" />
     </div>
   </div>
 </div>
</section>
<main class="w-11/12 md:max-w-[767px] lg:max-w-[1000px] xl:max-w-[1200px] container mx-auto my-12">
  <button class="showSidebar btn-button flex md:hidden justify-start items-center mb-4">
    <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
      <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
    </svg> Show Filters </button>
  <div class="flex justify-between items-start gap-4">
    <div class="sidebar hidden md:block  md:min-w-2/6 shadow-custom pt-8 fixed md:static top-0 left-0 z-40 bg-white h-screen md:h-full overflow-y-auto md:overflow-y-hidden shadow-custom py-7 shadow-custom ">
      <p class="closeSidebar flex md:hidden justify-center items-center cursor-pointer text-sm font-bold text-red-600 mb-4">
        <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg> Close
      </p>
      <form action="{{route('employers')}}" method="GET" class="w-full">
        <div class="space-y-5 px-8 md:px-4 lg:px-14">
          <div class="space-y-3">
            <div class="flex justify-between items-center">
              <label for="" class="font-medium" required>Search Company Name</label>
            </div>
            <input type="text" name="CompanyName" class="input-class shadow-custom border-0" placeholder="Type Company name here...">
          </div>
          <div class="space-y-3">
            <div class="flex justify-between items-center">
              <label for="" class="font-medium" required>Location:</label>
              <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" w-5 h-5 text-bodyText stroke-2">
                <path stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </div>
            {{-- <div>
              <input type="checkbox" name="remote" id="work" class="">
              <label for="work" class="text-sm text-bodyText font-light">Remote</label>
            </div> --}}
            <div class="mb-4">
              <input type="text" placeholder="City,State,Country..." name="location" id="location" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 h-10 px-4 sm:text-sm">
            </div>
            {{-- <select name="" id="" class="input-class shadow-custom border-0 font-medium text-sm text-bodyText select2">
              <option>Country</option>
              <option>Alabama</option>
              <option>Alaska</option>
              <option>Arizona</option>
              <option>Arkansas</option>
              <option>California</option>
              <option>Colorado</option>
              <option>Connecticut</option>
              <option>Delaware</option>
              <option>Florida</option>
              <option>Georgia</option>
            </select> --}}
            {{-- <select name="" id="" class="input-class shadow-custom border-0 font-medium text-sm text-bodyText select2">
              <option>State</option>
              <option>Alaska</option>
              <option>Arizona</option>
              <option>Arkansas</option>
              <option>California</option>
              <option>Colorado</option>
              <option>Connecticut</option>
              <option>Delaware</option>
              <option>Florida</option>
              <option>Georgia</option>
            </select>
            <select name="" id="" class="input-class shadow-custom border-0 font-medium text-sm text-bodyText select2">
              <option value="">City</option>
              <option value="">Andalusia</option>
              <option value="">Anniston</option>
              <option value="">Athens</option>
              <option value="">Atmore</option>
              <option value="">Auburn</option>
              <option value="">Bessemer</option>
              <option value="">Birmingham</option>
            </select> --}}
          </div>
        </div>
        <div class="p-4 flex justify-center">
          <button class="btn-button w-80 h-11">Show employer</button>
        </div>
      </form>
    </div>
    <div class="flex flex-col space-y-3 w-full md:w-4/6">
      <div class="flex justify-end mb-9">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center w-full gap-4">
          <label for="" class="text-base font-medium">Showing {{ $employer_data->firstItem() }} - {{ $employer_data->lastItem() }} of {{ $employer_data->total() }} result</label>
          {{-- <div class="space-x-5 fWIMV">
            <label for="" class="text-base font-medium">Sort By</label>
            <select name="" id="" class="rounded-xl border border-button px-7 py-1 eWIMV select2">
              <option value="">Default</option>
            </select>
          </div> --}}
        </div>
      </div>
      <div class="space-y-3 w-full">
        @foreach ($employer_data as $employer)
        <div class="flex justify-between items-center w-full h-44 rounded-xl shadow-custom px-8  gap-9">
          <div class="flex justify-start items-start gap-2">
            <div class="w-[82px] h-[73px] bg-[#EBEBEB] rounded-xl"><img class="w-[80px] h-[70px]" src="{{ asset('src/upload_image/'.$employer->Logo) }}" alt=""></div>
            <div class="w-48 ml-8">
              <div class="space-y-1 border-b border-[#A7A7A7] pb-3 mb-2">
                <h4 class="text-base text-bodyText">{{$employer->CompanyName}}</h4>
              </div>
              <div class="">
                <p class="text-xs text-bodyText">Location</p>
                <p class="text-xs text-bodyText">{{$employer->Location}}</p>
              </div>
            </div>
          </div>
          <form action="{{route('employer')}}" method="POST">@csrf
          <input type="hidden" name="id" value="{{$employer->EmployerID}}">
          <button class="btn-secondary text-sm hFMV">
            <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="xl:hidden w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            <span class="hidden xl:block">View Profile</span>
          </button></form>
        </div>
        @endforeach
        <div class="pagination mt-5">
          @if ($employer_data->onFirstPage())
              <button disabled>&laquo;</button>
          @else
              <a href="{{ $employer_data->appends(request()->except('page'))->previousPageUrl() }}">&laquo;</a>
          @endif
      
          @php
              $start = max(1, $employer_data->currentPage() - 5);
              $end = min($start + 9, $employer_data->lastPage());
          @endphp
      
          @if ($start > 1)
              <span class="px-2">...</span>
          @endif
      
          @for ($i = $start; $i <= $end; $i++)
              @if ($i == $employer_data->currentPage())
                  <button class="active">{{ $i }}</button>
              @else
                  <a href="{{ $employer_data->appends(request()->except('page'))->url($i) }}">{{ $i }}</a>
              @endif
          @endfor
      
          @if ($end < $employer_data->lastPage())
              <span class="px-2">...</span>
          @endif
      
          @if ($employer_data->hasMorePages())
              <a href="{{ $employer_data->appends(request()->except('page'))->nextPageUrl() }}">&raquo;</a>
          @else
              <button disabled>&raquo;</button>
          @endif
      </div>
      </div>
    </div>
</main>
@endsection