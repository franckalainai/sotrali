<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <title>SOTRALI</title>

</head>
<body>

<div class="container" style="margin-top: 50px;">

    <h4 class="text-center">SOTRALI</h4><br>

    <h5># AJouter les destinations</h5>
    <div class="card card-default">
        <div class="card-body">
            <form id="addCustomer" class="form-inline" method="POST" action="">
                <div class="row">
                <div class="col-md-3">
                <div class="form-row align-items-center">

                    <label for="depart" class="sr-only">Commune de départ</label>
                    <!--
                        <input id="name" type="text" class="form-control" name="name" placeholder="Name"
                        required autofocus>
                    -->
                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="depart" id="depart">
                        <option>Commune départ</option>
                        <option value="Abobo">Abobo</option>
                        <option value="Adjamé">Adjamé</option>
                        <option value="Cocody">Cocody</option>
                        <option value="Yopougon">Yopougon</option>
                      </select>
                </div>
                </div>

                <div class="col-md-3">
                <div class="form-row align-items-center">
                    <label for="arrivee" class="sr-only">arrivee</label>
                    <!--
                    <input id="email" type="email" class="form-control" name="email" placeholder="Email"
                           required autofocus>
                    -->
                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="arrivee" id="arrivee">
                        <option>Commune arrivée</option>
                        <option value="Abobo">Abobo</option>
                        <option value="Adjamé">Adjamé</option>
                        <option value="Cocody">Cocody</option>
                        <option value="Yopougon">Yopougon</option>
                      </select>
                </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group mx-sm-3 mb-2">
                        <label for="bus" class="sr-only">Bus</label>
                        <input id="bus" type="bus" class="form-control" name="bus" placeholder="N° de bus"
                                required autofocus>
                    </div>
                    </div>

                    <div class="col-md-3">
                    <div class="form-group mx-sm-3 mb-2">
                        <label for="bus" class="sr-only">Tarif</label>
                        <input id="tarif" type="tarif" class="form-control" name="tarif" placeholder="Tarif"
                                required autofocus>
                    </div>
                </div>
            </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group mx-sm-3 mb-2">
                            <label for="longitude" class="sr-only">Longitude</label>
                            <input id="longitude" type="longitude" class="form-control" name="longitude" placeholder="Longitude"
                                    required autofocus>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group mx-sm-3 mb-2">
                            <label for="latitude" class="sr-only">Latitude</label>
                            <input id="latitude" type="latitude" class="form-control" name="latitude" placeholder="Latitude"
                                    required autofocus>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group mx-sm-3 mb-2">
                            <label for="date" class="sr-only">Date</label>
                            <input id="date" type="date" class="form-control" name="date" placeholder="Date"
                                    required autofocus>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mx-sm-3 mb-2">
                            <label for="hdepart" class="sr-only">Heure de Départ</label>
                            <input id="hdepart" type="hdepart" class="form-control" name="hdepart" placeholder="Heure de Départ"
                                    required autofocus>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group mx-sm-3 mb-2">
                            <label for="harrivee" class="sr-only">Heure d'Arrivée</label>
                            <input id="harrivee" type="harrivee" class="form-control" name="harrivee" placeholder="Heure d'Arrivée"
                                    required autofocus>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mx-sm-3 mb-2">
                            <label for="pdepart" class="sr-only">Premier Départ</label>
                            <input id="pdepart" type="pdepart" class="form-control" name="pdepart" placeholder="Premier Départ"
                                    required autofocus>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group mx-sm-3 mb-2">
                            <label for="ddepart" class="sr-only">Dernier Départ</label>
                            <input id="ddepart" type="ddepart" class="form-control" name="ddepart" placeholder="Dernier Départ"
                                    required autofocus>
                        </div>
                    </div>
                </div>
                <button id="submitCustomer" type="button" class="btn btn-primary mb-2">Envoyer</button>

            </form>
        </div>
    </div>

    <br>

    <h5># Voir la liste destinations</h5>
    <table class="table table-bordered">
        <tr>
            <th>Départ</th>
            <th>Arrivée</th>
            <th>N° de Bus</th>
            <th>Tarif</th>
            <th>Longitude</th>
            <th>Latitude</th>
            <th>Date</th>
            <th>H/Départ</th>
            <th>H/Arrivée</th>
            <th>1er Départ</th>
            <th>Dernier Départ</th>
            <th width="100" class="text-center">Actions</th>
        </tr>
        <tbody id="tbody">

        </tbody>
    </table>
</div>

