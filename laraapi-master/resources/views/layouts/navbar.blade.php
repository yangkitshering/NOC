

<!doctype html>



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Soelra Package System') }}</title> --}}
    <title>NOC System</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}
 
    <!--Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
  
    <title>NOC</title>
  
    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
      <link rel="stylesheet" href="{{url('frontend/assets/css/fontawesome.css')}}">

      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
      
  
      
  
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{url('frontend/assets/css/bootstrap.css' )}}">
  
  
    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700&display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{url('frontend/assets/css/style.css' )}}">
    <!-- responsive style -->
    <link rel="stylesheet"  href="{{url('responsive.css' )}}"> 

    {{-- <script src="sweetalert2.all.min.js"></script> --}}

    

    
</head>

<body>
    <section class="ftco-section">
        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
            <div class="container">
                 <a class="navbar-brand" href="index.html">
              <img src="{{url('frontend/assets/images/revised BT-logo.png')}}" alt="team meeting" style="width:60px;height:50px;"> 
            </a>
                <a class="navbar-brand" href="/">NOC System
                   
                    {{-- <span>System</span> --}}
                
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                    aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span> Menu
                </button>
                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav m-auto">
                   

                             <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="modal" data-target="#approveFormModal">
                                    Approval Form
                                </a>
                            </li>

                            <li class="nav-item">
                              <a href="{{url('/getList')}}" class="nav-link" >
                                  List
                              </a>
                          </li>

                          <li class="nav-item">
                            <a href="{{url('/getList')}}" class="nav-link" >
                               Approved List
                            </a>
                        </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="modal" data-target="#contact">
                                    Contact
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="modal" data-target="#rules">
                                    Rules and Regulation
                                </a>
                            </li> 
                            

                    
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END nav -->
     </section> 


     

    <!-- header section strats -->
    {{-- <header class="header_section">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="index.html">
              <img src="{{url('frontend/assets/images/revised BT-logo.png')}}" alt="team meeting" style="width:60px;height:50px;"> 
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
  
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#about"> About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#rules">Rules </a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link" href="#contact">Contact Us</a>
                </li>
              </ul>
              <div class="user_option">
                <a href="">
                  <img src=  "{{url('frontend/assets/images/user.png')}}" alt="team meeting" style="width:60px;height:50px;"> 
                  <span>
                    Login
                  </span>
                </a>
                <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                  <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                </form>
              </div>
            </div>
            <div>
              <div class="custom_menu-btn ">
                <button>
                  <span class=" s-1">
  
                  </span>
                  <span class="s-2">
  
                  </span>
                  <span class="s-3">
  
                  </span>
                </button>
              </div>
            </div>
  
          </nav>
        </div>
      </header> --}}
      <!-- end header section -->



    <!-- Logout Form -->
    <form id="logout-form" action="{{ route('logout') }}" method="POST">
        @csrf
    </form>

    <!-- Content Section -->
    <div class="py-5">
        @yield('content')
    </div>

    <!-- JavaScripts -->
    <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    
    {{-- <script src="{{ asset('js/popper.js') }}"></script> --}}
    {{-- <script src="{{ asset('js/main.js') }}"></script> --}}


   {{-- <!-- Popup Form Modal -->
<div class="modal fade" id="approveFormModal" tabindex="-1" role="dialog" aria-labelledby="approveFormModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="approveFormModalLabel">Approve Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{-- <form action="{{ route('send.email') }}" class="contact100-form validate-form" method="post"> --}}
                    {{-- @csrf
                    <span class="contact100-form-title">
                        Approval Form
                    </span>
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif

                    <div class="form-group">
                        <input class="form-control rounded" type="text" name="name" placeholder="Name">
                        @error('name')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <br>
                    <div class="form-group">
                        <input class="form-control rounded" type="email" name="email" placeholder="Email">
                    </div>
                    <br>
                    <div class="form-group">
                        <input class="form-control rounded" type="date" name="date" placeholder="Date">
                    </div>
                    <br>
                    <div class="form-group">
                        <input class="form-control rounded" type="text" name="subject" placeholder="Subject">
                        @error('subject')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
<br>
                    <div class="form-group">
                        <textarea class="form-control rounded" name="content" placeholder="Reason"></textarea>
                        @error('content')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
<br>
                    <div class="container-contact100-form-btn">
                        <button type="submit" class="btn btn-success">
                            Send
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> --}}

<!-- Modal -->
<div class="modal fade" id="approveFormModal" tabindex="-1" role="dialog" aria-labelledby="approveFormModalLabel" aria-hidden="true" >
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="approveFormModalLabel"><b>Approval Form</b></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="clearFormFields()">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <form action="{{ url('save') }}" method="post" id="approvalForm">
                  {{ csrf_field() }}
                  <div class="form-row">
                      <div class="form-group col-md-6">
                          <label for="name">Name</label>
                          <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                      </div>
                      <div class="form-group col-md-6">
                          <label for="contact">Contact</label>
                          <input type="tel" class="form-control" id="contact" name="contact" placeholder="Enter your contact no." required>
                      </div>
                      <div class="form-group col-md-12">
                          <label for="email">From Email</label>
                          <input type="email" class="form-control" id="email" name="fromemail" placeholder="Enter your email" required>
                      </div>
                      <div class="form-group col-md-12">
                          <label for="email">To Email</label>
                          <input type="email" class="form-control" id="email" name="toemail" placeholder="Enter your email" required>
                      </div>
                      <div class="form-group col-md-7">
                          <label for="organization">Organization</label>
                          <input type="text" class="form-control" id="organization" name="organization" placeholder="Enter your organization" required>
                      </div>
                      <div class="form-group col-md-5">
                          <label for="rack">Rack No</label>
                          <select class="form-control" id="rack" name="rack" required>
                              <option value="" disabled selected>Select a rack no.</option>
                              <option value="1">Rack 1</option>
                              <option value="2">Rack 2</option>
                              <option value="3">Rack 3</option>
                              <!-- Add more options as needed -->
                          </select>
                      </div>
                      <div class="form-group col-md-12">
                          <label for="reason">Reason</label>
                          <input type="text" class="form-control" id="reason" name="reason" placeholder="Enter your reason" required>
                      </div>
                      <button type="submit" class="btn btn-success" id="submitBtn">Submit</button>
                  </div>
              </form>
          </div>
      </div>
  </div>
</div>

<script>
  function clearFormFields() {
      document.getElementById("approvalForm").reset();
  }
</script>

      </div>
    </div>
  </div>
</div>



  
           



  
  

  <!-- JavaScript to show the popup message -->
  {{-- <script>
    @if(session('success'))
      $(document).ready(function() {
        $('#successModal').modal('show');
      });
    @endif
  </script> --}}
  
  <!-- Success Modal -->
  {{-- <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="successModalLabel">Success</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Your form has been successfully sent.
        </div>
      </div>
    </div>
  </div>  --}}
  



  <script src="{{url('frontend/assets/js/main.js')}}"></script>

</body>

</html>