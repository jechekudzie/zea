<div>
    <h4 class="mb-3 mb-md-0">
        Welcome {{ strtolower($member->member_category->name) == 'institution' ? '': $member->title->name}} {{ $member->name }}</h4>
    <h5 class="mb-3 mb-md-0">Registration number: ZEA{{ str_pad($member->id, 4, '0', STR_PAD_LEFT)  }}</h5>
</div>
