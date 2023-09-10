<?php
$currentYear = date('Y');
return [
    'user_gender' => [
        'Nam' => '1',
        'Nữ' => '0',
        'Khác' => '2',
    ],

    'show_gender' => [
        '1' => 'Nam',
        '0' => 'Nữ',
    ],

    'roles_name' => [
        'manager' => 'Nhân viên nhân sự',
        'user' => 'Nhân viên',
        'admin' => 'Quản lý',
    ],

    'roles_name_database' => [
        'Nhân viên nhân sự' => 'manager',
        'Nhân viên' => 'user',
        'Quản lý' => 'admin',
    ],

    'status_user' => [
        '0' => 'Đang làm việc',
        '1' => 'Đang nghỉ phép',
        '2' => 'Đã nghỉ việc',
    ],

    'status_user_import' => [
        'Đang làm việc' => '1',
        'Đang nghỉ phép' => '2',
        'Đã nghỉ việc' => '3',
    ],

    'status_contract' => [
        '0' => 'Có hiệu lực',
        '1' => 'Đã hết hạn',
        '2' => 'Sắp hết hạn',
    ],

    // 'status_recruitment' => [
    //     '0' => 'Đã duyệt',
    //     '1' => 'Từ chối',
    //     '2' => 'Chưa duyệt',
    //     '3' => 'Đang tuyển',
    //     '4' => 'Đã tuyển',
    //     '5' => 'Huỷ bỏ',
    // ],

    'status_recruitment' => [
        'Mở' => '0',
        'Đóng' => '1'
    ],

    'priority_recruitment' => [
        '0' => 'Cao',
        '1' => 'Trung bình',
        '2' => 'Thấp',
    ],

    'notify_message' => [
        'add_success' => 'Thêm mới thành công',
        'update_success' => 'Chỉnh sửa thành công',
        'delete_success' => 'Xoá thành công',
        'error_message_1' => 'Ngày bắt đầu không được lớn hơn ngày kết thúc',
        'error_message_2' => 'Nhân viên này có hợp đồng còn thời hạn',
        'error_message_3' => 'Thời gian nghỉ phép trùng với ngày nghỉ phép trước đó',
        'error_message_4' => 'Không thể xoá công tác này',
        'error_message_5' => 'Bạn không thể xóa chức vụ khi tồn tại nhân viên có chức vụ này',
        'error_message_6' => 'Không thể xoá tổ chức này',
        'error_message_7' => 'Không thể xoá tình trạng làm việc này',
        'error_message_8' => 'Ngày bắt đầu công tác đã tồn tại',
        'error_message_9' => 'Không thể chỉnh sửa phiếu đánh giá này',
        'error_message_10' => 'Không thể xoá khu vực này',
        'error_message_11' => 'Không thể xoá danh mục này',
        'error_message_12' => 'Không được tạo trùng ngày đề xuất đi làm ngày lễ cho nhân viên',
        'error_message_13' => 'Nhân viên này đã có phiếu đánh giá',
        'error_message_14' => 'Không thể xoá ứng viên này',
        'error_message_15' => 'Không thể xoá kế hoạch tuyển dụng này này',
        'error_message_16' => 'Bạn không thể xoá dữ liệu đang được sử dụng ở danh mục khác',
        'set_main_owner_success' => 'Thiết lập main owner thành công',
        'change_password' => 'Thay đổi mật khẩu thành công',
        'reset_password' => 'Reset mật khẩu thành công',
        'confirm_success' => 'Xác nhận thành công',
        'confirm_success_1' => 'Duyệt thành công',
        'set_role_success' => 'Phân quyền thành công',
    ],

    'default' => [
        'user_password' => 'Dinco@' . $currentYear,
    ],

    'status_training' => [
        '2' => 'Chưa bắt đầu',
        '3' => 'Đang đào tạo',
        '0' => 'Hoàn thành',
        '1' => 'Huỷ',

    ],

    'category_training' => [
        '1' => 'Đào tạo hội nhập',
        '2' => 'Đào tạo tiếng anh',
        '3' => 'Đào tạo kĩ năng mềm',
        '4' => 'Đào tạo chuyên môn',
        '5' => 'Đào tạo khác',
    ],

    'training_rank' => [
        '0' => 'Đạt',
        '1' => 'Không đạt',
        '2' => 'Chưa xếp loại',
    ],

    'category_interview' => [
        '1' => 'Nhân sự phỏng vấn',
        '2' => 'Phỏng vấn chuyên môn',
    ],

    'type_training' => [
        '0' => 'Online',
        '1' => 'Offline',
    ],

    'category_furloughs_is_paid' => [
        '0' => 'Có tính lương',
        '1' => 'Không tính lương',
    ],

    'furlough_type_status' => [
        '0' => 'Hoạt động',
        '1' => 'Hết hạn',
    ],

    // 'furlough_status' => [
    //     '0' => 'Chờ phê duyệt',
    //     '1' => 'Duyệt bước 1',
    //     '2' => 'Từ chối',
    //     '3' => 'Duyệt bước 2',
    //     '4' => 'Hết hạn',
    //     '5' => 'Huỷ',
    // ],

    'furlough_status' => [
        '0' => 'Chờ phê duyệt',
        '1' => 'Đã duyệt',
        '2' => 'Từ chối',
        '3' => 'Hết hạn',
        '4' => 'Huỷ',
    ],

    'party_role_types' => [
        '1' => 'Internal Organization',
        '2' => 'Employee',
        '3' => 'Contact',
        '4' => 'Customer',
        '5' => 'Supplier',
        '6' => 'Distributor',
        '7' => 'Dealer',
        '8' => 'External Organization',
        '9' => 'External Employee',
        '10' => 'Candidate',
    ],

    'email_type' => [
        '1' => 'company_email',
        '2' => 'personal_email',
    ],

    'address_type' => [
        '1' => 'permanent_address',
        '2' => 'temporary_address',
    ],

    'phone_type' => [
        '1' => 'personal_phone',
        '2' => 'urgency_phone',
    ],

    'position_status_type' => [
        '1' => 'Đang mở',
        '2' => 'Đã đóng',
    ],

    'organization_types' => [
        '1' => 'Internal Company',
        '2' => 'External Company',
        '3' => 'Department',
        '4' => 'Supplier',
        '5' => 'Contractor',
        '6' => 'Sub Department',
    ],

    'employee_types' => [
        'Internal Employee' => 'Internal Employee',
        'External Employee' => 'External Employee',
    ],

    'employment_statuses' => [
        'Đang làm việc' => '1',
        'Đang nghỉ phép' => '4',
        'Đã nghỉ việc' => '3',
    ],

    'employment_statuses_badge' => [
        '1' => 'badge-success',
        '2' => 'badge-warning',
        '3' => 'badge-danger',
    ],

    'position_statuses' => [
        'Hoạt động' => '0',
        'Không hoạt động' => '1',
    ],

    'number_timeoffs_perday' => [
        '0' => '0.5 Phép',
        '1' => '1 Phép',
    ],

    'arr_criteria_details' => [
        '1' => 'C1',
        '2' => 'C2',
        '3' => 'C3',
        '4' => 'C4',
        '5' => 'C5',
    ],

    'criteria_types' => [
        'Đánh giá tư cách' => '1',
        'Đánh giá năng lực' => '2',
    ],

    'arr_result_reviews' => [
        'Không đạt' => 'Không đạt',
        'Cần cải thiện' => 'Cần cải thiện',
        'Đạt' => 'Đạt',
    ],

    'performance_review_status' => [
        'Nhân viên đồng ý' => '0',
        'Quản lý trực tiếp đánh giá' => '1',
        'Nhân viên không đồng ý' => '2',
        'Quản lý gián tiếp đánh giá' => '4',
        'Quản lý gián tiếp đã phê duyệt' => '6',
        'Quản lý gián tiếp không duyệt' => '5',
        'Ban giám đốc đánh giá' => '3',
    ],

    'marital_status' => [
        '0' => 'Độc thân',
        '1' => 'Đã kết hôn',
    ],

    'is_saved' => [
        'save_draft' => 0,
        'save_absolute' => 1,
        'delete_draft' => 2,
    ],

    'employees_commitment_flag' => [
        'true' => '1',
        'false' => '0',
    ],

    'current_cycles' => [
        'true' => '1',
        'false' => '0',
    ],

    'payroll_statuses' => [
        'Đang hoạt động' => '0',
        'Đã hết hạn' => '1',
        'Sắp hoạt động' => '2',
    ],

    'list_program_ids' => [
        'hrm' => '5',
    ],

    'user_status' => [
        "Active" => 1,
        "Inactive" => 0,
    ],

    'contract_import' => [
        'Hợp đồng thử việc' => 1,
        'Hợp đồng xác định thời hạn 6 tháng' => 2,
        'Hợp đồng xác định thời hạn 1 năm' => 3,
        'Hợp đồng xác định thời hạn 2 năm' => 4,
        'Hợp đồng không xác định thời hạn' => 5,
    ],

    'work_request_status' => [
        'Chờ duyệt' => 2,
        'Đã duyệt' => 0,
        'Đã từ chối' => 1,
    ],

    'payroll_cycle_statuses' => [
        'Mở' => '0',
        'Đóng' => '1',
    ],

    'employee_is_foreigner' => [
        'Người nước ngoài' => '1',
        'Người Việt Nam' => '0',
    ],

    'manpower_allocation' => [
        'Trong định biên' => '0',
        'Ngoài định biên' => '1',
    ],

    'candidate_statuses' => [
        'Đã tiếp nhận hồ sơ' => '0',
        'Đang phỏng vấn' => '1',
        // 'Phỏng vấn chuyên môn' => '2',
        'Đã Offered' => '2',
        'Không tuyển dụng' => '3',
        'Tuyển dụng' => '4',
        // 'Lưu kho hồ sơ' => '6',
    ],

    'interview_mail_options' => [
        'Gửi mail cho ứng viên và người phỏng vấn' => 0,
        'Chỉ gửi mail cho người phỏng vấn' => 1,
        'Chỉ gửi mail cho ứng viên' => 2,
        'Không gửi mail' => 3,
    ],

    'interview_is_success' => [
        'Đạt' => 0,
        'Không đạt' => 1,
    ],

    'furlough_employee_filter' => [
        "Của tôi" => 0,
        "Nhân viên của tôi" => 1,
        "Tất cả" => 2,
    ],

    'is_manager' => [
        'Nhân viên' => 0,
        'Quản lý' => 1,
    ],

    'permission_paths_functions' => [
        'users/organizations' => 'Sơ đồ trách nhiệm',
        'users/positions' => 'Sơ đồ trách nhiệm',
        'users/areas' => 'Sơ đồ trách nhiệm',
        'users/constructions' => 'Sơ đồ trách nhiệm',
        'users/persons' => 'Quản lý nhân viên',
        'users/status_workings' => 'Quản lý nhân viên',
        'users/working_histories' => 'Quá trình công tác',
        'users/recruitment' => 'Quản lý tuyển dụng',
        'users/recruitment_channels' => 'Quản lý tuyển dụng',
        'users/candidates' => 'Quản lý tuyển dụng',
        'users/interviews' => 'Quản lý tuyển dụng',
        'users/offer_letters' => 'Quản lý tuyển dụng',
        'users/trainings' => 'Quản lý đào tạo',
        'users/category_trainings' => 'Quản lý đào tạo',
        'users/documents' => 'Quản lý tài liệu',
        'users/category_documents' => 'Quản lý tài liệu',
        'users/company_forms' => 'Quản lý tài liệu',
        'users/training_files' => 'Quản lý tài liệu',
        'users/contracts' => 'Quản lý hợp đồng',
        'users/category_contracts' => 'Quản lý hợp đồng',
        'users/furloughs' => 'Quản lý nghỉ phép',
        'users/furlough_types' => 'Quản lý nghỉ phép',
        'users/annual_leaves' => 'Quản lý nghỉ phép',
        'users/category_furloughs' => 'Quản lý nghỉ phép',
        'users/work_requests' => 'Quản lý lịch nghỉ lễ',
        'users/public_holidays' => 'Quản lý lịch nghỉ lễ',
        'users/performance_reviews' => 'Quản lý đánh giá',
        'users/review_forms' => 'Quản lý đánh giá',
        'users/criterias' => 'Quản lý đánh giá',
        'users/periods' => 'Quản lý đánh giá',
        'users/employee_pits' => 'Quản lý thuế TNCN',
        'users/pit_policies' => 'Quản lý thuế TNCN',
        'users/dependents' => 'Quản lý thuế TNCN',
        'users/leaves' => 'Quản lý nghỉ việc',
        'users/time_sheets' => 'Quản lý công và lương',
        'users/payroll-by-cycle' => 'Quản lý công và lương',
        'users/payrolls' => 'Quản lý công và lương',
        'users/payroll_cycles' => 'Quản lý công và lương',
        'users/insurance_pays' => 'Quản lý công và lương',
        'users/social_insurance' => 'Quản lý công và lương',
        'users/payroll_cycles/work-day-adjustment' => 'Đề xuất điều chỉnh công',
        'users/home' => 'Trang chủ',
        'users/achievements' => 'Quản lý thành tích',
        'users/category_achievements' => 'Quản lý thành tích'
    ],

    'portal_employee_functions' => [
        'users/persons/profile' => 'Thông tin nhân viên',
        'users/persons/get-emp-by-department' => 'Thông tin nhân viên',
        'users/public_holidays/get-holiday-by-department' => 'Thông tin nhân viên',
        'users/payroll-by-cycle/payroll-info' => 'Công và lương của tôi',
        'users/persons/list-contact' => 'Danh sách liên hệ',
        'users/persons/get_list_contact' => 'Danh sách liên hệ',
        '/users/employees/achievements' => 'Thành tích của tôi'
    ],

    'reviewer_types' => [
        'direct_manager' => 0,
        'indirect_manager' => 1,
        'directorate' => 2
    ],

    'employee_consents' => [
        'Đồng ý' => 0,
        'Không đồng ý' => 2,
    ],

    'organization_is_show_file' => [
        'show' => 1,
        'dont_show' => 0,
    ],

    // 'performance_review_employee_responses' => [
    //     'Đồng ý' => 1,
    //     'Không đồng ý' => 0,
    // ]

    'offer_letters_status' => [
        'Đã gửi' => 0,
        'Ứng viên từ chối' => 1,
        'Tuyển dụng' => 2
    ],

    'insurance_pay_flag' => [
        0 => 'Không',
        1 => 'Có'
    ]
];
