@extends('layouts.ENS')
@section('contents')

    <h1 class="mb-0">Ajouter un PFE</h1>
    <hr />
    <form action="{{route('storeCours')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xs-3 col-sm-3 col-md-3">
                <div class="form-group">
                    <strong>Nom du PFE : </strong>
                    <input type="text" name="nom" class="form-control mt-1" value="{{old('nom')}}" placeholder="Enter le nom du cours" required>
                </div>
            </div>
            
            <div class="col-xs-3 col-sm-3 col-md-3">
                <div class="form-group">
                    <strong>Filière : </strong>
                    <select name="filiere" class="form-control my-1 py-2 rounded-5 shadow-lg p-2" required>
                        <option value="SMI">SMI</option>
                        <option value="SMA">SMA</option>
                        <option value="SMP">SMP</option>
                        <option value="SMC">SMC</option>
                        <option value="DP">DP</option>
                        <option value="SEG">SEG</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3">
                <div class="form-group">
                        <strong>Semestre : </strong>
                            <select name="semestre" class="form-control my-1 py-2 rounded-5 shadow-lg p-2" required>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                                <option value="S4">S4</option>
                                <option value="S5">S5</option>
                                <option value="S6">S6</option>
                            </select>
                </div>
            </div>

            <div class="col-xs-3 col-sm-3 col-md-3 mt-4 pt-1">
                <button type="submit" class="btn btn-primary">Créer</button>
            </div>
        </div>
    </form>
@endsection