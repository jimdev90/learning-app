@if(!session('error-login'))
    @include('partials.form_errors')
@endif

<form method="post" class="intro-newslatter text-center" action="{{ route('register') }}">
    @csrf
    <input type="hidden" name="role" value="{{ \App\Model\User::STUDENT }}">
    <div class="row justify-content-center">
        <div class="col-12 mb-3">
            <input name="name" value="{{ old('name') }}" type="text" placeholder="{{ __("Nombre") }}">
            <input name="email" value="{{ old('email') }}" type="text" class="last-s" placeholder="{{ __("Correo electrónico") }}">
        </div>
        <div class="col-12 no-gutters">
            <input name="password" type="password" placeholder="{{ __("Contraseña") }}">
            <input name="password_confirmation" type="password" class="last-s" placeholder="{{ __("Confirma la contraseña") }}">
        </div>
        <div class="col-lg-12 mt-3">
            <button type="submit" class="site-btn btn-block">{{ __("Crear cuenta") }}</button>
        </div>
    </div>
</form>
