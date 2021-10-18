<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class EmailsController extends Controller
{
    public function contact_form(Request $request)
    {

        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'phone' => 'required',
            'message' => 'required'
        ]);

        require '../vendor/autoload.php';

        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $message = $request->message;

        // Environment Variables
        $mail_host = env('MAIL_HOST','default');
        $mail_username = env('MAIL_USERNAME','default');
        $mail_password = env('MAIL_PASSWORD','default');
        $mail_port = env('MAIL_PORT','default');
        $mail_from_address = env('MAIL_FROM_ADDRESS','default');
        $mail_from_name = env('MAIL_FROM_NAME','default');
        $mail_reply_to_address = env('MAIL_REPLYTO_ADDRESS','default');
        $mail_admin_address = env('MAIL_ADMIN_ADDRESS','default');

        $mail = new PHPMailer(true);
        try {
            $mail->SMTPDebug = 2;
            $mail->Host = $mail_host;
            $mail->SMTPAuth   = true;
            $mail->Username = $mail_username;
            $mail->Password = $mail_password;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = $mail_port;

            $mail->setFrom($mail_from_address,$mail_from_name);
            $mail->addAddress($mail_admin_address, 'OnDigiCard');

            $mail->addReplyTo($mail_reply_to_address, $mail_from_name);
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');
           
            $mail->isHTML(true);

            $mail->Subject = 'New Inquiry';
            $mail->Body    = '<!DOCTYPE html>
                    <html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">
                    <head>
                      <meta charset="utf-8">
                      <meta name="viewport" content="width=device-width,initial-scale=1">
                      <meta name="x-apple-disable-message-reformatting">
                      <title></title>
                      <!--[if mso]>
                      <style>
                        table {border-collapse:collapse;border-spacing:0;border:none;margin:0;}
                        div, td {padding:0;}
                        div {margin:0 !important;}
                      </style>
                      <noscript>
                        <xml>
                          <o:OfficeDocumentSettings>
                            <o:PixelsPerInch>96</o:PixelsPerInch>
                          </o:OfficeDocumentSettings>
                        </xml>
                      </noscript>
                      <![endif]-->
                      <style>
                        table, td, div, h1, p {
                          font-family: Arial, sans-serif;
                        }
                        table.data{
                            width:100%;
                        }
                        table.data tr th{
                          background: #eee;
                        }
                        table.data tr, table.data td, table.data th{
                          margin: 0!important;
                        }
                        table.data tr th, table.data tr td{
                           padding: 13px;
                        }
                        table.data tr td{
                           background: #f7f7f7;
                        }
                        @media screen and (max-width: 530px) {
                          .unsub {
                            display: block;
                            padding: 8px;
                            margin-top: 14px;
                            border-radius: 6px;
                            background-color: #555555;
                            text-decoration: none !important;
                            font-weight: bold;
                          }
                          .col-lge {
                            max-width: 100% !important;
                          }
                        }
                        @media screen and (min-width: 531px) {
                          .col-sml {
                            max-width: 27% !important;
                          }
                          .col-lge {
                            max-width: 73% !important;
                          }
                        }
                      </style>
                    </head>
                    <body style="margin:0;padding:0;word-spacing:normal;background-color:#f7f7f7;">
                      <div role="article" aria-roledescription="email" lang="en" style="text-size-adjust:100%;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;background-color:#f7f7f7;">
                        <table role="presentation" style="width:100%;border:none;border-spacing:0;">
                          <tr>
                            <td align="center" style="padding:0;">
                              <!--[if mso]>
                              <table role="presentation" align="center" style="width:600px;">
                              <tr>
                              <td>
                              <![endif]-->
                              <table>
                                <tr style="width:94%;max-width:600px;border:none;border-spacing:0;text-align:left;font-family:Arial,sans-serif;font-size:16px;line-height:22px;color:#363636;">
                                  <td style="padding:40px 30px 30px 30px;text-align:center;font-size:24px;font-weight:bold;">
                                    <a href="https://manage.lenticas.com" style="text-decoration:none;">
                                      <img src="https://manage.lenticas.com/assets/web_images/logo-dark.png" alt="Logo" style="width:80%;max-width:180px;height:auto;border:none;text-decoration:none;color:#ffffff;">
                                    </a>
                                  </td>
                                </tr>
                              </table>
                              <!-- Body -->
                              <table role="presentation" style="width:94%;max-width:600px;border:none;border-spacing:0;text-align:left;font-family:Arial,sans-serif;font-size:16px;line-height:22px;color:#363636;">
                                <tr>
                                  <td style="padding:30px 30px 0px 30px;background-color:#ffffff;">
                                    <h1 style="margin-top:0;margin-bottom:10px;font-size:26px;line-height:25px;font-weight:bold;letter-spacing:-0.02em;text-align: center;">
                                        New Inquiry | On Digi Card
                                    </h1>
                                  </td>
                                </tr>
                                <tr>
                                  <td style="padding:20px;font-size:18px;background:#fff;">
                                    <p>
                                        You have received a new message request.
                                    </p>
                                    <div class="row" style="margin-top: 20px;">
                                        <div style="width:100%;">
                                           <p>
                                             <b>Name:</b> '.$name.'
                                           </p>
                                           <p>
                                             <b>Email:</b> '.$email.'
                                           </p>
                                           <p>
                                             <b>Phone:</b> 
                                             <p>'.$phone.'</p>
                                           </p>
                                           <p>
                                             <b>Message:</b> 
                                             <p>'.$message.'</p>
                                           </p>
                                        </div>
                                    </div>
                                  </td>
                                </tr>
                              </table>
                              <!-- footer -->
                              <table style="width:94%;max-width:600px;border:none;border-spacing:0;text-align:left;font-family:Arial,sans-serif;font-size:16px;line-height:22px;color:#363636;">
                                <tr>
                                  <td style="padding:10px;text-align:center;font-size:14px;background-color:#F16504;color:#fff;">
                                    <p style="margin:0 0 0px 0;">
                                      &copy; Copyright 2021. All rights reserved.
                                    </p>
                                  </td>
                                </tr>
                              </table>
                              <!--[if mso]>
                              </td>
                              </tr>
                              </table>
                              <![endif]-->
                            </td>
                          </tr>
                        </table>
                      </div>

                    </body>
                    </html>';

            $mail->send();     

            return back()->withErrors('success');
       } catch (Exception $e) {
           return $e;
       }      
    }
    public function order_form(Request $request)
    {

        require '../vendor/autoload.php';

        $name = $request->name;
        $email = $request->email;
        $mobile = $request->mobile;
        $whatsapp = $request->whatsapp;
        $company_name = $request->company_name;
        $position = $request->position;
        $slogan = $request->slogan;
        $website = $request->website;
        $attention_name = $request->attention_name;
        $address = $request->address;
        $heading = $request->heading;
        $details = $request->details;
        $facebook = $request->facebook;
        $linkedin = $request->linkedin;
        $instagram = $request->instagram;
        $youtube = $request->youtube;
        $twitter = $request->twitter;
        $contact_link = $request->contact_link;
        $menu = $request->menu;
        $primary_color = $request->primary_color;
        $secondary_color = $request->secondary_color;
        $video1 = $request->video1;
        $video2 = $request->video2;
        $video3 = $request->video3;

        // Environment Variables
        $mail_host = env('MAIL_HOST','default');
        $mail_username = env('MAIL_USERNAME','default');
        $mail_password = env('MAIL_PASSWORD','default');
        $mail_port = env('MAIL_PORT','default');
        $mail_from_address = env('MAIL_FROM_ADDRESS','default');
        $mail_from_name = env('MAIL_FROM_NAME','default');
        $mail_reply_to_address = env('MAIL_REPLYTO_ADDRESS','default');
        $mail_admin_address = env('MAIL_ADMIN_ADDRESS','default');

        $mail = new PHPMailer(true);
        try {
            $mail->SMTPDebug = 2;
            $mail->Host = $mail_host;
            $mail->SMTPAuth   = true;
            $mail->Username = $mail_username;
            $mail->Password = $mail_password;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = $mail_port;

            $mail->setFrom($mail_from_address,$mail_from_name);
            $mail->addAddress($mail_admin_address, 'OnDigiCard');

            $mail->addReplyTo($mail_reply_to_address, $mail_from_name);
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');
           
            $mail->isHTML(true);

            $mail->Subject = 'New Order Request';
            $mail->Body    = '<!DOCTYPE html>
                    <html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">
                    <head>
                      <meta charset="utf-8">
                      <meta name="viewport" content="width=device-width,initial-scale=1">
                      <meta name="x-apple-disable-message-reformatting">
                      <title></title>
                      <!--[if mso]>
                      <style>
                        table {border-collapse:collapse;border-spacing:0;border:none;margin:0;}
                        div, td {padding:0;}
                        div {margin:0 !important;}
                      </style>
                      <noscript>
                        <xml>
                          <o:OfficeDocumentSettings>
                            <o:PixelsPerInch>96</o:PixelsPerInch>
                          </o:OfficeDocumentSettings>
                        </xml>
                      </noscript>
                      <![endif]-->
                      <style>
                        table, td, div, h1, p {
                          font-family: Arial, sans-serif;
                        }
                        table.data{
                            width:100%;
                        }
                        table.data tr th{
                          background: #eee;
                        }
                        table.data tr, table.data td, table.data th{
                          margin: 0!important;
                        }
                        table.data tr th, table.data tr td{
                           padding: 13px;
                        }
                        table.data tr td{
                           background: #f7f7f7;
                        }
                        @media screen and (max-width: 530px) {
                          .unsub {
                            display: block;
                            padding: 8px;
                            margin-top: 14px;
                            border-radius: 6px;
                            background-color: #555555;
                            text-decoration: none !important;
                            font-weight: bold;
                          }
                          .col-lge {
                            max-width: 100% !important;
                          }
                        }
                        @media screen and (min-width: 531px) {
                          .col-sml {
                            max-width: 27% !important;
                          }
                          .col-lge {
                            max-width: 73% !important;
                          }
                        }
                      </style>
                    </head>
                    <body style="margin:0;padding:0;word-spacing:normal;background-color:#f7f7f7;">
                      <div role="article" aria-roledescription="email" lang="en" style="text-size-adjust:100%;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;background-color:#f7f7f7;">
                        <table role="presentation" style="width:100%;border:none;border-spacing:0;">
                          <tr>
                            <td align="center" style="padding:0;">
                              <!--[if mso]>
                              <table role="presentation" align="center" style="width:600px;">
                              <tr>
                              <td>
                              <![endif]-->
                              <table>
                                <tr style="width:94%;max-width:1000px;border:none;border-spacing:0;text-align:left;font-family:Arial,sans-serif;font-size:16px;line-height:22px;color:#363636;">
                                  <td style="padding:40px 30px 30px 30px;text-align:center;font-size:24px;font-weight:bold;">
                                    <a href="https://manage.lenticas.com/" style="text-decoration:none;">
                                      <img src="https://manage.lenticas.com/assets/web_images/logo-dark.png" alt="Logo" style="width:80%;max-width:180px;height:auto;border:none;text-decoration:none;color:#ffffff;">
                                    </a>
                                  </td>
                                </tr>
                              </table>
                              <!-- Body -->
                              <table role="presentation" style="width:94%;max-width:1000px;border:none;border-spacing:0;text-align:left;font-family:Arial,sans-serif;font-size:16px;line-height:22px;color:#363636;">
                                <tr>
                                  <td style="padding:30px 30px 0px 30px;background-color:#ffffff;">
                                    <h1 style="margin-top:0;margin-bottom:10px;font-size:26px;line-height:25px;font-weight:bold;letter-spacing:-0.02em;text-align: center;">
                                        New Order Request
                                    </h1>
                                  </td>
                                </tr>
                                <tr>
                                  <td style="padding:20px;font-size:18px;background:#fff;">
                                    <p>
                                        You have received a new order request. Client details are as follow:
                                    </p>
                                    <h4 style="color:#F16505;">Personal Details:</h4>
                                    <div class="row" style="display:flex;margin-top: -30px;">
                                        <div style="width:50%;">
                                           <p>
                                             <b>Name:</b> '.$name.'
                                           </p>
                                           <p>
                                             <b>Mobile:</b> '.$mobile.'
                                           </p>
                                        </div>
                                        <div style="width:50%;">
                                           <p>
                                             <b>Email:</b> '.$email.'
                                           </p>
                                           <p>
                                             <b>WhatsApp:</b> '.$whatsapp.'
                                           </p>
                                        </div>
                                    </div>

                                    <h4 style="color:#F16505;">Company Details:</h4>
                                    <div class="row" style="display:flex;margin-top: -30px;">
                                        <div style="width:50%;">
                                           <p>
                                             <b>Company Name:</b>
                                             <p>'.$company_name.'</p>
                                           </p>
                                           <p>
                                             <b>Slogan:</b>
                                             <p>'.$slogan.'</p>
                                           </p>
                                        </div>
                                        <div style="width:50%;">
                                           <p>
                                             <b>Your Position:</b>
                                             <p>'.$position.'</p>
                                           </p>
                                           <p>
                                             <b>Website Link:</b>
                                             <p>'.$website.'</p>
                                           </p>
                                        </div>
                                    </div>

                                    <h4 style="color:#F16505;">Address Details:</h4>
                                    <div class="row" style="display:flex;margin-top: -30px;">
                                        <div style="width:50%;">
                                           <p>
                                             <b>Name For Attention:</b>
                                             <p>'.$attention_name.'</p>
                                           </p>
                                        </div>
                                        <div style="width:50%;">
                                           <p>
                                             <b>Address:</b>
                                             <p>'.$address.'</p>
                                           </p>
                                        </div>
                                    </div>

                                    <h4 style="color:#F16505;">About:</h4>
                                    <div class="row" style="display:flex;margin-top: -30px;">
                                        <div style="width:50%;">
                                           <p>
                                             <b>Heading:</b>
                                             <p>'.$heading.'</p>
                                           </p>
                                        </div>
                                        <div style="width:50%;">
                                           <p>
                                             <b>Details:</b>
                                             <p>'.$details.'</p>
                                           </p>
                                        </div>
                                    </div>
                                    
                                    <h4 style="color:#F16505;">Social Media Links:</h4>
                                    <div class="row" style="display:flex;margin-top: -30px;">
                                        <div style="width:50%;">
                                           <p>
                                             <b>Facebook:</b>
                                             <p>'.$facebook.'</p>
                                           </p>
                                           <p>
                                             <b>Linkedin:</b>
                                             <p>'.$linkedin.'</p>
                                           </p>
                                           <p>
                                             <b>Twitter:</b>
                                             <p>'.$twitter.'</p>
                                           </p>
                                        </div>
                                        <div style="width:50%;">
                                           <p>
                                             <b>Instagram:</b>
                                             <p>'.$instagram.'</p>
                                           </p>
                                           <p>
                                             <b>youtube:</b>
                                             <p>'.$youtube.'</p>
                                           </p>
                                        </div>
                                    </div>

                                    
                                    <div class="row" style="display:flex;margin-top: 0px;">
                                        <div style="width:50%;">
                                           <p>
                                             <h4 style="color:#F16505;">Contact Link:</h4>
                                             <p>'.$contact_link.'</p>
                                           </p>
                                        </div>
                                        <div style="width:50%;">
                                           <p>
                                             <h4 style="color:#F16505;">Menu Name:</h4>
                                             <p>'.$menu.'</p>
                                           </p>
                                        </div>
                                    </div>

                                    <h4 style="color:#F16505;">Template Colors:</h4>
                                    <div class="row" style="display:flex;margin-top: -30px;">
                                        <div style="width:50%;">
                                           <p>
                                             <b>Primary Color:</b>
                                             <p>'.$primary_color.'</p>
                                           </p>
                                        </div>
                                        <div style="width:50%;">
                                           <p>
                                             <b>Secondary Color:</b>
                                             <p>'.$secondary_color.'</p>
                                           </p>
                                        </div>
                                    </div>

                                    <h4 style="color:#F16505;">Libraries:</h4>
                                    <div class="row" style="display:flex;margin-top: -30px;">
                                        <div style="width:100%;">
                                           <p>
                                             <b>Video 1:</b>
                                             <p>'.$video1.'</p>
                                           </p>
                                           <p>
                                             <b>Video 2:</b>
                                             <p>'.$video2.'</p>
                                           </p>
                                           <p>
                                             <b>Video 3:</b>
                                             <p>'.$video3.'</p>
                                           </p>
                                        </div>
                                    </div>

                                  </td>
                                </tr>
                              </table>
                              <!-- footer -->
                              <table style="width:94%;max-width:1000px;border:none;border-spacing:0;text-align:left;font-family:Arial,sans-serif;font-size:16px;line-height:22px;color:#363636;">
                                <tr>
                                  <td style="padding:10px;text-align:center;font-size:14px;background-color:#F16504;color:#fff;">
                                    <p style="margin:0 0 0px 0;">
                                      &copy; Copyright 2021. All rights reserved.
                                    </p>
                                  </td>
                                </tr>
                              </table>
                              <!--[if mso]>
                              </td>
                              </tr>
                              </table>
                              <![endif]-->
                            </td>
                          </tr>
                        </table>
                      </div>

                    </body>
                    </html>';

            $mail->send();     

            return back()->withErrors('success');
       } catch (Exception $e) {
           return $e;
       }      
    }
}
