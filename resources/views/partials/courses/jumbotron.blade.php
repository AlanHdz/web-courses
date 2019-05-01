<div class="row no-margin">
    <div class="col-md-12 col-xs-12 col-lg-12 no-padding">
        <div class="card" style="background-image: url('{{ url('/images/jumbotron.png') }}');width:100%;">
            <div class="text-white text-center d-flex align-items-center py-5 px-4 my-5">
                <div class="col-5">
                    <img src="{{ $course->pathAttachment() }}" class="img-fluid">
                </div>
                <div class="col-5 text-left">
                    <h1>{{ __('Curso') }}: {{ $course->name }} </h1>
                    <h4>{{ __('Profesor') }}: {{ $course->teacher->user->name }} </h4>
                    <h5>{{ __('Categoría') }}: {{ $course->category->name }}</h5>
                    <h5>{{ __('Fecha de publicación') }}: {{ $course->created_at->format('d/m/Y') }}</h5>
                    <h5>{{ __('Fecha de actualización') }}: {{ $course->updated_at->format('d/m/Y') }}</h5>
                    <h5>{{ __('Estudiantes inscritos') }}: {{ $course->students_count }}</h5>
                    <h5>{{ __('Numero de valoraciones') }}: {{ $course->reviews_count }}</h5>
                    @include('partials.courses.rating')

                </div>
                @include('partials.courses.action_button')
            </div>
        </div>
    </div>
</div>