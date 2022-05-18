@extends('layouts.app')

@section('content')
<div class="page-header">
    <h4 class="page-title"> <i class="fa fa-plus"></i> Nouveau Client</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Accueil</a></li>
        <li class="breadcrumb-item active" aria-current="page">Chauffeur</li>
    </ol>
</div>
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <form role="form" action="{{route('client.store')}}" method="post" enctype="multipart/form-data" id="formpost">
                @csrf
                <div class="row">
                    @foreach(
                    [
                    [
                    'label'=>'nom',
                    'name'=>'nom',
                    'type'=>'text',
                    'col'=>3

                    ],
                    [
                    'label'=>'prénom',
                    'name'=>'prenom',
                    'type'=>'text',
                    'col'=>3

                    ],
                    [
                    'label'=>'Adress',
                    'name'=>'adress',
                    'type'=>'text',
                    'col'=>3

                    ],
                    [
                    'label'=>'Rib/Rip',
                    'name'=>'rib',
                    'type'=>'text',
                    'col'=>3

                    ],
                    [
                    'label'=>'Téléphone',
                    'name'=>'telephone',
                    'type'=>'text',
                    'col'=>3

                    ],
                    [
                    'label'=>'Type Camion',
                    'name'=>'type',
                    'type'=>'select',
                    'options'=>['Benne','Benne rigide','Cocote','Mariship'],
                    'col'=>2
                    ]

                    ]
                    as $input
                    )
                    <div class="col-md-{{$input['col']}}">
                        <div class="form-group">
                            <label style="font-size:15px;" class="form-label">{{$input['label']}}</label>
                            @if($input['type'] == "select")
                            <select class="form-control" name="{{$input['name']}}">
                                @foreach($input['options'] as $option)
                                <option value="{{$option}}">{{$option ?? ''}}</option>
                                @endforeach
                            </select>
                            @else
                            <input type="{{$input['type']}}" value="" name="{{$input['name']}}" class="form-control">
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="form-group" id="dynamic_form2">
                    <div class="row">

                        <div class="col-md-2">
                            <label class="form-label">Matricule Camion</label>
                            <input type="text" name="matricule_camion" id="matricule_camion" placeholder="Matricule Camion ..." class="form-control">
                        </div>
                        <div class="col-md-3">

                            <div class="form-group">
                                <label class="form-label">Carte Grise Camion</label>
                                <input type="file" name="carte_grise_camion" id="carte_grise_camion" class="form-file">
                            </div>
                            <!-- <div class="form-group">
                                        <label class="form-label">Expiration Carte Grise Camion</label>
                                        <input type="date" name="expiration_carte_grise_camion" id="expiration_carte_grise_camion" class="form-control">
                                    </div> -->
                            <div class="form-group">
                                <label class="form-label">Date Installation GPS</label>
                                <input type="date" name="gps" id="gps" class="form-control">
                            </div>



                        </div>


                        <div class="col-md-3">

                            <div class="form-group">
                                <label class="form-label">Assurance Camion</label>
                                <input type="file" name="assurance_camion" id="assurance" class="file-file">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Expiration Assurance Camion</label>
                                <input type="date" name="expiration_assurance_camion" id="expiration_assurance" class="form-control">
                            </div>
                        </div>


                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label">Scanner Camion</label>
                                <input type="file" name="scanner_camion" id="scanner" class="file-control">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Expiration Scanner Camion</label>
                                <input type="date" name="expiration_scanner_camion" id="expiration_scanner" class="form-control">
                            </div>
                        </div>

                        <div class="button-group">
                            <a href="javascript:void(0)" class="btn btn-primary" style="margin:10px;" id="plus52"><i class="fa fa-plus"></i></a>
                            <a href="javascript:void(0)" class="btn btn-danger" style="margin:10px;" id="minus52"><i class="fa fa-minus"></i></a>
                        </div>
                    </div>
                </div>


                <hr>
                <div class="form-group" id="dynamic_form">
                    <div class="row">
                        <div class="col-md-2">
                            <label class="form-label">Matricule Remorque</label>
                            <input type="text" name="matricule_remorque" id="matricule_remorque" placeholder="" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label">Carte Grise Remorque</label>
                                <input type="file" name="carte_grise_remorque" id="carte_grise_remorque" class="form-file">
                            </div>
                            <!--
                                    <div class="form-group">
                                        <label class="form-label">Date Installation GPS ( remorque )</label>
                                        <input type="date" name="gps_remorque" id="gps_remorque" class="form-control">
                                    </div>
                            
                                     <div class="form-groupe">
                                        <label class="form-label">Expiratiopn Carte Grise Remorque</label>
                                        <input type="date" name="carte_grise_remorque" id="carte_grise_remorque" class="form-control">
                                    </div> -->
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label">Assurance Remorque</label>
                                <input type="file" name="assurance_remorque" id="assurance_remorque" class="form-file">
                            </div>
                            <div class="form-groupe">
                                <label class="form-label">Expiratiopn Assurance Remorque</label>
                                <input type="date" name="expiration_assurance_remorque" id="expiration_assurance_remorque" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label">Scanner Remorque</label>
                                <input type="file" name="scanner_remorque" id="scanner_remorque" class="form-file">
                            </div>
                            <div class="form-groupe">
                                <label class="form-label">Expiratiopn Scanner Remorque</label>
                                <input type="date" name="expiration_scanner_remorque" id="expiration_scanner_remorque" class="form-control">
                            </div>
                        </div>


                        <div class="button-group">
                            <a href="javascript:void(0)" class="btn btn-primary" style="margin:27px;" id="plus5"><i class="fa fa-plus"></i></a>
                            <a href="javascript:void(0)" class="btn btn-danger" style="margin:27px;" id="minus5"><i class="fa fa-minus"></i></a>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-sm-2 col-offset-4 ">
                        <button id="valider" class="btn btn-primary btn-block">Valider</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>





