@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pricing.css') }}">
@endpush

@section('jumbotron')
    @include('partials.jumbotron', ['title' => __('Suscribete ahora a uno de nuestros planes'), 'icon' => 'globe'])
@endsection

@section('content')
    <div class="container">
        <div class="pricing-table pricing-three-column row">
            <div class="plan col-sm-4 col-lg-4">
                <div class="plan-name-bronze">
                    <h2>{{ __('MENSUAL') }}</h2>
                    <span>{{ __(':price / Mes', ['price' => '$9.00']) }}</span>
                </div>
                <ul>
                    <li class="plan-feature">{{ __('Acceso a todos los cursos') }}</li>
                    <li class="plan-feature">{{ __('Acceso a todos los archivos') }}</li>
                    <li class="plan-feature">
                        @include('partials.stripe.form', [
                            'product' => [
                                'name' => __('Suscripción'),
                                'description' => __('Mensual'),
                                'type' => 'monthly',
                                'amount' => 900.00
                            ]
                        ])
                    </li>
                </ul>
            </div>

            <div class="plan col-sm-4 col-lg-4">
                    <div class="plan-name-silver">
                        <h2>{{ __('TRIMESTRAL') }}</h2>
                        <span>{{ __(':price / Trimestral', ['price' => '$15.00']) }}</span>
                    </div>
                    <ul>
                        <li class="plan-feature">{{ __('Acceso a todos los cursos') }}</li>
                        <li class="plan-feature">{{ __('Acceso a todos los archivos') }}</li>
                        <li class="plan-feature">
                            @include('partials.stripe.form', [
                                'product' => [
                                    'name' => __('Suscripción'),
                                    'description' => __('Trimestral'),
                                    'type' => 'quartely',
                                    'amount' => 1500.00
                                ]
                            ])
                        </li>
                    </ul>
            </div>
            
            <div class="plan col-sm-4 col-lg-4">
                    <div class="plan-name-gold">
                        <h2>{{ __('ANUAL') }}</h2>
                        <span>{{ __(':price / ANUAL', ['price' => '$90.00']) }}</span>
                    </div>
                    <ul>
                        <li class="plan-feature">{{ __('Acceso a todos los cursos') }}</li>
                        <li class="plan-feature">{{ __('Acceso a todos los archivos') }}</li>
                        <li class="plan-feature">
                            @include('partials.stripe.form', [
                                'product' => [
                                    'name' => __('Suscripción'),
                                    'description' => __('ANUAL'),
                                    'type' => 'yearly',
                                    'amount' => 9000.00
                                ]
                            ])
                        </li>
                    </ul>
            </div>

        </div>
    </div>
@endsection