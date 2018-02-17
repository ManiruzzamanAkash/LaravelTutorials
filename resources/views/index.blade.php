@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <table class='table table-striped table-bordered table-hover table-condensed'>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            <form action="{{ route('send_email') }}" method="post">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="id" value="{{ $user->id }}">
                                                <input type="submit" class="btn btn-success" value="Send Email">
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>

                        @auth
                            <h2>Custom Message And Custom Style</h2>
                            <div class="well">
                                <form class="" action="{{ route('custom_mail') }}" method="post">
                                    {{ csrf_field() }}

                                    <div class="form-group">
                                        <label for="">Enter Your Order Shipping Address</label>
                                        <input type="text" class="form-control" name="shipping_address">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Enter Your Order Shipping Phone Number</label>
                                        <input type="text" class="form-control" name="phone_number">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Enter Your Order Amount</label>
                                        <input type="text" class="form-control" name="price">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-info" value="Confirm">
                                    </div>
                                </form>
                            </div>
                        @endauth


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
