<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <section class="sidebar">

        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>

        <?= Wkii\AdminLTE\Widgets\Menu::widget([
            'items' => [
                ['label' => '产品汪', 'url' => ['/'], 'icon' =>'fa-gavel'],
                ['label' => '设计狮', 'url' => ['site/welcome'], 'icon' =>'fa-gavel'],
                ['label' => '程序员', 'url' => ['/gii'], 'icon' =>'fa-gavel'],
                ['label' => '运营喵', 'url' => ['/debug'], 'icon' => 'fa-bug'],
                ['label' => 'Login', 'url' => ['site/logout'], 'visible' => !Yii::$app->user->isGuest, 'icon' => 'fa-sign-out'],

                [
                    'label' => 'Level One',
                    'url' => 'javascript:;',
                    'icon' => 'fa-folder',
                    'items' => [
                        [
                            'label' => 'Level Two',
                            'url' => '#',
                            'icon' => 'fa-link',
                        ],
                        [
                            'label' => 'Level Two',
                            'url' => '#',
                            'icon' => 'fa-link',
                        ],
                        [
                            'label' => 'Level Two',
                            'url' => '#',
                            'icon' => 'fa-share',
                            'items' => [
                                [
                                    'label' => 'Level Three',
                                    'url' => '#',
                                    'icon' => 'fa-link'
                                ],
                                [
                                    'label' => 'Level Three',
                                    'url' => '#',
                                    'icon' => 'fa-folder',
                                    'items' => [
                                        [
                                            'label' => 'Level Four',
                                            'url' => '#',
                                        ],
                                        [
                                            'label' => 'Level Four',
                                            'url' => '#',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ]) ?>

    </section>
    <!-- /.sidebar -->
</aside>
