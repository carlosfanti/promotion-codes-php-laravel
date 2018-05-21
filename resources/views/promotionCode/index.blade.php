@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if(count($listCodes)>0)
            <div class="col-12">
                <ul class="list-group">
                    <li class="list-group-item d-flex">
                        <div class="col-4">
                            <h4>Código</h4>
                        </div>
                        <div class="col-4">
                            <h4>Fecha</h4>
                        </div>
                        <div class="col-4">
                            <h4></h4>
                        </div>
                    </li>
                    @foreach ($listCodes as $code)
                        @if(!$code->is_used)
                            <a class="use-promotion-code list-group-item list-group-item-action" href="{{ route('usePromotionCode',['id'=>$code->id]) }}">
                                <li class="d-flex">
                                    <div class="col-4">
                                        <p>{{ $code->code }}</p>
                                    </div>
                                    <div class="col-4">
                                        <p>{{ $code->created_at }}</p>
                                    </div>
                                    <div class="col-4">
                                        <p>Úsame!</p>
                                    </div>
                                </li>
                            </a>
                        @else
                            <li class="list-group-item d-flex">
                                <div class="col-4">
                                    <p>{{ $code->code }}</p>
                                </div>
                                <div class="col-4">
                                    <p>{{ $code->created_at }}</p>
                                </div>
                                <div class="col-4">
                                    <p>Utilizado: {{ $code->updated_at }}</p>
                                </div>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>

            <div class="text-center">
				{{$listCodes->links()}}
			</div>
        @else
            <div class="col-md-10">
                Ningún código promocional...
            </div>
        @endif
    </div>
</div>

@endsection
