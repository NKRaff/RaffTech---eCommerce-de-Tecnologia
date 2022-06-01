@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Add Product</h4>
        </div>
        <div class="card-body">

            <form action="{{ url('insert-products') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-10 mb-3 ">
                        <select required class="form-select" name="cate_id">
                            <option value="">Selecione uma Categoria</option>
                            @foreach($category as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-2">
                        <a class="nav-link" id="add" href="{{ url('add-category') }}">
                            <i class="bi bi-folder-plus"></i>
                            Adicionar Produto
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="">Nome</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Slug</label>
                        <input type="text" class="form-control" name="slug">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Pequena Descrição</label>
                        <textarea name="small_description" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Descrição</label>
                        <textarea name="description" rows="3" class="form-control"></textarea>
                    </div>
<!--
                    <div class="col-md-6 mb-3">
                        <label for="">Original Price</label>
                        <input type="number" class="form-control" name="original_price">
                    </div>
-->
                    <div class="col-md-6 mb-3">
                        <label for="">Preço</label>
                        <input type="number" class="form-control" name="selling_price">
                    </div>
<!--
                    <div class="col-md-6 mb-3">
                        <label for="">Tax</label>
                        <input type="number" class="form-control" name="tax">
                    </div>
-->
                    <div class="col-md-6 mb-3">
                        <label for="">Quantidade</label>
                        <input type="number" class="form-control" name="qty">
                    </div>
<!--
                    <div class="col-md-6 mb-3">
                        <label for="">Status</label>
                        <input type="checkbox" name="status">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Trending</label>
                        <input type="checkbox" name="trending">
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="">Meta Title</label>
                        <input type="text" class="form-control" name="meta_title">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Meta Keywords</label>
                        <textarea rows="3" class="form-control" name="meta_keywords"></textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Meta Description</label>
                        <textarea rows="3" class="form-control" name="meta_description"></textarea>
                    </div>
-->                   
                    <div class="col-md-12">
                        <label for="">Imagem</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Adicionar</button>
                    </div>

                    
            </form>

        </div>
    </div>
@endsection
