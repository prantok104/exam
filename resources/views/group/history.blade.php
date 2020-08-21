@extends('layouts.app')
@section('content')
    <div class="container-fluid app-body">
        <div class="row">
            <div class="col-sm-12 group-col">
                <div class="panel panel-default" style="padding:15px"> 
                    <h3>Recent Posts Sent To Bufer</h3>
                    <hr> 
                    <div class="search-area">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="search">
                                    <input type="text" name="search" placeholder="search" class="form-control">
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="search">
                                    <input type="date" name="search" placeholder="search" class="form-control">
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="search">
                                   <select name="group" id="group" class="form-control">
                                    <option value="">All groups</option>
                                    @foreach($group as $key)
                                       <option value="{{$key->type}}">{{$key->type}}</option>
                                    @endforeach
                                   </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="table-area">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Group Name</th>
                                    <th>Group Type</th>
                                    <th>Account Name</th>
                                    <th>Post Text</th>
                                    <th>Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($buffer_posts as $key=>$value)
                                <tr>
                                    <td>{{$value->groupInfo->name}}</td>
                                    <td>{{$value->groupinfo->type}}</td>
                                    <td class="text-center"><img src="{{$value->accountInfo->avatar}}" style="width:60px; height:60x; border-radius:50%"></td>
                                    <td>{{$value->post_text}}</td>
                                    <td>{{$value->created_at}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="text-right">{{$buffer_posts->links()}}</div>
                </div>
            </div>
        </div>
    </div>
@endsection
