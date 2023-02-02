@extends('layouts.app-dashboard')

@section('content')
    <div id="layoutSidenav">
        @include('layouts.sidemenu-dashboard')
        <div id="layoutSidenav_content" style="background-color: #edf2f4">
            <main style="background-color: #edf2f4">
                @if ($message = Session::get('status'))
                    <div class="alert alert-success">{{ $message }}</div>                    
                @endif
                <div class="card" style="background-color: #edf2f4">
                    <div class="card-header"><b>UPDATE USER</b></div>
                    <div class="card-body">
                        <form  method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                            @csrf
                            <x-slot name="header">
                                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                                    {{ __('Profile') }}
                                </h2>
                            </x-slot>
                        
                            <div class="py-12">
                                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                                    <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                                        <div class="max-w-xl">
                                            @include('profile.partials.update-profile-information-form')
                                        </div>
                                    </div>
                        
                                    <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                                        <div class="max-w-xl">
                                            @include('profile.partials.update-password-form')
                                        </div>
                                    </div>
                        
                                    <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                    @if ($errors->any())
                    <label for="" class="text-danger"><b>MESSAGE: </b></label>
                    <div class="container">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>
            </main>
        </div>
    </div>
@endsections