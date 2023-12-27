@extend('template')
@section('content')
<div class="row">
    <div class="col-md-4 offset-md-4 mt-5">
        <div class="card">
            <div class="card-header bg-dark text-light">
                Login
            </div>
            <div class="card-body p-2">
                <form action"" method="post">
                    @csrf
                    <div class="form-group">
                    <input class="form-control{{ $errors->has('email') ? 'is-invalid':'' }}"
                    type="email" name="email" placeholder="Email"/>
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <input class="form-control{{ $errors->has('passworrd') ? 'is-invalid':'' }}"
                    type="password" name="password" placeholder="Password"/>
                    @error('password')
                    <div class="invalid-feedback">{{ $message}}</div>
                    @enderror
                    <div class="form-check form-group">
                        <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="remember">
                        Remember Me
                    </label>
                </div>
                <div class="from-group">
                    <button type="submit" class="btn btn-dark btn-block">Login</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection