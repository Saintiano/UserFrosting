<?php

/**
 * UserFrosting (http://www.userfrosting.com)
 *
 * @link      https://github.com/userfrosting/UserFrosting
 * @license   https://github.com/userfrosting/UserFrosting/blob/master/licenses/UserFrosting.md (MIT License)
 *
 * Standard Farsi/Persian message token translations for the 'admin' sprinkle.
 *
 * @package userfrosting\i18n\fa
 * @author aminakbari
 */

return [
	"ACTIVITY" => [
	        1 => "فعالیت",
	        2 => "فعالیت ها",

	       "LAST" => "آخرین فعالیت",
	       "PAGE" => "لیستی از فعالیت های کاربر",
	       "TIME" => "زمان فعالیت"
	    ],

	    "CACHE" => [
	        "CLEAR"             => "پاک سازی کش",
	        "CLEAR_CONFIRM"     => "آیا مطمئن هستید که میخواهید کش سایت را پاک سازی کنید؟",
	        "CLEAR_CONFIRM_YES" => "بله، کش پاک سازی شود",
	        "CLEARED"           => "کش با موفقیت پاک سازی شد"
	    ],

	    "DASHBOARD"             => "کارتابل",
	    "DELETE_MASTER"         => "شما نمیتوانید کاربر اصلی را حذف کنید",
	    "DELETION_SUCCESSFUL"   => "<strong>{{user_name}}</strong> با موفقیت حذف شد.",
	    "DETAILS_UPDATED"       => "جزئیات <strong>{{user_name}}</strong> با موفقیت ذخیره شد.",
	    "DISABLE_MASTER"        => "شما نمیتوانید کاربر اصلی را غیر فعال کنید.",
	    "DISABLE_SUCCESSFUL"    => "حساب کاربری <strong>{{user_name}}</strong> با موفقیت غیر فعال شد.",

	    "ENABLE_SUCCESSFUL" => "حساب کاربری <strong>{{user_name}}</strong> با موفقیت فعال شد.",

    "GROUP" => [
        1 => "گروه",
        2 => "گروه ها",

        "CREATE"        => "اضافه کردن گروه",
        "CREATION_SUCCESSFUL" => "گروه <strong>{{name}}</strong> با موفقیت اضافه شد",
        "DELETE"            => "حذف گروه",
        "DELETE_CONFIRM"    => "آیا مطمئن هستید که میخواهید گروه <strong>{{name}}</strong> را حذف کنید؟",
        "DELETE_DEFAULT"    => "شما نمیتوانید گروه <strong>{{name}}</strong> را حذف کنید چون به عنوان گروه پیش فرض برای کاربران جدید انتخاب شده است.",
        "DELETE_YES"        => "بله، گروه حذف شود",
        "DELETION_SUCCESSFUL" => "گروه <strong>{{name}}</strong> با موفقیت حذف شد.",
        "EDIT"          => "ویرایش گروه",
        "ICON"          => "آیکن گروه",
        "ICON_EXPLAIN"  => "آیکن برای اعضای گروه",
        "INFO_PAGE"     => "صفحه توضیحات گروه برای {{name}}",
        "MANAGE"        => "مدیریت گروه",
        "NAME"          => "نام گروه",
        "NAME_EXPLAIN"  => "لطفا نام گروه را وارد کنید",
        "NOT_EMPTY"     => "نمیتوان این کار را کرد چون هنوز کاربرانی عضو گروه <strong>{{name}}</strong> هستند.",
        "PAGE_DESCRIPTION" => "لیست گروه های وب سایت شما. امکان مدیریت این گروه ها در این صفحه وجود  دارد.",
        "SUMMARY"       => "توضیحات گروه",
        "UPDATE"        => "اطلاعات گروه <strong>{{name}}</strong> به روز رسانی شد."
    ],

    "MANUALLY_ACTIVATED"    => "حساب کاربری {{user_name}} بصورت دستی فعال شد.",
    "MASTER_ACCOUNT_EXISTS" => "حساب کاربری اصلی وجود دارد!",
    "MIGRATION" => [
        "REQUIRED"          => "به روز رسانی پایگاه داده ها باید انجام شود"
    ],

    "PERMISSION" => [
        1 => "دسترسی",
        2 => "دسترسی ها",

        "ASSIGN_NEW"        => "دادن دسترسی",
        "HOOK_CONDITION"    => "قلاب/شرط",
        "ID"                => "آی دی دسترسی",
        "INFO_PAGE"         => "توضیحات دسترسی {{name}}",
        "MANAGE"            => "مدیریت دسترسی ها",
        "NOTE_READ_ONLY"    => "<strong>توجه بفرمایید</strong>دسترسی ها بخشی از کد میباشند و آن ها را نمیتوان از اینترفیس تغییر داد. برای این تغییرات، مبایستی که مدیر، از <a href=\"https://learn.userfrosting.com/database/extending-the-database\" target=\"about:_blank\">دیتابیس مایگریشن</a> استفاده کند. ",
        "PAGE_DESCRIPTION"  => "لیست دسترسی های وب سایت شما. امکان مدیریت این دسترسی ها در این صفحه وجود  دارد.",
        "SUMMARY"           => "توضیحات دسترسی ها",
        "UPDATE"            => "به روز رسانی دسترسی ها",
        "VIA_ROLES"         => "از طریق وظیفه ها دسترسی دارد"
    ],

    "ROLE" => [
        1 => "وظیفه",
        2 => "وظیفه ها",

        "ASSIGN_NEW"    => "دادن وظیفه",
        "CREATE"        => "ساخت وظیفه",
        "CREATION_SUCCESSFUL" => "وظیفه <strong>{{name}}</strong> با موفقیت ساخته شد",
        "DELETE"            => "حذف وظیفه",
        "DELETE_CONFIRM"    => "اطمینان دارید که میخواهید وظیفه <strong>{{name}}</strong> را حذف کنید؟",
        "DELETE_DEFAULT"    => "شما نمیتوانید وظیفه <strong>{{name}}</strong> را حذف کنید زیرا کاربرانی که تازه ثبت نام کنند، این وظیفه را دریافت خواهند کرد.",
        "DELETE_YES"        => "بله، وظیفه حذف شود",
        "DELETION_SUCCESSFUL" => "وظیفه <strong>{{name}}</strong> با موفقیت حذف شد",
        "EDIT"          => "ویرایش وظیفه",
        "HAS_USERS"     => "نمیتوانید این کار را انجام دهید زیرا کاربرانی وظیفه <strong>{{name}}</strong> را هنوز دارند.",
        "INFO_PAGE"     => "صفحه توضیحات وظیفه {{name}}",
        "MANAGE"        => "مدیریت وظیفه ها",
        "NAME"          => "نام",
        "NAME_EXPLAIN"  => "لطفا برای وظیفه نامی انتخاب کنید",
        "NAME_IN_USE"   => "وظیفه ای با نام <strong>{{name}}</strong> موجود است",
        "PAGE_DESCRIPTION"  => "لیست وظیفه های وب سایت شما. امکان مدیریت این وظیفه ها در این صفحه وجود  دارد.",
        "PERMISSIONS_UPDATED" => "دسترسی ها برای وظیفه <strong>{{name}}</strong> به روز رسانی شد",
        "SUMMARY"       => "خلاصه وظیفه",
        "UPDATED"       => "اطلاعات وظیفه <strong>{{name}}</strong> به روز رسانی شد"
    ],

    "SYSTEM_INFO" => [
        "@TRANSLATION"  => "توضیحات سیستم",

        "DB_NAME"       => "نام پایگاه داده",
        "DB_VERSION"    => "نسخه پایگاه داده",
        "DIRECTORY"     => "دایرکتوری پروژه",
        "PHP_VERSION"   => "نسخه پی اچ پی",
        "SERVER"        => "نرمافزار وب سرور",
        "SPRINKLES"     => "اسپرینکل های بارگذاری شده",
        "UF_VERSION"    => "نسخه یوزرفروستینگ",
        "URL"           => "آدرس رووت وب سایت"
    ],

    "TOGGLE_COLUMNS" => "تغییر ستون",

    "USER" => [
        1 => "کاربر",
        2 => "کاربران",

        "ADMIN" => [
            "CHANGE_PASSWORD" => "تغییر گذرواژه کاربر",
            "SEND_PASSWORD_LINK" => "برای کاربر ایمیلی ارسال شود تا گذرواژه خود را تغییر دهد",
            "SET_PASSWORD" => "گذرواژه کاربر را انتخاب کنید"
        ],

        "ACTIVATE"          => "کاربر فعال",
        "CREATE"            => "اضافه کردن کاربر",
        "CREATED"           => "کاربر <strong>{{user_name}}</strong> با موفقیت اضافه شد",
        "DELETE"            => "حذف کاربر",
        "DELETE_CONFIRM"    => "آیا اطمینان دارید که میخواهید کاربر <strong>{{name}}</strong> را حذف کنید؟",
        "DELETE_YES"        => "بله، کاربر حذف شود",
        "DISABLE"           => "غیر فعال سازی کاربر",
        "EDIT"              => "ویرایش کاربر",
        "ENABLE"            => "فعال سازی کاربر",
        "INFO_PAGE"         => "صفحه توضیحات کاربر {{name}}",
        "LATEST"            => "آخرین کاربران",
        "PAGE_DESCRIPTION"  => "لیستی از کاربران سایت. این صفحه به شما امکان ویرایش، فعال سازی و غیر فعال سازی کاربران را می دهد.",
        "SUMMARY"           => "خلاصه حساب",
        "VIEW_ALL"          => "تماشای همه ی کاربران",
        "WITH_PERMISSION"   => "کاربرانی که این دسترسی را دارند"
    ],
    "X_USER" => [
        0 => "هیچ کاربری",
        1 => "{{plural}} کاربر",
        2 => "{{plural}} کاربر"
    ]
];
