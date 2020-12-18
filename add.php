
<form class="form" action="<?php echo site_url('user/insert') ?>" method="post" accept-charset="utf-8">
    <p><label class="label">نام کاربری<span class="required">*</span></label>
        <input class="textfield" type="text" name="username" placeholder="نام کاربری" required /></p>
    <p><label class="label">رمز عبور<span class="required">*</span></label>
        <input class="textfield" type="password" name="password" value="" autocomplete="new-password"
               placeholder="رمز عبور" required/></p>

    <p><label class="label">شماره داخلی<span class="required">*</span></label>
        <select id="internal_input" class="checklist" name="internal" required>
            <option value="" selected>شماره داخلی</option>
            <?php if (isset($internal)) {
    foreach ($internal as $item) { ?>
                <option value="<?php echo $item['iid']; ?>"><?php echo (string) $item['number']; ?></option>
            <?php }
} ?>
        </select>
    </p>
    <p id="name_tag"><label class="label">نام<span class="required">*</span></label>
        <input class="textfield" type="text" name="name" placeholder="نام"/></p>

    <p><label class="label">شماره همراه</label>
        <input class="textfield" type="text" name="mobile" placeholder="شماره همراه" /></p>
    <p><label class="label">پست الکترونیکی</label>
        <input class="textfield" type="email" name="email" placeholder="پست الکترونیکی" /></p>

    <p><label class="label">مدیر</label>
        <span class="form_checkbox">
            <input id="manage_checkbox" type="checkbox" name="admin" value="YES" />
            <label for="manage_checkbox"></label>
        </span>
    </p>

    <p class="operator"><label class="label">اپراتور</label>
        <span class="form_checkbox">
            <input id="operator_checkbox" type="checkbox" name="operator" value="YES" />
            <label for="operator_checkbox"></label>
        </span>
    </p>

    <?php
    $accessible_group_outline = array();
    $accessible_group_opinion = array();
    $accessible_group_criticism = array();
    $accessible_group_ticket = array();
    $accessible_group_post = array();
    foreach ($group as $key => $value) {
        array_push($accessible_group_outline, array('title' => $value['name'], 'check' => 'empty', 'auto' => 'group', 'param' => 'Report_Outline_Accessible_Group['.$key.']', 'value' => 'NO', 'sub' => false));
        array_push($accessible_group_opinion, array('title' => $value['name'], 'check' => 'empty', 'auto' => 'group', 'param' => 'Report_Opinion_Accessible_Group['.$key.']', 'value' => 'NO', 'sub' => false));
        array_push($accessible_group_criticism, array('title' => $value['name'], 'check' => 'empty', 'auto' => 'group', 'param' => 'Report_Criticism_Accessible_Group['.$key.']', 'value' => 'NO', 'sub' => false));
        array_push($accessible_group_ticket, array('title' => $value['name'], 'check' => 'empty', 'auto' => 'group', 'param' => 'Report_Ticket_Accessible_Group['.$key.']', 'value' => 'NO', 'sub' => false));
        array_push($accessible_group_post, array('title' => $value['name'], 'check' => 'empty', 'auto' => 'group', 'param' => 'Report_Post_Accessible_Group['.$key.']', 'value' => 'NO', 'sub' => false));
    }

    $data['data'] = array(
        array('title' => 'خانه',
            'check' => 'empty',
            'param' => 'Home',
            'value' => 'NO',
            'sub' => array(
                array('title' => 'خلاصه آمار',
                    'check' => 'empty',
                    'param' => 'Home_Summary',
                    'value' => 'NO',
                    'sub' => false
                ),
                array('title' => 'نمودار',
                    'check' => 'empty',
                    'param' => 'Home_Chart',
                    'value' => 'NO',
                    'sub' => false
                ),
                array('title' => 'تماس&zwnj;های اخیر',
                    'check' => 'empty',
                    'param' => 'Home_Call',
                    'value' => 'NO',
                    'sub' => false
                ),
                array('title' => 'نظرسنجی&zwnj;های اخیر',
                    'check' => 'empty',
                    'param' => 'Home_Opinion',
                    'value' => 'NO',
                    'sub' => false
                )
            )
                          ),
        array('title' => 'گزارش',
            'check' => 'empty',
            'param' => 'Report',
            'value' => 'NO',
            'sub' => array(
                array('title' => 'گزارش اصلی',
                    'check' => 'empty',
                    'param' => 'Report_Outline',
                    'value' => 'NO',
                    'sub' => array(
                        array('title' => 'مشاهده',
                            'check' => 'empty',
                            'auto' => 'view',
                            'param' => 'Report_Outline_List',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'حذف',
                            'check' => 'empty',
                            'auto' => 'edit',
                            'param' => 'Report_Outline_Delete',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'گروه&zwnj;های کاربری در دسترس',
                            'check' => 'empty',
                            'auto' => 'edit',
                            'param' => 'Report_Outline_Group',
                            'value' => 'NO',
                            'sub' => $accessible_group_outline
                        )
                    )
                ),
                array('title' => 'نظرسنجی',
                    'check' => 'empty',
                    'param' => 'Report_Opinion',
                    'value' => 'NO',
                    'sub' => array(
                        array('title' => 'مشاهده',
                            'check' => 'empty',
                            'auto' => 'view',
                            'param' => 'Report_Opinion_List',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'حذف',
                            'check' => 'empty',
                            'auto' => 'edit',
                            'param' => 'Report_Opinion_Delete',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'گروه&zwnj;های کاربری در دسترس',
                            'check' => 'empty',
                            'auto' => 'edit',
                            'param' => 'Report_Opinion_Group',
                            'value' => 'NO',
                            'sub' => $accessible_group_opinion
                        )
                    )
                ),
                array('title' => 'انتقاد و پیشنهاد',
                    'check' => 'empty',
                    'param' => 'Report_Criticism',
                    'value' => 'NO',
                    'sub' => array(
                        array('title' => 'مشاهده',
                            'check' => 'empty',
                            'auto' => 'view',
                            'param' => 'Report_Criticism_List',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'حذف',
                            'check' => 'empty',
                            'auto' => 'edit',
                            'param' => 'Report_Criticism_Delete',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'گروه&zwnj;های کاربری در دسترس',
                            'check' => 'empty',
                            'auto' => 'edit',
                            'param' => 'Report_Criticism_Group',
                            'value' => 'NO',
                            'sub' => $accessible_group_criticism
                        )
                    )
                ),
                array('title' => 'تیکتینگ',
                    'check' => 'empty',
                    'param' => 'Report_Ticket',
                    'value' => 'NO',
                    'sub' => array(
                        array('title' => 'مشاهده',
                            'check' => 'empty',
                            'auto' => 'view',
                            'param' => 'Report_Ticket_List',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'حذف',
                            'check' => 'empty',
                            'auto' => 'edit',
                            'param' => 'Report_Ticket_Delete',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'گروه&zwnj;های کاربری در دسترس',
                            'check' => 'empty',
                            'auto' => 'edit',
                            'param' => 'Report_Ticket_Group',
                            'value' => 'NO',
                            'sub' => $accessible_group_ticket
                        )
                    )
                ),
                array('title' => 'پست صوتی',
                    'check' => 'empty',
                    'param' => 'Report_Post',
                    'value' => 'NO',
                    'sub' => array(
                        array('title' => 'مشاهده',
                            'check' => 'empty',
                            'auto' => 'view',
                            'param' => 'Report_Post_List',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'حذف',
                            'check' => 'empty',
                            'auto' => 'edit',
                            'param' => 'Report_Post_Delete',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'گروه&zwnj;های کاربری در دسترس',
                            'check' => 'empty',
                            'auto' => 'edit',
                            'param' => 'Report_Post_Group',
                            'value' => 'NO',
                            'sub' => $accessible_group_post
                        )
                    )
                ),
                array('title' => 'دانلود صوت',
                    'check' => 'empty',
                    'param' => 'Report_Call_Download',
                    'value' => 'NO',
                    'sub' => false
                ),
                array('title' => 'آپلود صوت',
                    'check' => 'empty',
                    'param' => 'Report_Call_Upload',
                    'value' => 'NO',
                    'sub' => false
                )
            )
        ),
        array('title' => 'مانیتورینگ',
            'check' => 'empty',
            'param' => 'Monitor',
            'value' => 'NO',
            'sub' => array(
                array('title' => 'وضعیت کانال',
                    'check' => 'empty',
                    'param' => 'Monitor_Channel',
                    'value' => 'NO',
                    'sub' => false
                )
            )
        ),
        array('title' => 'نمودار',
            'check' => 'empty',
            'param' => 'Plot',
            'value' => 'NO',
            'sub' => array(
                array('title' => 'عملکرد داخلی&zwnj;ها',
                    'check' => 'empty',
                    'param' => 'Plot_All',
                    'value' => 'NO',
                    'sub' => array(
                        array('title' => 'مدت زمان مکالمه',
                            'check' => 'empty',
                            'param' => 'Plot_All_Time',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'تعداد تماس&zwnj;ها',
                            'check' => 'empty',
                            'param' => 'Plot_All_Count',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'هزینه&zwnj;ها',
                            'check' => 'empty',
                            'param' => 'Plot_All_Price',
                            'value' => 'NO',
                            'sub' => false
                        )
                    )
                ),
                array('title' => 'مقایسه داخلی&zwnj;ها',
                    'check' => 'empty',
                    'param' => 'Plot_Each',
                    'value' => 'NO',
                    'sub' => array(
                        array('title' => 'مدت زمان مکالمه',
                            'check' => 'empty',
                            'param' => 'Plot_Each_Time',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'تعداد تماس&zwnj;ها',
                            'check' => 'empty',
                            'param' => 'Plot_Each_Count',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'هزینه&zwnj;ها',
                            'check' => 'empty',
                            'param' => 'Plot_Each_Price',
                            'value' => 'NO',
                            'sub' => false
                        )
                    )
                ),
                array('title' => 'ساعت کاری',
                    'check' => 'empty',
                    'param' => 'Plot_Schedule',
                    'value' => 'NO',
                    'sub' => array(
                        array('title' => 'مدت زمان مکالمه',
                            'check' => 'empty',
                            'param' => 'Plot_Schedule_Time',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'تعداد تماس&zwnj;ها',
                            'check' => 'empty',
                            'param' => 'Plot_Schedule_Count',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'هزینه&zwnj;ها',
                            'check' => 'empty',
                            'param' => 'Plot_Schedule_Price',
                            'value' => 'NO',
                            'sub' => false
                        )
                    )
                ),
                array('title' => 'دانلود نمودار',
                    'check' => 'empty',
                    'param' => 'Plot_Download',
                    'value' => 'NO',
                    'sub' => false
                )
            )
        ),
        array('title' => 'کاربران',
            'check' => 'empty',
            'param' => 'User',
            'value' => 'NO',
            'sub' => array(
                array('title' => 'کاربران',
                    'check' => 'empty',
                    'param' => 'User_Main',
                    'value' => 'NO',
                    'sub' => array(
                        array('title' => 'مشاهده',
                            'check' => 'empty',
                            'auto' => 'view',
                            'param' => 'User_List',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'درج',
                            'check' => 'empty',
                            'auto' => 'edit',
                            'param' => 'User_Add',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'حذف',
                            'check' => 'empty',
                            'auto' => 'edit',
                            'param' => 'User_Delete',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'ویرایش',
                            'check' => 'empty',
                            'auto' => 'edit',
                            'param' => 'User_Edit',
                            'value' => 'NO',
                            'sub' => false
                        )
                    )
                ),
                array('title' => 'گروه کاربران',
                    'check' => 'empty',
                    'param' => 'Community',
                    'value' => 'NO',
                    'sub' => array(
                        array('title' => 'مشاهده',
                            'check' => 'empty',
                            'auto' => 'view',
                            'param' => 'Community_List',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'درج',
                            'check' => 'empty',
                            'auto' => 'edit',
                            'param' => 'Community_Add',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'حذف',
                            'check' => 'empty',
                            'auto' => 'edit',
                            'param' => 'Community_Delete',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'ویرایش',
                            'check' => 'empty',
                            'auto' => 'edit',
                            'param' => 'Community_Edit',
                            'value' => 'NO',
                            'sub' => false
                        )
                    )
                )
            )
        ),
        array('title' => 'دفتر تلفن',
            'check' => 'empty',
            'param' => 'Contact',
            'value' => 'NO',
            'sub' => array(
                array('title' => 'دفتر تلفن',
                    'check' => 'empty',
                    'param' => 'Contact_Main',
                    'value' => 'NO',
                    'sub' => array(
                        array('title' => 'مشاهده',
                            'check' => 'empty',
                            'auto' => 'view',
                            'param' => 'Contact_List',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'درج',
                            'check' => 'empty',
                            'auto' => 'edit',
                            'param' => 'Contact_Add',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'حذف',
                            'check' => 'empty',
                            'auto' => 'edit',
                            'param' => 'Contact_Delete',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'ویرایش',
                            'check' => 'empty',
                            'auto' => 'edit',
                            'param' => 'Contact_Edit',
                            'value' => 'NO',
                            'sub' => false
                        )
                    )
                ),
                array('title' => 'تلگرام',
                    'check' => 'empty',
                    'param' => 'Telegram',
                    'value' => 'NO',
                    'sub' => array(
                        array('title' => 'مشاهده',
                            'check' => 'empty',
                            'auto' => 'view',
                            'param' => 'Telegram_List',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'درج',
                            'check' => 'empty',
                            'auto' => 'edit',
                            'param' => 'Telegram_Add',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'حذف',
                            'check' => 'empty',
                            'auto' => 'edit',
                            'param' => 'Telegram_Delete',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'ویرایش',
                            'check' => 'empty',
                            'auto' => 'edit',
                            'param' => 'Telegram_Edit',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'متغیرهای تنظیمی',
                            'check' => 'empty',
                            'param' => 'Telegram_Variable',
                            'value' => 'NO',
                            'sub' => array(
                                array('title' => 'مشاهده',
                                    'check' => 'empty',
                                    'auto' => 'view',
                                    'param' => 'Telegram_Variable_List',
                                    'value' => 'NO',
                                    'sub' => false
                                ),
                                array('title' => 'ویرایش',
                                    'check' => 'empty',
                                    'auto' => 'edit',
                                    'param' => 'Telegram_Variable_Edit',
                                    'value' => 'NO',
                                    'sub' => false
                                )
                            )
                        ),
                        array('title' => 'تاریخچه',
                            'check' => 'empty',
                            'param' => 'Telegram_History_List',
                            'value' => 'NO',
                            'sub' => false
                        )
                    )
                ),
                array('title' => 'شماره&zwnj;های ویژه',
                    'check' => 'empty',
                    'param' => 'Vip',
                    'value' => 'NO',
                    'sub' => array(
                        array('title' => 'مشاهده',
                            'check' => 'empty',
                            'auto' => 'view',
                            'param' => 'Vip_List',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'درج',
                            'check' => 'empty',
                            'auto' => 'edit',
                            'param' => 'Vip_Add',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'حذف',
                            'check' => 'empty',
                            'auto' => 'edit',
                            'param' => 'Vip_Delete',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'ویرایش',
                            'check' => 'empty',
                            'auto' => 'edit',
                            'param' => 'Vip_Edit',
                            'value' => 'NO',
                            'sub' => false
                        )
                    )
                )
            )
        ),
        array('title' => 'نمابر',
            'check' => 'empty',
            'param' => 'Fax',
            'value' => 'NO',
            'sub' => array(
                array('title' => 'داخلی نمابر',
                    'check' => 'empty',
                    'param' => 'Fax_Internal',
                    'value' => 'NO',
                    'sub' => array(
                        array('title' => 'مشاهده',
                            'check' => 'empty',
                            'auto' => 'view',
                            'param' => 'Fax_Internal_List',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'درج',
                            'check' => 'empty',
                            'auto' => 'edit',
                            'param' => 'Fax_Internal_Add',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'حذف',
                            'check' => 'empty',
                            'auto' => 'edit',
                            'param' => 'Fax_Internal_Delete',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'ویرایش',
                            'check' => 'empty',
                            'auto' => 'edit',
                            'param' => 'Fax_Internal_Edit',
                            'value' => 'NO',
                            'sub' => false
                        )
                    )
                ),
                array('title' => 'نمابرهای دریافتی',
                    'check' => 'empty',
                    'param' => 'Fax_Received',
                    'value' => 'NO',
                    'sub' => array(
                        array('title' => 'مشاهده',
                            'check' => 'empty',
                            'auto' => 'view',
                            'param' => 'Fax_Received_List',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'حذف',
                            'check' => 'empty',
                            'auto' => 'edit',
                            'param' => 'Fax_Received_Delete',
                            'value' => 'NO',
                            'sub' => false
                        )
                    )
                ),
                array('title' => 'نمابرهای ارسالی',
                    'check' => 'empty',
                    'param' => 'Fax_Submitted',
                    'value' => 'NO',
                    'sub' => array(
                        array('title' => 'مشاهده',
                            'check' => 'empty',
                            'auto' => 'view',
                            'param' => 'Fax_Submitted_List',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'حذف',
                            'check' => 'empty',
                            'auto' => 'edit',
                            'param' => 'Fax_Submitted_Delete',
                            'value' => 'NO',
                            'sub' => false
                        )
                    )
                ),
                array('title' => 'بایگانی شده&zwnj;ها',
                    'check' => 'empty',
                    'param' => 'Fax_Recorded',
                    'value' => 'NO',
                    'sub' => array(
                        array('title' => 'مشاهده',
                            'check' => 'empty',
                            'auto' => 'view',
                            'param' => 'Fax_Recorded_List',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'حذف',
                            'check' => 'empty',
                            'auto' => 'edit',
                            'param' => 'Fax_Recorded_Delete',
                            'value' => 'NO',
                            'sub' => false
                        )
                    )
                ),
                array('title' => 'ارسال',
                    'check' => 'empty',
                    'param' => 'Fax_Send',
                    'value' => 'NO',
                    'sub' => false
                ),
                array('title' => 'دانلود فایل',
                    'check' => 'empty',
                    'param' => 'Fax_Download',
                    'value' => 'NO',
                    'sub' => false
                ),
                array('title' => 'بایگانی کردن',
                    'check' => 'empty',
                    'param' => 'Fax_Archive',
                    'value' => 'NO',
                    'sub' => false
                )
            )
        ),
        array('title' => 'سیستم تلفنی',
            'check' => 'empty',
            'param' => 'Telephone',
            'value' => 'NO',
            'sub' => array(
                array('title' => 'گزارش وضعیت',
                    'check' => 'empty',
                    'param' => 'Overall_Status',
                    'value' => 'NO',
                    'sub' => false
                ),
                array('title' => 'شماره&zwnj;های داخلی',
                    'check' => 'empty',
                    'param' => 'Internal',
                    'value' => 'NO',
                    'sub' => array(
                        array('title' => 'مشاهده',
                            'check' => 'empty',
                            'auto' => 'view',
                            'param' => 'Internal_List',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'درج',
                            'check' => 'empty',
                            'auto' => 'edit',
                            'param' => 'Internal_Add',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'حذف',
                            'check' => 'empty',
                            'auto' => 'edit',
                            'param' => 'Internal_Delete',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'ویرایش',
                            'check' => 'empty',
                            'auto' => 'edit',
                            'param' => 'Internal_Edit',
                            'value' => 'NO',
                            'sub' => false
                        )
                    )
                ),
                array('title' => 'تماس&zwnj;های ورودی',
                    'check' => 'empty',
                    'param' => 'Incoming',
                    'value' => 'NO',
                    'sub' => array(
                        array('title' => 'مشاهده',
                            'check' => 'empty',
                            'auto' => 'view',
                            'param' => 'Incoming_List',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'درج',
                            'check' => 'empty',
                            'auto' => 'edit',
                            'param' => 'Incoming_Add',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'حذف',
                            'check' => 'empty',
                            'auto' => 'edit',
                            'param' => 'Incoming_Delete',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'ویرایش',
                            'check' => 'empty',
                            'auto' => 'edit',
                            'param' => 'Incoming_Edit',
                            'value' => 'NO',
                            'sub' => false
                        )
                    )
                ),
                array('title' => 'تماس&zwnj;های خروجی',
                    'check' => 'empty',
                    'param' => 'Outgoing',
                    'value' => 'NO',
                    'sub' => array(
                        array('title' => 'مشاهده',
                            'check' => 'empty',
                            'auto' => 'view',
                            'param' => 'Outgoing_List',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'درج',
                            'check' => 'empty',
                            'auto' => 'edit',
                            'param' => 'Outgoing_Add',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'حذف',
                            'check' => 'empty',
                            'auto' => 'edit',
                            'param' => 'Outgoing_Delete',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'ویرایش',
                            'check' => 'empty',
                            'auto' => 'edit',
                            'param' => 'Outgoing_Edit',
                            'value' => 'NO',
                            'sub' => false
                        )
                    )
                ),
                array('title' => 'IVR',
                    'check' => 'empty',
                    'param' => 'Ivr',
                    'value' => 'NO',
                    'sub' => array(
                        array('title' => 'مشاهده',
                            'check' => 'empty',
                            'auto' => 'view',
                            'param' => 'Ivr_List',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'درج',
                            'check' => 'empty',
                            'auto' => 'edit',
                            'param' => 'Ivr_Add',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'حذف',
                            'check' => 'empty',
                            'auto' => 'edit',
                            'param' => 'Ivr_Delete',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'ویرایش',
                            'check' => 'empty',
                            'auto' => 'edit',
                            'param' => 'Ivr_Edit',
                            'value' => 'NO',
                            'sub' => false
                        )
                    )
                ),
                array('title' => 'Trunk',
                    'check' => 'empty',
                    'param' => 'Trunk',
                    'value' => 'NO',
                    'sub' => array(
                        array('title' => 'مشاهده',
                            'check' => 'empty',
                            'auto' => 'view',
                            'param' => 'Trunk_List',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'درج',
                            'check' => 'empty',
                            'auto' => 'edit',
                            'param' => 'Trunk_Add',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'حذف',
                            'check' => 'empty',
                            'auto' => 'edit',
                            'param' => 'Trunk_Delete',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'ویرایش',
                            'check' => 'empty',
                            'auto' => 'edit',
                            'param' => 'Trunk_Edit',
                            'value' => 'NO',
                            'sub' => false
                        )
                    )
                ),
                array('title' => 'گروه&zwnj;بندی',
                    'check' => 'empty',
                    'param' => 'Group',
                    'value' => 'NO',
                    'sub' => array(
                        array('title' => 'گروه داخلی',
                            'check' => 'empty',
                            'param' => 'Group_Internal',
                            'value' => 'NO',
                            'sub' => array(
                                array('title' => 'مشاهده',
                                    'check' => 'empty',
                                    'auto' => 'view',
                                    'param' => 'Group_Internal_List',
                                    'value' => 'NO',
                                    'sub' => false
                                ),
                                array('title' => 'درج',
                                    'check' => 'empty',
                                    'auto' => 'edit',
                                    'param' => 'Group_Internal_Add',
                                    'value' => 'NO',
                                    'sub' => false
                                ),
                                array('title' => 'حذف',
                                    'check' => 'empty',
                                    'auto' => 'edit',
                                    'param' => 'Group_Internal_Delete',
                                    'value' => 'NO',
                                    'sub' => false
                                ),
                                array('title' => 'ویرایش',
                                    'check' => 'empty',
                                    'auto' => 'edit',
                                    'param' => 'Group_Internal_Edit',
                                    'value' => 'NO',
                                    'sub' => false
                                )
                            )
                        ),
                        array('title' => 'گروه کارت&zwnj;های شهری',
                            'check' => 'empty',
                            'param' => 'Group_Urban',
                            'value' => 'NO',
                            'sub' => array(
                                array('title' => 'مشاهده',
                                    'check' => 'empty',
                                    'auto' => 'view',
                                    'param' => 'Group_Urban_List',
                                    'value' => 'NO',
                                    'sub' => false
                                ),
                                array('title' => 'درج',
                                    'check' => 'empty',
                                    'auto' => 'edit',
                                    'param' => 'Group_Urban_Add',
                                    'value' => 'NO',
                                    'sub' => false
                                ),
                                array('title' => 'حذف',
                                    'check' => 'empty',
                                    'auto' => 'edit',
                                    'param' => 'Group_Urban_Delete',
                                    'value' => 'NO',
                                    'sub' => false
                                ),
                                array('title' => 'ویرایش',
                                    'check' => 'empty',
                                    'auto' => 'edit',
                                    'param' => 'Group_Urban_Edit',
                                    'value' => 'NO',
                                    'sub' => false
                                )
                            )
                        ),
                        array('title' => 'گروه زنگ',
                            'check' => 'empty',
                            'param' => 'Group_Ring',
                            'value' => 'NO',
                            'sub' => array(
                                array('title' => 'مشاهده',
                                    'check' => 'empty',
                                    'auto' => 'view',
                                    'param' => 'Group_Ring_List',
                                    'value' => 'NO',
                                    'sub' => false
                                ),
                                array('title' => 'درج',
                                    'check' => 'empty',
                                    'auto' => 'edit',
                                    'param' => 'Group_Ring_Add',
                                    'value' => 'NO',
                                    'sub' => false
                                ),
                                array('title' => 'حذف',
                                    'check' => 'empty',
                                    'auto' => 'edit',
                                    'param' => 'Group_Ring_Delete',
                                    'value' => 'NO',
                                    'sub' => false
                                ),
                                array('title' => 'ویرایش',
                                    'check' => 'empty',
                                    'auto' => 'edit',
                                    'param' => 'Group_Ring_Edit',
                                    'value' => 'NO',
                                    'sub' => false
                                )
                            )
                        )
                    )
                ),
                array('title' => 'فایل&zwnj;های صوتی',
                    'check' => 'empty',
                    'param' => 'File',
                    'value' => 'NO',
                    'sub' => array(
                        array('title' => 'مشاهده',
                            'check' => 'empty',
                            'auto' => 'view',
                            'param' => 'File_List',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'درج',
                            'check' => 'empty',
                            'auto' => 'edit',
                            'param' => 'File_Add',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'حذف',
                            'check' => 'empty',
                            'auto' => 'edit',
                            'param' => 'File_Delete',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'ویرایش',
                            'check' => 'empty',
                            'auto' => 'edit',
                            'param' => 'File_Edit',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'دانلود',
                            'check' => 'empty',
                            'auto' => 'edit',
                            'param' => 'File_Download',
                            'value' => 'NO',
                            'sub' => false
                        )
                    )
                ),
                array('title' => 'آهنگ انتظار',
                    'check' => 'empty',
                    'param' => 'Ring',
                    'value' => 'NO',
                    'sub' => array(
                        array('title' => 'مشاهده',
                            'check' => 'empty',
                            'auto' => 'view',
                            'param' => 'Ring_List',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'درج',
                            'check' => 'empty',
                            'auto' => 'edit',
                            'param' => 'Ring_Add',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'حذف',
                            'check' => 'empty',
                            'auto' => 'edit',
                            'param' => 'Ring_Delete',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'ویرایش',
                            'check' => 'empty',
                            'auto' => 'edit',
                            'param' => 'Ring_Edit',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'دانلود',
                            'check' => 'empty',
                            'auto' => 'edit',
                            'param' => 'Ring_Download',
                            'value' => 'NO',
                            'sub' => false
                        )
                    )
                ),
                array('title' => 'صف انتظار',
                    'check' => 'empty',
                    'param' => 'Queue',
                    'value' => 'NO',
                    'sub' => array(
                        array('title' => 'مشاهده',
                            'check' => 'empty',
                            'auto' => 'view',
                            'param' => 'Queue_List',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'درج',
                            'check' => 'empty',
                            'auto' => 'edit',
                            'param' => 'Queue_Add',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'حذف',
                            'check' => 'empty',
                            'auto' => 'edit',
                            'param' => 'Queue_Delete',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'ویرایش',
                            'check' => 'empty',
                            'auto' => 'edit',
                            'param' => 'Queue_Edit',
                            'value' => 'NO',
                            'sub' => false
                        )
                    )
                ),
                array('title' => 'کدساز',
                    'check' => 'empty',
                    'param' => 'Code',
                    'value' => 'NO',
                    'sub' => array(
                        array('title' => 'مشاهده',
                            'check' => 'empty',
                            'auto' => 'view',
                            'param' => 'Code_List',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'درج',
                            'check' => 'empty',
                            'auto' => 'edit',
                            'param' => 'Code_Add',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'حذف',
                            'check' => 'empty',
                            'auto' => 'edit',
                            'param' => 'Code_Delete',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'ویرایش',
                            'check' => 'empty',
                            'auto' => 'edit',
                            'param' => 'Code_Edit',
                            'value' => 'NO',
                            'sub' => false
                        )
                    )
                ),
                array('title' => 'کدهای غیرمجاز',
                    'check' => 'empty',
                    'param' => 'Deny',
                    'value' => 'NO',
                    'sub' => array(
                        array('title' => 'مشاهده',
                            'check' => 'empty',
                            'auto' => 'view',
                            'param' => 'Deny_List',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'درج',
                            'check' => 'empty',
                            'auto' => 'edit',
                            'param' => 'Deny_Add',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'حذف',
                            'check' => 'empty',
                            'auto' => 'edit',
                            'param' => 'Deny_Delete',
                            'value' => 'NO',
                            'sub' => false
                        ),
                        array('title' => 'ویرایش',
                            'check' => 'empty',
                            'auto' => 'edit',
                            'param' => 'Deny_Edit',
                            'value' => 'NO',
                            'sub' => false
                        )
                    )
                ),
                array('title' => 'ساعت&zwnj;های کاری',
                    'check' => 'empty',
                    'param' => 'WorkHour',
                    'value' => 'NO',
                    'sub' => array(
                        array('title' => 'برنامه هفتگی',
                            'check' => 'empty',
                            'param' => 'Schedule',
                            'value' => 'NO',
                            'sub' => array(
                                array('title' => 'مشاهده',
                                    'check' => 'empty',
                                    'auto' => 'view',
                                    'param' => 'Schedule_List',
                                    'value' => 'NO',
                                    'sub' => false
                                ),
                                array('title' => 'ویرایش',
                                    'check' => 'empty',
                                    'auto' => 'edit',
                                    'param' => 'Schedule_Edit',
                                    'value' => 'NO',
                                    'sub' => false
                                )
                            )
                        ),
                        array('title' => 'روزهای تعطیل',
                            'check' => 'empty',
                            'param' => 'Holiday',
                            'value' => 'NO',
                            'sub' => array(
                                array('title' => 'مشاهده',
                                    'check' => 'empty',
                                    'auto' => 'view',
                                    'param' => 'Holiday_List',
                                    'value' => 'NO',
                                    'sub' => false
                                ),
                                array('title' => 'درج',
                                    'check' => 'empty',
                                    'auto' => 'edit',
                                    'param' => 'Holiday_Add',
                                    'value' => 'NO',
                                    'sub' => false
                                ),
                                array('title' => 'حذف',
                                    'check' => 'empty',
                                    'auto' => 'edit',
                                    'param' => 'Holiday_Delete',
                                    'value' => 'NO',
                                    'sub' => false
                                ),
                                array('title' => 'ویرایش',
                                    'check' => 'empty',
                                    'auto' => 'edit',
                                    'param' => 'Holiday_Edit',
                                    'value' => 'NO',
                                    'sub' => false
                                )
                            )
                        )
                    )
                )
            )
        ),
        array('title' => 'تنظیمات',
                                'check' => 'empty',
                                'param' => 'Setting',
                                'value' => 'NO',
                                'sub' => array(
                                    array('title' => 'شخصی&zwnj;سازی صفحه اصلی',
                                                     'check' => 'empty',
                                                     'param' => 'Home_Design',
                                                     'value' => 'NO',
                                                     'sub' => false
                                               ),
                                    array('title' => 'پشتیبان&zwnj;گیری',
                                        'check' => 'empty',
                                        'param' => 'Backup',
                                        'value' => 'NO',
                                        'sub' => array(
                                            array('title' => 'پشتیبان&zwnj;گیری',
                                                'check' => 'empty',
                                                'param' => 'Backup_Process',
                                                'value' => 'NO',
                                                'sub' => false
                                            ),
                                            array('title' => 'متغیرهای تنظیمی',
                                                'check' => 'empty',
                                                'param' => 'Backup_Variable',
                                                'value' => 'NO',
                                                'sub' => array(
                                                    array('title' => 'مشاهده',
                                                        'check' => 'empty',
                                                        'auto' => 'view',
                                                        'param' => 'Backup_Variable_List',
                                                        'value' => 'NO',
                                                        'sub' => false
                                                    ),
                                                    array('title' => 'ویرایش',
                                                        'check' => 'empty',
                                                        'auto' => 'edit',
                                                        'param' => 'Backup_Variable_Edit',
                                                        'value' => 'NO',
                                                        'sub' => false
                                                    )
                                                )
                                            )
                                        )
                                    ),
                                    array('title' => 'قیمت گذاری',
                                            'check' => 'empty',
                                            'param' => 'Price',
                                            'value' => 'NO',
                                            'sub' => array(
                                                        array('title' => 'مشاهده',
                                                                'check' => 'empty',
                                                            'auto' => 'view',
                                                                'param' => 'Price_List',
                                                                'value' => 'NO',
                                                                'sub' => false
                                                        ),
                                                        array('title' => 'درج',
                                                                'check' => 'empty',
                                                            'auto' => 'edit',
                                                                'param' => 'Price_Add',
                                                                'value' => 'NO',
                                                                'sub' => false
                                                        ),
                                                        array('title' => 'حذف',
                                                                'check' => 'empty',
                                                            'auto' => 'edit',
                                                                'param' => 'Price_Delete',
                                                                'value' => 'NO',
                                                                'sub' => false
                                                        ),
                                                        array('title' => 'ویرایش',
                                                                'check' => 'empty',
                                                            'auto' => 'edit',
                                                                'param' => 'Price_Edit',
                                                                'value' => 'NO',
                                                                'sub' => false
                                                        )
                                            )
                                    ),
                                    array('title' => 'برچسب گذاری امتیازات',
                                            'check' => 'empty',
                                            'param' => 'Label',
                                            'value' => 'NO',
                                            'sub' => array(
                                                        array('title' => 'مشاهده',
                                                                'check' => 'empty',
                                                            'auto' => 'view',
                                                                'param' => 'Label_List',
                                                                'value' => 'NO',
                                                                'sub' => false
                                                        ),
                                                        array('title' => 'درج',
                                                                'check' => 'empty',
                                                            'auto' => 'edit',
                                                                'param' => 'Label_Add',
                                                                'value' => 'NO',
                                                                'sub' => false
                                                        ),
                                                        array('title' => 'حذف',
                                                                'check' => 'empty',
                                                            'auto' => 'edit',
                                                                'param' => 'Label_Delete',
                                                                'value' => 'NO',
                                                                'sub' => false
                                                        ),
                                                        array('title' => 'ویرایش',
                                                                'check' => 'empty',
                                                            'auto' => 'edit',
                                                                'param' => 'Label_Edit',
                                                                'value' => 'NO',
                                                                'sub' => false
                                                        )
                                            )
                                    ),
                                    array('title' => 'متغیرهای سیستمی',
                                            'check' => 'empty',
                                            'param' => 'Variable',
                                            'value' => 'NO',
                                            'sub' => array(
                                                        array('title' => 'مشاهده',
                                                                'check' => 'empty',
                                                            'auto' => 'view',
                                                                'param' => 'Variable_List',
                                                                'value' => 'NO',
                                                                'sub' => false
                                                        ),
                                                        array('title' => 'ویرایش',
                                                                'check' => 'empty',
                                                            'auto' => 'edit',
                                                                'param' => 'Variable_Edit',
                                                                'value' => 'NO',
                                                                'sub' => false
                                                        )
                                            )
                                    ),
                                    array('title' => 'ساعت سیستم',
                                            'check' => 'empty',
                                            'param' => 'System_Time',
                                            'value' => 'NO',
                                            'sub' => false
                                    )
                                )
                          )
//                          array('title' => 'درباره ما',
//                                'check' => 'empty',
//                                'param' => 'About_Us',
//                                'value' => 'NO',
//                                'sub' => false
//                          ),
//                          array('title' => 'تماس با ما',
//                                'check' => 'empty',
//                                'param' => 'Contact_Us',
//                                'value' => 'NO',
//                                'sub' => false
//                          )
    );

    echo '<div class="other"><label class="label" style="vertical-align: top">دسترسی&zwnj;ها</label><span style="width: 50%; display: inline-block; margin-right: 30px;">';
    $this->load->view('tree', $data);
    echo '</span></div>';

    ?>

    <div class="center">
        <button class="push_button" type="submit">ثبت&zwnj;نام</button>
