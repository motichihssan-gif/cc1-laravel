<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des événements</title>
    <!-- Inclure Bootstrap si nécessaire pour le style -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1>Liste des événements</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Thème</th>
                <th>Date début</th>
                <th>Date fin</th>
                <th>Description</th>
                <th>Coût journalier</th>
                <th>Expert_id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($evenements as $evenement)
            <tr>
                <td>{{ $evenement->thème }}</td>
                <td>{{ $evenement->date_debut }}</td>
                <td>{{ $evenement->date_fin }}</td>
                <td>{{ $evenement->description }}</td>
                <td>{{ $evenement->cout_journalier }}</td>
                <td>{{ $evenement->expert_id }}</td>
                <td>
                    <a href="{{ route('evenements.show', $evenement->id) }}" class="btn btn-info btn-sm">Consulter</a>
                    <a href="{{ route('evenements.edit', $evenement->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                    
                    <form action="{{ route('evenements.destroy', $evenement->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr ?')">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
