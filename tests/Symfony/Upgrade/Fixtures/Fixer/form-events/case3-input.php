<?php

use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

$builder->addEventListener(FormEvents::POST_BIND, function (FormEvent $event) {
   // ...
});
