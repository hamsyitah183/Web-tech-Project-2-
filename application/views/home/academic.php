<!-- <div style="padding-top: 25vmin;" ></div>
    <main>
        <div class="container " >
            <h1>Academic Calendar</h1>
            <img src="http://bpa.ums.edu.my/images/takwim/RASMI_KALENDAR_AKADEMIK_PROGRAM_SARJANA_MUDA_SESI_20212022_revised_001.jpg" alt="calendar1" class="img-fluid">
            <div style="padding-top: 15vmin;" ></div>
            <img src="http://bpa.ums.edu.my/images/takwim/RASMI_KALENDAR_AKADEMIK_PROGRAM_SARJANA_MUDA_SESI_20212022_revised_002.jpg" alt="calendar2" class="img-fluid">
            <div style="padding-top: 15vmin;" ></div>
            <img src="http://bpa.ums.edu.my/images/takwim/RASMI_KALENDAR_AKADEMIK_PROGRAM_SARJANA_MUDA_SESI_20212022_revised_003.jpg" alt="calendar3" class="img-fluid">
            <div style="padding-top: 15vmin;" ></div>
        </div>
    </main> -->

    <style>
body {
  background-color: #354A54;
}
</style>

<div style="padding-top: 25vmin;" ></div>
    <main>

<div class="container " >
            <h1 class="text-white">Academic Calendar</h1>
            <h2 class="text-white">Semester 1</h2>
            <!-- <img src="http://bpa.ums.edu.my/images/takwim/RASMI_KALENDAR_AKADEMIK_PROGRAM_SARJANA_MUDA_SESI_20212022_revised_001.jpg" alt="calendar1" class="img-fluid"> -->

            <table width="1000" style = "border:2.5" cellpadding="5">
                <tr>
                    <th style="background-color: lightgoldenrodyellow;" scope="column">Description</th>
                    <th style="background-color: lightgoldenrodyellow;" scope="column">Date - Start</th>
                    <th style="background-color: lightgoldenrodyellow;" scope="column">Date - End</th>
                    <th style="background-color: lightgoldenrodyellow;" scope="column">Duration</th>
                    <th style="background-color: lightgoldenrodyellow;" scope="column">Remarks</th>
                </tr>
                
            
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "auth2";

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT * FROM academic";
            $result = mysqli_query($conn, $sql);

                    
            if (mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr><td style='color:white;'>" . $row["description"]. "</td><td style='color:white;'>" . $row["dstart"]. "</td><td style='color:white;'>" . $row["dend"]. "</td><td style='color:white;'>" . $row["duration"]. "</td><td style='color:white;'>" . $row["remarks"]. "</td></tr>";
                }
                echo "</table>";
            }
            else{
                echo "0 results";
            }
            mysqli_close($conn);
            ?>
            </table>
            
            <div style="padding-top: 15vmin;" ></div>
            <img src="http://bpa.ums.edu.my/images/takwim/RASMI_KALENDAR_AKADEMIK_PROGRAM_SARJANA_MUDA_SESI_20212022_revised_002.jpg" alt="calendar2" class="img-fluid">
            <div style="padding-top: 15vmin;" ></div>
            <!-- <img src="http://bpa.ums.edu.my/images/takwim/RASMI_KALENDAR_AKADEMIK_PROGRAM_SARJANA_MUDA_SESI_20212022_revised_003.jpg" alt="calendar3" class="img-fluid"> -->
            <div style="padding-top: 15vmin;" ></div>
        </div>
    </main>
