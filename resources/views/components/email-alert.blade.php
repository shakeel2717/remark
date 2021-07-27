@if (session('user')[0]->status == 'Pending')
    <div class="alert alert-soft-dark mb-5 mb-lg-7" role="alert">
        <div class="media align-items-center">
            <img class="avatar avatar-xl mr-3" src="{{ asset('assets/svg/illustrations/yelling-reverse.svg') }}"
                alt="Image Description">

            <div class="media-body">
                <h3 class="alert-heading mb-1">Attention! (Action Required)</h3>
                <p class="mb-0">We have sent an email message to your email address so with any luck the great guardians
                    of the internet will delver this message to your inbox, or spam folder if you are lucky. If it has
                    not arrived in 5-10 minutes then abandon all hope and click this link to try again.</p>
            </div>
        </div>
    </div>
@endif
<x-alert />
