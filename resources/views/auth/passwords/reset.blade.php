@extends('layouts.app')

@section('body')

    <div class="flex justify-center items-center h-screen" style="margin-top: -4rem;">
        <div class="w-full max-w-md md:mx-auto">
            <div class="rounded shadow">
                <div class="font-medium text-lg text-brand-darker bg-brand-lighter p-3 rounded-t">
                    Reset password
                </div>
                <div class="bg-white p-3 rounded-b">
                    <form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="flex items-stretch mb-3">
                            <label for="email" class="text-right font-semibold text-grey-dark text-sm pt-2 pr-3 align-middle w-1/4">E-mail</label>
                            <div class="flex flex-col w-3/4">
                                <input id="email" type="email" class="flex-grow h-8 px-2 border rounded {{ $errors->has('email') ? 'border-red-dark' : 'border-grey-light' }}" name="email" value="{{ old('email') }}" required autofocus>
                                {!! $errors->first('email', '<span class="text-red-dark text-sm mt-2">:message</span>') !!}
                            </div>
                        </div>

                        <div class="flex items-stretch mb-4">
                            <label for="password" class="text-right font-semibold text-grey-dark text-sm pt-2 pr-3 align-middle w-1/4">Password</label>
                            <div class="flex flex-col w-3/4">
                                <input id="password" type="password" class="flex-grow h-8 px-2 rounded border {{ $errors->has('password') ? 'border-red-dark' : 'border-grey-light' }}" name="password" required>
                                {!! $errors->first('password', '<span class="text-red-dark text-sm mt-2">:message</span>') !!}
                            </div>
                        </div>

                        <div class="flex items-stretch mb-4">
                            <label for="password" class="text-right font-semibold text-grey-dark text-sm pt-2 pr-3 align-middle w-1/4">Confirm password</label>
                            <div class="flex flex-col w-3/4">
                                <input id="confirm-password" type="password" class="flex-grow h-8 px-2 rounded border {{ $errors->has('password') ? 'border-red-dark' : 'border-grey-light' }}" name="password_confirmation" required>
                                {!! $errors->first('password_confirmation', '<span class="text-red-dark text-sm mt-2">:message</span>') !!}
                            </div>
                        </div>

                        <div class="flex">
                            <div class="w-3/4 ml-auto">
                                <button type="submit" class="bg-purple hover:bg-brand-dark text-white text-sm font-semibold py-2 px-4 rounded mr-3">
                                    Reset password
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

