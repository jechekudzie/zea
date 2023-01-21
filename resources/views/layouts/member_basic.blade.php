<div>
    <h4 class="mb-3 mb-md-0">
        Welcome
       @if($member->title){{$member->title->name}}@endif {{ $member->name }}</h4>
    <h5 class="mb-3 mb-md-0">Registration number: {{$member->member_registration_number}}</h5>
</div>
