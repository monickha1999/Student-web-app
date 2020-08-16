<!DOCTYPE html>
<html>
<head>
        <title>import csv</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta charset="utf-8" />
        <style>
            body{
                background-color: #ffe6f0;
            }
            #container{
                width:90%;
                overflow:auto;
            }
            table.gridtable {
                overflow:auto;
                font-family: helvetica,arial,sans-serif;
                color:#333333;                
                text-align: center;

            }
            table.gridtable th {
                border-width: 3px;
                padding: 6px;
                border-style: solid;
                border-color: white;
                border-radius: 2px;
                background-color: #cc0088;
                color: white;
                font-size: 18px;
                text-align: center;

            }
            table.gridtable td {
                border-width: 1.5px;
                padding: 6px;
                border-style: solid;
                border-color: white;
                background-color: #ff4dc4;
                color: white;
                font-size: 16px;
                font-weight: medium;
                border-radius: 2px;
                
            }
           /** .error {
                color: white;
                background-color: red;
            }**/
            h1{
                color: white;
                background-color: black;
                text-align: center;
                border-style: dotted;
                border-color: white;
                border-width: 2px;
            }
            .footer{
                padding: 10px;
                background-color: black;
                text-align: center;
                color: white;
                margin-top: 10px;
                border-style: solid;
                border-color: white;
                border-width: 2px;
            }
        </style>
</head>
<body>
<h1>Display students data</h1>
    <div class="container" id="container">
        <table class="gridtable">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Mail Id</th>
                    <th>Qualification</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Gender</th>
                    <th>Date Of Birth</th>
                    <th>Stream</th>
                </tr>
            <tbody>
                <?php
                    if (($csvfile = fopen("students.csv", "r")) !== FALSE) {
                        while (($csvdata = fgetcsv($csvfile, 1000, ",")) !== FALSE) {
                            //*$error='';
                            //$colcount = count($csvdata);
                            echo '<tr>';
                            /**if($colcount!=5) {
                                $error = 'Column count incorrect';
                            } else {
                                //check data types
                                if(!is_numeric($csvdata[0])) $error.='error';
                                $date = date_parse($csvdata[3]);
                                if (!($date["error_count"] == 0 && checkdate($date["month"], $date["day"], $date["year"]))) $error.='error';
                                if(!is_numeric($csvdata[4])) $error.='error';
                            }
                            switch($error) {
                                case "Column count incorrect":
                                    echo '<td></td>';
                                    echo '<td></td>';
                                    echo '<td class="error" >'.$error.'</td>';
                                    echo '<td></td>';
                                    echo '<td></td>';
                                    break;
                                case "error":
                                    echo '<td class="error">'.$csvdata[0].'</td>';
                                    echo '<td class="error">'.$csvdata[1].'</td>';
                                    echo '<td class="error">'.$csvdata[2].'</td>';
                                    echo '<td class="error">'.$csvdata[3].'</td>';
                                    echo '<td class="error">'.$csvdata[4].'</td>';
                                    break;
                                default:*/
                                    
                                    echo '<td>'.$csvdata[0].'</td>';
                                    echo '<td>'.$csvdata[1].'</td>';
                                    echo '<td>'.$csvdata[2].'</td>';
                                    echo '<td>'.$csvdata[3].'</td>';
                                    echo '<td>'.$csvdata[4].'</td>';
                                    echo '<td>'.$csvdata[5].'</td>';
                                    echo '<td>'.$csvdata[6].'</td>';
                                    echo '<td>'.$csvdata[7].'</td>';
                                    echo '<td>'.$csvdata[8].'</td>';
                                       
                                    
                            }
                            echo '</tr>';
                        //}
                        fclose($csvfile);
                    }
                ?>
            </tbody>
           </table>
    </div>
    <br>
    <center>
<input type="button" value="landing-page" class="btn btn-info btn-lg" 
onClick="window.location = 'http://localhost/landing-page.php'" />
<input type="button" value="Store" class="btn btn-primary btn-lg active" data-toggle="button" 
onClick="window.location = 'http://localhost/storedata.php'" />
<input type="button" value="Search" class="btn btn-warning btn-lg active" data-toggle="button"  
onClick="window.location = 'http://localhost/search.php'" />
</center>
<div class="footer">
<p>Copyright@2020</p>
</div>

</body>
</html>