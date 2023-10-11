<!DOCTYPE html>
<html>
<head>
    <title>Certificate</title>
    <style>
        @page {
            margin: 0px;
        }

        body {
            margin: 0px;
            padding: 35px;
        }
    </style>
</head>
<body style="background-color: white;">
<div style="width: 100%; border: 5px solid #131a74; padding: 5px;">
    <div style="background-image:url('logo_back.png');background-size: contain;background-position: center;
    background-repeat:
no-repeat; border: 2px dashed #131a74; padding: 0 2% 6.12442rem">
        <h4 style="text-align: left;"><span style="color: blue">ZEA/</span>{{$member->member_registration_number}}
            /{{$member_subscription->period}}</h4>
        <div style="text-align: center;padding-top: 25px;">
            <img style="margin-top: -40px" height="80" src="logo.png">
        </div>
        <h2 style="text-align: center;margin-top: 10px;">CERTIFICATE OF MEMBERSHIP</h2>
        <table style="table-layout: fixed; width: 100%; ">
            <tr>
                <td style="padding: 10px" colspan="2">This is to certify that</td>
                <td style="padding: 10px">{{$member->name}}</td>
            </tr>
            <tr>
                <td style="padding: 10px" colspan="2">Registration Number</td>
                <td style="padding: 10px">ZEA/{{$member->member_registration_number}}</td>
            </tr>
            <tr>
                <td style="padding: 10px" colspan="2">Is fully subscribed as</td>
                <td style="padding: 10px">{{$member->member_category->name}}</td>
            </tr>
            <tr>
                <td style="padding: 10px;" colspan="2">Validity<br/>
                <td style="padding: 5px;font-size: 14px;color:blue;font-weight: bold;"> {{date('Y-m-d',strtotime($member_subscription->start_date))}}
                    - {{date('Y-m-d',strtotime($member_subscription->expiry_date))}}</td>

            </tr>
            <tr>
                <td style="padding: 10px;" colspan="2">Sign Off<br/>
                <td style="padding: 10px">{!! $html !!}</td>
            </tr>

        </table>

        <p style="text-align: center; text-decoration:underline;padding-top:5px;">SHYLOCK MUYENGWA, PHD</p>
        <p style="text-align: center; text-decoration: underline;">PRESIDENT, ZEA</p>
        <p style="text-align: center; margin-bottom: 5px;"><img style="width: 100px;" src="signature.png"></p>
    </div>

</div>
</body>
</html>
