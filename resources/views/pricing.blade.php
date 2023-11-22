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
<main class="w-11/12 container mx-auto max-w-full md:max-w-[767px] lg:max-w-[1000px] xl:max-w-[1200px] space-y-7">
  <!-- pricing table -->
  <section class="mb-20">
    <div class="text-center space-y-6 py-16">
      <p class="uppercase ">PRICING</p>
      <h2 class="text-black">Easily organize your work. Start free,</h2>
      <p class="text-lg">Access Asana’s features. No credit card required.</p>
      <button class="bg-button rounded-xl text-white py-2 px-4">Get Started</button>
    </div>
    <div class="flex flex-col md:flex-row justify-between items-center gap-10 ">
      <div class="flex flex-col justify-start rounded-xl border border-1 border-button px-5 py-5 space-y-24 h-[400px] ">
        <div class="space-y-6">
          <div class="space-y-3.5">
            <h6>Basic</h6>
            <p class="text-sm">For individuals or teams just getting started with project management.</p>
          </div>
          <div class="space-y-2">
            <h3 class="font-bold text-black text-[28px]">$1/Month</h3>
            <p class="text-xs">Free forever</p>
            <ul class="pricing_ul">
              <li class="text-sm">No access to the SaaS network</li>
            </ul>
          </div>
        </div>
        @if(session()->has('employer_session') || session()->has('seeker_session'))
        <a href="{{ route('stripe', ['amount' => 'Basic']) }}"><button class="btn-white border-black py-2 px-4 w-full">Get Started</button></a>
        @else
        <button class="btn-white border-black py-2 px-4 w-full">Get Started</button>
        @endif
      </div>
      <div class="flex flex-col justify-start rounded-xl border border-1 border-button border-t-[15px] border-t-button px-5 py-2 space-y-10 h-[400px]">
        <div class="space-y-6">
          <div class="space-y-3.5">
            <h4 class="">Premium</h4>
            <p class="text-sm">For individuals or teams just getting started with project management.</p>
          </div>
          <div class="space-y-2">
            <h3 class="font-bold text-black text-[28px]">$25/Month</h3>
            <p class="text-sm">Per user, per month billed annually US$ 13.49 billed monthly</p>
            <ul class="pricing_ul">
              <li class="text-sm">Post unlimited jobs</li>
              <li class="text-sm">Access to the SaaS network</li>
            </ul>
          </div>
        </div>
        @if(session()->has('employer_session') || session()->has('seeker_session'))
        <a href="{{ route('stripe', ['amount' => 'Premium']) }}"><button class="rounded-xl bg-button border border-solid border-button text-white py-2 px-4 w-full">Get Started</button></a>
        @else
        <button class="rounded-xl bg-button border border-solid border-button text-white py-2 px-4 w-full">Get Started</button>
        @endif
      </div>
      <div class="flex flex-col justify-start rounded-xl border border-1 border-button px-5 py-5 space-y-5 h-[400px]">
        <div class="space-y-6">
          <div class="space-y-3.5">
            <h6 class="text-button">Enterprise</h6>
            <p class="text-sm">For individuals or teams just getting started with project management.</p>
          </div>
          <div class="space-y-2">
            <h3 class="font-bold text-black text-[28px]">$50/Month</h3>
            <p class="text-sm">Per user, per month billed annually US$ 30.49 billed monthly</p>
            <ul class="pricing_ul">
              <li class="text-sm">Post unlimited jobs</li>
              <li class="text-sm">Access to the SaaS network</li>
              <li class="text-sm">Access to a SaaS Talent Sourcer</li>
            </ul>
          </div>
        </div>
        @if(session()->has('employer_session') || session()->has('seeker_session'))
        <a href="{{ route('stripe', ['amount' => 'Enterprise']) }}"><button class="btn-white border-black py-2 px-4 w-full">Get Started</button></a>
        @else
        <button class="btn-white border-black py-2 px-4 w-full">Get Started</button>
        @endif
      </div>
    </div>
  </section>
  <!-- collaborate work management -->
  <section class=" flex flex-col md:flex-row justify-between items-center rounded-xl bg-[#F6F8F9] md:h-[380px] py-8">
    <div class="w-full md:w-1/2 space-y-4 px-11 order-2 md:order-1">
      <p class="uppercase hidden md:block">Collaborative work management</p>
      <h3 class="hidden md:block">Asana Enterprise</h3>
      <p class="text-lg font-normal text-bodyText">For organizations that need centralized visibility, control, and support. Get Asana's powerful, intuitive work management platform with advanced admin features and security at scale.</p>
      <div class="flex justify-start items-center gap-4">
        <button class="bg-button rounded-xl text-white py-2 px-4">Get Statted</button>
        <button class="btn-white border-button py-2 px-4">Learn More</button>
      </div>
    </div>
    <div class="w-max order-1 md:order-2">
      <p class="md:hidden uppercase text-center">Collaborative work management</p>
      <h3 class="md:hidden text-center">Asana Enterprise</h3>
      <img src="/src/img/pricing_bg.png" alt="" class="w-[370px]">
    </div>
  </section>
  <div class="bg-[#F6F8F9] flex justify-between items-center p-4 rounded-lg">
    <h4>Compare all features</h4>
    <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 chevron-down text-bodyText">
      <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
    </svg>
  </div>
  <!-- company logos -->
  <section class="pt-20 pb-44 space-y-20">
    <h4 class="text-center font-normal">Loved by 100,000+ organizations across the globe</h4>
    <div class="space-y-8">
      <div class="flex justify-between items-center shrink md:shrink-0">
        <img src="/src/img/pricing_logo1.png" alt="" srcset="" class="w-24 md:w-40">
        <img src="/src/img/pricing_logo2.png" alt="" srcset="" class="w-24 md:w-40">
        <img src="/src/img/pricing_logo3.png" alt="" srcset="" class="w-24 md:w-40">
        <img src="/src/img/pricing_logo4.png" alt="" srcset="" class="hidden md:block">
      </div>
      <div class="flex justify-between items-center">
        <img src="/src/img/pricing_logo5.png" alt="" srcset="" class="w-24 md:w-40">
        <img src="/src/img/pricing_logo6.png" alt="" srcset="" class="w-24 md:w-40">
        <img src="/src/img/pricing_logo7.png" alt="" srcset="" class="w-24 md:w-40">
        <img src="/src/img/pricing_logo8.png" alt="" srcset="" class="hidden md:block">
      </div>
    </div>
  </section>
  <!-- offer -->
  <section class=" flex flex-col md:flex-row justify-between items-center md:py-20 space-y-20 md:space-y-0">
    <div class="relative">
      <div class="w-40 h-40 md:absolute rounded-full bg-[#87C9CE] left-0 bottom-0"></div>
    </div>
    <div class="w-full md:w-2/3 lg:1/2 space-y-6 px-11">
      <h3>50% off for nonprofits</h3>
      <p class="text-lg font-normal text-bodyText">Your impact is important. Asana is excited to support nonprofit organizations with specialized plan pricing. Keep work simple, keep making an impact.</p>
      <button class="bg-black  text-white py-2 px-4">Get Started</button>
    </div>
  </section>
  <!-- accordion -->
  <section class="py-20">
    <h3 class="text-black p-4 md:pl-16">Frequently asked questions</h3>
    <div class="accordion border-y border-bodyText border-opacity-10 py-7 text-sm text-left">
      <div class="accordion-item">
        <button class="accordion-title">How does Asana's pricing work? <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 transform chevron-down text-bodyText downAC">
            <path stroke-linecap="round" stroke-linejoin="round"   />
          </svg>
          <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 chevron chevron-up text-bodyText upAC">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
          </svg>
        </button>
        <div class="accordion-content ">
          <p>The free version of Asana is available for teams of up to 15 people. Asana Premium costs $10.99 per user per month when billed annually and $13.49 per user per month when billed monthly. The price of Asana Business is $24.99 per user per month when billed annually and $30.49 when billed monthly.</p>
        </div>
      </div>
      <div class="accordion-item">
        <button class="accordion-title">Does Asana offer a discount for nonprofits? <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 transform chevron-down text-bodyText downAC">
            <path stroke-linecap="round" stroke-linejoin="round"   />
          </svg>
          <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 chevron chevron-up text-bodyText upAC">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
          </svg>
        </button>
        <div class="accordion-content">
          <p>The free version of Asana is available for teams of up to 15 people. Asana Premium costs $10.99 per user per month when billed annually and $13.49 per user per month when billed monthly. The price of Asana Business is $24.99 per user per month when billed annually and $30.49 when billed monthly.</p>
        </div>
      </div>
      <div class="accordion-item">
        <button class="accordion-title">What forms of payment do you accept? <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 transform chevron-down text-bodyText downAC">
            <path stroke-linecap="round" stroke-linejoin="round"   />
          </svg>
          <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 chevron chevron-up text-bodyText upAC">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
          </svg>
        </button>
        <div class="accordion-content">
          <p>The free version of Asana is available for teams of up to 15 people. Asana Premium costs $10.99 per user per month when billed annually and $13.49 per user per month when billed monthly. The price of Asana Business is $24.99 per user per month when billed annually and $30.49 when billed monthly.</p>
        </div>
      </div>
      <div class="accordion-item">
        <button class="accordion-title text-left">We need to change the number of people in our team. How will that work? <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 transform chevron-down text-bodyText downAC">
            <path stroke-linecap="round" stroke-linejoin="round"   />
          </svg>
          <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 chevron chevron-up text-bodyText upAC">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
          </svg>
        </button>
        <div class="accordion-content">
          <p>Accordion content 3</p>
        </div>
      </div>
      <div class="accordion-item">
        <button class="accordion-title">How secure is Asana? <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 transform chevron-down text-bodyText downAC">
            <path stroke-linecap="round" stroke-linejoin="round"   />
          </svg>
          <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 chevron chevron-up text-bodyText upAC">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
          </svg>
        </button>
        <div class="accordion-content">
          <p>Accordion content 3</p>
        </div>
      </div>
      <div class="accordion-item">
        <button class="accordion-title">Should I upgrade my organization or my team? <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 transform chevron-down text-bodyText downAC">
            <path stroke-linecap="round" stroke-linejoin="round"   />
          </svg>
          <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 chevron chevron-up text-bodyText upAC">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
          </svg>
        </button>
        <div class="accordion-content">
          <p>Accordion content 3</p>
        </div>
      </div>
      <div class="accordion-item">
        <button class="accordion-title">Will I be charged sales tax? <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 transform chevron-down text-bodyText downAC">
            <path stroke-linecap="round" stroke-linejoin="round"   />
          </svg>
          <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 chevron chevron-up text-bodyText upAC">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
          </svg>
        </button>
        <div class="accordion-content">
          <p>Accordion content 3</p>
        </div>
      </div>
      <div class="accordion-item">
        <button class="accordion-title">Will I be charged VAT/GST? <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 transform chevron-down text-bodyText downAC">
            <path stroke-linecap="round" stroke-linejoin="round"   />
          </svg>
          <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 chevron chevron-up text-bodyText upAC">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
          </svg>
        </button>
        <div class="accordion-content">
          <p>Accordion content 3</p>
        </div>
      </div>
      <div class="accordion-item">
        <button class="accordion-title">Is there an on-premises version of Asana? <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 transform chevron-down text-bodyText downAC">
            <path stroke-linecap="round" stroke-linejoin="round"   />
          </svg>
          <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 chevron chevron-up text-bodyText upAC">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
          </svg>
        </button>
        <div class="accordion-content">
          <p>Accordion content 3</p>
        </div>
      </div>
      <div class="accordion-item">
        <button class="accordion-title">How do I cancel my Asana subscription or trial? <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 transform chevron-down text-bodyText downAC">
            <path stroke-linecap="round" stroke-linejoin="round"   />
          </svg>
          <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 chevron chevron-up text-bodyText upAC">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
          </svg>
        </button>
        <div class="accordion-content">
          <p>Accordion content 3</p>
        </div>
      </div>
      <div class="accordion-item">
        <button class="accordion-title">What is your refund policy? <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 transform chevron-down text-bodyText downAC">
            <path stroke-linecap="round" stroke-linejoin="round"   />
          </svg>
          <svg   fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 chevron chevron-up text-bodyText upAC">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
          </svg>
        </button>
        <div class="accordion-content">
          <p>Accordion content 3</p>
        </div>
      </div>
    </div>
  </section>
  <section></section>
</main>
@endsection