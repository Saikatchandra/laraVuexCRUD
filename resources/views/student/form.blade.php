@extends('layouts.app')
@section('content')
    <div id="vue-app">
        <student-from-component
            scope="{{ $scope }}"
            :id="{{ $id ?? 0 }}"
        >
            
        </student-from-component>  
    </div>
@endsection