@extends('layouts.index')
@section('title','workers')
@section('content')
<div class="container">
    <div style="padding-top: 60px;"></div>
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
      <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
               
                </div>

                <h3 class="profile-username text-center">{{$worker->fullName}}</h3>

                <p class="text-muted text-center">{{$worker->profession_id}}</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>TEL:</b> <a class="float-right">{{$worker->phone}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>PAROL</b> <a class="float-right">{{$worker->password}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>YO'NALISHI</b> <a class="float-right">{{$worker->cours}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>ISH XAQQI</b> <a class="float-right">{{$worker->salary}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>MALUMOT O'ZGARTIRILGAN VAQTI</b> <a class="float-right">{{$worker->created_at}}</a>
                  </li>
                  
                  <li class="list-group-item">
                    <b>MALUMOT SAQLANGAN VAQTI</b> <a class="float-right">{{$worker->updated_at}}</a>
                  </li>
                </ul>
                <div class="row">
                <div class="col-md-4">
                <center>
                <a class="btn btn-app bg-success" href="{{route('workers.index')}}">
                <i class="fas fa-backward"></i>Ortga qaytish
                  </a>
                  </center>
                </div>
                <div class="col-md-4">
                    <center>
                <a class="btn btn-app bg-warning" href="{{route('workers.edit',['worker'=>$worker->id])}}">
                    <i class="fas fa-pen"></i> Malumotni yangilash
                  </a>
                    </center>
                </div>
                <div class="col-md-4">
                <center>
                  <a class="btn btn-app bg-danger">
                    <i class="fas fa-trash-alt"></i>Malumotni o'chirish
                  </a>
                  </center>
                </div>
            
                </div>
              </div>
              <!-- /.card-body -->
            </div>
</div>
<div class="col-md-2"></div>

    </div>
</div>
@endsection