<!-- Update Model -->
<form action="" method="POST" class="users-update-record-model form-horizontal">
    <div id="update-modal" data-backdrop="static" data-keyboard="false" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="width:55%;">
            <div class="modal-content" style="overflow: hidden;">
                <div class="modal-header">
                    <h4 class="modal-title" id="custom-width-modalLabel">Editer</h4>
                    <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">×
                    </button>
                </div>
                <div class="modal-body" id="updateBody">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light"
                            data-dismiss="modal">Fermer
                    </button>
                    <button type="button" class="btn btn-success updateCustomer">Editer
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>

<!-- Delete Model -->
<form action="" method="POST" class="users-remove-record-model">
    <div id="remove-modal" data-backdrop="static" data-keyboard="false" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel"
         aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-dialog-centered" style="width:55%;">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="custom-width-modalLabel">Supprimer</h4>
                    <button type="button" class="close remove-data-from-delete-form" data-dismiss="modal"
                            aria-hidden="true">×
                    </button>
                </div>
                <div class="modal-body">
                    <p>Voulez-vous supprimer cette ligne ?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect remove-data-from-delete-form"
                            data-dismiss="modal">Fermer
                    </button>
                    <button type="button" class="btn btn-danger waves-effect waves-light deleteRecord">Supprimer
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>


