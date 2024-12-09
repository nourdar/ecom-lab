<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAdditionalFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {

            $table->string('username')->unique()->nullable()->after('email'); // اسم المستخدم
            $table->string('phone')->nullable()->after('username'); // رقم الهاتف
            $table->string('profile_image')->nullable()->after('phone'); // صورة الملف الشخصي
            $table->string('role')->default('user')->after('profile_image'); // دور المستخدم
            $table->timestamp('last_login_at')->nullable()->after('is_active'); // آخر تسجيل دخول
            $table->ipAddress('last_login_ip')->nullable()->after('last_login_at'); // IP آخر تسجيل دخول
            $table->text('address')->nullable()->after('last_login_ip'); // العنوان
            $table->string('gender', 10)->nullable()->after('address'); // الجنس
            $table->date('birth_date')->nullable()->after('gender'); // تاريخ الميلاد
            $table->string('language', 5)->default('en')->after('birth_date'); // اللغة المفضلة
            $table->softDeletes()->after('language'); // الحذف الناعم
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'username',
                'phone',
                'profile_image',
                'role',
                'is_active',
                'last_login_at',
                'last_login_ip',
                'address',
                'gender',
                'birth_date',
                'language',
                'deleted_at',
            ]);
        });
    }
}
