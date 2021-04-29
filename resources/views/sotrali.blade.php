<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SOTRALI</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <style type="text/css">
    .desabled {
        pointer-events: none;
    }
    </style>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>




</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    @include('layouts.nav')
    @include('layouts.sidebar')
    <section class="content">
        <div class="container-fluid">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">SOTRALI</a></li>
                  <li class="breadcrumb-item active">Dashboard</li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-10">
                                <strong>Enregistrer les destinations</strong>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form id="addUser" class="" method="POST" action="">

                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                            <select class="form-control" name="depart" id="depart">
                                                <option>Commune de départ</option>
                                                <option value="Abobo">Abobo</option>
                                                <option value="Adjamé">Adjamé</option>
                                                <option value="Attécoubé">Attécoubé</option>
                                                <option value="Yopougon">Yopougon</option>
                                                <option value="Plateau">Plateau</option>
                                                <option value="Cocody">Cocody</option>
                                                <option value="Treichville">Treichville</option>
                                                <option value="Marcory">Marcory</option>
                                                <option value="Koumassi">Koumassi</option>
                                                <option value="Port Bouet">Port Bouet</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <select class="form-control"  name="arrivee" id="arrivee">
                                            <option>Commune d'arrivée</option>
                                                <option>Commune de départ</option>
                                                <option value="Abobo">Abobo</option>
                                                <option value="Adjamé">Adjamé</option>
                                                <option value="Attécoubé">Attécoubé</option>
                                                <option value="Yopougon">Yopougon</option>
                                                <option value="Plateau">Plateau</option>
                                                <option value="Cocody">Cocody</option>
                                                <option value="Treichville">Treichville</option>
                                                <option value="Marcory">Marcory</option>
                                                <option value="Koumassi">Koumassi</option>
                                                <option value="Port Bouet">Port Bouet</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <input name="bus" id="bus" type="text" class="form-control" placeholder="N° de Bus">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <input name="tarif" id="tarif" type="text" class="form-control" placeholder="Tarif">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <input name="longitude" id="longitude" type="text" class="form-control" placeholder="Longitude">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <input name="latitude" id="latitude" type="text" class="form-control" placeholder="Latitude">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <input name="pdepart" id="pdepart" type="text" class="form-control" placeholder="Premier départ">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <input name="ddepart" id="ddepart" type="text" class="form-control" placeholder="Dernier départ">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <select class="form-control"  name="dispo" id="dispo">
                                            <option>Indisponibilité</option>
                                                <option value="Lundi">Lundi</option>
                                                <option value="Mardi">Mardi</option>
                                                <option value="Mercredi">Mercredi</option>
                                                <option value="Jeudi">Jeudi</option>
                                                <option value="Vendredi">Vendredi</option>
                                                <option value="Samedi">Samedi</option>
                                                <option value="Dimanche">Dimanche</option>
                                            </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-4">
                                    <button id="submitUser" type="button" class="btn btn-raised btn-primary btn-round waves-effect">Enregistrer</button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-10">
                                <strong>All sotrali Listing</strong>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <table id="example" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Commune de départ</th>
                                    <th>Commune d'arrivée</th>
                                    <th>N° Bus</th>
                                    <th>Tarif</th>
                                    <th>Longitude</th>
                                    <th>Latitude</th>
                                    <th>Premier départ</th>
                                    <th>Dernier départ</th>
                                    <th>Pas Dispo</th>
                                    <th width="180" class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody id="tbody">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Model -->
    <form action="" method="POST" class="sotrali-remove-record-model">
        <div id="remove-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog" style="width:55%;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="custom-width-modalLabel">Delete Record</h4>
                        <button type="button" class="close remove-data-from-delete-form" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <h4>You Want You Sure Delete This Record?</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default waves-effect remove-data-from-delete-form" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-danger waves-effect waves-light deleteMatchRecord">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- Update Model -->
    <form action="" method="POST" class="sotrali-update-record-model form-horizontal">
        <div id="update-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog" style="width:55%;">
                <div class="modal-content" style="overflow: hidden;">
                    <div class="modal-header">
                        <h4 class="modal-title" id="custom-width-modalLabel">Update Record</h4>
                        <button type="button" class="close update-data-from-delete-form" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body" id="updateBody">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default waves-effect update-data-from-delete-form" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success waves-effect waves-light updateUserRecord">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    </div>
</section>

    <script src="https://www.gstatic.com/firebasejs/4.9.1/firebase.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

