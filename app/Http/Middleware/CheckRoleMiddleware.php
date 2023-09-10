<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // dd(Auth::user()->hasRole('admin'));
        if (Auth::user()->hasRole('manager') || Auth::user()->hasRole('admin')) {
            return $next($request);
        } else if (Auth::user()->hasRole('user')) {
            // dd('1');
            $arrPath = explode('/', $request->path());
            $currentPath = $arrPath[0] . "/" . $arrPath[1];
            if (isset($arrPath[2])) {
                $customPath = $arrPath[0] . "/" . $arrPath[1] . "/" . $arrPath[2];
            } else {
                $customPath = '';
            }
            if (array_key_exists($request->path(), config('custom.portal_employee_functions'))) {
                return $next($request);
            } else if ($customPath == 'users/persons/list_emp' && isset($arrPath[2])) {
                $currentFeature = 'Quản lý nghỉ việc';
                $currentPermission = "Đọc " . $currentFeature;
                if (!isset($arrPath[2])) {
                    $responseType = 'view';
                } else {
                    $responseType = 'json';
                }
                $checkPermission = $this->checkPermissionOfUser($currentPermission, $responseType);
                if ($checkPermission == 'next') {
                    return $next($request);
                } else if ($checkPermission == 'pageError') {
                    return response()->view('dashboards.pages.error');
                } else {
                    return response()->json(['error', 'Bạn không có quyền sử dụng chức năng này']);
                }
            } else if (array_key_exists($currentPath, config('custom.permission_paths_functions'))) {
                $currentFeature = config('custom.permission_paths_functions')[$currentPath];
                $responseType = 'json';
                if (!isset($arrPath[2])) {
                    $currentPermission = "Đọc " . $currentFeature;
                    $responseType = 'view';
                } else if (
                    array_search('list', $arrPath) ||
                    array_search('show', $arrPath) ||
                    array_search('edit', $arrPath) ||
                    array_search('get_person_image', $arrPath) ||
                    array_search('get_all_public_holiday', $arrPath) ||
                    array_search('work-day-adjustment', $arrPath) ||
                    array_search('storage/documents', $arrPath) ||
                    array_search('get_data', $arrPath) ||
                    array_search('get_contract_by_person', $arrPath) ||
                    array_search('get_working_histories_by_person', $arrPath) ||
                    array_search('get_training_by_person', $arrPath) ||
                    array_search('get_achievements_by_person', $arrPath) ||
                    array_search('detail', $arrPath) ||
                    array_search('get_pdf_file', $arrPath)
                ) {
                    $currentPermission = "Đọc " . $currentFeature;
                } else if (array_search('store', $arrPath)) {
                    $currentPermission = "Thêm " . $currentFeature;
                } else if (array_search('update', $arrPath)) {
                    $currentPermission = "Sửa " . $currentFeature;
                } else if (array_search('delete', $arrPath)) {
                    $currentPermission = "Xoá " . $currentFeature;
                } else if (array_search('export', $arrPath)) {
                    $currentPermission = "Export " . $currentFeature;
                } else {
                    $currentPermission = "";
                }
                if ($currentPermission) {
                    $checkPermission = $this->checkPermissionOfUser($currentPermission, $responseType);
                    if ($checkPermission == 'next') {
                        return $next($request);
                    } else if ($checkPermission == 'pageError') {
                        return response()->view('dashboards.pages.error');
                    } else {
                        return response()->json(['error', 'Bạn không có quyền sử dụng chức năng này']);
                    }
                }
                return response()->json(['error', 'Bạn không có quyền sử dụng chức năng này']);
            }
        }
        return response()->view('dashboards.pages.error');
    }

    public function checkPermissionOfUser($currentPermission, $responseType)
    {
        $users = User::permission($currentPermission)->pluck('id');
        if (in_array(Auth::user()->id, $users->toArray())) {
            return 'next';
        } else if ($responseType == 'view') {
            return 'pageError';
        } else {
            return 'jsonError';
        }
    }
}
