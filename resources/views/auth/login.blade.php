@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <section class="container">
            <div class="container-page">
                <h3 class="dark-grey">Login</h3>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="row">
                        <div class="form-group col-12 col-lg-6">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" id="" value="">
                        </div>

                        <div class="form-group col-12 col-lg-6">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" id="" value="">
                        </div>


                    </div>

                    <button type="submit" class="btn btn-primary" style="background-color: #3c9dd9">Login</button>
                </form>




            </div>
        </section>
    </div>

@endsection