{{--Firebase Tasks--}}
<script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.10.1/firebase.js"></script>
<script>
    // Initialize Firebase
    var config = {
        apiKey: "{{ config('services.firebase.apiKey') }}",
        authDomain: "{{ config('services.firebase.authDomain') }}",
        databaseURL: "{{ config('services.firebase.databaseURL') }}",
        storageBucket: "{{ config('services.firebase.storageBucket') }}",
    };
    firebase.initializeApp(config);

    var database = firebase.database();

    var lastIndex = 0;

    // Get Data
    firebase.database().ref('sotrali/').on('value', function (snapshot) {
        var value = snapshot.val();
        var htmls = [];
        $.each(value, function (index, value) {
            if (value) {
                htmls.push('<tr>\
        		<td>' + value.depart + '</td>\
        		<td>' + value.arrivee + '</td>\
                <td>' + value.bus + '</td>\
                <td>' + value.tarif + '</td>\
                <td>' + value.longitude + '</td>\
                <td>' + value.latitude + '</td>\
                <td>' + value.date + '</td>\
                <td>' + value.hdepart + '</td>\
                <td>' + value.harrivee + '</td>\
                <td>' + value.pdepart + '</td>\
                <td>' + value.ddepart + '</td>\
        		<td><button data-toggle="modal" data-target="#update-modal" class="btn btn-info updateData" data-id="' + index + '">Editer</button>\
        		<button data-toggle="modal" data-target="#remove-modal" class="btn btn-danger removeData" data-id="' + index + '">Supprimer</button></td>\
        	</tr>');
            }
            lastIndex = index;
        });
        $('#tbody').html(htmls);
        $("#submitUser").removeClass('desabled');
    });

    // Add Data
    $('#submitCustomer').on('click', function () {
        var values = $("#addCustomer").serializeArray();
        var depart = values[0].value;
        var arrivee = values[1].value;
        var bus = values[2].value;
        var tarif = values[3].value;
        var longitude = values[4].value;
        var latitude = values[5].value;
        var date = values[6].value;
        var hdepart = values[7].value;
        var harrivee = values[8].value;
        var pdepart = values[8].value;
        var ddepart = values[10].value;
        var userID = lastIndex + 1;

        console.log(values);

        firebase.database().ref('sotrali/' + userID).set({
            depart: depart,
            arrivee: arrivee,
            bus: bus,
            tarif: tarif,
            longitude: longitude,
            latitude: latitude,
            date: date,
            hdepart : hdepart,
            harrivee : harrivee,
            pdepart :pdepart,
            ddepart : ddepart,
        });

        // Reassign lastID value
        lastIndex = userID;
        $("#addCustomer input").val("");
    });

    // Update Data
    var updateID = 0;
    $('body').on('click', '.updateData', function () {
        updateID = $(this).attr('data-id');
        firebase.database().ref('sotrali/' + updateID).on('value', function (snapshot) {
            var values = snapshot.val();
            var updateData =
            '<div class="form-group">\
		        <label for="first_name" class="col-md-12 col-form-label">Depart</label>\
		        <div class="col-md-12">\
		            <input id="first_name" type="text" class="form-control" name="depart" value="' + values.depart + '" required autofocus>\
		        </div>\
		    </div>\
		    <div class="form-group">\
		        <label for="last_name" class="col-md-12 col-form-label">Arrivee</label>\
		        <div class="col-md-12">\
		            <input id="last_name" type="text" class="form-control" name="arrivee" value="' + values.arrivee + '" required autofocus>\
		        </div>\
		    </div>\
            <div class="form-group">\
		        <label for="first_name" class="col-md-12 col-form-label">Bus</label>\
		        <div class="col-md-12">\
		            <input id="first_name" type="text" class="form-control" name="bus" value="' + values.bus + '" required autofocus>\
		        </div>\
		    </div>\
            <div class="form-group">\
		        <label for="first_name" class="col-md-12 col-form-label">Tarif</label>\
		        <div class="col-md-12">\
		            <input id="first_name" type="text" class="form-control" name="tarif" value="' + values.tarif + '" required autofocus>\
		        </div>\
		    </div>\
            <div class="form-group">\
		        <label for="first_name" class="col-md-12 col-form-label">Longitude</label>\
		        <div class="col-md-12">\
		            <input id="first_name" type="text" class="form-control" name="longitude" value="' + values.longitude + '" required autofocus>\
		        </div>\
		    </div>\
            <div class="form-group">\
		        <label for="first_name" class="col-md-12 col-form-label">Latitude</label>\
		        <div class="col-md-12">\
		            <input id="first_name" type="text" class="form-control" name="longitude" value="' + values.latitude + '" required autofocus>\
		        </div>\
		    </div>\
            <div class="form-group">\
		        <label for="first_name" class="col-md-12 col-form-label">Date</label>\
		        <div class="col-md-12">\
		            <input id="first_name" type="text" class="form-control" name="date" value="' + values.date + '" required autofocus>\
		        </div>\
		    </div>\
            <div class="form-group">\
		        <label for="first_name" class="col-md-12 col-form-label">Heure de Départ</label>\
		        <div class="col-md-12">\
		            <input id="first_name" type="text" class="form-control" name="hdepart" value="' + values.hdepart + '" required autofocus>\
		        </div>\
		    </div>\
            <div class="form-group">\
		        <label for="first_name" class="col-md-12 col-form-label">Heure d\'arrivée</label>\
		        <div class="col-md-12">\
		            <input id="first_name" type="text" class="form-control" name="harrivee" value="' + values.harrivee + '" required autofocus>\
		        </div>\
		    </div>\
            <div class="form-group">\
		        <label for="first_name" class="col-md-12 col-form-label">Premier Départ</label>\
		        <div class="col-md-12">\
		            <input id="first_name" type="text" class="form-control" name="pdepart" value="' + values.pdepart + '" required autofocus>\
		        </div>\
		    </div>\
            <div class="form-group">\
		        <label for="first_name" class="col-md-12 col-form-label">Dernier Départ</label>\
		        <div class="col-md-12">\
		            <input id="first_name" type="text" class="form-control" name="ddepart" value="' + values.ddepart + '" required autofocus>\
		        </div>\
		    </div>';

            $('#updateBody').html(updateData);
        });
    });

    $('.updateCustomer').on('click', function () {
        var values = $(".users-update-record-model").serializeArray();
        var postData = {
            depart: values[0].value,
            arrivee: values[1].value,
            bus: values[2].value,
            tarif: values[3].value,
            longitude: values[4].value,
            latitude: values[5].value,
            date: values[6].value,
            hdepart : values[7].value,
            harrivee : values[8].value,
            pdepart : values[9].value,
            ddepart : values[10].value,
        };

        var updates = {};
        updates['/sotrali/' + updateID] = postData;

        firebase.database().ref().update(updates);

        $("#update-modal").modal('hide');
    });

    // Remove Data
    $("body").on('click', '.removeData', function () {
        var id = $(this).attr('data-id');
        $('body').find('.users-remove-record-model').append('<input name="id" type="hidden" value="' + id + '">');
    });

    $('.deleteRecord').on('click', function () {
        var values = $(".users-remove-record-model").serializeArray();
        var id = values[0].value;
        firebase.database().ref('sotrali/' + id).remove();
        $('body').find('.users-remove-record-model').find("input").remove();
        $("#remove-modal").modal('hide');
    });
    $('.remove-data-from-delete-form').click(function () {
        $('body').find('.users-remove-record-model').find("input").remove();
    });
</script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script src="/js/moment.min.js"></script>
<script src="/js/bootstrap-datetimepicker.min.js"></script>
<script>
    $function(){
        $(#date).datetimepicker({
    });
</script>

</body>
</html>
