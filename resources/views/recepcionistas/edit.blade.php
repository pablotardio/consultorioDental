@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Recepcionista
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($recepcionista, ['route' => ['recepcionistas.update', $recepcionista->id], 'method' => 'patch']) !!}

                        @include('recepcionistas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection