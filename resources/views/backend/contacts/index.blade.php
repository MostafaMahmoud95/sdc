@extends('layouts.admin.admin')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <h4 class="m-t-0 header-title"><b>{{$table}} Table</b></h4>
                <p class="text-muted font-13">



                </p>
                @if((Session::has('Deleted')))
                    <div class="alert alert-success">{{ Session::get('Deleted') }}
                        <i class="fa fa-check"
                           aria-hidden="true"></i>
                    </div>
                @endif

                <table data-toggle="table"
                       data-search="true"
                       data-show-refresh="false"
                       data-show-toggle="false"
                       data-show-columns="true"
                       data-sort-name="id"
                       data-page-list="[5, 10, 20]"
                       data-page-size="5"
                       data-pagination="true" data-show-pagination-switch="true" class="table-bordered ">
                    <thead>
                    <tr>
                        {{-- <th data-field="id" data-sortable="true" data-formatter="invoiceFormatter">Order ID</th>--}}
                        <th data-field="department_name" data-align="center" data-sortable="true">Department Name</th>
                        <th data-field="username" data-align="center" data-sortable="true">Username</th>
                        <th data-field="email" data-align="center" data-sortable="true">Email</th>
                        <th data-field="phone" data-align="center" data-sortable="true">Phone</th>
                        <th data-field="subject" data-align="center" data-sortable="true">Subject</th>
                        <th data-field="message" data-align="center" data-sortable="true">Message</th>
                        {{--          <th data-field="date" data-sortable="true" data-formatter="dateFormatter">Order Date</th>
                                  <th data-field="amount" data-align="center" data-sortable="true" data-sorter="priceSorter">Price</th>--}}
                        <th data-field="status" data-align="center" data-sortable="true"
                            data-formatter="statusFormatter">Action
                        </th>

                    </tr>
                    </thead>


                    <tbody>
                    @foreach($contacts as $contact)
                        <tr>
                            <td>{{$contact->department->title_en}}</td>
                            <td>{{$contact->username}}</td>
                            <td>{{$contact->email}}</td>
                            <td>{{$contact->phone}}</td>
                            <td>{{str_limit($contact->subject,$limit=50,$end='...')}}</td>
                            <td>{{str_limit($contact->message,$limit=50,$end='...')}}</td>
                            <td  style="text-align: center;"><a href="{{route('contacts.show',$contact->id)}}" class="btn btn-info" role="button">View</a>
                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                        data-target="#deletecontacts_{{$contact->id}}">Delete
                                </button>
                                <div class="modal" tabindex="-1" role="dialog" id="deletecontacts_{{$contact->id}}">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <h5 class="modal-title" style="color: black"><b> Do you want to delete this contact message ? </b></h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <div class="modal-footer">
                                                {{ Form::open(['method' => 'delete','route' =>['contacts.destroy',$contact->id]])}}

                                                <button type="submit" class="btn btn-danger">Delete</button>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                {{ Form::close() }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop
