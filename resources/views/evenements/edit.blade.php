@extends('evenements.layout')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Modifier l'événement : {{ $evenement->thème }}</h4>
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('evenements.update', $evenement->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="thème" class="form-label">Thème</label>
                    <input type="text" class="form-control" id="thème" name="thème" value="{{ old('thème', $evenement->thème) }}" required>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="date_debut" class="form-label">Date début</label>
                        <input type="date" class="form-control" id="date_debut" name="date_debut" value="{{ old('date_debut', $evenement->date_debut) }}" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="date_fin" class="form-label">Date fin</label>
                        <input type="date" class="form-control" id="date_fin" name="date_fin" value="{{ old('date_fin', $evenement->date_fin) }}" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description', $evenement->description) }}</textarea>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="cout_journalier" class="form-label">Coût journalier</label>
                        <input type="number" step="0.01" class="form-control" id="cout_journalier" name="cout_journalier" value="{{ old('cout_journalier', $evenement->cout_journalier) }}" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="expert_id" class="form-label">Expert</label>
                        <select class="form-select" id="expert_id" name="expert_id" required>
                            @foreach($experts as $expert)
                                <option value="{{ $expert->id }}" {{ (old('expert_id', $evenement->expert_id) == $expert->id) ? 'selected' : '' }}>
                                    {{ $expert->nomExp }} {{ $expert->prénomExp }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
                    <a href="{{ route('evenements.index') }}" class="btn alert-secondary">Annuler</a>
                </div>
            </form>
        </div>
    </div>
@endsection
