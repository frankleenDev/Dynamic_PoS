<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link href="{{ asset('fonts/material-icon/css/material-design-iconic-font.min.css') }}" rel="stylesheet">


  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body>

    <div class="main">

        <div class="container">
             <form method="POST" action="{{ route('register') }}" class="appointment-form" id="appointment-form">

                <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

                <h2>Register a User</h2>
                <div class="form-group-1">
                    <input type="text" name="name" id="name" placeholder="Full name" required />
                    <input type="email" name="email" id="email" placeholder="Email" required />
                    <input type="number" name="phone_number" id="phone_number" placeholder="Phone number" required />
                    <div class="select-list">
                        <select name="priviledge" required id="course_type">
                            <option slected value="default">Course Type</option>
                            <option value="society">Super Admin</option>
                            <option value="language">Admin</option>
                            <option value="language">Manager</option>
                            <option value="language">Cashier</option>
                            <option value="language">Staff</option>
                        </select>
                    </div>
                    <input type="password" name="password" id="phone_number" placeholder="Passowrd" required />
                    <input type="password" name="password_confirmation" id="phone_number" placeholder="Confirm passowrd" required />
                </div>
                <div style="display: none;" class="form-group-2">
                    <h3>How would you like to bo located ?</h3>
                    <div class="select-list">
                        <select name="confirm_type" id="confirm_type">
                            <option seleected value="">By phone</option>
                            <option value="by_email">By email</option>
                        </select>
                    </div>
                    <div class="select-list">
                        <select name="hour_appointment" id="hour_appointment">
                            <option seleected value="">Hours : 8am 10pm</option>
                            <option value="9h-11h">Hours : 9am 11pm</option>
                        </select>
                    </div>
                </div>
                <!--
                <div class="form-check">
                    <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                    <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree to the  <a href="#" class="term-service">Terms and Conditions</a></label>
                </div>
            -->
               <div class="col-md-6 offset-md-4">
                                <button type="submit" name="submit" class="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
            </form>
        </div>

    </div>

    <!-- JS -->
  <script src="{{ asset('vendor/jquery/jquery2.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/main.js') }}" type="text/javascript"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
