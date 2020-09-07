<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ResidentialTitle.com Contact Message</title>
</head>
<body>
<b>New Message Received from ResidentialTitle.com</b><br>
<b>Name:</b><br>
{{ $data['name'] }}<br>
<b>Phone:</b><br>
{{ $data['phone'] }}<br>
<b>Email:</b><br>
{{ $data['email'] }}<br>
<b>Message</b><br>
{!! nl2br(e($data['message']))!!}}

</body>
</html>
