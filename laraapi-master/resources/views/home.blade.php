
@extends('layouts.navbar')
@section('css')
<link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
@endsection
@section('content')
<div class="container">
    {{-- <div class="container d-flex justify-content-center mt-100"> --}}
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    {{-- <h2 class="">Recharge History</h2> --}}
                    {{-- <select name="packages" class="form-control">
                        <option>Select Packages to view</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select> --}}
                    

                    {{-- <table border="1" id="historyTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Emp ID</th>
                                <th>Name</th>
                                <th>Department</th>
                                <th>Section</th>
                                <th>Entry Date and Time</th>
                                <th>Exit Date and time</th>
                            </tr>
                        </thead>

                        <tbody>
                   
                             <tr>
                                <td>1</td>
                                <td>970</td>
                                <td>Sonam</td>
                                <td>Marketing</td>
                                <td>Marketing</td>
                                <td>2021-10-28</td>
                                <td>2021-10-28</td>
                              
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>970</td>
                                <td>Sonam</td>
                                <td>Marketing</td>
                                <td>Marketing</td>
                                <td>2021-10-28</td>
                                <td>2021-10-28</td>
                              
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>970</td>
                                <td>Sonam</td>
                                <td>Marketing</td>
                                <td>Marketing</td>
                                <td>2021-10-28</td>
                                <td>2021-10-28</td>
                              
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>970</td>
                                <td>Sonam</td>
                                <td>Marketing</td>
                                <td>Marketing</td>
                                <td>2021-10-28</td>
                                <td>2021-10-28</td>
                              
                            </tr>
                           
                        </tbody>

                    </table> --}}
                    <div id="example1_wrapper"></div>
                </div>
            </div>
        </div>
        {{--
    </div> --}}
</div>



  <!-- slider section -->
  <section class="slider_section ">
    {{-- <div class="play_btn">
      <a href="">
        <img src="images/play.png" alt="">
      </a>
    </div> --}}
    
    <div class="container">
      
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-md-10">
                <div class="detail-box">
                  <h1>

                    <b>
                    Welcome to 
                    </b> <br>
                    <span>
                     BT NOC
                    </span>
                  </h1>
                  
                </div>
              </div>

    
            </div>
          </div>
          
          <div class="carousel-item ">
            <div class="row">
              <div class="col-md-6">
             
              </div>
            
            </div>
          </div>
         
        </div>
    </div>
  </section>
  <!-- end slider section -->
</div>
<!-- contact section -->



<section class="contact_section layout_padding" >
    <div class="container " id="contact">
      <div class="heading_container">
        <h2 class="">
          Contact Us
        </h2>
      </div>

    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <form action="">
            <div>
              <input type="text" placeholder="Name" />
            </div>
            <div>
              <input type="email" placeholder="Email" />
            </div>
            <div>
              <input type="text" placeholder="Phone" />
            </div>
            <div>
              <input type="text" class="message-box" placeholder="Message" />
            </div>
            <div class="d-flex ">
              <button>
                SEND
              </button>
            </div>
          </form>
        </div>
        <div class="col-md-6">
          <div class="map_container">
            <div class="map-responsive">
              <iframe
                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France"
                width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%"
                allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->




<script>
    $('#historyTable').DataTable({
        "buttons": [
            { extend: 'excel', 
            text: '<i class="fas fa-file-pdf fa-1x" aria-hidden="true"> Export as excel</i>',
            title: 'Recharge history'
        }
        ]

    }).buttons().container().appendTo('#example1_wrapper');
</script>

@endsection


@push('scripts')
<script src="{{ asset('js/jquery.min.js') }}"></script>


<!-- DataTables js and css -->

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">

<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

<!-- DataTables  & Plugins alternate-->
{{--
<link rel="stylesheet" href="{{ asset('../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{ asset('../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{ asset('../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">

<script src="{{ asset('../../plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('../../plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{ asset('../../plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script> --}}

<!-- DataTables buttons for excel, pdf etc. -->
<script src="{{asset('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('../plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

@endpush

@stack('scripts')
