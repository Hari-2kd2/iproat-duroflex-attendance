<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->truncate();
        DB::insert("INSERT INTO `menus` (`id`, `parent_id`, `action`, `name`, `menu_url`, `module_id`, `status`) VALUES
                (1, 0, NULL, 'User', 'user.index', 1, 2),
                (2, 0, NULL, 'Manage Role', NULL, 1, 1),
                (3, 2, NULL, 'Add Role', 'userRole.index', 1, 1),
                (4, 2, NULL, 'Add Role Permission', 'rolePermission.index', 1, 1),
                (5, 0, NULL, 'Change Password', 'changePassword.index', 1, 1),
                (6, 0, NULL, 'Department', 'department.index', 2, 1),
                (7, 0, NULL, 'Designation', 'designation.index', 2, 1),
                (8, 0, NULL, 'Branch', 'branch.index', 2, 1),
                (9, 0, NULL, 'Manage Employee', 'employee.index', 2, 1),
                (10, 0, NULL, 'Setup', NULL, 3, 1),
                (11, 10, NULL, 'Manage Holiday', 'holiday.index', 3, 1),
                (12, 10, NULL, 'Public Holiday', 'publicHoliday.index', 3, 1),
                (13, 10, NULL, 'Weekly Holiday', 'weeklyHoliday.index', 3, 1),
                (14, 10, NULL, 'Leave Type', 'leaveType.index', 3, 1),
                (15, 0, NULL, 'Leave Application', NULL, 3, 1),
                (16, 15, NULL, 'Apply for Leave', 'applyForLeave.index', 3, 1),
                (17, 15, NULL, 'Requested Application', 'requestedApplication.index', 3, 1),
                (18, 0, NULL, 'Setup', NULL, 4, 1),
                (19, 18, NULL, 'Manage Work Shift', 'workShift.index', 4, 1),
                (20, 0, NULL, 'Report', NULL, 4, 1),
                (21, 20, NULL, 'Daily Attendance', 'dailyAttendance.dailyAttendance', 4, 1),
                (22, 0, NULL, 'Report', NULL, 3, 1),
                (23, 22, NULL, 'Leave Report', 'leaveReport.leaveReport', 3, 1),
                (24, 20, NULL, 'Monthly Attendance', 'monthlyAttendance.monthlyAttendance', 4, 1),
                (25, 0, NULL, 'Report', NULL, 5, 1),
                (26, 25, NULL, 'Daily OverTime Report', 'dailyOverTime.dailyOverTime', 5, 0),
                (27, 25, NULL, 'Monthly OverTime Report', 'monthlyOverTime.monthlyOverTime', 5, 0),
                (28, 25, NULL, 'My OverTime Report', 'myOverTimeReport.myOverTimeReport', 5, 0),
                (29, 25, NULL, 'OverTime Summary Report', 'overtimeSummaryReport.overtimeSummaryReport', 5, 0),
                (30, 0, NULL, 'Setup', NULL, 6, 1),
                (31, 30, NULL, 'Tax Rule Setup', 'taxSetup.index', 6, 1),
                 (32, 0, NULL, 'Allowance', 'allowance.index', 6, 1),
                 (33, 0, NULL, 'Deduction', 'deduction.index', 6, 1),
                 (34, 0, NULL, 'Advance Deduction', 'advanceDeduction.index', 6, 1),
                 (35, 0, NULL, 'Paid Leave Application', NULL, 3, 1),
                 (36, 0, NULL, 'Monthly Pay Grade', 'payGrade.index', 6, 1),
                 (37, 0, NULL, 'Hourly Pay Grade', 'hourlyWages.index', 6, 1),
                 (38, 0, NULL, 'Salary Sheet', NULL, 6, 1),
                 (39, 30, NULL, 'Late Configration', 'salaryDeductionRule.index', 6, 1),
                 (40, 0, NULL, 'Report', NULL, 6, 1),
                 (41, 40, NULL, 'Payment History', 'paymentHistory.paymentHistory', 6, 1),
                 (42, 40, NULL, 'My Payroll', 'myPayroll.myPayroll', 6, 1),
                 (43, 0, NULL, 'Performance Category', 'performanceCategory.index', 7, 1),
                 (44, 0, NULL, 'Performance Criteria', 'performanceCriteria.index', 7, 1),
                 (45, 0, NULL, 'Employee Performance', 'employeePerformance.index', 7, 1),
                 (46, 0, NULL, 'Report', NULL, 7, 1),
                 (47, 46, NULL, 'Summary Report', 'performanceSummaryReport.performanceSummaryReport', 7, 1),
                 (48, 0, NULL, 'Job Post', 'jobPost.index', 8, 1),
                 (49, 0, NULL, 'Job Candidate', 'jobCandidate.index', 8, 1),
                 (50, 20, NULL, 'My Attendance Report', 'myAttendanceReport.myAttendanceReport', 4, 1),
                 (51, 10, NULL, 'Earn Leave Configure', 'earnLeaveConfigure.index', 3, 1),
                 (52, 0, NULL, 'Training Type', 'trainingType.index', 9, 1),
                 (53, 0, NULL, 'Training List', 'trainingInfo.index', 9, 1),
                 (54, 0, NULL, 'Training Report', 'employeeTrainingReport.employeeTrainingReport', 9, 1),
                 (55, 0, NULL, 'Award', 'award.index', 10, 1),
                 (56, 0, NULL, 'Notice', 'notice.index', 11, 1),
                 (57, 0, NULL, 'Settings', 'generalSettings.index', 12, 1),
                 (58, 0, NULL, 'Manual Attendance', 'manualAttendance.manualAttendance', 4, 1),
                 (59, 22, NULL, 'Summary Report', 'summaryReport.summaryReport', 3, 1),
                 (60, 22, NULL, 'My Leave Report', 'myLeaveReport.myLeaveReport', 3, 1),
                 (61, 0, NULL, 'Warning', 'warning.index', 2, 1),
                 (62, 0, NULL, 'Termination', 'termination.index', 2, 1),
                 (63, 0, NULL, 'Promotion', 'promotion.index', 2, 1),
                 (64, 20, NULL, 'Summary Report', 'attendanceSummaryReport.attendanceSummaryReport', 4, 1),
                 (65, 0, NULL, 'Manage Work Hour', NULL, 6, 1),
                 (66, 65, NULL, 'Approve Work Hour', 'workHourApproval.create', 6, 1),
                 (67, 0, NULL, 'Employee Permanent', 'permanent.index', 2, 1),
                 (68, 0, NULL, 'Manage Bonus', NULL, 6, 1),
                 (69, 68, NULL, 'Bonus Setting', 'bonusSetting.index', 6, 1),
                 (70, 68, NULL, 'Generate Bonus', 'generateBonus.index', 6, 1),
                 (71, 18, NULL, 'Dashboard Attendance', 'attendance.dashboard', 4, 1),
                 (72, 0, NULL, 'Front Setting', NULL, 12, 1),
                 (73, 72, NULL, 'General Setting', 'front.setting', 12, 1),
                 (74, 72, NULL, 'Front Service', 'service.index', 12, 1),
                 (75, 38, NULL, 'Generate Salary Sheet', 'generateSalarySheet.index', 6, 1),
                 (76, 38, NULL, 'Download Payslip', 'downloadPayslip.payslip', 6, 1),
                 (77, 68, NULL, 'Bonus Day', 'bonusday.index', 6, 1),
                 (78, 0, NULL, 'Upload Attendance', 'uploadAttendance.uploadAttendance', 4, 0),
                 (79, 38, NULL, 'Upload Salary Details', 'uploadSalaryDetails.uploadSalaryDetails', 6, 0),
                 (80, 0, NULL, 'Paid Leave Report', NUll, 3, 1),
                 (81, 80, NULL, 'Leave Report', 'paidLeaveReport.paidLeaveReport', 3, 1),
                 (82, 80, NULL, 'Summary Report', 'paidLeaveReport.paidLeaveSummaryReport', 3, 1),
                 (83, 10, NULL, 'Paid Leave Configure', 'paidLeaveConfigure.index', 3, 1),
                 (84, 30, NULL, 'Food Deductions Configure', 'foodDeductionConfigure.index', 6, 1),
                 (85, 30, NULL, 'Telephone Deductions Configure', 'telephoneDeductionConfigure.index', 6, 1),
                 (86, 0, NULL, 'Monthly Deductions', 'monthlyDeduction.monthlyDeduction', 6, 1),
                 (87, 0, NULL, 'Setup', NULL, 5, 1),
                 (88, 87, NULL, 'Configure Rule', 'overtimeRuleConfigure.overtimeRuleConfigure', 5, 1),
                 (89, 18, NULL, 'Configure Devices', 'deviceConfigure.index', 4, 1),
                 (90, 0, NULL, 'Employee Access', 'access.index', 4, 1),
                 (91, 0, NULL, 'Employee Access', 'sub_department.index', 2, 1),
                 (92, 0, NULL, 'Employee Access', 'costcenter.index', 2, 1),                 
                 (95, 0, NULL, 'PayRoll Setting', 'payroll_settings.index', 6, 1),
                 ");
    }
}

