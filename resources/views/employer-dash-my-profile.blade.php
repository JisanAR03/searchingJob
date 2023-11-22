@extends('layouts.app')

@section('content')
<main class="w-11/12 md:max-w-[767px] lg:max-w-[1000px] xl:max-w-[1200px] container mx-auto my-10">
  <button class="showSidebar btn-button flex md:hidden justify-start items-center mb-4">
    <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
      <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
    </svg> Show Sidebar </button>
  <div class="flex justify-between items-start md:w-11/12 lg:w-full h-full gap-4">
    @include('layouts.nav_for_profile')
    <div class="w-full md:w-4/6 xl:w-3/4 pt-8 px-8 md:px-12 xl:px-24 shadow-custom">
      <p class="font-semibold py-7">My profile Information</p>
      <form action="{{route('employers-data-update')}}" method="POST" class="space-y-8" enctype="multipart/form-data">@csrf
        <div class="flex flex-col md:flex-row justify-around items-start md:items-center w-full gap-2 md:gap-4">
          <label for="" class="w-60 font-medium">Full Name</label>
          <input type="text" class="input-class " placeholder="Google" name="FullName" value="{{$user_data->FullName}}">
        </div>
        <div class="flex flex-col md:flex-row justify-around items-start md:items-center w-full gap-2 md:gap-4">
          <label for="" class="w-60 font-medium">Role In Company</label>
          <input type="text" class="input-class " placeholder="CEO" name="RoleInCompany" value="{{$user_data->RoleInCompany}}">
        </div>
        <div class="flex flex-col md:flex-row justify-around items-start md:items-center w-full gap-2 md:gap-4">
          <label for="" class="w-60 font-medium">Company name</label>
          <input type="text" class="input-class" placeholder="google" name="CompanyName" value="{{$user_data->CompanyName}}">
        </div>
        <div class="flex flex-col md:flex-row justify-around items-start md:items-center w-full gap-2 md:gap-4">
          <label for="" class="w-60 font-medium">Company website</label>
          <input type="text" class="input-class" placeholder="facebook.com" name="WebsiteURL" value="{{$user_data->WebsiteURL}}">
        </div>
        <div class="flex flex-col md:flex-row justify-start items-start w-full gap-2 md:gap-4">
          <label for="" class="w-60 font-medium">Logo</label>
          <div class="flex flex-col w-full md:w-3/5 lg:w-full xl:w-full ">
            <label class="flex flex-col ">
              <div class="flex flex-col items-center justify-center input-class h-48 space-y-3">
                <div class="p-7 border border-black opacity-20 rounded-lg ">
                  <svg   class="w-12 h-12" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
                  </svg>
                </div>
                <p class="flex pt-1 text-sm text-bodyText">Upload Logo <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ml-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 8.25H7.5a2.25 2.25 0 00-2.25 2.25v9a2.25 2.25 0 002.25 2.25h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25H15m0-3l-3-3m0 0l-3 3m3-3V15" />
                  </svg>
                </p>
              </div>
              <input type="file" class="opacity-0" name="Logo" />
            </label>
            <p class="font-light text-xs text-bodyText">Make sure the photo is square , high regulation and at list 500px*500px </p>
          </div>
        </div>
        <div class="flex flex-col md:flex-row justify-start items-start w-full gap-2 md:gap-4">
          <label for="" class="w-60 font-medium">Company Banner</label>
          <div class="flex flex-col w-full md:w-3/5 lg:w-full xl:w-full ">
            <label class="flex flex-col ">
              <div class="flex flex-col items-center justify-center input-class h-48 space-y-3">
                <div class="p-7 border border-black opacity-20 rounded-lg ">
                  <svg   class="w-12 h-12" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
                  </svg>
                </div>
                <p class="flex pt-1 text-sm text-bodyText">Upload Banner <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ml-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 8.25H7.5a2.25 2.25 0 00-2.25 2.25v9a2.25 2.25 0 002.25 2.25h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25H15m0-3l-3-3m0 0l-3 3m3-3V15" />
                  </svg>
                </p>
              </div>
              <input type="file" class="opacity-0" name="Banner"/>
            </label>
            <p class="font-light text-xs text-bodyText">Make sure the photo is square , high regulation and at list 500px*500px </p>
          </div>
        </div>
        <div class="flex flex-col md:flex-row justify-around items-start md:items-center w-full gap-2 md:gap-4">
          <label for="" class="w-60 font-medium">Email Address:</label>
          <input type="email" class="input-class" placeholder="abc 12345@gmail.com" name="Email" value="{{$user_data->Email}}">
        </div>
        <div class="flex flex-col md:flex-row justify-around items-start md:items-center w-full gap-2 md:gap-4">
          <label for="" class="w-60 font-medium">Linkedin URL</label>
          <input type="text" class="input-class" placeholder="" name="LinkedInURL" value="{{$user_data->LinkedInURL}}">
        </div>
        <div class="flex flex-col md:flex-row justify-around items-start md:items-center w-full gap-2 md:gap-4">
          <label for="" class="w-60 font-medium">Phone number</label>
          <input type="number" class="input-class" placeholder="" name="PhoneNumber" value="{{$user_data->PhoneNumber}}">
        </div>
        <div class="flex flex-col md:flex-row justify-around items-start md:items-center w-full gap-2 md:gap-4">
          <label for="" class="w-60 font-medium">Location</label>
          <input type="text" class="input-class" placeholder="City,State,Country... or Remote" name="Location" value="{{$user_data->Location}}">
        </div>
        <div class="flex flex-col md:flex-row justify-around items-start md:items-center w-full gap-2 md:gap-4">
          <label for="" class="w-60 font-medium">Company Mission</label>
          <textarea style="height: 150px;" type="text" class="input-class " placeholder="" name="CompanyMission" id="CompanyMission">{{$user_data->CompanyMission}}</textarea>
        </div>
        <div class="flex flex-col md:flex-row justify-around items-start w-full gap-2 md:gap-4">
          <label for="" class="w-60 font-medium">About Company(description)</label>
          <div class="flex flex-col w-full">
            <textarea type="text" style="height: 150px;" class="input-class " placeholder="" name="AboutCompany" id="AboutCompany">{{$user_data->AboutCompany}}</textarea>
            <button type="submit" class="btn-button w-60 my-8 fWIMV">Save</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</main>
@section('scripts')
<script>
  tinymce.init({
        selector: '#CompanyMission',
        plugins: 'link fullscreen hr',
        toolbar: 'bold italic underline | alignleft aligncenter alignjustify | link unlink hr | fontsize fullscreen forecolor backcolor',
        menubar: false,
        width: '100%',
    });
    tinymce.init({
        selector: '#AboutCompany',
        plugins: 'link fullscreen hr',
        toolbar: 'bold italic underline | alignleft aligncenter alignjustify | link unlink hr | fontsize fullscreen forecolor backcolor',
        menubar: false,
        width: '100%',
    });
</script>
@endsection
@endsection