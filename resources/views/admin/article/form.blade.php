@extends('admin.form')

@section('main')
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">{{ $article->exists ? "Modifier l'article" : "Ajouter un article" }} </h6>
                    </div>
                </div>
                <div class="card-body pb-2">
                    <form method="post" action="{{ $article->exists ? route('article.update', $article) : route('article.store', $article) }}" enctype="multipart/form-data">
                        @csrf
                        @method($article->exists ? 'put' : 'post')

                        <div class="mb-3 input-group input-group-outline">
                            <select class="form-select" aria-label="Default select example" name="category_id[]" multiple>
                                @foreach($categories as $category)
                                    @if($article->categories->contains($category->id))
                                        <option selected value="{{ $category->id }}">{{ $category->name }}</option>
                                    @else
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endif

                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3 input-group input-group-outline">
                            <label class="form-label">Référence</label>
                            <input type="text" class="form-control" name="reference" value="{{ $article->reference }}" />
                        </div>

                        <div class="mb-3 input-group input-group-outline">
                            <label class="form-label">Dimension</label>
                            <input type="text" class="form-control" name="dimension" value="{{ $article->dimension }}" />
                        </div>

                        <div class="mb-3 input-group input-group-outline">
                            <input class="form-control" type="file" id="formFileMultiple" name="pictures[]" multiple>
                        </div>

                        <div class="mb-3 input-group input-group-outline">
                            <label class="form-label">Description sans HTML</label>
                            <textarea class="form-control" id="contenu" name="contenu"> {{ $article->contenu }} </textarea>
                        </div>

                        <div class="mb-3 input-group input-group-outline">
                            <label>Description</label>
                            <textarea class="ckeditor form-control" id="description" name="description"> {{ $article->description }} </textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            @if($article->exists)
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
