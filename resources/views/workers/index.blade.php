@extends('layouts.index')
@section('title','workers')
@section('content')
<h1 style="padding-top: 20px;"></h1>
<div class="row" style="margin-bottom: 10px;">
<div class="col-md-10"></div>
<div class="col-md-2">
  <a href="{{route('workers.create')}}">
<button type="button" class="btn btn-block btn-outline-danger btn-sm" style="width: 130px;padding: 5px;">
<i class="fas fa-user-plus"></i>
Ishchi qo'shish  
</button>
  </a>
</div>

</div>
<div class="row">
<div class="col-md-1"></div>
          <div class="col-md-10">
        
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Jamoa ro'yxati</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Familya/Ism</th>
                      <th>Tel:</th>
                      <th>Kasbi</th>
                      <th>Yo'nalishi</th>
                      <th style="width:40px">...</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($workers as $worker)
                    <tr>
                      <td>{{$worker->id}}</td>
                      <td>{{$worker->fullName}}</td>
                      <td>{{$worker->phone}}</td>
                      <td>{{$worker->profession_id}}</td>
                      <td>{{$worker->cours}}</td>
                      <td>
                      <a href="{{route('workers.show',['worker'=>$worker->id])}}" type="button" class="btn btn-outline-info btn-block btn-flat"><i class="far fa-address-card"></i></a>
                    </td>
                      
                    @endforeach
                

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
<div class="col-md-1"></div>
          <!-- /.col -->
        </div>
@endsection