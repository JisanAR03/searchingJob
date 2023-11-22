@extends('layouts.app')

@section('content')
<section class="relative z-0 bg-primary pt-4 lg:pt-0">
  <div class="container mx-auto w-11/12 md:max-w-[767px] lg:max-w-[1000px] xl:max-w-[1200px] flex items-center justify-center">
    <div class="flex flex-col md:flex-row items-center justify-between">
      <div class="space-y-3 lg:space-y-5 text-center md:text-left">
        <h1 class=""> Find your <br /> next SaaS role </h1>
        <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
        <p class="font-roboto"> Keep ‘Are you an employer?’ <br />
          <span class="text-button"> and add Post jobs and find industry professionals’ </span>
        </p>
      </div>
      <div class="w-[320px] sm:w-[490px] md:w-[550px] lg:w-[668px] ">
        <img src="/src/img/herobanner.png" alt="" class="w-full h-full" />
      </div>
    </div>
  </div>
  <div class="z-10 -mt-4 md:-mt-4 lg:-mt-14 absolute w-full">
    <div class=" w-11/12 md:max-w-[768px] lg:max-w-[1000px] xl:max-w-[1200px] shadow-custom flex flex-col md:flex-row items-center justify-center  gap-2 md:gap-1 xl:gap-4 rounded-xl bg-white py-8 px-1 lg:px-4 container mx-auto">
      <div class="rounded-full border border-solid border-bodyText px-1 py-2 text-center">
        <select name="work_type" id="work_type" class="bg-white px-16 md:px-2 lg:px-12 py-2 text-center select2">I am looking for
          <option value="" class="text-black bg-white"> I am looking for </option>
          @foreach($work_type_list as $work_type)
          <option value="{{$work_type}}" class="text-black bg-white"> I am looking for {{$work_type}}</option>
          @endforeach
        </select>
      </div>
      <div class="rounded-full border border-solid border-bodyText px-1 py-2 text-center">
        <select name="category" id="category" class="bg-white px-12 md:px-2 lg:px-12 py-2 select2">Choose job category
          <option value="">Choose job category</option>
          @foreach($catagory_list as $category)
          <option value="{{$category}}">{{$category}}</option>
          @endforeach
        </select>
      </div>
      <div class="rounded-full border border-solid border-bodyText px-1 py-2 text-center">
        <select name="location" id="location" class="bg-white px-16 md:px-2 xl:px-12 py-2 select2"> Choose Location 
          <option value="">Choose Location</option>
          @foreach($location_list as $location)
          <option value="{{$location}}">{{$location}}</option>
          @endforeach
        </select>
      </div>
      <div class="">
        <button type="submit" id="search_job" class="rounded-full bg-button px-24 md:px-4 lg:px-8 xl:px-16 py-3 text-center text-white"> Show Jobs </button>
      </div>
    </div>
  </div>
