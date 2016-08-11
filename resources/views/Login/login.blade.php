
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css">  

{{Form::open(array('url'=>"/auth/login"))}}



    <div class="form-group">
{!!Form::label('email','Email:')!!}
{!!Form::email('email',null,['class' => 'form-control'])!!}

</div>

    <div class="form-group">
{!!Form::label('password','Password:')!!}
{!!Form::password('password',null,['class' => 'form-control'])!!}

</div>

   
{!!Form::label('Remember Me','Remember Me')!!}

{!!Form::checkbox('remember',null,['class' => 'form-control'])!!}

</div>

  <div class="form-group">
{!! Form::submit('Submit',['class' =>'btn btn-primary form-control' ]) !!}
</div>

    {{Form::close()}}