<html xmlns="https://www.w3.org/1999/xhtml"
      xmlns:o="urn:schemas-microsoft-com:office:office">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="format-detection" content="telephone=no">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <style>
        body {
            margin: 0 !important;
            padding: 0 !important;
            -webkit-text-size-adjust: 100% !important;
            -ms-text-size-adjust: 100% !important;
            -webkit-font-smoothing: antialiased !important; /*style only recognised by some browsers*/
        }

        img {
            border: 0 !important;
            outline: none !important;
        }

        p {
            Margin: 0px !important; /*Old versions of Outlook ignore margin if it is lower case as usual*/
            padding: 0px !important;
        }

        table {
            border-collapse: collapse;
            mso-table-lspace: 0px; /*Microsoft Office only styling*/
            mso-table-rspace: 0px; /*Microsoft Office only styling*/
        }

        td, a, span {
            border-collapse: collapse;
            mso-line-height-rule: exactly; /*Microsoft Office only styling*/
        }

        .ExternalClass * {
            line-height: 100%;
        }

        @media yahoo {
            .em_img {
                min-width: 700px !important;
            }
        }

        .em_img {
            width: 700px !important;
            height: auto !important;
        }

        /* Text decoration removed */
        .em_defaultlink a {
            color: inherit !important;
            text-decoration: none !important;
        }

        span.MsoHyperlink {
            mso-style-priority: 99; /*Microsoft Office only styling*/
            color: inherit;
        }

        span.MsoHyperlinkFollowed {
            mso-style-priority: 99; /*Microsoft Office only styling*/
            color: inherit;
        }

        /* Media Query for desktop layout */
        @media only screen and (min-width: 481px) and (max-width: 699px) {
            .em_main_table {
                width: 100% !important;
            }

            .em_wrapper {
                width: 100% !important;
            }

            .em_hide {
                display: none !important;
            }

            .em_img {
                width: 100% !important;
                height: auto !important;
            }

            .em_h20 {
                height: 20px !important;
            }

            .em_padd {
                padding: 20px 10px !important;
            }
        }

        /* Media Query for mobile layout */
        @media screen and (max-width: 480px) {
            .em_main_table {
                width: 100% !important;
            }

            .em_wrapper {
                width: 100% !important;
            }

            .em_hide {
                display: none !important;
            }

            .em_img {
                width: 100% !important;
                height: auto !important;
            }

            .em_h20 {
                height: 20px !important;
            }

            .em_padd {
                padding: 20px 10px !important;
            }

            .em_text1 {
                font-size: 16px !important;
                line-height: 24px !important;
            }

            u + .em_body .em_full_wrap {
                width: 100% !important;
                width: 100vw !important;
            }
        }
    </style>

</head>
<body class="em_body" style="margin:0px; padding:0px;" bgcolor="#efefef">
<table class="em_full_wrap" valign="top" width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#efefef"
       align="center">
    <tbody>
    <tr>
        <td valign="top" align="center">
            <table class="em_main_table" style="width:700px;" width="700" cellspacing="0" cellpadding="0" border="0"
                   align="center">
                <tbody>
                <tr>
                    <td valign="top" align="center">
                        <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
                            <tbody>
                            <tr>
                                <td valign="top" align="center">
                                    <img class="em_img"
                                         alt="Welcome to Vibramade"
                                         style="display:block;
                                                font-family:Arial, sans-serif;
                                                font-size:30px;
                                                line-height:34px;
                                                color:#000000;
                                                min-width:700px"
                                         src="{{assert('frontend/img/logo-home.png')}}"
                                         width="700"
                                         border="0"
                                         height="230">
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>

                <tr>
                    <td style="padding:35px 70px 30px;" class="em_padd" valign="top" bgcolor="#0d1121" align="center">
                        <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
                            <tbody>
                            <tr>
                                <h2 class="text"
                                    style="color:#ffffff;font-family:Poppins,Helvetica,Arial,sans-serif;font-size:28px;font-weight:500;font-style:normal;letter-spacing:normal;line-height:36px;text-transform:none;text-align:center;padding:0;margin:0">
                                    Hi "Admin"</h2>
                            </tr>
                            <tr>

                                <td style="font-size:0px;
                                             line-height:0px;
                                             height:15px;"
                                    height="15">
                                    &nbsp;
                                </td>
                            </tr>
                            <tr>
                                <td style="font-family:'Open Sans', Arial, sans-serif;
                                             font-size:18px;
                                             line-height:22px;
                                             color:#fbeb59;
                                             letter-spacing:2px;
                                             padding-bottom:12px;"
                                    valign="top"
                                    align="center">

                                    User details:

                                </td>
                            </tr>
                            <tr>
                                <!--—Start-this is space of 25px to separate two paragraphs ---->
                                <td class="em_h20"
                                    style="font-size:0px;
                                             line-height:0px;
                                             height:25px;"
                                    height="25">
                                    &nbsp;
                                </td>
                                <!--—End-this is space of 25px to separate two paragraphs ---->
                            </tr>
                            <tr>
                                <td style="font-family:'Open Sans', Arial, sans-serif;
                                                                             font-size:16px;
                                                                             line-height:30px;
                                                                             color:#ffffff;"
                                    valign="top"
                                    align="center">

                                    Name: {{ $data['name'] }} <br>
                                    Email: {{ $data['email'] }} <br>
                                    Phone: {{ $data['phone'] }} <br>
                                    Subject: {{ $data['subject'] }} <br>
                                    Message: {{ $data['message'] }} <br><br>

                                </td>
                            </tr>
                            <tr>
                                <!--—Start-this is space of 25px to separate two paragraphs ---->
                                <td class="em_h20"
                                    style="font-size:0px;
                                             line-height:0px;
                                             height:25px;"
                                    height="25">
                                    &nbsp;
                                </td>
                                <!--—End-this is space of 25px to separate two paragraphs ---->
                            </tr>

                            <tr>
                                <td style="font-family:'Open Sans', Arial, sans-serif;
                                             font-size:18px;
                                             line-height:22px;
                                             color:#fbeb59;
                                             letter-spacing:2px;
                                             padding-bottom:12px;"
                                    valign="top"
                                    align="center">

                                    Thanks You!

                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="padding:38px 30px;" class="em_padd" valign="top" bgcolor="#f6f7f8" align="center">
                        <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
                            <tbody>
                            <tr>
                                <td style="font-family:'Open Sans', Arial, sans-serif;
                                             font-size:11px;
                                             line-height:18px;
                                             color:#999999;"
                                    valign="top"
                                    align="center">
                                    <a href="/"
                                       target="_blank"
                                       style="color:#999999;
                                              text-decoration:underline;">
                                        Vibramade
                                    </a>
                                    <br>
                                    © 2023 Vibramade. All Rights Reserved.
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    </tbody>
</table>

<div class="em_hide" style="white-space: nowrap;
                                display: none;
                                font-size:0px;
                                line-height:0px;">
</div>

</body>

</html>
