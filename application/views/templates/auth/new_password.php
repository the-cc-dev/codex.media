<div class="island island--padded island--centered">

    <form class="auth-form" action="" method="post">

        <? switch ($method): ?><? case Model_Auth::TYPE_EMAIL_RESET:?>
                <h3>Восстановление пароля</h3>
            <? break; ?>
            <? case Model_Auth::TYPE_EMAIL_CHANGE:?>
                <h3>Смена пароля</h3>
            <? break; ?>
        <? endswitch; ?>

        <? $regFields = array(
            'password'  => array(
                'label' => 'Новый пароль',
                'type'  => 'password',
            ),
            'password_repeat' => array(
                'label' => 'Повторите пароль',
                'type'  => 'password',
                'id'    => 'password_repeat'
            )
        ); ?>

        <? foreach ($regFields as $fieldName => $field): ?>
            <? if (isset($signup_error_fields[$fieldName])): ?>
                <p class="auth-field__error">
            <? else: ?>
                <p>
            <? endif; ?>
            <input placeholder="<?= Arr::get($field, 'label') ?>" type="<?= Arr::get($field, 'type', 'text') ?>" name="reset_<?= $fieldName?>" id="reset_<?= $fieldName ?>" value="<?= Arr::get($field, 'value') ?>" required />
            </p>
        <? endforeach ?>

        <?= Form::hidden('csrf', Security::token()); ?>

        <? if (!empty($reset_password_error_fields)): ?>
            <? foreach($reset_password_error_fields as $fieldName => $errorText ): ?>
                <div class="auth-form__error"><?= $errorText ?></div>
            <? endforeach; ?>
        <? endif; ?>

        <button class="button master">Отправить</button>

    </form>

</div>