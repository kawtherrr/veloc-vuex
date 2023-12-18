@component('mail::message')
<p style="text-align: center; color: #000000;">
    Welcome {{$user['email']}}, please validate your email address by clicking on the button below.
</p>

<table align="center" role="presentation">
    <tr>
        <td>
            <a href="{{ route('verify_email', $user['verification_code']) }}" style="
                background-color: #fdc100;
                color: #ffffff;
                text-decoration: none;
                display: inline-block;
                padding: 10px 20px;
                font-size: 16px;
                border-radius: 8px;
                text-align: center;
            ">
                Confirm Your Email Address
            </a>
        </td>
    </tr>
</table>

<p style="text-align: center; color: #000000; margin-top: 20px;">
    If you didn't request this email, there is nothing to worry about — you can safely ignore it!
</p>
@endcomponent
