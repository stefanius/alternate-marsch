@extends('layouts.app')

@section('container')
    <div class="columns">
        <div class="column left">
            <h1 class="title is-1">Registreren</h1>
            <h2 class="subtitle colored is-4">Email</h2>
            <p>Vul hier je email in zodat we straks je registratie makkelijk kunnen terugvinden. Ook kan je later je gegevens wijzigen als dat nodig is.</p>
        </div>
        <div class="column right has-text-centered">
            <h1 class="title is-4">Stap 1 - 3</h1>
            <form method="post">
                <div class="field">
                    @csrf

                    <div class="control">
                        <input name="email" class="input is-medium" type="email" placeholder="Email">
                        @if (filled($email_taken ?? ''))
                            <p class="help is-danger">{{ $email_taken }}</p>
                        @endif
                    </div>
                </div>
                <button class="button is-block is-primary is-fullwidth is-medium">Volgende</button>
            </form>
        </div>
    </div>
@endsection
