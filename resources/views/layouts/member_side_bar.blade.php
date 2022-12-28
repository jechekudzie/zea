<div class="d-none d-md-block col-md-3 col-xl-3 left-wrapper">
    <div class="card rounded">
        <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-2">
                <h6 class="card-title mb-0">About</h6>
                <div class="dropdown">
                    <button class="btn p-0" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                        Edit <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                data-feather="edit-2" class="icon-sm me-2"></i> <span
                                class="">Edit</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                data-feather="git-branch" class="icon-sm me-2"></i> <span
                                class="">Update</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                data-feather="eye" class="icon-sm me-2"></i> <span class="">View all</span></a>
                    </div>
                </div>
            </div>
            <div class="mt-3">
                <label class="tx-11 fw-bolder mb-0 text-uppercase">Member Category:</label>
                <p class="text-muted">{{$member->member_category->name}}</p>

                @role('Admin')
                <a href="#" data-bs-toggle="modal"
                   data-bs-target="#exampleModal{{$member->id}}">
                    Upgrade membership
                </a>
                @endrole


            </div>
            <div class="mt-3">
                <label
                    class="tx-11 fw-bolder mb-0 text-uppercase">{{ strtolower($member->member_category->name) == 'institution' ? 'Date of Incorporation' : 'DOB' }}
                    :</label>
                <p class="text-muted">{{$member->dob}}</p>
            </div>
            <div class="mt-3">
                <label class="tx-11 fw-bolder mb-0 text-uppercase">Identification:</label>
                <p class="text-muted">{{$member->identification_type->name}}<br/>
                    {{$member->identification_type->description}} :{{$member->identification}}
                </p>
            </div>
            @if(strtolower($member->member_category->name) != 'institution')
                <div class="mt-3">
                    <label class="tx-11 fw-bolder mb-0 text-uppercase">Gender:</label>
                    <p class="text-muted">{{ strtolower($member->member_category->name) == 'institution' ? '' : $member->gender->name }}</p>
                </div>
            @endif
            <div class="mt-3 d-flex social-links">

            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal{{$member->id}}" tabindex="-1"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form method="post" action="{{url('/members/'.$member->id.'/upgrade_downgrade_membership')}}">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">UPGRADE MEMBERSHIP</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to upgrade/downgrade this member?</p>

                        <div class="col-md-6 col-lg-6 mb-3">
                            <select class="form-select" name="member_category_id" id="categorySelect">
                                <option value="">Choose Category</option>
                                @foreach(\App\Models\MemberCategory::all() as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Upgrade/Downgrade</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            No
                        </button>
                    </div>
                </div>
            </form>
        </div>

    </div>

    <div class="card rounded">
        <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-2">
                <h6 class="card-title mb-0">Contact</h6>
                <div class="dropdown">
                    <button class="btn p-0" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                        Edit <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                data-feather="edit-2" class="icon-sm me-2"></i> <span
                                class="">Edit</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                data-feather="git-branch" class="icon-sm me-2"></i> <span
                                class="">Update</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                data-feather="eye" class="icon-sm me-2"></i> <span class="">View all</span></a>
                    </div>
                </div>
            </div>
            @if($member->member_contact)
                <div class="mt-3">
                    <label class="tx-11 fw-bolder mb-0 text-uppercase">Contact email:</label>
                    <p class="text-muted">{{$member->member_contact->contact_email}}</p>
                </div>
                <div class="mt-3">
                    <label
                        class="tx-11 fw-bolder mb-0 text-uppercase">Contact number
                        :</label>
                    <p class="text-muted">{{$member->member_contact->contact_number}}</p>
                </div>

                <div class="mt-3">
                    <label
                        class="tx-11 fw-bolder mb-0 text-uppercase">Province $ City :</label>
                    <p class="text-muted">{{$member->member_contact->physical}}</p>
                    <p class="text-muted">
                        @if($member->member_contact->province)
                            {{$member->member_contact->province->name}}
                        @endif
                    </p>
                    <p class="text-muted">
                        @if($member->member_contact->city)
                            {{$member->member_contact->city->name}}
                        @endif
                    </p>
                </div>
            @endif


        </div>
    </div>
</div>
