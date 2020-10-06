@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List</div>
                {{-- <a href="{{route('emp-new')}}" class="btn btn-secondary">New-Emp</a> --}}
                <div class="card-body">
                    <ul>
                        @foreach ($pizs as $piz)
                            <li>
                                <a href="{{route('pizza-show', $piz-> id)}}">Nome pizza: {{$piz -> nome }} <br>
                                Prezzo: {{$piz -> prezzo }}€ <br><br> </a>    
                            </li>   
                        @endforeach
                    </ul>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection