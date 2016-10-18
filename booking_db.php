#!/usr/local/bin/php 
<?php
//Debugging
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

include('JSON.php');

$php_ver = 'Current PHP version: ' . phpversion();
$site_title = 'Equipment Booking System - EPACK Lab';

$html_head = '
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>'.$site_title.'</title>

    <!-- Bootstrap Core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Theme -->
    <link href="https://cdn.jsdelivr.net/bootswatch/3.3.7/yeti/bootstrap.min.css" rel="stylesheet">

    <!-- Fullcalendar CSS -->
    <link href="fullcalendar-scheduler-1.4.0/lib/fullcalendar.min.css" rel="stylesheet">

    <!-- Fullcalendar Scheduler CSS -->
    <link href="fullcalendar-scheduler-1.4.0/scheduler.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>';

$html_nav = '
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">'.$site_title.'</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#view">View Booking(s)</a>
                    </li>
                    <li>
                        <a href="#add">Add Booking</a>
                    </li>
                    <li>
                        <a target="_blank" href="resources_md5.php">Reset Resources</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav pull-right">
                    <li>
                        <a href="http://ihome.ust.hk/~jcema/epack">EPACK Lab</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
';

$html_banner = '
    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>'.$site_title.'</h1>
                <p class="lead">For view/add of equipment booking.</p>
                <ul class="list-unstyled">
                    <li>Bootstrap v3.3.7</li>
                    <li>jQuery v1.11.1</li>
                    <li>'.$php_ver.'</li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
';

$html_view_head = '
    <div class="container" id="view">

        <div class="row">
            <div class="col-lg-12 text-left">
                <h2>View Booking(s)</h2>
                ';
$html_view_foot = '
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
';

function generate_resources() {
    $json_service = new Services_JSON();
    $input_file = 'resources_md5.json';
    $string = file_get_contents($input_file);
    $json_a = $json_service->decode($string);
    $result = '';
    if(!count($json_a)){
        return '<option>No Resource(s) found!</option>';
    }
    foreach($json_a as $item) {
        $result = $result.'<option value="'.$item->md5.'">'.$item->title.'</option>';
    }
    return $result;
}

$html_add = '
    <div class="container" id="add">

        <div class="row">
            <div class="col-lg-12 text-left">
                <h2>Add Booking</h2>
                    <form action="'.$_SERVER['PHP_SELF'].'" method="post">
                        <div class="form-group">
                            <label for="title">Name:</label>
                            <input type="text" class="form-control" name="title">
                        </div>
                        <div class="form-group">
                            <label for="resourceId">Equipment:</label>
                            <select class="form-control" name="resourceId">
                                '.generate_resources().'
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="slot">Timeslot:</label>
                            <select class="form-control" name="slot">
                                <option value="AM">Morning</option>
                                <option value="NOON">Afternoon</option>
                                <option value="PM">Night</option>
                            </select>
                        </div>
                        <button type="submit" name="submit" class="btn btn-default">Submit</button>
                    </form>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
';

$html_footer = '
    <div class="navbar navbar-default">
        <div class="container">
            <p class="navbar-text pull-left">© 2016 - EPACK Lab Equipment Booking System
            </p>
            <p class="navbar-text pull-right">
                <a href="http://ihome.ust.hk/~jcema/epack">EPACK Lab</a>
            </p>
        </div>
    </div>
    <!-- jQuery Version 1.11.1 -->
    <script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- MomentJS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
    <!-- Fullcalendar JS -->
    <script src="fullcalendar-scheduler-1.4.0/lib/fullcalendar.min.js"></script>
    <!-- Fullcalendar Scheduler JS -->
    <script src="fullcalendar-scheduler-1.4.0/scheduler.min.js"></script>
    <!-- Utility -->
    <script src="utility.js"></script>
</body>

</html>
';

$client_add = '
<div class="container">
        <div class="row">
            <div class="col-lg-12 text-left">
                <h2>Booking Helper</h2>

            </div>
        </div>
</div>
';

$close_button = '<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>';

$db_config = array(
	// required
	'database_type' => 'mysql',
	'database_name' => '128938db',
	'server' => 'ihomedb.ust.hk',
	'username' => '128938',
	'password' => '128938',
	'charset' => 'utf8',
);

function generate_start_end($s, $e, $d) {
    $format = 'Y-m-d\TH:i:s';
    $tuple = array(
        'start' => date($format, strtotime($d.' '.$s.':00:00')),
        'end' => date($format, strtotime($d.' '.$e.':00:00'))
    );
    return $tuple;
}

function convert_slot($input, $date) {
    switch($input) {
        case 'AM':
            $tuple = generate_start_end('09','11',$date);
            break;
        case 'NOON':
            $tuple = generate_start_end('13','15',$date);
            break;
        case 'PM':
            $tuple = generate_start_end('16','18',$date);
            break;
    }
    return $tuple;
}

echo $html_head.$html_nav.$html_banner;

// Form POST actions
if(isset($_POST['submit'])) {
    echo '<div class="alert alert-warning text-center">New entry added: <code>'.$_POST['title'].'</code> booked <code>'.$_POST['resourceId'].'</code>'.$close_button.'</div>';
}

$link = mysql_connect($db_config['server'], $db_config['username'], $db_config['password'])  
         or die("Could not connect : " . mysql_error()); 
      mysql_select_db($db_config['database_name']) or die("Could not select database.");
      echo '<div class="alert alert-success text-center">Database connected successfully to <code>'.$db_config['database_name'].'</code>.'.$close_button.'</div>'; 

