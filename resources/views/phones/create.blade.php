@extends('layouts.app')

@section('title', 'Create Phone')

@section('content')
    <FORM action="{{route('phones.store')}}"method="post">
        @csrf
        <label for="user_id">Utilizator: </label>
        <select name="user_id" id="user_id">
            @foreach ($users as $user)
                <option value="{{$user->id}}">{{$user->fullname()}}</option>
                @endforeach
            @endforeach
        </select><br>
        <label for="phone">Telefon</label>
        <input type="text" name="phone " id="phone" placeholder="Telefon"><br>
        <button type="submit">Save</button>
      </FORM>
@endsection