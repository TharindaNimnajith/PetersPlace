<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Peter's Place || Room Management</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" />

    <style>
        .room_mngmnt a {
            text-decoration: none;
            color: white;
        }

        .row2 {
            margin-left: 10%;
            margin-right: 10%;
            margin-top: -20px;
        }

        body {
            color: #566787;
            background: #f5f5f5;
            font-family: 'Varela Round', sans-serif;
            font-size: 13px;
        }

        .table-wrapper {
            background: #fff;
            padding: 20px 25px;
            margin: 30px 0;
            border-radius: 3px;
            box-shadow: 0 1px 1px rgba(0,0,0,.05);
        }

        .table-title {        
            padding-bottom: 15px;
            background: #435d7d;
            color: #fff;
            padding: 16px 30px;
            margin: -20px -25px 10px;
            border-radius: 3px 3px 0 0;
        }

        .table-title h2 {
            margin: 5px 0 0;
            font-size: 24px;
        }

        .table-title .btn-group {
            float: right;
        }

        .table-title .btn {
            color: #fff;
            float: right;
            font-size: 13px;
            border: none;
            min-width: 50px;
            border-radius: 2px;
            border: none;
            outline: none !important;
            margin-left: 10px;
        }

        .table-title .btn i {
            float: left;
            font-size: 21px;
            margin-right: 5px;
        }

        .table-title .btn span {
            float: left;
            margin-top: 2px;
        }

        table.table tr th, table.table tr td {
            border-color: #e9e9e9;
            padding: 12px 15px;
            vertical-align: middle;
        }

        table.table tr th:first-child {
            width: 100px;
        }

        table.table tr th:last-child {
            width: 150px;
        }

        table.table-striped tbody tr:nth-of-type(odd) {
            background-color: #fcfcfc;
        }

        table.table-striped.table-hover tbody tr:hover {
            background: #f5f5f5;
        }

        table.table th i {
            font-size: 13px;
            margin: 0 5px;
            cursor: pointer;
        }	

        table.table td:last-child i {
            opacity: 0.9;
            font-size: 22px;
            margin: 0 5px;
        }

        table.table td a {
            font-weight: bold;
            color: #566787;
            display: inline-block;
            text-decoration: none;
            outline: none !important;
        }

        table.table td a:hover {
            color: #2196F3;
        }

        table.table td a.edit {
            color: #FFC107;
        }

        table.table td a.delete {
            color: #F44336;
        }

        table.table td i {
            font-size: 19px;
        }

        table.table .avatar {
            border-radius: 50%;
            vertical-align: middle;
            margin-right: 10px;
        }

        .pagination {
            float: right;
            margin: 0 0 5px;
        }

        .pagination li a {
            border: none;
            font-size: 13px;
            min-width: 30px;
            min-height: 30px;
            color: #999;
            margin: 0 2px;
            line-height: 30px;
            border-radius: 2px !important;
            text-align: center;
            padding: 0 6px;
        }

        .pagination li a:hover {
            color: #666;
        }

        .pagination li.active a, .pagination li.active a.page-link {
            background: #03A9F4;
        }

        .pagination li.active a:hover {        
            background: #0397d6;
        }

        .pagination li.disabled i {
            color: #ccc;
        }

        .pagination li i {
            font-size: 16px;
            padding-top: 6px
        }

        .hint-text {
            float: left;
            margin-top: 10px;
            font-size: 13px;
        } 

        /* Custom checkbox */
        .custom-checkbox {
            position: relative;
        }

        .custom-checkbox input[type="checkbox"] {    
            opacity: 0;
            position: absolute;
            margin: 5px 0 0 3px;
            z-index: 9;
        }

        .custom-checkbox label:before{
            width: 18px;
            height: 18px;
        }

        .custom-checkbox label:before {
            content: '';
            margin-right: 10px;
            display: inline-block;
            vertical-align: text-top;
            background: white;
            border: 1px solid #bbb;
            border-radius: 2px;
            box-sizing: border-box;
            z-index: 2;
        }

        .custom-checkbox input[type="checkbox"]:checked + label:after {
            content: '';
            position: absolute;
            left: 6px;
            top: 3px;
            width: 6px;
            height: 11px;
            border: solid #000;
            border-width: 0 3px 3px 0;
            transform: inherit;
            z-index: 3;
            transform: rotateZ(45deg);
        }

        .custom-checkbox input[type="checkbox"]:checked + label:before {
            border-color: #03A9F4;
            background: #03A9F4;
        }

        .custom-checkbox input[type="checkbox"]:checked + label:after {
            border-color: #fff;
        }

        .custom-checkbox input[type="checkbox"]:disabled + label:before {
            color: #b8b8b8;
            cursor: auto;
            box-shadow: none;
            background: #ddd;
        }

        /* Modal styles */
        .modal .modal-dialog {
            max-width: 400px;
        }

        .modal .modal-header, .modal .modal-body, .modal .modal-footer {
            padding: 20px 30px;
        }

        .modal .modal-content {
            border-radius: 3px;
        }

        .modal .modal-footer {
            background: #ecf0f1;
            border-radius: 0 0 3px 3px;
        }

        .modal .modal-title {
            display: inline-block;
        }

        .modal .form-control {
            border-radius: 2px;
            box-shadow: none;
            border-color: #dddddd;
        }

        .modal textarea.form-control {
            resize: vertical;
        }

        .modal .btn {
            border-radius: 2px;
            min-width: 100px;
        }
            
        .modal form label {
            font-weight: normal;
        }

        .search-box {
            position: relative;        
            float: right;
        }

        .search-box input {
            height: 34px;
            width: 120%;
            padding-left: 35px;
            border-color: #ddd;
            box-shadow: none;
        }

        .search-box input:focus {
            border-color: #3FBAE4;
        }
        
        .search-box i {
            color: #a0a5b1;
            position: absolute;
            font-size: 19px;
            top: 8px;
            left: 10px;
        }

        .navigation {
            margin-top: 40px;
            margin-bottom: -29px;
        }

        #nav-topics a {
            font-size: 18px;
        }

        #nav-sign a {
            font-size: 16px;
        }

        .navbar-header a {
            font-size: 22px;
            padding-right: 40px;
        }

        #nav-topics li {
            padding-right: 40px;
        }
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function(){
            // Activate tooltip
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</head>

<body>
    <div class="container">
        <div class="navigation">
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="home.php">Home</a>
                    </div>

                    <ul class="nav navbar-nav" id="nav-topics">
                        <li class="active"><a href="#">Rooms</a></li>
                        <li><a href="room_type_management.php">Room Types</a></li>
                        <li><a href="room_reservation_management.php">Room Reservations</a></li>
                        <li><a href="room_reports.php">Reports</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right" id="nav-sign">
                        <li><a href="profile.php"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                        <li><a href="index.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-4">
						<h2 class="room_mngmnt">
                            <a href="room_management.php">Room <b>Management</b></a>
                        </h2>
                    </div>

                    <div class="col-sm-4">
                        <div class="search-box">
                            <i class="material-icons">&#xE8B6;</i>
                            <input type="text" class="form-control" placeholder="Enter Room Number here&hellip;">
                        </div>
                    </div>

					<div class="col-sm-4">
						<a href="#addRoomModal" class="btn btn-success" data-toggle="modal">
                            <i class="material-icons">&#xE147;</i> 
                            <span>Add New Room</span>
                        </a>						
                    </div>
                </div>
            </div>

            <table class="table table-striped table-hover">
                <thead>
                    <tr> 
                        <th>Room No</th>
                        <th>Floor</th>
						<th>Type</th>
                        <th>Availability</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>101</td>
                        <td>1</td>
						<td>Single</td>
                        <td>Available</td>
                        <td>Clean</td>

                        <td>
                            <a href="#viewRoomModal" class="view" data-toggle="modal">
                                <i class="material-icons" data-toggle="tooltip" title="View">&#xE417;</i>
                            </a>

                            <a href="#editRoomModal" class="edit" data-toggle="modal">
                                <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
                            </a>
                            
                            <a href="#deleteRoomModal" class="delete" data-toggle="modal">
                                <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>

			<div class="clearfix"></div>
        </div>
    </div>

	<!-- Add Modal HTML -->
	<div id="addRoomModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="post" action="add_rooms.php">
					<div class="modal-header">						
						<h4 class="modal-title">Add New Room</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    
					<div class="modal-body">					
						<div class="form-group">
							<label>Room No</label>
							<input type="text" name="r_no" class="form-control" required>
                        </div>
                        
						<div class="form-group">
                            <label>Room Type</label>
                            
							<select name="roomtype" class="form-control">
                                <option value="1">Single Bedroom</option>
                                <option value="2">Double Bedroom</option>
                                <option value="3">Family Bedroom</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Floor</label>
                            
							<select name="floor" name="floor" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>	
                        
						<div class="form-group">
							<label>Description</label>
							<textarea class="form-control" name="desc"></textarea>
                        </div>			
                    </div>
                    
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-success" value="Add">
					</div>
				</form>
			</div>
		</div>
    </div>
    
	<!-- Edit Modal HTML -->
	<div id="editRoomModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">						
						<h4 class="modal-title">Edit Room</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    
					<div class="modal-body">					
						<div class="form-group">
							<label>Room No</label>
							<input type="text" class="form-control" required>
                        </div>
                        
						<div class="form-group">
                            <label>Room Type</label>
                            
							<select name="roomtype" class="form-control">
                                <option value="1">Single Bedroom</option>
                                <option value="2">Double Bedroom</option>
                                <option value="3">Family Bedroom</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Floor</label>
                            
							<select name="floor" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>	
                        
						<div class="form-group">
							<label>Description</label>
							<textarea class="form-control"></textarea>
                        </div>			
                    </div>

                    <div class="row">
                        <div class="row2">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Availability</label>
                                
                                    <div class="radio">
                                        <label><input type="radio" name="available">Available</label>
                                    </div>

                                    <div class="radio">
                                        <label><input type="radio" name="available">Not Available</label>
                                    </div>
                                </div>
                            </div>    	

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Status</label>
                                        
                                    <div class="radio">
                                        <label><input type="radio" name="status_btn">Clean</label>
                                    </div>

                                    <div class="radio">
                                        <label><input type="radio" name="status_btn">Not Clean</label>
                                    </div>
                                </div>
                            </div>	
                        </div>
                    </div>
                    
                    <div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-info" value="Save">
					</div>
				</form>
			</div>
		</div>
    </div>
    
    <!-- View Modal HTML -->
	<div id="viewRoomModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">						
						<h4 class="modal-title">View Room</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    
					<div class="modal-body">					
						<div class="form-group">
							<label>Room No</label>
							<input type="text" class="form-control" required>
                        </div>
                        
						<div class="form-group">
                            <label>Room Type</label>
                            
							<select name="roomtype" class="form-control">
                                <option value="1">Single Bedroom</option>
                                <option value="2">Double Bedroom</option>
                                <option value="3">Family Bedroom</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Floor</label>
                            
							<select name="floor" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>	
                        
						<div class="form-group">
							<label>Description</label>
							<textarea class="form-control"></textarea>
                        </div>			
                    </div>

                    <div class="row">
                        <div class="row2">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Availability</label>
                                
                                    <div class="radio">
                                        <label><input type="radio" name="available">Available</label>
                                    </div>

                                    <div class="radio">
                                        <label><input type="radio" name="available">Not Available</label>
                                    </div>
                                </div>
                            </div>    	

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Status</label>
                                        
                                    <div class="radio">
                                        <label><input type="radio" name="status_btn">Clean</label>
                                    </div>

                                    <div class="radio">
                                        <label><input type="radio" name="status_btn">Not Clean</label>
                                    </div>
                                </div>
                            </div>	
                        </div>
                    </div>
                    
                    <div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					</div>
				</form>
			</div>
		</div>
    </div>

    <!-- Delete Modal HTML -->
	<div id="deleteRoomModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">						
						<h4 class="modal-title">Delete Room</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    
					<div class="modal-body">					
						<p>Are you sure you want to delete this Record?</p>
						<p class="text-warning"><small>This action cannot be undone.</small></p>
                    </div>
                    
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-danger" value="Delete">
					</div>
				</form>
			</div>
		</div>
    </div>
</body>
</html>            
