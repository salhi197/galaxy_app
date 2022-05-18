@extends('layouts.app')

@section('page_wrapper')
@endsection


@section('content')
        <div class="container-fluid">
            <h1 class="mt-4 text-white"> {{$item}}s</h1>
            <div class="card mb-4">
                <div class="card-header">
                    <a class="btn btn-primary" href="{{route('client.create')}}">
                        Ajouter {{$item}}
                    </a>                
                </div>
                <div class="card-body">
                    <table  id="datatable-2" class="table table-striped table-bordered ">
                        <thead>
                            <tr>
                                @foreach(
                                    ['id','nom prenom','telephone','Matricule Camion','Matricule Remorque','type','action']
                                    as $th)
                                    <th>{{$th ?? ''}}</th>
                                @endforeach

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($clients as $client)
                            <tr>
                                <td>
                                    {{$client->id }}
                                </td>
                                <td>{{$client->nom}} {{$client->prenom}}</td>
                                
                                <td>{{$client->telephone }}</td>                                                
                                <td>
                                    @foreach($client->camions() as $key=>$camion)
                                        {{$camion->matricule}},                                            
                                    @endforeach


                                </td>                                                
                                <td>
                                    @foreach($client->remorques() as $key=>$remorque)
                                        {{$remorque->matricule}},
                                    @endforeach
                                </td>                                                
                                <td>{{$client->type ?? '' }}</td>                                                
                                <td>
                                    <a class="btn btn-primary" href="{{route('client.edit',['client'=>$client->id])}}">
                                        <i class="fa fa-edit"></i>
                                    </a>                                    
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ClientDetail{{$client->id}}">
                                        <i class="fa fa-eye"></i>
                                    </button>                                    
                                    @if(Auth::user()->grade==1)
                                        <a href="{{route($item.'.destroy',['client'=>$client->id])}}" onclick="return confirm('Etes vous sure ?')"  class="btn btn-danger text-white"><i class="fa fa-window-close"></i></a>
                                    @endif

                                </td>
                                </td>
                                @include($item.'s.modals.edit')
                                @include($item.'s.modals.detail')

                            </tr>

                            @endforeach                                            
                        </tbody>
                    </table>
                </div>



                
                
            </div>
        </div>



@include($item.'s.modals.add')


@endsection


@section('scripts')

<script>
        $(document).ready(function() {
        	var dynamic_form =  $("#dynamic_form").dynamicForm("#dynamic_form","#plus5", "#minus5", {
		        limit:10,
		        formPrefix : "dynamic_form",
		        normalizeFullForm : false
		    });

		    $("#dynamic_form #minus5").on('click', function(){
		    	var initDynamicId = $(this).closest('#dynamic_form').parent().find("[id^='dynamic_form']").length;
		    	if (initDynamicId === 2) {
		    		$(this).closest('#dynamic_form').next().find('#minus5').hide();
		    	}
		    	$(this).closest('#dynamic_form').remove();
		    });

		    $('#secteurFform').on('submit', function(event){
	        	var values = {};
				$.each($('#secteurFform').serializeArray(), function(i, field) {
				    values[field.name] = field.value;
				});
				console.log(values)
        	})
        });



</script>
@endsection
