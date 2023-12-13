@extends('layouts.template')

@section('content')
<form action="{{ route('users.update', $user ['id']) }}" method="POST" class="card bg-light mt-5 p-5">
    @csrf
    @method('PATCH')
    @if ($errors->any())
    <ul class="alert alert-danger p-5">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
        
    @endif
            
        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">Nama :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" value="{{ $user['name'] }}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="email" class="col-sm-2 col-form-label">Email :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="email" name="email" value="{{ $user['email'] }}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="role" class="col-sm-2 col-form-label">Role</label>
            <div class="col-sm-10">
                <select id="role" class="form-control" name="role">
                    <option disabled hidden selected>Pilih</option>
                    <option value="admin" {{ $user['type'] == 'admin' ? 'selected' : '' }}>Admin</option>
                    <option value="cashier" {{ $user['type'] == 'cashier' ? 'selected' : '' }}>Cashier</option>
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="password" class="col-sm-2 col-form-label">Password :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="password" name="password" >
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Ubah Data</button>
    </form>

@endsection