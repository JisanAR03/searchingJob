@extends('layouts.app')

@section('content')
<main class="w-11/12 md:max-w-[767px] lg:max-w-[1000px] xl:max-w-[1200px] container mx-auto my-10">
  <h4 class="my-14">My Profile</h4>
  <button class="showSidebar btn-button flex md:hidden justify-start items-center mb-4">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
      <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
    </svg> Show Sidebar </button>
  <div class="flex justify-between items-start gap-4 h-[600px]">
    @include('layouts.nav_for_profile')
    <div class="flex flex-col w-full md:hidden">
      {{-- <button class="back-message my-4">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 p-3 shadow-custom rounded-md">
          <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
        </svg>
      </button> --}}
      <!-- for mobile  -->
    @php
    $segment2 = request()->segment(2);
    $segment3 = request()->segment(3);
    @endphp
    @if($segment2 && $segment3)
    <!-- second column -->
    <div id="for_mbl" class="hidden all-user w-full md:w-1/4 shadow-custom p-8 md:p-2 lg:p-8 md:hidden flex-col rounded-xl space-y-3 h-full">
      <div class="relative">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="absolute top-3 left-2 w-4 h-4 stroke-2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
        </svg>
        <input type="text" id="" class="search-input bg-gradient h-10 w-full pl-8 rounded-lg focus:outline-none text-xs" name="" placeholder="Search contacts....">
        <div id="suggestions" class="absolute bg-white w-full rounded-lg shadow-md mt-1 hidden"></div>
      </div>
      {{-- <p class="text-bodyText texs-xs font-normal space-x-3 md:space-x-1 lg:space-x-3">
        <a href="#">All</a>
        <a href="#">Read</a>
        <a href="#">Unread</a>
      </p> --}}
      <div id="user-container" class="space-y-6">
        @foreach($reciever_datas as $reciever_data)
        @if(isset($reciever_data->type))
      <div class="user flex justify-between items-center cursor-pointer @if((isset($selected_user)) && ($selected_user == $reciever_data->type.$reciever_data->tableid)) bg-[#8080801a] @endif" data-user-id="{{$reciever_data->id}}" data-type="{{$reciever_data->type}}" data-tableid="{{$reciever_data->tableid}}">
        <div class="flex justify-start items-center gap-3 md:gap-1 lg:gap-3">
            <div>
                <input class="check_data_exits" value="{{$reciever_data->type}}{{$reciever_data->tableid}}" type="hidden">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 stroke-1 fill-white bg-[#D9D9D9] p-2 rounded-full stroke-none">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"></path>
                </svg>
            </div>
            <div>
                <p class="text-sm font-normal text-bodyText">{{$reciever_data->sender_name}}</p>
            </div>
        </div>
      </div>
      @endif
      @endforeach
      </div>
    </div>
    <!-- third column -->
    <div class="message-box w-full md:w-2/4 shadow-custom md:hidden flex flex-col justify-between rounded-xl h-full">
      <div class="space-y-3 ">
        <div class="flex justify-between items-center p-8 shadow-custom rounded-t-xl">
          <div class="flex justify-start items-center gap-3">
            <div class="">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 stroke-1 fill-white bg-[#D9D9D9] p-2 rounded-full stroke-none">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
              </svg>
            </div>
            <div>
              <p class="text-sm font-normal text-bodyText">{{ucwords($selected_user_data->FullName)}}</p>
            </div>
          </div>
          <div>
            <form action="{{route('message-delete')}}" method="POST">@csrf
              <input type="hidden"name="sender_type" @if(session('seeker_session'))value="JobSeekers"@else value="Employers"@endif>
              <input type="hidden"name="sender_id" @if(session('seeker_session'))value="{{session('seeker_session')}}"@else value="{{session('employer_session')}}"@endif>
              <input type="hidden"name="receiver_type" value="{{$reciever_name}}">
              <input type="hidden"name="receiver_id" value="{{$reciever_name_id}}">
            <button class="text-red-500">Delete Conversation</button></form>
          </div>
        </div>
        <div class="overflow-y-scroll h-[35vh]">
        @foreach($sortedCollection as $sorted)
        <div class="flex justify-start items-center w-full px-8 gap-8 md:gap-2 lg:gap-8">
          <div class="flex justify-start items-center gap-3 md:gap-2 lg:gap-3">
            <div>
              <p class="text-sm font-normal text-bodyText">{{$sorted->sender_name}}</p>
            </div>
          </div>
          <div>
            <p class="text-xs font-normal text-[#C0C0C0]">{{ date('F d, Y h:iA', strtotime($sorted->created_at)) }}</p>
          </div>
        </div>
        <div class="px-8 my-1">
          <div class="rounded-lg bg-gray-200 text-[#2f2b2b] py-3 px-4 mx-1">{{$sorted->message}}</div>
        </div>
        @endforeach
        </div>
      </div>
      <div class="text-right p-8">
        <form action="{{route('message-sending')}}" method="POST">@csrf
          <input type="hidden"name="sender_type" @if(session('seeker_session'))value="JobSeekers"@else value="Employers"@endif>
          <input type="hidden"name="sender_id" @if(session('seeker_session'))value="{{session('seeker_session')}}"@else value="{{session('employer_session')}}"@endif>
          <input type="hidden"name="receiver_type" value="{{$reciever_name}}">
          <input type="hidden"name="receiver_id" value="{{$reciever_name_id}}">
          <input type="text"name="message"class="w-full mb-3 px-2 py-2 text-gray-800 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-indigo-500"placeholder="Enter your text"/>
        <button class="bg-button rounded-xl text-white py-3 px-4 w-full md:w-40 mr-10 items-end">Send</button></form>
      </div>
    </div>
    @else
    <!-- second column -->
    <div id="for_mbl" class=" all-user w-full md:w-1/4 shadow-custom p-8 md:p-2 lg:p-8 md:hidden flex flex-col rounded-xl space-y-3 h-full">
      <div class="relative">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="absolute top-3 left-2 w-4 h-4 stroke-2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
        </svg>
        <input type="text" id="" class="search-input bg-gradient h-10 w-full pl-8 rounded-lg focus:outline-none text-xs" name="" placeholder="Search contacts....">
        <div id="suggestions" class="absolute bg-white w-full rounded-lg shadow-md mt-1 hidden"></div>
      </div>
      {{-- <p class="text-bodyText texs-xs font-normal space-x-3 md:space-x-1 lg:space-x-3">
        <a href="#">All</a>
        <a href="#">Read</a>
        <a href="#">Unread</a>
      </p> --}}
      <div id="user-container" class="space-y-6">
        @foreach($reciever_datas as $reciever_data)
        @if(isset($reciever_data->type))
      <div class="user flex justify-between items-center cursor-pointer @if((isset($selected_user)) && ($selected_user == $reciever_data->type.$reciever_data->tableid)) bg-[#8080801a] @endif" data-user-id="{{$reciever_data->id}}" data-type="{{$reciever_data->type}}" data-tableid="{{$reciever_data->tableid}}">
        <div class="flex justify-start items-center gap-3 md:gap-1 lg:gap-3">
            <div>
                <input class="check_data_exits" value="{{$reciever_data->type}}{{$reciever_data->tableid}}" type="hidden">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 stroke-1 fill-white bg-[#D9D9D9] p-2 rounded-full stroke-none">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"></path>
                </svg>
            </div>
            <div>
                <p class="text-sm font-normal text-bodyText">{{$reciever_data->sender_name}}</p>
            </div>
        </div>
      </div>
      @endif
      @endforeach
      </div>
    </div>
    <!-- third column -->
    {{-- <div class="message-box w-full md:w-2/4 shadow-custom md:hidden flex flex-col justify-between rounded-xl h-full">
      <div class="space-y-3 ">
        <div class="flex justify-between items-center p-8 shadow-custom rounded-t-xl">
          <div class="flex justify-start items-center gap-3">
            <div class="">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 stroke-1 fill-white bg-[#D9D9D9] p-2 rounded-full stroke-none">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
              </svg>
            </div>
            <div>
              <p class="text-sm font-normal text-bodyText">Admin</p>
              <p class="text-xs font-normal text-[#C0C0C0]">test</p>
            </div>
          </div>
          <div>
            <button class="text-red-500">Delete Conversation</button>
          </div>
        </div>
        <div class="flex justify-start items-center w-full px-8 gap-8 md:gap-2 lg:gap-8">
          <div class="flex justify-start items-center gap-3 md:gap-2 lg:gap-3">
            <div class="">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 stroke-1 fill-white bg-[#D9D9D9] p-2 rounded-full stroke-none">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
              </svg>
            </div>
            <div>
              <p class="text-sm font-normal text-bodyText">Admin</p>
            </div>
          </div>
          <div>
            <p class="text-xs font-normal text-[#C0C0C0]">July 1, 2021 4:09am</p>
          </div>
        </div>
        <div class="px-8">
          <button class="btn-buttonLight text-white w-full md:w-40 mr-20  py-3 px-4">tests stets</button>
        </div>
      </div>
      <div class="text-right p-8">
        <button class="bg-button rounded-xl text-white py-3 px-4 w-full md:w-40 mr-10 items-end">Send</button>
      </div>
    </div> --}}
    @endif
      
    </div>
    <!-- for others -->
    <!-- second column -->
    <div class="w-full md:w-3/12 xl:w-1/4 shadow-custom py-8 px-8 md:px-3 lg:px-8 hidden md:flex flex-col rounded-xl space-y-3 h-full">
      <div class="relative">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="absolute top-3 left-2 w-4 h-4 stroke-2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
        </svg>
        <input type="text" id="" class="search-input bg-gradient h-10 w-full pl-8 rounded-lg focus:outline-none text-xs" name="" placeholder="Search contacts....">
        <div id="suggestions_big" class="absolute bg-white w-full rounded-lg shadow-md mt-1 hidden"></div>
      </div>
      {{-- <p class="text-bodyText texs-xs font-normal space-x-3 md:space-x-1 lg:space-x-3">
        <a href="#">All</a>
        <a href="#">Read</a>
        <a href="#">Unread</a>
      </p> --}}
      <div id="user-container_big" class="space-y-6">
        @foreach($reciever_datas as $reciever_data)
          @if(isset($reciever_data->type))
        <div class="user flex justify-between items-center cursor-pointer  @if((isset($selected_user)) && ($selected_user == $reciever_data->type.$reciever_data->tableid)) bg-[#8080801a] @endif" data-user-id="{{$reciever_data->id}}" data-type="{{$reciever_data->type}}" data-tableid="{{$reciever_data->tableid}}">
          <div class="flex justify-start items-center gap-3 md:gap-1 lg:gap-3">
              <div>
                  <input class="check_data_exits" value="{{$reciever_data->type}}{{$reciever_data->tableid}}" type="hidden">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 stroke-1 fill-white bg-[#D9D9D9] p-2 rounded-full stroke-none">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"></path>
                  </svg>
              </div>
              <div>
                  <p class="text-sm font-normal text-bodyText">{{ucwords($reciever_data->sender_name)}}</p>
              </div>
          </div>
        </div>
        @endif
        @endforeach
      </div>
    </div>
    <!-- third column -->
    @if(isset($selected_user))
    <div class="w-full md:w-5/12 xl:w-2/4 shadow-custom hidden md:flex flex-col justify-between rounded-xl h-full">
      <div class="space-y-3 ">
        <div class="flex justify-between items-center p-8 shadow-custom rounded-t-xl">
          <div class="flex justify-start items-center gap-3">
            <div class="">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 stroke-1 fill-white bg-[#D9D9D9] p-2 rounded-full stroke-none">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
              </svg>
            </div>
            <div>
              <p class="text-sm font-normal text-bodyText">{{ucwords($selected_user_data->FullName)}}</p>
            </div>
          </div>
          <div>
            <form action="{{route('message-delete')}}" method="POST">@csrf
              <input type="hidden"name="sender_type" @if(session('seeker_session'))value="JobSeekers"@else value="Employers"@endif>
              <input type="hidden"name="sender_id" @if(session('seeker_session'))value="{{session('seeker_session')}}"@else value="{{session('employer_session')}}"@endif>
              <input type="hidden"name="receiver_type" value="{{$reciever_name}}">
              <input type="hidden"name="receiver_id" value="{{$reciever_name_id}}">
            <button class="text-red-500">Delete Conversation</button></form>
          </div>
        </div>
        <div class="overflow-y-scroll h-[50vh]">
        @foreach($sortedCollection as $sorted)
          <div class="flex justify-start items-center w-full px-8 md:gap-2 lg:gap-8 mt-1">
            <div class="flex justify-start items-center md:gap-2 lg:gap-3">
              {{-- <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 stroke-1 fill-white bg-[#D9D9D9] p-2 rounded-full stroke-none">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                </svg>
              </div> --}}
              <div>
                <p class="text-sm font-normal text-bodyText">{{$sorted->sender_name}}</p>
              </div>
            </div>
            <div>
              <p class="text-xs font-normal text-[#C0C0C0]">{{ date('F d, Y h:iA', strtotime($sorted->created_at)) }}</p>
            </div>
          </div>
          <div class="px-8 mt-1">
            <div class="rounded-lg bg-gray-200 text-[#2f2b2b] py-3 px-4 mx-1">{{$sorted->message}}</div>
          </div>
          @endforeach
        </div>
      </div>
      <div class="text-right p-4">
        <form action="{{route('message-sending')}}" method="POST">@csrf
        <input type="hidden"name="sender_type" @if(session('seeker_session'))value="JobSeekers"@else value="Employers"@endif>
        <input type="hidden"name="sender_id" @if(session('seeker_session'))value="{{session('seeker_session')}}"@else value="{{session('employer_session')}}"@endif>
        <input type="hidden"name="receiver_type" value="{{$reciever_name}}">
        <input type="hidden"name="receiver_id" value="{{$reciever_name_id}}">
        <input type="text"name="message"class="px-2 py-2 text-gray-800 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-indigo-500"placeholder="Enter your text"/>
        <button type="submit" class="bg-button rounded-xl text-white py-3 px-4 w-40 mr-10 items-end">Send</button></form>
      </div>
    </div>
    @else
    <div class="w-full md:w-5/12 xl:w-2/4 shadow-custom hidden md:flex flex-col justify-center items-center rounded-xl h-full text-center bg-gray-200">
      <p class="text-xl font-semibold py-4">Select a user to start a conversation</p>
    </div>

    @endif
  </div>
</main>
@section('scripts')
<script>
  const searchInput = document.querySelectorAll('.search-input');
const check_mbl = document.getElementById('for_mbl');
const computedStyles = window.getComputedStyle(check_mbl);
const displayValue = computedStyles.getPropertyValue('display');
var suggestionsContainer;
if (displayValue == 'none') {
  suggestionsContainer = document.getElementById('suggestions_big');
} else {
  suggestionsContainer = document.getElementById('suggestions');
}
const users = @json($user_data);
// searchInput.forEach(searchInput => {
//   searchInput.addEventListener('input', function() {
//     const searchTerm = searchInput.value ? searchInput.value.toLowerCase() : '';
//     const matchedUsers = users.filter(user =>
//       user.name.toLowerCase().includes(searchTerm) &&
//       !isUserDisplayed(user.type + user.tableid) // Exclude existing user IDs
//     );
searchInput.forEach(searchInput => {
  searchInput.addEventListener('input', function() {
    const searchTerm = searchInput.value ? searchInput.value.toLowerCase() : '';
    const matchedUsers = users.filter(user =>
      user.name && user.name.toLowerCase().includes(searchTerm) &&
      !isUserDisplayed(user.type + user.tableid) // Exclude existing user IDs
    );

    if (matchedUsers.length > 0) {
      suggestionsContainer.innerHTML = '';
      suggestionsContainer.style.display = 'block';

      matchedUsers.forEach(user => {
        const suggestion = document.createElement('div');
        suggestion.classList.add('suggestion');
        suggestion.textContent = user.name;
        suggestion.dataset.userId = user.id; // Set data attribute to identify the user

        suggestion.addEventListener('click', function() {
          populateUserData(user);
          suggestionsContainer.innerHTML = '';
          suggestionsContainer.style.display = 'none';
        });

        suggestionsContainer.appendChild(suggestion);
      });
    } else {
      suggestionsContainer.innerHTML = '';
      suggestionsContainer.style.display = 'none';
    }
  });
});

function isUserDisplayed(userId) {
  const existingUserElements = Array.from(document.querySelectorAll('.check_data_exits'));
  return existingUserElements.some(element => element.value == userId);
}

function populateUserData(user) {
  const userElement = document.createElement('div');
  userElement.classList.add('user', 'flex', 'justify-between', 'items-center', 'cursor-pointer');
  userElement.dataset.userId = user.id; // Set data attribute to identify the user
  userElement.dataset.type = user.type; // Set data attribute for type
  userElement.dataset.tableid = user.tableid; // Set data attribute for table ID

  const userContent = `
    <div class="flex justify-start items-center gap-3 md:gap-1 lg:gap-3">
        <div>
            <input class="check_data_exits" value="${user.type}${user.tableid}" type="hidden" />
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 stroke-1 fill-white bg-[#D9D9D9] p-2 rounded-full stroke-none">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"></path>
            </svg>
        </div>
        <div>
            <p class="text-sm font-normal text-bodyText">${user.name}</p>
        </div>
    </div>
  `;

  userElement.innerHTML = userContent;

  // Attach the event listener to the userElement
  userElement.addEventListener('click', function() {
    const userType = this.dataset.type; // Get the value of data-type
    const tableId = this.dataset.tableid; // Get the value of data-tableid

    // Construct the route URL with the desired type and table ID
    const routeURL = `/message/${userType}/${tableId}`;

    // Redirect to the route URL
    window.location.href = routeURL;
  });
  // Append the user to the respective container based on the display value
  if (displayValue == 'none') {
    document.getElementById('user-container_big').appendChild(userElement);
  } else {
    document.getElementById('user-container').appendChild(userElement);
  }
}
const elementDatas = document.querySelectorAll('.user');

elementDatas.forEach(elementData => {
  elementData.addEventListener('click', function() {
    const userType = this.dataset.type; // Get the value of data-type
    const tableId = this.dataset.tableid; // Get the value of data-tableid

    // Construct the route URL with the desired type and table ID
    const routeURL = `/message/${userType}/${tableId}`;

    // Redirect to the route URL
    window.location.href = routeURL;
  });
});











//   const searchInput = document.querySelectorAll('.search-input');
//   const check_mbl = document.getElementById('for_mbl');
//   const computedStyles = window.getComputedStyle(check_mbl);
//   const displayValue = computedStyles.getPropertyValue('display');
//   var suggestionsContainer;
//   if(displayValue == 'none'){
//     suggestionsContainer = document.getElementById('suggestions_big');
//   }
//   else{
//     suggestionsContainer = document.getElementById('suggestions');
//   }
//   const users = @json($user_data);
//   searchInput.forEach(searchInput => {
//   searchInput.addEventListener('input', function() {
//     const searchTerm = searchInput.value ? searchInput.value.toLowerCase() : '';
//     const matchedUsers = users.filter(user => user.name.toLowerCase().includes(searchTerm));

//     if (matchedUsers.length > 0) {
//       console.log(matchedUsers);
//       suggestionsContainer.innerHTML = '';
//       suggestionsContainer.style.display = 'block';

//       matchedUsers.forEach(user => {
//         const suggestion = document.createElement('div');
//         suggestion.classList.add('suggestion');
//         suggestion.textContent = user.name;

//         suggestion.addEventListener('click', function() {
//           populateUserData(user);
//           suggestionsContainer.innerHTML = '';
//           suggestionsContainer.style.display = 'none';
//         });

//         suggestionsContainer.appendChild(suggestion);
//       });
//     } else {
//       console.log("no match");
//       suggestionsContainer.innerHTML = '';
//       suggestionsContainer.style.display = 'none';
//     }
//   });
// });


//   function populateUserData(user) {
//       const userElement = document.createElement('div');
//       userElement.classList.add('user', 'flex', 'justify-between', 'items-center', 'cursor-pointer');

      // const userContent = `
      //     <div class="flex justify-start items-center gap-3 md:gap-1 lg:gap-3">
      //         <div>
      //             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 stroke-1 fill-white bg-[#D9D9D9] p-2 rounded-full stroke-none">
      //                 <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
      //             </svg>
      //         </div>
      //         <div>
      //             <p class="text-sm font-normal text-bodyText">${user.name}</p>
      //         </div>
      //     </div>
      //     <div>
      //         <p class="text-sm font-normal text-bodyText">${user.id} years</p>
      //     </div>
      // `;

//       userElement.innerHTML = userContent;
//       // Append the user element to the desired container on your page
//       // For example, if you have a container with the ID "user-container":
      // const check_mbl = document.getElementById('for_mbl');
      // const computedStyles = window.getComputedStyle(check_mbl);
      // const displayValue = computedStyles.getPropertyValue('display');
      // var suggestionsContainer;
      // if(displayValue == 'none'){
      //   document.getElementById('user-container_big').appendChild(userElement);
      // }
      // else{
      //   document.getElementById('user-container').appendChild(userElement);
      // }
      
//   }
</script>

@endsection
@endsection