<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FormError
 *
 *
 */

namespace AdminBundle\Services;

use Symfony\Component\Form\Form;

class FormError {

    public function getArray(Form $form) {
        return $this->getErrors($form);
    }

    public function generateMessage(Form $form) {
        return $this->getErrors($form);
    }

    private function getErrors($form) {
        $errors = array();

        if ($form instanceof Form) {

            // соберем ошибки элемента
            foreach ($form->getErrors() as $error) {

                $errors[] = $error->getMessage();
            }

            // пробежимся под дочерним элементам
            foreach ($form->all() as $key => $child) {
                /** @var $child \Symfony\Component\Form\Form */
                if ($err = $this->getErrors($child)) {
                    $errors[$key] = $err;
                }
            }
        }

        return $errors;
    }

}