<!--        <button class="push_button" type="reset">پاک&zwnj;کردن</button>-->
    </div>
</form>

<style>
    #name_tag {
        display: none;
    }
    .form p {
        color: black;
    }
    table {
        width: 90%;
        margin: 30px 0px;
    }
    #group tr:last-child {
        text-align: right !important;
    }
    table caption {
        text-align: right;
        font-size: 1.2em;
    }
    table th, table td {
        padding: 3px 7px;
    }
    table th, #system td:nth-child(odd), #crud td:first-child {
        background: var(--MainColor);
        color: white;
    }
</style>

<script>

    $('#internal_input').change(function () {
        var name_tag = $('#name_tag');
        if ($(this).val() == "")
            name_tag.hide();
        else {
            name_tag.show();
            name_tag.find('input').val('');
            var internal = <?php echo json_encode($internal) ?>;
            for(i = 0; i < internal.length ; i++) {
                if ($(this).val() == internal[i]['iid'])
                    name_tag.find('input').val(internal[i]['name']);
            }
        }
    });

    $('#manage_checkbox').change(function () {
        if (this.checked) {
            $('.operator').hide();
            $('.other').hide();
        } else {
            $('.operator').show();
            $('.operator').find('#operator_checkbox').prop("checked", false);
            $('.other').show();
        }
    });

    $('#operator_checkbox').change(function () {
        if (this.checked) {
            $('.other').hide();
        } else {
            $('.other').show();
        }
    });

    $('#system .all').change(function () {
        if (!this.checked)
            $(this).parent().parent().parent().find('.one').prop('checked', false);
    });

    $('#system .one').change(function () {
        if (this.checked)
            $(this).parent().parent().parent().find('.all').prop('checked', true);
    });
    
    $('#crud .all').change(function () {
        if (!this.checked)
            $(this).parent().parent().parent().find('.one').prop('checked', false);
    });

    $('#crud .one').change(function () {
        if (this.checked)
            $(this).parent().parent().parent().find('.all').prop('checked', true);
    });
</script>
