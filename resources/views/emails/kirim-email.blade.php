@extends('auth.layouts')
@section('content')
<div class="row justify-content-center">
    <h3 class=" text-center">Kirim Email</h3>
        <div class="col-md-12 p-12">
        <div class="card-body">
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    {{ $message }}
                </div>
                @endif
 <form action="{{ route('post-email') }}" method="post">
 @csrf
    <div class="form-group">
        <label for="name">Nama</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Nama">
     </div>
    <div class="form-group my-3">
 <label for="email">Email Tujuan</label>
 <input type="email" class="form-control" name="email" id="email" placeholder="Email Tujuan">
 </div>
 <div class="form-group my-3">
 <label for="subject">Subjek</label>
 <input type="subject" class="form-control" name="subject" id="subject" placeholder="Subjek">
 </div>
 <div class="form-group my-3">
 <label for="name">Deskripsi</label>
 <textarea name="body" class="form-control" id="" cols="30" rows="10"></textarea>
 </div>
 <div class="form-group">
 <button class="btn btn-primary">Kirim Email</button>
 </div>
 </div>
</div>
@endsection