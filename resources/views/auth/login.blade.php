@extends('layouts.app')

@section('login')
<div>
<a class="hiddenanchor" id="signup"></a>
<a class="hiddenanchor" id="signin"></a>

<div class="login_wrapper">
    <div class="animate form login_form">
    <section class="login_content">
        <h2>Hola, bienvenido al <br/>Sistema de Gestión de Competencias Deportivas</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
        <h1>Iniciar Sesión</h1>
        <div>
            <input id="email" name="email" type="text" class="form-control" placeholder="Ingrese Correo Electronico" required="" />
        </div>
        <div>
            <input id="password" name="password" type="password" class="form-control" placeholder="Contraseña" required="" />
        </div>
        <div>
            <button id="login" class="btn btn-default" type="submit">Iniciar Sesión</button>
            {{-- <a class="btn btn-default submit" type="submit">Iniciar Sesión</a> --}}
            <a class="reset_pass" href="#">¿Olvidaste tu contraseña?</a>
        </div>
        <br/>
        <div id="resultado"></div>

        <div class="clearfix"></div>

        <div class="separator">

            <div class="clearfix"></div>
            <br />

            <div>
            <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
            <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
            </div>
        </div>
        </form>
    </section>
    </div>
</div>
</div>

<script>
    $('#login').click(function(){
        let email = $('#email').val();
        let password = $('#password').val();
        $.ajax({
            url: "{{ route('login1') }}",
            headers: {'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},
            method: "GET",
            data:{
                email: email,
                password: password
            },
            success:function(data){
                if(data.state == "email"){
                    $('#resultado').html(`<div id="resultado" class="alert alert-danger">${data.msg}</div>`);
                }else if (data.state == "success"){
                    location.href = "{{ route('dashboard') }}";
                }else if (data.state == "password"){
                    $('#resultado').html(`<div id="resultado" class="alert alert-danger">${data.msg}</div>`);
                }
            }
        });
        return false;
    });
</script>
@endsection
