@extends("admin.dashboard")

@section('title', 'Delegate Controller - ITBMUN 2020')
@section('topbar', 'Delegates')

@section("dashboardContent")
<div class="content-regist">
    <div class="message">
        @if(isset($message))
            {{$message}}
        @endif
    </div>

    <br>

    <div class=''>
        @foreach($delegates as $delegate)
            <p>{{$delegate->fullName}}</p>
        @endforeach
    </div>
<div>
@endsection