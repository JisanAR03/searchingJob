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
</section>
<main class="w-11/12 md:max-w-[767px] lg:max-w-[1000px] xl:max-w-[1200px] container mx-auto my-10 pb-16">
        <div class="flex justify-between items-start">
          <div class="w-full md:w-8/12">
            <div class="flex justify-between items-end bg-[#FAFAFA] w-full h-[267px] px-10 py-20 rounded-2xl fCFMV tRPFMV">
              <div class="flex flex-col justify-center items-start aSNFMV">
                <img src="/src/img/signature.png" alt="" srcset="" class="w-[67px] h-[67ppx]">
                <h6 class="text-lg">{{$jobPostData->JobTitle}} <span class="text-button">({{$jobPostData->JobLocation}})</span></h6>
                <p class="text-sm"><span class="text-[#007BFF]">{{$employer_data->CompanyName}}</span> <span>, {{$employer_data->Location}}</span></p>
                <p>By <span class="text-[#007BFF]">{{$employer_data->CompanyName}}</span> </p>
              </div>
              <div class="flex justify-center items-center gap-3 lg:gap-9 aSNFMV nJCFMV">
                <form action="{{route('apply-form-post')}}" method="GET">
                  <input type="hidden" name="JobPostID" value="{{$jobPostData->JobPostID}}">
                  <button @if(session('employer_session')) disabled @endif class="bg-button rounded-xl text-white py-2 lg:py-3 px-2 lg:px-4">Apply Now</button></form>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-2 text-lightText">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M7.217 10.907a2.25 2.25 0 100 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186l9.566-5.314m-9.566 7.5l9.566 5.314m0 0a2.25 2.25 0 103.935 2.186 2.25 2.25 0 00-3.935-2.186zm0-12.814a2.25 2.25 0 103.933-2.185 2.25 2.25 0 00-3.933 2.185z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-2 text-lightText">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                </svg>
              </div>
            </div>
             <!-- second column -->
          <div class="block md:hidden md:p-10 w-full space-y-5">
            <h5>Job Information</h5>
            <div class="space-y-1">
              <p class="text-bodyText text-xs">Job Posted Date</p>
              <p class="font-medium text-sm">{{ date('F d, Y', strtotime($jobPostData->PostDate)) }}</p>
            </div>
            <div class="space-y-1">
              <p class="text-bodyText text-xs">Compensation (Annual in Lacs)</p>
              <p class="font-medium text-sm">{{$jobPostData->Compensation}}</p>
            </div>
            <div class="space-y-1">
              <p class="text-bodyText text-xs">Location</p>
              <p class="font-medium text-sm">{{$employer_data->Location}}</p>
            </div>
            <div class="space-y-1">
              <p class="text-bodyText text-xs">Type Of Work</p>
              <p class="font-medium text-sm">{{$jobPostData->WorkType}}</p>
            </div>
            <div class="space-y-1">
              <p class="text-bodyText text-xs">Job Location</p>
              <p class="font-medium text-sm">{{$jobPostData->JobLocation}}</p>
            </div>
            <div class="space-y-1">
              <p class="text-bodyText text-xs">Category</p>
              <p class="font-medium text-sm">{{$jobPostData->JobTitle}}</p>
            </div>
          </div>
            <div class="space-y-3 text-sm py-8">
              <div class="space-y-4">
                <p class="text-[17px] font-semibold">Company Description</p>
                <p class="text-sm">Company Name: {{$employer_data->CompanyName}}</p>
                <p class="text-sm">Website: <a href="https://{{$employer_data->WebsiteURL}}">{{$employer_data->WebsiteURL}}</a></p>
              </div>
              <p class="text-sm">About us</p>
              <p class="text-sm">{{$employer_data->AboutCompany}}</p>
              <p class="text-sm font-semibold">Our Mission</p>
              {{-- <ul class="list-disc list-inside space-y-2 ml-2">
                <li class="text-sm">Our mission is to empower everyone to produce high-quality and cost-effective content themselves.</li>
                <li class="text-sm">We are dedicated to simplifying content writing so that people can focus on other important tasks, giving them more time and
                  money. This will lead to all people becoming better writers in general.</li>
              </ul> --}}
              <p class="text-sm">{{$employer_data->CompanyMission}}</p>
              <p class="text-sm font-semibold">Experience: {{$jobPostData->Experience}} Years</p>
              <p class="text-sm font-semibold">Location: {{$jobPostData->JobLocation}}</p>
              <p class="text-sm font-semibold">Role: {{$jobPostData->JobTitle}}</p>
              <h4 class="text-[20px] md:text-[24px] lg:text-[26px] font-normal">Role & Responsibilities of {{$jobPostData->JobTitle}}</h4>
              <p class="text-[16px] font-bold">Job Description:</p>
              <p class="text-sm">{{$jobPostData->Description}}</p>
              {{-- <ul class="list-disc list-inside space-y-2 ml-2">
                <li class="text-sm">Design, develop, and maintain DevOps strategies, processes, and solutions</li>
                <li class="text-sm">Design, develop, and maintain DevOps strategies, processes, and solutions Monitor system performance and reliability, and implement strategies to improve it</li>
                <li class="text-sm">Troubleshoot system issues and develop solutions in a timely manner</li>
                <li class="text-sm">Develop automation scripts and improve existing processes</li>
                <li class="text-sm">Collaborate with software engineers, database administrators, and other teams</li>
              </ul>
              <p class="text-sm">Requirements:</p>
              <ul class="list-disc list-inside space-y-2 ml-2">
                <li class="text-sm">Bachelor’s degree in Computer Science or relevant field </li>
                <li class="text-sm">5+ years of experience in a DevOps role</li>
                <li class="text-sm">Expertise in scripting languages, such as Bash and Python</li>
                <li class="text-sm">Knowledge of configuration management tools such as Ansible, Chef, and Puppet</li>
                <li class="text-sm">Experience with container technologies, such as Docker and Kubernetes</li>
                <li class="text-sm">Knowledge of cloud platforms, such as AWS, Azure, and GCP</li>
                <li class="text-sm">Excellent organizational and communication skills</li>
              </ul>
              <p class="text-sm">Here's why you'll love working with us:</p>
              <ul class="list-disc list-inside space-y-2 ml-2">
                <li class="text-sm">We are fully remote and our team members work flexibly.</li>
                <li class="text-sm">We always encourage our team members to take initiative. They set their own tasks & deadlines.</li>
                <li class="text-sm">Just like our AI writing assistant, we too, work in a fast-paced environment.</li>
                <li class="text-sm">Knowledge of configuration management tools such as Ansible, Chef, and Puppet</li>
                <li class="text-sm">Experience with container technologies, such as Docker and Kubernetes</li>
                <li class="text-sm">You'll get ample space to showcase your creativity & experiment</li>
                <li class="text-sm">You'll get ample space to showcase your creativity & experiment. We believe in working together instead of following a long chain of command.</li>
              </ul>
              <p>Our Technology</p>
              <p>AI</p>
              <ul class="list-disc list-inside space-y-2 ml-2">
                <li class="text-sm">GPT-based AI models</li>
                <li class="text-sm">BERT, BART, and other transformers models</li>
              </ul>
              <p>Frontend</p>
              <ul class="list-disc list-inside space-y-2 ml-2">
                <li class="text-sm">NextJs/React with Redux</li>
                <li class="text-sm">TypeScript</li>
                <li class="text-sm">tailwindcss</li>
              </ul>
              <p>Backend</p>
              <ul class="list-disc list-inside space-y-2 ml-2">
                <li class="text-sm">Python (FastAPI)</li>
                <li class="text-sm">PostgreSQL, MongoDB</li>
                <li class="text-sm">Kubernetes for deployment and orchestration</li>
              </ul>
              <div class="border-y border-[#ACACAC] py-5">
                <p>Skills</p>
                <ul class="list-disc list-inside space-y-2 ml-2">
                  <li class="text-sm">AWS</li>
                  <li class="text-sm">Python</li>
                  <li class="text-sm">Bash</li>
                  <li class="text-sm">Docker</li>
                  <li class="text-sm">Devops</li>
                  <li class="text-sm">TypeScript</li>
                  <li class="text-sm">Kubernetes</li>
                  <li class="text-sm">Azure</li>
                  <li class="text-sm">GCP</li>
                  <li class="text-sm">Ansible</li>
                  <li class="text-sm">React with Redux</li>
                  <li class="text-sm">PostgreSQL, MongoDB</li>
                  <li class="text-sm">Kubernetes for deployment and orchestration</li>
                </ul>
              </div>
              <div class="border-b border-[#ACACAC] py-3">
                <p>Education</p>
                <ul class="list-disc list-inside space-y-2 ml-2">
                  <li class="text-sm">Master's Degree</li>
                  <li class="text-sm">Bachelor's Degree</li>
                  <li class="text-sm">Post Graduate</li>
                </ul>
              </div> --}}
            </div>
          </div>
          <!-- second column -->
          <div class="hidden md:block p-10 w-full md:w-5/12 space-y-5">
            <h5>Job Information</h5>
            <div class="space-y-1">
              <p class="text-bodyText text-xs">Job Posted Date</p>
              <p class="font-medium text-sm">{{ date('F d, Y', strtotime($jobPostData->PostDate)) }}</p>
            </div>
            <div class="space-y-1">
              <p class="text-bodyText text-xs">Compensation (Annual in Lacs)</p>
              <p class="font-medium text-sm">{{$jobPostData->Compensation}}</p>
            </div>
            <div class="space-y-1">
              <p class="text-bodyText text-xs">Location</p>
              <p class="font-medium text-sm">{{$employer_data->Location}}</p>
            </div>
            <div class="space-y-1">
              <p class="text-bodyText text-xs">Type Of Work</p>
              <p class="font-medium text-sm">{{$jobPostData->WorkType}}</p>
            </div>
            <div class="space-y-1">
              <p class="text-bodyText text-xs">Job Location</p>
              <p class="font-medium text-sm">{{$jobPostData->JobLocation}}</p>
            </div>
            <div class="space-y-1">
              <p class="text-bodyText text-xs">Category</p>
              <p class="font-medium text-sm">{{$jobPostData->JobTitle}}</p>
            </div>
          </div>
        </div>
       <!-- related jobs -->
       <section class="bg-[#FAFAFA] px-5 py-12">
          <h5 class="mb-7">Related Jobs</h5>
          <!-- all cards -->
          <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-4">
            <!-- single card -->
            <div class="bg-white h-[380px] rounded-xl px-3">
              <img src="/src/img/zenskar.png" alt="">
              <div class="space-y-5 ">
                <div>
                  <p>Head of Engineering</p>
                  <p class="text-button text-[13px]">Zenskar</p>
                </div>
                <div>
                  <p class="text-[13px] text-lightText">Location</p>
                  <p class="text-[13px]">WFA, Remote</p>
                </div>
                <div>
                  <p class="text-[13px] text-lightText">Compensation (Annual in Lacs)</p>
                  <p class="text-[13px]"> Best in the Industry</p>
                </div>
                <div class="flex justify-between items-center fCFMV">
                  <button class="btn-whitelg text-button border-button w-24 text-[13px]">More Details</button>
                  <button class="btn-buttonlg border border-button rounded-lg w-20 lg:w-24 text-[13px] mTIPXFMV">Apply Now</button>
                </div>
              </div>
            </div> 
            <!-- single card -->
            <div class="bg-white h-[380px] rounded-xl px-3">
              <img src="/src/img/zenskar.png" alt="">
              <div class="space-y-5 ">
                <div>
                  <p>Head of Engineering</p>
                  <p class="text-button text-[13px]">Zenskar</p>
                </div>
                <div>
                  <p class="text-[13px] text-lightText">Location</p>
                  <p class="text-[13px]">WFA, Remote</p>
                </div>
                <div>
                  <p class="text-[13px] text-lightText">Compensation (Annual in Lacs)</p>
                  <p class="text-[13px]"> Best in the Industry</p>
                </div>
                <div class="flex justify-between items-center fCFMV">
                  <button class="btn-whitelg text-button border-button w-24 text-[13px]">More Details</button>
                  <button class="btn-buttonlg border border-button rounded-lg w-20 lg:w-24 text-[13px] mTIPXFMV">Apply Now</button>
                </div>
              </div>
            </div> 
            <!-- single card -->
            <div class="bg-white h-[380px] rounded-xl px-3">
              <img src="/src/img/zenskar.png" alt="">
              <div class="space-y-5 ">
                <div>
                  <p>Head of Engineering</p>
                  <p class="text-button text-[13px]">Zenskar</p>
                </div>
                <div>
                  <p class="text-[13px] text-lightText">Location</p>
                  <p class="text-[13px]">WFA, Remote</p>
                </div>
                <div>
                  <p class="text-[13px] text-lightText">Compensation (Annual in Lacs)</p>
                  <p class="text-[13px]"> Best in the Industry</p>
                </div>
                <div class="flex justify-between items-center fCFMV">
                  <button class="btn-whitelg text-button border-button w-24 text-[13px]">More Details</button>
                  <button class="btn-buttonlg border border-button rounded-lg w-20 lg:w-24 text-[13px] mTIPXFMV">Apply Now</button>
                </div>
              </div>
            </div> 
            <!-- single card -->
            <div class="bg-white h-[380px] rounded-xl px-3">
              <img src="/src/img/zenskar.png" alt="">
              <div class="space-y-5 ">
                <div>
                  <p>Head of Engineering</p>
                  <p class="text-button text-[13px]">Zenskar</p>
                </div>
                <div>
                  <p class="text-[13px] text-lightText">Location</p>
                  <p class="text-[13px]">WFA, Remote</p>
                </div>
                <div>
                  <p class="text-[13px] text-lightText">Compensation (Annual in Lacs)</p>
                  <p class="text-[13px]"> Best in the Industry</p>
                </div>
                <div class="flex justify-between items-center fCFMV">
                  <button class="btn-whitelg text-button border-button w-24 text-[13px]">More Details</button>
                  <button class="btn-buttonlg border border-button rounded-lg w-20 lg:w-24 text-[13px] mTIPXFMV">Apply Now</button>
                </div>
              </div>
            </div> 
            <!-- single card -->
            <div class="bg-white h-[380px] rounded-xl px-3">
              <img src="/src/img/zenskar.png" alt="">
              <div class="space-y-5 ">
                <div>
                  <p>Head of Engineering</p>
                  <p class="text-button text-[13px]">Zenskar</p>
                </div>
                <div>
                  <p class="text-[13px] text-lightText">Location</p>
                  <p class="text-[13px]">WFA, Remote</p>
                </div>
                <div>
                  <p class="text-[13px] text-lightText">Compensation (Annual in Lacs)</p>
                  <p class="text-[13px]"> Best in the Industry</p>
                </div>
                <div class="flex justify-between items-center fCFMV">
                  <button class="btn-whitelg text-button border-button w-24 text-[13px]">More Details</button>
                  <button class="btn-buttonlg border border-button rounded-lg w-20 lg:w-24 text-[13px] mTIPXFMV">Apply Now</button>
                </div>
              </div>
            </div> 
            <!-- single card -->
            <div class="bg-white h-[380px] rounded-xl px-3">
              <img src="/src/img/zenskar.png" alt="">
              <div class="space-y-5 ">
                <div>
                  <p>Head of Engineering</p>
                  <p class="text-button text-[13px]">Zenskar</p>
                </div>
                <div>
                  <p class="text-[13px] text-lightText">Location</p>
                  <p class="text-[13px]">WFA, Remote</p>
                </div>
                <div>
                  <p class="text-[13px] text-lightText">Compensation (Annual in Lacs)</p>
                  <p class="text-[13px]"> Best in the Industry</p>
                </div>
                <div class="flex justify-between items-center fCFMV">
                  <button class="btn-whitelg text-button border-button w-24 text-[13px]">More Details</button>
                  <button class="btn-buttonlg border border-button rounded-lg w-20 lg:w-24 text-[13px] mTIPXFMV">Apply Now</button>
                </div>
              </div>
            </div> 
            <!-- single card -->
            <div class="bg-white h-[380px] rounded-xl px-3">
              <img src="/src/img/zenskar.png" alt="">
              <div class="space-y-5 ">
                <div>
                  <p>Head of Engineering</p>
                  <p class="text-button text-[13px]">Zenskar</p>
                </div>
                <div>
                  <p class="text-[13px] text-lightText">Location</p>
                  <p class="text-[13px]">WFA, Remote</p>
                </div>
                <div>
                  <p class="text-[13px] text-lightText">Compensation (Annual in Lacs)</p>
                  <p class="text-[13px]"> Best in the Industry</p>
                </div>
                <div class="flex justify-between items-center fCFMV">
                  <button class="btn-whitelg text-button border-button w-24 text-[13px]">More Details</button>
                  <button class="btn-buttonlg border border-button rounded-lg w-20 lg:w-24 text-[13px] mTIPXFMV">Apply Now</button>
                </div>
              </div>
            </div> 
            <!-- single card -->
            <div class="bg-white h-[380px] rounded-xl px-3">
              <img src="/src/img/zenskar.png" alt="">
              <div class="space-y-5 ">
                <div>
                  <p>Head of Engineering</p>
                  <p class="text-button text-[13px]">Zenskar</p>
                </div>
                <div>
                  <p class="text-[13px] text-lightText">Location</p>
                  <p class="text-[13px]">WFA, Remote</p>
                </div>
                <div>
                  <p class="text-[13px] text-lightText">Compensation (Annual in Lacs)</p>
                  <p class="text-[13px]"> Best in the Industry</p>
                </div>
                <div class="flex justify-between items-center fCFMV">
                  <button class="btn-whitelg text-button border-button w-24 text-[13px]">More Details</button>
                  <button class="btn-buttonlg border border-button rounded-lg w-20 lg:w-24 text-[13px] mTIPXFMV">Apply Now</button>
                </div>
              </div>
            </div>            
          </div>
          
       </section>
    </main>
@endsection