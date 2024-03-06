<!-- <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
     <style type="text/css">
        body
        {
            font-family: Arial;
            font-size: 10pt;
        }
        table
        {
            border: 1px solid #ccc;
            border-collapse: collapse;
        }
        table th
        {
            background-color: #F7F7F7;
            color: #333;
            font-weight: bold;
        }
        table th, table td
        {
            padding: 5px;
            border: 1px solid #ccc;
        }
    </style>
    <?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bac";
    // Create connection
    $conn = new mysqli($servername, $username, $password ,$dbname );
    
    ?>
</head>
<body>
     <!-- <table id="tblCustomers" cellspacing="0" cellpadding="0"> -->
        <!-- <tr>
            <th>Customer Id</th>
            <th>Name</th>
            <th>Country</th>
        </tr>
        <tr>
            <td>1</td>
            <td>John Hammond</td>
            <td>United States</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Mudassar Khan</td>
            <td>India</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Suzanne Mathews</td>
            <td>France</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Robert Schidner</td>
            <td>Russia</td>
        </tr> -->
    <!-- </table> -->

    <!-- <tbody> -->
     <table id="tblCustomers" cellspacing="0" cellpadding="0">
     <th>#</th>
                  <th>نوع الابواب</th>
                  <th>الكمية</th>
                  
                  
                  <!-- <th style="width: 40px" colspan="2">حـذف \ تـعديل</th> -->
                <?PhP
                // $ss = $_SESSION["user_login"];
                //  $sql_doors = "SELECT  * FROM doors";
                $idGit = $_GET['id_alluserOpp'];

                 $sql_Opp = "SELECT * FROM apply WHERE OpportunitiesApply = '$idGit' ";
                //  $sql_door_components = "SELECT  * FROM door_components";
                 // $result = mysqli_query($conn, $sql);
                 $opp_result = mysqli_query($conn, $sql_Opp);
                //  $door_components_result = mysqli_query($conn, $sql_door_components);
                                                                  
                if (mysqli_num_rows($opp_result) > 0) {
                  // if (mysqli_num_rows($door_components_result) > 0) {
                // output data of each row
                while($row_door = mysqli_fetch_assoc($opp_result)) {
                  // while($row_door = mysqli_fetch_assoc($door_components_result)) {
               ?>
                <tr>
                 <!-- door_type 	door_quantity 	door_color 	user_do -->
                  <td><?php echo $row_door["UsreNameApply"];?></td>
                  <td><?php echo $row_door["UsreEmailApply"];?></td>
                  <td><?php echo $row_door["phone"];?></td>
                  
                  <!--
                    echo "<td>".$rowOpp["UsreNameApply"]."</td>";
    // echo "<td>".$rowOppor["OpportunitiesTitle"]."</td>";
// echo "<td>"."<a href =\"alluseroppor.php?id_OppStutas=".$rowOppor['idOpportunities']."\">".$rowOppor["OpportunitiesTitle"]."</a>"."</td>";

    echo "<td>".$rowOpp["UsreEmailApply"]."</td>";
    echo "<td>".$rowOpp["phone"]."</td>";
                    -->
                </tr>
                  <?php
                }
              }
              // }}?>
                <!-- </tbody> -->
                <!-- <tfoot>
                <tr>
                <th>#</th>
                  <th>نوع الابواب</th>
                  <th>الكمية</th>
                  <th>الـمقاسات</th>
                  <th>سعر الشراء</th>
                  <th>سعر البيع</th>
                  <th>اللون</th>
                  
                  <th style="width: 40px" colspan="2">حـذف \ تـعديل</th>
                </tfoot> -->
              </table>
    <br />
    <input type="button" id="btnExport" value="Export" onclick="Export()" />
    <!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> -->
    <script type="text/javascript" src="jquery.min.js"></script>
    <script src="table2excel.js" type="text/javascript"></script>
    <script type="text/javascript">
        function Export() {
            $("#tblCustomers").table2excel({
                filename: "ReportNO.xls"
            });
        }
    </script>
</body>
</html>
