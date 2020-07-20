<?php

use app\assets\AdminAsset;
use app\modules\admin\models\DataU;
use yii\helpers\Html;

AdminAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="<?= Yii::$app->language ?>">
<head>
    <base href="/adminlte/">
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <?php $this->head() ?>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<?php $this->beginBody() ?>
<div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a href="index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>LT</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Admin</b>LTE</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">

                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="hidden-xs"><?=Yii::$app->user->identity->username?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="user-header">
                                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                <p>
                                    <?=Yii::$app->user->identity->username?> - Web Developer

                                </p>
                            </li>
                            <!-- Menu Body -->

                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="<?=\yii\helpers\Url::to(['main/index'])?>" class="btn btn-default btn-flat">Главная</a>
                                </div>
                                <div class="pull-right">
                                    <a href="<?=\yii\helpers\Url::to(['../auth/logout'])?>" class="btn btn-default btn-flat">Выйти</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- Sidebar user panel (optional) -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p><?=Yii::$app->user->identity->username?></p>
                    <!-- Status -->
<!--                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>-->
                </div>
            </div>

            <!-- search form (Optional) -->
<!--            <form action="#" method="get" class="sidebar-form">-->
<!--                <div class="input-group">-->
<!--                    <input type="text" name="q" class="form-control" placeholder="Search...">-->
<!--                    <span class="input-group-btn">-->
<!--              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>-->
<!--              </button>-->
<!--            </span>-->
<!--                </div>-->
<!--            </form>-->
            <!-- /.search form -->

            <!-- Sidebar Menu -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">Меню</li>
                <?php
                if (Yii::$app->user->identity->isAdmin()):
                ?>
                <!-- Optionally, you can add icons to the links -->
                <li class="<?=active("/admin/main/index")?>"><a href="<?=\yii\helpers\Url::to(['main/index'])?>"><i class="fa fa-home"></i> <span>Главная</span></a></li>
                <li class="<?=active("/admin/dialogue/dialogues")?>"><a href="<?=\yii\helpers\Url::to(['dialogue/dialogues'])?>"><i class="fa fa-comments"></i> <span>Сообщения </span></a></li>
                <li class="<?=active("/admin/coach/index")?>"><a href="<?=\yii\helpers\Url::to(['coach/index'])?>"><i class="fa fa-users"></i> <span>Тренеры </span></a></li>
                <li class="<?=active("/admin/data-u/personal")?>"><a href="<?=\yii\helpers\Url::to(['data-u/personal'])?>"><i class="fa fa-users"></i> <span>Информация о клиентах </span></a></li>
                <li class="<?=active("/admin/data-u/index")?>"><a href="<?=\yii\helpers\Url::to(['data-u/index'])?>"><i class="fa fa-users"></i> <span>Подписчики (<?=DataU::getSubscribers()?>)</span></a></li>
                <li class="<?=active("/admin/programs/index")?>"><a href="<?=\yii\helpers\Url::to(['programs/index'])?>"><i class="fa fa-file-excel-o"></i> <span>Программы</span></a></li>
                <li class="<?=active("/admin/programs/replacement")?>"><a href="<?=\yii\helpers\Url::to(['programs/replacement'])?>"><i class="fa fa-file-excel-o"></i> <span>Программы на замену (<?=\app\modules\admin\models\Programs::getReplacement()?>)</span></a></li>
                <li class="<?=active("/admin/contact/index")?>"><a href="<?=\yii\helpers\Url::to(['contact/index'])?>"><i class="fa fa-link"></i> <span>Обратная связь</span></a></li>
                <?php
                else:
                ?>
                <li class="<?=active("/admin/main/index")?>"><a href="<?=\yii\helpers\Url::to(['main/index'])?>"><i class="fa fa-link"></i> <span>Главная</span></a></li>
                <li class="<?=active("/admin/contact/index")?>"><a href="<?=\yii\helpers\Url::to(['contact/index'])?>"><i class="fa fa-link"></i> <span>Обратная связь</span></a></li>
                <?endif;?>
                <!--                <li class="treeview">-->
<!--                    <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>-->
<!--                        <span class="pull-right-container">-->
<!--                <i class="fa fa-angle-left pull-right"></i>-->
<!--              </span>-->
<!--                    </a>-->
<!--                    <ul class="treeview-menu">-->
<!--                        <li><a href="#">Link in level 2</a></li>-->
<!--                        <li><a href="#">Link in level 2</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Панель администратора

            </h1>
<!--            <ol class="breadcrumb">-->
<!--                <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>-->
<!--                <li class="active">Here</li>-->
<!--            </ol>-->
        </section>

        <!-- Main content -->
        <section class="content container-fluid">

            <!--------------------------
              | Your Page Content Here |
              -------------------------->

            <?= $content ?>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->

        <!-- Default to the left -->
        <strong> &copy; South Admin <?=date('Y')?> </strong>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
            <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane active" id="control-sidebar-home-tab">
                <h3 class="control-sidebar-heading">Recent Activity</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:;">
                            <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                                <p>Will be 23 on April 24th</p>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

                <h3 class="control-sidebar-heading">Tasks Progress</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:;">
                            <h4 class="control-sidebar-subheading">
                                Custom Template Design
                                <span class="pull-right-container">
                    <span class="label label-danger pull-right">70%</span>
                  </span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

            </div>
            <!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
            <!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class="tab-pane" id="control-sidebar-settings-tab">
                <form method="post">
                    <h3 class="control-sidebar-heading">General Settings</h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Report panel usage
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Some information about this general settings option
                        </p>
                    </div>
                    <!-- /.form-group -->
                </form>
            </div>
            <!-- /.tab-pane -->
        </div>
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
    immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
