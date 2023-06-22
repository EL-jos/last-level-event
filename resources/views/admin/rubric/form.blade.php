@extends('admin.form')

@section('main')
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">{{ $rubric->exists ? "Modifier rubrique" : "Ajouter une rubrique" }} </h6>
                    </div>
                </div>
                <div class="card-body pb-2">
                    <form method="post" action="{{ $rubric->exists ? route('rubric.update', $rubric) : route('rubric.store', $rubric) }}">
                        @csrf
                        @method($rubric->exists ? 'put' : 'post')
                        <div class="mb-3 input-group input-group-outline">
                            <label class="form-label">Nom</label>
                            <input type="text" class="form-control" name="name" value="{{ $rubric->name }}" />
                        </div>

                        <div class="mb-3 input-group input-group-outline">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" name="description">{{$rubric->description}}</textarea>
                        </div>

                        {{--<div class="mb-3 input-group input-group-outline">
                            <label>Description</label>
                            <textarea class="ckeditor form-control" id="description" name="description"></textarea>
                        </div>--}}

                        <button type="submit" class="btn btn-primary">
                            @if($rubric->exists)
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
