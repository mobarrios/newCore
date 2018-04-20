@extends('template.model_index')
    @section('table')
        @foreach($models as $model)
            <tr>
                <td style="width: 1%"><input class="id_destroy" value="{{$model->id}}" type="checkbox"></td>
                <td>{{$model->id}}</td>
                <td>{{$model->codigo_orden }}</td>
                <td>{{$model->observaciones_internas}}</td>                
            </tr>
        @endforeach
    @endsection
