@extends('layouts.index')
@section('title','workers')
@section('content')
<h1 class="text-center p-4">Malumotni yangilash</h1>
<div class="container">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" class="row g-3" action="{{route('workers.update',['worker'=>$worker->id])}}" >
    @method('PUT')
    @csrf
    <div class="col-md-6">
        <label for="inputEmail4" class="form-label">TO'LIQ ISMI</label>
        <input type="text" class="form-control" id="inputEmail4" name="fullName" value="{{$worker->fullName}}">
    </div>
    <div class="col-md-6">
        <label for="inputPassword4" class="form-label">TEL:</label>
        <input type="phone" class="form-control" id="inputPassword4" name="phone" value="{{$worker->phone}}">
    </div>
    <div class="col-md-6">
        <label for="inputPassword4" class="form-label">PAROL</label>
        <input type="password" class="form-control" id="inputPassword4" name="password" value="{{$worker->password}}">
    </div>
    <div class="col-md-6">
        <label for="inputPassword4" class="form-label">ISH XAQQI</label>
        <input type="text" class="form-control" id="inputPassword4" name="salary" value="{{$worker->salary}}">
    </div>
    <div class="col-md-6">
        <label for="inputState" class="form-label">KASBI</label><br>
        <select id="inputState" class="form-select" name="profession_id">
            @forelse($professions as $profession)

            <option  value="{{$profession->id}}">{{$profession->name}}</option>

                    @empty
                        <option value="0">Kasb topilmadi</option>
                    @endforelse
        </select>
    </div>
    <div class="col-md-6">
        <label for="inputState" class="form-label"> YO'NALISH</label><br>
        <select id="inputState" class="form-select" name="cours">
            @forelse($courses as $cours)

            <option  value="{{$cours->id}}">{{$cours->name}}</option>

                    @empty
                        <option value="0">Fan topilmadi</option>
                    @endforelse
        </select>
    </div>


    <div class="col-12">
        <button type="submit" class="btn btn-primary" style="margin-top: 15px;">Save</button>
    </div>
</form>
</div>
@endsection