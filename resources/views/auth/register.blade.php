<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Star One Education Center</title>
    <link rel="stylesheet" href="{{ asset('auth_assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        .modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 9999;
        }

        .modal-content {
            background: white;
            padding: 30px;
            margin: 15% auto;
            width: 400px;
            border-radius: 8px;
            position: relative;
            text-align: center;
        }

        .close-btn {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 24px;
            cursor: pointer;
        }

        #otp-inputs input.otp-digit {
            width: 40px;
            height: 50px;
            font-size: 24px;
            text-align: center;
        }
    </style>
</head>

<body>
    <!-- Floating particles background -->
    <div class="particles" id="particles"></div>

    <div class="ctr">
        <div class="image-section">
            <div class="floating-card">
                <div class="logo">
                    <img src="{{ asset('own_assets/logo/logo.png') }}" alt="">
                </div>
            </div>
            <h2>Unlock Your Potential</h2>
            <p>"Take smart notes that help you remember better. Track your progress and see your improvement!"</p>
            <div style="margin-top: 20px; font-size: 14px; opacity: 0.8;">
                <i class="fas fa-graduation-cap" style="margin-right: 5px;"></i>
                Star One Education Managements
            </div>
        </div>

        <div class="form-section">
            <h2 class="title">
                <img src="{{ asset('own_assets/logo/logo.png') }}" alt="" width="20%">
            </h2>
            <div class="tabs">
                <div class="tab active" onclick="switchTab('register')">Register</div>
            </div>

            <!-- Form Register -->
            <div id="register-form" class="form active">
                <h2 class="title">Start Your Bright Journey</h2>

                <!-- Error message container -->
                <div class="alert alert-danger d-none" id="register-error">
                    <i class="fas fa-exclamation-circle me-2"></i>
                    <span id="register-error-message"></span>
                    <ul id="register-error-list" class="mb-0 ps-3"></ul>
                </div>

                <!-- Success message will be inserted here dynamically -->

                <div class="input-group">
                    <label for="register-name"><i class="fas fa-user me-2"></i> Nama Lengkap</label>
                    <input type="text" id="register-name" placeholder="Nama lengkap kamu">
                </div>

                <div class="input-group">
                    <label for="register-wa"><i class="fas fa-user me-2"></i> No. Whatsapp</label>
                    <input type="text" id="register-wa" placeholder="No. Whatsapp kamu">
                </div>

                <div class="input-group">
                    <label for="register-kursus"><i class="fas fa-user me-2"></i> Pilih Kursus </label>
                    <select name="" id="register-kursus">
                        <option value="English Regular">English Regular</option>
                        <option value="Conversation Class">Conversation Class</option>
                        <option value="TOEFL Preparation">TOEFL Preparation</option>
                        <option value="IELTS Preparation">IELTS Preparation</option>
                        <option value="Legal English">Legal English</option>
                        <option value="Mandarin Class">Mandarin Class</option>
                        <option value="Microsoft Office">Microsoft Office</option>
                        <option value="Fundamental Programming">Fundamental Programming</option>
                        <option value="Web Development">Web Development</option>
                        <option value="Mobile Development">Mobile Development</option>
                        <option value="Design Grafis">Design Grafis</option>
                    </select>
                </div>

                <button class="btn btn-primary mt-3" id="register">
                    <i class="fas fa-user-plus me-2"></i> Join Now
                </button>
            </div>
        </div>
    </div>

    <script src="{{ asset('auth_assets/scripts/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
    </script>

    <script>
        $(document).ready(function() {
            function showLoginError(message) {
                $('#login-error').removeClass('d-none');
                $('#login-error-message').text(message);
            }

            function hideLoginError() {
                $('#login-error').addClass('d-none');
                $('#login-error-message').text('');
            }

            function showRegisterSuccess(message) {
                hideRegisterError();

                let $successAlert = $('#register-success');
                if ($successAlert.length === 0) {
                    $successAlert = $(`
            <div class="alert alert-success" id="register-success">
                <i class="fas fa-check-circle me-2"></i>
                <span>${message}</span>
            </div>
        `);
                    $('#register-form').prepend($successAlert);
                } else {
                    $successAlert.find('span').text(message);
                    $successAlert.removeClass('d-none');
                }

                setTimeout(() => {
                    $successAlert.addClass('d-none');
                }, 5000);
            }

            function showRegisterError(message, errors = {}) {
                $('#register-error').removeClass('d-none');
                $('#register-error-message').text(message);
                const $errorList = $('#register-error-list');
                $errorList.empty();

                $('.input-error').removeClass('input-error');
                $('.error-message').remove();

                if (Object.keys(errors).length > 0) {
                    for (const [field, messages] of Object.entries(errors)) {
                        messages.forEach(msg => {
                            $errorList.append(`<li>${msg}</li>`);
                        });

                        const $input = $(`#register-${field.replace(/_/g, '-')}`);
                        if ($input.length) {
                            $input.addClass('input-error');

                            $input.after(
                                `<div class="error-message">${messages.join(', ')}</div>`
                            );
                        }
                    }
                }
            }

            function hideRegisterError() {
                $('#register-error').addClass('d-none');
                $('#register-error-message').text('');
                $('#register-error-list').empty();
                $('.input-error').removeClass('input-error');
                $('.error-message').remove();
            }

            $('#login-submit').click(function(e) {
                e.preventDefault();
                hideLoginError();

                const email = $('#login-email').val();
                const password = $('#login-password').val();

                $.ajax({
                    url: '/login',
                    type: 'POST',
                    data: {
                        email: email,
                        password: password,
                        _token: $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        if (response.status === 'success') {
                            window.location.href = response.redirect;
                        } else {
                            showLoginError(response.message);
                        }
                    },
                    error: function(xhr) {
                        const response = xhr.responseJSON;
                        if (xhr.status === 422) {
                            let errorMessages = [];
                            $.each(response.errors, function(key, value) {
                                errorMessages = errorMessages.concat(value);
                            });
                            showLoginError(errorMessages.join('\n'));
                        } else if (xhr.status === 401) {
                            showLoginError(response.message || 'Invalid credentials');
                        } else {
                            showLoginError('An error occurred. Please try again.');
                        }
                    }
                });
            });

            $('#register-form button.btn').click(function(e) {
                $("#register").prop('disabled', true);
                $('body').css('cursor', 'wait');

                e.preventDefault();
                hideRegisterError();

                const name = $('#register-name').val();
                const wa = $('#register-wa').val();
                const kursus = $('#register-kursus').val();

                $.ajax({
                    url: '/register',
                    type: 'POST',
                    data: {
                        name: name,
                        wa: wa,
                        kursus: kursus,
                        _token: $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        $("#register").prop('disabled', false);
                        $('body').css('cursor', 'default');
                        if (response.status === 'success') {
                            showRegisterSuccess(response.message);
                            $('#register-name').val("")
                            $('#register-wa').val("")
                            $('#register-kursus').prop('selectedIndex', 0);
                        } else {
                            showRegisterError(response.message);
                        }
                    },
                    error: function(xhr) {
                        $("#register").prop('disabled', false);
                        $('body').css('cursor', 'default');
                        const response = xhr.responseJSON;
                        if (xhr.status === 422) {
                            showRegisterError(
                                'Please fix the following errors:',
                                response.errors
                            );
                        } else {
                            showRegisterError('An error occurred. Please try again.'
                            );
                        }
                    }
                });
            });

            $('input').on('input', function() {
                const formId = $(this).closest('.form').attr('id');
                if (formId === 'login-form') {
                    hideLoginError();
                } else if (formId === 'register-form') {
                    hideRegisterError();
                }
            });

            function switchTab(tabName) {
                $('.tab').removeClass('active');
                $('.form').removeClass('active');

                $(`.tab[onclick="switchTab('${tabName}')"]`).addClass('active');
                $(`#${tabName}-form`).addClass('active');

                hideLoginError();
                hideRegisterError();
            }

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });
    </script>
</body>

</html>
