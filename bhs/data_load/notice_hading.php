<?php
include '../../config/database.php';


$notice_sql = "SELECT * FROM `notice` ORDER BY id DESC LIMIT 5";
$notice = mysqli_query($conn, $notice_sql);

if (mysqli_num_rows($notice) > 0) {
    // output data of each row
    $i = 1;
    while ($row = mysqli_fetch_assoc($notice)) {
        $timestamp = $row['time'];

?>

        <div class="card-body tab-content p-0">
            <div class="tab-pane active show fade" role="tabpanel">
                <div class="table-responsive">
                    <table class="table table-responsive-md card-table transactions-table">
                        <tbody>
                            <tr>
                                <td>
                                    <a id="notice_edit" href="<?php echo $webName ?><?php echo "/bhs/pages/notics_edit.php?id=" . $row['id'] ?>">
                                        <h6 class=" fs-16 text-black font-w600 mb-0"><i class="fa-sharp fa-solid fa-file-pen "></i></h6>
                                    </a>
                                </td>
                                <td>
                                    <a id="delete" href="<?php echo $webName ?><?php echo "/bhs/data_load/delete.php?id=" . $row['id'] ?>">
                                        <h6 class="fs-16 text-black font-w600 mb-0"><i class="fa-solid fa-trash"></i></h6>
                                    </a>
                                </td>

                                <td>
                                    <h6 class=" fs-16 text-black font-w600 mb-0"><?php echo $i++ ?></h6>
                                </td>
                                <td>
                                    <h6 class="fs-16 text-black font-w600 mb-0"><?php echo $row["categories"] ?></h6>
                                </td>
                                <td><span class="fs-16 text-black font-w600 mb-0"><?php echo $row["notice_Headline"] ?></span></td>
                                <td><span class="text-success fs-16 font-w500 text-end d-block"><?php echo date("Y-m-d", strtotime($timestamp)); ?></span></td>
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