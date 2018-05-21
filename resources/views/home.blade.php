@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <ul class="list-group">
                <a class="btn" href="{{ route('listNewPromotionCodes') }}">
                    <li class="list-group-item list-group-item-action"> 
                        <h3>Códigos activos <span class="badge badge-primary badge-pill">{{ $nCodesValid }}</span></h3>
                    </li>
                </a>
                <a class="btn" href="{{ route('listUsedPromotionCodes') }}">
                    <li class="list-group-item list-group-item-action"> 
                        <h3>Códigos canjeados <span class="badge badge-primary badge-pill">{{ $nCodesUsed }}</span></h3>
                    </li>
                </a>
            </ul>
        </div>
    </div>
</div>
@endsection
