@extends('layout.app')
@section('main_section')
    <div class="position-relative text-white" style="background-color: #324446;">
        <div>
            @include('components.navbar')
        </div>
    </div>
    <div class="position-relative d-flex align-items-center justify-content-center mt-5">
        <div
            style="z-index:0.5;position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-image: url('images/home-section-1.png'); opacity: 0.1;">
        </div>
        <style>
            .btn-primary {
                background: #F2A71B;
                color: white;
                border-radius: 15px;
                border: none;
                padding-left: 20px;
                padding-right: 20px;
            }
        </style>
        <div class="row position-relative" style="width: 90vw !important">
            <div class="col-12 col-lg-6">
                <div class="position-relative container py-5 mt-5  mx-auto">
                    <div class="step my-5" id="step1" style="display: block;">
                        <div class="speech-bubble">
                            <h3 class="step-text-1 mb-3"></h3>
                        </div>
                        <div class="form-group mb-4">
                            <label for="firstName" class="form-label">First Name:</label>
                            <input type="text" class="form-control" id="firstName" required
                                value="{{ $data->firstname ?? '' }}">
                        </div>
                        <button type="button" class="btn btn-primary" id="firstNext">Next</button>
                    </div>
                    @if (isset($data))
                        <input type="hidden" id="newsletter_id" value="{{ $data->id }}">
                    @endif
                    <div class="step my-5" id="step2">
                        <div class="speech-bubble">
                            <h3 class="step-text-2 mb-3"></h3>
                        </div>
                        <div class="form-group mb-4">
                            <label for="lastName" class="form-label">Last Name:</label>
                            <input type="text" class="form-control" id="lastName" required
                                value="{{ $data->lastname ?? '' }}">
                        </div>
                        <button type="button" class="btn btn-primary" id="secondNext">Next</button>
                    </div>
                    <div class="step my-5" id="step3">
                        <div class="speech-bubble">
                            <h3 class="step-text-3 mb-3"></h3>
                        </div>
                        <div class="form-group mb-4">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="email" required
                                value="{{ $data->email ?? '' }}">
                        </div>
                        <button type="button" class="btn btn-primary" id="thirdNext">Next</button>
                    </div>
                    <div class="step my-5" id="step4">
                        <div class="speech-bubble">
                            <h3 class="step-text-4 mb-3"></h3>
                        </div>
                        <button type="button" class="btn btn-primary" id="fourNext"
                            @disabled($data == null)>Next</button>
                    </div>
                    <div class="step my-5" id="step5">
                        <div class="speech-bubble">
                            <h3 class="step-text-5 mb-3"></h3>
                        </div>
                        <div class="form-group mb-4">
                            <label for="phonenumber" class="form-label">Phone Number:</label>
                            <input type="tel" class="form-control" id="phonenumber" name="phone_number" required>
                        </div>
                        <button type="button" class="btn btn-primary" id="fiveNext">Next</button>
                    </div>
                    <div class="step my-5" id="step6">
                        <div class="speech-bubble">
                            <h3 class="step-text-6 mb-3"></h3>
                        </div>
                        <div class="form-group mb-4">
                            <label for="email" class="form-label">Passcode</label>
                            <input type="text" class="form-control" id="passcode" required>
                        </div>
                        <button type="button" class="btn btn-primary" id="SixNext">Next</button>
                    </div>
                    <div class="step my-5" id="step7">
                        <div class="speech-bubble">
                            <h3 class="step-text-7 mb-3"></h3>
                        </div>
                        <div class="form-group mb-4">
                            <label for="email" class="form-label">Address</label>
                            <textarea name="" rows="5" class="form-control" id="address"></textarea>
                        </div>
                        <button type="button" class="btn btn-primary" id="SevenNext">Next</button>
                    </div>
                    <div class="step my-5" id="step8">
                         <div class="speech-bubble">
                            <h3 class="step-text-8 mb-3"></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <img src="{{ asset('images/section-7-image.png') }}" alt="" class="img-fluid w-100 ">
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script>
        $(document).ready(function() {

            function typeText(element, text, delay) {
                var index = 0;
                var timer = setInterval(function() {
                    element.text(element.text() + text[index++]);
                    if (index === text.length) clearInterval(timer);
                }, delay);
            }
            $('#step2').hide();
            $('#step3').hide();
            $('#step4').hide();
            $('#step5').hide();
            $('#step6').hide();
            $('#step7').hide();
            $('#step8').hide();
            typeText($('.step-text-1'), "Hi, please can we get your first name?", 100);
            $('#firstNext').click(function() {
                if ($('#firstName').val().trim() === '') {
                    alert('Please enter first name');
                } else {
                    var first = $('#firstName').val(); // Use #firstName instead of #firstname
                    $('#step1').hide();
                    $('#step2').show();
                    typeText($('.step-text-2'), ` Thanks ${first} ,what’s your last name?`, 100);
                }
            });
            $('#secondNext').click(function() {
                console.log('hi');
                if ($('#lastName').val().trim() === '') {
                    alert('Please enter last name');
                } else {
                    var first = $('#firstName').val();
                    $('#step2').hide();
                    $('#step3').show();
                    typeText($('.step-text-3'),
                        `Ok -  ${first} , thanks - we need your email ~ please type it below;`, 100);
                }
            });
            $('#thirdNext').click(function() {
                console.log('hi');
                if ($('#email').val().trim() === '') {
                    alert('Please enter email first');
                } else {
                    $('#step3').hide();
                    $('#step4').show();
                    sendEmailfunction();
                    typeText($('.step-text-4'),
                        `Ok - we’re going to send you a code, via your email - so that you can verify your email address..  ok?`,
                        100);
                }
            });

            function sendEmailfunction() {
                var firstname = $('#firstName').val();
                var lastname = $('#lastName').val();
                var email = $('#email').val();
                $.ajax({
                    type: "GET",
                    url: "{{ route('send.verification.email') }}",
                    data: {
                        firstname: firstname,
                        lastname: lastname,
                        email: email
                    },
                    success: function(response) {
                        toastr.success(response);
                    },
                    error: function(xhr, status, error) {
                        toastr.error('An error occurred while sending the verification email.');
                        console.error(xhr.responseText);
                    }
                });
            }
            var currentUrl = window.location.href;
            if (currentUrl.includes('/news-letter/')) {
                $('#step4').show();
                $('#step1').hide();
                $('#step2').hide();
                $('#step3').hide();
                $('#step5').hide();
                $('#step6').hide();
                $('#step7').hide();
                $('#step8').hide();
                typeText($('.step-text-4'),
                    `Thank you for verifying your email. Let's proceed with the next steps.`, 100);
            }
            $('#fourNext').click(function() {
                $('#step4').hide();
                $('#step5').show();
                typeText($('.step-text-5'),
                    `Please Enter your Phone Number..`, 100);

            });
            $('#fiveNext').click(function() {
                if ($('#phonenumber').val().trim() === '') {
                    alert('Please enter phone number');
                } else {
                    var phonenumber = $('#phonenumber').val();
                    var newsletter_id = $('#newsletter_id').val();
                    $.ajax({
                        type: "GET",
                        url: "{{ route('send.passcode') }}",
                        data: {
                            phonenumber: phonenumber,
                            id: newsletter_id
                        },
                        success: function(response) {
                            console.log(response);
                            if (response.status == true) {
                                toastr.success('Code Send successfully on your phone number!');
                                $('#step5').hide();
                                $('#step6').show();
                                typeText($('.step-text-6'),
                                    `Great - thanks.. and finally, can we get your address ~ ? This is so that we can
                            send
                            you
                            exclusive offers and invites to events.`, 100);
                            }
                        },
                        error: function(xhr, status, error) {
                            toastr.error('Enter Valid Number');
                            console.error(xhr.responseText);
                        }
                    });
                }
            });
            $('#step6').click(function() {
                if ($('#phonenumber').val().trim() === '') {
                    alert('Please enter phone number');
                } else {
                    var newsletter_id = $('#newsletter_id').val();
                    // var passcode = ;
                    $('#SixNext').click(function() {
                        if ($('#passcode').val().trim().length !== 6) {
                            alert("Please enter a 6-digit passcode");
                        } else {
                            $.ajax({
                                type: "GET",
                                url: "{{ route('check.passcode') }}",
                                data: {
                                    passcode: $('#passcode').val(),
                                    id: newsletter_id
                                },
                                success: function(response) {
                                    if (response.status == true) {
                                        $('#step6').hide();
                                        $('#step7').show();
                                        typeText($('.step-text-7'),
                                            `Ok great - which number do you live at?`,
                                            100);
                                            
                                    }
                                },
                                error: function(xhr, status, error) {
                                    toastr.error('Enter Valid Passcode');
                                    console.error(xhr.responseText);
                                }
                            });
                        }
                    })
                }
            });

            $('#SevenNext').click(function(e) {
                if ($('#address').val().trim() === '') {
                    alert('please Enter a address');
                } else {
                    $.ajax({
                        type: "GET",
                        url: "{{ route('send.address') }}",
                        data: {
                            id: $('#newsletter_id').val(),
                            phonenumber: $('#phonenumber').val(),
                            address: $('#address').val()
                        },
                        success: function(response) {
                            toastr.success(
                                'Subscription successful! Our team will reach out soon. Thank you!'
                            );
                            $('#step7').hide();
                            $('#step8').show();
                            typeText($('.step-text-8'),
                                `Ok  - we have confirmed your details - thank you so much. We will be in
                            touch
                            with
                            any
                            special offers and invites.👍`, 100);
                        },
                        error: function(xhr, status, error) {
                            toastr.error('Something wents wrong!');
                            console.error(xhr.responseText);
                        }
                    });
                }

            });
            $('#firstName').on('input', function() {
                $('.setusername').text($(this).val());
            });


        });
    </script>
@endsection
