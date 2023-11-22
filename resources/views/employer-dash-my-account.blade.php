@extends('layouts.app')

@section('content')
<main class="w-11/12 md:max-w-[767px] lg:max-w-[1000px] xl:max-w-[1200px]  container mx-auto my-10">
  <h4 class="my-14">My Account</h4>
  <button class="showSidebar btn-button flex md:hidden justify-start items-center mb-4">
    <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
      <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
    </svg> Show Sidebar </button>
  <div class="flex justify-between items-start md:w-11/12 lg:w-full gap-4">
    @include('layouts.nav_for_profile')
    <div class="w-full md:w-4/6 xl:w-3/4 space-y-10 ">
      <form action="{{route('employers_account_data_up')}}" method="POST" class="space-y-8  py-12 px-4 md:px-8 lg:px-16 shadow-custom">@csrf
        <p class="font-semibold ">My Account</p>
        <div class="flex flex-col md:flex-row justify-around items-start md:items-center w-full">
          <label for="" class="w-60 font-medium">Company Name</label>
          <input type="text" class="input-class w-full  md:w-[500px]" placeholder="Jubayer Islam" name="CompanyName" value="{{$user_data->CompanyName}}">
        </div>
        <div class="flex flex-col md:flex-row justify-around items-start md:items-center w-full ">
          <label for="" class="w-60 font-medium">Change Email</label>
          <input type="email" class="input-class w-full  md:w-[500px]" placeholder="abc 12345@gmail.com" name="new_email">
        </div>
        <div class="flex flex-col md:flex-row justify-around items-start md:items-center w-full ">
          <label for="" class="w-60 font-medium">Confirm Email address</label>
          <input type="email" class="input-class w-full  md:w-[500px]" placeholder="abc 12345@gmail.com" name="new_email_conf">
        </div>
        <div class="flex flex-col md:flex-row justify-around items-start md:items-center w-full">
          <label for="" class="w-60 font-medium">Current Password</label>
          <input type="password" class="input-class w-full  md:w-[500px]" placeholder="**********" name="current_password">
        </div>
        <div class="flex flex-col md:flex-row justify-around items-start md:items-center w-full">
          <label for="" class="w-60 font-medium">New Password</label>
          <input type="password" class="input-class w-full  md:w-[500px]" placeholder="**********" name="new_password">
        </div>
        <div class="flex flex-col md:flex-row justify-around items-start md:items-center w-full">
          <label for="" class="w-60 font-medium">Confirm Password</label>
          <input type="password" class="input-class w-full  md:w-[500px]" placeholder="**********" name="new_password_conf">
        </div>
        <div class="text-right">
          <button type="submit" class="bg-button rounded-xl text-white py-3 px-4 w-40 mr-20 fWIMV">Save</button>
        </div>
      </form>
    </div>
  </div>
</main>
@endsection