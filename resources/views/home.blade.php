@extends('layouts.app')

@section('content')
<div class="container" id="keep">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- You are logged in! -->
                    <Dash></Dash>
                </div>
            </div>

            <!-- start -->
            <div class="container">
                <div class="row justify-content-center">
                    
                        <div class="card">
                             <div class="card-header">Live View:</div>

                            <div class="card-body">
                        <App></App> </div>
            </div>
                </div>
                        </div>


        </div>
    </div>
</div>

@endsection

<style>
#keep{
    position: absolute;

    z-index:10;
}
</style>

