@extends('layouts.base')

@section('content')


    <!-- Page title -->
    <div class="page-header text-white">
        <div class="row align-items-center">
            <div class="col-auto">
                <h2 class="page-title">
                    Bon de commandes
                </h2>
            </div>
            <div class="col-auto">
                <div class="text-white text-h5 mt-2">
                    1-10 of 30
                </div>
            </div>
            <!-- Page title actions -->
            <div class="col-auto ml-auto d-print-none">
                <div class="d-flex align-items-center">
                    <a class="text-white mr-3 mb-0" data-toggle="modal" data-target="#modal-pos">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="28" height="28"
                            class="mr-2">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z" fill="rgba(255,255,255,1)" /></svg>
                        <span class="h2 align-middle">Nouveau</span>
                    </a>
                    <span class="dropdown ml-3">
                        <div class="dropdown-toggle" data-boundary="viewport" data-toggle="dropdown">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                height="24">
                                <path fill="none" d="M0 0h24v24H0z" />
                                <path
                                    d="M2 18h7v2H2v-2zm0-7h9v2H2v-2zm0-7h20v2H2V4zm18.674 9.025l1.156-.391 1 1.732-.916.805a4.017 4.017 0 0 1 0 1.658l.916.805-1 1.732-1.156-.391c-.41.37-.898.655-1.435.83L19 21h-2l-.24-1.196a3.996 3.996 0 0 1-1.434-.83l-1.156.392-1-1.732.916-.805a4.017 4.017 0 0 1 0-1.658l-.916-.805 1-1.732 1.156.391c.41-.37.898-.655 1.435-.83L17 11h2l.24 1.196c.536.174 1.024.46 1.434.83zM18 18a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"
                                    fill="rgba(255,255,255,1)" /></svg>
                        </div>

                        <div class="dropdown-menu dropdown-menu-right mt-3">
                            <span class="dropdown-header">Trier par</span>
                            <a class="dropdown-item" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18"
                                    height="18" class="mr-2">
                                    <path fill="none" d="M0 0h24v24H0z" />
                                    <path
                                        d="M8 4h13v2H8V4zM4.5 6.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 7a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 6.9a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zM8 11h13v2H8v-2zm0 7h13v2H8v-2z" />
                                </svg>
                                Nom
                            </a>
                            <a class="dropdown-item" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18"
                                    height="18" class="mr-2">
                                    <path fill="none" d="M0 0h24v24H0z" />
                                    <path
                                        d="M8 4h13v2H8V4zM4.5 6.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 7a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 6.9a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zM8 11h13v2H8v-2zm0 7h13v2H8v-2z" />
                                </svg>
                                Quantité
                            </a>
                            <a class="dropdown-item" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18"
                                    height="18" class="mr-2">
                                    <path fill="none" d="M0 0h24v24H0z" />
                                    <path
                                        d="M8 4h13v2H8V4zM4.5 6.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 7a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 6.9a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zM8 11h13v2H8v-2zm0 7h13v2H8v-2z" />
                                </svg>
                                Prix
                            </a>
                            <a class="dropdown-item" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18"
                                    height="18" class="mr-2">
                                    <path fill="none" d="M0 0h24v24H0z" />
                                    <path
                                        d="M8 4h13v2H8V4zM4.5 6.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 7a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 6.9a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zM8 11h13v2H8v-2zm0 7h13v2H8v-2z" />
                                </svg>
                                Date
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18"
                                    height="18" class="mr-2">
                                    <path fill="none" d="M0 0h24v24H0z" />
                                    <path
                                        d="M5.463 4.433A9.961 9.961 0 0 1 12 2c5.523 0 10 4.477 10 10 0 2.136-.67 4.116-1.81 5.74L17 12h3A8 8 0 0 0 6.46 6.228l-.997-1.795zm13.074 15.134A9.961 9.961 0 0 1 12 22C6.477 22 2 17.523 2 12c0-2.136.67-4.116 1.81-5.74L7 12H4a8 8 0 0 0 13.54 5.772l.997 1.795z" />
                                </svg>
                                Actualiser
                            </a>
                        </div>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-9">
            <div class="card">
                <div class="table-responsive">
                    <table id="purchases" class="table table-vcenter card-table">
                            <thead>
                                <tr>
                                    <th class="w-1"><input class="form-check-input m-0 align-middle"
                                            type="checkbox"></th>
                                    <th class="w-1">N°</th>
                                    <th class="exportable">Date</th>
                                    <th class="exportable">Site</th>
                                    <th class="exportable">Forunisseur</th>
                                    <th class="exportable">Initié par</th>
                                    <th class="exportable"> Statut </th>
                                    <th class="exportable">Validé par</th>
                                    <th class="exportable">Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (Auth::user()->employee->site->purchases->load('products')->reverse() as $pur)
                                    
                                    
                                    <tr id="purchase{{$pur->id}}">
                                        <td><input class="form-check-input m-0 align-middle" type="checkbox"
                                                aria-label="Select invoice"></td>
                                        <td><span class="text-muted">{{$pur->code}}</span></td>
                                        <td> {{$pur->created_at}} </td>
                                        <td>
                                        {{$pur->site->name}}
                                        </td>
                                        <td>
                                            {{$pur->supplier->name}}
                                        </td>
                                        <td>
                                            @if (Auth::user()->is_admin == 2)
                                                <a href={{route('employee.profile')}}>
                                                    {{$pur->initiator->name}}
                                                </a>
                                            @else
                                                <a href={{route('employee.user.show', $pur->initiator->username)}}>
                                                    {{$pur->initiator->name}}
                                                </a>
                                            @endif
                                        </td>
                                        <td>
                                        <select class="btn btn-sm {{($pur->status == 0) ? 'btn-warning' : 'btn-success'}}" name="status" id="status" onchange="updateStatus({{$pur->id}})">
                                                <option {{($pur->status == 0) ? 'selected' : ''}} value="0"> Non livrée </option>
                                                <option {{($pur->status == 1) ? 'selected' : ''}} value="1"> Livrée </option>
                                            </select>
                                        </td>
                                        <td>
                                            @if($pur->validator == null)
                                                <span class="text-warning"> Non validée </span>
                                            @else
                                                @if (Auth::user()->is_admin == 2)
                                                    <a href={{route('employee.profile')}}>
                                                        {{$pur->validator->name}}
                                                    </a>
                                                @else
                                                    <a href={{route('employee.user.show', $pur->validator->username)}}>
                                                        {{$pur->validator->name}}
                                                    </a>
                                                @endif
                                            @endif
                                        </td>
                                        <td>
                                            {{$pur->total()}} Fcfa
                                        </td>
                                        <td class="text-right">
                                            <span class="dropdown">
                                                <button class="btn btn-white btn-sm dropdown-toggle align-text-top"
                                                    data-boundary="viewport" data-toggle="dropdown">Actions</button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href={{route('employee.purchases.show', $pur->id)}}>
                                                        Afficher bon de commande
                                                    </a>
                                                    <a class="dropdown-item" onclick="updatePurchase({{$pur->id}})">
                                                        Modifier
                                                    </a>
                                                    @if ($pur->validator == null)
                                                        <a class="dropdown-item" onclick="validatePurchase({{$pur->id}})">
                                                            Valider
                                                        </a>
                                                    @else
                                                        @if ($pur->validator_id == Auth::user()->id)
                                                            <a class="dropdown-item" onclick="invalidatePurchase({{$pur->id}})">
                                                                Annuler la validation
                                                            </a>
                                                        @else
                                                            <a class="dropdown-item disabled" >
                                                                Annuler la validation
                                                            </a>
                                                        @endif
                                                    @endif
                                                    
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            width="18" height="18" class="mr-2">
                                                            <path fill="none" d="M0 0h24v24H0z" />
                                                            <path
                                                                d="M7 4V2h10v2h5v2h-2v15a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V6H2V4h5zM6 6v14h12V6H6zm3 3h2v8H9V9zm4 0h2v8h-2V9z" />
                                                        </svg>
                                                        Supprimer
                                                    </a>
                                                </div>
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                </div>
                <div class="card-footer d-flex align-items-center">
                    <p class="m-0 text-muted">Affichage <span>1</span> à <span>10</span> de <span>30</span>
                        élements</p>
                    <ul class="pagination m-0 ml-auto">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" />
                                    <polyline points="15 6 9 12 15 18" /></svg>
                                précédent
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">
                                suivant <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                    height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" />
                                    <polyline points="9 6 15 12 9 18" /></svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card col-lg-3 p-3" style="max-height: 700px;">
            <div class="row">
                <div class="col-md-12">
                    <div id="calendar-inline"></div>
                </div>
                <div class="col-md-12 text-center mt-4">
                    <h5 class="font-weight-light" style="font-size: 1rem;">Vous avez dépensé ce mois</h5>
                    <h1 style="font-size: 2.5rem;">1.45m FCFA</h1>
                    <h5 class="order-global-date-2 font-weight-light text-capitalize" style="font-size: 1rem;"></h5>
                </div>
                <div class="col-md-12 mt-3">
                    <div class="row justify-content-between">
                        <div class="col-md-12 pl-2 pr-2 mb-3">
                            <div class="stat-content bg-blue-lt pt-3 pb-2 pl-3 pr-3" style="border-radius: 12px;">
                                <h1>300</h1>
                                <h4>Articles achetés</h4>
                            </div>
                        </div>
                        <div class="col-md-12 pl-2 pr-2 mb-3">
                            <div class="stat-content bg-orange-lt pt-3 pb-2 pl-3 pr-3" style="border-radius: 12px;">
                                <h1>10</h1>
                                <h4>Catégorie</h4>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
            

    <div class="modal-section">
        <div class="modal modal-blur fade" id="modal-pos" .modal();tabindex="-1" role="dialog"
            aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div id="pos-app">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Passer une commande</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" />
                                    <line x1="18" y1="6" x2="6" y2="18" />
                                    <line x1="6" y1="6" x2="18" y2="18" />
                                </svg>
                            </button>
                        </div>
                        <div class="modal-body bg-white">
                            <section class="pos-section">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card border-0 p-0">
                                            <div class="card-body p-0">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row d-flex justify-content-between">
                                                            <div class="col-md-6 mb-4">
                                                                <label class="form-label"> Site </label>
                                                                <select name="role"  id="sites" class="form-select">
                                                                    <option selected> Sélectionnez un site </option>
                                                                    <option value={{Auth::user()->employee->site->id}}> {{Auth::user()->employee->site->name}} </option>
                                                                </select>
                                                            </div>

                                                            <div class="col-md-6 mb-4">
                                                                <label class="form-label"> Fournisseur </label>
                                                                <select name="role" id="suppliers" class="form-select">
                                                                   
                                                                </select>
                                                            </div>
                                                            <div class="col-md-12 mb-4">
                                                                <select name="role" id="products" class="form-select">
                                                                    <option disabled selected>Selectionnez un produit</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="table-responsive transaction-list">
                                                                <table class="table table-hover table-striped table-fixed">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="col-sm-4 ">Nom</th>
                                                                            <th class="col-sm-2 text-center">Prix</th>
                                                                            <th class="col-sm-3 text-center">Quantité</th>
                                                                            <th class="col-sm-3 text-center pl-3">Sous total</th>
                                                                            <th class="col-sm-3 text-center"></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody class="order-list">
                                                                        
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="row">
                                                                <div class="col-sm-4 mb-2">
                                                                    <span class="totals-title mr-3">Produits</span>
                                                                    <span class="product-number">0</span>
                                                                </div>
                                                                <div class="col-sm-4 mb-2">
                                                                    <span class="totals-title mr-3">Total</span>
                                                                    <span class="md total">0</span>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <span class="totals-title mr-3">Transport</span>
                                                                    <span >0.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="payment-amount text-right">
                                                <h4>Grand Total <span class="grand-total" class="h2 ml-2">0</span></h4>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-md-12 mb-4">
                                                    <label class="form-label">Moyen de paiement</label>
                                                    <div
                                                        class="form-selectgroup form-selectgroup-boxes d-flex flex-row">
                                                        <label class="form-selectgroup-item flex-fill">
                                                            <input type="radio" class="paying_method" name="paying_method" value="cash"
                                                                class="form-selectgroup-input" checked>
                                                            <div
                                                                class="form-selectgroup-label d-flex align-items-center p-3">
                                                                <div class="mr-3">
                                                                    <span class="form-selectgroup-check"></span>
                                                                </div>
                                                                <div>
                                                                    <span
                                                                        class="payment payment-provider-cash payment-sm mr-2 shadow-none"></span>
                                                                    Cash
                                                                </div>
                                                            </div>
                                                        </label>
                                                        <label class="form-selectgroup-item flex-fill">
                                                            <input type="radio" class="paying_method" name="paying_method" value="om"
                                                                class="form-selectgroup-input">
                                                            <div
                                                                class="form-selectgroup-label d-flex align-items-center p-3">
                                                                <div class="mr-3">
                                                                    <span class="form-selectgroup-check"></span>
                                                                </div>
                                                                <div>
                                                                    <span
                                                                        class="payment payment-provider-om payment-sm mr-2 shadow-none"></span>
                                                                    Orange Money
                                                                </div>
                                                            </div>
                                                        </label>
                                                        <label class="form-selectgroup-item flex-fill">
                                                            <input type="radio" class="paying_method" name="paying_method" value="momo"
                                                                class="form-selectgroup-input">
                                                            <div
                                                                class="form-selectgroup-label d-flex align-items-center p-3">
                                                                <div class="mr-3">
                                                                    <span class="form-selectgroup-check"></span>
                                                                </div>
                                                                <div>
                                                                    <span
                                                                        class="payment payment-provider-mtn payment-sm mr-2 shadow-none"></span>
                                                                    MOMO
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-md-12 mb-4">
                                                    <label class="form-label"> Etat </label>
                                                    <select name="role" id="status" class="form-select">
                                                        <option value="0">Non livrée</option>
                                                        <option value="1"> livrée </option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="mb-2 mb-0">
                                                    <label class="form-label"> Notes </label>
                                                    <textarea rows="5" class="form-control" id="purchase_text" placeholder="Description">  </textarea>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" style="width: 100%;" onclick="order()">
                                Enregistrer
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal modal-blur fade" id="modal-pos-update" .modal();tabindex="-1" role="dialog" aria-hidden="true"> </div>

        <div class="modal modal-blur fade" id="modal-delete-purchaseorder" tabindex="-1" role="dialog"
            aria-hidden="true">
            <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="modal-title">Êtes vous sure ?</div>
                        <div>
                            Si vous continuez, vous perdrez toutes les
                            données de cette commande.
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link link-secondary mr-auto" data-dismiss="modal">
                            Annuler
                        </button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">
                            Oui, supprimer
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script src={{asset('template/assets/dist/libs/flatpickr/dist/flatpickr.min.js')}}></script>
    <script src={{asset('template/assets/dist/libs/flatpickr/dist/plugins/rangePlugin.js')}}></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js" integrity="sha512-rmZcZsyhe0/MAjquhTgiUcb4d9knaFc7b5xAfju483gbEXTkeJRUMIPk6s3ySZMYUHEcjKbjLjyddGWMrNEvZg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment-with-locales.min.js" integrity="sha512-qSnlnyh7EcD3vTqRoSP4LYsy2yVuqqmnkM9tW4dWo6xvAoxuVXyM36qZK54fyCmHoY1iKi9FJAUZrlPqmGNXFw==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/locale/fr.min.js" integrity="sha512-FdyYwPVGhYAZ83iS8NXHmex3ZLv44/R/9QGKvC6R/LDosWDbhviyZpprKY30ilfxZKcr6sx+LeoxBCBAbs45eg==" crossorigin="anonymous"></script>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.21/af-2.3.5/b-1.6.2/b-colvis-1.6.2/b-flash-1.6.2/b-html5-1.6.2/b-print-1.6.2/cr-1.5.2/r-2.2.5/rr-1.2.7/sp-1.1.1/sl-1.3.1/datatables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#purchases').DataTable({
                 dom: 'Blfrtip',
                buttons: [
                    'colvis',
                    {
                        extend: 'copy',
                        text: 'Copier',
                        title : 'Easytrack',
                        exportOptions: {
                            columns: '.exportable',
                        }
                    },
                    {
                        extend: 'excel',
                        text: 'Excel',
                        title : 'Easytrack',
                        exportOptions: {
                            columns: '.exportable',
                        }
                    },
                    {
                        extend: 'csv',
                        text: 'CSV',
                        title : 'Easytrack',
                        exportOptions: {
                            columns: '.exportable',
                        }
                    },
                    {
                        extend: 'pdf',
                        text: 'PDF',
                        title : 'Easytrack',
                        exportOptions: {
                            columns: '.exportable'
                        }
                    },
                ],
                select: false,
                colReorder: true,
            });
        } );
    </script>
    

    <script>
        let products = [];

        function calculate(){
            var total = 0;
            $.each(products, function (key, val) {
                total  += parseInt($("#qty-"+val).data('qty')) * parseInt($("#price-"+val).data('price'));
                $("#subtotal-"+val).html(parseInt($("#qty-"+val).data('qty')) * parseInt($("#price-"+val).data('price')));
                $("#subtotal-"+val).data('subtotal', parseInt($("#qty-"+val).data('qty')) * parseInt($("#price-"+val).data('price')));
            })
            console.log(total);
            $(".grand-total").html(total);
            $(".total").html(total);
        }

        function removeElement(el) {
            $("#product-"+el).remove().fadeOut(1000);

            products = jQuery.grep(products, function(value) {
                return value != el;
            });

            $(".product-number").html(products.length);
            calculate();
        }
        function addElement(el) {
            console.log(el);
            if(products.includes(el.data('id'))){
                updateQty(el.data('id'));
            } else{

                $('.order-list').append(
                    '<tr id="product-'+el.data("id")+'">' +
                    '    <td class="col-sm-4">' +
                    '        <button type="button" class="btn btn-link">' +
                    '            <strong id="name-'+el.data("id")+'" data-name="'+el.text()+'"> '+el.text()+' </strong>' +
                    '        </button>' +
                    '    </td>' +
                    '    <td class="text-center col-sm-2" id="price-'+el.data("id")+'"  data-price="'+el.data("price")+'"> '+el.data("price")+' </td>' +
                    '    <td class="col-sm-3">' +
                    '        <div class="input-group">' +
                    '            <span class="input-group-btn mr-1">' +
                    '                <a class="btn btn-light p-1" id="minus-'+el.data("id")+'" onclick="updateQty('+el.data("id")+', -1)">' +
                    '                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="15" height="15"><path fill="none" d="M0 0h24v24H0z"/><path d="M5 11h14v2H5z" fill="rgba(0,0,0,1)"/></svg>' +
                    '                </a>' +
                    '            </span>' +
                    '                <input type="text" class="quantity-input form-control p-0 text-center border-0" value="1" id="qty-'+el.data("id")+'" data-total="'+el.data("qty")+'" data-qty="1" required  oninput="updateQty('+el.data("id")+', '+this.value+')">' +
                    '            <span class="input-group-btn ml-1">' +
                    '                <a class="btn btn-light p-1" id="plus-'+el.data("id")+'" onclick="updateQty('+el.data("id")+')">' +
                    '                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="15" height="15"><path fill="none" d="M0 0h24v24H0z"/><path d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z" fill="rgba(0,0,0,1)"/></svg>' +
                    '                </a>' +
                    '            </span>' +
                    '        </div>' +
                    '    </td>' +
                    '    <td class="text-center" id="subtotal-'+el.data("id")+'" data-subtotal="'+el.data("price")+'">'+el.data("price")+'</td>' +
                    '    <td class="col-sm-2">' +
                    '        <a class="btn btn-danger p-1 delete" data-product="'+el.data("id")+'" onclick="removeElement('+el.data("id")+')" ><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z" fill="rgba(255,255,255,1)"/></svg></a>' +
                    '    </td>' +
                    '</tr>'
                );
                products.push(el.data('id'));
                $(".product-number").html(products.length);
                calculate();
            }
        }

        function updateQty(el, one = 1){
            console.log(el);
            var  product = $("#qty-"+el);
            var nbr;
            if(one != 1 && one != -1) nbr = one;
            else  {
                nbr = parseInt(product.val()) + one;
            }
            if(nbr >= 1){
                product.data('qty', nbr);
                product.val(nbr);
            }
            calculate();
        }

        $('#products').change(function () {

            console.log($(this).children('option:selected').data());
            element = ($(this).children('option:selected'));
            addElement(element);
        });

        function order() {
            var token = '{{@csrf_token()}}';
            var order = '';
            var site = $("#sites").val();
            var supplier = $("#suppliers").val();
            var paying_method = $("input[type='radio']:checked").val();
            var status = $("#status").val();
            var purchase_text = $("#purchase_text").val();
            $.each(products, function (key, val) {
                id = val;
                qty = $("#qty-"+val).data('qty');
                price = $("#price-"+val).data('price');
                order += id+';'+qty+';'+price+';0|';
            });
            
            $.ajax({
                url: '/employee/purchases',
                method: 'post',
                data: {
                    _token: token,
                    order : order,
                    site_id : site,
                    supplier_id: supplier,
                    status: status,
                    paying_method: paying_method,
                    purchase_text: purchase_text
                },
                success: function(data){
                    location.reload();
                }

            });
        }

        $("#sites").change(function(){
            var token = '{{@csrf_token()}}';
            var site = $(this).val();

            $.ajax({
                url: '/employee/purchases/site',
                method: 'get',
                data: {
                    _token: token,
                    site_id: site
                    
                },
                success: function(data){
                    $("#suppliers").html(data.suppliers);
                    $("#products").html(data.products);
                }

            });
        });

        function updatePurchase(id){
            var token = '{{csrf_token()}}';

            $.ajax({
                url: '/employee/purchases/'+id,
                method: 'post',
                data: {
                    _token: token
                },
                success: function(data){
                    $("#modal-pos").html(data).modal();
                }
            });
        }

        function validatePurchase(id){
            var token  = '{{csrf_token()}}';

            $.ajax({
                url: '/employee/purchases/'+id+'/validate',
                method: 'post',
                data: {
                    _token: token
                },
                success: function(data){
                    // console.log(data);
                    location.reload();
                }
            });
        }

        function invalidatePurchase(id){
            var token  = '{{csrf_token()}}';

            $.ajax({
                url: '/employee/purchases/'+id+'/invalidate',
                method: 'post',
                data: {
                    _token: token
                },
                success: function(data){
                    // console.log(data);
                    location.reload();
                }
            });
        }

        function updateStatus(id){
            var token  = '{{csrf_token()}}';

            $.ajax({
                url: '/employee/purchases/'+id+'/status',
                method: 'post',
                data: {
                    _token: token
                },
                success: function(data){
                    // console.log(data);
                    location.reload();
                }
            });
        }

    </script>
    <script>
        document.body.style.display = "block";
        $(document).ready(function() {
            var today = moment().format('MMMM Do, YYYY');
            $( ".order-global-date" ).text( today );
            $( ".order-global-date-2" ).text( today );
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            flatpickr(document.getElementById('calendar-inline'), {
                inline: true,
            });
        });
    </script>
@endsection

@section('styles')
    <link href={{asset("template/assets/dist/libs/flatpickr/dist/flatpickr.min.css")}} rel="stylesheet"/>
    <link href={{asset("template/assets/dist/css/easytrak-payments.min.css")}} rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.21/af-2.3.5/b-1.6.2/b-colvis-1.6.2/b-flash-1.6.2/b-html5-1.6.2/b-print-1.6.2/cr-1.5.2/r-2.2.5/rr-1.2.7/sp-1.1.1/sl-1.3.1/datatables.min.css"/>
@endsection