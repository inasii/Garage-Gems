<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
</head>
<body>
    <h1>Profile Page</h1>

    <div>
    <h2>User Details</h2>

    <p><strong>First Name:</strong> {{ $userData->first_name }}</p>
    <p><strong>Last Name:</strong> {{ $userData->last_name }}</p>
    <p><strong>Email:</strong> {{ $userData->email }}</p>
    <p><strong>Phone Number:</strong> {{ $userData->phone_num }}</p>
    <p><strong>Role:</strong> {{ $userData->role }}</p>

    @if ($Userprofile)
        <p><strong>Adress 1:</strong> {{ $Userprofile->address_one ?? 'Not provided' }}</p>
        <p><strong>Adress 2:</strong> {{ $Userprofile->address_two ?? 'Not provided' }}</p>
        <p><strong>Province ID:</strong> {{ $Userprofile->provinces_id ?? 'Not provided' }}</p>
        <p><strong>Regency ID:</strong> {{ $Userprofile->regencies_id ?? 'Not provided' }}</p>
        <p><strong>Zip code:</strong> {{ $Userprofile->zip_code ?? 'Not provided' }}</p>
        <p><strong>Country:</strong> {{ $Userprofile->country ?? 'Not provided' }}</p>
    @else
        <p><strong>User Profile:</strong> Not found</p>
    @endif

    <a href="{{ route('profile.edit') }}">Edit Profile</a>
</div>

</body>
</html>
