<?php if (erLhcoreClassUser::instance()->hasAccessTo('lhchat','sendmail') && (!isset($chat->department->bot_configuration_array['hide_send_email']) || $chat->department->bot_configuration_array['hide_send_email'] == false)) : ?>
<a class="material-icons mr-0 <?php if ($chat->mail_send == 1) : ?>text-success<?php endif; ?>" onclick="lhc.revealModal({'iframe':true,'height':500,'url':WWW_DIR_JAVASCRIPT +'chat/sendmail/<?php echo $chat->id?>'})" title="<?php if ($chat->mail_send == 1) : ?><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/adminchat','Mail was send')?><?php else : ?><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/adminchat','Send mail')?><?php endif;?>">mail</a>
<?php endif; ?>