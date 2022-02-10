@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    @if ($suggestions === null)
                        <div class="card-header">{{ __('Введите свой адрес') }}</div>

                        <div class="card-body">

                            <form method="POST" action="/">
                                @csrf

                                <div class="row mb-3">
                                    <label for="name"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Адрес') }}</label>

                                    <div class="col-md-6">
                                        <input id="address" name="address" type="text" class="form-control"
                                            placeholder="Населеный пункт, улица, дом, квартира" />
                                        <span>Например: Самара, партизанская 40</span>
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Ввести') }}
                                        </button>
                                    </div>
                                </div>
                            </form>

                        @else
                            <div class="card-header mb-3">{{ __('Введите подходящий адрес из предложенных') }}</div>

                            <div class="info">
                                <form action="/save" method="post">
                                    @csrf
                                    @foreach ($suggestions as $el)
                                        <p class="ml-3">
                                            <input type="radio" name="save-address" value="{{ $el['unrestricted_value'] }}">
                                            <span>{{ $el['unrestricted_value'] }}</span>
                                        </p>
                                    @endforeach
                                    <button type="submit" class="btn btn-success ml-3">Сохранить</button>
                                </form>

                                <form action="/cancel" method="get" class="mt-2 ml-3">
                                    <input type="hidden" name="cancel">
                                    <button type="submit" class="btn btn-danger">Отмена</button>
                                </form>

                            </div>

                    @endif
                </div>
            </div>
        </div>
    </div>
    </div>


@endsection
