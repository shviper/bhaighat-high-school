<?php
include '../../../config/database.php';


$sql = "SELECT * FROM `message`";
$message = mysqli_query($conn, $sql);

if (mysqli_num_rows($message) > 0) {
    // output data of each row
    $i = 1;
    while ($row = mysqli_fetch_assoc($message)) {


?>

        <div class="card-body tab-content p-0">
            <div class="tab-pane active show fade" role="tabpanel">
                <div class="table-responsive">
                    <table class="table table-responsive-md card-table transactions-table">
                        <tbody>
                            <tr>

                                <td>
                                    <a id="delete" href="delete.php?id=<?php echo $row['Id'] ?>">
                                        <h6 class="fs-16 text-black font-w600 mb-0"><i class="fa-solid fa-trash"></i></h6>
                                    </a>
                                </td>

                                <td>
                                    <h6 class=" fs-16 text-black font-w600 mb-0"><?php echo $i++ ?></h6>
                                </td>
                                <td style="width: 250px;">
                                    <h6 class="fs-16 text-black font-w600 mb-0"><?php echo $row["name"] ?></h6>
                                </td>

                                <td style="width: 250px;">
                                    <span class="fs-16 text-black font-w600 mb-0">
                                        <?php echo $row["email"] ?>
                                    </span>
                                </td>

                                <td>
                                    <h6 class="fs-16 text-black font-w600 mb-0">
                                        <?php echo $row['message']; ?>
                                    </h6>
                                </td>

                                <td>
                                    <span class="text-success fs-16 font-w500 text-end d-block">

                                        <h6 class="fs-16 text-black font-w600 mb-0">
                                            <?php echo date("Y-m-d", strtotime($row['time'])); ?>
                                        </h6>


                                    </span>
                                </td>
                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>


        </div>
<?php
    }
}
?>