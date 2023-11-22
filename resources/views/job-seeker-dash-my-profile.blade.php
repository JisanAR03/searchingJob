@extends('layouts.app')

@section('content')
<main class=" w-11/12 md:max-w-[767px] lg:max-w-[1000px] xl:max-w-[1200px] container mx-auto my-10">
  <h4 class="my-14">My Profile</h4>
  <button class="showSidebar btn-button flex md:hidden justify-start items-center mb-4">
    <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
      <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
    </svg> Show Sidebar </button>
  <div class="flex justify-start items-start shadow-custom h-full">
    @include('layouts.nav_for_profile')
    <div class=" md:w-4/6 pt-8 px-8 md:px-12 xl:px-24">
      <p class="font-semibold py-7">My profile Information</p>
      <form action="{{route('job-seeker-data-update')}}" method="POST" class="space-y-8" enctype="multipart/form-data">@csrf
        <div class="flex flex-col md:flex-row justify-around items-start md:items-center w-full gap-2 md:gap-4">
          <label for="" class="w-full md:w-60 font-medium">Full Name</label>
          <input type="text" name="FullName" value="{{$user_data->FullName}}" class="input-class lg:min-w-[300px]" placeholder="Jubayer Islam">
        </div>
        <div class="flex flex-col md:flex-row justify-around items-start md:items-center w-full gap-2 md:gap-4">
          <label for="" class="w-full md:w-60 font-medium">I am looking for (Job Category)</label>
          <input type="text" value="{{$user_data->WorkingFor}}" name="WorkingFor" class="input-class" placeholder="UI /Ux Designer">
        </div>
        {{-- <div class="flex flex-col md:flex-row justify-start items-start w-full gap-2 md:gap-4">
          <label for="" class="w-full md:w-60 font-medium">Profile photo</label>
          <div class="flex flex-col w-full md:w-3/5 lg:w-full xl:w-full ">
            <label class="flex flex-col ">
              <div class="flex flex-col items-center justify-center input-class h-48 space-y-3">
                <div class="p-7 border border-black opacity-20 rounded-lg ">
                  <svg   class="w-12 h-12" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
                  </svg>
                </div>
                <p class="flex pt-1 text-sm text-bodyText">Upload profile photo <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ml-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 8.25H7.5a2.25 2.25 0 00-2.25 2.25v9a2.25 2.25 0 002.25 2.25h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25H15m0-3l-3-3m0 0l-3 3m3-3V15" />
                  </svg>
                </p>
              </div>
              <input type="file" class="opacity-0" name="ProfilePhoto" />
            </label>
            <p class="font-light text-xs text-bodyText">Make sure the photo is square , high regulation and at list 500px*500px </p>
          </div>
        </div> --}}
        <div class="flex flex-col md:flex-row justify-start items-start w-full gap-2 md:gap-4">
          <label for="" class="w-full md:w-60 font-medium">Profile photo</label>
          <div class="flex flex-col w-full md:w-3/5 lg:w-full xl:w-full">
            <label class="flex flex-col">
              <div class="flex flex-col items-center justify-center input-class h-48 space-y-3">
                <div class="p-7 border border-black opacity-20 rounded-lg">
                  <svg class="w-12 h-12" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
                  </svg>
                </div>
                <p id="file-name" class="flex pt-1 text-sm text-bodyText">@if(isset($user_data->ProfilePhoto)){{$user_data->ProfilePhoto}}@else Upload profile photo @endif
                  <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ml-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 8.25H7.5a2.25 2.25 0 00-2.25 2.25v9a2.25 2.25 0 002.25 2.25h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25H15m0-3l-3-3m0 0l-3 3m3-3V15" />
                  </svg>
                </p>
              </div>
              <input id="file-input" type="file" class="opacity-0" name="ProfilePhoto" />
            </label>
            <p class="font-light text-xs text-bodyText">Make sure the photo is square, high resolution, and at least 500px * 500px.</p>
          </div>
        </div>
        <div class="flex flex-col md:flex-row justify-around items-start md:items-center w-full gap-2 md:gap-4">
          <label for="" class="w-full md:w-60 font-medium">Email</label>
          <input type="email" class="input-class" name="Email" value="{{$user_data->Email}}" placeholder="abc 12345@gmail.com">
        </div>
        <div class="flex flex-col md:flex-row justify-around items-start md:items-center w-full gap-2 md:gap-4">
          <label for="" class="w-full md:w-60 font-medium">Linkedin URL</label>
          <input type="text" class="input-class" placeholder="" name="LinkedInURL" value="{{$user_data->LinkedInURL}}">
        </div>
        <div class="flex flex-col md:flex-row justify-around items-start md:items-center w-full gap-2 md:gap-4">
          <label for="" class="w-full md:w-60 font-medium">Phone number</label>
          <input type="number" class="input-class" name="PhoneNumber" value="{{$user_data->PhoneNumber}}" placeholder="">
        </div>
        <div class="flex flex-col md:flex-row justify-around items-start md:items-center w-full gap-2 md:gap-4">
          <label for="" class="w-full md:w-60 font-medium">Location</label>
          <input type="text" class="input-class" name="Location" value="{{$user_data->Location}}" placeholder="City, State, Country">
        </div>
        <div class="flex flex-col md:flex-row justify-around items-start md:items-center w-full gap-2 md:gap-4">
          <label for="" class="w-full md:w-60 font-medium">Work title</label>
          <input type="text" class="input-class" name="WorkTitle" value="{{$user_data->WorkTitle}}" placeholder="web developer.">
        </div>
        <div class="flex flex-col md:flex-row justify-around items-start w-full gap-2 md:gap-4">
          <label for="" class="w-full md:w-60 font-medium">Company name</label>
          <div class="w-full flex flex-col">
            <input type="text" class="input-class  mb-2" name="CurrentCompanyName" value="{{$user_data->CurrentCompanyName}}" placeholder="Google">
            <p class="font-light text-sm text-bodyText">Visibility Preference: <span class="text-button">Public</span>
            </p>
          </div>
        </div>
        <div class="flex flex-col md:flex-row justify-around items-start w-full gap-2 md:gap-4">
          <label for="" class="w-full md:w-60 font-medium">Work duration</label>
          <div class="flex flex-col w-full md:w-3/5 lg:w-full  space-y-5">
            <div class="flex gap-3">
              <?php
              $workstr = date('Y-m-d', strtotime($user_data->WorkStart));
              $workend = date('Y-m-d', strtotime($user_data->WorkEnd)); 
              ?>
              <input type="date" class="input-class w-1/2" name="WorkStart" value="{{$workstr}}" placeholder="Start date">
              <input type="date" class="input-class w-1/2" name="WorkEnd" value="{{$workend}}" placeholder="">
            </div>
            <!-- <div class="flex"><div class="relative max-w-sm"><div class="absolute inset-y-0 left-0 flex items-center pl-3"><svg
																  fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" /></svg></div><input datepicker type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5" placeholder="Start date"></div><label class="flex  items-center justify-start input-class"><svg
																  fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" /></svg><p class="pt-1 text-sm text-bodyText">End Date</p><input type="text" class="opacity-0" /></label></div> -->
            {{-- <div>
              <input type="checkbox" name="" id="work" class="">
              <label for="work" class="text-sm text-bodyText font-light">I currently work here</label>
            </div> --}}
            <button class="border border-button rounded-xl  py-3 w-48 text-bodyText font-medium">Add more experience</button>
          </div>
        </div>
        <div class="flex flex-col md:flex-row justify-around items-start md:items-center w-full gap-2 md:gap-4">
          <label for="" class="w-full md:w-60 font-medium">SaaS Experience</label>
          <div class="w-full flex gap-7">
            <label>
              @if ($user_data->AppExperienceReview == 1)
              <input type="radio" id="yes" name="AppExperienceReview" value="1" checked class="">
              @else
              <input type="radio" id="yes" name="AppExperienceReview" value="1" class="">
              @endif
              <span for="yes" class="text-sm text-bodyText">Yes</span>
            </label>
            <label>
              @if ($user_data->AppExperienceReview == 0)
              <input type="radio" id="no" name="AppExperienceReview" value="0" checked class="">
              @else
              <input type="radio" id="no" name="AppExperienceReview" value="0">
              @endif
              <span for="no" class="text-sm text-bodyText">No</span>
            </label>
          </div>
        </div>
        <div class="flex flex-col md:flex-row justify-around items-start md:items-center w-full gap-2 md:gap-4">
          <label for="" class="w-full md:w-60 font-medium">Salary Expectation</label>
          <input type="text" class="input-class" name="SalaryExpectation" value="{{$user_data->SalaryExpectation}}" placeholder="">
        </div>
        <div class="flex flex-col md:flex-row justify-around items-start w-full gap-2 md:gap-4">
          <label for="" class="w-full md:w-60 font-medium">Resume</label>
          <div class="flex flex-col w-full md:w-3/5 lg:w-full ">
            <label class="flex flex-col ">
              <div class="flex flex-col items-center p-20 md:p-2 xl:p-20 justify-center input-class h-24">
                <p class="text-sm text-bodyText">
                  <span class="text-[#008D96]">Choose your resume file</span> or drag & drop your resume allows pdf, dox, upto 3 MB
                </p>
              </div>
              <input type="file" class="opacity-0" name="Resume" />
            </label>
            <p class="font-light text-sm text-bodyText">You can write about yourself, your skills, achievements and previous job experiences.</p>
          </div>
        </div>
        <div class="flex flex-col md:flex-row justify-around items-start w-full gap-2 md:gap-4">
          <label for="" class="w-full md:w-60 font-medium">Skills</label>
          <div class="flex flex-col w-full gap-3">
            <input type="text" id="skill-input" class="input-class h-20" placeholder="e.g. Product Management, Vendor Management, Microsoft Word, Microsoft Excel, Google Analytics"><div id="selected-skills"></div><div id="selected-skills-input">
              @foreach ($existSkills as $key => $value)
              <input type="hidden" name="skill_ids[]" value="{{ $key }}" data-skill-name="{{ $value }}">
              @endforeach
            </div>
            <p class="font-light text-xs text-bodyText">List you skills here. The more and better skills you use the more you show up when employer search for specific skills.</p>
            <div>
              @if ($user_data->MessagePermit == 0)
              <input type="checkbox" name="MessagePermit" value="1" id="messages">
              @else
              <input type="checkbox" name="MessagePermit" id="messages" value="1" checked>
              @endif
              <label for="messages" class="text-sm text-bodyText font-semibold">Want to get messages?</label>
            </div>
            <div>
              @if ($user_data->AvailableForWork == 1)
              <input type="checkbox" name="AvailableForWork" id="availableforwork" value="1" checked>
              @else
              <input type="checkbox" name="AvailableForWork" id="availableforwork" value="1">
              @endif
              <label for="availableforwork" class="text-sm text-bodyText font-semibold">Available for work</label>
            </div>
            <p class="font-light text-xs text-bodyText">Employers will be able to view your profile and contact you only if it's set to available.</p>
            <button class="bg-button rounded-xl text-white py-2 px-4 w-60 my-10 fWIMV">Save</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</main>
