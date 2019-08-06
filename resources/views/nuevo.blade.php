<title>Laravel | Add new user</title>
@extends('layout')
@section('content')

<div class="container"><br>
    
    <div class="card">
            <div class="card-content">
              <span class="card-title">Registrarse</span><br>
              <form >
                    <div class="input-field">
                      <i class="material-icons prefix">account_circle</i>
                      <input type="text" class="validate">
                      <label for="icon_prefix">First Name</label>
                    </div>
                    <div class="input-field">
                            <i class="material-icons prefix">email</i>
                            <input type="email" class="validate">
                            <label for="icon_email">e-mail</label>
                          </div>
                    <div class="input-field">
                      <i class="material-icons prefix">phone</i>
                      <input type="tel" class="validate">
                      <label for="icon_telephone">Phone</label>
                    </div>
                </form>
            </div>
            <div class="card-action right-align">
                    <button class="btn waves-effect blue blue-darken-3">SEND</button>
            </div>
        </div>
    </div>
</div>
@endsection