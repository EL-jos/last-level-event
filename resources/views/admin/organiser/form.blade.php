@extends('admin.form')

@section('main')
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">{{ $organiser->exists ? "Modifier l'organisateur" : "Ajouter un organisateur" }} </h6>
                    </div>
                </div>
                <div class="card-body pb-2">
                    <form method="post" action="{{ $organiser->exists ? route('organiser.update', $organiser) : route('organiser.store', $organiser) }}">
                        @csrf
                        @method($organiser->exists ? 'put' : 'post')
                        <div class="mb-3 input-group input-group-outline">
                            <label class="form-label">Nom</label>
                            <input type="text" class="form-control" name="name" value="{{ $organiser->name }}" />
                        </div>

                        <div class="mb-3 input-group input-group-outline">
                            <label class="form-label">E-mail</label>
                            <input type="text" class="form-control" name="email" value="{{ $organiser->email }}" />
                        </div>

                        <div class="mb-3 input-group input-group-outline">
                            <label class="form-label">Téléphone</label>
                            <input type="text" class="form-control" name="phone" value="{{ $organiser->phone }}" />
                        </div>

                        <div class="mb-3 input-group input-group-outline">
                            <label class="form-label">Adresse</label>
                            <input type="text" class="form-control" name="address" value="{{ $organiser->address }}" />
                        </div>

                        {{--<div class="mb-3 input-group input-group-outline">
                            <select class="form-select" aria-label="Default select example" name="rubric_id">
                                <option selected disabled>Open this select menu</option>
                                @foreach($rubrics as $rubric)
                                    <option value="{{ $rubric->id }}">{{ $rubric->name }}</option>
                                @endforeach
                            </select>
                        </div>--}}

                        {{--<div class="mb-3 input-group input-group-outline">
                            <label>Description</label>
                            <textarea class="ckeditor form-control" id="description" name="description"></textarea>
                        </div>--}}

                        <button type="submit" class="btn btn-primary">
                            @if($organiser->exists)
                                Modifier
                            @else
                                Ajouter
                            @endif
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <!-- CKEDITOR -->
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'ckeditor' );
    </script>
    @parent
@endsection
