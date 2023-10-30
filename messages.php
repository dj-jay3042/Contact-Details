<?php

session_start();
if (($_SESSION["login"] != true)) {
    header("Location: login.php");
    exit();
}

require "header.php";
require "sidebar.php";

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>DataTables</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">DataTables</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">DataTable with default features</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email Address</th>
                                        <th>Message</th>
                                        <th>Reply</th>
                                        <th>Mail Info</th>
                                        <th>Date & time</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $db->orderBy("cTime", "desc");
                                    $data = $db->get(TBL_CONTACT, null, "*");
                                    $count = 0;
                                    foreach ($data as $row) {
                                        $count++;
                                    ?>
                                        <tr>
                                            <td><?= $count; ?></td>
                                            <td><?= $row["name"]; ?></td>
                                            <td><?= $row["email"]; ?></td>
                                            <td><?= str_replace("\n", "<br>", $row["message"]); ?></td>
                                            <td><?= (!empty($row["reply"])) ? (str_replace("\n", "<br>", $row["reply"])) : ('<span class="right badge badge-danger">Reply Panding</span>'); ?></td>
                                            <td>
                                                <?php
                                                if ($row["mail_sent"] == 1)
                                                    echo '<button type="button" class="btn btn-block btn-success">Mail Sent Successfully</button>';
                                                else if ($row["mail_sent"] == 0)
                                                    echo '<button type="button" class="btn btn-block btn-warning">Mail Not Sent!!!</button>';
                                                else
                                                    echo '<button type="button" class="btn btn-block btn-danger">Error Code : ' . $row["mail_sent"] . '</button>';
                                                ?>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-block btn-secondary">
                                                    <?php
                                                    $originalTime = new DateTime($row["cTime"], new DateTimeZone('America/New_York'));
                                                    $originalTime->setTimezone(new DateTimeZone('Asia/Kolkata'));
                                                    echo  $originalTime->format('d M, Y h:i a');
                                                    ?>
                                                </button>
                                            </td>
                                            <td><?php if ($row["isReplied"] == "0") { ?><a href="reply/id/<?= $row["id"]?>"><button type="button" class="btn btn-block btn-outline-light">Reply</button></a><?php } else { echo '<span class="right badge badge-success">Reply Sent</span>'; }?></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email Address</th>
                                        <th>Message</th>
                                        <th>Reply</th>
                                        <th>Mail Info</th>
                                        <th>Date & time</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php

$db->where("isViewed", "0");
$db->update(TBL_CONTACT, array("isViewed" => "1"));

require "footer.php";
