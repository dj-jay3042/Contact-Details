<?php

// error_reporting(E_ALL);
// ini_set('display_errors', '1');
// echo '<pre>';

require "header.php";
require "sidebar.php";
require "config/mail-config.php";

$db->where("id", $_GET["id"]);
$data = $db->getOne("tblContact");

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Compose</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Compose</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- /.col -->
                <div class="col">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Compose New Message</h3>
                        </div>
                        <!-- /.card-header -->
                        <form method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <input class="form-control" placeholder="To:" value="<?php echo $data["email"] ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Subject:" name="subject">
                                </div>
                                <div class="form-group">
                                    <textarea id="compose-textarea" name="body" class="form-control" style="height: 300px">
                                  <p>I hope this email finds you well. I wanted to express my sincere gratitude for reaching out to me regarding the [Position Name] opportunity. I'm excited to learn more about the position and explore how my skills and experience align with your company's needs.<br><br>
First and foremost, I would like to thank you for considering me for this role. I am genuinely interested in joining your team at [Company Name] and contributing to the success of your projects. After reviewing the job description and researching your company, I am even more enthusiastic about the possibility of working together.<br><br>
I am eager to discuss the details of the opportunity and learn more about the team's goals and the contributions I can make. Please let me know when it would be convenient for us to schedule a call or meeting. I am flexible with my availability and am happy to accommodate your schedule.<br><br>
I have attached my updated resume to this email to provide you with a more comprehensive overview of my qualifications. Feel free to reach out if you need any additional information or if there's any documentation you require from my end.<br><br>
Once again, thank you for considering me for the [Position Name] role. I look forward to the next steps in the process and the opportunity to speak with you further.</p>
                                </textarea>
                                </div>
                                <div class="form-group">
                                    <div class="btn btn-default btn-file">
                                        <i class="fas fa-paperclip"></i> Attachment
                                        <input type="file" name="attachment">
                                    </div>
                                    <p class="help-block">Max. 32MB</p>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <div class="float-right">
                                    <button type="submit" class="btn btn-primary" name="send"><i class="far fa-envelope"></i> Send</button>
                                </div>
                            </div>
                        </form>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php

require "footer.php";

if (isset($_POST["send"])) {
    // Set email address and name
    $mail->addAddress($data["email"], $data["name"]);

    // Set the email subject
    $mail->Subject = "Re: " . $_POST["subject"];

    // Set the HTML content of the email body
    $mail->Body = '<html>
<head>
    <title>' . $_POST["subject"] . '</title>
    <style>
        .card-header {
            --bs-blue: #0d6efd;
            --bs-indigo: #6610f2;
            --bs-purple: #6f42c1;
            --bs-pink: #d63384;
            --bs-red: #dc3545;
            --bs-orange: #fd7e14;
            --bs-yellow: #ffc107;
            --bs-green: #198754;
            --bs-teal: #20c997;
            --bs-cyan: #0dcaf0;
            --bs-white: #fff;
            --bs-gray: #6c757d;
            --bs-gray-dark: #343a40;
            --bs-primary: #0d6efd;
            --bs-secondary: #6c757d;
            --bs-success: #198754;
            --bs-info: #0dcaf0;
            --bs-warning: #ffc107;
            --bs-danger: #dc3545;
            --bs-light: #f8f9fa;
            --bs-dark: #212529;
            --bs-font-sans-serif: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            --bs-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            --bs-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
            font-family: var(--bs-font-sans-serif);
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: transparent;
            word-wrap: break-word;
            box-sizing: border-box;
            padding: .5rem 1rem;
            margin-bottom: 0;
            background-color: rgba(0, 0, 0, .03);
            border-bottom: 1px solid rgba(0, 0, 0, .125);
            border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0;
        }

        .card-body {
            --bs-blue: #0d6efd;
            --bs-indigo: #6610f2;
            --bs-purple: #6f42c1;
            --bs-pink: #d63384;
            --bs-red: #dc3545;
            --bs-orange: #fd7e14;
            --bs-yellow: #ffc107;
            --bs-green: #198754;
            --bs-teal: #20c997;
            --bs-cyan: #0dcaf0;
            --bs-white: #fff;
            --bs-gray: #6c757d;
            --bs-gray-dark: #343a40;
            --bs-primary: #0d6efd;
            --bs-secondary: #6c757d;
            --bs-success: #198754;
            --bs-info: #0dcaf0;
            --bs-warning: #ffc107;
            --bs-danger: #dc3545;
            --bs-light: #f8f9fa;
            --bs-dark: #212529;
            --bs-font-sans-serif: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            --bs-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            --bs-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
            font-family: var(--bs-font-sans-serif);
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: transparent;
            word-wrap: break-word;
            box-sizing: border-box;
            flex: 1 1 auto;
            padding: 1rem 1rem;
        }

        .card-footer {
            --bs-blue: #0d6efd;
            --bs-indigo: #6610f2;
            --bs-purple: #6f42c1;
            --bs-pink: #d63384;
            --bs-red: #dc3545;
            --bs-orange: #fd7e14;
            --bs-yellow: #ffc107;
            --bs-green: #198754;
            --bs-teal: #20c997;
            --bs-cyan: #0dcaf0;
            --bs-white: #fff;
            --bs-gray: #6c757d;
            --bs-gray-dark: #343a40;
            --bs-primary: #0d6efd;
            --bs-secondary: #6c757d;
            --bs-success: #198754;
            --bs-info: #0dcaf0;
            --bs-warning: #ffc107;
            --bs-danger: #dc3545;
            --bs-light: #f8f9fa;
            --bs-dark: #212529;
            --bs-font-sans-serif: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            --bs-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            --bs-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
            font-family: var(--bs-font-sans-serif);
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: transparent;
            word-wrap: break-word;
            box-sizing: border-box;
            padding: .5rem 1rem;
            background-color: rgba(0, 0, 0, .03);
            border-top: 1px solid rgba(0, 0, 0, .125);
            color: #6c757d !important;
            border-radius: 0 0 calc(.25rem - 1px) calc(.25rem - 1px);
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="card-header">
            Dear ' . $data["name"] . '
        </div>
        <div class="card-body">
          ' . $_POST["body"] . '
        </div>
        <div class="card-footer text-muted">
            Warm regards,<br>
            Jay Chauhan
        </div>
      </div>
</body>
</html>';
    $message = $_POST["body"];

    // Add attachment
    if (isset($_FILES["attachment"])) {
        $mail->addAttachment($_FILES['attachment']['tmp_name'], $_FILES['attachment']['name']);
    }

    // Send the email
    if ($mail->send()) {
        $replied = "1";
    } else {
        $message = $mail->ErrorInfo;
        $errorCode = "";

        // Use a regular expression to extract the error code
        if (preg_match('/\d{3}/', $message, $matches)) {
            $errorCode = $matches[0];
        }
        $replied = $errorCode;
    }

    // Insert into DB
    $data = array(
        "reply" => $message,
        "isReplied" => $replied,
        "hasAttachment" => isset($_FILES["attachment"]) ? "1" : "0"
    );

    $db->where("id", $_GET["id"]);
    $id = $db->update(TBL_CONTACT, $data);
    ?>
    <script>
        window.location.href = "messages";
    </script>
    <?php
}
?>