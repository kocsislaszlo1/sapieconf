@extends('dashboard.layout.main')

@section('content')
    <div class="row justify-content-center">

        <div class="col-md-6">
            <div class="card uper">
                <div class="card-header">
                    Edit Eloado
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div><br />
                    @endif
                    <form method="post" action="{{ route('dashboard.eloadok.update', $id) }}">
                        @csrf
                        <div class="form-group">
                            <label for="nev">nev:</label>
                            <input type="text" class="form-control" name="nev" value="{{ $eloadok->nev }}" />
                        </div>

                        <div class="form-group">
                            <label for="fokozat">fokozat:</label>
                            <input type="text" class="form-control" name="fokozat" value="{{ $eloadok->nev }}" />

                        </div>

                        <div class="form-group">
                            <label for="intezmeny">intezmeny:</label>
                            <input type="text" class="form-control" name="intezmeny" value="{{ $eloadok->intezmeny }}" />
                        </div>
                        <div class="form-group">
                            <label for="eloadascim">eloadas cime:</label>
                            <input type="text" class="form-control" name="eloadascim" value="{{ $eloadok->eloadascim }}" />
                        </div>
                        <div class="form-group">
                            <label for="email">email:</label>
                            <input type="email" class="form-control" name="email" value="{{ $eloadok->email }}" />
                        </div>
                        <div class="form-group">
                            <label for="kivonat">kivonat:</label>
                            <input type="text" class="form-control" name="kivonat" value="{{ $eloadok->kivonat }}" />
                        </div>
                        <div class="form-group">
                            <label for="szekcio_id">szekciok:</label>
                            <select id="szekcio_id" name="szekcio_id" class="form-control">
                                <option value="">-- Melyik szekcio --</option>
                                @foreach ($szekciok as $szekcio)
                                    <option value="{{ Str::slug($szekcio->id) }}">{{ $szekcio->szekcionev }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ URL::previous() }}" class="btn btn-warning"> <i class="fas fa-arrow-left"></i>
                            Vissza</a>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
