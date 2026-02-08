@extends('evenements.layout')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            Détails de l'événement : {{ $evenement->id }}
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>Thème</th>
                    <td>{{ $evenement->thème }}</td>
                </tr>
                <tr>
                    <th>Date début</th>
                    <td>{{ $evenement->date_debut }}</td>
                </tr>
                <tr>
                    <th>Date fin</th>
                    <td>{{ $evenement->date_fin }}</td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td>{{ $evenement->description }}</td>
                </tr>
                <tr>
                    <th>Coût journalier</th>
                    <td>{{ $evenement->cout_journalier }}</td>
                </tr>
                <tr>
                    <th>Expert</th>
                    <td>{{ $evenement->expert->nomExp }} {{ $evenement->expert->prénomExp }}</td>
                </tr>
            </table>

            <h5 class="mt-4">Liste des ateliers assurés :</h5>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nom de l'atelier</th>
                        <th>Description de l'atelier</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($evenement->ateliers as $atelier)
                    <tr>
                        <td>{{ $atelier->nomAtelier }}</td>
                        <td>{{ $atelier->descriptionAtelier }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
            <a href="{{ route('evenements.index') }}">retour</a>
        </div>
    </div>
@endsection
