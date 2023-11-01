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
    $mail->Body = '<html><!-- START HEAD -->
    <head>
        
        <!-- CHARSET -->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        
        <!-- MOBILE FIRST -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        
        <!-- GOOGLE FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Ubuntu+Mono" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        
        <!-- FONT AWESOME -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <!-- RESPONSIVE CSS -->
        <style type="text/css">
            @media only screen and (max-width: 550px){
                .responsive_at_550{
                    width: 90% !important;
                    max-width: 90% !important;
                }
            }
        </style>
    
    </head>
    <!-- END HEAD -->
    
    <!-- START BODY -->
    <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
        
        <!-- START EMAIL CONTENT -->
        <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">        
            <tbody>
                
                <tr>
                    
                    <td align="center" bgcolor="#1976D2">
                        
                        <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
                            <tbody>
                                <tr>
                                    <td width="100%" align="center">
                                        
                                        <!-- START SPACING -->
                                        <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
                                            <tbody>
                                                <tr>
                                                    <td height="40">&nbsp;</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!-- END SPACING -->
                                        
                                        <!-- START CONTENT -->
                                        <table width="500" border="0" cellpadding="0" cellspacing="0" align="center" style="padding-left:20px; padding-right:20px;" class="responsive_at_550">
                                            <tbody>
                                                <tr>
                                                    <td align="center" bgcolor="#ffffff">
                                                        
                                                        <!-- START BORDER COLOR -->
                                                        <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="100%" height="7" align="center" border="0" bgcolor="#03a9f4"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!-- END BORDER COLOR -->
                                                        
                                                        <!-- START SPACING -->
                                                        <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
                                                            <tbody>
                                                                <tr>
                                                                    <td height="30">&nbsp;</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!-- END SPACING -->
                                                        
                                                        <!-- START HEADING -->
                                                        <table width="90%" border="0" cellpadding="0" cellspacing="0" align="center">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="100%" align="left">
                                                                        <h1 style="font-family:\'Ubuntu Mono\', monospace; font-size:20px; color:#202020; font-weight:bold; padding-left:20px; padding-right:20px;">Dear ' . $data["name"] . '</h1>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!-- END HEADING -->
                                                        
                                                        <!-- START PARAGRAPH -->
                                                        <table width="90%" border="0" cellpadding="0" cellspacing="0" align="center">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="100%" align="center" style="font-family:\'Ubuntu\', sans-serif; font-size:14px; color:#202020; padding-left:20px; padding-right:20px; text-align:justify;">
                                                                        <p>' . $_POST["body"] . '</p>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!-- END PARAGRAPH -->
                                                        
                                                        <!-- START SPACING -->
                                                        <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
                                                            <tbody>
                                                                <tr>
                                                                    <td height="30">&nbsp;</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!-- END SPACING -->
                                                        
                                                        <!-- START BORDER COLOR -->
                                                        <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="100%" height="7" align="center" border="0" bgcolor="#03a9f4"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!-- END BORDER COLOR -->
                                                        <br>
                                                        <!-- START BUTTON -->
                                                        <table width="200" border="0" cellpadding="0" cellspacing="0" align="center">
                                                            <tbody>
                                                                <tr>
                                                                    <td align="center" bgcolor="#1976D2">
                                                                        <a style="font-family:\'Ubuntu Mono\', monospace; display:block; color:#ffffff; font-size:14px; font-weight:bold; text-decoration:none; padding-left:20px; padding-right:20px; padding-top:20px; padding-bottom:20px;" href="http://rasume-jay.dj-jay.great-site.net/" target="_blank">Portfolio Site</a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!-- END BUTTON -->
                                                        
                                                        <!-- START SPACING -->
                                                        <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
                                                            <tbody>
                                                                <tr>
                                                                    <td height="30">&nbsp;</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!-- END SPACING -->
                                                        
                                                        <!-- START PARAGRAPH -->
                                                        <table width="90%" border="0" cellpadding="0" cellspacing="0" align="center">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="100%" align="center">
                                                                        <p style="font-family:\'Ubuntu\', sans-serif; font-size:14px; color:#202020; padding-left:20px; padding-right:20px; text-align:justify;">If the above button doesn\'t work, you can visit site by clicking the following link, <a href="http://rasume-jay.dj-jay.great-site.net/" target="_blank">Link</a>.</p>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!-- END PARAGRAPH -->
                                                        
                                                        <!-- START SPACING -->
                                                        <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
                                                            <tbody>
                                                                <tr>
                                                                    <td height="30">&nbsp;</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!-- END SPACING -->
                                                        
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!-- END CONTENT -->
                                        
                                        <!-- START SPACING -->
                                        <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
                                            <tbody>
                                                <tr>
                                                    <td height="20">&nbsp;</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!-- END SPACING -->
                                        
                                        <!-- START SOCIAL MEDIA ICONS -->
                                        <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
                                            <tbody>
                                                <tr>
                                                    <td width="100%" align="center">
                                                        <a href="http://rasume-jay.dj-jay.great-site.net/" target="_blank"><i: class="fa fa-laptop" style="color: white;"></i:></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <a href="https://www.linkedin.com/in/jay-chauhan-7b4606234" target="_blank"><i class="fa fa-linkedin" style="color: white;"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <a href="tel:+919313440532" target="_blank"><i: class="fa fa-phone" style="color: white;"></i:></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <a href="https://join.skype.com/invite/qCRS3mNfWaC0" target="_blank"><i: class="fa fa-skype" style="color: white;"></i:></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!-- END SOCIAL MEDIA ICONS -->
                                        
                                        <!-- START SPACING -->
                                        <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
                                            <tbody>
                                                <tr>
                                                    <td height="5">&nbsp;</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!-- END SPACING -->
                                        
                                        <!-- START FOOTER -->
                                        <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
                                            <tbody>
                                                <tr>
                                                    <td width="100%" align="center" style="padding-left:15px; padding-right:15px;">
                                                        <p style="font-family:\'Ubuntu Mono\', monospace; color:#ffffff; font-size:12px;">Jay Chauhan &copy; ' 
                                                        . date("Y") . ', All Rights Reserved</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!-- END FOOTER -->
                                        
                                        <!-- START SPACING -->
                                        <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
                                            <tbody>
                                                <tr>
                                                    <td height="40">&nbsp;</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!-- END SPACING -->  
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>        
        </table>
        <!-- END EMAIL CONTENT -->
    </body>
    <!-- END BODY --></html>';
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
        "reply" => trim($message),
        "isReplied" => $replied,
        "hasAttachment" => !empty($_FILES["attachment"]) ? "1" : "0"
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