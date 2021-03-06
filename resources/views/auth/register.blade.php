@extends('layouts.app')

@section('title', __('register.register'))

@section('content')

    <!-- Alerts - OPEN -->
    @include('parts.alerts')
    <!-- Alerts - CLOSE -->

    <!-- Content - OPEN -->
    <div class="container mb-5 mt-3 my-md-3">
        <div class="row justify-content-center margin-bottom-lg">
            <div class="col-md-6">

                <!-- Card - OPEN -->
                <div class="card shadow margin-bottom-lg">

                    <!-- Card header - OPEN -->
                    <div class="card-header">
                        {{ __('register.register') }}
                    </div>
                    <!-- Card header - CLOSE -->

                    <!-- Card body - OPEN -->
                    <div class="card-body">

                        <!-- Form register - OPEN -->
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <!-- Name - OPEN -->
                            <div class="form-group">

                                <!-- Name label - OPEN -->
                                <label for="name" class="col-form-label">
                                    {{ __('register.name') }}
                                </label>
                                <!-- Name label - CLOSE -->

                                <!-- Name input - OPEN -->
                                <input id="name" type="text" name="name" value="{{ old('name') }}"
                                class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                required autofocus>
                                <!-- Name input - CLOSE -->

                                <!-- Show errors input - OPEN -->
                                @if( $errors->has('name') )
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                                <!-- Show errors input - CLOSE -->

                            </div>
                            <!-- Name - CLOSE -->

                            <!-- Email - OPEN -->
                            <div class="form-group">

                                <!-- Email label - OPEN -->
                                <label for="email" class="col-form-label">
                                    {{ __('login.email') }}
                                </label>
                                <!-- Email label - CLOSE -->

                                <!-- Email input - OPEN -->
                                <input id="email" type="email" name="email" value="{{ old('email') }}"
                                class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                required autofocus>
                                <!-- Email input - CLOSE -->

                                <!-- Show errors input - OPEN -->
                                @if( $errors->has('email') )
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                <!-- Show errors input - CLOSE -->

                            </div>
                            <!-- Email - CLOSE -->

                            <!-- ID - OPEN-->
                            <div class="form-group">

                                <!-- ID label - OPEN -->
                                <label for="dni" class="col-form-label">
                                    {{ __('register.id') }}
                                </label>
                                <!-- ID label - CLOSE -->

                                <!-- ID input - OPEN -->
                                <input id="dni" type="text" name="dni" value="{{ old('dni') }}"
                                class="form-control{{ $errors->has('dni') ? ' is-invalid' : '' }}"
                                required autofocus>
                                <!-- ID input - CLOSE -->

                                <!-- Show errors input - OPEN -->
                                @if( $errors->has('dni') )
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('dni') }}</strong>
                                    </span>
                                @endif
                                <!-- Show errors input - CLOSE -->

                            </div>
                            <!-- ID - CLOSE -->

                            <!-- Profile - OPEN -->
                            <div class="form-group">

                                <!-- Profile label - OPEN -->
                                <label for="profile" class="col-form-label">
                                    {{ __('register.profile') }}
                                </label>
                                <!-- Profile label - CLOSE -->

                                <!-- Profile Input - OPEN -->
                                <select id="profile" class="form-control" name="profile" required>
                                    <option value="">
                                        {{ __('register.chose_profile') }}
                                    </option>
                                    <option value="firefighter" @if (old('profile') == "firefighter") {{ 'selected' }} @endif>
                                        {{ __('register.firefighter') }}
                                    </option>
                                    <option value="operator" @if (old('profile') == "operator") {{ 'selected' }} @endif>
                                        {{ __('register.control_room_operator') }}
                                    </option>
                                    <option value="commander" @if (old('commander') == "commander") {{ 'selected' }} @endif>
                                        {{ __('register.commander') }}
                                    </option>
                                    <option value="guest" @if (old('guest') == "guest") {{ 'selected' }} @endif>
                                        {{ __('register.guest') }}
                                    </option>
                                </select>
                                <!-- Profile Input - CLOSE -->

                                <!-- Show errors input - OPEN -->
                                @if( $errors->has('profile') )
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('profile') }}</strong>
                                    </span>
                                @endif
                                <!-- Show errors input - CLOSE -->

                            </div>
                            <!-- Profile - CLOSE -->

                            <!-- Password - OPEN -->
                            <div class="form-group">

                                <!-- Password label - OPEN -->
                                <label for="password" class="col-form-label">
                                    {{ __('login.password') }}
                                </label>
                                <!-- Password label - CLOSE -->

                                <!-- Password input - OPEN -->
                                <input id="password" type="password" name="password" value="{{ old('password') }}"
                                class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required>
                                <!-- Password - CLOSE -->

                                <!-- Show errors input - OPEN -->
                                @if( $errors->has('password') )
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                <!-- Show errors input - CLOSE -->

                            </div>
                            <!-- Password Input - CLOSE -->

                            <!-- Confirm password - OPEN -->
                            <div class="form-group">

                                <!-- Confirm password label - OPEN -->
                                <label for="password-confirm" class="col-form-label">
                                    {{ __('register.conf_pass') }}
                                </label>
                                <!-- Confirm password label - CLOSE -->

                                <!-- Confirm password input - OPEN -->
                                <input id="password-confirm" type="password" class="form-control"
                                name="password_confirmation" required>
                                <!-- Confirm password input - CLOSE -->

                                <!-- Show errors input - OPEN -->
                                @if( $errors->has('password-confirm') )
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password-confirm') }}</strong>
                                    </span>
                                @endif
                                <!-- Show errors input - CLOSE -->

                            </div>
                            <!-- Confirm password - CLOSE -->

                            <!-- Register button - OPEN -->
                            <div class="form-group margin-top">
                                <!-- Submit button - OPEN -->
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('register.register') }}
                                </button>
                                <!-- Submit button - CLOSE -->
                            </div>
                            <!-- Register button - CLOSE -->

                        </form>
                        <!-- Form register - CLOSE -->

                    </div>
                    <!-- Card body - CLOSE -->

                </div>
                <!-- Card - CLOSE -->

            </div>
        </div>
    </div>
    <!-- Content - CLOSE -->

@endsection
