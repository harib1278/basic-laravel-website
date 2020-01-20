@extends('layouts.app')

@section('content')

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

  <h1>Home</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis egestas bibendum malesuada. Mauris eleifend ante euismod, pharetra felis rutrum, blandit massa. Integer non nulla volutpat tortor dignissim pretium in vitae ligula. Nunc lacinia elit eget ultrices ultrices. Nam ac vehicula diam, nec fringilla mi. Maecenas id lacinia ligula. Morbi varius tempus velit, vitae malesuada est maximus ac. Proin maximus vitae leo eu vulputate. Aenean nunc magna, dapibus quis tortor non, ullamcorper accumsan nunc. Sed dapibus, nulla eget venenatis maximus, urna purus cursus purus, nec dignissim nibh sem in nibh. Duis hendrerit convallis metus, sed pretium elit commodo et. Sed laoreet nulla porttitor convallis ultricies. Fusce eget orci neque. Nunc mollis euismod lorem. Sed rhoncus sit amet enim et elementum. Cras laoreet nulla eget ipsum mattis sagittis eu et massa.</p>
@endsection

@section('sidebar')
  @parent
  <p>This is appended to the sidebar</p>

@endsection
