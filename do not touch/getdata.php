<?php
                    session_start();
                    $phone=$_SESSION['phone'];
                    $id=clicked_id;
                    $query= "SELECT * FROM timetable WHERE ID == '$id' AND phone == '$phone'";
                    $result = mysqli_query($conn, $query);
                    $row = $result->fetch_assoc();
                    $timefrom=$row['timefrom'];
                    $timeto=$row['timeto'];
                    $status=$row['stat'];
                    $comment=$row['comm'];
                    // echo $timefrom;
                    header("timetable.php");
                ?>