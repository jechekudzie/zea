<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button"
       data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i data-feather="bell"></i>
        <div class="indicator">
            <div class="circle"></div>
        </div>
    </a>
    <div class="dropdown-menu p-0" aria-labelledby="notificationDropdown">
        <div class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom">
            <p>
                @if(auth()->check())
                    @if(auth()->user()->unreadNotifications)
                        ({{auth()->user()->unreadNotifications()->count()}}) Notification(s)
                    @endif
                @endif
            </p>
        </div>
        <div class="p-1">
            @if(auth()->check() )
                @if(auth()->user()->unreadNotifications)
                    @foreach (auth()->user()->unreadNotifications as $notification)
                        <a href="{{$notification->data['url']}}" class="dropdown-item d-flex align-items-center py-2">
                            <div
                                class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                            </div>
                            <div class="flex-grow-1 me-2">
                                <p>{{$notification->data['type']}}</p>
                                <p class="tx-12 text-muted">
                                    @if(date_diff(new \DateTime($notification->created_at), new \DateTime())->format("%d") >= 1)

                                        {{ date_diff(new \DateTime($notification->created_at), new \DateTime())->format("%d days %h hours %i min")}}

                                    @elseif(date_diff(new \DateTime($notification->created_at), new \DateTime())->format("%h") >= 1)

                                        {{ date_diff(new \DateTime($notification->created_at), new \DateTime())->format("%h hours %i min")}}
                                    @else
                                        {{ date_diff(new \DateTime($notification->created_at), new \DateTime())->format("%i min")}}
                                    @endif
                                    ago
                                </p>
                            </div>
                        </a>
                    @endforeach
                @endif
            @endif
        </div>
        <div class="px-3 py-2 d-flex align-items-center justify-content-center border-top">
            <a href="javascript:;">View all</a>
        </div>
    </div>
</li>

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button"
       data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30"
             alt="profile">
    </a>
    <div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
        <div class="d-flex flex-column align-items-center border-bottom px-5 py-3">
            <div class="mb-3">
                <img class="wd-80 ht-80 rounded-circle" src="https://via.placeholder.com/80x80"
                     alt="">
            </div>
            <div class="text-center">
                <p class="tx-16 fw-bolder">@if(Auth::check()){{ Auth::user()->name}}@endif</p>
                <p class="tx-12 text-muted">@if(Auth::check()){{ Auth::user()->email}}@endif</p>
            </div>
        </div>
        <ul class="list-unstyled p-1">
            <li class="dropdown-item py-2">
                <a href="pages/general/profile.html" class="text-body ms-0">
                    <i class="me-2 icon-md" data-feather="user"></i>
                    <span>Profile</span>
                </a>
            </li>
            <li class="dropdown-item py-2">
                <a href="javascript:;" class="text-body ms-0">
                    <i class="me-2 icon-md" data-feather="edit"></i>
                    <span>Edit Profile</span>
                </a>
            </li>
            <li class="dropdown-item py-2">
                <a href="javascript:;" class="text-body ms-0">
                    <i class="me-2 icon-md" data-feather="repeat"></i>
                    <span>Switch User</span>
                </a>
            </li>
            <li class="dropdown-item py-2">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{route('logout')}}"
                       onclick="event.preventDefault();
                                                this.closest('form').submit();" class="text-body ms-0">
                        <i class="me-2 icon-md" data-feather="log-out"></i>
                        <span>Log Out</span>

                    </a>
                </form>
            </li>
        </ul>
    </div>
</li>
