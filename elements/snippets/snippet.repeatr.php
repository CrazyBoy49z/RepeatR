<?php
$repeatr = $modx->getService('repeatr','RepeatR',$modx->getOption('repeatr.core_path',null,$modx->getOption('core_path').'components/repeatr/').'model/repeatr/',$scriptProperties);
if (!($repeatr instanceof RepeatR)) return '';
