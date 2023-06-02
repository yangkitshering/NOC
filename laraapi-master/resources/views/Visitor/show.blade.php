{{-- <x-app-layout> --}}
    @extends('Visitor.layout')
    @section('content')
        <style>
            .card {
                background-color: #f8fafc;
                border-radius: 10px;
                box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
                max-width: 800px;
                margin: 0 auto;
            }
            .card-header {
                background-color: #319d38;
                border-bottom: none;
                color: #fff;
                font-size: 24px;
                font-weight: bold;
                padding: 20px;
                text-align: center;
            }
            .card-body {
                padding: 20px;
            }
            table {
                width: 100%;
                border-collapse: collapse;
            }
            th, td {
                padding: 12px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }
            th {
                
                font-weight: bold;
            }
            .status-pending {
                color: orange;
                font-weight: bold;
            }
            .status-approved {
                color: green;
                font-weight: bold;
            }
        </style>

        <div></div>
        <br>
        <br>
        <div class="card">
            <div class="card-header">Details</div>
            <div class="card-body">
                <table>
                    <tr>
                        <th>Name</th>
                        <td>{{ $Visitor->name }}</td>
                    </tr>
                    <tr>
                        <th>FromEmail</th>
                        <td>{{ $Visitor->fromemail }}</td>
                    </tr>
                    <tr>
                        <th>ToEmail</th>
                        <td>{{ $Visitor->toemail }}</td>
                    </tr>
                    <tr>
                        <th>Contact</th>
                        <td>{{ $Visitor->contact }}</td>
                    </tr>
                    <tr>
                        <th>Organization</th>
                        <td>{{ $Visitor->organization }}</td>
                    </tr>

                    <tr>
                        <th>reason</th>
                        <td>{{ $Visitor->reason }}</td>
                    </tr>
               
                    <tr>
                        <th>rack</th>
                        <td>{{ $Visitor->rack }}</td>
                    </tr>
               
                    <tr>
                        <th>Status</th>
                        <td class="@if($Visitor->status == 'Pending') status-pending @elseif($Visitor->status == 'Approved') status-approved @endif">{{ $Visitor->status }}</td>
                    </tr>
                </table>
            </div>
        </div>
    @endsection
{{-- </x-app-layout> --}}
