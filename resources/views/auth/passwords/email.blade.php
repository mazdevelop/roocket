@extends('layouts.app')

@section('content')
<div class="h-full bg-gradient-to-tl from-slate-50 to-slate-100 w-full py-16 px-2">
    <div class="flex flex-col items-center justify-center">
        <div class="bg-white shadow rounded lg:w-1/3  md:w-1/2 w-full p-10 mt-16">
            <div class="card">
                <div class="text-2xl font-semibold leading-6 text-gray-800">{{ __('Reset Password') }}</div>

                <div class="mt-8">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="relative flex items-center justify-center">
                            <label for="email" class="leading-7 mr-3 text-sm text-gray-600">{{ __('E-Mail Address') }}</label>

                            <div class="">
                                <input id="email" type="email" class="class="bg-gray-200 border rounded  text-xs font-medium leading-none text-gray-800 py-3 w-full pl-3 mt-2 @error('email') border-rose-400 @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="text-xs text-red-600" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="relative flex items-center justify-center mt-8">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="ring-2 ring-blue-500/50 text-slate-700 px-4 py-2 rounded-md shadow-md shadow-slate-500 transition ease-out  delay-150 hover:shadow-none ">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