// Drop table
function drop(){
	$drop_table = 'DROP TABLE booking';
	if(mysql_query($drop_table) === true) {
		echo '<div class="alert alert-danger text-center">Database table <code>booking</code> dropped.'.$close_button.'</div>';
	}
}

function clear(){
    mysql_query("DELETE FROM booking");
}

// Create table
function create(){
    $close_button = '<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>';
	$create_table = 'CREATE TABLE IF NOT EXISTS booking (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	title VARCHAR(30) NOT NULL,
	resourceId VARCHAR(32) NOT NULL,
	start DATETIME DEFAULT NULL,
    end DATETIME DEFAULT NULL,
	created DATETIME DEFAULT NULL
	)';

	if(mysql_query($create_table) === true) {
	echo '<div class="alert alert-success text-center">Database table <code>booking</code> created.'.$close_button.'</div>';
    clear();
	} else {
		echo '<div class="alert alert-danger text-center">Failed to create table <code>booking</code>.'.$close_button.'</div>';
	}
}

function mysql_insert($table, $inserts) {
    $values = array_map('mysql_real_escape_string', array_values($inserts));
    $keys = array_keys($inserts);
        
    return mysql_query('INSERT INTO '.$table.' ('.implode(',', $keys).') VALUES (\''.implode('\',\'', $values).'\')');
}

function insert($data) {
    $close_button = '<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>';
	foreach($data as $item) {
        $start_end = convert_slot($item['slot'],'2016-09-07');
		mysql_insert('booking', array(
		    'title' => $item['title'],
		    'resourceId' => $item['resourceId'],
		    'start' => $start_end['start'],
            'end' => $start_end['end'],
		    'created' => date('Y-m-d H:i:s'),
		));
	}
    echo '<div class="alert alert-info text-center">'.sizeof($data).$close_button.' record(s) added.</div>';
}

function delete($id) {
    mysql_query("DELETE FROM booking WHERE id=".$id);
}

function get_json() {
    $json_service = new Services_JSON();
    $result = mysql_query("SELECT * FROM booking");
    $raw = array();
    if($result){
        while($row = mysql_fetch_array($result, MYSQL_ASSOC))
        {
            $raw[] = array(
                'id' => $row['id'],
                'title' => $row['title'],
                'resourceId' => $row['resourceId'],
                'start' => $row['start'],
                'end' => $row['end'],
                'created' => $row['created'],
            );
        }
    }
    return $json_service->prettyPrint($json_service->encode($raw));
}

function create_event_json(){
    $json = get_json();
    $filename = 'events.json';
    $fp = fopen($filename, 'w+');
    fwrite($fp, $json);
    fclose($fp);
}

function delete_button($id){
    echo '<td><form action="'.$_SERVER['PHP_SELF'].'" method="post">
        <input type="hidden" name="to_delete" value="'.$id.'">
        <button type="submit" name="delete" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></button>
    </form></td>';
}

function get($sql_val, $sql_key) {
	$result = mysql_query($sql_val);
    $keys = mysql_query($sql_key);
	if(mysql_num_rows($result)>0){
        echo "<table class='table'>";
        echo "<thead><tr>";
        while ($row = mysql_fetch_assoc($keys)) {
            echo "<th>".$row['Field']."</th>";
        }
        echo "</tr></thead>";
		while($row = mysql_fetch_array($result, MYSQL_NUM))
		{
			echo "<tr>";
            foreach($row as $rowitem){
                echo "<td>".$rowitem."</td>";
            }
            delete_button($row[0]);
			echo "</tr>";
		}
        echo "</table>";
	}
	else{
		echo '<div class="alert alert-danger text-center">No results found.</div>';
	}
}

$getjsonbtn = '
        <div class="row">
            <div class="col-lg-12 text-right">
                    <form action="'.$_SERVER['PHP_SELF'].'" method="post">
                        <button type="submit" name="json" class="btn btn-default">Export as *.json file</button>
                    </form>
            </div>
        </div>
';

if(!isset($_POST['submit'])) {
    // CLEANSTART: Enable for clean start
    // clear();
    // drop();
    // create();
}

echo $html_view_head;

if(isset($_POST['submit'])) {
    insert(array(array(
        'title' => $_POST['title'],
        'resourceId' => $_POST['resourceId'],
        'slot' => $_POST['slot'],
    )));
    create_event_json();
}

if(isset($_POST['delete'])) {
    delete($_POST['to_delete']);
}

get("SELECT * FROM booking", "SHOW COLUMNS FROM booking");
create_event_json();

echo $getjsonbtn;

if(isset($_POST['json'])) {
    $json = get_json();
    $filename = 'booking_'.time().'.json';
    $fp = fopen($filename, 'w');
    fwrite($fp, $json);
    fclose($fp);
    echo '<div class="alert alert-info text-center">JSON export created at <a href="./'.$filename.'"><code>'.$filename.'</code></a> <strong>(click to download)</strong>'.$close_button.'</div>';
}

echo $html_view_foot;

echo '<hr />';

echo '<div class="container"><div class="row"><div class="col-md-12" id="calendar"></div></div></div>';

echo '<hr />';

echo $html_add;

echo '<hr />';

echo $client_add;

echo '<hr />';

echo $html_footer;

/* Closing connection */ 
mysql_close($link);
?>