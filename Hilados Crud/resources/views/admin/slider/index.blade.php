@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12 ">
        @if (session('message'))
            <div class="alert alert-success">{{session('message')}}</div>
        @endif
        <div class="card">
            <div class="card-header">
            <h4> Lista de Slider
               <a href="{{url('admin/sliders/create')}}" class="btn btn-primary float-end">Agregar Slider</a>
            </h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-triped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>image</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($sliders as $slider )
                    <tr>
                        <td>{{$slider->id}}</td>
                        <td>{{$slider->title}}</td>
                        <td>{{$slider->description}}</td>

                        <td>
                        <img src="{{ asset("$slider->image")}}" style="width: 70px; height: 70px" alt="">
                        </td>

                        <td>{{$slider->status == '1'? 'oculto':'visible' }}</td>
                        <td>
                            <a href="{{url('admin/sliders/'.$slider->id.'/edit')}}" class="btn btn-success">Editar</a>
                            <a href="{{url('admin/sliders/'.$slider->id.'/delete')}}"onclick="return confirm('Estas seguro de Elimnar Este Dato')" class="btn btn-danger">eliminar</a>
                        </td>
                    </tr>

                @endforeach


                </tbody>
            </table>
        </div>
    </div>
  </div>
</div>

@endsection
