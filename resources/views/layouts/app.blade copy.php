<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Open To SASS</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Poppins:wght@400;500;600;700&family=Roboto&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" integrity="sha512-arEjGlJIdHpZzNfZD2IidQjDZ+QY9r4VFJIm2M/DhXLjvvPyXFj+cIotmo0DLgvL3/DOlIaEDwzEiClEPQaAFQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')
  </head>
  <body>
  <header id="header" class="bg-primary relative">
    <!-- nav menu -->
    <!-- <div class="bg-white bg-opacity-75 shadow-md  w-full relative z-20"> -->
      <div id="nav_menu" class="nav_menu container mx-auto pt-8 pb-8 w-11/12 md:max-w-[767px] lg:max-w-[1000px] xl:max-w-[1200px] flex flex-col md:flex-row items-center justify-between md:space-x-8 font-roboto z-0">
        <!-- Logo -->
        <div class="w-full md:w-fit flex justify-between items-center">
          <a href="{{route('home')}}" class="w-fit">
            <img src="{{URL::asset('/src/img/logo.png')}}" alt="logo" srcset="" class="w-20" />
          </a>
          <button class="toggle_btn flex md:hidden">
            <img src="{{URL::asset('/src/img/logo.png')}}" alt="" class="hidden">
            <svg   fill="none" viewBox="0 0 24 24" stroke="currentColor" class="menu_btn w-8 h-6 stroke-2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9h16.5m-16.5 6.75h16.5" />
            </svg>
          </button>
        </div>
        <div id="" class=" hidden md:flex flex-col md:flex-row items-center justify-center md:justify-between h-screen md:h-auto space-y-8 md:space-y-0 w-full">
          <nav class="lg:ml-12">
            <ul class="flex flex-col md:flex-row items-center justify-start space-y-8 md:space-y-0 md:space-x-2 lg:space-x-8">
              <li>
                <a href="{{route('jobs')}}" class="text-[22px] md:text-base font-medium md:font-normal"> Search Jobs </a>
              </li>
              <li>
                <a href="{{route('employers')}}" class="text-[22px] md:text-base font-medium md:font-normal"> Search Companies </a>
              </li>
              <li>
                <a href="#" class="text-[22px] md:text-base font-medium md:font-normal"> Resources </a>
              </li>
            </ul>
          </nav>
          <!-- dropdown -->
          <nav class="md:space-x-2 lg:space-x-8 flex flex-col md:flex-row items-center justify-center space-y-8 md:space-y-0">
            <div class="dropdown">
              <button class="forEmployer dropbtn flex items-center text-[22px] md:text-base font-medium md:font-normal sCLSFDD"> For Employers <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ml-2 h-5 w-5 font-bold">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                </svg>
              </button>
              <div class="employerDropdown dropdown-content">
                <a href="{{route('employer_registration')}}">Register</a>
                <a href="{{route('employers_login')}}">Login</a>
              </div>
            </div>
            <div class="dropdown">
              <button class="forCandidate dropbtn flex items-center text-[22px] md:text-base font-medium md:font-normal sCLSFDP"> For Job Seekers <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ml-2 h-5 w-5 font-bold">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                </svg>
              </button>
              <div class="candidateDropdown dropdown-content">
                <a href="{{route('job_seeker_registration')}}">Register</a>
                <a href="{{route('job_seekers_login')}}">Login</a>
              </div>
            </div>
          </nav>
        </div>
      </div>
    <!-- </div> -->
    <!-- hamburger menu -->
    <div id="menu_bar" class="fixed top-0 left-0 bottom-0 menu_bar block md:hidden z-10 w-full bg-white float-right overflow-y-auto">
      <div class="container mx-auto pt-8 w-11/12 md:w-fit flex justify-between items-center ">
        <a href="/src/index.html" class="w-fit">
          <img src="{{URL::asset('/src/img/logo.png')}}" alt="logo" srcset="" class="w-20" />
        </a>
        <button class="toggle_btn flex md:hidden">
          <img src="{{URL::asset('/src/img/logo.png')}}" alt="" class="hidden">
          <svg   fill="none" viewBox="0 0 24 24" stroke="currentColor" class="cross_btn w-8 h-6 stroke-2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <nav>
        <ul class="flex flex-col bg-white items-center mt-10 text-center space-y-4  h-screen">
          <li>
            <a href="{{route('jobs')}}" class="text-[22px] font-medium "> Search Jobs </a>
          </li>
          <li>
            <a href="{{route('employers')}}" class="text-[22px] font-medium "> Search Companies </a>
          </li>
          <li>
            <a href="#" class="text-[22px] font-medium "> Resources </a>
          </li>
          <li>
            <div class="dropdown">
              <button class="forEmployer dropbtn flex items-center text-[22px] md:text-base font-medium md:font-normal sCLSFDD"> For Employers <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ml-2 h-5 w-5 font-bold">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                </svg>
              </button>
              <div class="employerDropdown dropdown-content">
                <a href="{{route('employer_registration')}}">Register</a>
                <a href="{{route('employers_login')}}">Login</a>
              </div>
            </div>
          </li>
          <li>
            <div class="dropdown">
              <button class="forCandidate dropbtn flex items-center text-[22px] md:text-base font-medium md:font-normal sCLSFDP"> For Job Seekers <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ml-2 h-5 w-5 font-bold">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                </svg>
              </button>
              <div class="candidateDropdown dropdown-content">
                <a href="{{route('job_seeker_registration')}}">Register</a>
                <a href="{{route('job_seekers_login')}}">Login</a>
              </div>
            </div>
          </li>
        </ul>
      </nav>
    </div>
  </header>
    
    @yield('content')
    
    <footer class=" ">
      <div class="h-[23px] border border-bodyText border-opacity-10 bg-primary"></div>
      <div class="border border-t-0 border-bodyText border-opacity-25 pt-16 pb-6">
        <div class="container mx-auto w-11/12 md:max-w-[767px] lg:max-w-[1000px] xl:max-w-[1200px]">
          <div class="flex flex-col md:flex-row items-start justify-between gap-8">
            <a href="{{route('home')}}">
              <div class="">
                <img src="/src/img/logo.png" alt="" class="" />
              </div>
            </a>
            <div class="flex flex-col md:flex-row items-start justify-between gap-4 lg:gap-8">
              <div>
                <h3 class="footer-heading">Professionals</h3>
                <ul class="mt-3 flex list-inside list-disc flex-col space-y-3 text-[19px]">
                  <li>
                    <a class="footer-body" href="{{route('talent_community')}}">Join the SaaS network</a>
                  </li>
                  <li>
                    <a class="footer-body" href="{{route('jobs')}}">Search jobs</a>
                  </li>
                  <li>
                    <a class="footer-body" href="{{route('employers')}}">Search Companies</a>
                  </li>
                </ul>
              </div>
              <div>
                <h3 class="footer-heading">Employers</h3>
                <ul class="mt-3 flex list-inside list-disc flex-col space-y-3">
                  <li>
                    <a class="footer-body" href="">Post a Job</a>
                  </li>
                  <li>
                    <a class="footer-body" href="{{route('talent_community')}}">Search the SaaS network</a>
                  </li>
                  <li>
                    <a class="footer-body" href="{{route('pricing')}}">Pricing</a>
                  </li>
                </ul>
              </div>
              <div>
                <h3 class="footer-heading">OpentoSaaS</h3>
                <ul class="mt-3 flex list-inside list-disc flex-col space-y-3">
                  <li>
                    <a class="footer-body" href="{{route('about')}}">About</a>
                  </li>
                  <li>
                    <a class="footer-body" href="#">Private Policy</a>
                  </li>
                  <li>
                    <a class="footer-body" href="#">Terms and Conditions</a>
                  </li>
                  <li>
                    <a class="footer-body" href="#">Blog</a>
                  </li>
                  <li>
                    <a class="footer-body" href="#">Contact</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="mt-12 flex flex-col-reverse md:flex-row items-start md:items-center justify-start md:justify-between gap-4">
            <p class="text-sm font-normal text-bodyText">@2023 Seek</p>
            <div class="flex items-center justify-center space-x-4 md:justify-end">
              <p class="text-sm font-normal text-bodyText">Follow us:</p>
              <a href="#">
                <svg   fill="currentColor" viewBox="0 0 24 24" class="footer-social-icon">
                  <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                </svg>
              </a>
              <a href="#">
                <svg   viewBox="0 0 512 512" class="footer-social-icon">
                  <path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" />
                </svg>
              </a>
              <a href="#">
                <svg   fill="currentColor" viewBox="0 0 24 24" class="footer-social-icon">
                  <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                </svg>
              </a>
              <a href="#">
                <svg   viewBox="0 0 448 512" class="footer-social-icon">
                  <path fill="currentColor" d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z" />
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js" integrity="sha512-fZy9udcMtCbrKvLIxWhOUaH6TZYddjizBEhESeTsv1lwzXgcR6ZalhWye+BlT/KQ0KIfyjiqwce7IKKtRH29hQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="{{asset('js/mains.js')}}" type="text/javascript"></script>
    <script>
      $(document).ready(function() {
          $('.select2').select2();
      });
  </script>
  <style>
    .select2-container .select2-selection--single {
    border: none !important;
    outline: none !important;
    box-shadow: none !important;
    }

    .select2-results__option {
  display: flex !important;
  align-items: center !important;
  width: 100% !important;
  padding: 10px !important;
  transition: background-color 0.3s ease !important;
  font-family: Arial, sans-serif !important;
  font-size: 14px !important;
  color: #333 !important;
}

.select2-results__option:hover {
  background-color: #f5f5f5 !important;
  cursor: pointer !important;
}

.select2-container--default .select2-results__option.select2-results__option--highlighted {
  background-color: #d3d3d3 !important;
}

.select2-results__option .select2-results__option-text {
  flex: 1 !important;
  margin-left: 10px !important;
}

.select2-results__option .select2-results__option-icon {
  width: 20px !important;
  height: 20px !important;
  margin-right: 10px !important;
}

  </style>
  </body>
</html>