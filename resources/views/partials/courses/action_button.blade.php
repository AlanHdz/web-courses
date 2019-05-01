<div class="col-2">
    @auth
        @can('opt_for_course', $course)
            @can('subscribe', $course)
                <a href="{{ route('subscriptions.plans') }}" class="btn btn-subscribe btn-bottom btn-block">
                    <i class="fa fa-bolt"></i> {{ __('Suscribirme') }}
                </a>
            @else
                @can('inscribe', $course)
                    <a href="#" class="btn btn-subscribe btn-bottom btn-block">
                        <i class="fa fa-bolt"></i> {{ __('Inscribirme') }}
                    </a>
                @else
                    <a href="#" class="btn btn-subscribe btn-bottom btn-block">
                        <i class="fa fa-bolt"></i> {{ __('Inscrito') }}
                    </a>
                @endcan
            @endcan
        @else
            <a href="#" class="btn btn-subscribe btn-bottom btn-block">
                <i class="fa fa-user"></i> {{ __('Mi curso') }}
            </a>
        @endcan
    @else
        <a href="{{ route('login') }}" class="btn btn-subscribe btn-bottom btn-block">
            <i class="fa fa-bolt"></i> {{ __('Acceder') }}
        </a>
    @endauth
</div>