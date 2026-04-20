@extends('layouts.app')

@section('content')
<div class="container-fluid py-4">

    <div class="mb-4">
        <h5 class="fw-semibold mb-1 text-dark">Activity Logs</h5>
        <small class="text-muted">Audit log request, login, dan logout sistem</small>
    </div>

    <div class="card border-0 shadow-sm mb-3">
        <div class="card-body">
            <form method="GET" class="d-flex gap-2">
                <input
                    type="text"
                    name="search"
                    value="{{ request('search') }}"
                    class="form-control"
                    placeholder="Cari user, activity, model, method, url...">
                <button class="btn btn-primary btn-sm px-3">Cari</button>
            </form>
        </div>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="table-responsive">
            <table class="table align-middle mb-0">
                <thead class="table-light">
                    <tr class="text-muted small">
                        <th style="width: 50px;">No</th>
                        <th>User</th>
                        <th>Activity</th>
                        <th>Model</th>
                        <th>Method</th>
                        <th>IP</th>
                        <th>URL</th>
                        <th>Waktu</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($logs as $log)
                    <tr>
                        <td class="text-muted">{{ $logs->firstItem() + $loop->index }}</td>
                        <td class="fw-medium">{{ $log->user->name ?? '-' }}</td>
                        <td>
                            <span class="badge bg-light text-dark border">
                                {{ $log->activity ?? '-' }}
                            </span>
                        </td>
                        <td>{{ $log->model ?? '-' }}</td>
                        <td>
                            <span class="badge bg-secondary">
                                {{ $log->method ?? '-' }}
                            </span>
                        </td>
                        <td class="text-muted small">{{ $log->ip_address ?? '-' }}</td>
                        <td class="small text-muted">{{ \Illuminate\Support\Str::limit($log->url ?? '-', 40) }}</td>
                        <td class="text-muted small">{{ $log->created_at?->format('d M Y H:i:s') }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8" class="text-center py-5 text-muted">Belum ada activity logs</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-4 d-flex justify-content-end">
        {{ $logs->links('pagination::bootstrap-5') }}
    </div>
</div>
@endsection
