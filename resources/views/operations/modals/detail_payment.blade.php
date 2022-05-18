<div class="modal fade" id="ClientDetailPayment{{$client->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Payment de Client : {{$client->nom }} {{$client->prenom}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
          <div class="modal-body">      
              <div class="row">
                  <div class="card-body" >
                        <table id="datatable-55" class="table table-bordered key-buttons text-nowrap">
                            <thead>
                                <tr>
                                <th class="border-bottom-0">ID </th>
                                <th class="border-bottom-0">Acteur</th>
                                    <th class="border-bottom-0">Mois</th>
                                    <th class="border-bottom-0">Date</th>
                                    <th class="border-bottom-0">Chargement</th>
                                    <th class="border-bottom-0">Port</th>
                                    <th class="border-bottom-0">Chauffeur</th>
                                    <th class="border-bottom-0">Matricule Tracteur</th>
                                    <th class="border-bottom-0">N,FACT</th>
                                    <th class="border-bottom-0">Quantité</th>
                                    <th class="border-bottom-0">Prix</th>
                                    <th class="border-bottom-0">Montant</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $total = 0;
                                    $gps = 0;
                                    $avance = 0;
                                    $versement = 0;
                                ?>
                                @foreach($payments as $payment)
                                <tr>
                                    <td>{{$payment->id}}</td>
                                    <td>{{$payment->acteur()['name']}}</td>
                                    <td>{{$payment->mois}}</td>
                                    <td>{{$payment->date_facture ?? ''}}</td>
                                    <td>{{$payment->lieu_chargement ?? ''}}</td>
                                    <td>{{$payment->wilaya()['name2'] ?? ''}}</td>
                                    <td>{{$payment->chauffeur()['nom'] ?? ''}} {{$payment->chauffeur()['prenom'] ?? ''}}</td>
                                    <td>{{$payment->matricule_tracteur ?? ''}}</td>
                                    <td>{{$payment->facture ?? ''}}</td>

                                    <td>{{$payment->quantite ?? ''}}</td>
                                    <td>{{$payment->prix ?? ''}}</td>

                                    <td>
                                        {{($payment->prix*$payment->quantite)  ?? ''}} DA
                                        <?php $total = $total+($payment->prix*$payment->quantite) ?>
                                        <?php $gps = $gps+$payment->gps; ?>
                                        <?php $avance = $avance+$payment->avance; ?>
                                        <?php $versement = $versement+$payment->versement; ?>
                                    </td>
                                </tr>                                
                                @endforeach
                                <tr>
                                    <?php for ($i=0; $i <11 ; $i++) { ?>
                                        <td style="color:gray;">
                                            <?php if($i == 0){ echo "99";} ?>
                                            <?php if($i == 10){ echo "total";} ?>
                                        </td>
                                    <?php } ?>
                                    <td>{{$total ?? ''}} DA</td>
                                </tr>
                                <tr>
                                    <?php for ($i=0; $i <11 ; $i++) { ?>
                                        <td style="color:gray;">
                                            <?php if($i == 0){ echo "99";} ?>
                                            <?php if($i == 10){ echo "gps";} ?>
                                        </td>
                                    <?php } ?>
                                    <td>{{$gps ?? ''}} DA</td>
                                </tr>
                                <tr>
                                    <?php for ($i=0; $i <11 ; $i++) { ?>
                                        <td style="color:gray;">
                                            <?php if($i == 0){ echo "99";} ?>
                                            <?php if($i == 10){ echo "avance";} ?>
                                        </td>
                                    <?php } ?>
                                    <td>{{$avance ?? ''}} DA</td>
                                </tr>
                                <tr>
                                    <?php for ($i=0; $i <11 ; $i++) { ?>
                                        <td style="color:gray;">
                                            <?php if($i == 0){ echo "99";} ?>
                                            <?php if($i == 10){ echo "versement";} ?>
                                        </td>
                                    <?php } ?>
                                    <td>{{$versement ?? ''}} DA</td>
                                </tr>

                                <tr>
                                    <?php for ($i=0; $i <11 ; $i++) { ?>
                                        <td style="color:gray;">
                                            <?php if($i == 0){ echo "99";} ?>
                                            <?php if($i == 10){ echo "Reste à payé";} ?>
                                        </td>
                                    <?php } ?>
                                    <td>{{$total-$gps-$versement-$avance ?? ''}} DA</td>
                                </tr>

                            </tbody>
                            </table>

                  </div>
              </div>
  
  
  
  
  
        </div>
      </div>
    </div>
  </div>
  @section('styles')
    
  @endsection