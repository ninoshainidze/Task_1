@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            
            <apartment-component 
                :posts="{{$posts}}"
            >
            </apartment-component>
        </div>
    </div>
</div>
@endsection


