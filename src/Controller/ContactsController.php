<?php
declare(strict_types=1);

namespace App\Controller;

use App\Form\ContactForm;

/**
 * Contacts Controller
 *
 */
class ContactsController extends AppController
{
    public function index()
    {
        $form = new ContactForm();
        if ($this->request->is('post')) {
            if ($form->execute($this->request->getData())) {
                $this->Flash->success('We have received your contact request');
            } else {
                $this->Flash->error('Check the form');
            }
        }
        $this->set('form', $form);
    }
}