//     public function run()
//     {
//         DB::table('menus')->truncate();
//                 DB::insert("INSERT INTO `menus` (`id`, `parent_id`, `action`, `name`, `menu_url`, `module_id`, `status`) VALUES
//                 (1, 0, NULL, 'User', 'user.index', 1, 2),
//                 (2, 0, NULL, 'Manage Role', NULL, 1, 1),
//                 (3, 2, NULL, 'Add Role', 'userRole.index', 1, 1),
//                 (4, 2, NULL, 'Add Role Permission', 'rolePermission.index', 1, 1),
//                 (5, 0, NULL, 'Change Password', 'changePassword.index', 1, 1),
//                 (6, 0, NULL, 'Department', 'department.index', 2, 1),
//                 (7, 0, NULL, 'Designation', 'designation.index', 2, 1),
//                 (8, 0, NULL, 'Branch', 'branch.index', 2, 1),
//                 (9, 0, NULL, 'Manage Employee', 'employee.index', 2, 1),
//                 (10, 0, NULL, 'Setup', NULL, 3, 1),
//                 (11, 10, NULL, 'Manage Holiday', 'holiday.index', 3, 1),
//                 (12, 10, NULL, 'Public Holiday', 'publicHoliday.index', 3, 1),
//                 (13, 10, NULL, 'Weekly Holiday', 'weeklyHoliday.index', 3, 1),
//                 (14, 10, NULL, 'Leave Type', 'leaveType.index', 3, 1),
//                 (15, 0, NULL, 'Leave Application', NULL, 3, 1),
//                 (16, 15, NULL, 'Apply for Leave', 'applyForLeave.index', 3, 1),
//                 (17, 15, NULL, 'Requested Application', 'requestedApplication.index', 3, 1),
//                 (18, 0, NULL, 'Setup', NULL, 4, 1),
//                 (19, 18, NULL, 'Manage Work Shift', 'workShift.index', 4, 1),
//                 (20, 0, NULL, 'Report', NULL, 4, 1),
//                 (21, 20, NULL, 'Daily Attendance', 'dailyAttendance.dailyAttendance', 4, 1),
//                 (22, 0, NULL, 'Report', NULL, 3, 1),
//                 (23, 22, NULL, 'Leave Report', 'leaveReport.leaveReport', 3, 1),
//                 (24, 20, NULL, 'Monthly Attendance', 'monthlyAttendance.monthlyAttendance', 4, 1),
//                 (25, 0, NULL, 'Setup', NULL, 6, 1),
//                 (26, 25, NULL, 'Tax Rule Setup', 'taxSetup.index', 6, 1),
//                 (27, 0, NULL, 'Allowance', 'allowance.index', 6, 1),
//                 (28, 0, NULL, 'Deduction', 'deduction.index', 6, 1),
//                 (29, 0, NULL, 'Monthly Pay Grade', 'payGrade.index', 6, 1),
//                 (30, 0, NULL, 'Hourly Pay Grade', 'hourlyWages.index', 6, 1),
//                 (31, 0, NULL, 'Daily OverTime Report', 'dailyOverTime.dailyOverTime', 5, 1),
//                 (32, 0, NULL, 'Monthly OverTime Report', 'monthlyOverTime.monthlyOverTime', 5, 1),
//                 (33, 0, NULL, 'My OverTime Report', 'myOverTimeReport.myOverTimeReport', 5, 1),
//                 (34, 0, NULL, 'OverTime Summary Report', 'overtimeSummaryReport.overtimeSummaryReport', 5, 1)
//                 (35, 0, NULL, 'Generate Salary Sheet', 'generateSalarySheet.index', 6, 1),
//                 (36, 25, NULL, 'Late Configration', 'salaryDeductionRule.index', 6, 1),
//                 (37, 0, NULL, 'Report', NULL, 6, 1),
//                 (38, 33, NULL, 'Payment History', 'paymentHistory.paymentHistory', 6, 1),
//                 (39, 33, NULL, 'My Payroll', 'myPayroll.myPayroll', 6, 1),
//                 (40, 0, NULL, 'Performance Category', 'performanceCategory.index', 7, 1),
//                 (41, 0, NULL, 'Performance Criteria', 'performanceCriteria.index', 7, 1),
//                 (42, 0, NULL, 'Employee Performance', 'employeePerformance.index', 7, 1),
//                 (43, 0, NULL, 'Report', NULL, 7, 1),
//                 (44, 39, NULL, 'Summary Report', 'performanceSummaryReport.performanceSummaryReport', 7, 1),
//                 (45, 0, NULL, 'Job Post', 'jobPost.index', 8, 1),
//                 (46, 0, NULL, 'Job Candidate', 'jobCandidate.index', 8, 1),
//                 (47, 20, NULL, 'My Attendance Report', 'myAttendanceReport.myAttendanceReport', 4, 1),
//                 (48, 10, NULL, 'Earn Leave Configure', 'earnLeaveConfigure.index', 3, 1),
//                 (49, 0, NULL, 'Training Type', 'trainingType.index', 9, 1),
//                 (50, 0, NULL, 'Training List', 'trainingInfo.index', 9, 1),
//                 (51, 0, NULL, 'Training Report', 'employeeTrainingReport.employeeTrainingReport', 9, 1),
//                 (52, 0, NULL, 'Award', 'award.index', 10, 1),
//                 (53, 0, NULL, 'Notice', 'notice.index', 11, 1),
//                 (54, 0, NULL, 'Settings', 'generalSettings.index', 12, 1),
//                 (55, 0, NULL, 'Manual Attendance', 'manualAttendance.manualAttendance', 4, 1),
//                 (56, 22, NULL, 'Summary Report', 'summaryReport.summaryReport', 3, 1),
//                 (57, 22, NULL, 'My Leave Report', 'myLeaveReport.myLeaveReport', 3, 1),
//                 (58, 0, NULL, 'Warning', 'warning.index', 2, 1),
//                 (69, 0, NULL, 'Termination', 'termination.index', 2, 1),
//                 (60, 0, NULL, 'Promotion', 'promotion.index', 2, 1),
//                 (61, 20, NULL, 'Summary Report', 'attendanceSummaryReport.attendanceSummaryReport', 4, 1),
//                 (62, 0, NULL, 'Manage Work Hour', NULL, 6, 1),
//                 (63, 58, NULL, 'Approve Work Hour', 'workHourApproval.create', 6, 1),
//                 (64, 0, NULL, 'Employee Permanent', 'permanent.index', 2, 1),
//                 (65, 0, NULL, 'Manage Bonus', NULL, 6, 1),
//                 (66, 61, NULL, 'Bonus Setting', 'bonusSetting.index', 6, 1),
//                 (67, 61, NULL, 'Generate Bonus', 'generateBonus.index', 6, 1),
//                 (68, 18, NULL, 'Dashboard Attendance', 'attendance.dashboard', 4, 1),
//                 (79, 0, NULL, 'Front Setting', NULL, 12, 1),
//                 (70, 65, NULL, 'General Setting', 'front.setting', 12, 1),
//                 (71, 65, NULL, 'Front Service', 'service.index', 12, 1)");
//                 //  (68, 0, NULL, 'Report', 5, 1),
//                 //  (68, 0, NULL, 'Daily OverTime Report', 'dailyOverTime.dailyOverTime', 5, 1),
//                 //  (69, 0, NULL, 'Monthly OverTime Report', 'monthlyOverTime.monthlyOverTime', 5, 1),
//                 // (70, 0, NULL, 'My OverTime Report', 'myOverTimeReport.myOverTimeReport', 5, 1),
//                 //  (71, 0, NULL, 'OverTime Summary Report', 'overtimeSummaryReport.overtimeSummaryReport', 5, 1)

//     }
// }
