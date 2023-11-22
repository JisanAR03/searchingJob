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
    <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
      <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
    </svg> Show Filters </button>
  <div class="flex justify-between items-start gap-4">
    <div class="sidebar hidden md:block w-[380px] md:min-w-2/6 shadow-custom pt-8 fixed md:static top-0 left-0 z-40 bg-white h-screen md:h-full overflow-y-auto md:overflow-y-hidden shadow-custom py-7 shadow-custom  ">
      <p class="closeSidebar flex md:hidden justify-center items-center cursor-pointer text-sm font-bold text-red-600 mb-4">
        <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg> Close
      </p>
      <form action="" class="w-full">
        <div class="space-y-6 px-10 md:px-4 lg:px-10">
          <div class="space-y-5">
            <label for="" class="font-medium" required>Search Keyword</label>
            <input name="JobName" type="text" class="input-class shadow-custom border-0" placeholder="Search By Job Title....">
          </div>
          <div class="space-y-3">
            <div class="flex justify-between items-center">
              <label for="" class="font-medium" required>Location:</label>
              <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" w-5 h-5 text-bodyText stroke-2">
                <path stroke-linecap="round" stroke-linejoin="round"   />
              </svg>
            </div>
            {{-- <div>
              <input type="checkbox" name="remote" value="remote" id="work" class="">
              <label for="work" class="text-sm text-bodyText font-light">Remote</label>
            </div> --}}
            <select name="city" id="" class="input-class shadow-custom border-0 font-medium text-sm text-bodyText select2">
              <option value="">Select Location or Remote type</option>
              @foreach ($city_list as $city)
                <option value="{{$city}}">{{$city}}</option>
              @endforeach
            </select>
            {{-- <select name="state" id="" class="input-class shadow-custom border-0 font-medium text-sm text-bodyText select2">
              <option value="">Select State</option>
              @foreach($state_list as $state)
                <option value="{{$state}}">{{$state}}</option>
              @endforeach
            </select>
            <select name="country" id="" class="input-class shadow-custom border-0 font-medium text-sm text-bodyText select2">
              <option value="">Select Country</option>
              @foreach ($country_list as $country)
                <option value="{{$country}}">{{$country}}</option>
              @endforeach
            </select> --}}
          </div>
          {{-- <div class="space-y-3">
            <div class="flex justify-between items-center">
              <label for="" class="font-medium" required>Industry</label>
              <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" w-5 h-5 text-bodyText stroke-2">
                <path stroke-linecap="round" stroke-linejoin="round"   />
              </svg>
            </div>
            <select name="" id="" class="input-class shadow-custom border-0 my-4 font-medium text-sm text-bodyText select2">
              <option value="" class="font-medium text-sm text-bodyText">category</option>
            </select>
          </div> --}}
          <div class="space-y-3">
            <div class="flex justify-between items-center">
              <label for="" class="font-medium" required>Job Category</label>
              <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" w-5 h-5 text-bodyText stroke-2">
                <path stroke-linecap="round" stroke-linejoin="round"   />
              </svg>
            </div>
            <select name="JobCategory" id="" class="input-class shadow-custom border-0 my-4 font-medium text-sm text-bodyText select2">
              <option value="" class="font-medium text-sm text-bodyText">Select Category</option>
              @foreach ($category_list as $category)
                <option value="{{$category}}" class="font-medium text-sm text-bodyText">{{$category}}</option>
              @endforeach
            </select>
          </div>
          <div class="space-y-3">
            <div class="flex justify-between items-center">
              <label for="" class="font-medium" required>Job Type</label>
              <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" w-5 h-5 text-bodyText stroke-2">
                <path stroke-linecap="round" stroke-linejoin="round"   />
              </svg>
            </div>
            <select name="Job_Work_Type" id="" class="input-class shadow-custom border-0 my-4 font-medium text-sm text-bodyText select2">
              <option value="" class="font-medium text-sm text-bodyText">Select Job Type</option>
              @foreach ($work_type_list as $work_type)
                <option value="{{$work_type}}" class="font-medium text-sm text-bodyText">{{$work_type}}</option>
              @endforeach
            </select>
          </div>
          {{-- <div class="space-y-3">
            <div class="flex justify-between items-center">
              <label for="" class="font-medium" required>Job Type</label>
              <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" w-5 h-5 text-bodyText stroke-2">
                <path stroke-linecap="round" stroke-linejoin="round"   />
              </svg>
            </div>
            <div class="space-y-3">
              <div class="flex items-center">
                <input type="checkbox" id="fullTime" name="time" class="" value="1">
                <label for="fullTime" class="flex items-center label-class ml-2"> Full time (29) </label>
              </div>
              <div class="flex items-center">
                <input type="checkbox" id="partTime" name="time" class="" value="1">
                <label for="partTime" class="flex items-center label-class ml-2"> Part time (0) </label>
              </div>
              <div class="flex items-center">
                <input type="checkbox" id="contract" name="time" class="" value="1">
                <label for="contract" class="flex items-center label-class ml-2"> Contract (0) </label>
              </div>
            </div>
          </div> --}}
          <div class="space-y-3">
            <div class="flex justify-between items-center">
              <label for="" class="font-medium" required>Salary</label>
              <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" w-5 h-5 text-bodyText stroke-2">
                <path stroke-linecap="round" stroke-linejoin="round"   />
              </svg>
            </div>
            <div class="space-y-3">
              <div class="flex items-center">
                <input type="radio" id="baseSalary1" name="baseSalary" class="" value="1">
                <label for="baseSalary1" class="flex items-center label-class ml-2"> up to $1k </label>
              </div>
              <div class="flex items-center">
                <input type="radio" id="baseSalary2" name="baseSalary" class="" value="25">
                <label for="baseSalary2" class="flex items-center label-class ml-2"> up to $25k </label>
              </div>
              <div class="flex items-center">
                <input type="radio" id="baseSalary3" name="baseSalary" class="" value="50">
                <label for="baseSalary3" class="flex items-center label-class ml-2"> up to $50k </label>
              </div>
              <div class="flex items-center">
                <input type="radio" id="baseSalary4" name="baseSalary" class="" value="75">
                <label for="baseSalary4" class="flex items-center label-class ml-2"> up to $75k </label>
              </div>
              <div class="flex items-center">
                <input type="radio" id="baseSalary5" name="baseSalary" class="" value="100">
                <label for="baseSalary5" class="flex items-center label-class ml-2"> up to $100k </label>
              </div>
            </div>
          </div>
        </div>
        <div class="p-8">
          <button class="btn-button w-full h-11">Show Jobs</button>
        </div>
      </form>
    </div>
    <div class="w-full md:w-4/6 flex flex-col space-y-3">
      <div class="flex justify-end  mb-6">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-end w-full gap-4 md:gap-0">
          <div class="flex flex-col space-y-2 fWIMV">
            <label for="" class="text-base font-medium">Showing {{ $job_data->firstItem() }} - {{ $job_data->lastItem() }} of {{ $job_data->total() }} result</label>
            <button class="btn-button flex justify-center items-center w-60 h-12 fWIMV">
              <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 rounded mr-2 stroke-2 text-white ">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
              </svg> RECEIVE JOBS ALERTS </button>
          </div>
          <div class="relative inline-block">
            <div>
                <button type="button" id="dropdown-toggle" class="rounded-xl border border-button px-7 py-1 eWIMV flex items-center justify-between w-full">
                    <span id="selected-option" class="mr-2">Filter</span>
                    <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
            </div>
            <div id="dropdown-menu" class="z-10 absolute w-full mt-2 bg-white border border-button rounded-xl shadow-lg hidden">
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
      </div>
      <div class="space-y-8 w-full">
        @foreach ($job_data as $job)
        <div class="relative flex justify-center items-center w-full h-40 rounded-xl shadow-custom px-4 lg:px-8 py-4 gap-8 lg:gap-9">
          {{-- <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 absolute top-4 right-3.5 text-bodyText stroke-2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
          </svg> --}}
          <div class="flex justify-center items-center gap-5">
            <div class="w-[74px] h-[65px] bg-[#EBEBEB] rounded-xl"></div>
            <div class="flex justify-start items-start gap-2">
              <div class="w-full xl:w-[400px]">
                <div class="space-y-1 border-b border-[#A7A7A7] pb-4 mb-1">
                  <a href="{{route('job', ['id' => $job->JobPostID])}}">
                  <h5 class="text-base">{{$job->JobTitle}}</h5></a>
                  @php
                    $postDate = strtotime($job->PostDate);
                    $now = time();

                    $seconds = $now - $postDate;
                    $minutes = floor($seconds / 60);
                    $hours = floor($minutes / 60);
                    $days = floor($hours / 24);

                    if ($days > 0) {
                        $timeElapsed = $days . ' day(s) ago';
                    } elseif ($hours > 0) {
                        $timeElapsed = $hours . ' hour(s) ago';
                    } elseif ($minutes > 0) {
                        $timeElapsed = $minutes . ' minute(s) ago';
                    } else {
                        $timeElapsed = 'Just now';
                    }
                @endphp
                  <p class="text-xs text-bodyText">Posted {{$timeElapsed}}</p>
                </div>
                <div class=" hidden md:flex divide-x divide-[#A7A7A7]">
                  <div class="w-20 lg:w-28 py-1">
                    <p class="text-xs text-bodyText">Location</p>
                    <p class="text-xs text-bodyText">{{$job->JobLocation}}</p>
                  </div>
                  <div class="w-20 lg:w-28 py-1 px-2 lg:px-3">
                    <p class="text-xs text-bodyText">Category</p>
                    <p class="text-xs text-button">{{$job->Category}}</p>
                  </div>
                  <div class="w-20 lg:w-28 py-1 pl-2 lg:pl-4">
                    <p class="text-xs text-bodyText">Compensation</p>
                    <p class="text-xs text-bodyText">{{$job->Compensation}}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <form action="{{route('apply-form-post')}}" method="GET">
          <input type="hidden" name="JobPostID" value="{{$job->JobPostID}}">
          <button @if(session('employer_session')) disabled @endif class="btn-secondary text-sm w-28 md:mt-16">Apply Now</button></form>
        </div>
        @endforeach
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
    form.action = "{{ route('jobs') }}";
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
      form.action = "{{ route('jobs') }}";
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