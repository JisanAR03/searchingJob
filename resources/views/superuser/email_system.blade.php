@extends('layouts.app')

@section('content')
<main class="w-11/12 md:max-w-[767px] lg:max-w-[1000px] xl:max-w-[1200px] container mx-auto my-10">
  <h4 class="my-14">My Profile</h4>
  <button class="showSidebar btn-button flex md:hidden justify-start items-center mb-4">
    <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
      <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
    </svg> Show Sidebar </button>
  <div class="flex justify-center items-start gap-4 ">
    @include('layouts.nav_for_profile')
    <div class="w-full md:w-3/4 space-y-10 ">
      <form action="{{route('job-seeker-account-data-up')}}" method="POST" class="space-y-8  py-12 px-4 md:px-8 lg:px-16 shadow-custom">@csrf
        <p class="font-semibold ">My Account</p>
        <div class="flex flex-col md:flex-row justify-around items-start md:items-center w-full">
          <label><input type="radio" name="option" value="option1" id="option1"><span class="ml-3">Google SMTP</span></label>
        </div>
        <div class="flex flex-col md:flex-row justify-around items-start md:items-center w-full">
          <label><input type="radio" name="option" value="option2" id="option2"><span class="ml-3">Elastic Email</span></label>
        </div>
        <div id="inputContainer"></div>
        <div class="text-right">
          <button class="bg-button rounded-xl text-white py-3 px-4 w-40 mr-20 fWIMV">Save</button>
        </div>
      </form>
    </div>
  </div>
</main>
@section('scripts')
<script>
  const inputContainer = document.getElementById('inputContainer');
  const option1Input = `
            <div class="flex flex-col md:flex-row justify-around items-start md:items-center w-full mt-5">
                <label for="" class="w-60 font-medium">User Mail</label>
                <input type="email" class="input-class w-full md:w-[500px]" name="google_user_mail" value="" placeholder="user@gmal.com">
            </div>
            <div class="flex flex-col md:flex-row justify-around items-start md:items-center w-full mt-5">
                <label for="" class="w-60 font-medium">User Password</label>
                <input type="password" class="input-class w-full md:w-[500px]" name="google_user_password" placeholder="**********">
            </div>
            <div class="flex flex-col md:flex-row justify-around items-start md:items-center w-full mt-5">
                <label for="" class="w-60 font-medium">From Email</label>
                <input type="email" class="input-class w-full md:w-[500px]" name="google_from_email" placeholder="abc12345@mail.com">
            </div>
  `;
  const option2Input = `
        <div class="flex flex-col md:flex-row justify-around items-start md:items-center w-full mt-5">
          <label for="" class="w-60 font-medium">Elastic Mail API</label>
          <input type="text" class="input-class w-full  md:w-[500px]" name="elastic_api_key" value="" placeholder="kfsmfipmw......">
        </div>
        <div class="flex flex-col md:flex-row justify-around items-start md:items-center w-full mt-5">
          <label for="" class="w-60 font-medium">Elastic Auth mail</label>
          <input type="email" class="input-class w-full  md:w-[500px]" name="elastic_auth_mail" placeholder="abc12345@mail.com">
        </div>
  `;

  document.getElementById('option1').addEventListener('click', () => {
      inputContainer.innerHTML = option1Input;
  });

  document.getElementById('option2').addEventListener('click', () => {
      inputContainer.innerHTML = option2Input;
  });
</script>
@endsection
@endsection