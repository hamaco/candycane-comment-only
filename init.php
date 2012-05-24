<?php

$pluginContainer = ClassRegistry::getObject('PluginContainer');
$pluginContainer->installed('cc_comment_only','0.1');

$hookContainer = ClassRegistry::getObject('HookContainer');
$hookContainer->registerElementHook(
  'issues/history', // target element name.
  '../../Plugin/CcCommentOnly/View/Element/comment_only', // additional template you want to inject.
  false // it should be true when you want to inject before the target template.
);
