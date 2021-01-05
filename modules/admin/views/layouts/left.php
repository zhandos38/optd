<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?= Yii::$app->user->identity->username ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Работники', 'icon' => 'file-code-o', 'url' => ['/admin/employee/index']],
                    ['label' => 'Должности', 'icon' => 'file-code-o', 'url' => ['/admin/position/index']],
                    ['label' => 'Отделении', 'icon' => 'file-code-o', 'url' => ['/admin/department/index']],
                    ['label' => 'Пациенты', 'icon' => 'file-code-o', 'url' => ['/admin/admission/index']],
                    ['label' => 'Рейтинги', 'icon' => 'file-code-o', 'url' => ['/admin/rating/index']],
                    ['label' => 'Больницы', 'icon' => 'file-code-o', 'url' => ['/admin/facility/index']],
                    ['label' => 'Новости', 'icon' => 'file-code-o', 'url' => ['/admin/news/index']],
                ],
            ]
        ) ?>

    </section>

</aside>
