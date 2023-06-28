@extends('admin.form')

@section('main')
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">{{ $sale->exists ? "Modifier la vente" : "Ajouter une vente" }} </h6>
                    </div>
                </div>
                <div class="card-body pb-2">
                    <form method="post" action="{{ $sale->exists ? route('sale.update', $sale) : route('sale.store', $sale) }}" enctype="multipart/form-data">
                        @csrf
                        @method($sale->exists ? 'put' : 'post')
                        @if($sale->exists)
                            <input type="hidden" name="sale_id" value="{{ $sale->id }}" />
                        @endif

                        <div class="mb-3 input-group input-group-outline">
                            <label class="form-label">Référence</label>
                            <input type="text" class="form-control" name="ref" value="{{ $sale->ref }}" />
                        </div>

                        <div class="d-flex gap-2">
                            <div class="mb-3 input-group input-group-outline is-focused">
                                <label class="form-label" for="user_id">Acheteur</label>
                                <select class="form-control" name="user_id">
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->username }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3 input-group input-group-outline is-focused">
                                <label class="form-label">Evénement</label>
                                <select class="form-control" name="event_id">
                                    @foreach($events as $event)
                                        <option value="{{ $event->id }}">{{ $event->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="d-flex gap-2">
                            <div class="is-focused mb-3 input-group input-group-outline">
                                <label class="form-label">Quantité</label>
                                <input type="number" class="form-control" name="quantity" value="{{ $sale->quantity }}" />
                            </div>
                            <div class="is-focused mb-3 input-group input-group-outline">
                                <label class="form-label">Type</label>
                                <select class="form-control" name="type_id">
                                    @foreach($types as $type)
                                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            @if($sale->exists)
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
