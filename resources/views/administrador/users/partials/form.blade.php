<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null , ['class' => 'form-control',
    'placeholder' => 'Ingrese el nombre completo del usuario',
    'style'=>'width : 50%',
    'required']) !!}

    {!! Form::label('email', 'Correo Electrónico') !!}
    {!! Form::email('email', null , ['class' => 'form-control',
    'placeholder' => 'Ingrese el correcto Electrónico',
    'style'=>'width : 50%',
    'required']) !!}

    {!! Form::label('password', 'Contraseña') !!}
    {!! Form::password('password', ['class' => 'form-control',
    'placeholder' => 'Ingrese la clave para el usuario',
    'style'=>'width : 50%',
    'required']) !!}

    <br>

    {!! Form::label('status', 'Estado') !!}
    {!! Form::select('status',
    ['Activo' => 'Activo', 'Inactivo' => 'Inactivo'], null,
    ['placeholder' => 'Seleccione el estado', 'required', 'class' => 'form-control','style'=>'width : 50%']) !!}

</div>
