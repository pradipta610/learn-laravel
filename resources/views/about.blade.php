@extends('layout.main')
@section('container')
    <h1>Welcome To My Website</h1>
    <h3>Halaman About</h3>
   <p><?= $name ?></p>
   <p><?= $email ?></p>
   <img src="img/<?= $img ?>" alt="<?= $img ?>" width="100px" height="100px">
@endsection

