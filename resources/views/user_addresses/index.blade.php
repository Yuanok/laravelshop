@extends('layouts.app')
@section('title','收货地址列表')

@section('content')
    <row>
        <div class="col-md-10 offset-md-1">
        <div class="card panel-default">
            <div class="card-header">收货地址</div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                        <th>收货人</th>
                        <th>地址</th>
                        <th>邮编</th>
                        <th>电话</th>
                        <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($addresses as $address)
                        <tr>
                        <th>{{$address->contact_name}}</th>
                        <th>{{$address->full_address}}</th>
                        <th>{{$address->zip}}</th>
                        <th>{{$address->contact_phone}}</th>
                        <th>
                        <button class="btn btn-primary">修改</button>
                        <div class="btn btn-danger">删除</div>
                        </th>
                        </tr>
                        @endforeach()
                    </tbody>
                </table>
            </div>
        </div>    
        </div>
    </row>
@stop