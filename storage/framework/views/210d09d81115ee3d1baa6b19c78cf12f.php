<?php $__env->startSection('user_content'); ?>

<?php
// Helper function to detect links inside messages
function makeLinksClickable($text) {
    $pattern = '/((https?:\/\/|www\.)[^\s]+)/i';
    return preg_replace_callback($pattern, function ($matches) {
        $url = $matches[0];
        $href = strpos($url, 'http') === 0 ? $url : "http://$url";
        return '<a href="' . $href . '" target="_blank" class="text-decoration-underline text-primary">' . $url . '</a>';
    }, e($text));
}
?>

<div class="col-lg-9">
    <div class="card p-4 shadow">
        <h3 class="mb-4">مرحبًا, <?php echo e(Auth::user()->fname); ?></h3>

        <!-- Check if user has services -->
        <?php if($getUserService->isNotEmpty()): ?>
            <div class="table-responsive mt-4">
                <table class="table table-bordered text-end" style="direction: rtl;">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">الرقم</th>
                            <th scope="col">الخدمة</th>
                            <th scope="col">الحالة</th>
                            <th scope="col">التاريخ</th>
                            <th scope="col">سعر الخدمة</th>

                            <th scope="col">المزيد</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $getUserService; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($key + 1); ?></td>
                                <td><?php echo e($item->service->title); ?></td>
                              <td>
    <?php if($item->status == 'completed'): ?>
        <span class="badge bg-success text-white">مكتمل</span>
    <?php elseif($item->status == 'approved'): ?>
        <span class="badge bg-info text-white">الموافقة على العمل وتحديد السعر</span>
    <?php elseif($item->status == 'working'): ?>
        <span class="badge bg-warning text-dark">تأكيد العمل وجاري العمل عليه</span>
    <?php elseif($item->status == 'pending'): ?>
        <span class="badge bg-secondary text-white">قيد الانتظار</span>
    <?php else: ?>
        <span class="badge bg-danger text-white">مرفوض</span>
    <?php endif; ?>
</td>
                                <td><?php echo e($item->created_at->diffForHumans()); ?></td>

                                <td><?php echo e($item->total_price ?? "غير محدد بعد"); ?></td>

                                <td>
                                    <!-- Details button -->
                                    <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#serviceModal<?php echo e($item->id); ?>">
                                        <i class="bi bi-eye"></i>
                                    </button>

                                    <!-- Chat icon button -->
                                    



                                    <a href="<?php echo e(route('show.user.messages',$item->id)); ?>" type="button" class="btn btn-sm btn-outline-success">
                                        <i class="bi bi-chat-dots"></i>
                                    </a>


                                </td>
                            </tr>

                            <!-- Chat Modal -->
                            <div class="modal fade" id="chatModal<?php echo e($item->id); ?>" tabindex="-1" aria-labelledby="chatModalLabel<?php echo e($item->id); ?>" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header bg-primary text-white">
                                            <h5 class="modal-title" id="chatModalLabel<?php echo e($item->id); ?>">المحادثة حول: <?php echo e($item->service->title); ?></h5>
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="إغلاق"></button>
                                        </div>
                                        <div class="modal-body" style="height: 400px; overflow-y: auto; background: #f9f9f9;">

                                            
                                            <div class="d-flex mb-3">
                                                <div class="p-3 rounded bg-light border" style="max-width: 70%;">
                                                    <div class="small text-muted mb-1">المدير • منذ 5 دقائق</div>
                                                    <div><?php echo makeLinksClickable('مرحبا بك! سنتابع طلبك هنا: www.example.com'); ?></div>
                                                </div>
                                            </div>

                                            
                                            <div class="d-flex justify-content-end mb-3">
                                                <div class="p-3 rounded bg-success text-white" style="max-width: 70%;">
                                                    <div class="small text-white-50 mb-1"><?php echo e(Auth::user()->fname); ?> • منذ 2 دقائق</div>
                                                    <div><?php echo makeLinksClickable('شكرًا لكم'); ?></div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="modal-footer bg-light">
                                            <form class="d-flex w-100">
                                                <input type="text" class="form-control me-2" placeholder="اكتب رسالتك هنا...">
                                                <button type="submit" class="btn btn-primary">إرسال</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Service Details Modal -->
                            <div class="modal fade" id="serviceModal<?php echo e($item->id); ?>" tabindex="-1" aria-labelledby="serviceModal<?php echo e($item->id); ?>Label" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content text-end" style="direction: rtl;">
                                        <div class="modal-header border-bottom-0">
                                            <h5 class="modal-title fw-bold" id="serviceModal<?php echo e($item->id); ?>Label">تفاصيل الخدمة</h5>
                                        </div>
                                        <div class="modal-body">
                                            <div class="p-3 border rounded mb-2">
                                                <span class="fw-bold">الخدمة:</span>
                                                <span><?php echo e($item->service->title); ?></span>
                                            </div>

                                             <div class="p-3 border rounded mb-2">
                                                <span class="fw-bold">التكلفة:</span>
                                                <span><?php echo e($item->total_price ?? "غير محدد بعد"); ?></span>
                                            </div>
                                            <div class="p-3 border rounded mb-2">
                                                <span class="fw-bold">الوصف:</span>
                                                <span><?php echo e($item->des); ?></span>
                                            </div>
                                            <div class="p-3 border rounded mb-2">
                                                <span class="fw-bold">الحالة:</span>
                                              <?php if($item->status == 'completed'): ?>
        <span class="badge bg-success text-white">مكتمل</span>
    <?php elseif($item->status == 'approved'): ?>
        <span class="badge bg-info text-white">الموافقة على العمل وتحديد السعر</span>
    <?php elseif($item->status == 'working'): ?>
        <span class="badge bg-warning text-dark">تأكيد العمل وجاري العمل عليه</span>
    <?php elseif($item->status == 'pending'): ?>
        <span class="badge bg-secondary text-white">قيد الانتظار</span>
    <?php else: ?>
        <span class="badge bg-danger text-white">مرفوض</span>
    <?php endif; ?>
                                            </div>
                                            <div class="p-3 border rounded mb-2">
                                                <span class="fw-bold">تاريخ الإنشاء:</span>
                                                <span><?php echo e($item->created_at->diffForHumans()); ?></span>
                                            </div>
                                            <div class="p-3 border rounded">
                                                <span class="fw-bold">تاريخ آخر تعديل على الطلب:</span>
                                                <span><?php echo e($item->updated_at->diffForHumans()); ?></span>
                                            </div>
                                        </div>
                                        <div class="modal-footer border-top-0">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        <?php else: ?>
            <!-- Show this message if no services exist -->
            <div class="text-center text-muted py-5">
                <i class="bi bi-info-circle fs-1 mb-3"></i>
                <p class="mb-0 fs-5">لا توجد طلبات حالياً</p>
            </div>
        <?php endif; ?>

    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.pages.user.user_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/KINGSTON/Almaqam/cpanel/resources/views/frontend/pages/user/order_dashboard.blade.php ENDPATH**/ ?>