<!-- ROW CLOSED -->
@endsection
@section('scripts')
<script>
    $(document).ready(function() {
        $('.biometrique').hide()
        $('.standard').hide()
        $('#type_permis').on('change', function() {
            var valueSelected = $(this).children(":selected").val();
            console.log(valueSelected)
            if (valueSelected == "standard") {
                $('.biometrique').hide()
                $('.standard').show()
            }
            if (valueSelected == "Biométrique") {
                $('.biometrique').show()
                $('.standard').hide()
            }

        })

        ////////////////////////////////////////// 
        $('.date_installation_gps').hide();
        $(':checkbox').change(function() {
            if ($('.date_installation_gps').is(':hidden')) {
                $('.date_installation_gps').show();
            } else {
                $('.date_installation_gps').hide();
            }
        });

        var dynamic_form = $("#dynamic_form").dynamicForm("#dynamic_form", "#plus5", "#minus5", {
            limit: 10,
            formPrefix: "dynamic_form",
            normalizeFullForm: false
        });
        $("#dynamic_form #minus5").on('click', function() {
            var initDynamicId = $(this).closest('#dynamic_form').parent().find("[id^='dynamic_form']").length;
            if (initDynamicId === 2) {
                $(this).closest('#dynamic_form').next().find('#minus5').hide();
            }
            $(this).closest('#dynamic_form').remove();
        });

        // ////////////////////////////////////////////////////////////////
        var dynamic_form = $("#dynamic_form2").dynamicForm("#dynamic_form2", "#plus52", "#minus52", {
            limit: 10,
            formPrefix: "dynamic_form2",
            normalizeFullForm: false
        });
        $("#dynamic_form2 #minus52").on('click', function() {
            var initDynamicId = $(this).closest('#dynamic_form2').parent().find("[id^='dynamic_form2']").length;
            if (initDynamicId === 2) {
                $(this).closest('#dynamic_form2').next().find('#minus52').hide();
            }
            $(this).closest('#dynamic_form2').remove();
        });



        $('#Commandeform').on('submit', function(event) {
            var values = {};
            $.each($('#Commandeform').serializeArray(), function(i, field) {
                values[field.name] = field.value;
            });
            console.log(values)
        })
    });
</script>

@endsection