</section>
<main class="w-11/12 md:max-w-[767px] lg:max-w-[1000px] xl:max-w-[1200px] container mx-auto">
  <!-- categories -->
  <section class="mt-60 md:mt-32">
    <div class="no-pfmv space-y-6 lg:text-center py-10 lg:p-0">
      <h2 class="text-center">Start your career with work you’ll love</h2>
      <div class="w-3/4 md:w-full flex flex-col md:flex-row items-start justify-between gap-4  mx-auto">
        <div class="flex w-full md:w-1/3 flex-col items-center justify-center gap-1 md:gap-3">
          <img src="/src/img/category1.png" alt="" />
          <div class="text-center space-y-1 md:space-y-3">
            <h4>High-impact roles</h4>
            <p class=""> Find roles with high-growth teams where you can make an impact. </p>
          </div>
        </div>
        <div class="flex w-full md:w-1/3 flex-col items-center justify-center gap-1 md:gap-3">
          <img src="/src/img/category2.png" alt="" />
          <div class="text-center space-y-1 md:space-y-3">
            <h4>Meet your matches</h4>
            <p class=""> Match with top teams based on your unique skills and values. </p>
          </div>
        </div>
        <div class="flex w-full md:w-1/3 flex-col items-center justify-center gap-1 md:gap-3">
          <img src="/src/img/category3.png" alt="" />
          <div class="text-center space-y-1 md:space-y-3">
            <h4>Stand out</h4>
            <p class=""> Show your motivation with an intro video and Skill Snapshot. </p>
          </div>
        </div>
      </div>
      <div class="text-center">
        <a href='{{route("about")}}' class="rounded-full border border-solid border-bodyText px-4 py-2 text-center font-roboto"> How hatch works</a>
      </div>
    </div>
  </section>
  <!-- work carousel -->
  @if(isset($employer_data))
  <section class="mt-12 md:mt-20">
    <div class="space-y-14">
      <div class="fdc-imv flex items-center justify-center">
        <h2 class="md:pr-12 text-center">Work at these companies</h2>
        <div class="mt-imv ml-4 md:ml-12 flex items-center justify-center space-x-5">
          <button class='prev-slick-btn' >
            <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 rounded border border-solid border-bodyText stroke-2 p-0.5 font-bold">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
            </svg>
          </button>
          <button class='nxt-slick-btn'>
            <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 rounded border border-solid border-bodyText stroke-2 p-0.5 font-bold">
              <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/>
            </svg>
          </button>
        </div>
      </div>
      <div class="regular red-mimv flex items-center justify-between ">
        @foreach($employer_data as $employer)
        <form action="{{route('employer')}}" method="POST">@csrf
          <input type="hidden" name="id" value="{{$employer->EmployerID}}">
        <button type="submit" class='cusCSLCLS'>
          <div class="shadow-custom crusel-cus-cls w-64 space-y-5 rounded-md py-4 px-6">
            <div class="flex items-center justify-start space-x-3.5 pt-3">
              <img class="w-[80px] h-[70px]" src="{{ asset('src/upload_image/'.$employer->Logo) }}" alt="" />
              <p class="font-normal">{{$employer->CompanyName}}</p>
            </div>
            <p class="text-sm">{!! Illuminate\Support\Str::words($employer->AboutCompany, 10, '...') !!}
            </p>
            <p class="w-fit rounded-full bg-jobs px-4 py-2 font-inter text-xs"> {{$employer->jobpost}} jobs </p>
          </div>
        </button>
        </form>
        @endforeach
      </div>
    </div>
  </section>
  @endif
  <!-- categories -->
  <section class="no-mimv mt-32">
    <div class="no-pfmv space-y-6 lg:text-center py-10 lg:p-0">
      <h2 class="text-center">Start your career with work you’ll love</h2>
      <div class="w-3/4 md:w-full flex flex-col md:flex-row items-start justify-between gap-4  mx-auto">
        <div class="flex w-full md:w-1/3 flex-col items-center justify-center gap-1 md:gap-3">
          <img src="/src/img/category1.png" alt="" />
          <div class="text-center space-y-1 md:space-y-3">
            <h4>High-impact roles</h4>
            <p class=""> Find roles with high-growth teams where you can make an impact. </p>
          </div>
        </div>
        <div class="flex w-full md:w-1/3 flex-col items-center justify-center gap-1 md:gap-3">
          <img src="/src/img/category2.png" alt="" />
          <div class="text-center space-y-1 md:space-y-3">
            <h4>Meet your matches</h4>
            <p class=""> Match with top teams based on your unique skills and values. </p>
          </div>
        </div>
        <div class="flex w-full md:w-1/3 flex-col items-center justify-center gap-1 md:gap-3">
          <img src="/src/img/category3.png" alt="" />
          <div class="text-center space-y-1 md:space-y-3">
            <h4>Stand out</h4>
            <p class=""> Show your motivation with an intro video and Skill Snapshot. </p>
          </div>
        </div>
      </div>
      <div class="text-center">
        <a href='{{route("about")}}' class="rounded-full border border-solid border-bodyText px-4 py-2 text-center font-roboto"> How hatch works</a>
      </div>
    </div>
  </section>
  <!-- gallery -->
  <section class="mt-12">
    <div class="flex flex-col items-center justify-center">
      <div class="flex flex-col items-center justify-center space-y-4 text-center">
        <p class="text-center text-xl font-medium text-bodyText"> Our Mission </p>
        <h2 class="w-full md:w-3/5 text-center"> To connect industry professionals with technology companies </h2>
      </div>
    </div>
    <div class="my-12 h-96 flex items-center justify-between gap-2 container mx-auto">
      <div class="h-full w-[600px]">
        <img src="/src/img/gallery1.png" alt="" srcset="" class="h-full w-full object-cover rounded-xl" />
      </div>
      <div class="h-full w-[400px]">
        <img src="/src/img/gallery2_pro.jpg" alt="" srcset="" class="h-full w-full rounded-xl object-cover" />
      </div>
      <div class="hidden md:flex h-full w-[400px] flex-col justify-between gap-2">
        <img src="/src/img/gallery3_pro.jpg" alt="" srcset="" class="h-[188px] w-full" />
        <img src="/src/img/gallery4_pro.jpg" alt="" srcset="" class="h-[188px] w-full" />
      </div>
      <div class="hidden lg:flex h-full w-[300x] flex-col justify-between gap-2 ">
        <img src="/src/img/gallery5.png" alt="" srcset="" class="h-1/2" />
        <img src="/src/img/gallery6.png" alt="" srcset="" class="h-1/2" />
      </div>
    </div>
  </section>
</main>
@section('scripts')
  <script>
    document.getElementById('search_job').addEventListener('click', function() {
    var workType = document.getElementById('work_type').value;
    var category = document.getElementById('category').value;
    var location = document.getElementById('location').value;
    
    // Construct the URL with selected values
    var url = "{{ route('jobs') }}?work_type=" + encodeURIComponent(workType) + "&category=" + encodeURIComponent(category) + "&location=" + encodeURIComponent(location);
    
    // Navigate to the URL
    window.location.href = url;
  });
  </script>
@endsection
@endsection