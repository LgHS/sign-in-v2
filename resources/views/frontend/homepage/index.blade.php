@extends('frontend.app')
@section('title', 'Bienvenue')
@section('css')
@endsection

@section('content')

@if(Auth::user())
<main id="content">
    <div class="container">
        <h2>Bienvenue sur ton compte LgHS !</h2>
            <p>
                Tu peux maintenant utiliser tes accès à ce compte pour te connecter aux différents services.
            </p>
        <h3>Ton compte LgHS</h3>
            <p>
                Pour l'instant, il n'y a pas grand chose à faire ici. Quelques idées de développement incluent
                la possibilité de gérer tes cotis, voir les autres membres et des infos de contact, gérer une des accès RFID,...
            </p>
            <p>
                Plus d'infos sur le wiki: <a href="http://wiki.lghs.be/membres">http://wiki.lghs.be/membres</a>.
            </p>
    </div>
</main>
@else
<main id="content">
    <div class="container">
        <h2>Bienvenue !</h2>
            <p>
                Vous devez vous authentifier
            </p>
    </div>
</main>
@endif
@endsection

@section('js')
@endsection