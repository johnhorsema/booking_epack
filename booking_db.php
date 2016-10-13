#!/usr/local/bin/php 
<?php

$php_ver = 'Current PHP version: ' . phpversion();
$site_title = 'Booking System - EPACK Lab';

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

$html_add = '
    <div class="container" id="add">

        <div class="row">
            <div class="col-lg-12 text-left">
                <h2>Add Booking</h2>
                    <form action="'.$_SERVER['PHP_SELF'].'" method="post">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" name="user">
                        </div>
                        <div class="form-group">
                            <label for="eID">Equipment:</label>
                            <input type="text" class="form-control" name="eID">
                        </div>
                        <div class="form-group">
                            <label for="timeslot">Timeslot:</label>
                            <select class="form-control" name="timeslot">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
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
            <p class="navbar-text pull-left">© 2016 - System Built By JohnM
            </p>
        </div>
    </div>
    <!-- jQuery Version 1.11.1 -->
    <script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- MomentJS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
</body>

</html>
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

function array2json($arr) { 
    if(function_exists('json_encode')) return json_encode($arr); //Lastest versions of PHP already has this functionality.
    $parts = array(); 
    $is_list = false; 

    //Find out if the given array is a numerical array 
    $keys = array_keys($arr); 
    $max_length = count($arr)-1; 
    if(($keys[0] == 0) and ($keys[$max_length] == $max_length)) {//See if the first key is 0 and last key is length - 1
        $is_list = true; 
        for($i=0; $i<count($keys); $i++) { //See if each key correspondes to its position 
            if($i != $keys[$i]) { //A key fails at position check. 
                $is_list = false; //It is an associative array. 
                break; 
            } 
        } 
    } 

    foreach($arr as $key=>$value) { 
        if(is_array($value)) { //Custom handling for arrays 
            if($is_list) $parts[] = array2json($value); /* :RECURSION: */ 
            else $parts[] = '"' . $key . '":' . array2json($value); /* :RECURSION: */ 
        } else { 
            $str = ''; 
            if(!$is_list) $str = '"' . $key . '":'; 

            //Custom handling for multiple data types 
            if(is_numeric($value)) $str .= $value; //Numbers 
            elseif($value === false) $str .= 'false'; //The booleans 
            elseif($value === true) $str .= 'true'; 
            else $str .= '"' . addslashes($value) . '"'; //All other things 
            // :TODO: Is there any more datatype we should be in the lookout for? (Object?) 

            $parts[] = $str; 
        } 
    } 
    $json = implode(',',$parts); 
     
    if($is_list) return '[' . $json . ']';//Return numerical JSON 
    return '{' . $json . '}';//Return associative JSON 
}

echo $html_head.$html_nav.$html_banner;

// Form POST actions
if(isset($_POST['submit'])) {
    echo '<div class="alert alert-warning text-center">New entry added: <code>'.$_POST['user'].'</code> booked <code>'.$_POST['eID'].'</code> at <code>'.$_POST['timeslot'].'</code>'.$close_button.'</div>';
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
	user VARCHAR(30) NOT NULL,
	eID VARCHAR(30) NOT NULL,
	timeslot INT(6),
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
		mysql_insert('booking', array(
		    'user' => $item["user"],
		    'eID' => $item["eID"],
		    'timeslot' => $item["timeslot"],
		    'created' => time(),
		));
	}
    echo '<div class="alert alert-info text-center">'.sizeof($data).$close_button.' record(s) added.</div>';
}

function get($sql) {
	$result = mysql_query("SELECT * FROM booking");
	if($result){
        echo "<table class='table'>";
        echo "<thead><tr>";
        echo "<th>id</th>";
        echo "<th>user</th>";
        echo "<th>eID</th>";
        echo "<th>timeslot</th>";
        echo "</tr></thead>";
		while($row = mysql_fetch_array($result))
		{
			echo "<tr>";
            echo "<td>".$row["id"]."</td>";
            echo "<td>".$row["user"]."</td>";
            echo "<td>".$row["eID"]."</td>";
            echo "<td>".$row["timeslot"]."</td>";
			echo "</tr>";
		}
        echo "</table>";
	}
	else{
		echo '<div class="alert alert-danger text-center">No results found.</div>';
	}
}

function get_json() {
    $result = mysql_query("SELECT * FROM booking");
    $raw = array();
    if($result){
        while($row = mysql_fetch_array($result))
        {
            $raw[] = array(
                'id' => $row["id"],
                'user' => $row['user'],
                'eID' => $row['eID'],
                'timeslot' => $row['timeslot'],
                'created' => $row['created'],
            );
        }
        $raw[] = array(
            'retrieved' => time(),
        );
    }
    return array2json($raw);
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
    clear();
    create();
}

echo $html_view_head;

if(!isset($_POST['submit'])){
$dummy_data = array(
	array(
		'user' => 'Martin Wong',
		'eID' => md5('Solder Ball BumperPacTech'),
		'timeslot' => 11,
	),
	array(
		'user' => 'Xifun Ye',
		'eID' => md5('Reflow Soldering OvenAshai'),
		'timeslot' => 4,
	),
);

insert($dummy_data);

}

if(isset($_POST['submit'])) {
    insert(array(array(
        'user' => $_POST['user'],
        'eID' => md5($_POST['eID']),
        'timeslot' => $_POST['timeslot'],
    )));
}

get();

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

echo $html_add;

echo '<hr />';

echo $html_footer;

/* Closing connection */ 
mysql_close($link);
?>