@extends('dashboard')
@section('content')

                <div class="card">
                    <div class="card-header">
                        <h2>Student Registration</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/students/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                            <i class="fa fa-plus" aria-hidden="true"></i>  Information
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Fname</th>
                                        <th>Lname</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Department</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($students as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->Fname }}</td>
                                        <td>{{ $item->Lname }}</td>
                                        <td>{{ $item->User }}</td>
                                        <td>{{ $item->Email }}</td>
                                        <td>{{ $item->Department }}</td>
                                        <td>{{ $item->Year }}</td>
                                        <td>
                                            <a href="{{ url('/students/' . $item->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/students/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <!--<button type="submit" class="btn btn-success btn-sm" title="Make Payment" >
                                              <a href="{{url('/students/'.$item->id.'/payment')}}"  <i class="fa fa-credit-card" aria-hidden="true"></i> Payment</a>
                                            </button>-->
                                           <form method="POST" action="{{ route('paypal') }}" accept-charset="UTF-8" style="display:inline">
                                                @csrf
                                                <input type="hidden" name="amount" value="{{ $item->amount }}">
                                                <input type="hidden" name="currency" value="USD">
                                                <input type="hidden" name="product_name" value="Student Registration Payment">
                                              <!--  <button type="submit" class="btn btn-success btn-sm" title="Make Payment" >--><form action="{{route('paypal')}}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="price" value="100">
                                                    <input type="hidden" name="product_name" value="Laptop">
                                                    <input type="hidden" name="quantity" value="1">
                                                    <button type="submit" class="btn btn-success btn-sm" title="Make Payment">
                                                        <i class="fa fa-credit-card" aria-hidden="true"></i> Payment
                                                    </button>

                                            </form>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

@endsection
