<?php

  

namespace Database\Seeders;

  

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Permission;

  

class PermissionTableSeeder extends Seeder

{

    /**

     * Run the database seeds.

     */

    public function run(): void

    {

        $permissions = [
            ['name' => 'role_list', 'guard_name' => 'web','section' => 'roles'],
            ['name' => 'role_create', 'guard_name' => 'web','section' => 'roles'],
            ['name' => 'role_edit', 'guard_name' => 'web','section' => 'roles'],
            ['name' => 'role_delete', 'guard_name' => 'web','section' => 'roles'],
            ['name' => 'dashboard_view', 'guard_name' => 'web','section' => 'dashboard'],
            ['name' => 'centre_list', 'guard_name' => 'web','section' => 'centre'],
            ['name' => 'centre_create', 'guard_name' => 'web','section' => 'centre'],
            ['name' => 'centre_edit', 'guard_name' => 'web','section' => 'centre'],
            ['name' => 'centre_delete', 'guard_name' => 'web','section' => 'centre'],
            ['name' => 'courses_list', 'guard_name' => 'web','section' => 'course'],
            ['name' => 'courses_create', 'guard_name' => 'web','section' => 'course'],
            ['name' => 'courses_edit', 'guard_name' => 'web','section' => 'course'],
            ['name' => 'courses_delete', 'guard_name' => 'web','section' => 'course'],
            ['name' => 'admission_list', 'guard_name' => 'web','section' => 'admissions'],
            ['name' => 'scheme_list', 'guard_name' => 'web','section' => 'schemes'],
            ['name' => 'scheme_create', 'guard_name' => 'web','section' => 'schemes'],
            ['name' => 'scheme_edit', 'guard_name' => 'web','section' => 'schemes'],
            ['name' => 'scheme_delete', 'guard_name' => 'web','section' => 'schemes'],
            ['name' => 'question_list', 'guard_name' => 'web','section' => 'exam_questions'],
            ['name' => 'question_create', 'guard_name' => 'web','section' => 'exam_questions'],
            ['name' => 'question_edit', 'guard_name' => 'web','section' => 'exam_questions'],
            ['name' => 'question_delete', 'guard_name' => 'web','section' => 'exam_questions'],
            ['name' => 'student_list', 'guard_name' => 'web','section' => 'students'],
            ['name' => 'student_create', 'guard_name' => 'web','section' => 'students'],
            ['name' => 'student_edit', 'guard_name' => 'web','section' => 'students'],
            ['name' => 'student_delete', 'guard_name' => 'web','section' => 'students'],
            ['name' => 'category_list', 'guard_name' => 'web','section' => 'category'],
            ['name' => 'category_create', 'guard_name' => 'web','section' => 'category'],
            ['name' => 'category_edit', 'guard_name' => 'web','section' => 'category'],
            ['name' => 'category_delete', 'guard_name' => 'web','section' => 'category'],
            ['name' => 'dashboard_view', 'guard_name' => 'web','section' => 'dashboard'],
            ['name' => 'banner_list', 'guard_name' => 'web','section' => 'banner'],
            ['name' => 'banner_create', 'guard_name' => 'web','section' => 'banner'],
            ['name' => 'banner_edit', 'guard_name' => 'web','section' => 'banner'],
            ['name' => 'banner_delete', 'guard_name' => 'web','section' => 'banner'],
            ['name' => 'faculty_list', 'guard_name' => 'web','section' => 'faculty'],
            ['name' => 'faculty_create', 'guard_name' => 'web','section' => 'faculty'],
            ['name' => 'faculty_edit', 'guard_name' => 'web','section' => 'faculty'],
            ['name' => 'faculty_delete', 'guard_name' => 'web','section' => 'faculty'],
            ['name' => 'payment_list', 'guard_name' => 'web','section' => 'payments'],
            ['name' => 'payment_create', 'guard_name' => 'web','section' => 'payments'],
            ['name' => 'payment_edit', 'guard_name' => 'web','section' => 'payments'],
            ['name' => 'payment_delete', 'guard_name' => 'web','section' => 'payments'],
            ['name' => 'setting_list', 'guard_name' => 'web','section' => 'settings'],
            ['name' => 'batch_list', 'guard_name' => 'web','section' => 'batch'],
            ['name' => 'batch_create', 'guard_name' => 'web','section' => 'batch'],
            ['name' => 'batch_edit', 'guard_name' => 'web','section' => 'batch'],
            ['name' => 'batch_delete', 'guard_name' => 'web','section' => 'batch'],
            ['name' => 'exam_list', 'guard_name' => 'web','section' => 'exams'],
            ['name' => 'exam_create', 'guard_name' => 'web','section' => 'exams'],
            ['name' => 'exam_edit', 'guard_name' => 'web','section' => 'exams'],
            ['name' => 'exam_delete', 'guard_name' => 'web','section' => 'exams'],
            ['name' => 'module_list', 'guard_name' => 'web','section' => 'modules'],
            ['name' => 'module_create', 'guard_name' => 'web','section' => 'modules'],
            ['name' => 'module_edit', 'guard_name' => 'web','section' => 'modules'],
            ['name' => 'module_delete', 'guard_name' => 'web','section' => 'modules'],
            ['name' => 'result_list', 'guard_name' => 'web','section' => 'result'],
            ['name' => 'result_create', 'guard_name' => 'web','section' => 'result'],
            ['name' => 'result_edit', 'guard_name' => 'web','section' => 'result'],
            ['name' => 'result_delete', 'guard_name' => 'web','section' => 'result'],

        ];

        

        foreach ($permissions as $permission) {
            Permission::create($permission);
        }

    }

}