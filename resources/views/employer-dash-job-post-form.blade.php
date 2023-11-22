@extends('layouts.app')

@section('content')
<main class="w-11/12 md:max-w-[767px] lg:max-w-[1000px] xl:max-w-[1200px] container mx-auto my-10">
  <button class="showSidebar btn-button flex md:hidden justify-start items-center mb-4">
    <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
      <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
    </svg> Show Sidebar </button>
  <div class="flex justify-between  items-start  md:w-11/12 lg:w-full gap-4">
    @include('layouts.nav_for_profile')
    <div class="w-full md:w-4/6 xl:w-3/4 space-y-10 ">
      <form action="{{route('job-post-upload-data')}}" method="POST" class="space-y-8  py-12 px-8 lg:px-16 shadow-custom">@csrf
        <p class="font-bold ">New Job Post</p>
        <div class="flex flex-col md:flex-row justify-around items-start md:items-center w-full">
          <label for="" class="w-60 font-medium">Job category</label>
          <input type="text" name="Category" class="input-class  w-full  md:w-[500px]" placeholder="UI/UX designer">
        </div>
        <div class="flex flex-col md:flex-row justify-around items-start md:items-center w-full ">
          <label for="" class="w-60 font-medium">Job title</label>
          <input type="text" name="JobTitle" class="input-class  w-full  md:w-[500px]" placeholder="Art & Design">
        </div>
        {{-- <div class="flex flex-col md:flex-row justify-around items-start md:items-center w-full ">
          <label for="" class="w-60 font-medium">Job post date</label>
          <input type="text" name="PostDate" class="input-class  w-full  md:w-[500px]" placeholder="22/01/2023">
        </div> --}}
        <div class="flex flex-col md:flex-row justify-around items-start md:items-center w-full ">
          <label for="" class="w-60 font-medium">Job post Expire</label>
          <input type="date" name="PostExpired" class="input-class  w-full  md:w-[500px]" placeholder="22/01/2023">
        </div>
        <div class="flex flex-col md:flex-row justify-around items-start md:items-center w-full">
          <label for="" class="w-60 font-medium">Compensation</label>
          <input type="number" name="Compensation" class="input-class  w-full  md:w-[500px]" placeholder="">
        </div>
        <div class="flex flex-col md:flex-row justify-around items-start md:items-center w-full">
          <label for="" class="w-60 font-medium">Work type</label>
          <input type="text" name="WorkType" class="input-class  w-full  md:w-[500px]" placeholder="">
        </div>
        {{-- <div class="flex flex-col md:flex-row justify-around items-start md:items-center w-full">
          <label for="" class="w-60 font-medium">Type of work</label>
          <input type="text" class="input-class  w-full  md:w-[500px]" placeholder="">
        </div> --}}
        <div class="flex flex-col md:flex-row justify-around items-start md:items-center w-full">
          <label for="" class="w-60 font-medium">Job location</label>
          <input type="text" name="JobLocation" class="input-class  w-full  md:w-[500px]" placeholder="Type Location">
        </div>
        {{-- <div class="flex flex-col md:flex-row justify-around items-start md:items-center w-full">
          <label for="" class="w-60 font-medium">Job Description </label>
          <textarea style="height: 150px;" type="text" name="Description" id="Description" class="input-class  w-full md:w-[500px]"></textarea>
        </div> --}}
        <div class="flex flex-col md:flex-row justify-around items-start md:items-center w-full gap-2 md:gap-4">
          <label for="" class="w-60 font-medium">Salary Range</label>
          <input type="text" name="SalaryRange" class="input-class" placeholder="$50- $90k">
        </div>
        <div class="flex flex-col md:flex-row justify-around items-start md:items-center w-full gap-2 md:gap-4">
          <label for="" class="w-60 font-medium">Experience</label>
          <input type="text" name="Experience" class="input-class" placeholder="5 to 10">
        </div>
        <div class="flex flex-col md:flex-row justify-around items-start w-full">
          <label for="" class="w-60 font-medium">Job Description </label>
          <div class=" w-full md:w-[500px] space-y-10">
            <textarea style="height: 150px;" type="text" name="Description" id="Description" class="input-class  w-full md:w-[500px]"></textarea>
            <button type="submit" class="bg-button rounded-xl text-white py-3 px-4 w-40 mr-20 fWIMV">Save</button>
          </div>
        </div>
      </form>
      <div class="text-right"></div>
    </div>
  </div>
</main>
@section('scripts')
<script>
  tinymce.init({
        selector: '#Description',
        plugins: 'link fullscreen hr',
        toolbar: 'bold italic underline | alignleft aligncenter alignjustify | link unlink hr | fontsize fullscreen forecolor backcolor',
        menubar: false,
        width: '100%',
    });
</script>
@endsection
@endsection