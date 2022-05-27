   <header class="header">
       <div class="main-header main-header1">
           <div class="container">
               <div class="row align-items-center">
                   <div class="col-xl-3 col-lg-2 col-md-4 col-sm-5 col-7">
                       <div class="logo" data-animate="fadeInUp" data-delay=".65"> <a href="/"> <img
                                   class='default-logo' src="{{ asset('img/tsl_logo.png') }}" width="120" data-rjs="2"
                                   alt="crypdrone">
                               <img class="sticky-logo" src="{{ asset('img/tsl_logo.png') }}" width="120"
                                   data-rjs="2" alt="crypdrone"> </a> </div>
                   </div>
                   <div class="col-xl-9 col-lg-10 col-md-7 col-sm-7 col-5 menu-button">
                       <div class="menu--inner-area clear-fix">
                           <div class="menu-wraper">
                               <nav data-animate="fadeInUp" data-delay=".80">
                                   <div class="header-menu dosis">
                                       <ul>
                                           {{-- <li class="active"><a href="/">Home</a>

                                                </li> --}}


                                           <li> <a href="/">About us </i></a>

                                           </li>
                                           <li> <a href="#">Programs <i class="fa fa-angle-down"
                                                       aria-hidden="true"></i></a>
                                               <ul>
                                                   <li><a href="">Synthetic funded accounts
                                                       </a></li>
                                                   <li><a href="">Forex funded accounts
                                                       </a></li>
                                               </ul>

                                           </li>
                                           <li><a href="/">FAQ</a></li>
                                           <li><a href="{{ url('contact') }}">Contact</a></li>
                                           <li>
                                               <a href="javascript:void(0)" class="mb-1">
                                                   <div id="google_translate_element"></div>
                                               </a>
                                           </li>
                                       </ul>
                                   </div>
                               </nav>
                           </div>
                       </div>

                       <div class="signup--out-btn text-right hide-o" data-animate="fadeInUp" data-delay="1">
                           @auth
                               <a href="{{ route('user.dashboard') }}" class="waves-effect"><i
                                       class="fa fa-sign-in d-none" aria-hidden="true"></i><span
                                       class="d-block">Dashboard</span>
                               </a>
                           @endauth
                           @guest
                               <a href="{{ route('login') }}" class="waves-effect mr-4 s-in"><i
                                       class="fa fa-sign-in d-none" aria-hidden="true"></i><span class="d-block">Sign
                                       In</span>
                               </a>
                               <a href="{{ route('register') }}" class="waves-effect"><i class="fa fa-sign-in d-none"
                                       aria-hidden="true"></i><span class="d-block">Sign Up</span>
                               </a>
                           @endguest
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </header>
