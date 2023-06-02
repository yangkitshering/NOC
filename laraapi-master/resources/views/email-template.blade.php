{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Approval for Entering NOC</div>
                  <div class="card-body">
                   @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                           {{ __('A fresh mail has been sent to your email address.') }}
                       </div>
                   @endif
                   {!! $content !!}
                   <br>
                   <button id="approvalButton" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin-top: 20px; cursor: pointer;">Approve</button> --}}
                   {{-- <button type="button" class="btn btn-primary" onclick="fillFormFields()">Approve</button> --}}


               {{-- </div>
               
           </div>
       </div>
   </div>
</div> --}}

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Approval for Entering NOC</div>
                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh mail has been sent to your email address.') }}
                        </div>
                    @endif
                    {!! $content !!}
                    <br>
                    {{-- <form id="approvalForm" action="{{ route('send.email') }}" method="POST"> --}}
                        <form method="POST" action="{{ route('send.approval') }}">
                        @csrf
                        <input type="hidden" id="email" name="email">
                        <button id="approvalButton" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin-top: 20px; cursor: pointer;">Approve</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('approvalButton').addEventListener('click', function() {
        // Retrieve the email address from the input field
        var emailInput = document.getElementById('email');
        var email = emailInput.value;

        // Set the email value in the hidden input field of the approval form
        emailInput.value = email;

        // Submit the approval form
        document.getElementById('approvalForm').submit();

        // Optionally, you can also send an email to the provided email address for approval
        // You can implement the email sending logic here, such as making an AJAX request to the server

        // Display a success message
        var successMessage = document.createElement('div');
        successMessage.classList.add('alert', 'alert-success');
        successMessage.textContent = 'An approval email has been sent to your email address.';
        document.querySelector('.card-body').appendChild(successMessage);
    });
</script>

