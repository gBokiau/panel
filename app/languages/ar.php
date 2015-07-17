<?php

return array(
  'title' => 'العربية',
  'direction' => 'rtl',
  'author' => 'أحمد الحداد <ahmed.hdd@gmail.com>',
  'version' => '1.0.0',
  'data' => array(

    // global
    'cancel' => 'إلغاء',
    'add' => 'إضافة',
    'save' => 'حفظ',
    'saved' => 'تم الحفظ!',
    'delete' => 'حذف',
    'insert' => 'إدراج',
    'ok' => 'موافق',

    // options (sidebar)
    'options.show' => 'عرض الخيارات',
    'options.hide' => 'إخفاء الخيارات',

    // installation
    'installation' => 'التنصيب',
    'installation.check.headline' => 'تنصيب لوحة كيربي',
    'installation.check.text' => 'المشاكل التالية واجهت كيربي أثناء التنصيب…',
    'installation.check.retry' => 'إعادة المحاولة',
    'installation.check.error' => 'هناك بعض المشاكل!',
    'installation.check.error.accounts' => 'المجلد /site/accounts غير قابل للكتابة',
    'installation.check.error.avatars' => 'المجلد /assets/avatars غير قابل للكتابة',
    'installation.check.error.blueprints' => 'فضلا قم بإضافة المجلد /site/blueprints',
    'installation.check.error.content' => 'مجلد المحتوى وجميع الملفات التي بداخله يجب أن تكون قابلة للكتابة.',
    'installation.check.error.thumbs' => 'مجلد الصور المصغرة يجب أن يكون قابل للكتابة.',
    'installation.signup.username.label' => 'أنشئ حسابك الأول',
    'installation.signup.username.placeholder' => 'اسم المستخدم',
    'installation.signup.email.label' => 'البريد الإلكتروني',
    'installation.signup.email.placeholder' => 'mail@example.com',
    'installation.signup.password.label' => 'كلمة المرور',
    'installation.signup.language.label' => 'اللغة',
    'installation.signup.button' => 'إنشاء الحساب',

    // login
    'login' => 'تسجيل الدخول',
    'login.welcome' => 'فضلاً سجل الدخول باستخدام حسابك',
    'login.username.label' => 'اسم المستخدم',
    'login.password.label' => 'كلمة المرور',
    'login.error' => 'خطأ في اسم المستخدم أو كلمة المرور',
    'login.button' => 'دخول',

    // logout
    'logout' => 'خروج',

    // dashboard
    'dashboard' => 'لوحة التحكم',
    'dashboard.index.pages.title' => 'الصفحات',
    'dashboard.index.pages.edit' => 'تعديل',
    'dashboard.index.pages.add' => 'إضافة',
    'dashboard.index.site.title' => 'وصلة موقعك',
    'dashboard.index.account.title' => 'حسابك',
    'dashboard.index.account.edit' => 'تعديل',
    'dashboard.index.metatags.title' => 'متغيرات الموقع',
    'dashboard.index.metatags.edit' => 'تعديل',
    'dashboard.index.history.title' => 'آخر تحديثاتك',
    'dashboard.index.history.text' => 'سيتم عرض آخر صفحاتك المعدلة هنا لتسهيل وصولك إليها مجدداً.',

    // metatags
    'metatags' => 'متغيرات الموقع',
    'metatags.back' => 'العودة إلى لوحة التحكم',

    // pages
    'pages.show.settings' => 'إعدادات الصفحة',
    'pages.show.preview' => 'عرض المعاينة',
    'pages.show.changeurl' => 'تغيير الوصلة',
    'pages.show.delete' => 'حذف هذه الصفحة',
    'pages.show.subpages.title' => 'الصفحات',
    'pages.show.subpages.edit' => 'تعديل',
    'pages.show.subpages.add' => 'إضافة',
    'pages.show.subpages.empty' => 'هذه الصفحة لا تحتوي على صفحات فرعية',
    'pages.show.files.title' => 'الملفات',
    'pages.show.files.edit' => 'تعديل',
    'pages.show.files.add' => 'إضافة',
    'pages.show.files.empty' => 'هذه الصفحة لا تحتوي على ملفات',
    'pages.show.error.permissions.title' => 'هذه الصفحة غير قابلة للكتابة',
    'pages.show.error.permissions.text'  => 'فضلاً قم بفحص جميع التصاريح على مجلد المحتوى وجميع الملفات التي بداخله.',
    'pages.show.error.permissions.retry'  => 'إعادة المحاولة',
    'pages.show.error.notitle.title' => 'هذا المخطط لا يحتوي على حقل العنوان،',
    'pages.show.error.notitle.text' => 'فضلاً قم بإضافة حقل العنوان والمحاولة مرة أخرى',
    'pages.show.error.notitle.retry' => 'إعادة المحاولة',
    'pages.show.error.form'  => 'فضلاً قم بإكمال جميع الحقول بشكل صحيح',

    'pages.add.title.label' => 'إضافة صفحة جديدة',
    'pages.add.title.placeholder' => 'العنوان',
    'pages.add.url.label' => 'الوصلة',
    'pages.add.url.enter' => '(اكتب عنوانك)',
    'pages.add.url.close' => 'إغلاق',
    'pages.add.url.help' => 'الصيغة: حروف صغيرة a-z، أرقام 0-9 وعلامة الشرطة -.',
    'pages.add.template.label' => 'القالب',
    'pages.add.error.title' => 'العنوان مفقود',
    'pages.add.error.template' => 'القالب مفقود',
    'pages.add.error.max.headline' => 'لا يُسمح بإضافة صفحات جديدة',
    'pages.add.error.max.text' => 'تم استهلاك الحد الأقصى من الصفحات الفرعية لهذه الصفحة',
    'pages.url.uid.label' => 'الوصلة',
    'pages.url.uid.label.option' => 'إنشاء من العنوان',
    'pages.url.error.exists' => 'توجد صفحة أخرى لها نفس الوصلة ',
    'pages.url.error.move' => 'لم يكن بالإمكان تغيير الوصلة',
    'pages.delete.headline' => 'هل أنت متأكد من رغبتك في حذف هذه الصفحة؟',
    'pages.delete.error.home.headline' => 'لا يمكن حذف الصفحة الرئيسة',
    'pages.delete.error.home.text' => 'قمت بمحاولة حذف الصفحة الرئيسة. لا يمكن إتمام ذلك بسبب ما سيعقبه من آثار غير مرغوبة.',
    'pages.delete.error.error.headline' => 'لا يمكن حذف صفحة الأخطاء',
    'pages.delete.error.error.text' => 'قمت بمحاولة حذف صفحة الأخطاء. لا يمكن إتمام ذلك بسبب ما سيعقبه من آثار غير مرغوبة.',
    'pages.delete.error.children.headline' => 'لا يمكن حذف هذه الصفحة',
    'pages.delete.error.children.text' => 'لا يمكن حذف هذه الصفحة لإحتوائها على صفحات فرعية.  لإتمام ذلك، عليك أن تحذف صفحاتها الفرعية أولاً..',
    'pages.delete.error.blocked.headline' => 'لا يمكن حذف هذه الصفحة',
    'pages.delete.error.blocked.text' => 'هذه الصفحة مقفلة ولا يمكن حذفها.',
    'pages.search.help' => 'ابحث عن الصفحات باستخدام الوصلة. تنقل بين نتائج البحث باستخدام مفاتيح الأسهم لأعلى وأسفل، واضغط مفتاح الإدخال للإنتقال للصفحة المحددة.',
    'pages.search.noresults' => 'لا توجد نتائج لما بحثت عنه. فضلاً حاول البحث مرة أخرى بوصلة مختلفة.',
    'pages.error.missing' => 'لم يتم العثور على الصفحة.',

    // subpages
    'subpages' => 'الصفحات',
    'subpages.index.headline' => 'الصفحات في',
    'subpages.index.back' => 'عودة',
    'subpages.index.add' => 'إضافة صفحة جديدة',
    'subpages.index.add.first.text' => 'هذه الصفحة لا تملك صفحات فرعية حالياً',
    'subpages.index.add.first.button' => 'أضف الصفحة الأولى',
    'subpages.index.visible' => 'الصفحات المرئية',
    'subpages.index.visible.help' => 'اسحب الصفحات المخفية إلى هنا لترتيبها أو جعلها مرئية.',
    'subpages.index.invisible' => 'الصفحات المخفية',
    'subpages.index.invisible.help' => 'اسحب الصفحات المرئية إلى هنا لبعثرتها أو جعلها مخفية.',
    'subpages.error.missing' => 'لم يتم العثور على الصفحة',

    // files
    'files' => 'Files',
    'files.index.headline' => 'الملفات لـ',
    'files.index.back' => 'عودة',
    'files.index.upload' => 'رفع ملف جديد',
    'files.index.upload.first.text' => 'هذه الصفحة لا تملك ملفات حالياً',
    'files.index.upload.first.button' => 'ارفع الملف الأول',
    'files.index.edit' => 'تعديل',
    'files.index.delete' => 'حذف',
    'files.show.name.label' => 'اسم الملف',
    'files.show.info.label' => 'النوع / الحجم / الأبعاد',
    'files.show.link.label' => 'الوصلة العلنية',
    'files.show.open' => 'عرض/تنزيل الملف',
    'files.show.back' => 'عودة',
    'files.show.replace' => 'استبدال',
    'files.show.delete' => 'حذف',
    'files.show.error.rename' => 'لم يكن بالإمكان تغيير اسم الملف',
    'files.show.error.form' => 'فضلاً قم بتعبئة جميع الحقول بشكل صحيح',
    'files.upload.drop' => 'اسقط الملفات هنا…',
    'files.upload.click' => '…او اضغط للرفع',
    'files.replace.drop' => 'اسقط ملفاً هنا…',
    'files.replace.click' => '…او اضغط للاستبدال',
    'files.replace.error.type' => 'الملف المرفوع يجب أن يكون من نفس النوع',
    'files.delete.headline' => 'هل أنت متأكد من رغبتك في حذف هذا الملف؟',
    'files.error.missing.page' => 'لم يتم العثور على الصفحة',
    'files.error.missing.file' => 'لم يتم العثور على الملف',

    // users
    'users' => 'المستخدمون',
    'users.index.headline' => 'جميع المستخدمين',
    'users.index.add' => 'إضافة مستخدم جديد',
    'users.index.edit' => 'تعديل',
    'users.index.delete' => 'حذف',
    'users.form.username.label' => 'اسم المستخدم',
    'users.form.username.placeholder' => 'اسم المستخدم الخاص بك',
    'users.form.username.help' => 'الصيغة: حروف صغيرة a-z، أرقام 0-9 وعلامة الشرطة -.',
    'users.form.username.readonly' => 'لا يمكن تغيير اسم المستخدم',
    'users.form.firstname.label' => 'الاسم',
    'users.form.lastname.label' => 'العائلة',
    'users.form.email.label' => 'البريد الإلكتروني',
    'users.form.email.placeholder' => 'mail@example.com',
    'users.form.password.label' => 'كلمة المرور',
    'users.form.password.confirm.label' => 'تأكيد كلمة المرور',
    'users.form.password.new.label' => 'كلمة المرور الجديدة',
    'users.form.password.new.confirm.label' => 'تأكيد كلمة المرور الجديدة',
    'users.form.password.new.help' => 'اترك الحقل فارغاً لإبقاء كلمة المرور الحالية',
    'users.form.language.label' => 'اللغة',
    'users.form.role.label' => 'الوظيفة',
    'users.form.options.headline' => 'خيارات الحساب',
    'users.form.options.message' => 'إرسال بريد إلكتروني',
    'users.form.options.delete' => 'حذف الحساب',
    'users.form.avatar.headline' => 'الصورة الشخصية',
    'users.form.avatar.upload' => 'رفع الصورة الشخصية',
    'users.form.avatar.replace' => 'استبدال الصورة الشخصية',
    'users.form.avatar.delete' => 'حذف الصورة الشخصية',
    'users.form.back' => 'العودة إلى المستخدمين',
    'users.form.error.password.confirm' => 'فضلاً قم بتأكيد كلمة المرور',
    'users.form.error.update' => 'لم يكن بالإمكان تحديث المستخدم',
    'users.form.error.create' => 'لم يكن بالإمكان إنشاء المستخدم',
    'users.form.error.permissions.title' => 'مجلد الحسابات غير قابل للكتابة',
    'users.form.error.permissions.text' => 'تأكد أن المجلد /site/accounts موجود وقابل للكتابة.',
    'users.delete.headline' => 'هل أنت متأكد من رغبتك في حذف هذا المستخدم؟',
    'users.delete.error' => 'لم يكن بالإمكان حذف المستخدم',
    'users.avatar.drop' => 'اسقط الصورة الشخصية هنا…',
    'users.avatar.click' => '…او اضغط للرفع',
    'users.avatar.error.type' => 'بإمكانك رفع الصورة فقط بالصيغ JPG، أو PNG، أو GIF.',
    'users.avatar.error.folder.headline' => 'مجلد الصور الشخصية غير قابل للكتابة',
    'users.avatar.error.folder.text' => 'تأكد أن من إنشاء المجلد <strong>/assets/avatars</strong> وكونه قابل للكتابة لترفع الصور الشخصية.',
    'users.avatar.delete.error' => 'لم يكن بالإمكان حذف الصورة الشخصية',
    'users.avatar.delete.success' => 'تم حذف الصورة الشخصية',
    'users.error.missing' => 'لم يتم العثور على المستخدم',

    // form fields
    'fields.required' => 'إلزامي',
    'fields.date.label' => 'التاريخ',
    'fields.date.months' => array(
      'يناير',
      'فبراير',
      'مارس',
      'أبريل',
      'مايو',
      'يونيو',
      'يوليو',
      'أغسطس',
      'سبتمبر',
      'أكتوبر',
      'نوڤمبر',
      'ديسمبر'
    ),
    'fields.date.weekdays' => array(
      'الأحد',
      'الإثنين',
      'الثلاثاء',
      'الأربعاء',
      'الخميس',
      'الجمعة',
      'السبت'
    ),
    'fields.date.weekdays.short' => array(
      'أحد',
      'أثنين',
      'ثلاثاء',
      'أربعاء',
      'خميس',
      'جمعة',
      'سبت'
    ),
    'fields.email.label' => 'بريد إلكتروني',
    'fields.email.placeholder' => 'mail@example.com',
    'fields.number.label' => 'رقم',
    'fields.number.placeholder' => '#',
    'fields.page.label' => 'صفحة',
    'fields.page.placeholder' => 'محل/الصفحة/المرادة',
    'fields.password.label' => 'كلمة مرور',
    'fields.structure.add' => 'إضافة',
    'fields.structure.add.first' => 'إضافة السجل الأول',
    'fields.structure.empty' => 'لا توجد سجلات حالياً.',
    'fields.structure.cancel' => 'إلغاء',
    'fields.structure.save' => 'حفظ',
    'fields.structure.edit' => 'تعديل',
    'fields.structure.delete' => 'حذف',
    'fields.tags.label' => 'وسوم',
    'fields.tel.label' => 'هاتف',
    'fields.textarea.buttons.bold.label' => 'نص عريض',
    'fields.textarea.buttons.bold.text' => 'نص عريض',
    'fields.textarea.buttons.italic.label' => 'نص مائل',
    'fields.textarea.buttons.italic.text' => 'نص مائل',
    'fields.textarea.buttons.link.label' => 'وصلة',
    'fields.textarea.buttons.email.label' => 'بريد إلكتروني',
    'fields.textarea.buttons.image.label' => 'صورة',
    'fields.textarea.buttons.file.label' => 'ملف',
    'fields.toggle.yes' => 'نعم',
    'fields.toggle.no' => 'لا',
    'fields.toggle.on' => 'تشغيل',
    'fields.toggle.off' => 'تعطيل',

    // textarea overlays
    'editor.link.url.label' => 'إضافة وصلة',
    'editor.link.text.label' => 'نص الوصلة',
    'editor.link.text.help' => 'نص الوصلة اختياري',
    'editor.email.address.label' => 'أدخل بريد إلكتروني',
    'editor.email.address.placeholder' => 'mail@example.com',
    'editor.email.text.label' => 'نص الوصلة',
    'editor.email.text.help' => 'نص الوصلة اختياري',
    'editor.file.empty' => 'هذه الصفحة لا تملك ملفات',
    'editor.image.empty' => 'هذه الصفحة لا تملك صوراً',

    // error page
    'error' => 'خطأ',
    'error.headline' => 'خطأ',

  )
);