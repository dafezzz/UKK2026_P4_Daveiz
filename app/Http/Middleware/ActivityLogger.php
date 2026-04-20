<?php

namespace App\Http\Middleware;

use App\Models\ActivityLog;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class ActivityLogger
{
    /**
     * Route prefixes that should not be logged.
     *
     * @var array<int, string>
     */
    private array $excludedPatterns = [
        'storage/*',
        'build/*',
        'css/*',
        'js/*',
        'images/*',
        'favicon.ico',
        'up',
        'logs*',
        'activity-logs*',
        '_debugbar/*',
    ];

    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        if (! $this->shouldLog($request)) {
            return $response;
        }

        try {
            ActivityLog::create([
                'user_id' => Auth::id(),
                'activity' => $this->resolveActivity($request->method()),
                'model' => $request->segment(1) ?? 'home',
                'description' => sprintf('%s %s', $request->method(), $request->path()),
                'ip_address' => $request->ip(),
                'method' => $request->method(),
                'url' => $request->fullUrl(),
                'user_agent' => $request->userAgent(),
            ]);
        } catch (\Throwable $exception) {
            // Logging failure must never break main request flow.
            Log::warning('Failed to write activity log', [
                'error' => $exception->getMessage(),
                'path' => $request->path(),
            ]);
        }

        return $response;
    }

    private function shouldLog(Request $request): bool
    {
        if (! in_array($request->method(), ['GET', 'POST', 'PUT', 'PATCH', 'DELETE'], true)) {
            return false;
        }

        if ($request->is($this->excludedPatterns)) {
            return false;
        }

        return true;
    }

    private function resolveActivity(string $method): string
    {
        return match ($method) {
            'POST' => 'create',
            'PUT', 'PATCH' => 'update',
            'DELETE' => 'delete',
            default => 'view',
        };
    }
}
