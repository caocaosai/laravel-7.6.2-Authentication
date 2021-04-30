@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{url('Employees/store')}}" method="POST">
    @csrf
        <div><center><h1>ข้อมูลทั่วไปของพนักงาน</h1></center></div>
        <div class="row">
            <div class="col-md-8">
                <label for="nickname">ชื่อเล่น</label>
                <input type="nickname" name="nickname" class="form-control" placeholder="ชื่อเล่น" required autocomplete="off">
            </div>
            <div class="col-md-4">
                <label for="age">อายุ</label>
                <input type="age" name="age" class="form-control" placeholder="อายุ" required autocomplete="off">
            </div>
            <div class="col-md-12">
                <label for="province">จังหวัด</label>
                <input type="province" name="province" class="form-control" placeholder="จังหวัด" required autocomplete="off">
            </div>
        </div>
        <div class="row"> 
            <div class="col-md-12">
                <label for="birthday">วันเกิด</label>
                <input type="birthday" name="birthday" class="form-control" placeholder="วันเกิด" required autocomplete="off">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-success">ส่ง</button>
                </div>
            </div>    
            <div class="col-md-6">
                <div class="d-grid gap-2">
                    <a href="{{ url('/home') }}" class="btn btn-primary">ย้อนกลับ</a>
                </div>
            </div>
        </div>  
    </form> 
</div>
@endsection