<script>
$(function(){
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
firebase.database().ref('sotrali/').on('value', function(snapshot) {
    var value = snapshot.val();
    var htmls = [];
    $.each(value, function(index, value){
    	if(value) {
    		htmls.push('<tr>\
        		<td>' + value.depart + '</td>\
        		<td>' + value.arrivee + '</td>\
                <td>' + value.bus + '</td>\
                <td>' + value.tarif + '</td>\
                <td>' + value.longitude + '</td>\
                <td>' + value.latitude + '</td>\
                <td>' + value.pdepart + '</td>\
                <td>' + value.ddepart + '</td>\
                <td>' + value.dispo + '</td>\
        		<td><button data-toggle="modal" data-target="#update-modal" class="btn btn-info updateData" data-id="' + index + '">Editer</button>\
        		<button data-toggle="modal" data-target="#remove-modal" class="btn btn-danger removeData" data-id="' + index + '">Delete</button></td>\
        	</tr>');
    	}
    	lastIndex = index;
    });
    $('#tbody').html(htmls);
    $("#submitUser").removeClass('desabled');
    $('#example').DataTable();
});




// Add Data
$('#submitUser').on('click', function(){
	var values = $("#addUser").serializeArray();
	var depart = values[0].value;
        var arrivee = values[1].value;
        var bus = values[2].value;
        var tarif = values[3].value;
        var longitude = values[4].value;
        var latitude = values[5].value;
        var pdepart = values[6].value;
        var ddepart = values[7].value;
        var dispo = values[8].value;
	var userID = lastIndex+1;

    firebase.database().ref('sotrali/' + userID).set({
            depart: depart,
            arrivee: arrivee,
            bus: bus,
            tarif: tarif,
            longitude: longitude,
            latitude: latitude,
            pdepart :pdepart,
            ddepart : ddepart,
            dispo : dispo,
    });

    // Reassign lastID value
    lastIndex = userID;
	$("#addUser input").val("");
});

// Update Data
var updateID = 0;
$('body').on('click', '.updateData', function() {
	updateID = $(this).attr('data-id');
	firebase.database().ref('sotrali/' + updateID).on('value', function(snapshot) {
		var values = snapshot.val();
		var updateData = '<div class="form-group">\
		        <label for="depart" class="col-md-12 col-form-label">Depart</label>\
		        <div class="col-md-12">\
		            <input id="depart" type="text" class="form-control" name="depart" value="' + values.depart + '" required autofocus>\
		        </div>\
		    </div>\
		    <div class="form-group">\
		        <label for="arrivee" class="col-md-12 col-form-label">Arrivee</label>\
		        <div class="col-md-12">\
		            <input id="arrivee" type="text" class="form-control" name="arrivee" value="' + values.arrivee + '" required autofocus>\
		        </div>\
		    </div>\
            <div class="form-group">\
		        <label for="bus" class="col-md-12 col-form-label">Bus</label>\
		        <div class="col-md-12">\
		            <input id="bus" type="text" class="form-control" name="bus" value="' + values.bus + '" required autofocus>\
		        </div>\
		    </div>\
            <div class="form-group">\
		        <label for="tarif" class="col-md-12 col-form-label">Tarif</label>\
		        <div class="col-md-12">\
		            <input id="tarif" type="text" class="form-control" name="tarif" value="' + values.tarif + '" required autofocus>\
		        </div>\
		    </div>\
            <div class="form-group">\
		        <label for="longitude" class="col-md-12 col-form-label">Longitude</label>\
		        <div class="col-md-12">\
		            <input id="longitude" type="text" class="form-control" name="longitude" value="' + values.longitude + '" required autofocus>\
		        </div>\
		    </div>\
            <div class="form-group">\
		        <label for="latitude" class="col-md-12 col-form-label">Latitude</label>\
		        <div class="col-md-12">\
		            <input id="latitude" type="text" class="form-control" name="longitude" value="' + values.latitude + '" required autofocus>\
		        </div>\
		    </div>\
            <div class="form-group">\
		        <label for="pdepart" class="col-md-12 col-form-label">Premier Départ</label>\
		        <div class="col-md-12">\
		            <input id="pdepart" type="text" class="form-control" name="pdepart" value="' + values.pdepart + '" required autofocus>\
		        </div>\
		    </div>\
            <div class="form-group">\
		        <label for="ddepart" class="col-md-12 col-form-label">Dernier Départ</label>\
		        <div class="col-md-12">\
		            <input id="ddepart" type="text" class="form-control" name="ddepart" value="' + values.ddepart + '" required autofocus>\
		        </div>\
		    </div>\
            <div class="form-group">\
		        <label for="dispo" class="col-md-12 col-form-label">Indisponibilité</label>\
		        <div class="col-md-12">\
		            <input id="dispo" type="text" class="form-control" name="dispo" value="' + values.dispo + '" required autofocus>\
		        </div>\
		    </div>';

		    $('#updateBody').html(updateData);
	});
});

$('.updateUserRecord').on('click', function() {
	var values = $(".sotrali-update-record-model").serializeArray();
	var postData = {

        depart: values[0].value,
            arrivee: values[1].value,
            bus: values[2].value,
            tarif: values[3].value,
            longitude: values[4].value,
            latitude: values[5].value,
            pdepart : values[6].value,
            ddepart : values[7].value,
            dispo : values[8].value,
	};

	var updates = {};
	updates['/sotrali/' + updateID] = postData;

	firebase.database().ref().update(updates);

	$("#update-modal").modal('hide');
});


// Remove Data
$("body").on('click', '.removeData', function() {
	var id = $(this).attr('data-id');
	$('body').find('.sotrali-remove-record-model').append('<input name="id" type="hidden" value="'+ id +'">');
});

$('.deleteMatchRecord').on('click', function(){
	var values = $(".sotrali-remove-record-model").serializeArray();
	var id = values[0].value;
	firebase.database().ref('sotrali/' + id).remove();
    $('body').find('.sotrali-remove-record-model').find( "input" ).remove();
	$("#remove-modal").modal('hide');
});
$('.remove-data-from-delete-form').click(function() {
	$('body').find('.sotrali-remove-record-model').find( "input" ).remove();
});


});


</script>



    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>

</body>
</html>
