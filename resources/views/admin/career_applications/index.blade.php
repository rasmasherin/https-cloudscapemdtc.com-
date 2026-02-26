@extends('admin.layouts.app')

@section('content')

<div class="container" style="background: #ffffff; padding:20px; border-radius:16px;">

    <h2 style="margin-bottom:20px;">Career Applications</h2>

    @if(session('success'))
        <div style="color:green; margin-bottom:15px;">
            {{ session('success') }}
        </div>
    @endif

    <div style="overflow-x:auto;">
        <table style="width:100%; border-collapse:collapse; background:#E6DFF5;">
            <thead>
                <tr style="background: #3F355D; color:#fff;">
                    <th style="padding:12px; border-right:1px solid #ffffff40;">Name</th>
                    <th style="padding:12px; border-right:1px solid #ffffff40;">Email</th>
                    <th style="padding:12px; border-right:1px solid #ffffff40;">Experience</th>
                    <th style="padding:12px; border-right:1px solid #ffffff40;">Position</th>
                    <th style="padding:12px; border-right:1px solid #ffffff40;">Applied</th>
                    <th style="padding:12px;">Action</th>
                </tr>
            </thead>

            <tbody>
                @forelse($applications as $app)
                <tr style="border-bottom:1px solid #3F355D;">
                    <td style="padding:12px; border-right:1px solid #3F355D;">{{ $app->full_name }}</td>
                    <td style="padding:12px; border-right:1px solid #3F355D;">{{ $app->email }}</td>
                    <td style="padding:12px; border-right:1px solid #3F355D;">{{ $app->experience }}</td>
                    <td style="padding:12px; border-right:1px solid #3F355D;">{{ $app->position }}</td>
                    <td style="padding:12px; border-right:1px solid #3F355D;">
                        {{ $app->created_at->format('d M Y') }}
                    </td>

                    <!-- ACTION COLUMN -->
                    <td style="padding:12px;">
                        <div class="action-wrapper">

                            <a href="{{ route('admin.career_applications.show', $app->id) }}"
                               class="btn-action btn-view">
                                View
                            </a>

                            <form action="{{ route('admin.career_applications.destroy', $app->id) }}"
                                  method="POST"
                                  onsubmit="return confirm('Are you sure you want to delete this application?');">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn-action btn-delete">
                                    Delete
                                </button>
                            </form>

                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" style="padding:15px; text-align:center;">
                        No applications found
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div style="margin-top:20px;">
        {{ $applications->links() }}
    </div>

</div>

<style>
/* ACTION BUTTON LAYOUT */
.action-wrapper {
    display: flex;
    gap: 10px;
    align-items: center;
}



.action-wrapper form {
    margin: 0;
}

/* COMMON BUTTON */
.btn-action {
    font-size: 16px;
    font-weight: 600;
    padding: 10px 20px;
    border-radius: 8px;
    border: none;
    cursor: pointer;
    text-decoration: none;
    display: inline-block;
    white-space: nowrap;
}

/* VIEW */
.btn-view {
    background: #3F355D;
    color: #fff;
}

.btn-view:hover {
    background: #584b80;
}

/* DELETE */
.btn-delete {
    background: #b18bd8;
    color: #fff;
}

.btn-delete:hover {
    background: #9f78c8;
}
</style>
@endsection
