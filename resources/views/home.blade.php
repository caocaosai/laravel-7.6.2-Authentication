@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{url('People/store')}}" method="POST">
    @csrf
        <div><center><h1>ข้อมูลทั่วไปของพนักงาน</h1></center></div>
        <div class="row">
            <div class="col-md-4">
                <label for="firstname">ชือ</label>
                <input type="firstname" name="firstname" class="form-control" placeholder="ชื่อ" required autocomplete="off">
            </div>
            <div class="col-md-4">
                <label for="lastname">นามสกุล</label>
                <input type="lastname" name="lastname" class="form-control" placeholder="นามสกุล" required autocomplete="off">
            </div>
            <div class="col-md-4">
                <label for="email">อีเมลล์</label>
                <input type="email" name="email" class="form-control" placeholder="อีเมลล์" required autocomplete="off">
            </div>
        </div>
        <div class="row"> 
            <div class="col-md-8">
                <label for="address">ที่อยู่</label>
                <input type="address" name="address" class="form-control" placeholder="ที่อยู่" required autocomplete="off">
            </div>
            <div class="col-md-4">
                <label for="tel">เบอร์ติดต่อ</label>
                <input type="number" name="tel" class="form-control" min="0" placeholder="เบอร์ติดต่อ" required autocomplete="off">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
            <div class="col-md-6">
            <h5>สถาณภาพ</h5>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                     <label class="form-check-label" for="flexRadioDefault1">
                        โสด
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        แต่งงานแล้ว
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-success">ส่ง</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="d-grid gap-2">
                    <a href="{{ url('/Employees') }}" class="btn btn-primary">ถัดไป</a>
                </div>
            </div>
        </div>  
    </form> 
</div>
@endsection