@section('scripts')
<script>
  const fileInput = document.getElementById('file-input');
  const fileName = document.getElementById('file-name');

  fileInput.addEventListener('change', (event) => {
    const file = event.target.files[0];
    if (file) {
      fileName.textContent = 'File: ' + file.name;
    } else {
      fileName.textContent = 'Upload profile photo';
    }
  });
  $(document).ready(function() {
    // Retrieve the selected skills from the hidden input field
    var selectedSkills = $('#selected-skills-input').find('input[name="skill_ids[]"]');
  
    // Loop through each selected skill and display it
    selectedSkills.each(function() {
        var skillId = $(this).val();
        var skillName = $(this).data('skill-name'); // Assuming you have a data attribute for the skill name
  
        var selectedSkill = $('<div class="selected-skill" data-skill-id="' + skillId + '">' + skillName + '<button type="button" class="remove-skill">x</button></div>');
        $('#selected-skills').append(selectedSkill);
    });


    $('#skill-input').autocomplete({
        source: function(request, response) {
            $.ajax({
                type: 'POST',
                url: '{{ route('skills.search') }}',
                data: {
                    _token: '{{ csrf_token() }}',
                    term: request.term
                },
                success: function(data) {
                    response(data);
                }
            });
        },
        minLength: 1,
        appendTo: '.autocomplete-container',
        select: function(event, ui) {
            var skillId = ui.item.id;
            var skillName = ui.item.label;

            var selectedSkill = $('<div class="selected-skill" data-skill-id="' + skillId + '">' + skillName + '<button type="button" class="remove-skill">x</button></div>');
            $('#selected-skills').append(selectedSkill);

            // Create a hidden input field for the selected skill ID
            var hiddenInput = $('<input type="hidden" name="skill_ids[]" value="' + skillId + '">');
            $('#selected-skills-input').append(hiddenInput);

            $(this).val('');
            return false;
        },
        open: function(event, ui) {
            var widget = $(this).autocomplete('widget');
            var maxResults = 10;
            if (widget.find('li').length > maxResults) {
                widget.css({
                    'max-height': (maxResults * 30) + 'px',
                    'overflow-y': 'auto'
                });
            }
        }
    });

    $(document).on('click', '.remove-skill', function() {
        var skillId = $(this).closest('.selected-skill').data('skill-id');
        // Remove the hidden input field for the removed skill
        $('#selected-skills-input').find('input[value="' + skillId + '"]').remove();
        $(this).closest('.selected-skill').remove();
    });
});
</script>
@endsection
@endsection