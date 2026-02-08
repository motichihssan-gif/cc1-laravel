<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Détails de l'événement</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .detail-box { border: 1px solid #000; padding: 20px; max-width: 800px; margin: 20px auto; }
        .table-custom { border: 1px solid #000; margin-bottom: 20px; width: 100%; }
        .table-custom td, .table-custom th { border: 1px solid #000; padding: 8px; }
    </style>
</head>
<body>

<div class="detail-box">
    <h3>Détails de l'événement : {{ $evenement->id }}</h3>

    <table class="table-custom">
        <tr>
            <th width="30%">Thème</th>
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
            <td>{{ $evenement->expert->nomExp ?? 'N/A' }} {{ $evenement->expert->prénomExp ?? '' }}</td>
        </tr>
    </table>

    <h4>Liste des ateliers assurées :</h4>
    <table class="table-custom">
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

    <a href="{{ route('evenements.index') }}" class="btn btn-secondary">retour</a>
</div>

</body>
</html>
