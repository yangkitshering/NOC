{{-- <x-app-layout> --}}
    @extends('Visitor.layout')
    {{-- @section('css')
        <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    @endsection --}}

    @section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-15">
                <div class="card">
                    <div class="card-header">
                        <h4>Admin Dashboard</h4>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/Visitor/create') }}" class="btn btn-success btn-sm" title="Add New Visitor">
                            <i class="fa fa-plus"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table" id="Visitor">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>FromEmail</th>
                                        <th>ToEmail</th>
                                        <th>Contact</th>
                                        <th>Organization</th>
                                        <th>Rack</th>
                                        <th>Reason</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    @foreach($Visitor as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->fromemail }}</td>
                                        <td>{{ $item->toemail }}</td>
                                        <td>{{ $item->contact }}</td>
                                        <td>{{ $item->organization }}</td>
                                        <td>{{ $item->rack }}</td>
                                        <td>{{ $item->reason }}</td>
                                        <td>{{$item->status}}</td>
                                        {{-- <td>
                                            @if ($item->status == 'approval')
                                            Approval
                                            @elseif ($item->status == 'pending')
                                            Pending
                                            @endif
                                        </td> --}}
                                        <td>
                                            <a href="{{ url('/Visitor/' . $item->id) }}" title="View Visitor"><button class="btn btn-info btn-sm">&#x1F441; View</button></a>
                                            <form method="POST" action="{{ url('/Visitor/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                @method('PUT')
                                                @csrf
                                                <button type="submit" name="status" value="accept" class="btn btn-success btn-sm">Accept</button>
                                            </form>
                                            <a href="{{ url('/Visitor/' . $item->id) }}" title="Reject Visitor">
                                                <button class="btn btn-danger btn-sm">Reject</button>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // $(document).ready(function(){
            $('#Visitor').DataTable({

            });
        // })
    </script>
    @endsection

    @push('scripts')
    {{-- <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script> --}}
    {{-- <script src="{{url('/js/jquery.min.js')}}"></script>  --}}
    
    {{-- <script>
        // $(document).ready(function(){
            $('#Visitor').DataTable({

            });
        // })
    </script> --}}
    @endpush
    @stack('scripts')
{{-- </x-app-layout> --}}
