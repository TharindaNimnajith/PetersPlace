<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <title>Peter's Place || Room Management</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"/>

    <link rel="stylesheet" href="css/admin.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function () {
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
                    <li><a href="room_management.php">Rooms</a></li>
                    <li><a href="room_type_management.php">Room Types</a></li>
                    <li class="active"><a href="#">Room Reservations</a></li>
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
                        <a href="room_reservation_management.php">Room <b>Reservations</b></a>
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
