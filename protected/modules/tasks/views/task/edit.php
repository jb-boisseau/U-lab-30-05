<?php
/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2018 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 *
 */

use humhub\widgets\Button;

use humhub\widgets\ModalDialog;
use humhub\widgets\ModalButton;
use humhub\widgets\ActiveForm;
use humhub\widgets\Tabs;

/* @var $taskForm \humhub\modules\tasks\models\forms\TaskForm */

\humhub\modules\tasks\assets\Assets::register($this);

$task = $taskForm->task;

?>

<?php ModalDialog::begin(['header' => $taskForm->getTitle(), 'closable' => false]) ?>

    <?php $form = ActiveForm::begin(['enableClientValidation' => false]); ?>

        <div id="task-form" data-ui-widget="task.Form" data-ui-init>

            <?= Tabs::widget([
                'viewPath' => '@tasks/views/task',
                'params' => ['form' => $form, 'taskForm' => $taskForm],
                'items' => [
                    ['label' => Yii::t('TasksModule.views_index_edit', 'Basic'), 'view' => 'edit-basic', 'linkOptions' => ['class' => 'tab-basic']],
                    ['label' => Yii::t('TasksModule.views_index_edit', 'Scheduling'), 'view' => 'edit-scheduling', 'linkOptions' => ['class' => 'tab-scheduling']],
                    ['label' => Yii::t('TasksModule.views_index_edit', 'Assignment'), 'view' => 'edit-assignment', 'linkOptions' => ['class' => 'tab-assignment']],
                    ['label' => Yii::t('TasksModule.views_index_edit', 'Checklist'), 'view' => 'edit-checklist', 'linkOptions' => ['class' => 'tab-checklist']],
                    ['label' => Yii::t('TasksModule.views_index_edit', 'Files'), 'view' => 'edit-files', 'linkOptions' => ['class' => 'tab-files']]
                ]
            ]); ?>

        </div>

        <hr>

        <div class="modal-footer">
            <div class="col-md-12 text-center">
                <?= ModalButton::submitModal($taskForm->getSubmitUrl()); ?>
                <?= ModalButton::cancel(); ?>
            </div>
        </div>

    <?php ActiveForm::end(); ?>

<?php ModalDialog::end() ?>