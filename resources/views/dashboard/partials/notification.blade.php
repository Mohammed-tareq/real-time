@forelse($notifications as $notification)
<div class="list-group list-group-flush my-n3">
    <div class="list-group-item {{ is_null($notification->read_at) ? 'bg-light' : 'bg-transparent' }}">
        <div class="row align-items-center">
            <div class="col-auto">
                <span class="fe fe-box fe-24"></span>
            </div>
            <div class="col">
                <small><strong>New User Registered</strong></small>
                <div class="my-0 text-muted small">
                    {{ $notification->data['message'] }}
                </div>
                <small class="badge badge-pill badge-light text-muted">
                    {{ $notification->created_at->diffForHumans() }}
                </small>
            </div>
        </div>
    </div>
</div>
@empty
<p class="text-center">No new notifications</p>
@endforelse
