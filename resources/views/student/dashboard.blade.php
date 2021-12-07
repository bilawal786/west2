@extends('layouts.front')
@section('style')
    <style>
        /* Style the tab */
        .tab {
            float: left;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
            width: 20%;
            height: auto;
        }

        /* Style the buttons inside the tab */
        .tab button {
            display: block;
            background-color: inherit;
            color: black;
            padding: 22px 16px;
            width: 100%;
            border: none;
            outline: none;
            text-align: left;
            cursor: pointer;
            transition: 0.3s;
            font-size: 17px;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            background-color: #ddd;
        }

        /* Create an active/current "tab button" class */
        .tab button.active {
            background-color: #97c249;
        }

        /* Style the tab content */
        .tabcontent {
            float: left;
            padding: 0px 12px;
            border: 1px solid #ccc;
            width: 80%;
            border-left: none;
            height: auto;
        }
        @media only screen and (max-width: 600px) {
            .tab{
                width: 100%;
            }
            .tabcontent{
                width: 100%;
            }
        }
    </style>
@endsection
@section('content')
    <!-- Page Content-->
    <main class="page-content" style="margin-top: 50px">
        <section class="section-55 section-lg-top-115 section-lg-bottom-115 text-sm-left">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tab">
                            <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Tableau de bord</button>
{{--                            <a href=""> <button class="tablinks">Produits</button></a>--}}
                            <button class="tablinks" onclick="openCity(event, 'Paris')">Mes Commandes</button>
                            <button class="tablinks" onclick="openCity(event, 'Tokyo')">Détails du compte</button>
                            <a href="{{route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <button class="tablinks">Sortie</button>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>

                        <div id="London" class="tabcontent">
                            <h5>Bonjour <b>{{Auth::user()->fname}} {{Auth::user()->lname}} , </b></h5>
                            <br>
                            <h5> Bienvenue dans votre espace privé.</h5>
                            <br>
                            <h5> Vous y touverez egalement vos commandes, et le détails de votre compte.</h5>
                            <br>
                        </div>

                        <div id="Paris" class="tabcontent">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <tbody>
                                    <tr>
                                        <th>COMMANDES</th>
                                        <th>DATE</th>
                                        <th>STATUT</th>
                                        <th>TOTAL</th>
                                        <th></th>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div id="Tokyo" class="tabcontent">
                            <form action="{{route('user.profileupdate')}}" method="POST" class="kenne-form" accept-charset="UTF-8" enctype="multipart/form-data">
                                @csrf
                                <div class="kenne-form-inner">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Prenom*</label>
                                            <input type="text" class="form-control" value="{{$user->fname}}" name="fname" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Nom*</label>
                                            <input type="text" class="form-control" value="{{$user->lname}}" name="lname" required>
                                        </div>
                                    </div>
                                    <div class="single-input single-input-half">
                                        <label for="account-details-lastname">Telephone*</label>
                                        <input class="form-control" type="text" value="{{$user->phone}}" name="phone" required>
                                    </div>
                                    <div class="single-input single-input-half">
                                        <label for="account-details-email">Email*</label>
                                        <input class="form-control" type="email" value="{{$user->email}}" name="email" readonly>
                                    </div>
                                    <div class="single-input">
                                        <label for="account-details-email">Adresse*</label>
                                        <input class="form-control" type="text" value="{{$user->address}}" name="address" required>
                                    </div>
                                    <div class="single-input single-input-half">
                                        <label for="account-details-email">Pays*</label>
                                        <input class="form-control" type="text" name="country" value="{{$user->country}}">
                                    </div>
                                    <!--                                <div class="single-input single-input-half">
                                                                        <label for="account-details-email">Photo*</label>
                                                                        <input type="file" name="photo">
                                                                    </div>-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Mot de passe actuel (laisser vide pour laisser
                                                inchangé)</label>
                                            <input class="form-control" type="password" name="oldpassword">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Nouveau mot de passe (laisser vide pour laisser
                                                inchangé)</label>
                                            <input class="form-control" type="password" name="newpassword">
                                        </div>
                                    </div>
                                    <div class="single-input" style="margin-top: 20px">
                                        <button class="btn btn-primary" type="submit"><span>SAUVEGARDER
                                                    CHANGEMENTS</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
@section('script')
    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>
@endsection
