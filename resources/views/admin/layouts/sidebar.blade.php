
            <aside id="sidebar" class="sidebar">
                <section class="sidebar-container">
                    <section class="sidebar-wrapper">
                        <a href="{{ route('admin.home') }}" class="sidebar-link">
                            <i class="fas fa-home"></i>
                            <span>خانه</span>
                        </a>
                        <section class="sidebar-part-title">بخش فروش</section>
                        <section class="sidebar-group-link">
                            <section class="sidebar-dropdown-toggle">
                                <i class="fas fa-chart-bar icon"></i>
                                <span>ویترین</span>
                                <i class="fas fa-angle-left angle"></i>
                            </section>
                            <section class="sidebar-dropdown">
                                <a class="sidebar-dropdown-link"  href="{{ route('admin.market.category.index')}}">دسته‌بندی</a>
                                <a class="sidebar-dropdown-link" href="{{ route('admin.market.property.index') }}">فرم کالا</a>
                                <a class="sidebar-dropdown-link" href="{{ route('admin.market.store.index') }}">فروشگاه‌ها</a>
                                <a class="sidebar-dropdown-link"  href="{{ route('admin.market.product.index') }}">محصولات</a>
                                <a class="sidebar-dropdown-link" href="{{ route('admin.market.storehouse.index') }}">انبار</a>
                                <a class="sidebar-dropdown-link" href="{{ route('admin.market.comment.index') }}">نظرات</a>
                            </section>
                        </section>
                        <section class="sidebar-group-link">
                            <section class="sidebar-dropdown-toggle">
                                <i class="fas fa-chart-bar icon"></i>
                                <span>سفارشات</span>
                                <i class="fas fa-angle-left angle"></i>
                            </section>
                            <section class="sidebar-dropdown">
                                <a class="sidebar-dropdown-link"  href="{{ route('admin.market.order.newOrders') }}">جدید</a>
                                <a class="sidebar-dropdown-link" href="{{ route('admin.market.order.sending') }}">در حال ارسال</a>
                                <a class="sidebar-dropdown-link" href="{{ route('admin.market.order.unpaid') }}">پرداخت‌ نشده</a>
                                <a class="sidebar-dropdown-link"  href="{{ route('admin.market.order.canceled') }}">باطل شده</a>
                                <a class="sidebar-dropdown-link" href="{{ route('admin.market.order.returned') }}">مرجوعی</a>
                                <a class="sidebar-dropdown-link" href="{{ route('admin.market.order.all') }}">تمام سفارشات</a>
                            </section>
                        </section>
                        <section class="sidebar-group-link">
                            <section class="sidebar-dropdown-toggle">
                                <i class="fas fa-chart-bar icon"></i>
                                <span>پرداخت‌ها</span>
                                <i class="fas fa-angle-left angle"></i>
                            </section>
                            <section class="sidebar-dropdown">
                                <a class="sidebar-dropdown-link" href="{{ route('admin.market.payment.online') }}">پرداخت‌های آنلاین</a>
                                <a class="sidebar-dropdown-link" href="{{ route('admin.market.payment.offline') }}">پرداخت‌های آفلاین</a>
                                <a class="sidebar-dropdown-link"  href="{{ route('admin.market.payment.attendance') }}">پرداخت در محل</a>
                                <a class="sidebar-dropdown-link"  href="{{ route('admin.market.payment.index') }}">تمام پرداخت‌ها</a>
                            </section>
                        </section>
                        <section class="sidebar-group-link">
                            <section class="sidebar-dropdown-toggle">
                                <i class="fas fa-chart-bar icon"></i>
                                <span>تخفیف‌ها</span>
                                <i class="fas fa-angle-left angle"></i>
                            </section>
                            <section class="sidebar-dropdown">
                                <a class="sidebar-dropdown-link"  href="{{ route('admin.market.discount.copan') }}">کوپن تخیف</a>
                                <a class="sidebar-dropdown-link" href="{{ route('admin.market.discount.commonDiscount') }}">تخفیف عمومی</a>
                                <a class="sidebar-dropdown-link" href="{{ route('admin.market.discount.amazingSale') }}">فروش شگفت‌انگیز</a>
                            </section>
                        </section>
                        <a href="{{ route('admin.market.delivery.index') }}" class="sidebar-link">
                            <i class="fas fa-bars"></i>
                            <span>روش‌های ارسال</span>
                        </a>

                        <section class="sidebar-part-title">بخش محتوا</section>

                        <a href="{{ route('admin.content.category.index') }}" class="sidebar-link">
                            <i class="fas fa-bars"></i>
                            <span>دسته‌بندی‌ها</span>
                        </a>
                        <a href="{{ route('admin.content.post.index') }}" class="sidebar-link">
                            <i class="fas fa-bars"></i>
                            <span>پست‌ها</span>
                        </a>
                        <a href="{{ route('admin.content.comment.index') }}" class="sidebar-link">
                            <i class="fas fa-bars"></i>
                            <span>نظرات</span>
                        </a>
                        <a href="{{ route('admin.content.menu.index') }}" class="sidebar-link">
                            <i class="fas fa-bars"></i>
                            <span>منو</span>
                        </a>
                        <a href="{{ route('admin.content.faq.index') }}" class="sidebar-link">
                            <i class="fas fa-bars"></i>
                            <span>سوالات متداول</span>
                        </a>
                        <a href="{{ route('admin.content.page.index') }}" class="sidebar-link">
                            <i class="fas fa-bars"></i>
                            <span>صفحه‌ساز</span>
                        </a>
                        {{-- <section class="sidebar-group-link">
                            <section class="sidebar-dropdown-toggle">
                                <i class="fas fa-chart-bar icon"></i>
                                <span>نوشته‌ها</span>
                                <i class="fas fa-angle-left angle"></i>
                            </section>
                            <section class="sidebar-dropdown">
                                <a class="sidebar-dropdown-link"  href="#">مقالات</a>
                                <a class="sidebar-dropdown-link" href="#">پست‌ها</a>
                                <a class="sidebar-dropdown-link" href="#">دوره‌ها</a>
                            </section>
                        </section> --}}
                        <section class="sidebar-part-title">بخش کاربران</section>
                        <a href="{{ route('admin.user.admin-user.index') }}" class="sidebar-link">
                            <i class="fas fa-bars"></i>
                            <span>کاربران ادمین</span>
                        </a>
                        <a href="{{ route('admin.user.customer.index') }}" class="sidebar-link">
                            <i class="fas fa-bars"></i>
                            <span>مشتریان</span>
                        </a>
                        <a href="{{ route('admin.user.role.index') }}" class="sidebar-link">
                            <i class="fas fa-bars"></i>
                            <span>سطوح دسترسی</span>
                        </a>


                        {{-- <section class="sidebar-group-link">
                            <section class="sidebar-dropdown-toggle">
                                <i class="fas fa-users icon"></i>
                                <span>کاربران</span>
                                <i class="fas fa-angle-left angle"></i>
                            </section>
                            <section class="sidebar-dropdown">
                                <a class="sidebar-dropdown-link" href="#">ادمین</a>
                                <a class="sidebar-dropdown-link" href="#">فروشنده</a>
                                <a class="sidebar-dropdown-link" href="#">مشتری</a>
                            </section>
                        </section> --}}

                        <section class="sidebar-part-title">تیکت‌ها</section>
                        <a href="{{ route('admin.ticket.newTickets') }}" class="sidebar-link">
                            <i class="fas fa-bars"></i>
                            <span>تیکت‌های جدید</span>
                        </a>
                        <a href="{{ route('admin.ticket.openTickets') }}" class="sidebar-link">
                            <i class="fas fa-bars"></i>
                            <span>تیکت‌های باز</span>
                        </a>
                        <a href="{{ route('admin.ticket.closeTickets') }}" class="sidebar-link">
                            <i class="fas fa-bars"></i>
                            <span>تیکت‌های بسته</span>
                        </a>

                        <section class="sidebar-part-title">اطلاع‌رسانی</section>
                        <a href="{{ route('admin.notify.email.index') }}" class="sidebar-link">
                            <i class="fas fa-bars"></i>
                            <span>اعلامیه‌ی ایمیلی</span>
                        </a>
                        <a href="{{ route('admin.notify.sms.index') }}" class="sidebar-link">
                            <i class="fas fa-bars"></i>
                            <span>اعلامیه‌ی پیامکی</span>
                        </a>


                        <section class="sidebar-part-title">تنظیمات</section>
                        <a href="{{ route('admin.setting.index') }}" class="sidebar-link">
                            <i class="fas fa-bars"></i>
                            <span>تنظیمات</span>
                        </a>
                        {{--
                        <section class="sidebar-group-link">
                            <section class="sidebar-dropdown-toggle">
                                <i class="fas fa-cogs icon"></i>
                                <span>تنظیمات منو</span>
                                <i class="fas fa-angle-left angle"></i>
                            </section>
                            <section class="sidebar-dropdown">
                                <a class="sidebar-dropdown-link" href="#">منوی هدر</a>
                                <a class="sidebar-dropdown-link" href="#">منوی فوتر</a>
                            </section>
                        </section> --}}
                    </section>
                </section>
            </aside>
